<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PdfResource;
use App\Models\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Display a listing of PDFs sorted by published_at in descending order.
     */
    public function index()
    {
        $pdfs = Pdf::orderBy('published_at', 'desc')->get();
        
        return PdfResource::collection($pdfs);
    }

    /**
     * Display the specified PDF.
     */
    public function show(Pdf $pdf)
    {
        return new PdfResource($pdf);
    }

    /**
     * Get the latest PDF.
     */
    public function latest()
    {
        $pdf = Pdf::orderBy('published_at', 'desc')->first();
        
        if (!$pdf) {
            return response()->json(['message' => 'No PDFs found'], 404);
        }
        
        return new PdfResource($pdf);
    }
}
