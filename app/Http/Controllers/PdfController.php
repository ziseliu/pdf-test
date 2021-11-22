<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use PDF;
use setasign\Fpdi\Fpdi;

class PdfController extends Controller
{

    /**
     * pdf 
     *
     * @return void
     */
    public function pdf()
    {
        $content = file_get_contents('http://www.orimi.com/pdf-test.pdf');
        dd($content);
        
        return response()->json(['code' => 0, 'error_msg' => __('book.Success')]);
    }

}
