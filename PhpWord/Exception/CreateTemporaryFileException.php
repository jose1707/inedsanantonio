<?php

namespace PhpOffice\PhpWord\Exception;

/**
 * @since 0.12.0
 */
final class CreateTemporaryFileException extends Exception
{
    /**
     * @param integer $code The user defined exception code.
     * @param \Exception $previous The previous exception used for the exception chaining.
     */
    final public function __construct($code = 0, \Exception $previous = null)
    {
        parent::__construct(
            'Could not create a temporary file with unique name in the specified directory.',
            $code,
            $previous
        );
    }
}
