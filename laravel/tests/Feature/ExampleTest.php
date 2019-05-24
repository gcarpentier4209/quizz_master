<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testShowHome()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function testShowOptions()
    {
        $response = $this->get('/options');

        $response->assertStatus(200);
    }

    public function testShowEditQuestion()
    {
        $response = $this->get('/editquestion');

        $response->assertStatus(200);
    }

    public function testShowNewGame()
    {
        $response = $this->get('/newgame');

        $response->assertStatus(200);
    }

    public function testShowNewQuestion()
    {
        $response = $this->get('/newquestion');

        $response->assertStatus(200);
    }

    public function testShowOnePlayer()
    {
        $response = $this->get('/oneplayer');

        $response->assertStatus(200);
    }

    public function testShowGame()
    {
        $response = $this->get('/game');

        $response->assertStatus(200);
    }

    public function testShowResult()
    {
        $response = $this->get('/result');

        $response->assertStatus(200);
    }

}
