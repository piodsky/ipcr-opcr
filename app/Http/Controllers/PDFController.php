<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \PDF;
class PDFController extends Controller
{
    public function getPDF(){
    	$pdf = \PDF::loadView('pdf.view');
    	return $pdf->download('view.pdf'); 
    }
}
