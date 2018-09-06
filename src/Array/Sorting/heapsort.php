<?php
class Node
{
    private $_i;

    public function __construct($key)
    {
        $this->_i = $key;
    }

    public function getKeys()
    {
        return $this->_i;
    }
}

class Heap
{
    private $heapArray;
    private $currentSize;

    public function __construct()
    {
        $heapArray = array();
        $this->currentSize = 0;
    }

    public function remove()
    {
        $root = $this->heapArray[0];

        $this->heapArray[0] = $this->heapArray[--$this->currentSize];
        $this->bubbleDown(0);
        return $root;
    }

    public function bubbleDown($index)
    {
        $biggerChild = null;
        $top = $this->heapArray[$index];
        while ($index < (int) ($this->currentSize / 2)) {

            $leftChild = 2 * $index + 1;
            $rightChild = $leftChild + 1;

            if ($rightChild < $this->currentSize && $this->heapArray[$leftChild] < $this->heapArray[$rightChild]) {
                $biggerChild = $rightChild;
            } else {
                $biggerChild = $leftChild;
            }

            if ($top->getKeys() >= $this->heapArray[$biggerChild]->getKeys()) {
                break;
            }

            $this->heapArray[$index] = $this->heapArray[$biggerChild];
            $index = $biggerChild;
        }

        $this->heapArray[$index] = $top;
    }

    public function insertAtPosition($index, Node $newNode)
    {
        $this->heapArray[$index] = $newNode;
    }

    public function incrementSizes()
    {
        $this->currentSize++;
    }

    public function getSizes()
    {
        return $this->currentSize;
    }

    public function asArray()
    {
        $arr = array();
        for ($j = 0; $j < sizeof($this->heapArray); $j++) {
            $arr[] = $this->heapArray[$j]->getKeys();
        }

        return $arr;
    }
}

function heapsort(Heap $Heap)
{
    $size = $Heap->getSizes();

    for ($j = (int) ($size / 2) - 1; $j >= 0; $j--) {
        $Heap->bubbleDown($j);
    }

    for ($j = $size - 1; $j >= 0; $j--) {

        $BiggestNode = $Heap->remove();

        $Heap->insertAtPosition($j, $BiggestNode);

    }

    return $Heap->asArray();
}

?>