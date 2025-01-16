<?php

namespace Sherpa\Exceptions\exceptions;

use Exception;

/**
 * Handle PHP errors and exceptions
 * using this class.
 */
class Handle
{
    public private(set) Exception $exception;

    public function __construct(Exception $exception)
    {
        $this->exception = $exception;
    }

    /**
     * Render stored exception using Sherpa UI.
     */
    public function render(): void
    {
        echo "<pre>";
        var_dump($this->exception);
        echo "</pre>";
    }
}