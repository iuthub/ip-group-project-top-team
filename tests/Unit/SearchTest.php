<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Route;

class SearchTest extends TestCase
{

// Base test for initial route
  public function testBaseRoute() {
     $response = $this->get('/search');
     $response->assertStatus(200);
 }
}
