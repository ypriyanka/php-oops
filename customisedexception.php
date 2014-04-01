<?php
class myexception extends Exception
  {
  public function errmsg()
    {
  
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
    }
  }

$email = "xyz@example...com";

try
  {
  
  if(filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE)
    {
      throw new myexception($email);
    }
  }

catch (myexception $e)
  {
    echo $e->errmsg();
  }
?>