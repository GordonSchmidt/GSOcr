<?php
/**
 * This file is part of GSOcr.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) 2014 Gordon Schmidt
 * @license   MIT
 * @author    Gordon Schmidt <schmidt.gordon@web.de>
 */
return array(
    'service_manager' => array(
        'factories' => array(
            'service.ocr' => 'GSOcr\Service\OcrServiceFactory',
        ),
    ),
);
