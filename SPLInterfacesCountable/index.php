<?php

//Old way of doing things
class Collection
{
    protected $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function count()
    {
        return count($this->items);
    }
}

$collection = new Collection(['one', 'two', 'three']);
echo $collection->count();
//We get 3 which is correct
echo "<br>";
echo count($collection);
//We get 1, this is not what we want
echo "<br>";

//Better way using Countable interface
//http://php.net/manual/en/class.countable.php counts elements of an object
class Collection2 implements Countable
{
    protected $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function count()
    {
        return count($this->items);
    }
}

$collection = new Collection2(['one', 'two', 'three']);
echo count($collection);
//Thanks to implementing the Countable interface we get 3