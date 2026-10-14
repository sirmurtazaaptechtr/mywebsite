<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::prefix('/test')->group(function () {
    Route::get('/page', function () {
        return "<h1>This is a text Route page</h1>";
    })->name('test');
    
    Route::get('/page/{id}/{type?}', function (int $id, ?string $type = null) {
        $name = "Syed Murtaza Hussain";
        $age = 43;
        $students = [
            'Owais',
            'Barina',
            'Anas',
            'Adin'
        ];

        return view('page', 
        [
            'number' => $id, 
            'cattype' => $type, 
            'name' => $name, 
            'age' => $age,
            'students' => $students
        ]);
    })->whereNumber('id')->whereAlpha('type');

    Route::redirect('/', '/page', 301);
});

Route::fallback(function () {
    return "<h1>Page not found</h1>";
});
