<?php
/**
 * Generated by build/gen_test
 */
use LightnCandy\LightnCandy;
use LightnCandy\Runtime;
use LightnCandy\SafeString;
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/test_util.php');

class ExporterTest extends TestCase
{
    /**
     * @covers LightnCandy\Exporter::closure
     */
    public function testOn_closure() {
        $method = new \ReflectionMethod('LightnCandy\Exporter', 'closure');
        $method->setAccessible(true);
        $this->assertEquals('function($a) {return;}', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('standalone' => 0)),  function ($a) {return;}
        ))));
        $this->assertEquals('function($a) {return;}', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('standalone' => 0)),   function ($a) {return;}
        ))));
    }
}
