<?php

namespace Builder\Tests;

use Builder\Builder;
use PHPUnit\Framework\TestCase;

class PluginTest extends TestCase {
    private $instance;
  
    public function setUp() {
        parent::setUp();
    }

    public function test___builder___can_be_built() {
        $builder = new Builder();
        $this->assertNotNull($builder->quotes);
        $this->assertEmpty($builder->quotes);
    }
}
