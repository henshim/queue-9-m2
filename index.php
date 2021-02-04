<?php
include 'Queue.php';
$mylist=new Queue();

$mylist->enqueue('first');
$mylist->enqueue(2);
$mylist->enqueue(3);

echo $mylist->dequeue();
echo $mylist->dequeue();

echo $mylist->isEmpty();

$mylist->enqueue('second');
$mylist->enqueue('new');

$mylist->dequeue();
$mylist->dequeue();
$mylist->dequeue();

$mylist->isEmpty();