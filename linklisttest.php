<?php

class Node {
  public $data;
  public $next;
}

class LinkedList {
  public $head;
  public function __construct() {
    $this->head = null;
  }

  public function push ($newElement) {
    $newNode = new Node();
    $newNode->data = $newElement;
    $newNode->next = null;

    if($this->head === null) {
      $this->head = $newNode;
    } else {
      $temp = $this->head;
      while ($temp->next !== null) {
        $temp = $temp->next;
      }
      $temp->next = $newNode;
    }
  }

  public function pop() {
    $temp = $this->head;
    if($temp !== null) {
      while($temp->next->next !== null) {
        $temp = $temp->next;
      }
      $temp->next = null;
    }
  }

  public function unShift($newElement) {
    $newNode = new Node();
    $newNode->data = $newElement;
    $newNode->next = $this->head;
    $this->head = $newNode;
  }

  public function shift() {
    $this->head = $this->head->next;
  }

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

  public function listReverse() {
    if($this->head !== null) {
      $prev = null;
      $temp = $this->head;
      while($temp != null) {
        $next = $temp->next;
        $temp->next = $prev;
        $prev = $temp;
        $temp = $next;
      }
      // print_r($this->head);
      $this->head = $prev ;
    }
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
  
  public function deleteAllNodes() {
    $this->head = null;
  }

  public function printList() {
    $temp = $this->head;
    if($temp !== null) {
      while($temp !== null) {
        echo $temp->data.'->';
        $temp= $temp->next;
      }
    } else {
      echo 'List is empty';
    }
  }
}


function test($node) {
  // $node = new LinkedList();
  $node->printList();
  $node->listReverse();
  $node->printList();
}

$node = new LinkedList();
$node->push(10);
$node->push(20);
$node->push(30);
$node->unShift(50);
$node->unShift(40);
// $node->unShift(60);
// $node->shift();
// $node->shift();
// $node->pushAfter(100,20);
// $node->pushAfter(50,10);
// $node->popAfter(100);
// $node->deleteAllNodes();
// $node->push(150);
// $node->countList();
// $node->listReverse();
// $node->printList();
test($node);