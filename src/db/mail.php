<?php     
class Mail
{
public $to_email;
public $subject;
public $message;
public $headers;
public function __construct($to_email,$subject,$message,$headers)
{ 

mail($to_email,$subject,$message,$headers);
 }
  

}
?>