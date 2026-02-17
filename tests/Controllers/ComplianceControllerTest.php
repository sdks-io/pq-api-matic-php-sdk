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
use PayQuickerSDKLib\Controllers\ComplianceController;
use PayQuickerSDKLib\Exceptions;

class ComplianceControllerTest extends BaseTestController
{
    /**
     * @var ComplianceController ComplianceController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getComplianceController();
    }

    public function testListIdentityChecks()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listIdentityChecks($userToken);
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
                '{"payload":[{"idvProviderReference":"yPV0h4o1Yw3QzdLAvA7a","idvResult":"PASS",' .
                '"idvSubResult":"HARD","idvProvider":"HOOYU","createdOn":"2020-02-21T22:00:00Z",' .
                '"raw":"<RAW IDV processor output, for informational /debugging purposes only>",' .
                '"idvCheckType":"NON_DOCUMENTARY","idvDisposition":"FINAL","token":"idvc-7e7567e' .
                '0-c2db-485d-896d-45901a10baa9","userToken":"user-f012bc86-4d42-415b-a8b2-be5e0b' .
                '90e59a","links":[{"params":{"rel":"self"},"href":"https://api.payquicker.io/api' .
                '/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a/idv-checks/idvc-7e7567e0-c2' .
                'db-485d-896d-45901a10baa9"}]}],"links":[{"params":{"rel":"self"},"href":"https:' .
                '//api.payquicker.io/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a/idv-' .
                'checks"}]}'
            )))
            ->assert();
    }

    public function testRetrieveIdentityCheck()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $idvcToken = 'idvc-7e7567e0-c2db-485d-896d-45901a10baa9';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveIdentityCheck($userToken, $idvcToken);
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
                '{"createdOn":"2022-04-20T17:34:50Z","idvCheckType":"PII","idvDispostion":"UNDE' .
                'FINED","idvProvider":"FISIDOLOGY","idvResult":"PASS","idvSubResult":"HARD","tok' .
                'en":"idvc-5a04bacf-f99c-4962-8c02-d8e744c625d6","userToken":"user-2bbfc967-d12e' .
                '-4647-a887-d905172fb4bc","links":[{"href":"https://api.sandbox.payquicker.io/ap' .
                'i/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/idv-checks/idvc-5a04bacf-f' .
                '99c-4962-8c02-d8e744c625d6","params":{"rel":"self"}}],"meta":{"timezone":"GMT",' .
                '"requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }
}
