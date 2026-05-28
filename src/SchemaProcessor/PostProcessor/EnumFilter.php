<?php

declare(strict_types=1);

namespace PHPModelGenerator\SchemaProcessor\PostProcessor;

use PHPModelGenerator\Filter\Enum;
use PHPModelGenerator\Filter\TransformingFilterInterface;

class EnumFilter implements TransformingFilterInterface
{

    public function getToken(): string
    {
        return self::FILTER_TOKEN_GENERATOR_ENUM;
    }

    public function getFilter(): array
    {
        return [Enum::class, 'filter'];
    }

    public function getSerializer(): array
    {
        return [Enum::class, 'serialize'];
    }
}
