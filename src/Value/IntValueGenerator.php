<?php

/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Railt\CodeGenerator\Value;

use Railt\TypeSystem\Value\IntValue;

/**
 * @property-read IntValue $value
 */
class IntValueGenerator extends ValueGenerator
{
    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->value->toString();
    }
}

