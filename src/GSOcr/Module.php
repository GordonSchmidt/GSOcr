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

namespace GSOcr;

/**
 * GSOcr zf2 module class.
 *
 * @author Gordon Schmidt <schmidt.gordon@web.de>
 */
class Module
{
    /**
     * Get module configuration
     *
     * @return array
     */
    public function getConfig()
    {
        return require __DIR__ . '/../../config/module.config.php';
    }
}
