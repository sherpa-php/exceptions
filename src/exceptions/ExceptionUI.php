<?php

namespace Sherpa\Exceptions\exceptions;

use Exception;
use Sherpa\Ui\rendering\UI;

class ExceptionUI extends UI
{
    private Exception $exception;

    public function __construct(Exception $exception)
    {
        parent::__construct("Exception", $exception::class);

        $this->exception = $exception;
    }
}