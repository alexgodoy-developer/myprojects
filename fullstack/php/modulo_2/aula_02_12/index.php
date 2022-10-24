<?php

define("COURSE", "Full Stack PHP");

const AUTHOR = "Alex";

$information = true;
if($information){
    define("COURSE_TYPE", "Formação");
}else{
    define("COURSE_TYPE", "Course");
}

echo"<p>COUSER_TYPE COURSE AUTHOR</p>";
echo"<p>{COUSER_TYPE} {COURSE} {AUTHOR}</p>";
echo"<p>", COURSE_TYPE, " ", COURSE, " de ", AUTHOR, "</p>";
echo"<p>" . COURSE_TYPE . " " . COURSE . " de " . AUTHOR . "</p>";

class Config
{
    const USER = "root";
    const HOST = "loacalhost";
}

echo "<p>", Config::HOST,"</p>";
echo "<p>", Config::USER,"</p>";

echo"<pre>";
var_dump(get_defined_constants(true)["user"]);
echo"</pre>";

//----------------------------------------------------------

echo"<pre>";
var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);
echo"</pre>";

//--------------------------------------------------

function fullStackaPhp(){
    return __FUNCTION__;
}

var_dump(fullStackaPhp());

//--------------------------------------------------

trait myTrait
{
    public $traiName = __TRAIT__;
}

class FsPHP
{
    use myTrait;
    public $className = __CLASS__;
}

echo"<pre>";
var_dump(new FsPHP());
echo"</pre>";

//------------------------------------------------------

require __DIR__ . "/myClass.php";
echo"<pre>";
var_dump(new \Source\MyClass());
echo"</pre>";

echo"<pre>";
var_dump(\Source\MyClass::class);
echo"</pre>";