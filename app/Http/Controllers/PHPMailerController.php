<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PHPMailerController extends Controller
{

    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->Host = 'smtp.example.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'dmzhvk@gmail.com';                     //SMTP username
            $mail->Password = '';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom("email@gmail.com", "{$request->name}");
            $mail->addAddress('dmzhvk@gmail.com', 'Admin pharma');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Сообщение с сайта';
            $mail->Body = $request->message;
            $mail->AltBody = "Номер пользователя: {$request->number}";

            $mail->send();
            return redirect('/#feedback')->with('success', 'Сообщение отправлено!');
        } catch (Exception $e) {
            return redirect('/#feedback')->with('danger', 'Сообщение не отправлено!');
        }
    }

}
