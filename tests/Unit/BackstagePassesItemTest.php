<?php

namespace Tests\Unit;

use App\GildedRose\ItemTypes\BackstagePassesItem;
use App\GildedRose\GildedRose;
use PHPUnit\Framework\TestCase;

class BackstagePassesItemTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    function backstage_passes_quality_check() {
        $items = [
            $item0 = new BackstagePassesItem('Backstage pass 0', 15, 10),
            $item1 = new BackstagePassesItem('Backstage pass 1', 9, 10),
            $item2 = new BackstagePassesItem('Backstage pass 2', 4, 10),
            $item3 = new BackstagePassesItem('Backstage pass 3', 1, 47),
            $item4 = new BackstagePassesItem('Backstage pass 4', 0, 50),
            $item5 = new BackstagePassesItem('Backstage pass 5', 3, 50),
        ];

        $gildedRose = new GildedRose($items);
        $gildedRose->update();

        $this->assertEquals(11, $item0->quality);
        $this->assertEquals(12, $item1->quality);
        $this->assertEquals(13, $item2->quality);
        $this->assertEquals(50, $item3->quality);
        $this->assertEquals(0, $item4->quality);
        $this->assertEquals(50, $item5->quality);



    }

}
