<?php

namespace Sherpa\Exceptions\exceptions;

use Exception;

/**
 * Handle PHP errors and exceptions
 * using this class.
 */
class Handle
{
    private const string UI_LAYOUT_PATH = __DIR__ . "/../rendering/layout.html";
    private const string UI_LAYOUT_CSS_PATH = __DIR__ . "/../rendering/style/layout.css";

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
        $engine = new ExceptionUI($this->exception);
        $engine->render();
    }
}