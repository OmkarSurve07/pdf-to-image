<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imagick;

class ImageController extends Controller
{
    //
    function index()
    {
        $imgExt = new Imagick();
        $imgExt->setResolution(300, 300);
        $imgExt->readImage(public_path('e-sign updated roadmap.pdf'));
        $imgExt->writeImages('pdf_image_doc.jpg', true);
        dd("Document has been converted");
    }
}
