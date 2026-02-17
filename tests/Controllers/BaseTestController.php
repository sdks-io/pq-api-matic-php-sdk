<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Tests\Controllers;

use Core\TestCase\CoreTestCase;
use Core\Types\CallbackCatcher;
use PayQuickerSDKLib\PayQuickerSDKClient;
use PayQuickerSDKLib\Tests\ClientFactory;
use PHPUnit\Framework\TestCase;

class BaseTestController extends TestCase
{
    /**
     * @var CallbackCatcher Callback
     */
    protected static $callbackCatcher;

    protected function newTestCase($result): CoreTestCase
    {
        return new CoreTestCase($this, self::$callbackCatcher, $result);
    }

    protected static function getClient(): PayQuickerSDKClient
    {
        self::$callbackCatcher = new CallbackCatcher();
        return ClientFactory::create(self::$callbackCatcher);
    }
}
