<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Tests\Controllers;

use Core\TestCase\TestParam;
use PayQuickerSDKLib\Controllers\SpendbackRefundsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class SpendbackRefundsControllerTest extends BaseTestController
{
    /**
     * @var SpendbackRefundsController SpendbackRefundsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getSpendbackRefundsController();
    }

    public function testListSpendbackRefunds()
    {
        // Parameters for the API call
        $spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $page = 1;
        $pageSize = 20;
        $filter = 'string';
        $sort = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listSpendbackRefunds(
                $spendbackToken,
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
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testCreateSpendbackRefundQuote()
    {
        // Parameters for the API call
        $spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $body = TestParam::object('{"amount":1.13}', Models\CreateSpendbackRefundQuote::class);

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createSpendbackRefundQuote($spendbackToken, $body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(201)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testCancelSpendbackRefundQuote()
    {
        // Parameters for the API call
        $spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $refundToken = 'rfnd-c39437e1-dc80-4293-8211-c14b5a32f762';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->cancelSpendbackRefundQuote($spendbackToken, $refundToken);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(201)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testRetrieveSpendbackRefund()
    {
        // Parameters for the API call
        $spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $refundToken = 'rfnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $page = 1;
        $pageSize = 20;
        $filter = 'string';
        $sort = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveSpendbackRefund(
                $spendbackToken,
                $refundToken,
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
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testAcceptSpendbackRefundQuote()
    {
        // Parameters for the API call
        $spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $refundToken = 'rfnd-c39437e1-dc80-4293-8211-c14b5a32f762';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->acceptSpendbackRefundQuote($spendbackToken, $refundToken);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(201)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }
}
