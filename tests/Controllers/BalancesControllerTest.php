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
use PayQuickerSDKLib\Controllers\BalancesController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class BalancesControllerTest extends BaseTestController
{
    /**
     * @var BalancesController BalancesController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getBalancesController();
    }

    public function testListAccountBalances()
    {
        // Parameters for the API call
        $accountToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';
        $page = 1;
        $pageSize = 20;
        $filter = 'string';
        $sort = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listAccountBalances(
                $accountToken,
                $page,
                $pageSize,
                $filter,
                $sort,
                $language
            );
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
                '{"payload":[{"amount":0,"currency":"USD","formattedAmount":"$0.00 USD","token"' .
                ':"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","links":[{"href":"https://api.sand' .
                'box.payquicker.io/api/v2/accounts/acct-3908ab5a-6ce1-474d-8b80-a63a7b147860/bal' .
                'ances","params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"20","pageCo' .
                'unt":"0","recordCount":"0","timezone":"GMT","requestRef":"request-reference-val' .
                'ue"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/accounts/acct-3' .
                '908ab5a-6ce1-474d-8b80-a63a7b147860/balances?page=1&pageSize=20&language=en-US"' .
                ',"params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testListUserBalances()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $page = 1;
        $pageSize = 20;
        $filter = 'string';
        $sort = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listUserBalances($userToken, $page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"amount":0,"currency":"USD","formattedAmount":"$0.00 USD","token"' .
                ':"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","links":[{"href":"https://api.sand' .
                'box.payquicker.io/api/v2/accounts/acct-3908ab5a-6ce1-474d-8b80-a63a7b147860/bal' .
                'ances","params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"20","pageCo' .
                'unt":"0","recordCount":"0","timezone":"GMT","requestRef":"request-reference-val' .
                'ue"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/accounts/acct-3' .
                '908ab5a-6ce1-474d-8b80-a63a7b147860/balances?page=1&pageSize=20&language=en-US"' .
                ',"params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrieveCardBalance()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveCardBalance($userToken, $destinationToken, $language);
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
                '{"amount":0,"currency":"USD","formattedAmount":"$0.00 USD","token":"dest-2de9d' .
                'dbf-2631-4c94-a699-90917f113b24","links":[{"href":"https://api.sandbox.payquick' .
                'er.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/prepaid-cards/dest' .
                '-2de9ddbf-2631-4c94-a699-90917f113b24/balances","params":{"rel":"self"}}],"meta' .
                '":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }
}
