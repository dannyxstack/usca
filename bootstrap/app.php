<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\ShareCoursesForMenu;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // $middleware->web(append: [
            // \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
            // \Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class, // 这个是个操蛋的类，不生效
        // ]);
        // $middleware->validateCsrfTokens();
        $middleware->append(ShareCoursesForMenu::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
