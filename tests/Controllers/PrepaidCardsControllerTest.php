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
use PayQuickerSDKLib\Controllers\PrepaidCardsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class PrepaidCardsControllerTest extends BaseTestController
{
    /**
     * @var PrepaidCardsController PrepaidCardsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getPrepaidCardsController();
    }

    public function testListPrepaidCards()
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
            $result = self::$controller->listPrepaidCards($userToken, $page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"dest-b61bc870-8ab8-4870-a209-6398b60269d5","cardNetwork"' .
                ':"VISA","cardNumber":"483318******3940","cardPackage":"712940","country":"US","' .
                'createdOn":"2022-04-20T18:43:15Z","currency":"USD","cvv":"***","expires":"04/20' .
                '25","status":"PENDING_ACTIVATION","bankInDetails":[{"key":"BANK_ACH_ABA","value' .
                '":"026014892"},{"key":"BANK_BBAN","value":"8037390305203"}],"capabilities":["BA' .
                'NK_IN","SET_PIN","APPLEPAY","GOOGLEPAY","SAMSUNGPAY"],"userToken":"user-2bbfc96' .
                '7-d12e-4647-a887-d905172fb4bc","links":[{"href":"https://api.sandbox.payquicker' .
                '.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/prepaid-cards/dest-b' .
                '61bc870-8ab8-4870-a209-6398b60269d5","params":{"rel":"self"}}]},{"token":"dest-' .
                '9a8f1dc9-5e59-4ce5-a919-fc586d85d6e5","cardNetwork":"VISA","cardNumber":"483318' .
                '******4628","cardPackage":"712940","country":"US","createdOn":"2022-04-20T18:42' .
                ':47Z","currency":"USD","cvv":"***","expires":"06/2025","status":"CLOSED_LOST_ST' .
                'OLEN_DAMAGED","capabilities":["BANK_IN","SET_PIN","APPLEPAY","GOOGLEPAY","SAMSU' .
                'NGPAY"],"userToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","links":[{"href' .
                '":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-' .
                'd905172fb4bc/prepaid-cards/dest-9a8f1dc9-5e59-4ce5-a919-fc586d85d6e5","params":' .
                '{"rel":"self"}}]},{"token":"dest-d9c6edab-ddec-4941-b980-f33cfe2f9f6b","cardNet' .
                'work":"VISA","cardNumber":"483318******1805","cardPackage":"712940","country":"' .
                'US","createdOn":"2022-04-20T18:36:16Z","currency":"USD","cvv":"***","expires":"' .
                '10/2025","status":"CLOSED_LOST_STOLEN_DAMAGED","capabilities":["BANK_IN","SET_P' .
                'IN","APPLEPAY","GOOGLEPAY","SAMSUNGPAY"],"userToken":"user-2bbfc967-d12e-4647-a' .
                '887-d905172fb4bc","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/us' .
                'ers/user-2bbfc967-d12e-4647-a887-d905172fb4bc/prepaid-cards/dest-d9c6edab-ddec-' .
                '4941-b980-f33cfe2f9f6b","params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageS' .
                'ize":"100","pageCount":"1","recordCount":"3","timezone":"GMT","requestRef":"req' .
                'uest-reference-value"},"links":[{"href":"https://api.sandbox.payquicker.io/api/' .
                'v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/prepaid-cards","params":{"re' .
                'l":"self"}}]}'
            )))
            ->assert();
    }

    public function testOrderPrepaidCard()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $body = TestParam::object(
            '{"cardPackage":"712940","programToken":"prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb"}',
            Models\OrderPrepaidCard::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->orderPrepaidCard($userToken, $body);
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
                '{"token":"dest-fcd31b51-0968-4537-8722-f486bdd5cd74","cardNetwork":"VISA","car' .
                'dNumber":"483318******2127","cardPackage":"712940","country":"US","createdOn":"' .
                '2022-05-06T18:14:52Z","currency":"USD","cvv":"***","expires":"06/2025","status"' .
                ':"PENDING_ACTIVATION","bankInDetails":[{"key":"BANK_ACH_ABA","value":"026014892' .
                '"},{"key":"BANK_BBAN","value":"8037390853101"}],"capabilities":["BANK_IN","SET_' .
                'PIN","APPLEPAY","GOOGLEPAY","SAMSUNGPAY"],"userToken":"user-ae92315b-6190-4e56-' .
                'bdf5-c0189ac420a1","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/u' .
                'sers/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/prepaid-cards/dest-fcd31b51-0968' .
                '-4537-8722-f486bdd5cd74","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testOrderPrepaidCard1()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $body = TestParam::object(
            '{"cardPackage":"712940","programToken":"prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb"}',
            Models\OrderPrepaidCard::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->orderPrepaidCard($userToken, $body);
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
                '{"token":"dest-fcd31b51-0968-4537-8722-f486bdd5cd74","cardNetwork":"VISA","car' .
                'dNumber":"483318******2127","cardPackage":"712940","country":"US","createdOn":"' .
                '2022-05-06T18:14:52Z","currency":"USD","cvv":"***","expires":"06/2025","status"' .
                ':"PENDING_ACTIVATION","bankInDetails":[{"key":"BANK_ACH_ABA","value":"026014892' .
                '"},{"key":"BANK_BBAN","value":"8037390853101"}],"capabilities":["BANK_IN","SET_' .
                'PIN","APPLEPAY","GOOGLEPAY","SAMSUNGPAY"],"userToken":"user-ae92315b-6190-4e56-' .
                'bdf5-c0189ac420a1","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/u' .
                'sers/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/prepaid-cards/dest-fcd31b51-0968' .
                '-4537-8722-f486bdd5cd74","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testReplacePrepaidCard()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $body = TestParam::object(
            '{"cardPackage":"23654","cardReplacementReason":"LOST"}',
            Models\ReplacePrepaidCard::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->replacePrepaidCard($userToken, $destinationToken, $body);
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
                '{"token":"dest-fcd31b51-0968-4537-8722-f486bdd5cd74","cardNetwork":"VISA","car' .
                'dNumber":"483318******2127","cardPackage":"712940","country":"US","createdOn":"' .
                '2022-05-06T18:14:52Z","currency":"USD","cvv":"***","expires":"06/2025","status"' .
                ':"PENDING_ACTIVATION","bankInDetails":[{"key":"BANK_ACH_ABA","value":"026014892' .
                '"},{"key":"BANK_BBAN","value":"8037390853101"}],"capabilities":["BANK_IN","SET_' .
                'PIN","APPLEPAY","GOOGLEPAY","SAMSUNGPAY"],"userToken":"user-ae92315b-6190-4e56-' .
                'bdf5-c0189ac420a1","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/u' .
                'sers/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/prepaid-cards/dest-fcd31b51-0968' .
                '-4537-8722-f486bdd5cd74","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testReplacePrepaidCard1()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $body = TestParam::object(
            '{"cardPackage":"23654","cardReplacementReason":"LOST"}',
            Models\ReplacePrepaidCard::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->replacePrepaidCard($userToken, $destinationToken, $body);
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
                '{"token":"dest-fcd31b51-0968-4537-8722-f486bdd5cd74","cardNetwork":"VISA","car' .
                'dNumber":"483318******2127","cardPackage":"712940","country":"US","createdOn":"' .
                '2022-05-06T18:14:52Z","currency":"USD","cvv":"***","expires":"06/2025","status"' .
                ':"PENDING_ACTIVATION","bankInDetails":[{"key":"BANK_ACH_ABA","value":"026014892' .
                '"},{"key":"BANK_BBAN","value":"8037390853101"}],"capabilities":["BANK_IN","SET_' .
                'PIN","APPLEPAY","GOOGLEPAY","SAMSUNGPAY"],"userToken":"user-ae92315b-6190-4e56-' .
                'bdf5-c0189ac420a1","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/u' .
                'sers/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/prepaid-cards/dest-fcd31b51-0968' .
                '-4537-8722-f486bdd5cd74","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testRetrievePrepaidCard()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrievePrepaidCard($userToken, $destinationToken);
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
                '{"token":"dest-fcd31b51-0968-4537-8722-f486bdd5cd74","cardNetwork":"VISA","car' .
                'dNumber":"483318******2127","cardPackage":"712940","country":"US","createdOn":"' .
                '2022-05-06T18:14:52Z","currency":"USD","cvv":"***","expires":"06/2025","status"' .
                ':"PENDING_ACTIVATION","bankInDetails":[{"key":"BANK_ACH_ABA","value":"026014892' .
                '"},{"key":"BANK_BBAN","value":"8037390853101"}],"capabilities":["BANK_IN","SET_' .
                'PIN","APPLEPAY","GOOGLEPAY","SAMSUNGPAY"],"userToken":"user-ae92315b-6190-4e56-' .
                'bdf5-c0189ac420a1","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/u' .
                'sers/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/prepaid-cards/dest-fcd31b51-0968' .
                '-4537-8722-f486bdd5cd74","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testUpdatePrepaidCard()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $body = TestParam::object('{"cardPackage":"","status":"QUEUED"}', Models\UpdatePrepaidCard::class);

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updatePrepaidCard($userToken, $destinationToken, $body);
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
                '{"token":"dest-fcd31b51-0968-4537-8722-f486bdd5cd74","cardNetwork":"VISA","car' .
                'dNumber":"483318******2127","cardPackage":"712940","country":"US","createdOn":"' .
                '2022-05-06T18:14:52Z","currency":"USD","cvv":"***","expires":"06/2025","status"' .
                ':"PENDING_ACTIVATION","bankInDetails":[{"key":"BANK_ACH_ABA","value":"026014892' .
                '"},{"key":"BANK_BBAN","value":"8037390853101"}],"capabilities":["BANK_IN","SET_' .
                'PIN","APPLEPAY","GOOGLEPAY","SAMSUNGPAY"],"userToken":"user-ae92315b-6190-4e56-' .
                'bdf5-c0189ac420a1","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/u' .
                'sers/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/prepaid-cards/dest-fcd31b51-0968' .
                '-4537-8722-f486bdd5cd74","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testListCardAuthorizations()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listCardAuthorizations($userToken, $destinationToken);
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
                '{"payload":[{"type":"UNSETTLED_AUTHORIZATION","createdOn":"2022-05-04T13:22:53' .
                'Z","sign":"DEBIT","sourceToken":"dest-8e35fc1b-82f4-4bf5-93d1-27f71a192bc2","am' .
                'ount":-35,"currency":"USD","status":"UNSETTLED","descriptions":[{"language":"en' .
                '-US","translation":"Completed Bank Transfer Request"}],"authDate":"2022-05-04T1' .
                '3:22:53Z","reference":"CC008AB44895"}],"meta":{"pageNo":"1","pageSize":"100","p' .
                'ageCount":"0","recordCount":"0","timezone":"GMT","requestRef":"request-referenc' .
                'e-value"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user' .
                '-cf6244d7-f6b8-4625-906a-9f21fc8c774b/prepaid-cards/dest-8e35fc1b-82f4-4bf5-93d' .
                '1-27f71a192bc2/authorizations","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }
}
