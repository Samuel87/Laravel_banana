<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;


/**
* run as
* C:/xampp7.1.9/htdocs/.../vendor/bin/phpunit ExampleTest.php
* if you have multiple versions of phpunit
*/

class ExampleTest extends TestCase
{

	public function testUsersIndex()
	{
	    $response = $this->call('GET', '/login');

	    $this->assertEquals(200, $response->status());
	}

    public function testThisRouteWorkAsExpectedMockingPartiallyTheController()
	{
	    // Create the mock
	    $MainController = \Mockery::mock('App\Http\Controllers\MainController[products]');
	    $MainController->shouldReceive('products')->once();

	    // Bind instance of controller to mock
	    App::instance('App\Http\Controllers\MainController', $MainController);

	    // Act
	    $this->call('GET','/products');
	}
}
