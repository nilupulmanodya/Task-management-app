<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordFileController extends Controller
{
    public function store(Request $request)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord;
    
        $data = 45.00;
    
        // Create a new section
        $section1 = $phpWord->addSection();
    
        // Add text to the section
        $section1->addText('Annexure 04', array('name' => 'Calibri', 'size' => 15, 'bold' => false));
        $section1->addText('Internal Memo');
        $section1->addText('To: Chairman of the Faculty Board – Faculty of Geomatics', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('From: ' . $data . ':', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Date:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Subject:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
    
        // Add additional text to the section
        $section1->addText('Target Group:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Aligning with Faculty Action plan 2019-2023 details:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Goal_No:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Objective_No:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Action_No:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Sub-Action_No:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Sub Activity_No:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Title:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $section1->addText('Introduction:', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
    
        // Add tables to the section
        // Table 1: Funding Sources
        $table1 = $section1->addTable();
        $table1->addRow();
        $table1->addCell('No', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $table1->addCell('Item', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $table1->addCell('Units/Persons', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $table1->addCell('Unit Charge', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        $table1->addCell('Amount', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
    
        // Table 2: Expenditure Details
        $table2 = $section1->addTable();
        $table2->addRow();
        $table2->addCell('No', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
        
        

    // Save the Word document to a file
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save('CodeSolutionStuff.docx');

    // Download the Word document
    return response()->download(public_path('CodeSolutionStuff.docx'));
    
}

}
