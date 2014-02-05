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
     * @param string $image
     * @param array  $options
     * @return string
     */
    public function recognize($image, $options);
}
