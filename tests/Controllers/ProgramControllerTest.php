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
use PayQuickerSDKLib\Controllers\ProgramController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class ProgramControllerTest extends BaseTestController
{
    /**
     * @var ProgramController ProgramController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getProgramController();
    }

    public function testListPrograms()
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
            $result = self::$controller->listPrograms($page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"prog-0146a716-4055-2598-ce14-df5ece519a98","currency":"U' .
                'SD","bank":"PATHWARD","electricWallets":[{"type":"TIGO_MONEY","electronicWallet' .
                'Country":"SV","electronicWalletCurrency":"USD"},{"type":"TIGO_MONEY","electroni' .
                'cWalletCountry":"GT","electronicWalletCurrency":"GTQ"},{"type":"AIRTEL_MONEY","' .
                'electronicWalletCountry":"TZ","electronicWalletCurrency":"TZS"},{"type":"MCASH"' .
                ',"electronicWalletCountry":"LK","electronicWalletCurrency":"LKR"}],"type":"COMM' .
                'ERCIAL","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/programs/pro' .
                'g-0146a716-4055-2598-ce14-df5ece519a98","params":{"rel":"self"}}]},{"token":"pr' .
                'og-dbfe1489-f3ba-3f5a-6904-9b9ad91ceaf6","currency":"MXN","bank":"PATHWARD","el' .
                'ectricWallets":[],"type":"COMMERCIAL","links":[{"href":"https://api.sandbox.pay' .
                'quicker.io/api/v2/programs/prog-dbfe1489-f3ba-3f5a-6904-9b9ad91ceaf6","params":' .
                '{"rel":"self"}}]},{"token":"prog-8a9e37bf-d9a9-a40a-96c4-e286d1fa8fc5","currenc' .
                'y":"USD","bank":"PATHWARD","electricWallets":[{"type":"TIGO_MONEY","electronicW' .
                'alletCountry":"SV","electronicWalletCurrency":"USD"},{"type":"TIGO_MONEY","elec' .
                'tronicWalletCountry":"GT","electronicWalletCurrency":"GTQ"},{"type":"AIRTEL_MON' .
                'EY","electronicWalletCountry":"TZ","electronicWalletCurrency":"TZS"},{"type":"M' .
                'CASH","electronicWalletCountry":"LK","electronicWalletCurrency":"LKR"}],"type":' .
                '"COMMERCIAL","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/program' .
                's/prog-8a9e37bf-d9a9-a40a-96c4-e286d1fa8fc5","params":{"rel":"self"}}]},{"token' .
                '":"prog-76f58bb0-c8ae-d0fa-d1e4-15143ffb53fa","currency":"EUR","bank":"PPS","el' .
                'ectricWallets":[],"type":"COMMERCIAL","links":[{"href":"https://api.sandbox.pay' .
                'quicker.io/api/v2/programs/prog-76f58bb0-c8ae-d0fa-d1e4-15143ffb53fa","params":' .
                '{"rel":"self"}}]},{"token":"prog-bbde39a9-04ca-1c0a-5d74-758a4ad47b84","currenc' .
                'y":"GBP","bank":"PPS","electricWallets":[],"type":"COMMERCIAL","links":[{"href"' .
                ':"https://api.sandbox.payquicker.io/api/v2/programs/prog-bbde39a9-04ca-1c0a-5d7' .
                '4-758a4ad47b84","params":{"rel":"self"}}]},{"token":"prog-8136128b-3f5b-2f69-15' .
                'a4-f25592ebce51","currency":"MXN","bank":"PATHWARD","electricWallets":[],"type"' .
                ':"COMMERCIAL","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/progra' .
                'ms/prog-8136128b-3f5b-2f69-15a4-f25592ebce51","params":{"rel":"self"}}]},{"toke' .
                'n":"prog-42469a3e-15c8-11f8-02a4-1053f176700e","currency":"EUR","bank":"PATHWAR' .
                'D","electricWallets":[{"type":"TIGO_MONEY","electronicWalletCountry":"SV","elec' .
                'tronicWalletCurrency":"USD"},{"type":"TIGO_MONEY","electronicWalletCountry":"GT' .
                '","electronicWalletCurrency":"GTQ"},{"type":"AIRTEL_MONEY","electronicWalletCou' .
                'ntry":"TZ","electronicWalletCurrency":"TZS"},{"type":"MCASH","electronicWalletC' .
                'ountry":"LK","electronicWalletCurrency":"LKR"}],"type":"COMMERCIAL","links":[{"' .
                'href":"https://api.sandbox.payquicker.io/api/v2/programs/prog-42469a3e-15c8-11f' .
                '8-02a4-1053f176700e","params":{"rel":"self"}}]},{"token":"prog-f8725c56-b289-8f' .
                '4b-1f94-cd27f2963cbf","currency":"HKD","bank":"PATHWARD","electricWallets":[],"' .
                'type":"COMMERCIAL","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/p' .
                'rograms/prog-f8725c56-b289-8f4b-1f94-cd27f2963cbf","params":{"rel":"self"}}]},{' .
                '"token":"prog-95753dc7-0b4a-65a9-7bd4-6504b6774cb9","currency":"USD","bank":"MC' .
                'B","electricWallets":[],"type":"CONSUMER_GPR","links":[{"href":"https://api.san' .
                'dbox.payquicker.io/api/v2/programs/prog-95753dc7-0b4a-65a9-7bd4-6504b6774cb9","' .
                'params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"100","pageCount":"0' .
                '","recordCount":"0","timezone":"GMT","requestRef":"request-reference-value"},"l' .
                'inks":[{"href":"https://api.sandbox.payquicker.io/api/v2/programs","params":{"r' .
                'el":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrieveProgram()
    {
        // Parameters for the API call
        $programToken = 'prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveProgram($programToken, $language);
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
                '{"token":"prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb","currency":"USD","bank":"' .
                'MCB","electricWallets":[{"type":"TIGO_MONEY","electronicWalletCountry":"SV","el' .
                'ectronicWalletCurrency":"USD"},{"type":"TIGO_MONEY","electronicWalletCountry":"' .
                'GT","electronicWalletCurrency":"GTQ"},{"type":"AIRTEL_MONEY","electronicWalletC' .
                'ountry":"TZ","electronicWalletCurrency":"TZS"},{"type":"MCASH","electronicWalle' .
                'tCountry":"LK","electronicWalletCurrency":"LKR"}],"type":"CONSUMER_GPR","links"' .
                ':[{"href":"https://api.sandbox.payquicker.io/api/v2/programs/prog-6a272eca-9487' .
                '-d83a-c9e4-8df8c9a7f6eb","params":{"rel":"self"}}],"meta":{"timezone":"GMT","re' .
                'questRef":"request-reference-value"}}'
            )))
            ->assert();
    }
}
