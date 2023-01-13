<?php declare(strict_types=1);

namespace Ecode\Exceptions\Http;

use Ecode\Enums\HttpStatus;
use Throwable;

class InvalidTypeHttpException extends HttpException
{
    /** @var ?string[] */
    private ?array $errors;

    /**
     * @param string $message
     * @param ?int $code
     * @param ?array $errors
     * @param ?Throwable $previous
     */
    public function __construct(
        string $message = 'Invalid value.',
        ?int $code = null,
        ?array $errors = null,
        ?Throwable $previous = null,
    )
    {
        $this->errors = $errors;
        parent::__construct(
            message: $message,
            statusCode: HttpStatus::UNPROCESSABLE_ENTITY,
            code: $code,
            previous: $previous
        );
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        if (is_null($this->errors)) return [];
        return $this->errors;
    }
}