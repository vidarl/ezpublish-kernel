<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace eZ\Publish\SPI\FieldType;

interface Comparable
{
    public function isEquals(Value $value): bool;

    public function toHash(Value $value);
}
