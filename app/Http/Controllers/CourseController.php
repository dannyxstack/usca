<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller {

    public function index() {
        $courses = Course::all();
        $title = 'All Courses';
        $menu1 = 'all-courses';
        return view('allcourses', compact(
            'courses',
            'title', 'menu1',
        ));
    }

    public function colleges() {
        $courses = Course::all();
        foreach ($courses as &$course) {
            if (strtolower($course->college) == 'hospitality') {
                $course->apply_link = 'https://form.jotform.com/252850455284865';
            }
            else {
                $course->apply_link = 'https://form.jotform.com/252428889922068';
            }
        }
        $title = 'Our Colleges';
        $menu1 = 'colleges';
        return view('colleges', compact(
            'courses',
            'title', 'menu1'
        ));
    }

    /**
     * Summary of show detail
     * @param mixed $code
     * @return \Illuminate\Contracts\View\View
     */
    public function detail($code) {
        // 根据代码查找课程
        $course = Course::where('code', $code)->first();
        if (empty($course)) {
            $course = Course::where('cricos_code', $code)->first();
        }
        if (empty($course)) {
            $course = Course::where('kname', $code)->first();
        }
        if (empty($course)) {
            abort(404, 'Course not found');
        }

        if (strtolower($course->college) == 'hospitality') {
            $course->apply_link = 'https://form.jotform.com/252850455284865';
        }
        else {
            $course->apply_link = 'https://form.jotform.com/252428889922068';
        }

        // 分离 Core 和 Elective Units
        // $coreUnits = $course->units->where('type', 'core');
        // $electiveUnits = $course->units->where('type', 'elective');
        $coreUnits = [];
        $electiveUnits = [];
        if (!is_array($course->course_structure)) {
            $course->course_structure = json_decode($course->course_structure, true);
        }
        if (!is_array($course->course_fees)) {
            $course->course_fees = json_decode($course->course_fees, true);
        }
        if (!empty($course->course_structure)) {
            foreach ($course->course_structure as $unit) {
                if (strtolower($unit['type']) === 'core') {
                    $coreUnits[] = $unit;
                } elseif (strtolower($unit['type']) === 'elective') {
                    $electiveUnits[] = $unit;
                }
            }
        }

        // get random 4 courses
        $courses = Course::all()->toArray();
        shuffle($courses);
        $randomCourses1 = array_splice($courses, 0, 4);
        $randomCourses2 = array_slice($courses, 4, 4);
        $randomCourses3 = array_slice($courses, 8, 4);
        $randomCourses4 = array_slice($courses, 12, 4);

        $title = $course->code . ' - ' . $course->name;

        // print_r($coreUnits);exit;
        $menu1 = 'all-courses';

        return view('course-detail', compact(
            'course',
            'coreUnits', 
            'electiveUnits', 
            'randomCourses1',
            'randomCourses2',
            'randomCourses3',
            'randomCourses4',

            'title', 'menu1',
        ));
    }
}