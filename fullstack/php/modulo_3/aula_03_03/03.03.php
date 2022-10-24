<?php

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band1" => "AC/DC",
    "band2" => "Nirvana",
    "band3" => "Alter Bridge"
];

array_unshift($index, "", "Pearl Jam");
$assoc = ["band4" => "Pearl Jam", "band5" => ""] + $assoc;
array_push($index, "");
$assoc = $assoc + ["band6" => ""];

array_shift($index);
array_shift($assoc);

array_pop($index);
array_pop($assoc);

array_unshift($index, "");

$index = array_filter($index);
$assoc = array_filter($assoc);

echo"<pre>";
var_dump($index, $assoc);
echo"</pre>";

//---------------------------------------------------------

$index = array_reverse($index);
$assoc = array_reverse($assoc);

// asort($index);
// asort($assoc);

// ksort($index);
// krsort($assoc)

sort($index);
rsort($assoc);

echo"<pre>";
var_dump($index, $assoc);
echo"</pre>";

echo"<pre>";
var_dump(
    [
    array_keys($assoc),
    array_values($assoc)
    ]
);
echo"</pre>";


if(in_array("AC/DC", $assoc)){
    echo "<p>Cause in Back</p>";
}

$arrToString = implode(", ", $assoc);
echo"<p>Eu curto {$arrToString} e muitas outras</p>";
echo"<p>{$arrToString}</p>";

echo"<pre>";
var_dump(explode(", ", $arrToString));
echo"</pre>";

//---------------------------------------------------------------------

$profile = [
    "name" => "Alex",
    "company" => "Upinside",
    "mail" => "developer@email.com"
];

$template = <<<TPL

    <article>
       <h1>{{name}}</h1>
       <p>{{company}}<br/>
       {{mail}}</p>
    </article>

TPL;

echo $template;

echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";
    echo $replaces;

// echo"<pre>";
// var_dump(explode("&", $replaces));
// echo"</pre>";

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);




