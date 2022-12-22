<?php
// Real life using of stack: browser histories, stack trace 
$books = new SplStack();
$books->push("Introduction to PHP7");
$books->push("Mastering Javascript");
$books->push("MySQL Workbench tutorial");
echo $books->pop() . "\n <br>";
echo $books->top() . "\n <br>";
?>