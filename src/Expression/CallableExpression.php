<?php

/*
 * This file is part of the OverblogGraphQLPhpGenerator package.
 *
 * (c) Overblog <http://github.com/overblog/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Overblog\GraphQLGenerator\Expression;

/**
 * Represents an callable expression.
 */
class CallableExpression
{
    private $expression;

    public function __construct($expression)
    {
        $this->expression = (string) $expression;
    }

    public function __toString()
    {
        return $this->expression;
    }
}
