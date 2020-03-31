<?php

namespace Tests\Unit;

use App\GildedRose\ItemTypes\AgedBrieItem;
use PHPUnit\Framework\TestCase;
use App\GildedRose\GildedRose;

class AgedBrieItemTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    function aged_brie_item_quality_increase() {
        $items = [
            $item1 = new AgedBrieItem('Aged brie', 2, 10),
            $item2 = new AgedBrieItem('Aged brie', 0, 10),
            $item3 = new AgedBrieItem('Cheese', 0, 50),
        ];

        $gildedRose = new GildedRose($items);
        $gildedRose->update();

        $this->assertEquals(12, $item1->quality);
        $this->assertEquals(14, $item2->quality);
        $this->assertEquals(50, $item3->quality);



    }

}
