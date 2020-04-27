<?php

/**
 * PHP Service Bus common component.
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\Common\MessageExecutor;

use Amp\Promise;
use ServiceBus\Common\Context\ServiceBusContext;

/**
 * Message (event/command) handler.
 */
interface MessageExecutor
{
    /**
     * Handle message.
     *
     * @return Promise<null>
     *
     * @throws \Throwable
     * @throws \ServiceBus\Common\MessageExecutor\Exceptions\MessageExecutionFailed
     */
    public function __invoke(object $message, ServiceBusContext $context): Promise;
}
