<?php
require('phpToPDF.php');

    //It is possible to include a file that outputs html and store it in a variable 
    //using output buffering.
$vpd_master_id = $this->vpd_master_id;
    ob_start();
    $this->render('surveillance/pdf-vpd');
 //   include('surveillance/pdf-vpd');
    exit;
    $my_html = ob_get_clean();

    //Set Your Options -- we are saving the PDF as 'my_filename.pdf' to a 'my_pdfs' folder
    $pdf_options = array(
      "source_type" => 'html',
      "source" => $my_html,
      "action" => 'save',
      "save_directory" => 'my_pdfs',
      "file_name" => 'my_filename.pdf');

    //Code to generate PDF file from options above
    phptopdf($pdf_options);
?>