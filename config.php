<?php
define (DB_USER, "root");
define (DB_PASSWORD, "root");
define (DB_DATABASE, "contact");
define (DB_HOST, "localhost:8889");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>