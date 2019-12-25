<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_user_can_be_created() {

        $this->actingAs(factory('App\User')->create()); //if I am trying to create a new account
        $data = ["id" => auth()->user()->id]; // My id should be available from middleware
        $this->assertDatabaseHas("users", $data); // I should also exist in the database.


    }
    public function test_a_user_can__create_a_comment() {
        $this->actingAs(factory("App\User")->create()); //if I'm a user
        $data = ['text' => "Valid text"]; // and I input valid data
        $status = $this->post("/comment", $data); // I will try and post the data
        $status->assertRedirect("/comment"); // I will be redirected to comments index
    }
}
