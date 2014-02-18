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

namespace GSOcrTest;

use GSOcr\Module;

/**
 * Test zf2 module class.
 *
 * @author Gordon Schmidt <schmidt.gordon@web.de>
 */
class ModuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Instance of zf2 module class
     *
     * @var \GSOcr\Module
     */
    protected $module;

    /**
     * Initialize module instance
     */
    protected function setUp()
    {
        $this->module = new Module();
    }

    /**
     * Test getting a config from module class
     *
     * @covers \GSOcr\Module::getConfig
     */
    public function testGetConfig()
    {
        $this->assertNotEmpty($this->module->getConfig());
    }
}
