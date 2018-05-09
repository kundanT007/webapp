<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'sabai6_c716006');
define('DB_PASSWORD', 'secret123#');
define('DB_DATABASE', 'sabai6_nhnepal');

class dbConnect
{
  public function __construct()
   {
     $this->db=new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);


   }
}
?>