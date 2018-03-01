<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Container\factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserTest extends TestCase
{
    
    protected $headers = [
    	'Accept' => 'Application/json',
    	'Content-type' => 'Application/json',
    ];

    public function testInvalidUser()
    {
    	$payload = [];

    	$this->json('POST', '/api/login', $payload, $this->headers)
    		->assertStatus(422);
    }

    public function testCreateUser(){

    	$payload =
    		[
    			'name' => 'arvin jay',
    			'email' => 'arvin@me.com',
    			'mobile' => '09175100940',
    			'password' => 'P@ssw0rd',
    			'password_confirmation' => 'P@ssw0rd',
    		];

    	$this->json('POST', '/api/register', $payload, $this->headers)
    		->assertStatus(201);

    }

    public function testUserLogin(){

    	$payload = [
    		'email' => 'arvin@me.com',
    		'password' => 'P@ssw0rd',
    	];

    	$this->json('POST', '/api/login', $payload, $this->headers)
    		->assertStatus(422);
    }




}
