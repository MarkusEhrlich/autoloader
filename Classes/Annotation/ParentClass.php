<?php

declare(strict_types = 1);

namespace HDNET\Autoloader\Annotation;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
class ParentClass
{
    /**
     * @var string
     */
    public $parentClass;

    /**
     * @param array $values
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(array $values)
    {
        if (isset($values['parentClass'])) {
            $this->parentClass = (string)$values['parentClass'];
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->parentClass;
    }
}
