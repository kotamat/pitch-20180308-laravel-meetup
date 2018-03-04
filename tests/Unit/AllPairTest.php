<?php

namespace Tests\Unit;

use Tests\TestCase;

class AllPairTest extends TestCase
{
    private function kakeru($a, $b)
    {
        return $a * $b;
    }

    /**
     * @test
     *
     * @spec
     * a: 1|2|10
     * b: 2|3|20
     */
    public function test()
    {
        $data = [
            ['in' => [1, 20], 'out' => 20],
            ['in' => [1, 3], 'out' => 3],
            ['in' => [2, 20], 'out' => 40],
            ['in' => [10, 3], 'out' => 30],
            ['in' => [2, 2], 'out' => 4],
            ['in' => [10, 2], 'out' => 20],
            ['in' => [2, 3], 'out' => 6],
            ['in' => [10, 20], 'out' => 200],
            ['in' => [1, 2], 'out' => 2],
        ];

        foreach ($data as $datum) {
            $this->assertEquals($this->kakeru(...$datum['in']), $datum['out']);
        }
    }

}