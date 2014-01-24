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

use GSImage\Service\Image;

/**
 * This class provides a common interface to OCR services.
 *
 * @author Gordon Schmidt <schmidt.gordon@web.de>
 */
interface OcrServiceInterface
{
    /**
     * Set config to ocr service
     *
     * @param array $config
     */
    public function setConfig($config);

    /**
     * Recognize text on image
     *
     * @param Image $image
     * @param array $options
     * @return string
     */
    public function recognize(Image $image, $options);
}
