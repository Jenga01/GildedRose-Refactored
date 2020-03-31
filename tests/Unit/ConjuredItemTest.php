<?php

namespace Tests\Unit;

use App\GildedRose\ItemTypes\ConjuredItem;
use PHPUnit\Framework\TestCase;
use App\GildedRose\GildedRose;

class ConjuredItemTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    function conjured_item_quality_drop() {
        $items = [
            $item1 = new ConjuredItem('Milk', 5, 50),
            $item2 = new ConjuredItem('Bread', 0, 50),
            $item3 = new ConjuredItem('Cheese', 0, 0),
        ];

        $gildedRose = new GildedRose($items);
        $gildedRose->update();

        $this->assertEquals(46, $item1->quality);
        $this->assertEquals(42, $item2->quality);
        $this->assertEquals(0, $item3->quality);



    }

}
