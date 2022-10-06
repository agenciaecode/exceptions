<?php declare(strict_types=1);

namespace Ecode\Exceptions\Http;

use Ecode\Enums\HttpStatus;
use Throwable;

class InvalidTypeHttpException extends HttpException
{
    /**
     * @param string $message
     * @param ?int $code
     * @param ?Throwable $previous
     */
    public function __construct(
        string $message = 'Invalid value.',
        int $code = null,
        Throwable $previous = null
    )
    {
        parent::__construct(
            message: $message,
            statusCode: HttpStatus::UNPROCESSABLE_ENTITY,
            code: $code,
            previous: $previous
        );
    }
}