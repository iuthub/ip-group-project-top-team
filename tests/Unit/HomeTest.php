<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Route;

class HomeTest extends TestCase
{

// Test for home route
  public function testBaseRoute() {
     $response = $this->get('/admin');
     $response->assertStatus(200);
 }
}
