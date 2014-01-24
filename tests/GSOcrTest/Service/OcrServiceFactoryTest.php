<?php
/**
 * This file is part of GSOcr.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) 2014 Gordon Schmidt
 * @license   MIT
 */

namespace GSOcrTest\Service;

use GSOcr\Service\OcrServiceFactory;
use Zend\ServiceManager\ServiceManager;

/**
 * test creation of ocr service with factory
 *
 * @author Gordon Schmidt <schmidt.gordon@web.de>
 */
class OcrServiceFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Instance of factory
     *
     * @var \GSOcr\Service\OcrServiceFactory
     */
    protected $factory;

    /**
     * Initialize service factory instance
     */
    protected function setUp()
    {
        $this->factory = new OcrServiceFactory();
    }

    /**
     * Test successful creation of ocr service
     *
     * @covers \GSOcr\Service\OcrServiceFactory::createService
     */
    public function testCreateService()
    {
        $dummyService = new OcrDummyService();
        $ocrConfig = array('blubb');
        $config = array('ocr' => array('service' => 'test', 'config' => $ocrConfig));
        $serviceLocator = new ServiceManager();
        $serviceLocator->setService('Configuration', $config);
        $serviceLocator->setService('test', $dummyService);
        $service = $this->factory->createService($serviceLocator);
        $this->assertSame($service, $dummyService);
        $this->assertEquals($service->getConfig(), $ocrConfig);
    }

    /**
     * Test problems on creation of ocr service
     *
     * @param string $exception
     * @param array  $config
     * @dataProvider provideInvalidConfig
     * @covers \GSOcr\Service\OcrServiceFactory::createService
     */
    public function testCreateServiceExceptions($exception, $config)
    {
        $serviceLocator = new ServiceManager();
        $serviceLocator->setService('Configuration', $config);
        $serviceLocator->setService('test', new \StdClass());
        $this->setExpectedException($exception);
        $this->factory->createService($serviceLocator);
    }

    /**
     * Provide invalid configurations and matching exceptions
     *
     * @return array
     */
    public function provideInvalidConfig()
    {
        return array(
            array('\GSOcr\Exception\RuntimeException', array()),
            array('\GSOcr\Exception\RuntimeException', array('ocr' => array())),
            array('\GSOcr\Exception\RuntimeException', array('ocr' => array('service' => 'test'))),
        );
    }
}
