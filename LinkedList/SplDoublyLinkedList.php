<?php
// The PHP Standard PHP Library (SPL) ahs an implementation of a doubly linked list,
// which is known as SplDoublyLinkedList. if we are using the built-in class,
// we do not need to implement the doubly linked list ourselves. 
//The doubly linked list implementation acually works as a stack and queue as well. 
//The PHP implementation of the doubly linked list has lots of additional functionalities.

/**
 * methods list of SPlDoublyLinkedList:
 * 
 * Method list          Description
 * Add                  Adds a new node in a specified index
 * Bottom               Peeks a node from beginning of list
 * Count                Returns the size of the list
 * Current              Returns the current node
 * getIteratorMode      Returns the mode of iteration
 * setIteratorMode      Sets the mode of iteration. For example, LIFO, FIFO, and so on
 * Key                  Returns the current node index
 * Next                 Moves to the next node
 * Pop                  Pops a node from the ned of the list
 * Prev                 Moves to the previous node
 * push                 Adds a new node at the end of the list
 * rewind               Rewinds the iterator back to the top
 * shift                Shifts a node from the beginnning of the list               
 * top                  Peeks a node from the ned of the list
 * unshift              Prepends an element in the list
 * valid                Checks whether there are any mode nodes in the list
 */

    $bookTitles = new SplDoublyLinkedList();
    $bookTitles->push("Introduction to Algroithm");
    $bookTitles->push("Introduction to PHP and Data structures");
    $bookTitles->push("Programming Intelligence");
    $bookTitles->push("Mediawiki administrative tutorial guide");
    $bookTitles->add(1, "introduction to Calculus");
    $bookTitles->add(3, "introduction to Graph Theory");

    for ($bookTitles->rewind();$bookTitles->valid(); $bookTitles->next()){
        echo $bookTitles->current(). "\n <br>";
    }
?>