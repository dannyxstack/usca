<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/index', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/campus', function () {
    return view('campus', ['title' => 'Campus']);
});
Route::get('/whyus', function () {
    return view('whyus', ['title' => 'Why Us'] );
});
Route::get('/intakedates', function () {
    return view('intake', ['title' => 'Intake Dates'] );
});
Route::get('/promotion', function () {
    return view('promotion', ['title' => 'Promotion Prices'] );
});
Route::get('/findagent', function () {
    return view('findagent', ['title' => 'Find An Agent'] );
});
Route::get('/apply', function () {
    return view('apply', ['title' => 'Apply Now'] );
});
Route::get('/agentlist', function () {
    return view('agentlist', ['title' => 'Agent List'] );
});
Route::get('/student-services', function () {
    return view('studentservice', ['title' => 'Student Services'] );
});
Route::get('/esos-framework-and-tps-information', function () {
    return view('esos', ['title' => 'ESOS Framework & TPS Information'] );
});
Route::get('/policies', function () {
    return view('policies', ['title' => 'Policies, Procedures and Forms'] );
});
Route::get('/enrolment-and-orientation', function () {
    return view('enrolment', ['title' => 'Enrolment and Orientation'] );
});
Route::get('/whyus.html', function () {
    return view('whyus');
});
// Route::get('/colleges', function () {
//     return view('colleges', ['title' => 'Colleges'] );
// });

Route::get('/colleges', [CourseController::class, 'colleges'])->name('course.colleges');
Route::get('/allcourses', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/{code}', [CourseController::class, 'detail'])->name('course.detail');

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
