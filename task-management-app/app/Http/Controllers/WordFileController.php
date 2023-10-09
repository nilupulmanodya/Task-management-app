<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordFileController extends Controller
{
    public function store(Request $request)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord;


        $data  = 45.00;
        // $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section1 = $phpWord->addSection();
        $text = $section1->addText('Annexure 04',array('name'=>'Calibri','size' => 15,'bold' => false));
        $text = $section1->addText("Internal Memo");
        $text = $section1->addText("To : Chairman of the Faculty Board – Faculty of Geomatics \n From". $data .":\n Date :\n Subject :",array('name'=>'Calibri','size' => 11,'bold' => true),    array(
            'space' => array('before' => 360, 'after' => 280), 
            'indentation' => array('left' => 540, 'right' => 120)
        ));
        
        // $text = 'hello';
        // $text = $section->addText('he he',array('name'=>'Arial','size' => 20,'bold' => true));
        // $section->addImage("./images/prashant.jpg");  
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('CodeSolutionStuff.docx');
        return response()->download(public_path('CodeSolutionStuff.docx'));
    }
}
