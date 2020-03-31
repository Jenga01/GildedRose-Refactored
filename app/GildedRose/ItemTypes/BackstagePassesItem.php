<?php


namespace App\GildedRose\ItemTypes;


use App\GildedRose\Item;
use App\GildedRose\Item_Interface;


class BackstagePassesItem extends Item implements Item_Interface
{
    const sell_in_default = 1;
    const sell_in_10_days_or_less = 2;
    const sell_in_5_days_or_less = 3;

    const max_item_quality = 50;

    public function updateQuality()
    {


        if($this->sell_in > 10){
            $this->quality += self::sell_in_default;
        }
        elseif ($this->sell_in <= 10 and $this->sell_in > 5){
            $this->quality += self::sell_in_10_days_or_less;
        }
        elseif ($this->sell_in <= 5 and $this->sell_in > 0){
            $this->quality += self::sell_in_5_days_or_less;
        }
        else{
            $this->quality = 0;
        }
        if ($this->quality > self::max_item_quality){
          $this->quality = self::max_item_quality;

        }


    }

}
