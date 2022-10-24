<?php

// include "file.org";
// echo"<p>Continuar</p>";

// require"file.input";
// echo"<p>Continuar</p>";

// include "header.php";
include __DIR__ . "/header.php"; // traz o caminho absoluto do <arquivo class=""></arquivo>

$profile = new stdClass();
$profile-> nome = "Alex";
$profile-> company = "OGAM-DEV";
$profile-> email = "ogamdev@email.com";
include __DIR__ . "/profile.php";

$profile = new stdClass();
$profile-> nome = "Danilo";
$profile-> company = "OGAM-DEV";
$profile-> email = "bleach@email.com";
include __DIR__ . "/profile.php";

// echo"<pre>";
// var_dump($profile);
// echo"</pre>";

include __DIR__ . "/config.php";
echo "<h1>" . COURSE . "</h1>";

//require_once __DIR__ . "/config.php";

var_dump(require_once __DIR__ . "/config.php");




