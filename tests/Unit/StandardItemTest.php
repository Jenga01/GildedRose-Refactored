<?php

namespace Tests\Unit;

use App\GildedRose\ItemTypes\RegularItem;
use PHPUnit\Framework\TestCase;
use App\GildedRose\GildedRose;

class StandardItemTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    function regular_item_quality_drop() {
        $items = [
            $item1 = new RegularItem('Milk', 5, 50),
            $item2 = new RegularItem('Bread', 0, 50),
            $item3 = new RegularItem('Cheese', 0, 0),
        ];

        $gildedRose = new GildedRose($items);
        $gildedRose->update();

        $this->assertEquals(48, $item1->quality);
        $this->assertEquals(46, $item2->quality);
        $this->assertEquals(0, $item3->quality);


        }


}
