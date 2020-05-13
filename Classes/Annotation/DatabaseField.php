<?php

declare(strict_types = 1);

namespace HDNET\Autoloader\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
class DatabaseField
{
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $sql;

    /**
     * @param array $values
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(array $values)
    {
        if (isset($values['type'])) {
            $this->type = $values['type'];
        }
        if (isset($values['sql'])) {
            $this->sql = $values['sql'];
        }
    }
}
