<?php


$result = $data->fetch();

$followers = $data->followers();


view("details",["result"=>$result,"followers"=>$followers]);

