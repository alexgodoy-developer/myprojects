<?php

// echo '<h2>Olá Mundo</h2>';

// echo "<p><Olá Mundo>", " ", "<span class='tag'>#BoraProgramar!</span>", "</p>"; 

// $hello = "Olá Mundo!";
// $code = "<span class='tag'>#BoraProgramar!</span>";

// echo "<p>$hello</p>"; // aspas duplas pega o conteúdo e protege a variavel
// echo '<p>$hello</p>'; // aspas simples pega a variavel

// $day = "dia";
// echo "<p>Faltam 2 {$day}s para o evento</p>";

// echo "<h3>{$hello}</h3>";
// echo "<h4>{$hello} {$code}</h4>";
// echo "<h3>" . "{$hello}" . "{$code}" . "</h3>";

?>

// //linha de HTML5
// <h4><?="{$hello}"?> <?="{$code}"?></h4>
// <h4><?=$hello;?> <?=$code;?></h4> // variação do mesmo

<?php

// comando ECHO e PRINT é apenas para exibir STRINGS...

// $array = [
//     "company" => "OGAM-DB",
//     "course" => "PHP-FS",
//     "class" => "Comandos de saída"
// ];

// echo"<pre>";
// print_r($array);
// echo"</pre>";

// echo $array;
// print $array;

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "O .NET é uma infra-estrutura de software criada pela Microsoft 
para a criação e execução de aplicações. A parte principal do .NET é o Common 
Language Runtime (CLR), que provê uma série recursos aos programas, como gerenciamento
de memória para as aplicações. Além disso, há um vasto conjunto de bibliotecas 
de componentes prontos para uso. As instruções das linguagens de programação 
são traduzidas para intermediate language (IL) reconhecida pelo CLR, permitindo 
que várias linguagens sejam usadas.";

printf($article, $title, $subtitle);

$company = "<article><h1>Escola %s</h1><p>Curso<b> %s</b></p></article>";
vprintf($company, $array);


echo'<pre>';
var_dump(
    $array,
    $hello,
    $company
);
echo'</pre>';

