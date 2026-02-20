<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'menu1' => 'home',
        'description' => 'Unity Skills College of Health is a leading CRICOS & RTO registered vocational education provider in Australia, home to Unity Skills College of Health and Hospitality. Enrol in quality courses today!',
        'keywords' => 'Unity Skills College of Health, vocational education provider, CRICOS registered, RTO registered, courses in Australia, health courses, hospitality courses',
    ]);
});

Route::get('/index', function () {
    return view('home', ['title' => 'Home', 'menu1' => 'home',
        'description' => 'Unity Skills College of Health is a leading CRICOS & RTO registered vocational education provider in Australia, home to Unity Skills College of Health and Hospitality. Enrol in quality courses today!',
        'keywords' => 'Unity Skills College of Health, vocational education provider, CRICOS registered, RTO registered, courses in Australia, health courses, hospitality courses',
    ]);
});

Route::get('/campus', function () {
    return view('campus', ['title' => 'Campus', 'menu1' => 'campus',
        'description' => 'Discover our modern campus facilities at Unity Skills College of Health, designed to provide a supportive and engaging learning environment for our students. Explore our state-of-the-art classrooms, practical training areas, and student amenities that enhance your educational experience.',
        'keywords' => 'Unity Skills College of Health campus, modern facilities, learning environment, classrooms, practical training areas, student amenities',
    ]);
});
Route::get('/whyus', function () {
    return redirect('/why-us');
});
Route::get('/why-us', function () {
    return view('whyus', ['title' => 'Why Us', 'menu1' => 'why-us',
        'description' => 'Discover why Unity Skills College of Health is the preferred choice for vocational education in Australia. With our industry-aligned courses, experienced trainers, and supportive learning environment, we empower students to achieve their career goals and succeed in the competitive job market.',
        'keywords' => 'Unity Skills College of Health, vocational education, industry-aligned courses, experienced trainers, supportive learning environment, career goals, job market success',
    ]);
});
Route::get('/intakedates', function () {
    return redirect('/intake-dates');
});
Route::get('/intake-dates', function () {
    return view('intake', ['title' => 'Intake Dates', 'menu1' => 'all-courses',
        'description' => 'Stay informed about the latest intake dates for our courses at Unity Skills College of Health. Plan your enrollment and kickstart your vocational education journey with us. Check out the upcoming intake schedule and secure your spot in our quality courses today!',
        'keywords' => 'Unity Skills College of Health intake dates, course enrollment, vocational education schedule, upcoming intakes, secure your spot, quality courses in Australia',
    ]);
});
Route::get('/promotion', function () {
    return redirect('/promotional-prices');
});
Route::get('/promotional-prices', function () {
    return view('promotion', ['title' => 'Promotional Prices', 'menu1' => 'all-courses',
        'description' => 'Discover our latest promotional prices at Unity Skills College of Health and take advantage of special offers on our quality courses. Enroll now to secure your spot and benefit from discounted rates on our vocational education programs in Australia.',  
        'keywords' => 'Unity Skills College of Health promotional prices, special offers, quality courses, vocational education programs, discounted rates, enroll now, secure your spot in Australia',
    ] );
});
Route::get('/findagent', function () {
    return redirect('/find-an-agent');
});
Route::get('/find-an-agent', function () {
    return view('findagent', ['title' => 'Find An Agent', 'menu1' => 'agent',
        'description' => 'Find an authorized agent of Unity Skills College of Health to assist you with your enrollment and provide guidance on our courses. Our agents are knowledgeable about our programs and can help you navigate the application process. Connect with a trusted agent today to start your journey with us.',
        'keywords' => 'Unity Skills College of Health agents, authorized agents, enrollment assistance, course guidance, application process, trusted agents, vocational education support',
    ] );
});
Route::get('/agentlist', function () {
    return redirect('/agent-list');
});
Route::get('/agent-list', function () {
    return view('agentlist', ['title' => 'Agent List', 'menu1' => 'agent', 
        'description' => 'Explore our comprehensive list of authorized agents for Unity Skills College of Health, your trusted partners in navigating the enrollment process and providing guidance on our courses. Connect with knowledgeable agents who can assist you in making informed decisions about your vocational education journey with us.',
        'keywords' => 'Unity Skills College of Health agents, authorized agents, enrollment assistance, course guidance, application process, trusted agents, vocational education support',
    ] );
});
Route::get('/apply', function () {
    return view('apply', ['title' => 'Apply Now', 'menu1' => 'apply', 
        'description' => 'Ready to take the next step in your vocational education journey? Apply now to join Unity Skills College of Health and gain access to our quality courses, experienced trainers, and supportive learning environment. Start your application process today and secure your spot in our programs designed to help you achieve your career goals.',
        'keywords' => 'Unity Skills College of Health apply now, vocational education application, enrollment process, quality courses, experienced trainers, supportive learning environment, career goals, secure your spot',
    ] );
});
Route::get('/student-services', function () {
    return view('studentservice', ['title' => 'Student Services', 'menu1' => 'student-experience', 
        'description' => 'Explore the comprehensive student services offered at Unity Skills College of Health, designed to support your educational journey and enhance your learning experience. From academic support and career guidance to counseling and student activities, we are committed to providing a supportive environment that helps you succeed in your vocational education goals.',
        'keywords' => 'Unity Skills College of Health student services, academic support, career guidance, counseling, student activities, supportive environment, vocational education success',
    ] );
});
Route::get('/esos-framework-and-tps-information', function () {
    return view('esos', ['title' => 'ESOS Framework & TPS Information', 'menu1' => 'student-experience', 
        'description' => 'Learn about the ESOS Framework and Tuition Protection Service (TPS) information at Unity Skills College of Health. We are committed to ensuring the rights and protection of our international students while providing quality education in Australia.',
        'keywords' => 'Unity Skills College of Health ESOS Framework, Tuition Protection Service, TPS information, international student protection, quality education in Australia',
    ] );
});
Route::get('/policies', function () {
    return view('policies', ['title' => 'Policies, Procedures and Forms', 'menu1' => 'student-experience',
        'description' => 'Explore the policies, procedures, and forms at Unity Skills College of Health that govern our operations and ensure a smooth educational experience for our students. Familiarize yourself with our guidelines and requirements to make the most of your vocational education journey with us.',
        'keywords' => 'Unity Skills College of Health policies, procedures, forms, educational experience, vocational education guidelines, student requirements', 
    ] );
});
Route::get('/enrolment-and-orientation', function () {
    return view('enrolment', ['title' => 'Enrolment and Orientation', 'menu1' => 'student-experience',
        'description' => 'Get ready for your enrolment and orientation at Unity Skills College of Health. We provide a comprehensive orientation program to help you settle in and make the most of your educational experience. Learn about the enrolment process, important dates, and what to expect during your orientation.',
        'keywords' => 'Unity Skills College of Health enrolment, orientation program, educational experience, enrolment process, important dates, student orientation', 
    ] );
});

// Route::get('/colleges', function () {
//     return view('colleges', ['title' => 'Colleges'] );
// });

Route::get('/colleges', [CourseController::class, 'colleges']);
Route::get('/allcourses', function () {
    return redirect('/all-courses');
});
Route::get('/all-courses', [CourseController::class, 'index']);
Route::get('/course/{code}', [CourseController::class, 'detail']);

Route::get('/course/chc33021', function () {
    return view('course-detail-chc33021');
});

// Route::get('/contact', function () {
//     return view('contact', ['title' => 'Contact Us']);
// });
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/debug-csrf', function() {
    return response()->json([
        'csrf_token' => csrf_token(),
        'session_id' => session()->getId(),
        'session_status' => session()->isStarted() ? 'started' : 'not started',
        'session_driver' => config('session.driver'),
        'session_lifetime' => config('session.lifetime'),
        'session_domain' => config('session.domain'),
        'app_url' => config('app.url'),
        'app_env' => config('app.env'),
        'all_middleware' => array_merge(
            app('router')->getMiddlewareGroups()['web'] ?? [],
            app('router')->getMiddlewareGroups()['api'] ?? []
        ),
        'has_verify_csrf' => in_array(
            \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
            app('router')->getMiddlewareGroups()['web'] ?? []
        ),
    ]);
});

Route::post('/test-csrf', function() {
    return response()->json(['message' => 'CSRF token is valid!']);
})->middleware('web');

Route::get('/test-csrf-setup', function() {
    // 检查中间件是否注册
    $webMiddleware = app('router')->getMiddlewareGroups()['web'] ?? [];
    $hasCsrf = in_array(
        \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
        $webMiddleware
    );
    
    return response()->json([
        'has_csrf_in_web_group' => $hasCsrf,
        'web_middleware' => $webMiddleware,
        'csrf_token' => csrf_token(),
        'session_id' => session()->getId(),
    ]);
});

Route::post('/test-csrf-post', function() {
    return response()->json(['message' => 'CSRF验证成功！']);
});
