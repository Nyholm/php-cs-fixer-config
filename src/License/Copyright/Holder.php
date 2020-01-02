<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/php-cs-fixer-config
 */

namespace Ergebnis\PhpCsFixer\Config\License\Copyright;

/**
 * @internal
 */
final class Holder
{
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @param string $value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public static function fromString(string $value): self
    {
        $trimmed = \trim($value);

        if ('' === $trimmed) {
            throw new \InvalidArgumentException('Value cannot be blank or empty.');
        }

        return new self($trimmed);
    }

    public function toString(): string
    {
        return $this->value;
    }
}
