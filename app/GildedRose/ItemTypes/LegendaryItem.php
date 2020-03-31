<?php


namespace App\GildedRose\ItemTypes;


use App\GildedRose\Item;
use App\GildedRose\Item_Interface;

class LegendaryItem extends Item implements Item_Interface
{
    const sulfuras = 80;

    public function updateQuality()
    {
        $this->quality = self::sulfuras;
    }
}
