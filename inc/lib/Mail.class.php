<?php if(!defined('GX_LIB')) die("Direct Access Not Allowed!");
/*
*    GeniXCMS - Content Management System
*    ============================================================
*    Build          : 20140925
*    Version        : 0.0.1 pre
*    Developed By   : Puguh Wijayanto (www.metalgenix.com)
*    License        : MIT License
*    ------------------------------------------------------------
* filename : Mail.class.php
* version : 0.0.1 pre
* build : 20150126
*/



/**
* 
*/
class Mail
{
    static $smtphost    = "";
    static $smtpuser    = "";
    static $smtppass    = "";
    static $smtpssl     = "";
    static $siteemail   = "";
    static $sitename    = "";
    
    function __construct()
    {
        # code...
        self::$smtphost    = Options::get('smtphost');
        self::$smtpuser    = Options::get('smtpuser');
        self::$smtppass    = Options::get('smtppass');
        self::$smtpssl     = Options::get('smtpssl');
        self::$siteemail   = Options::get('siteemail');
        self::$sitename    = Options::get('sitename');
    }

    ## SEND MAIL
    // $vars = array (
    //             'to'         => $to,
    //             'to_name'    => $to_name,
    //             'subject'    => $subject,
    //             'message'    => $message,
    //         );

    public static function send ($vars) {
        //print_r($vars);
        $to = $vars['to'];
        $to_name = $vars['to_name'];
        $subject = $vars['subject'];
        $message = $vars['message'];
        
        require GX_LIB.'/Vendor/PHPMailer/PHPMailerAutoload.php';
        // check if using plain mail or smtp
        $type = Options::get('mailtype');

        if($type == 0) { // use php mail command

            //Create a new PHPMailer instance
            $mail = new PHPMailer;
            //Set who the message is to be sent from
            $mail->setFrom(self::$siteemail, self::$sitename);
            //Set an alternative reply-to address
            $mail->addReplyTo(self::$siteemail, self::$sitename);
            //Set who the message is to be sent to
            $mail->addAddress($to, $to_name);
            //Set the subject line
            $mail->Subject = $subject;
            //Replace the plain text body with one created manually
            $mail->AltBody = $message;

            //send the message, check for errors
            if (!$mail->send()) {
                $mailer = "Mailer Error: " . $mail->ErrorInfo;
            } else {
                $mailer = "Message sent!";
            }
        }elseif ($type == 1) {
            # code...

            //Create a new PHPMailer instance
            $mail = new PHPMailer;
            //Tell PHPMailer to use SMTP
            $mail->isSMTP();
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 2;
            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';
            //Set the hostname of the mail server
            $mail->Host = self::$smtphost;
            //Set the SMTP port number - likely to be 25, 465 or 587
            if(self::$smtpssl == 1) {
                $mail->Port = 587;
            }else{
                $mail->Port = 25;
            }
            
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
            //Username to use for SMTP authentication
            $mail->Username = self::$smtpuser;
            //Password to use for SMTP authentication
            $mail->Password = self::$smtppass;
            //Set who the message is to be sent from
            $mail->setFrom(self::$siteemail, self::$sitename);
            //Set an alternative reply-to address
            $mail->addReplyTo(self::$siteemail, self::$sitename);
            //Set who the message is to be sent to
            $mail->addAddress($to, $to_name);
            //Set the subject line
            $mail->Subject = $subject;
            //Replace the plain text body with one created manually
            $mail->AltBody = $message;

            //send the message, check for errors
            if (!$mail->send()) {
                $mailer = "Mailer Error: " . $mail->ErrorInfo;
            } else {
                $mailer = "Message sent!";
            }
        }

        return $mailer;

    }

}

/* End of file Mail.class.php */
/* Location: ./inc/lib/Mail.class.php */