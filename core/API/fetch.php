<?php

class Fetch{

  public $result = [];

  public $opts = [
                'http' => [
                        'ignore_errors'=>true,
                        'method' => 'GET',
                        'header' => [
                                'User-Agent: PHP',

                        ]
                ]
        ];

  public function __construct($typeUser){
    $this->typeUser = $typeUser;
    $this->url = "https://api.github.com/users/{$this->typeUser}";
    $this->opts = $this->opts;
  }

  public function fetch(){

      $opts = $this->opts;

      $context = stream_context_create($opts);

      $content = file_get_contents($this->url, false, $context);

      $tt =json_decode($content);

      if(!array_key_exists('message',$tt)){
        $this->result = json_decode($content);
        return $this->result;

      }else{
        die('<h1><h1>SomeThing Wrong The User name not currect , Or API rate limit exceeded !</h1>');

      }

    }


    public function followers(){

      $opts = $this->opts;

      $context = stream_context_create($opts);

      $content = file_get_contents("https://api.github.com/users/{$this->typeUser}/followers", false, $context);

      $tt =json_decode($content);

      if(!array_key_exists('message',$tt)){
        $data = json_decode($content);
        return $data;

      }else{
        echo '<h1>SomeThing Wrong The User name not currect , Or API rate limit exceeded !</h1>';
        exit();

      }

    }





}


// 4381ec3a6d@himail.online
//moj343dde32@emailna.co
// mohammed1999
// mohammed1998
// Mohammed1999
// Mohammed1998
// mohammed@@@123
