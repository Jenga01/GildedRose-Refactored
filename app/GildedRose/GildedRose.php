<?php


namespace App\GildedRose;



class GildedRose {

    private $items = [];

    public function __construct($items) {
        $this->items = $items;
    }
    public function update()
    {
        foreach ($this->items as $item) {
            $item->updateQuality();
        }
    }


}












