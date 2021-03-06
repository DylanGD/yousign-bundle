<?php

namespace Picoss\YousignBundle\Yousign\Client\Exception;

class EnvironmentException extends \Exception
{
    /**
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct(sprintf('The environment "%s" does not exist.', $name));
    }
}