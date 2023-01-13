<?php declare(strict_types=1);

namespace Ecode\Exceptions\Http;

use Exception;
use Ecode\Enums\HttpStatus;
use Throwable;

class HttpException extends Exception
{
    /** @var HttpStatus */
    protected HttpStatus $statusCode;

    /**
     * @param string $message
     * @param HttpStatus $statusCode
     * @param ?int $code
     * @param ?Throwable $previous
     */
    public function __construct(
        string $message,
        HttpStatus $statusCode = HttpStatus::INTERNAL_SERVER_ERROR,
        ?int $code = null,
        ?Throwable $previous = null
    )
    {
        $this->statusCode = $statusCode;
        parent::__construct(
            message: $message,
            code: $code ?? 0,
            previous: $previous
        );
    }

    /**
     * @return HttpStatus
     */
    public function getStatusCode(): HttpStatus
    {
        return $this->statusCode;
    }
}