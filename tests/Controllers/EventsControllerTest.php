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
use PayQuickerSDKLib\Controllers\EventsController;
use PayQuickerSDKLib\Exceptions;

class EventsControllerTest extends BaseTestController
{
    /**
     * @var EventsController EventsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getEventsController();
    }

    public function testListEvents()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listEvents($userToken);
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
                '{"payload":[{"token":"evnt-4e2f6663-3e37-4bb8-b8f8-4ab1b02bd292","canBeCancell' .
                'ed":false,"eventRequirementCategoryType":"CATEGORY_UNDEFINED","eventRequirement' .
                'Type":"TYPE_UNDEFINED","eventStatus":"UNDEFINED","eventType":"REQUIRED","isComp' .
                'lete":false,"userAction":"NO_ACTION","userImpact":"NO_IMPACT","event":"WALLET_R' .
                'EGISTRATION","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/u' .
                'ser-ae92315b-6190-4e56-bdf5-c0189ac420a1/events/evnt-4e2f6663-3e37-4bb8-b8f8-4a' .
                'b1b02bd292","params":{"rel":"self"}}]},{"token":"evnt-fe7c9063-0c86-400e-89e3-0' .
                '68c2f7e4f65","canBeCancelled":false,"eventRequirementCategoryType":"CATEGORY_UN' .
                'DEFINED","eventRequirementType":"TYPE_UNDEFINED","eventStatus":"UNDEFINED","eve' .
                'ntType":"REQUIRED","isComplete":false,"userAction":"NO_ACTION","userImpact":"NO' .
                '_IMPACT","event":"WALLET_REGISTRATION","links":[{"href":"https://api.sandbox.pa' .
                'yquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/events/evnt-' .
                'fe7c9063-0c86-400e-89e3-068c2f7e4f65","params":{"rel":"self"}}]}],"meta":{"page' .
                'No":"1","pageSize":"100","pageCount":"0","recordCount":"0","timezone":"GMT","re' .
                'questRef":"request-reference-value"},"links":[{"href":"https://api.sandbox.payq' .
                'uicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/events","param' .
                's":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testListEvents1()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listEvents($userToken);
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
                '{"payload":[{"token":"evnt-4e2f6663-3e37-4bb8-b8f8-4ab1b02bd292","canBeCancell' .
                'ed":false,"eventRequirementCategoryType":"CATEGORY_UNDEFINED","eventRequirement' .
                'Type":"TYPE_UNDEFINED","eventStatus":"UNDEFINED","eventType":"REQUIRED","isComp' .
                'lete":false,"userAction":"NO_ACTION","userImpact":"NO_IMPACT","event":"WALLET_R' .
                'EGISTRATION","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/u' .
                'ser-ae92315b-6190-4e56-bdf5-c0189ac420a1/events/evnt-4e2f6663-3e37-4bb8-b8f8-4a' .
                'b1b02bd292","params":{"rel":"self"}}]},{"token":"evnt-fe7c9063-0c86-400e-89e3-0' .
                '68c2f7e4f65","canBeCancelled":false,"eventRequirementCategoryType":"CATEGORY_UN' .
                'DEFINED","eventRequirementType":"TYPE_UNDEFINED","eventStatus":"UNDEFINED","eve' .
                'ntType":"REQUIRED","isComplete":false,"userAction":"NO_ACTION","userImpact":"NO' .
                '_IMPACT","event":"WALLET_REGISTRATION","links":[{"href":"https://api.sandbox.pa' .
                'yquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/events/evnt-' .
                'fe7c9063-0c86-400e-89e3-068c2f7e4f65","params":{"rel":"self"}}]}],"meta":{"page' .
                'No":"1","pageSize":"100","pageCount":"0","recordCount":"0","timezone":"GMT","re' .
                'questRef":"request-reference-value"},"links":[{"href":"https://api.sandbox.payq' .
                'uicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/events","param' .
                's":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrieveEvent()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $eventToken = 'evnt-28491de2-5b22-4e30-028a-45901a10baa9';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveEvent($userToken, $eventToken);
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
                '{"token":"evnt-4e2f6663-3e37-4bb8-b8f8-4ab1b02bd292","canBeCancelled":false,"e' .
                'ventRequirementCategoryType":"CATEGORY_UNDEFINED","eventRequirementType":"TYPE_' .
                'UNDEFINED","eventStatus":"UNDEFINED","eventType":"REQUIRED","isComplete":false,' .
                '"userAction":"NO_ACTION","userImpact":"NO_IMPACT","event":"WALLET_REGISTRATION"' .
                ',"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b' .
                '-6190-4e56-bdf5-c0189ac420a1/events/evnt-4e2f6663-3e37-4bb8-b8f8-4ab1b02bd292",' .
                '"params":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-refere' .
                'nce-value"}}'
            )))
            ->assert();
    }
}
