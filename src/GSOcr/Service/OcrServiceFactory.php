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

namespace GSOcr\Service;

use GSOcr\Exception;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Service factory for OCR services.
 *
 * @author Gordon Schmidt <schmidt.gordon@web.de>
 */
class OcrServiceFactory implements FactoryInterface
{
    /**
     * Create OCR service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return OcrServiceInterface
     * @throws InvalidArgumentException
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Configuration');
        if (!isset($config['ocr'])) {
            throw new Exception\RuntimeException('No "ocr" section available in configuration.');
        }
        if (!isset($config['ocr']['service'])) {
            throw new Exception\RuntimeException('No "service" specified in "ocr" section of configuration.');
        }
        $service = $serviceLocator->get($config['ocr']['service']);
        if (!$service instanceof OcrServiceInterface) {
            throw new Exception\RuntimeException('Provided service class is not a valid ocr service.');
        }
        if (isset($config['ocr']['config'])) {
            $service->setConfig($config['ocr']['config']);
        }
        return $service;
    }
}
