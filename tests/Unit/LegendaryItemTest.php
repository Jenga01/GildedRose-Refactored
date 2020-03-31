<?php

namespace Tests\Unit;

use App\GildedRose\ItemTypes\LegendaryItem;
use PHPUnit\Framework\TestCase;
use App\GildedRose\GildedRose;

class LegendaryItemTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    function lengendary_item_quality_unchanged() {
        $items = [
            $item1 = new LegendaryItem('Sulfuras', 5, 80),
            $item2 = new LegendaryItem('Sulfuras', 0, 80),
        ];

        $gildedRose = new GildedRose($items);
        $gildedRose->update();

        $this->assertEquals(80, $item1->quality);
        $this->assertEquals(80, $item2->quality);



    }

}
