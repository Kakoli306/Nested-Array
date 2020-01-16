<?php

/**
 *
 */
class secondtest extends \PHPUnit\Framework\TestCase
{

  function testThatWeCanGetTheSecondResult()
  {
    require 'app/Written/secondtest.php';
      $a = array (
            "key1" => 1,
            "key2" => array (
                  "key3" => 1,
                  "key4" => array (
                        "key5" => 4,
                        "User" => $person_b,
                  ),
            ),
      );
      $this->assertEquals(printDepth($a), NULL);
      $this->assertEquals(5,add(2,3));
      $this->assertNotEquals(6,add(2,3));
  }
}

 ?>
