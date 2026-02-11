<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'menu1' => 'home']);
});

Route::get('/index', function () {
    return view('home', ['title' => 'Home', 'menu1' => 'home']);
});

Route::get('/campus', function () {
    return view('campus', ['title' => 'Campus', 'menu1' => 'campus']);
});
Route::get('/whyus', function () {
    return redirect('/why-us');
});
Route::get('/why-us', function () {
    return view('whyus', ['title' => 'Why Us', 'menu1' => 'why-us'] );
});
Route::get('/intakedates', function () {
    return redirect('/intake-dates');
});
Route::get('/intake-dates', function () {
    return view('intake', ['title' => 'Intake Dates', 'menu1' => 'all-courses'] );
});
Route::get('/promotion', function () {
    return redirect('/promotional-prices');
});
Route::get('/promotional-prices', function () {
    return view('promotion', ['title' => 'Promotional Prices', 'menu1' => 'all-courses'] );
});
Route::get('/findagent', function () {
    return redirect('/find-an-agent');
});
Route::get('/find-an-agent', function () {
    return view('findagent', ['title' => 'Find An Agent', 'menu1' => 'agent'] );
});
Route::get('/agentlist', function () {
    return redirect('/agent-list');
});
Route::get('/agent-list', function () {
    return view('agentlist', ['title' => 'Agent List', 'menu1' => 'agent'] );
});
Route::get('/apply', function () {
    return view('apply', ['title' => 'Apply Now', 'menu1' => 'apply'] );
});
Route::get('/student-services', function () {
    return view('studentservice', ['title' => 'Student Services', 'menu1' => 'student-experience'] );
});
Route::get('/esos-framework-and-tps-information', function () {
    return view('esos', ['title' => 'ESOS Framework & TPS Information', 'menu1' => 'student-experience'] );
});
Route::get('/policies', function () {
    return view('policies', ['title' => 'Policies, Procedures and Forms', 'menu1' => 'student-experience'] );
});
Route::get('/enrolment-and-orientation', function () {
    return view('enrolment', ['title' => 'Enrolment and Orientation', 'menu1' => 'student-experience'] );
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
