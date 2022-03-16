<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome',
            'author' => "SquidSoft.tech"
        ];
          
        // $pdf = PDF::loadView('pdf_image_doc-0.jpg');
        $pdf = PDF::loadView('doc')->setOptions(['defaultFont' => 'sans-serif']);
    
        // return $pdf->download('onlinewebtutorblog.pdf');
        return $pdf->download('public/filename.pdf');
    }
}
