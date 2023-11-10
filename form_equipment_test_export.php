<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

use ayep\SimpleXLSXGen;

ini_set('error_reporting', E_ALL );
ini_set('display_errors', 1 );

require_once __DIR__.'\SimpleXLSXGen.php';


$books = [
    ['ISBN', 'title', 'author', 'publisher', 'ctry' ],
    [618260307, 'The Hobbit', 'J. R. R. Tolkien', 'Houghton Mifflin', 'USA'],
    [908606664, 'Slinky Malinki', 'Lynley Dodd', 'Mallinson Rendel', 'NZ']
];
$xlsx = SimpleXLSXGen::fromArray($books);
//$xlsx->saveAs('books.xlsx'); // or downloadAs('books.xlsx') or $xlsx_content = (string) $xlsx 
$xlsx->downloadAs('books.xlsx');

//
//$data = [
//    ['Normal', '12345.67'],
//    ['Bold', '<b>12345.67</b>'],
//    ['Italic', '<i>12345.67</i>'],
//    ['Underline', '<u>12345.67</u>'],
//    ['Strike', '<s>12345.67</s>'],
//    ['Bold + Italic', '<b><i>12345.67</i></b>'],
//    ['Hyperlink', 'https://github.com/shuchkin/simplexlsxgen'],
//    ['Italic + Hyperlink + Anchor', '<i><a href="https://github.com/shuchkin/simplexlsxgen">SimpleXLSXGen</a></i>'],
//    ['Green', '<style color="#00FF00">12345.67</style>'],
//    ['Bold Red Text', '<b><style color="#FF0000">12345.67</style></b>'],
//    ['Size 32 Font', '<style font-size="32">Big Text</style>'],
//    ['Blue Text and Yellow Fill', '<style bgcolor="#FFFF00" color="#0000FF">12345.67</style>'],
//    ['Border color', '<style border="#000000">Black Thin Border</style>'],
//    ['<top>Border style</top>','<style border="medium"><wraptext>none, thin, medium, dashed, dotted, thick, double, hair, mediumDashed, dashDot,mediumDashDot, dashDotDot, mediumDashDotDot, slantDashDot</wraptext></style>'],
//    ['Border sides', '<style border="none dotted#0000FF medium#FF0000 double">Top No + Right Dotted + Bottom medium + Left double</style>'],
//    ['Left', '<left>12345.67</left>'],
//    ['Center', '<center>12345.67</center>'],
//    ['Right', '<right>Right Text</right>'],
//    ['Center + Bold', '<center><b>Name</b></center>'],
//    ['Row height', '<style height="50">Row Height = 50</style>'],
//    ['Top', '<style height="50"><top>Top</top></style>'],
//    ['Middle + Center', '<style height="50"><middle><center>Middle + Center</center></middle></style>'],
//    ['Bottom + Right', '<style height="50"><bottom><right>Bottom + Right</right></bottom></style>'],
//    ['<center>MERGE CELLS MERGE CELLS MERGE CELLS MERGE CELLS MERGE CELLS</center>', null],
//    ['<top>Word wrap</top>', "<wraptext>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</wraptext>"],
//];
//SimpleXLSXGen::fromArray($data)
//    ->setDefaultFont('Courier New')
//    ->setDefaultFontSize(14)
//    ->setColWidth(1, 35)
//    ->mergeCells('A20:B20')
//    ->saveAs('styles_and_tags.xlsx');

//SimpleXLSXGen::fromArray($data)->saveAs('datatypes.xlsx');


// Classic interface
//use ayep\SimpleXLSXGen;
//$xlsx = new SimpleXLSXGen();
//$xlsx->addSheet( $books, 'Catalog 2023' );
//$xlsx->addSheet( $books2, 'Sample catalog');
//$xlsx->downloadAs('books_2021.xlsx');
//exit();
//
//// Autofilter
//$xlsx->autoFilter('A1:B10');
//
//// Freeze rows and columns from top-left corner up to, but not including,
//// the row and column of the indicated cell
//$xlsx->freezePanes('C3');
//
//// RTL mode
//// Column A is on the far right, Column B is one column left of Column A, and so on. Also, information in cells is displayed in the Right to Left format.
//$xlsx->rightToLeft();
//
//// Set Meta Data Files
//// this data in propertis Files and Info file in Office 
//$xlsx->setAuthor('Ayep <zbqb9x@onsemi.com>')
//    ->setCompany('onsemi <info@onsemi.com>')
//    ->setManager('Farhan <bill.gates@microsoft.com>')
//    ->setLastModifiedBy("Ayep <zbqb9x@onsemi.com>")
//    ->setTitle('This is Title')
//    ->setSubject('This is Subject')
//    ->setKeywords('Keywords1, Keywords2, Keywords3, KeywordsN')
//    ->setDescription('This is Description')
//    ->setCategory('This is Сategory')
//    ->setLanguage('en-US')
//    ->setApplication('ayep\SimpleXLSXGen');

//ini_set('error_reporting', E_ALL );
//ini_set('display_errors', 1 );
//
//$csv = \ayep\SimpleCSV::import('\uploaded_img\test_date_copy_nk_upload.xlsx');
//print_r( $csv->rows() );