<?php


namespace App\GildedRose\ItemTypes;

use App\GildedRose\Item;
use App\GildedRose\Item_Interface;


class RegularItem extends Item implements Item_Interface
{

    const min_item_quality = 0;
    const degradation_value_before_pass = 2;
    const degradation_value_after_pass = 4;


    public function updateQuality()
    {

        if ($this->sell_in > 0) {
            $this->quality -= self::degradation_value_before_pass;
        } else {
            $this->quality -= self::degradation_value_after_pass;
        }

        if ($this->quality < self::min_item_quality) {
            $this->quality = self::min_item_quality;
        }
    }



}
