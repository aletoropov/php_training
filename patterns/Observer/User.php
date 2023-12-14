<?php

/**
 * Класс пользователя
 */

 class User implements IObserver 
 {
     private $_email;
     
     public function __construct($email)
     {
         $this->_email = $email;
         DeliveryEmails::getInstance()->addObserver($this);
     }

     public function notify(IObserver $obj, $title)
     {
         if ($obj instanceof IObserver) {
             echo "$title отправлено на $this->_email<br>";
         }
     }
    
 }