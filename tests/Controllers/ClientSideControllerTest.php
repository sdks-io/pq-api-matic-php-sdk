<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use PayQuickerSDKLib\Controllers\ClientSideController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class ClientSideControllerTest extends BaseTestController
{
    /**
     * @var ClientSideController ClientSideController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getClientSideController();
    }

    public function testCreateCardDataToken()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $format = Models\PrepaidCardDataType::TEXT;
        $side = Models\PrepaidCardImageSide::FRONT;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createCardDataToken($userToken, $destinationToken, $format, $side);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"cardProcessorType":"QOLO","resourceValue":"b61bc8708ab84870a2096398b60269d5"' .
                ',"token":"iEureKuLW1gZQ7d3/2ijX4+6bDZuUwpp2QmhPfedarncS2Cde1Ebmby+dxfeP7+Iaty9Y' .
                'YCLFwY42HHOm03dliH7Jp0Yo/sjOb/FmSQ3IOVYpNSYBcZYGmgpyBEG9gPa2HRIKK8+NcPVjjb+0gfq' .
                'FAI52Emk0P+VPaBZ2NgsENV/I4MuIkWsUXha3QZh49a0EK3wO14jwR4BosY/rk0/9F5uJEWUjv8gvPe' .
                'j+dCFyMnybjj6jPK9f/gFlPUYVHuS","tokenPurposeType":"CARD_OPERATION","url":"https' .
                '://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172f' .
                'b4bc/prepaid-cards/dest-b61bc870-8ab8-4870-a209-6398b60269d5/pci?token=iEureKuL' .
                'W1gZQ7d3%2f2ijX4%2b6bDZuUwpp2QmhPfedarncS2Cde1Ebmby%2bdxfeP7%2bIaty9YYCLFwY42HH' .
                'Om03dliH7Jp0Yo%2fsjOb%2fFmSQ3IOVYpNSYBcZYGmgpyBEG9gPa2HRIKK8%2bNcPVjjb%2b0gfqFA' .
                'I52Emk0P%2bVPaBZ2NgsENV%2fI4MuIkWsUXha3QZh49a0EK3wO14jwR4BosY%2frk0%2f9F5uJEWUj' .
                'v8gvPej%2bdCFyMnybjj6jPK9f%2fgFlPUYVHuS&format=TEXT","links":[{"href":"https://' .
                'api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4b' .
                'c/prepaid-cards/dest-b61bc870-8ab8-4870-a209-6398b60269d5/pci/iEureKuLW1gZQ7d3/' .
                '2ijX4+6bDZuUwpp2QmhPfedarncS2Cde1Ebmby+dxfeP7+Iaty9YYCLFwY42HHOm03dliH7Jp0Yo/sj' .
                'Ob/FmSQ3IOVYpNSYBcZYGmgpyBEG9gPa2HRIKK8+NcPVjjb+0gfqFAI52Emk0P+VPaBZ2NgsENV/I4M' .
                'uIkWsUXha3QZh49a0EK3wO14jwR4BosY/rk0/9F5uJEWUjv8gvPej+dCFyMnybjj6jPK9f/gFlPUYVH' .
                'uS","params":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-re' .
                'ference-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveCardData()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $format = Models\PrepaidCardDataType::TEXT;
        $side = Models\PrepaidCardImageSide::FRONT;
        $body = TestParam::object(
            '{"Token":"iEureKuLW1gZQ7d3/2ijX4+6bDZuUwpp2QmhPfedarncS2Cde1Ebmby+dxfeP7+Iaty9YYCL' .
            'FwY42HHOm03dliH7Jp0Yo/sjOb/FmSQ3IOVYpNSYBcZYGmgpyBEG9gPa2HRIKK8+NcPVjjb+0gfqFAI52Em' .
            'k0P+VPaBZ2NgsENV/I4MuIkWsUXha3QZh49a0EK3wO14jwR4BosY/rk0/9F5uJEWUjv8gvPej+dCFyMnybj' .
            'j6jPK9f/gFlPUYVHuS"}',
            Models\RetrieveCardData::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveCardData($userToken, $destinationToken, $format, $side, $body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"cardNumber":4833180000103940,"cvvNumber":"709","expiration":"04/25","nameOnC' .
                'ard":"SIDNEY MAYER","token":"dest-b61bc870-8ab8-4870-a209-6398b60269d5","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc/prepaid-cards/dest-b61bc870-8ab8-4870-a209-6398b60269d5/pc' .
                'i","params":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-ref' .
                'erence-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveCardData1()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $format = Models\PrepaidCardDataType::TEXT;
        $side = Models\PrepaidCardImageSide::FRONT;
        $body = TestParam::object(
            '{"Token":"iEureKuLW1gZQ7d3/2ijX4+6bDZuUwpp2QmhPfedarncS2Cde1Ebmby+dxfeP7+Iaty9YYCL' .
            'FwY42HHOm03dliH7Jp0Yo/sjOb/FmSQ3IOVYpNSYBcZYGmgpyBEG9gPa2HRIKK8+NcPVjjb+0gfqFAI52Em' .
            'k0P+VPaBZ2NgsENV/I4MuIkWsUXha3QZh49a0EK3wO14jwR4BosY/rk0/9F5uJEWUjv8gvPej+dCFyMnybj' .
            'j6jPK9f/gFlPUYVHuS"}',
            Models\RetrieveCardData::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveCardData($userToken, $destinationToken, $format, $side, $body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"cardNumber":4833180000103940,"cvvNumber":"709","expiration":"04/25","nameOnC' .
                'ard":"SIDNEY MAYER","token":"dest-b61bc870-8ab8-4870-a209-6398b60269d5","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc/prepaid-cards/dest-b61bc870-8ab8-4870-a209-6398b60269d5/pc' .
                'i","params":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-ref' .
                'erence-value"}}'
            )))
            ->assert();
    }

    public function testCreateCardPINToken()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createCardPINToken($userToken, $destinationToken);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"cardProcessorType":"QOLO","cardPinToken":"/YnZvwn9Q5TczQhubfjB8Sq1inIVtMGnKT' .
                '9ywAcan60uavrMNeMAR1RGyuWj7N8XOiy7W2QrEXGzM/668UIJMzTFOlVqSrkQSn22ErWCb5BQTYXl0' .
                '4sF1nW73u8aykRHi1c4lGhu3kSrTKxqqN/GtEJTcDV+SfBj/huWQZrdWTxdbnN2XX5jqNkGUHbfkFU0' .
                's9oxxwX6cYYreBbtmo0WFSLS0o2RT+LGAtiEqgPvT5T6NlZlNa+TF17gbgxHi0sG","token":"dest' .
                '-b61bc870-8ab8-4870-a209-6398b60269d5","url":"https://api.sandbox.payquicker.io' .
                '/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/prepaid-cards/dest-b61b' .
                'c870-8ab8-4870-a209-6398b60269d5/pin?token=%2fYnZvwn9Q5TczQhubfjB8Sq1inIVtMGnKT' .
                '9ywAcan60uavrMNeMAR1RGyuWj7N8XOiy7W2QrEXGzM%2f668UIJMzTFOlVqSrkQSn22ErWCb5BQTYX' .
                'l04sF1nW73u8aykRHi1c4lGhu3kSrTKxqqN%2fGtEJTcDV%2bSfBj%2fhuWQZrdWTxdbnN2XX5jqNkG' .
                'UHbfkFU0s9oxxwX6cYYreBbtmo0WFSLS0o2RT%2bLGAtiEqgPvT5T6NlZlNa%2bTF17gbgxHi0sG","' .
                'links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d' .
                '12e-4647-a887-d905172fb4bc/prepaid-cards/dest-b61bc870-8ab8-4870-a209-6398b6026' .
                '9d5/pin","params":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"reque' .
                'st-reference-value"}}'
            )))
            ->assert();
    }

    public function testUpdateCardPIN()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $body = TestParam::object(
            '{"cardPinToken":"05OQkdzRkzjP+qlhTrsko00cb58gGERv+g1Nd7/xK+Ol2+vJaOJnjQgdFA0Jqf5TF' .
            'dYZrjO7dw/2l1V9k8xNGVr3MyKHrQh/CZ+HMz2gdI3VkJVj0x50PStECnN0t1P4eXTZqmh93O24fXRyvLn8' .
            'XvmfyV7nF94IEwzwVe6Xdvl6mHQyyyNwtSNKHtNGGpM88hoX5PAvbqgYrsy5tBYi3CcN+Ld5Ia8+nFq9pDA' .
            'Xs6dCLsidU9XJRzLLcWWdhzxR","cardPin":"4444"}',
            Models\UpdateCardPin::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updateCardPIN($userToken, $destinationToken, $body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(
                TestParam::object(
                    '{"result":true,"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
                )
            ))
            ->assert();
    }

    public function testRetrieveCardPIN()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $body = TestParam::object(
            '{"cardPinToken":"IzPQ55SGbTumVRn7xscpjL9zgFV29503mQ+GJuKAzCYl8DhLkJKZSBqPLWx6rBf/k' .
            'y9FRqZCptCCVmZ3ZT+sR6sVmBDT9vfK+8Bbv/6Kftz+Pu9DJOXTwd7Hcs9PuaU5qirAq9rp3P5pKL5Ilg+Z' .
            'kU8b7TP2ZMBIchxYHZG5aJ3b96BdlMyEB4bu1UATKOjS2+vYFLUFprtwbnwp94QuaiFALG9NMClQ3CqWJqo' .
            't/Z1DSbTnPqIq+BRzA8Xdbh1j"}',
            Models\RetrieveCardPin::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveCardPIN($userToken, $destinationToken, $body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"cardPin":"4444","token":"dest-b61bc870-8ab8-4870-a209-6398b60269d5","links":' .
                '[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-464' .
                '7-a887-d905172fb4bc/prepaid-cards/dest-b61bc870-8ab8-4870-a209-6398b60269d5/pin' .
                '","params":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-refe' .
                'rence-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveCardPIN1()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $body = TestParam::object(
            '{"cardPinToken":"IzPQ55SGbTumVRn7xscpjL9zgFV29503mQ+GJuKAzCYl8DhLkJKZSBqPLWx6rBf/k' .
            'y9FRqZCptCCVmZ3ZT+sR6sVmBDT9vfK+8Bbv/6Kftz+Pu9DJOXTwd7Hcs9PuaU5qirAq9rp3P5pKL5Ilg+Z' .
            'kU8b7TP2ZMBIchxYHZG5aJ3b96BdlMyEB4bu1UATKOjS2+vYFLUFprtwbnwp94QuaiFALG9NMClQ3CqWJqo' .
            't/Z1DSbTnPqIq+BRzA8Xdbh1j"}',
            Models\RetrieveCardPin::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveCardPIN($userToken, $destinationToken, $body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"cardPin":"4444","token":"dest-b61bc870-8ab8-4870-a209-6398b60269d5","links":' .
                '[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-464' .
                '7-a887-d905172fb4bc/prepaid-cards/dest-b61bc870-8ab8-4870-a209-6398b60269d5/pin' .
                '","params":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-refe' .
                'rence-value"}}'
            )))
            ->assert();
    }
}
