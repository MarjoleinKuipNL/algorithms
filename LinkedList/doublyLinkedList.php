<?php
class ListNode {
    public $data = NULL;
    public $next = NULL;
    public $prev = NULL;

    public function __construct(string $data = NULL){
        $this->data = $data;
    }
}

class DoublyLinkedList {
   
    private $_firstNode = NULL;
    private $_lastNode = NULL;
    private $_totalNode = 0;
     // operations for doubly linked List:
    //
    /**
     * 1 -> inserting at the first node
     * 
     * 1.1 create the new Node 
     * 1.2. make the new node as the first node or head
     * 1.3. Assign the previous head or first node as the next, to follow the newly created first node.
     * 1.4. Assign the previous node's previous link to the new first node.
     */
    public function insertAtFirstNode(string $data = null) {
        $newNode = new ListNode($data);
        if($this->_firstNode === NULL){
            $this->_firstNode = $newNode;
            $this->_lastNode = $newNode;
        }else {
            $currentFirstNode = $this->_firstNode;
            $this->_firstNode = &$newNode;
            $newNode->next = $currentFirstNode;
            $currentFirstNode->prev = $newNode;
        }
        $this->_totalNode++;
        return TRUE;
    }
    // 
    /**
     * 2 -> inserting at the last node
     * 
     * 2.1 create the new Node
     * 2.2 Make the new node the last node
     * 2.3 Assign the previous last node as the previous link of the current last Node
     * 2.4 Assign the previous alst node's next link to the new lst node's previous link
     */
    public function insertAtLast(string $data = NULL){
        $newNode = new ListNode($data);
        if($this->_firstNode === NULL){
            $this->_firstNode = &$newNode;
            $this->_lastNode = $newNode;
        }else {
            $currentNode = $this->_lastNode;
            $currentNode->next = $newNode;
            $newNode->prev = $currentNode;
            $this->_lastNode = $newNode;
        }
        $this->_totalNode++;
        return TRUE;
    }
    //
    /**
     *  3 -> inserting before a specific ListNode
     * 
     * 3.1 find the first node in the List
     * 3.2 make the new node the
     * 3.3 based on the position change the next and previous node for the new Node
     * 3.4 change the target node and the node before the target node
     */
    public function insertBefore(string $data = NULL, string $query = NULL){
        $newNode = new ListNode($data);

        if($this->_firstNode){
            $previous = NULL;
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL){
                if($currentNode->data === $query){
                    $newNode->next = $currentNode;
                    $currentNode->prev = $newNode;
                    $previous->next = $newNode;
                    $newNode->prev = $previous;
                    $this->_totalNode++;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }
    // 4 -> inserting after a specific ListNode
    /**
     * 4.1 make the new node
     * 4.2change the next and previous node for the new node, the target node and the 
     * node following the target.
     */
    public function insertAfter(string $data = NULL, string $query = NULL){
        $newNode = new ListNode($data);

        if($this->_firstNode){
            $nextNode = NULL;
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL){
                if($currentNode->data === $query){
                    $newNode->next = $nextNode;
                    if($nextNode !== NULL){
                        $newNode->next = $nextNode;
                    }
                    if($currentNode === $this->_lastNode){
                        $this->_lastNode = $newNode;
                    }
                    $currentNode->next = $newNode;
                    $nextNode->prev = $newNode;
                    $newNode->prev = $currentNode;
                    $this->_totalNode++;
                    break;
                }
                $currentNode = $currentNode->next;
                $nextNode = $currentNode->next;
              
            }
        }
    }
    /**
     * 5 -> deleting the first ListNode
     * 
     * 5.1 remove the first node from the doubly linked list
     * 5.2 make the second node the first node
     * 5.3 set the new first node's previous node to NULL
     * 5.4 reduce the total node count with one
     */
    public function deleteFirst(){
        if($this->_firstNode !== NULL){
            if($this->_firstNode->next !== NULL){
                $this->firstNode = $this->_firstNode->next;
                $this->_firstNode->prev = NULL;
            } else {
                $this->_firstNode = NULL;
            }
            $this->_totalNode--;
            return TRUE;
        }
        return FALSE;
    }
    /**
     * 6 -> deleting the last ListNode
     * 
     * 6.1 test if the last node doest not have any next reference 
     * 6.2 set the second to last node as the new last Node
     */
    public function deleteLast(){
        if($this->_lastNode !== NULL){
            $currentNode = $this->_lastNode;
            if($currentNode->prev === NULL){
                $this->_firstNode = NULL;
                $this->_lastNode = NULL;
            } else {
                $previousNode = $currentNode->prev;
                $this->_lastNode  =$previousNode;
                $previousNode->next = NULL;
                $this->_totalNode--;
                return TRUE;
            }
        }
        return FALSE;
    }

    /**
     * 7 -> searching for a specific ListNode and deleting one ListNode
     * 
     * 7.1 find the intended node and
     * 7.2 get the previous node of the target node, along with the next node 
     * 7.3 assign the node following the pervious node to point the next node after the target node 
     * 7.5 assing the node following the next node to point the next node before the target node
     */
    public function delete(string $query = NULL){
        if($this->_firstNode){
            $previous = NULL;
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL){
                if($currentNode->data === $query){
                    if($currentNode->next === NULL){
                        $previous->next = NULL;
                    }else {
                        $previous->next = $currentNode->next;
                        $currentNode->next->prev = $previous;
                    }
                    $this->_totalNode--;
                    break;
                    
                }
                $previous = $currentNode;
                $currentNode =$currentNode->next;
            }
        }
    }

    //
    /**
     *  8 -> displaying the list forward 
     * 
     * 8.1 get the first node and from there
     * 8.2 loop through the list forward and display each node 
     */
    public function displayForward(){
        echo "Total book titles: " . $this->_totalNode . "\n";
        $currentNode = $this->_firstNode;
        while($currentNode !== NULL){
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }

    /**
     * 9 -> displaying the list backward
     *
     * 9.2 get the last node from the list and from there
     * 9.2 loop through the list backwards and display each node
     */
    public function displayBackward(){
        echo "Total Book titles" . $this->_totalNode . "\n";
        $currentNode  =$this->_lastNode;
        while($currentNode !== NULL){
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->prev;
        }
    }
}

?>