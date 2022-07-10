<?php

namespace App;


class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add($items , $id)
    {
        $storedItem = ['qty'=> 0,'price' => $items->price, 'item' => $items];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem =$this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $items->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $items->price;
    }


}
