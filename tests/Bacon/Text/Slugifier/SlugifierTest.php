<?php
/**
 * Bacon.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

/**
 * @namespace
 */
namespace BaconTest\Text\Slugifier;

use PHPUnit_Framework_TestCase as TestCase,
    Bacon\Text\Slugifier\Slugifier;

/**
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class SlugifierTest extends TestCase
{
    protected $slugifier;
    
    public function setUp()
    {
        $this->slugifier = new Slugifier();
    }

    public function testSlugifying()
    {
        $this->assertEquals('hello-dont-uber-bacon-no-13', $this->slugifier->slugify('Hello, don\'t "Über"-Bacon No. 13###'));        
    }
}