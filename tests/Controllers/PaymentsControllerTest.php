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
use PayQuickerSDKLib\Controllers\PaymentsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class PaymentsControllerTest extends BaseTestController
{
    /**
     * @var PaymentsController PaymentsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getPaymentsController();
    }

    public function testListPayments()
    {
        // Parameters for the API call
        $page = 1;
        $pageSize = 20;
        $filter = 'string';
        $sort = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listPayments($page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"pmnt-9ed0cd25-aaf5-4683-9a29-b02a9dc40400","amount":-150' .
                '0,"autoAcceptQuote":false,"clientPaymentId":"3cdb0e3f-666a-4a32-86e3-676c859326' .
                '2a","created":"2021-06-08T19:25:13Z","currency":"USD","destinationToken":"user-' .
                'b41dee0e-f1ca-4e1b-9e1e-e95d13ad8fa2","memo":"Payment 1 Memo","note":"Payment 1' .
                ' Note","purpose":"INCOME","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147' .
                '860","status":"ACCEPTED","receiptToken":"rcpt-c05ac500-c5b0-4870-8e66-1004eee26' .
                'e4b","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/payments/pmnt-9' .
                'ed0cd25-aaf5-4683-9a29-b02a9dc40400","params":{"rel":"self"}}]},{"token":"pmnt-' .
                '5cd70578-fabd-4bed-8e60-af69addb21a1","amount":120,"autoAcceptQuote":false,"cli' .
                'entPaymentId":"6739f368-fa91-46d3-a221-5cd0d75be85a","created":"2021-06-08T19:2' .
                '6:04Z","currency":"USD","destinationToken":"user-b41dee0e-f1ca-4e1b-9e1e-e95d13' .
                'ad8fa2","memo":"Payment 1 Memo","note":"Payment 1 Note","purpose":"INCOME","sou' .
                'rceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status":"CANCELLED","lin' .
                'ks":[{"href":"https://api.sandbox.payquicker.io/api/v2/payments/pmnt-5cd70578-f' .
                'abd-4bed-8e60-af69addb21a1","params":{"rel":"self"}}]},{"token":"pmnt-cb279676-' .
                '6ecf-46e5-b5c8-96f0b6b9ae59","amount":-50,"autoAcceptQuote":true,"clientPayment' .
                'Id":"9422dab5-2ea8-47af-8d25-a10aef6efa50","created":"2021-06-08T19:26:26Z","cu' .
                'rrency":"USD","destinationToken":"user-b41dee0e-f1ca-4e1b-9e1e-e95d13ad8fa2","m' .
                'emo":"Payment 1 Memo","note":"Payment 1 Note","purpose":"INCOME","sourceToken":' .
                '"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status":"ACCEPTED","receiptToken":' .
                '"rcpt-b1d53179-dd25-4f53-b9ae-d3f23832b7a8","links":[{"href":"https://api.sandb' .
                'ox.payquicker.io/api/v2/payments/pmnt-cb279676-6ecf-46e5-b5c8-96f0b6b9ae59","pa' .
                'rams":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"3","pageCount":"99","' .
                'recordCount":"296","timezone":"GMT","requestRef":"request-reference-value"},"li' .
                'nks":[{"href":"https://api.sandbox.payquicker.io/api/v2/payments?page=1&pageSiz' .
                'e=3&language=en-US","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testCreatePaymentQuote()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createPaymentQuote($body);
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
                '{"token":"pmnt-37be18b6-301a-4a37-8723-ddf645abcdb7","amount":-1500,"autoAccep' .
                'tQuote":false,"clientPaymentId":"de6269af-e3b0-4d4b-801d-367776b32f63","created' .
                '":"2022-04-26T15:16:18Z","currency":"USD","destinationToken":"dest-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc","memo":"Payment 1 Memo","note":"Payment 1 Note","purp' .
                'ose":"INCOME","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status' .
                '":"ACCEPTED","receiptToken":"rcpt-30bfaaf3-69bc-4ed5-ad6a-d38705cf0281","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/payments/pmnt-37be18b6-301a' .
                '-4a37-8723-ddf645abcdb7","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCreatePaymentQuote1()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createPaymentQuote($body);
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
                '{"token":"pmnt-37be18b6-301a-4a37-8723-ddf645abcdb7","amount":-1500,"autoAccep' .
                'tQuote":false,"clientPaymentId":"de6269af-e3b0-4d4b-801d-367776b32f63","created' .
                '":"2022-04-26T15:16:18Z","currency":"USD","destinationToken":"dest-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc","memo":"Payment 1 Memo","note":"Payment 1 Note","purp' .
                'ose":"INCOME","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status' .
                '":"ACCEPTED","receiptToken":"rcpt-30bfaaf3-69bc-4ed5-ad6a-d38705cf0281","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/payments/pmnt-37be18b6-301a' .
                '-4a37-8723-ddf645abcdb7","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testRetrievePayment()
    {
        // Parameters for the API call
        $paymentToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';
        $filter = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrievePayment($paymentToken, $filter, $language);
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
                '{"token":"pmnt-37be18b6-301a-4a37-8723-ddf645abcdb7","amount":-1500,"autoAccep' .
                'tQuote":false,"clientPaymentId":"de6269af-e3b0-4d4b-801d-367776b32f63","created' .
                '":"2022-04-26T15:16:18Z","currency":"USD","destinationToken":"dest-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc","memo":"Payment 1 Memo","note":"Payment 1 Note","purp' .
                'ose":"INCOME","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status' .
                '":"ACCEPTED","receiptToken":"rcpt-30bfaaf3-69bc-4ed5-ad6a-d38705cf0281","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/payments/pmnt-37be18b6-301a' .
                '-4a37-8723-ddf645abcdb7","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testAcceptPaymentQuote()
    {
        // Parameters for the API call
        $paymentToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->acceptPaymentQuote($paymentToken);
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
                '{"token":"pmnt-37be18b6-301a-4a37-8723-ddf645abcdb7","amount":-1500,"autoAccep' .
                'tQuote":false,"clientPaymentId":"de6269af-e3b0-4d4b-801d-367776b32f63","created' .
                '":"2022-04-26T15:16:18Z","currency":"USD","destinationToken":"dest-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc","memo":"Payment 1 Memo","note":"Payment 1 Note","purp' .
                'ose":"INCOME","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status' .
                '":"ACCEPTED","receiptToken":"rcpt-30bfaaf3-69bc-4ed5-ad6a-d38705cf0281","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/payments/pmnt-37be18b6-301a' .
                '-4a37-8723-ddf645abcdb7","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testAcceptPaymentQuote1()
    {
        // Parameters for the API call
        $paymentToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->acceptPaymentQuote($paymentToken);
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
                '{"token":"pmnt-37be18b6-301a-4a37-8723-ddf645abcdb7","amount":-1500,"autoAccep' .
                'tQuote":false,"clientPaymentId":"de6269af-e3b0-4d4b-801d-367776b32f63","created' .
                '":"2022-04-26T15:16:18Z","currency":"USD","destinationToken":"dest-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc","memo":"Payment 1 Memo","note":"Payment 1 Note","purp' .
                'ose":"INCOME","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status' .
                '":"ACCEPTED","receiptToken":"rcpt-30bfaaf3-69bc-4ed5-ad6a-d38705cf0281","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/payments/pmnt-37be18b6-301a' .
                '-4a37-8723-ddf645abcdb7","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCancelPaymentQuote()
    {
        // Parameters for the API call
        $paymentToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->cancelPaymentQuote($paymentToken);
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
                '{"token":"pmnt-37be18b6-301a-4a37-8723-ddf645abcdb7","amount":-1500,"autoAccep' .
                'tQuote":false,"clientPaymentId":"de6269af-e3b0-4d4b-801d-367776b32f63","created' .
                '":"2022-04-26T15:16:18Z","currency":"USD","destinationToken":"dest-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc","memo":"Payment 1 Memo","note":"Payment 1 Note","purp' .
                'ose":"INCOME","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status' .
                '":"ACCEPTED","receiptToken":"rcpt-30bfaaf3-69bc-4ed5-ad6a-d38705cf0281","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/payments/pmnt-37be18b6-301a' .
                '-4a37-8723-ddf645abcdb7","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testRetractPayment()
    {
        // Parameters for the API call
        $paymentToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retractPayment($paymentToken);
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
                '{"token":"pmnt-37be18b6-301a-4a37-8723-ddf645abcdb7","amount":-1500,"autoAccep' .
                'tQuote":false,"clientPaymentId":"de6269af-e3b0-4d4b-801d-367776b32f63","created' .
                '":"2022-04-26T15:16:18Z","currency":"USD","destinationToken":"dest-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc","memo":"Payment 1 Memo","note":"Payment 1 Note","purp' .
                'ose":"INCOME","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status' .
                '":"ACCEPTED","receiptToken":"rcpt-30bfaaf3-69bc-4ed5-ad6a-d38705cf0281","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/payments/pmnt-37be18b6-301a' .
                '-4a37-8723-ddf645abcdb7","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }
}
