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

use GSImage\Service\Image;
use GSOcr\Service\OcrServiceInterface;

/**
 * This class provides a dummy OCR services.
 *
 * @author Gordon Schmidt <schmidt.gordon@web.de>
 */
class OcrDummyService implements OcrServiceInterface
{
    /**
     * Config
     *
     * @var array
     */
    protected $config;

    /**
     * Set config to ocr service
     *
     * @param array $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * Get config to ocr service
     *
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Recognize text on image
     *
     * @param Image $image
     * @param array $options
     * @return string
     */
    public function recognize(Image $image, $options)
    {
        return '';
    }
}
