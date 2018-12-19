<?php declare(strict_types=1);

/*
 * This file is part of the OverblogGraphQLPhpGenerator package.
 *
 * (c) Overblog <http://github.com/overblog/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Overblog\GraphQLGenerator\Tests;

class GlobalTest extends TestCase
{
    /**
     * @group cs
     */
    public function testCodeStandard(): void
    {
        $this->assertCodeStandard(__DIR__.'/../.');
    }
}
