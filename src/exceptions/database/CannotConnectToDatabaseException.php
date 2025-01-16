<?php

namespace Sherpa\Exceptions\exceptions\database;

use Sherpa\Exceptions\exceptions\SherpaException;
use Throwable;

/**
 * Sherpa Exception
 * <p>
 *     To throw if Sherpa cannot connect
 *     to configured database.
 * </p>
 */
class CannotConnectToDatabaseException extends SherpaException
{
    public function __construct(?Throwable $previous = null)
    {
        $message = "Sherpa cannot connect to configured database.";

        parent::__construct($message, 1201, $previous);
    }
}