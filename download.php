<?php
    header('Content-disposition: attachment; filename="procesKoupe.pdf"');
    header("Content-type: application/pdf:");
    readfile("img/procesKoupe.pdf");
?>
<?php
    $pdf_email=$_REQUEST['pdf_email'];
    $pdf_mobile=$_REQUEST['pdf_mobil'];
    $br=PHP_EOL;
    $pdf_message="Tento klient si stahl pdf Proces Koupe.".$br."Mobilní telefon: ".$pdf_mobile.$br."Email: ".$pdf_email.PHP_EOL;


    if (($pdf_email !="")&& ($pdf_mobile !="")){
        $from="From: $pdf_email<$pdf_email>\r\nReturn-path: $pdf_email";
        $pdf_subject="Pdf stahnuto ";
        mail("hrbkova.lucka@gmail.com", $pdf_subject, $pdf_message, $from);
    }
?>