<?php

$preguntas = [

  [
    'pregunta'=> '1. ¿Cómo se abre y cierra un bloque de código PHP?',
    'respuesta' => 1,
    'name' => 'p1',
    'input' => [ '&lt;?php ?&gt;',
    '/**/',
    '&lt;script&gt;&lt;/script&gt;',
    '&lt;body&gt;&lt;/body&gt;']
  ],
  [
    'pregunta'=> '2. ¿Con qué símbolo se debe empezar el nombre de una variable en PHP?',
    'name'=>'p2',
    'respuesta' => 4,
    'input' => [ '=',
    '==',
    '//',
    '$']
  ],
  [
    'pregunta'=> '3. ¿Con qué símbolo se debe envolver un valor numérico en una variable?',
    'name'=>'p3',
    'respuesta' => 3,
    'input' => [ '\\',
    '/**/',
    'Ninguno, sólo se escribe el número',
    '=']
  ],
  [
    'pregunta'=> '4. ¿Cuál de las siguientes variables está declarada de forma correcta?',
    'name'=>'p4',
    'respuesta' => 4,
    'input' => [ 'edad = 25;',
    'edad = “25”;',
    '$edad == 25;',
    '$edad = 25;']
  ],
  [
    'pregunta'=> '5. ¿Cuáles son los operadores relacionales?',
    'name'=>'p5',
    'respuesta' => 2,
    'input' => [ 
      '+, -, *, /, %, ++, —',
    '&lt;, &gt;, &lt;=, &gt;=, ==, !=',
    '&amp;&amp;, ||, and, or, !',
    '$, &amp;, //, /* */, { }']
  ],

];
