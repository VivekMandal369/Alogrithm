<?php

//node structure
class Node {
  public $data;
  public $next;
}
  
 class LinkedList {
  public $head;
  
  public function __construct(){
    $this->head = null;
  }
  
  //Add new element at the end of the list
  public function push($newElement) {
    $newNode = new Node();
    $newNode->data = $newElement;
    $newNode->next = null;
    if($this->head == null) {
      $this->head = $newNode;
    } else {
      $temp = new Node();
      $temp = $this->head;
      while($temp->next != null) {
        $temp = $temp->next;
      }
      $temp->next = $newNode;
    }
  }

  // Remove last element
  public function pop() {
    if($this->head !== null) {
      $temp = $this->head;
      if($temp->next === null) {
        $this->head = null;
      } else {
        while($temp->next->next !== null) {
          $temp = $temp->next;
        }
      }
    }
    $temp->next = null;
  }

  // Insert element on first position
  public function unShift($newElement) {
    $newNode = new Node();

    $newNode->data = $newElement;
    $newNode->next = $this->head;
    $this->head = $newNode;  

  }

  // Remove first element
  public function shift() {
    $temp = $this->head;
    $temp = $temp->next;
    $this->head = $temp;  
  }

  // Add elemet after some specific element
  public function pushAfter($newElement, $identifier) {
    if($this->head !== null) {
      $temp = $this->head;
      while($temp->data !== $identifier) {
        $temp = $temp->next;
      }
      $newNode = new Node();
      $newNode->data = $newElement;
      $newNode->next = $temp->next;
      $temp->next = $newNode;
    }
  }

  public function popAfter($identifier) {
    if($this->head !== null) {
      $temp = $this->head;
      while($temp->data !== $identifier && $temp->next !== null) {
        $temp = $temp->next;
      }
      if($temp->next !== null) {
        $temp->next = $temp->next->next;
      }
    }
  }

  public function deleteAllNodes() {
    $this->head = null;
  }

  public function countList() {
    $count = 0;
    if($this->head !== null) {
      $temp = $this->head;
      while($temp !== null) {
        $temp = $temp->next;
        $count++;
      }
      echo $count;
    } else {
      echo $count;
    }
  }

  //display the content of the list
  public function PrintList() {
    $temp = new Node();
    $temp = $this->head;
    if($temp != null) {
      echo "\nThe list contains: ";
      while($temp != null) {
        echo $temp->data." ";
        // print_r($temp);
        // echo "\n";
        $temp = $temp->next;
      }
    } else {
      echo "\nThe list is empty.";
    }
  }
};
  
  // test the code
  $MyList = new LinkedList();
  
  //Add three elements at the end of the list.
  $MyList->push(10);
  $MyList->push(20);
  $MyList->push(30);
  $MyList->push('vivek');
  // $MyList->unShift('test');
  $MyList->unShift('first');
  $MyList->shift();
  // $MyList->countList();
  $MyList->deleteAllNodes();
  $MyList->psuhAfter('me', 30);
  $MyList->PrintList();