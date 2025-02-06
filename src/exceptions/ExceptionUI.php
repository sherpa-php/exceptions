<?php

namespace Sherpa\Exceptions\exceptions;

use Exception;
use Sherpa\Ui\rendering\UI;

/**
 * @deprecated
 */
class ExceptionUI extends UI
{
    private Exception $exception;

    public string $layoutPath
        = __DIR__ . "/../rendering/layout.html";

    public ?string $stylesheetPath
        = __DIR__ . "/../rendering/style/layout.css";

    public function __construct(Exception $exception)
    {
        parent::__construct("Exception", $exception::class);

        $this->exception = $exception;
    }

    protected function props(): array
    {
        return [
            "Exception" => [
                "Name"      => $this->exception::class,
                "Thread"    => $this->trace(),
                "Source"    => "source",
                "File"      => $this->exception->getFile(),
                "Line"      => $this->exception->getLine(),
                "Message"   => $this->exception->getMessage()
                    ?: "<em>This exception does not provide a message.</em>",
            ],
        ];
    }

    private function trace(): string
    {
        $render = "";

        foreach ($this->exception->getTrace() as $trace)
        {
            $render .= "
            <div class='trace-element'>
              <p class='function'>
                {$trace["function"]}
              </p>

              <p class='source'>
                {$trace["file"]}:
                {$trace["line"]}
              </p>
            </div>
            ";
        }

        return $render;
    }
}