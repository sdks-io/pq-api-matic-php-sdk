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
use PayQuickerSDKLib\Controllers\ElectronicWalletsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class ElectronicWalletsControllerTest extends BaseTestController
{
    /**
     * @var ElectronicWalletsController ElectronicWalletsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getElectronicWalletsController();
    }

    public function testListElectronicWallets()
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
            $result = self::$controller->listElectronicWallets(
                $userToken,
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
                '{"payload":[{"token":"dest-969daa60-c743-4e4f-8609-559874f26d6c","type":"TIGO_' .
                'MONEY","electronicWalletCountry":"SV","electronicWalletCurrency":"USD","created' .
                'On":"2022-05-20T15:48:54Z","fields":[{"key":"ACCOUNT_NUMBER","value":"012345678' .
                '"},{"key":"GOVERNMENT_ID","value":"012345678"}],"status":"VERIFIED","links":[{"' .
                'href":"https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-b' .
                'df5-c0189ac420a1/electronic-wallets/dest-969daa60-c743-4e4f-8609-559874f26d6c",' .
                '"params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"5","pageCount":"1"' .
                ',"recordCount":"1","timezone":"GMT","requestRef":"request-reference-value"},"li' .
                'nks":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-619' .
                '0-4e56-bdf5-c0189ac420a1/electronic-wallets?page=1&pageSize=5&language=en-US","' .
                'params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testCreateElectronicWallet()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $body = TestParam::object(
            '{"type":"TIGO_MONEY","electronicWalletCountry":"SV","electronicWalletCurrency":"US' .
            'D","fields":[{"key":"ACCOUNT_NUMBER","value":"012345678"},{"key":"GOVERNMENT_ID","v' .
            'alue":"012345678"}]}',
            Models\CreateOrUpdateElectronicWallet::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createElectronicWallet($userToken, $body);
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","type":"TIGO_MONEY","elec' .
                'tronicWalletCountry":"SV","electronicWalletCurrency":"USD","createdOn":"2022-05' .
                '-20T15:48:54Z","fields":[{"key":"ACCOUNT_NUMBER","value":"012345678"},{"key":"G' .
                'OVERNMENT_ID","value":"012345678"}],"status":"VERIFIED","links":[{"href":"https' .
                '://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac4' .
                '20a1/electronic-wallets/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"r' .
                'el":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}' .
                ''
            )))
            ->assert();
    }

    public function testCreateElectronicWallet1()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $body = TestParam::object(
            '{"type":"TIGO_MONEY","electronicWalletCountry":"SV","electronicWalletCurrency":"US' .
            'D","fields":[{"key":"ACCOUNT_NUMBER","value":"012345678"},{"key":"GOVERNMENT_ID","v' .
            'alue":"012345678"}]}',
            Models\CreateOrUpdateElectronicWallet::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createElectronicWallet($userToken, $body);
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","type":"TIGO_MONEY","elec' .
                'tronicWalletCountry":"SV","electronicWalletCurrency":"USD","createdOn":"2022-05' .
                '-20T15:48:54Z","fields":[{"key":"ACCOUNT_NUMBER","value":"012345678"},{"key":"G' .
                'OVERNMENT_ID","value":"012345678"}],"status":"VERIFIED","links":[{"href":"https' .
                '://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac4' .
                '20a1/electronic-wallets/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"r' .
                'el":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}' .
                ''
            )))
            ->assert();
    }

    public function testRetrieveCreationRequirements()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $electronicWalletType =
            Models\ElectronicWalletTypes::TIGO_MONEY;
        $country = Models\Countries::US;
        $currency = Models\Currencies::USD;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveCreationRequirements(
                $userToken,
                $electronicWalletType,
                $country,
                $currency
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
                '{"payload":[{"electronicWalletType":"TIGO_MONEY","electronicWalletCountry":"SV' .
                '","electronicWalletCurrency":"USD","requirements":[{"requirement":"ACCOUNT_NUMB' .
                'ER","format":{"example":"012345678","legend":[{"key":"012345678","descriptions"' .
                ':[{"language":"en-US","translation":"Example Account Number"},{"language":"it-I' .
                'T","translation":"Esempio Numero del conto"}]}]},"description":[{"language":"en' .
                '-US","translation":"Account Number"},{"language":"it-IT","translation":"Numero ' .
                'del conto"}],"validators":[{"validatorType":"REGEX","expression":"^[0-9]{8}$"}]' .
                '},{"requirement":"GOVERNMENT_ID","format":{"example":"012345678","legend":[{"ke' .
                'y":"012345678","descriptions":[{"language":"en-US","translation":"Example Gover' .
                'nment Id"},{"language":"it-IT","translation":"Esempio Carta d\'Identità"}]}]},"' .
                'description":[{"language":"en-US","translation":"Government Id"},{"language":"i' .
                't-IT","translation":"Carta d\'Identità"}],"validators":[{"validatorType":"REGEX' .
                '","expression":"^[0-9]{8}$"}]}],"quote":{"formattedAmount":"$4.32 USD (USD, en-' .
                'US), 0,00 â‚¬ EUR (EUR, fr-FR)","amount":4.32,"currency":"USD"},"links":[{"para' .
                'ms":{"rel":"self"},"href":"string"}]}],"links":[{"params":{"rel":"self"},"href"' .
                ':"string"}]}'
            )))
            ->assert();
    }

    public function testRetrieveElectronicWallet()
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
            $result = self::$controller->retrieveElectronicWallet(
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","type":"TIGO_MONEY","elec' .
                'tronicWalletCountry":"SV","electronicWalletCurrency":"USD","createdOn":"2022-05' .
                '-20T15:48:54Z","fields":[{"key":"ACCOUNT_NUMBER","value":"012345678"},{"key":"G' .
                'OVERNMENT_ID","value":"012345678"}],"status":"VERIFIED","links":[{"href":"https' .
                '://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac4' .
                '20a1/electronic-wallets/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"r' .
                'el":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}' .
                ''
            )))
            ->assert();
    }

    public function testUpdateElectronicWallet()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $body = TestParam::object(
            '{"type":"TIGO_MONEY","electronicWalletCountry":"SV","electronicWalletCurrency":"US' .
            'D","fields":[{"key":"ACCOUNT_NUMBER","value":"012345678"},{"key":"GOVERNMENT_ID","v' .
            'alue":"012345678"}]}',
            Models\CreateOrUpdateElectronicWallet::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updateElectronicWallet($userToken, $destinationToken, $body);
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","type":"TIGO_MONEY","elec' .
                'tronicWalletCountry":"SV","electronicWalletCurrency":"USD","createdOn":"2022-05' .
                '-20T15:48:54Z","fields":[{"key":"ACCOUNT_NUMBER","value":"012345678"},{"key":"G' .
                'OVERNMENT_ID","value":"012345678"}],"status":"VERIFIED","links":[{"href":"https' .
                '://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac4' .
                '20a1/electronic-wallets/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"r' .
                'el":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}' .
                ''
            )))
            ->assert();
    }

    public function testDeleteElectronicWallet()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->deleteElectronicWallet($userToken, $destinationToken);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(
                TestParam::object(
                    '{"result":true,"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
                )
            ))
            ->assert();
    }
}
