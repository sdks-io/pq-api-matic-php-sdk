<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Tests\Controllers;

use Core\TestCase\TestParam;
use PayQuickerSDKLib\Controllers\InvitationsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class InvitationsControllerTest extends BaseTestController
{
    /**
     * @var InvitationsController InvitationsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getInvitationsController();
    }

    public function testListInvitations()
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
            $result = self::$controller->listInvitations($page, $pageSize, $filter, $sort, $language);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testCreateInvitation()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"amount":1500,"currency":"USD","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b' .
            '147860","destinationToken":"dest-ae92315b-6190-4e56-bdf5-c0189ac420a1","note":"Paym' .
            'ent 1 Note","memo":"Payment 1 Memo","purpose":"INCOME","clientPaymentId":"929fcf00-' .
            '5a4f-4613-bd78-ed8dc33797b9","autoAcceptQuote":false,"notBefore":"2022-04-26T15:16:' .
            '18Z","notAfter":"2022-04-26T15:19:20Z"}',
            Models\CreateInvitation::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createInvitation($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testCreateInvitation1()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"amount":1500,"currency":"USD","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b' .
            '147860","destinationToken":"dest-ae92315b-6190-4e56-bdf5-c0189ac420a1","note":"Paym' .
            'ent 1 Note","memo":"Payment 1 Memo","purpose":"INCOME","clientPaymentId":"929fcf00-' .
            '5a4f-4613-bd78-ed8dc33797b9","autoAcceptQuote":false,"notBefore":"2022-04-26T15:16:' .
            '18Z","notAfter":"2022-04-26T15:19:20Z"}',
            Models\CreateInvitation::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createInvitation($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(201)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testRetrieveInvitation()
    {
        // Parameters for the API call
        $invitationToken =
            'invt-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $filter = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveInvitation($invitationToken, $filter, $language);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testUpdateInvitation()
    {
        // Parameters for the API call
        $invitationToken =
            'invt-2bbfc967-d12e-4647-a887-d905172fb4bc';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updateInvitation($invitationToken);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testUpdateInvitation1()
    {
        // Parameters for the API call
        $invitationToken =
            'invt-2bbfc967-d12e-4647-a887-d905172fb4bc';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updateInvitation($invitationToken);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(201)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testCancelInvitation()
    {
        // Parameters for the API call
        $invitationToken =
            'invt-2bbfc967-d12e-4647-a887-d905172fb4bc';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->cancelInvitation($invitationToken);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(201)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }
}
