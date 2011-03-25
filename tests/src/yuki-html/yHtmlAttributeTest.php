<?php

require_once dirname(__FILE__).'/../../bootstrap.php';

/**
 * Test class for yHtmlAttribute.
 * Generated by PHPUnit on 2011-03-24 at 19:00:31.
 */
class yHtmlAttributeTest extends PHPUnit_Framework_TestCase{
    /**
     * @var yHtmlAttribute
     */
    protected $object;
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(){
        $this->object = new yHtmlAttribute('name', 'value');
    }
    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(){
        
    }
    /**
     * @todo Implement testSetName().
     */
    public function testAll(){
        $this->object->setName('src');
        $this->assertEquals('src', $this->object->getName());
        $this->object->set('value');
        $this->assertEquals('value', $this->object->get());
        $this->object->set(array('1', '2'));
        $this->assertEquals('1,2', $this->object->get());
        $this->assertEquals('src="1,2"', $this->object->__toString());
        $this->object->set('"value"');
        $this->assertEquals('src="&quot;value&quot;"', $this->object->__toString());
    }
}
