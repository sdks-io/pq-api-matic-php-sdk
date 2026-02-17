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
use PayQuickerSDKLib\Controllers\SpendbackController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class SpendbackControllerTest extends BaseTestController
{
    /**
     * @var SpendbackController SpendbackController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getSpendbackController();
    }

    public function testListSpendbacks()
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
            $result = self::$controller->listSpendbacks($page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"spnd-c62fd949-78ef-4f32-aef7-5de8d0c6f4a7","amount":300,' .
                '"autoAcceptQuote":false,"clientSpendbackId":"8c3b61d7-1f5a-4bb9-8ffc-ac756c27a3' .
                'e1","created":"2021-06-08T19:30:03Z","currency":"USD","destinationToken":"acct-' .
                '3908ab5a-6ce1-474d-8b80-a63a7b147860","memo":"Spendback 1 Memo","note":"Spendba' .
                'ck 1 Note","purpose":"EXPENSE","sourceToken":"user-b41dee0e-f1ca-4e1b-9e1e-e95d' .
                '13ad8fa2","status":"ACCEPTED","receiptToken":"rcpt-4aaa0738-24d9-40bd-a548-1893' .
                '2a6c7f5c","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/spend-back' .
                '/spnd-c62fd949-78ef-4f32-aef7-5de8d0c6f4a7","params":{"rel":"self"}}]},{"token"' .
                ':"spnd-9d769a60-4d59-4905-bb46-8f6856121f2a","amount":35,"autoAcceptQuote":fals' .
                'e,"clientSpendbackId":"37ebee96-eb48-4689-8079-b650e2a4e753","created":"2021-06' .
                '-08T19:31:56Z","currency":"USD","destinationToken":"acct-3908ab5a-6ce1-474d-8b8' .
                '0-a63a7b147860","memo":"Spendback 1 Memo","note":"Spendback 1 Note","purpose":"' .
                'EXPENSE","sourceToken":"user-b41dee0e-f1ca-4e1b-9e1e-e95d13ad8fa2","status":"CA' .
                'NCELLED","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/spend-back/' .
                'spnd-9d769a60-4d59-4905-bb46-8f6856121f2a","params":{"rel":"self"}}]},{"token":' .
                '"spnd-bc16fb78-e391-4796-8a82-4fe7d7473c1a","amount":100,"autoAcceptQuote":true' .
                ',"clientSpendbackId":"35bc04d0-e98f-4ca9-817b-d62c3b320d6f","created":"2021-06-' .
                '08T19:33:18Z","currency":"USD","destinationToken":"acct-3908ab5a-6ce1-474d-8b80' .
                '-a63a7b147860","memo":"Spendback 1 Memo","note":"Spendback 1 Note","purpose":"E' .
                'XPENSE","sourceToken":"user-b41dee0e-f1ca-4e1b-9e1e-e95d13ad8fa2","status":"ACC' .
                'EPTED","receiptToken":"rcpt-6dbd9a70-75c9-49b7-aff6-34708ed491df","links":[{"hr' .
                'ef":"https://api.sandbox.payquicker.io/api/v2/spend-back/spnd-bc16fb78-e391-479' .
                '6-8a82-4fe7d7473c1a","params":{"rel":"self"}}]},{"token":"spnd-4d14117c-3e8b-42' .
                '75-9863-f85762ac32fb","amount":100,"autoAcceptQuote":true,"clientSpendbackId":"' .
                'SPENDBACKRETURN-79f6126943bd451f99bb38649da1ea10","created":"2021-06-08T19:34:3' .
                '3Z","currency":"USD","destinationToken":"acct-70739320-c917-425c-a77a-d647c65fd' .
                '175","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","status":"FAILED' .
                '","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/spend-back/spnd-4d' .
                '14117c-3e8b-4275-9863-f85762ac32fb","params":{"rel":"self"}}]},{"token":"spnd-2' .
                '5b877b2-fb00-4c9a-a464-f91a6597e752","amount":20,"autoAcceptQuote":true,"client' .
                'SpendbackId":"9b97af1c-53b6-42a0-b19c-eaffdc48a854","created":"2021-06-08T19:35' .
                ':00Z","currency":"USD","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b1' .
                '47860","memo":"Spendback 1 Memo","note":"Spendback 1 Note","purpose":"EXPENSE",' .
                '"sourceToken":"user-b41dee0e-f1ca-4e1b-9e1e-e95d13ad8fa2","status":"ACCEPTED","' .
                'receiptToken":"rcpt-e69b9edb-23c3-4a47-900c-60b7addbbae2","links":[{"href":"htt' .
                'ps://api.sandbox.payquicker.io/api/v2/spend-back/spnd-25b877b2-fb00-4c9a-a464-f' .
                '91a6597e752","params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"5","p' .
                'ageCount":"13","recordCount":"64","timezone":"GMT","requestRef":"request-refere' .
                'nce-value"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/spend-ba' .
                'ck?page=1&pageSize=5&language=en-US","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testCreateSpendbackQuote()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createSpendbackQuote($body);
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
                '{"token":"spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","amount":300,"autoAcceptQ' .
                'uote":false,"clientSpendbackId":"08c6d59d-a04d-4603-8104-10c9d4c61f0d","created' .
                '":"2022-05-02T16:45:09Z","currency":"USD","destinationToken":"acct-3908ab5a-6ce' .
                '1-474d-8b80-a63a7b147860","memo":"Spendback 1 Memo","note":"Spendback 1 Note","' .
                'purpose":"EXPENSE","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","s' .
                'tatus":"PENDING_ACCEPTANCE","links":[{"href":"https://api.sandbox.payquicker.io' .
                '/api/v2/spend-back/spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","params":{"rel":"' .
                'self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCreateSpendbackQuote1()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createSpendbackQuote($body);
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
                '{"token":"spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","amount":300,"autoAcceptQ' .
                'uote":false,"clientSpendbackId":"08c6d59d-a04d-4603-8104-10c9d4c61f0d","created' .
                '":"2022-05-02T16:45:09Z","currency":"USD","destinationToken":"acct-3908ab5a-6ce' .
                '1-474d-8b80-a63a7b147860","memo":"Spendback 1 Memo","note":"Spendback 1 Note","' .
                'purpose":"EXPENSE","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","s' .
                'tatus":"PENDING_ACCEPTANCE","links":[{"href":"https://api.sandbox.payquicker.io' .
                '/api/v2/spend-back/spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","params":{"rel":"' .
                'self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveSpendback()
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
            $result = self::$controller->retrieveSpendback(
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
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"token":"spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","amount":300,"autoAcceptQ' .
                'uote":false,"clientSpendbackId":"08c6d59d-a04d-4603-8104-10c9d4c61f0d","created' .
                '":"2022-05-02T16:45:09Z","currency":"USD","destinationToken":"acct-3908ab5a-6ce' .
                '1-474d-8b80-a63a7b147860","memo":"Spendback 1 Memo","note":"Spendback 1 Note","' .
                'purpose":"EXPENSE","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","s' .
                'tatus":"PENDING_ACCEPTANCE","links":[{"href":"https://api.sandbox.payquicker.io' .
                '/api/v2/spend-back/spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","params":{"rel":"' .
                'self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testAcceptSpendbackQuote()
    {
        // Parameters for the API call
        $spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->acceptSpendbackQuote($spendbackToken);
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
                '{"token":"spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","amount":300,"autoAcceptQ' .
                'uote":false,"clientSpendbackId":"08c6d59d-a04d-4603-8104-10c9d4c61f0d","created' .
                '":"2022-05-02T16:45:09Z","currency":"USD","destinationToken":"acct-3908ab5a-6ce' .
                '1-474d-8b80-a63a7b147860","memo":"Spendback 1 Memo","note":"Spendback 1 Note","' .
                'purpose":"EXPENSE","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","s' .
                'tatus":"PENDING_ACCEPTANCE","links":[{"href":"https://api.sandbox.payquicker.io' .
                '/api/v2/spend-back/spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","params":{"rel":"' .
                'self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testAcceptSpendbackQuote1()
    {
        // Parameters for the API call
        $spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->acceptSpendbackQuote($spendbackToken);
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
                '{"token":"spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","amount":300,"autoAcceptQ' .
                'uote":false,"clientSpendbackId":"08c6d59d-a04d-4603-8104-10c9d4c61f0d","created' .
                '":"2022-05-02T16:45:09Z","currency":"USD","destinationToken":"acct-3908ab5a-6ce' .
                '1-474d-8b80-a63a7b147860","memo":"Spendback 1 Memo","note":"Spendback 1 Note","' .
                'purpose":"EXPENSE","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","s' .
                'tatus":"PENDING_ACCEPTANCE","links":[{"href":"https://api.sandbox.payquicker.io' .
                '/api/v2/spend-back/spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","params":{"rel":"' .
                'self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCancelSpendbackQuote()
    {
        // Parameters for the API call
        $spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->cancelSpendbackQuote($spendbackToken);
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
                '{"token":"spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","amount":300,"autoAcceptQ' .
                'uote":false,"clientSpendbackId":"08c6d59d-a04d-4603-8104-10c9d4c61f0d","created' .
                '":"2022-05-02T16:45:09Z","currency":"USD","destinationToken":"acct-3908ab5a-6ce' .
                '1-474d-8b80-a63a7b147860","memo":"Spendback 1 Memo","note":"Spendback 1 Note","' .
                'purpose":"EXPENSE","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","s' .
                'tatus":"PENDING_ACCEPTANCE","links":[{"href":"https://api.sandbox.payquicker.io' .
                '/api/v2/spend-back/spnd-4c414196-d3dd-4233-a729-6fc2da0810eb","params":{"rel":"' .
                'self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }
}
