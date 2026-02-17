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
use PayQuickerSDKLib\Controllers\AgreementsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class AgreementsControllerTest extends BaseTestController
{
    /**
     * @var AgreementsController AgreementsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getAgreementsController();
    }

    public function testListAgreements()
    {
        // Parameters for the API call
        $programToken = 'prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb';
        $page = 1;
        $pageSize = 20;
        $filter = 'string';
        $sort = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listAgreements($programToken, $page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"agmt-b33d420f-6c1b-4a93-9455-d6585552b97d","contentBase6' .
                '4":"DQogIGZvciB5b3VyIHBsYXN0aW...KPC9ib2R5Pg0KDQo8L2h0bWw+DQo=","url":"https://' .
                'cdn.payquicker.io/content/Agreements/Cardholder/v1/Languages_EN_US/CardholderAg' .
                'reement-Consumer-ACH-20k-MCB-USD.pdf","type":"CARD_HOLDER_AGREEMENT","links":[{' .
                '"href":"https://api.sandbox.payquicker.io/api/v2/programs/prog-6a272eca-9487-d8' .
                '3a-c9e4-8df8c9a7f6eb/agreements/agmt-b33d420f-6c1b-4a93-9455-d6585552b97d","par' .
                'ams":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"100","pageCount":"0","' .
                'recordCount":"0","timezone":"GMT","requestRef":"request-reference-value"},"link' .
                's":[{"href":"https://api.sandbox.payquicker.io/api/v2/programs/prog-6a272eca-94' .
                '87-d83a-c9e4-8df8c9a7f6eb/agreements","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrieveProgramAgreement()
    {
        // Parameters for the API call
        $programToken = 'prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb';
        $agreementToken = 'agmt-b33d420f-6c1b-4a93-9455-d6585552b97d';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveProgramAgreement($programToken, $agreementToken);
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
                '{"token":"agmt-b33d420f-6c1b-4a93-9455-d6585552b97d","contentBase64":"DQogIGZv' .
                'ciB5b3VyIHBsYXN0aW...KPC9ib2R5Pg0KDQo8L2h0bWw+DQo=","url":"https://cdn.payquick' .
                'er.io/content/Agreements/Cardholder/v1/Languages_EN_US/CardholderAgreement-Cons' .
                'umer-ACH-20k-MCB-USD.pdf","type":"CARD_HOLDER_AGREEMENT","links":[{"href":"http' .
                's://api.sandbox.payquicker.io/api/v2/programs/prog-6a272eca-9487-d83a-c9e4-8df8' .
                'c9a7f6eb/agreements/agmt-b33d420f-6c1b-4a93-9455-d6585552b97d","params":{"rel":' .
                '"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testAcceptAgreement()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $agreementToken = 'agmt-b33d420f-6c1b-4a93-9455-d6585552b97d';

        // Perform API call
        try {
            self::$controller->acceptAgreement($userToken, $agreementToken);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(200)->assert();
    }
}
