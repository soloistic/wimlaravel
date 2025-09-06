<?php

use App\Http\Controllers\Api\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/pdfs', [PdfController::class, 'index']);
Route::get('/pdfs/latest', [PdfController::class, 'latest']);
Route::get('/pdfs/{pdf}', [PdfController::class, 'show']);
