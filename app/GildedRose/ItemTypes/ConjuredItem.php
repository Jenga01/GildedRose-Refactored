<?php


namespace App\GildedRose\ItemTypes;



class ConjuredItem extends RegularItem
{


    public function updateQuality()
    {


        {

            if ($this->sell_in > 0) {
                $this->quality -= (self::degradation_value_before_pass) *2;
            } else {
                $this->quality -= (self::degradation_value_after_pass) *2;
            }

            if ($this->quality < self::min_item_quality) {
                $this->quality = self::min_item_quality;
            }
        }

        }


}
