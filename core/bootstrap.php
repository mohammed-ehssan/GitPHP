<?php
require 'API/fetch.php';

require 'Routes.php';

require 'Request.php';



$data = new Fetch(Request::query());



function view($name,$data=null){
  if($data !== null){
    extract($data);
  }

  return require "public/{$name}.view.php";
}
