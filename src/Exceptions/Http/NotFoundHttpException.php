<?php declare(strict_types=1);

namespace Mkioschi\Exceptions\Http;

use Mkioschi\Enums\HttpStatus;
use Throwable;

class NotFoundHttpException extends HttpException
{
    /**
     * @param string $message
     * @param ?int $code
     * @param ?Throwable $previous
     */
    public function __construct(
        string $message = 'Not found.',
        int $code = null,
        Throwable $previous = null
    )
    {
        parent::__construct(
            message: $message,
            statusCode: HttpStatus::NOT_FOUND,
            code: $code,
            previous: $previous
        );
    }
}