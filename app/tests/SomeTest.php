<?php

class SomeTest extends TestCase {

  /**
   * A basic functional test example.
   *
   * @return void
   */
  
  public function testBasicExample() {
    $crawler = $this->client->request('GET', '/users');

    $this->assertTrue($this->client->getResponse()->isOk());
  }

}