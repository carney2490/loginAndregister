<?php

  $connect = new mysqli ('127.0.0.1', 'root', "" ,'logintest') or die ('could not connect');

if ($connect -> connect_error){
    die('connection failed');
} 






?>