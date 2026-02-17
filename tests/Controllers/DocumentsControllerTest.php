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
use PayQuickerSDKLib\Controllers\DocumentsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class DocumentsControllerTest extends BaseTestController
{
    /**
     * @var DocumentsController DocumentsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getDocumentsController();
    }

    public function testListDocuments()
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
            $result = self::$controller->listDocuments($userToken, $page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"createDate":"2022-05-04T18:59:38Z","fields":[{"key":"TYPE","valu' .
                'e":"DRIVERS_LICENSE"},{"key":"STATUS","value":"PROVIDED"},{"key":"EXPIRATION_DA' .
                'TE","value":"10-31-2021"}],"filename":"List.jpg","mimeType":"image/jpeg","token' .
                '":"docu-2053aaad-c1a5-45e2-a2da-f71287f32800","links":[{"href":"https://api.san' .
                'dbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/docum' .
                'ents/docu-2053aaad-c1a5-45e2-a2da-f71287f32800","params":{"rel":"self"}}]}],"me' .
                'ta":{"pageNo":"1","pageSize":"2","pageCount":"0","recordCount":"0","timezone":"' .
                'GMT","requestRef":"request-reference-value"},"links":[{"href":"https://api.sand' .
                'box.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/docume' .
                'nts?page=1&pageSize=2","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testUploadDocument()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $fields = TestParam::object(
            "{\r\n  \"fields\": [\r\n    {\r\n      \"key\": \"EXPIRATION_DATE\",\r\n      \"va" .
            "lue\": \"string\"\r\n    }\r\n  ]\r\n}",
            Models\CreateOrUpdateDocumentFields::class
        );
        $upload = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->uploadDocument($userToken, $fields, $upload);
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
                '{"createDate":"2022-05-04T18:59:38Z","fields":[{"key":"EXPIRATION_DATE","value' .
                '":"10-31-2021"},{"key":"TYPE","value":"DRIVERS_LICENSE"},{"key":"STATUS","value' .
                '":"PROVIDED"}],"token":"docu-2053aaad-c1a5-45e2-a2da-f71287f32800","links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a8' .
                '87-d905172fb4bc/documents/docu-2053aaad-c1a5-45e2-a2da-f71287f32800","params":{' .
                '"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"' .
                '}}'
            )))
            ->assert();
    }

    public function testUploadDocument1()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $fields = TestParam::object(
            "{\r\n  \"fields\": [\r\n    {\r\n      \"key\": \"EXPIRATION_DATE\",\r\n      \"va" .
            "lue\": \"string\"\r\n    }\r\n  ]\r\n}",
            Models\CreateOrUpdateDocumentFields::class
        );
        $upload = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->uploadDocument($userToken, $fields, $upload);
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
                '{"createDate":"2022-05-04T18:59:38Z","fields":[{"key":"EXPIRATION_DATE","value' .
                '":"10-31-2021"},{"key":"TYPE","value":"DRIVERS_LICENSE"},{"key":"STATUS","value' .
                '":"PROVIDED"}],"token":"docu-2053aaad-c1a5-45e2-a2da-f71287f32800","links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a8' .
                '87-d905172fb4bc/documents/docu-2053aaad-c1a5-45e2-a2da-f71287f32800","params":{' .
                '"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"' .
                '}}'
            )))
            ->assert();
    }

    public function testRetrieveDocument()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $documentToken = 'docu-6e582242-5dd4-4883-b0c2-488e09a26595';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveDocument($userToken, $documentToken);
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
                '{"createDate":"2022-05-04T18:59:38Z","fields":[{"key":"EXPIRATION_DATE","value' .
                '":"10-31-2021"},{"key":"TYPE","value":"DRIVERS_LICENSE"},{"key":"STATUS","value' .
                '":"PROVIDED"}],"token":"docu-2053aaad-c1a5-45e2-a2da-f71287f32800","links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a8' .
                '87-d905172fb4bc/documents/docu-2053aaad-c1a5-45e2-a2da-f71287f32800","params":{' .
                '"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"' .
                '}}'
            )))
            ->assert();
    }

    public function testReplaceDocument()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $documentToken = 'docu-6e582242-5dd4-4883-b0c2-488e09a26595';
        $fields = TestParam::object(
            "{\r\n  \"fields\": [\r\n    {\r\n      \"key\": \"EXPIRATION_DATE\",\r\n      \"va" .
            "lue\": \"string\"\r\n    }\r\n  ]\r\n}",
            Models\CreateOrUpdateDocumentFields::class
        );
        $upload = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->replaceDocument($userToken, $documentToken, $fields, $upload);
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
                '{"createDate":"2022-05-04T18:59:38Z","fields":[{"key":"EXPIRATION_DATE","value' .
                '":"10-31-2021"},{"key":"TYPE","value":"DRIVERS_LICENSE"},{"key":"STATUS","value' .
                '":"PROVIDED"}],"token":"docu-2053aaad-c1a5-45e2-a2da-f71287f32800","links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a8' .
                '87-d905172fb4bc/documents/docu-2053aaad-c1a5-45e2-a2da-f71287f32800","params":{' .
                '"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"' .
                '}}'
            )))
            ->assert();
    }
}
