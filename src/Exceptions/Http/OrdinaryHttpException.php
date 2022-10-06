<?php declare(strict_types=1);

namespace Ecode\Exceptions\Http;

use Ecode\Enums\HttpStatus;
use Throwable;

class OrdinaryHttpException extends HttpException
{
    /**
     * @param string $message
     * @param ?int $code
     * @param ?Throwable $previous
     */
    public function __construct(
        string $message = 'An error occurred.',
        int $code = null,
        Throwable $previous = null
    )
    {
        parent::__construct(
            message: $message,
            statusCode: HttpStatus::BAD_REQUEST,
            code: $code,
            previous: $previous
        );
    }
}