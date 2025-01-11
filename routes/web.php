<?php

use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.upload')->name('upload');  // Upload page

Route::prefix('businesses')->group(function () {

    // Import business data
    Route::post('import', [BusinessController::class, 'import'])->name('businesses.import');

    // Show duplicate business data
    Route::get('duplicate', [BusinessController::class, 'duplicate'])->name('businesses.duplicate');

    // merge-duplicates data
    Route::get('merge-duplicates', [BusinessController::class, 'mergeDuplicates'])->name('businesses.mergeDuplicates');

    // General reports for businesses
    Route::get('reports', [BusinessController::class, 'display'])->name('businesses.reports');

    Route::prefix('reports')->group(function () {

        // Display general reports
        Route::get('display', [BusinessController::class, 'display'])->name('businesses.reports.display');

        // City-wise business data reports
        Route::get('city', [BusinessController::class, 'city'])->name('businesses.reports.city');

        // Category + City-wise business data reports
        Route::get('category-city', [BusinessController::class, 'categoryCity'])->name('businesses.reports.categoryCity');

        // Category + Area-wise business data reports
        Route::get('category-area', [BusinessController::class, 'categoryArea'])->name('businesses.reports.categoryArea');

        // Unique listings reports
        Route::get('unique', [BusinessController::class, 'unique'])->name('businesses.reports.unique');

        // Duplicate business listings reports
        Route::get('duplicate', [BusinessController::class, 'reportDuplicate'])->name('businesses.reports.duplicate');

        // Incomplete business listings reports
        Route::get('incomplete', [BusinessController::class, 'incomplete'])->name('businesses.reports.incomplete');

    });

});
