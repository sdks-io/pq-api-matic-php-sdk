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
use PayQuickerSDKLib\Controllers\StatementsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class StatementsControllerTest extends BaseTestController
{
    /**
     * @var StatementsController StatementsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getStatementsController();
    }

    public function testListPrepaidCardStatements()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $page = 1;
        $pageSize = 20;
        $filter = 'string';
        $sort = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listPrepaidCardStatements(
                $userToken,
                $destinationToken,
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
                '{"payload":[{"token":"docu-17a0da7e-dd4a-44ab-9bc5-73554d9c4b48","userToken":"' .
                'user-02e4d25a-af16-4e74-8b8d-6fa45b78af72","prepaidCardToken":"dest-0aeed588-49' .
                '4c-444a-8c76-d5df54bdc435","from":"2021-10-18T00:00:00Z","to":"2021-11-17T00:00' .
                ':00Z","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-631' .
                'b200f-665d-4dbe-bd01-3063c9dec97d/prepaid-cards/dest-0aeed588-494c-444a-8c76-d5' .
                'df54bdc435/statements/docu-17a0da7e-dd4a-44ab-9bc5-73554d9c4b48","params":{"rel' .
                '":"self"}}]},{"token":"docu-b4879d40-372f-4dc5-ac85-c83b662a240e","userToken":"' .
                'user-02e4d25a-af16-4e74-8b8d-6fa45b78af72","prepaidCardToken":"dest-0aeed588-49' .
                '4c-444a-8c76-d5df54bdc435","from":"2021-11-18T00:00:00Z","to":"2021-12-17T00:00' .
                ':00Z","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-631' .
                'b200f-665d-4dbe-bd01-3063c9dec97d/prepaid-cards/dest-0aeed588-494c-444a-8c76-d5' .
                'df54bdc435/statements/docu-b4879d40-372f-4dc5-ac85-c83b662a240e","params":{"rel' .
                '":"self"}}]}],"meta":{"pageNo":"1","pageSize":"100","pageCount":"0","recordCoun' .
                't":"0","timezone":"GMT","requestRef":"request-reference-value"},"links":[{"href' .
                '":"https://api.sandbox.payquicker.io/api/v2/users/user-631b200f-665d-4dbe-bd01-' .
                '3063c9dec97d/prepaid-cards/dest-0aeed588-494c-444a-8c76-d5df54bdc435/statements' .
                '","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrievePrepaidCardStatement()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $documentToken = 'docu-6e582242-5dd4-4883-b0c2-488e09a26595';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrievePrepaidCardStatement(
                $userToken,
                $destinationToken,
                $documentToken
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
                '{"fileContents":"JVBERi0xLj........QKg2MjcKJSVFT0YK","filename":"Statement-950' .
                '6c668-11-17-2021.pdf","mimeType":"application/pdf","token":"docu-17a0da7e-dd4a-' .
                '44ab-9bc5-73554d9c4b48","userToken":"user-02e4d25a-af16-4e74-8b8d-6fa45b78af72"' .
                ',"prepaidCardToken":"dest-0aeed588-494c-444a-8c76-d5df54bdc435","from":"2021-10' .
                '-18T00:00:00Z","to":"2021-11-17T00:00:00Z","links":[{"href":"https://api.sandbo' .
                'x.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/prepaid-' .
                'cards/dest-0aeed588-494c-444a-8c76-d5df54bdc435/statements/docu-17a0da7e-dd4a-4' .
                '4ab-9bc5-73554d9c4b48","params":{"rel":"self"}}],"meta":{"timezone":"GMT","requ' .
                'estRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testListStatements()
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
            $result = self::$controller->listStatements($userToken, $page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"docu-17a0da7e-dd4a-44ab-9bc5-73554d9c4b48","userToken":"' .
                'user-02e4d25a-af16-4e74-8b8d-6fa45b78af72","prepaidCardToken":"dest-0aeed588-49' .
                '4c-444a-8c76-d5df54bdc435","from":"2021-10-18T00:00:00Z","to":"2021-11-17T00:00' .
                ':00Z","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-631' .
                'b200f-665d-4dbe-bd01-3063c9dec97d/prepaid-cards/dest-0aeed588-494c-444a-8c76-d5' .
                'df54bdc435/statements/docu-17a0da7e-dd4a-44ab-9bc5-73554d9c4b48","params":{"rel' .
                '":"self"}}]},{"token":"docu-b4879d40-372f-4dc5-ac85-c83b662a240e","userToken":"' .
                'user-02e4d25a-af16-4e74-8b8d-6fa45b78af72","prepaidCardToken":"dest-0aeed588-49' .
                '4c-444a-8c76-d5df54bdc435","from":"2021-11-18T00:00:00Z","to":"2021-12-17T00:00' .
                ':00Z","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-631' .
                'b200f-665d-4dbe-bd01-3063c9dec97d/prepaid-cards/dest-0aeed588-494c-444a-8c76-d5' .
                'df54bdc435/statements/docu-b4879d40-372f-4dc5-ac85-c83b662a240e","params":{"rel' .
                '":"self"}}]}],"meta":{"pageNo":"1","pageSize":"100","pageCount":"0","recordCoun' .
                't":"0","timezone":"GMT","requestRef":"request-reference-value"},"links":[{"href' .
                '":"https://api.sandbox.payquicker.io/api/v2/users/user-631b200f-665d-4dbe-bd01-' .
                '3063c9dec97d/prepaid-cards/dest-0aeed588-494c-444a-8c76-d5df54bdc435/statements' .
                '","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrieveStatement()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $documentToken = 'docu-6e582242-5dd4-4883-b0c2-488e09a26595';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveStatement($userToken, $documentToken);
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
                '{"fileContents":"JVBERi0xLj........QKg2MjcKJSVFT0YK","filename":"Statement-950' .
                '6c668-11-17-2021.pdf","mimeType":"application/pdf","token":"docu-17a0da7e-dd4a-' .
                '44ab-9bc5-73554d9c4b48","userToken":"user-02e4d25a-af16-4e74-8b8d-6fa45b78af72"' .
                ',"prepaidCardToken":"dest-0aeed588-494c-444a-8c76-d5df54bdc435","from":"2021-10' .
                '-18T00:00:00Z","to":"2021-11-17T00:00:00Z","links":[{"href":"https://api.sandbo' .
                'x.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/prepaid-' .
                'cards/dest-0aeed588-494c-444a-8c76-d5df54bdc435/statements/docu-17a0da7e-dd4a-4' .
                '4ab-9bc5-73554d9c4b48","params":{"rel":"self"}}],"meta":{"timezone":"GMT","requ' .
                'estRef":"request-reference-value"}}'
            )))
            ->assert();
    }
}
