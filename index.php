<?php

$PATH = $_GET['url'] ?? 'inicio';

if(file_exists($PATH . '.html')){
  include "inicio.html";
} else {
  include "error.html";
}

?>