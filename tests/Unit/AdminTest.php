<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Route;

class AdminTest extends TestCase
{

// Test for admin route
  public function testBaseRoute() {
     $response = $this->get('/admin');
     $response->assertStatus(200);
 }
}
