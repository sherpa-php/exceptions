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
        self::css();

        $layout = file_get_contents(self::UI_LAYOUT_PATH);

        echo $layout;
    }

    /**
     * Includes CSS stylesheet for rendering.
     */
    private static function css(): void
    {
        if (!in_array(self::UI_LAYOUT_CSS_PATH, get_included_files()))
        {
            echo "<style>";
            include_once self::UI_LAYOUT_CSS_PATH;
            echo "</style>";
        }
    }
}