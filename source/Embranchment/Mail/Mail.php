<?php

namespace \Embranchment\Mail;

class Mail{

    #
    # Variable 
    #
    public $To;

    #
    # Subject of message email
    #
    public $Subject;

    #
    # Body of message email
    #
    public $Message;

    
    public function Send() {

	mail($this->To,
	     $this->Subject,
	     $this->Message);
    }
}