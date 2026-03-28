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
        $pdfs = Pdf::orderBy('published_at', 'desc')->take(3)->get();
        
        return view('home', compact('pdfs'));
    }

    /**
     * Display all magazines grouped by year.
     */
    public function voiceOfFaith()
    {
        $groupedPdfs = Pdf::orderBy('published_at', 'desc')
            ->get()
            ->groupBy(function($pdf) {
                return \Carbon\Carbon::parse($pdf->published_at)->year;
            });
            
        return view('voice-of-faith', compact('groupedPdfs'));
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
