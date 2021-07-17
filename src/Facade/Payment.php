<?php

namespace Tookantech\Payment\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Payment
 *
 * @package Tookantech\Payment\Facade
 */
class Payment extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'shetabit-payment';
    }
}
