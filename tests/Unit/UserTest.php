<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Route;

class UserTest extends TestCase
{

// Tests for user routes
  public function testUserList() {
     $response = $this->get('/admin/user/list/');
     $response->assertStatus(200);
 }

 public function testUserUpdate() {
    $response = $this->get('/admin/user/update/0');
    $response->assertStatus(200);
}

public function testUserDeleet() {
   $response = $this->get('/admin/user/delete/0');
   $response->assertStatus(200);
}

public function testUserCreate() {
   $response = $this->get('/admin/user/create/');
   $response->assertStatus(200);
}
}
