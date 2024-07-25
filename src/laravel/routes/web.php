<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function() {
    Route::get('messages', [MessageController::class, 'getMessages']);
});

// Маршрут для отдачи файлов CSS
Route::get('/css/{file}', function ($file) {
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    if (isset($manifest["resources/sass/{$file}"])) {
        $path = public_path('build/' . $manifest["resources/sass/{$file}"]["file"]);
        if (file_exists($path)) {
            return response()->file($path, ['Content-Type' => 'text/css']);
        }
    }
    abort(404);
});

// Маршрут для отдачи файлов JavaScript
Route::get('/js/{file}', function ($file) {
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    if (isset($manifest["resources/js/{$file}"])) {
        $path = public_path('build/' . $manifest["resources/js/{$file}"]["file"]);
        if (file_exists($path)) {
            return response()->file($path, ['Content-Type' => 'application/javascript']);
        }
    }
    abort(404);
});

// Маршрут для отдачи основной страницы
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');