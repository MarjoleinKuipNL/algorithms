<?php 
// A simple linked list to store some names
Class ListNode {
    public $data = NULL;
    public $next = NULL;

    public function __construct(string $data = Null) {
        $this->data = $data;
    }
}

class LinkedList implements Iterator {
    private $_currentNode = NULL;
    private $_currentPosition = 0;
    private $_firstNode = NULL;
    private $_totalNodes = NULL;

    public function current() {
        return $this->_currentNode->data;
    }
    public function next() {
        $this->_currentPosition++;
        $this->_currentNode = $this->_currentNode->next();
    }
    public function key() {
        return $this->_currentPosition;
    }
    public function rewind() {
        $this->_currentPosition = 0;
        $this->_currentNode = $this->_firstNode;

    }
    public function valid() {
        $this->_currentNode !== NULL;
    }
    public function insert(){
        $newNode = new ListNode($data);

        if($this->firstNode === NULL){
            $this->_firstNode = &$newNode;
        }else {
            $currentNode = $this->firstNode;
            while($currentNode->next !== NULL){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNodes++;
        return true;
    }

    public function display(){
        echo "Total book titles: " . $this->_totalNodes. "\n";
        $currentNode = $this->_firstNode;
        while($currentNode !== NULL){
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }
    // als de list leeg is dan is de nieuwe node the bovenste 
    // anders dan wordt er deze drie dingen gedaan:
    // 1 een nieuwe node creëeren
    // 2 maak de nieuwe node als de bovenste / eerste node
    // 3 assign the previous haead or first node as the next to follow for the newly created first node
    public  function insertAtFirst(string $data = NULL){
        $newNode = new ListNode($data);
        if($this->_firstNode === NULL){
            $this->_firstNode = &$newNode;
        } else {
            $currentFirstNode = $this->_firstNode;
            $this->_firstNode = &$newNode;
            $newNode->next = $currentFirstNode;
        }
        $this->_totalNode++;
        return TRUE;
    }
    // searching for a node 
    /**
     * iterate througth each node and check whether the target data matches with the node data arra
     * if the data is found it will be returned otherwise it will be false;
     */
    public function search(string $data = NULL){
        if($this->_totalNode){
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL){
                if($currentNode->data === $data){
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }
        return false;
    }
    public function insertBefore(string $data = NULL, string $query = NULL){
        $newNode = new ListNode($data);

        if($this->_firstNode){
            $previous = NULL;
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL){
                if($currentNode->data === $query){
                    $newNode->next = $currentNode;
                    $previous->next = $newNode;
                    $this->_totalNode++;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }
    public function insertAfter(string $data = NULL, string $query = NULL){
        $newNode = new ListNode($data);

        if($this->_firstNode){
            $nextNode = NULL;
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL){
                if($currentNode->data === $query){
                    if($nextNode !== NULL){
                        $newNode->next = $nextNode;
                    }
                    $currentNode->next = $newNode;
                    $this->_totalNode++;
                    break;
                }
                $currentNode = $currentNode->next;
                $nextNode = $currentNode->next;
            }
        }
    }
    public function deleteFirst(){
        if($this->_firstNode !== NULL){
            if($this->_firstNode->next !== NULL){
                $this->_firstNode->next = $this->_firstNode->next;
            } else {
                $this->_firstNode = NULL;
            }
            $this->_totalNode--;
            return TRUE;
        }
        return FALSE;
    }
    // delete the last node
    public function deleteLast(){
        if($this->_firstNode !== NULL){
            $currentNode = $this->_firstNode;
        } else {
            $currentNode = $this->_firstNode;
            if($currentNode->next === NULL){
                $this->_firstNode = NULL;
            }else {
                $previousNode = NULL;
                while($currentNode->next !== NULL){
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
    
                $previousNode->next = NULL;
                $this->_totalNode--;
                return TRUE;
            }
           
        }
        return FALSE;
    }
    // searching for and delteing a node that
    // 1 search for the node from the list of
    // 2 remove the node by removing the references from the node
    public function delete(string $query = NULL) {
        if($this->_firstNode){
            $previous = NULL;
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL){
                if($currentNode->data === $query){
                    $previous->next = NULL;

                }else {
                    $previous->next = $currentNode->next;
                }

                $this->_totalNode--;
                break;
            }
            $previous = $currentNode;
            $currentNode = $currentNode->next;
        }
    }
    // reversing a list
    // place reverse order
    // 1 iterate through  the nodes 
    // 2 change the next node to the previous node
    // 3 current node to the previous
    // 4 previous to current node
    // 5 current node to the next node
    /**
     * pseudo algoritm to this:
     * prev = null;
     * current = first_node
     * next = NULL;
     * while (current != NULL) {
     * next = current->next
     * current->next = prev;
     * prev = current;
     * current = next;
     * }
     * first_node = prev;
     */
    public function reverse() {
        if($this->_firstNode !== NULL){
            if($this->_firstNode->next !== NULL){
                if($this->_firstNode->next !== NULL){
                    $reversedList = NULL;
                    $next = NULL;
                    $currentNode = $this->_firstNode;
                    while($currentNode !== NULL){
                        $next = $currentNode->next;
                        $currentNode->next = $reversedList;
                        $reversedList = $currentNode;
                        $currentNode = $next;

                    }
                    $this->_firstNode = $reversedList;
                }
            }
        }
    }
    // get the Nth position element from
    // iterate to that position and get the element
    public function getNthPosition(int $n = 0){
        $count = 1;
        if($this->_firstNode !== NULL){
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL){
                if($count === $n){
                    return $currentNode;

                }
                $count++;
                $currentNode = $currentNode->next;
            }
        }
    }

}

$newNode = new ListNode($data);
if($this->_firstNode === NULL){
    $this->_firstNode = &$newNode;
}
$currentNode = $this->_firstNode;
while ($currentNode->next !== NULL) {
    $currentNode = $currentNode->next;
}
$currentNode->next = $newNode;

$bookTitles = new LinkedList();
$bookTitles->insert("Introduction to Algorithms");
$bookTitles->insert("Introduction to PHP and Data Structures");
$bookTitles->insert("Programming Intelligence");
$bookTitles->insertAtFirst("Mediawiki Administratieve tutorial guide");
$bookTitles->insertBefore("Introduction to Calculus", "Programming Intelligence");
$bookTitles->insertAfter("Introduction to Calculus", "Programming Intelligence");
$bookTitles->display();
$bookTitles->deleteFirst();
$bookTitles->deleteLast();
$bookTitles->delete("Introduction to PHP and Data Structures");
$bookTitles->reverse();
$bookTitles->display();
echo "2nd Item is: ". $bookTitles->getNthPosition(2)->data;

foreach ($bookTitles as $title){
    echo $title . "\n";
}
for($bookTitles->rewind();  $bookTitles->valid(); $bookTitles->next()){
    echo $bookTitles->current() . "\n";
}