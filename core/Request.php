<?php


class Request{

  public static function uri(){
    return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
  }

  public static function method(){
    return $_SERVER['REQUEST_METHOD'];
  }


  public static function query(){

    if(isset($_SERVER['QUERY_STRING'])){
      $r = trim($_SERVER['QUERY_STRING']);
      $rt =explode('=',$r);
      $fitler_html = htmlentities($rt[1]);
      $filter = filter_var($fitler_html,FILTER_SANITIZE_STRING);

      return $filter;
    }else{
      return '';
    }


  }

}
