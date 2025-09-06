<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with magazine covers.
     */
    public function index()
    {
        $pdfs = Pdf::orderBy('published_at', 'desc')->get();
        
        return view('home', compact('pdfs'));
    }

    /**
     * Display the privacy policy page.
     */
    public function privacy()
    {
        return view('privacy');
    }

    /**
     * Display the about us page.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the events page.
     */
    public function events()
    {
        return view('events');
    }

    /**
     * Display a specific magazine page.
     */
    public function magazine(Pdf $pdf)
    {
        return view('magazine', compact('pdf'));
    }
}
