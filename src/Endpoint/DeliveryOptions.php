<?php

/**
 * PHP Service Bus common component.
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\Common\Endpoint;

/**
 * Message delivery options.
 */
interface DeliveryOptions
{
    /**
     * Create options instance.
     */
    public static function create(): static;

    /**
     * Apply trace ID.
     *
     * @param int|string|null $traceId
     */
    public function withTraceId(mixed $traceId): void;

    /**
     * Apply headers.
     *
     * @psalm-param float|int|string $value
     */
    public function withHeader(string $key, $value): void;

    /**
     * Receive trace id.
     *
     * @return int|string|null
     */
    public function traceId(): mixed;

    /**
     * Receive headers.
     *
     * @psalm-return array<string, string|int|float>
     */
    public function headers(): array;

    /**
     * Should the message be saved?
     */
    public function isPersistent(): bool;

    /**
     * Should the message be processed with the highest priority?
     */
    public function isHighestPriority(): bool;

    /**
     * After how many seconds the message will be marked as expired.
     */
    public function expirationAfter(): ?int;
}
