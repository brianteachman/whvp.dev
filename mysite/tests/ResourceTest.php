<?php
/**
 * SilverStripe Unit Testing
 * 
 * @link(http://doc.silverstripe.org/framework/en/topics/testing/fixtures, link)
 * @link(http://api.silverstripe.org/3.0/class-SapphireTest.html, link)
 * @link(http://api.silverstripe.org/3.0/class-FixtureFactory.html, link)
 */

class ResourceTest extends SapphireTest
{
    // Define the fixture file to use for this test class
    // static $fixture_file = 'ResourceTest.yml';

    protected $factory;
 
    function __construct() {
        parent::__construct();
 
        $factory = Injector::inst()->create('FixtureFactory');
        // Defines a "blueprint" for new objects
        // $factory->define('Resource', array(
        //     'Name' => 'Map 1'
        // ));
        $this->factory = $factory;
    }
 
    function testSomething() {
        // $map1 = $this->factory->createObject(
        //     'Resource',
        //     array('Type' => 'Map')
        // );
        // $map1->Name = Map 1
        // $map1->Type = Map
        
        // $obj = $this->factory->createObject('Resource', 'map1');
        $obj = $this->factory->createObject('Resource', 'map1', array('Name' => 'Map 1'));
        $databaseId = $this->factory->getId('Resource', 'map1');

        $this->assertEquals(1, $databaseId);
    }
}