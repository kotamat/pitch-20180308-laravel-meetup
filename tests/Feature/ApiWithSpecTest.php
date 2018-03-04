<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\TestResponse;

class ApiWithSpecTest extends \Tests\ApiSpecTestCase
{
    protected $isExportSpec = true;
    /**
     * @test
     */
    public function _get()
    {
        $params = [
            'page' => 1,
        ];

        /** @var TestResponse $res */
        $res = $this->getJson(route('test-get', $params));

        $res->assertStatus(200);
    }

    /**
     * @test
     */
    public function _post()
    {
        $data = [
            'name' => 'hoge',
        ];

        /** @var TestResponse $res */
        $res = $this->postJson(route('test-post'), $data);

        $res->assertStatus(200);
    }

    /**
     * @test
     */
    public function _put()
    {
        $data = [
            'name' => 'hoge',
        ];
        $params = [
            'id' => 1
        ];

        /** @var TestResponse $res */
        $res = $this->putJson(route('test-put', $params), $data);

        $res->assertStatus(200);
    }

    /**
     * @test
     */
    public function _delete()
    {
        $params = [
            'id' => 1,
        ];

        /** @var TestResponse $res */
        $res = $this->deleteJson(route('test-delete', $params));

        $res->assertStatus(200);
    }
}