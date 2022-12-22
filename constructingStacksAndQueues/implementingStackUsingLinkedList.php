<?php 
require '../LinkedList/ListNode.php';
interface Stack {
    public function push(string $item);
    public function pop();
    public function top();
    public function isEmpty();
}

class Booklist implements Stack{
    private $stack;

    public function __construct(){
        $this->stack = new LinkedList();
    }
    public function push(string $newItem){
        $this->stack->insert($newItem);
    }
    public function pop(): string{
        if($this->isEmpty()){
            throw new UnderFlowException('Stack is empty');
        }else {
            $lastItem = $this->top();
            $this->stack->deleteLast();
            return $lastItem;
        }
    }
    public function top(): string{
        return $this->stack->getNthPosition($this->stack->getSize())->data;
    }
    public function isEmpty(){
        return $this->stack->getSize() == 0;
    }

}

try {
    $programmingBooks = new Booklist();
    $programmingBooks->push("Introduction to PHP 7");
    $programmingBooks->push("Mastering Javascript");
    $programmingBooks->push("Mysql workbens tutorial");
     echo $programmingBooks->pop() . "\n <br>";
     echo $programmingBooks->pop() . "\n <br>";
     echo $programmingBooks->top() . "\n <br>";
}catch(Exception $e){
    echo $e->getMessage();
}