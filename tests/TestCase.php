<?php

namespace Tookantech\Payment\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Tookantech\Payment\Tests\Mocks\Drivers\BarDriver;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return ['Tookantech\Payment\Provider\PaymentServiceProvider'];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Payment' => 'Tookantech\Payment\Facade\Payment',
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $settings = require __DIR__.'/../src/Config/payment.php';
        $settings['drivers']['bar'] = ['key' => 'foo'];
        $settings['map']['bar'] = BarDriver::class;

        $app['config']->set('payment', $settings);
    }
}
