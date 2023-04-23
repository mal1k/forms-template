<?php

require_once get_template_directory() . '/vendor/autoload.php'; // Load mpdf library
use \Mpdf\Mpdf;

if ( !empty($_POST) ):
    $pdf = new Mpdf();

    // Add HTML code to PDF document
    $pdf->WriteHTML($content);

    // Save the PDF document to a variable
    $pdfname ='form'.$form_id;
    $pdfURL = get_template_directory().'/'.$pdfname.'.pdf';
    echo $pdf->Output($pdfURL, 'F');
    echo $pdf->Output($pdfname.'.pdf', 'D'); # remove on prod

    // Set parameters for sending a letter
    $to = 'valeriy.env@gmail.com';
    $subject = 'New PDF Document of form #'.$form_id;
    $message = 'In this letter you will find a PDF document.';
    $headers = array('Content-Type: application/pdf');

    // Attach a PDF document to an email
    $attachments = array($pdfURL);
    wp_mail($to, $subject, $message, $headers, $attachments);

    // wp_redirect('/');
endif;