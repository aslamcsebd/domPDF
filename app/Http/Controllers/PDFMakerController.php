<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFMakerController extends Controller {

    public function page($pageNo){

        $data['page'] = "page".$pageNo;

        return view("welcome", $data);
    }
    
    public function print($pageNo){
        $currentPage = "page".$pageNo;
        $data['path'] = 'public_path';

        $pdf = Pdf::loadView($currentPage, $data);

        ($pageNo == 3 ? $set_paper = 'portrait' : $set_paper = 'landscape');

        // $pdf->set_paper("A4", "portrait");
        $pdf->set_paper("A4", $set_paper);
        return $pdf->download('result.pdf');
    }
}
