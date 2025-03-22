<?php

/*

Create le seguenti variabili:

	$a = true;

	$b = false;

	$c = 50;

	$d = "";

	$e = [];

	$f = 'test';

	$g = 0;



ed utilizzando var_dump() visualizzate l'esito dei seguenti confronti provando prima a individurare l'esito (true o false):



$a || $b [esempio: var_dump($a || $b); ]

$a && $a

$b || $b

$a || $c

$d || $a

! $a

! $d

! $g

$a && $e

$a && $f

$f && $d

*/

$a = true;

$b = false;

$c = 50;

$d = "";

$e = [];

$f = 'test';

$g = 0;


// var_dump($a || $b); //true

// var_dump($a && $a); //true

// var_dump($b || $b); //false

// var_dump($a || $c); se uno dei due e true restituisce true

// var_dump($d || $a); se uno dei due e true restituisce true

// var_dump(! $a); //false

// var_dump(! $d); //true

// var_dump(! $g); //true

// var_dump($a && $e); //false

// var_dump($a && $f); //true

// var_dump($f && $d); //false
