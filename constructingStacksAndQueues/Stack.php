<?php

interface Stack {
    public function push(string $item);
    public function pop();
    public function top();
    public function isEmpty();
}

class Books implements Stack {
    private $limit;
    private $stack;
    public function __construct(int $limit = 20){
        $this->limit = $limit;
        $this->stack = [];
    }
    public function push(string $newItem){
        if(count($this->stack) < $this->limit) {
            array_push($this->stack, $newItem);
        }else {
            throw new OverflowException('stack is full');
        }
    }
    public function pop(): string{
            if($this->isEmpty()){
                throw new UnderflowException('stack is empty');
            }else {
                return array_pop($this->stack);
            }
    }
    public function top(){
        return end($this->stack);
    }
    public function isEmpty(){
        return empty($this->stack);
    }
}


try {
    //code...
    $programmingBooks = new Books(10);
    $programmingBooks->push("Introduction to PHP 7");
    $programmingBooks->push("Mastering Javascript");
    $programmingBooks->push("Mysql workbens tutorial");
     echo $programmingBooks->pop() . "\n <br>";
     echo $programmingBooks->top() . "\n <br>";
} catch (Exception $exception) {
    //throw $th;
}