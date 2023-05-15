<?php

// prints alternate nodes of the given Linked List, first from head to end, 
//and then from end to head. If Linked List has even number of nodes, 
//then fun2() skips the last node. For Linked List 1->2->3->4->5, fun2() prints 1 3 5 5 3 1. 
//For Linked List 1->2->3->4->5->6, fun2() prints 1 3 5 5 3 1.

class Node {
  public $data;
  public $next;
}

class LinkedList {
  public $head;

  public function __construct(){
    $this->head = null;
  }

  public function addNode($newElement) {
    $newNode = new Node();
    $newNode->data = $newElement;
    $newNode->next = null;

    if($this->head === null) {
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

  public function printList() {
    $temp = new Node();
    $temp = $this->head;
    if($temp != null) {
      while($temp != null) {
        echo $temp->data."->";
        $temp = $temp->next;
      }
    }
  }

  public function printAlternate($temp) {
    // $temp = $this->head

    if($temp == null) {
      return;
    }

    $this->printAlternate($temp->next);

    echo $temp->data." ";
    
  }
}

$node = new LinkedList();
$node->addNode(1);
$node->addNode(2);
$node->addNode(3);
$node->addNode(4);
$node->addNode(5);
// $node->printList();
$temp = new Node();
$node->printAlternate($temp);