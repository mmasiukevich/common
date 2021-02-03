<?php

/**
 * PHP Service Bus common component.
 *
 * @author  Maksim Masiukevich <contacts@desperado.dev>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace ServiceBus\Common\Tests;

final class SecondClass extends FirstClass
{
    /**
     * @var string
     */
    private $secondClassValue = 'root';

    /**
     * @var string
     */
    private $secondClassPublicValue = 'abube';

    public function secondClassValue(): string
    {
        return $this->secondClassValue;
    }

    public function secondClassPublicValue(): string
    {
        return $this->secondClassPublicValue;
    }

    /**
     * @noinspection PhpUnusedPrivateMethodInspection
     */
    private function privateMethod(string $text): string
    {
        return $text;
    }
}
