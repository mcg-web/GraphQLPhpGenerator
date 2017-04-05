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
    const PHP_CALLABLE_STATIC_NOTATION_REGEX = '/^(?<function>(?:\\\\?[a-z_\x7f-\xff][a-z0-9_\x7f-\xff]*)+)(?:\:\:(?<method>[a-z_\x7f-\xff][a-z0-9_\x7f-\xff]*))?$/i';

    private $expression;

    public function __construct($expression)
    {
        $this->expression = $this->prepareExpression($expression);
    }

    public function __toString()
    {
        return $this->expression;
    }

    private function prepareExpression($expression)
    {
        $expression = trim($expression);

        if (preg_match(self::PHP_CALLABLE_STATIC_NOTATION_REGEX, $expression, $matches)) {
            $expression = sprintf('\'%s\'', $expression);
        }

        return $expression;
    }
}
