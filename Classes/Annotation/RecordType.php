<?php

declare(strict_types = 1);

namespace HDNET\Autoloader\Annotation;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
class RecordType
{
    /**
     * @var string
     */
    public $recordType;

    /**
     * @param array $values
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(array $values)
    {
        if (isset($values['recordType'])) {
            $this->recordType = (string)$values['recordType'];
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->recordType;
    }
}
