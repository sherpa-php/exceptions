<?php

namespace Sherpa\Core\exceptions;

use Sherpa\Core\security\Security;
use Throwable;

/**
 * Sherpa Exception class.
 * <p>
 *     Provides utilities methods.
 * </p>
 */
class SherpaException extends \Exception
{
    /*
     * Sherpa Exceptions Conventions
     * =================================
     *
     *      Global Error:           0
     *      Router Exceptions:      10XX
     *      Middlewares Exceptions: 11XX
     *      Database Exceptions:    12XX
     *      Validator Exceptions:   13XX
     *      Security Exceptions:    14XX
     *
     */

    public function __construct(string $message = "",
                                int $code = 0,
                                ?Throwable $previous = null)
    {
        $message = htmlspecialchars($message);

        parent::__construct($message, $code, $previous);
    }
}