<!-- contact form -->
<?php
    $action=$_REQUEST['action'];
    $url;

    if ($action=="")    /* display the contact form */

        {
    ?>
        <form action="<?=$url;?>" id ="form" method="POST" enctype="multipart/form-data" name="EmailTestForm">
            <input type="hidden" name="action" value="submit">

            <label for="jmeno">Jméno</label><br>
            <input type="text" id="jmeno" name="jmeno" placeholder="Jméno" required><div class="required"></div>
            <label for="cislo">Mobil</label><br>
            <input type="number" id="cislo" name="mobil" placeholder="Telefonní číslo" required><div class="required"></div>
            <label for="eadresa">Email</label><br>
            <input type="email" id="adresa"  name="email" placeholder="E-mail" required><div class="required"></div>
            <label for="zprava">Text zprávy</label><br>
            <textarea name="zprava" id="" rows="10" placeholder="Text zprávy"></textarea>
            <br>
            <input type="submit" value="ODESLAT" class="submit" id="form_button">
        </form>





<?php
        } 
        else                /* send the submitted data */
        {
            $name=$_REQUEST['jmeno'];
            $mobil=$_REQUEST['mobil'];
            $email=$_REQUEST['email'];
            $message=$_REQUEST['zprava'];
            $br=PHP_EOL;
            $messageToMail="Jméno klienta: ".$name.PHP_EOL."Mobilní telefon: ".$mobil.PHP_EOL."Email: ".$email.PHP_EOL."zpráva od klienta: ".PHP_EOL.$message." ";
            

            if (($name=="")||($mobil=="")||($email=="")||($message==""))
            {
                echo "<h3 class=\"white emailMessage\">All fields are required, please fill <a href=\"\">the form</a> again.</h3>";
            }
            else
            {		
                $from="From: $name<$email>\r\nReturn-path: $email";
                $subject="Zpráva z webu Nikolabartonickova.com";
                mail("hrbkova.lucka@gmail.com", $subject, $messageToMail, $from);
                mail("nikola.bartonickova@4fin.cz", $subject, $messageToMail, $from);
                echo "<div class=\"emailMessage\" id=\"finalMessage\"><h3>Děkuji za Vaší zprávu!<br>Brzy se Vám ozvu.<br><br>Nikola </h3></div>";
            }
        }  
?>