<?php

declare(strict_types=1);

namespace League\Flysystem;

use function array_merge;

class Config
{
    /**
     * @var array
     */
    private $options;

    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    public function get(string $property, $default = null)
    {
        return $this->options[$property] ?? $default;
    }

    public function extend(array $options): Config
    {
        return new static(array_merge($this->options, $options));
    }
}
