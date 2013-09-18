<?php
namespace Tests\Zend\Translate;

class TranslateTest extends \Tests\TestCase
{
    protected $classes = array(
        '\Zend_Translate',
        '\Zend_Translate_Adapter',
        '\Zend_Translate_Exception',
        '\Zend_Translate_Plural',
        '\Zend_Translate_Adapter_Array',
        '\Zend_Translate_Adapter_Csv',
        '\Zend_Translate_Adapter_Gettext',
        '\Zend_Translate_Adapter_Ini',
        '\Zend_Translate_Adapter_Qt',
        '\Zend_Translate_Adapter_Tbx',
        '\Zend_Translate_Adapter_Tmx',
        '\Zend_Translate_Adapter_Xliff',
        '\Zend_Translate_Adapter_XmlTm',
    );

    /**
     * Ensure that the composer autoloader is finding the classes correctly.
     */
    public function testCanFindClasses()
    {
        foreach ($this->classes as $class) {
            $this->assertTrue(class_exists($class) || interface_exists($class));
        }
    }
}