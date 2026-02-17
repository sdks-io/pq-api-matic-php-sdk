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
use PayQuickerSDKLib\Controllers\BankAccountsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class BankAccountsControllerTest extends BaseTestController
{
    /**
     * @var BankAccountsController BankAccountsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getBankAccountsController();
    }

    public function testListBankAccounts()
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
            $result = self::$controller->listBankAccounts($userToken, $page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"dest-969daa60-c743-4e4f-8609-559874f26d6c","bankAccountO' .
                'wnershipType":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2' .
                '022-05-20T16:26:25Z","description":"Official USD Testing Bank Account 2","field' .
                's":[{"key":"BANK_BBAN","value":"****7899"},{"key":"BANK_ACH_ABA","value":"****5' .
                '688"},{"key":"BENEFICIARY_NAME","value":"Harry Grady"},{"key":"BANK_NAME","valu' .
                'e":"API V2 USD BANK 2"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":' .
                '"https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0' .
                '189ac420a1/bank-accounts/dest-969daa60-c743-4e4f-8609-559874f26d6c","params":{"' .
                'rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"5","pageCount":"1","recordCou' .
                'nt":"1","timezone":"GMT","requestRef":"request-reference-value"},"links":[{"hre' .
                'f":"https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5' .
                '-c0189ac420a1/bank-accounts?page=1&pageSize=5&language=en-US","params":{"rel":"' .
                'self"}}]}'
            )))
            ->assert();
    }

    public function testCreateBankAccount()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $body = TestParam::object(
            '{"bankAccountOwnershipType":"BUSINESS","description":"Official USD Testing Bank Ac' .
            'count 1","bankCountry":"US","bankCurrency":"USD","type":"SAVINGS","fields":[{"key":' .
            '"BANK_BBAN","value":"01234567890"},{"key":"BANK_ACH_ABA","value":"012345678"},{"key' .
            '":"BANK_NAME","value":"API V2 USD BANK 1"},{"key":"BENEFICIARY_NAME","value":"Hazel' .
            ' Mosciski"}]}',
            Models\CreateOrUpdateBankAccount::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createBankAccount($userToken, $body);
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","bankAccountOwnershipType' .
                '":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2022-05-20T15' .
                ':48:54Z","description":"Official USD Testing Bank Account 1","fields":[{"key":"' .
                'BANK_BBAN","value":"****7890"},{"key":"BANK_ACH_ABA","value":"****5678"},{"key"' .
                ':"BENEFICIARY_NAME","value":"Dennis Bruen"},{"key":"BANK_NAME","value":"API V2 ' .
                'USD BANK 1"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/' .
                'bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"rel":"self"' .
                '}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCreateBankAccount1()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $body = TestParam::object(
            '{"bankAccountOwnershipType":"BUSINESS","description":"Official USD Testing Bank Ac' .
            'count 1","bankCountry":"US","bankCurrency":"USD","type":"SAVINGS","fields":[{"key":' .
            '"BANK_BBAN","value":"01234567890"},{"key":"BANK_ACH_ABA","value":"012345678"},{"key' .
            '":"BANK_NAME","value":"API V2 USD BANK 1"},{"key":"BENEFICIARY_NAME","value":"Hazel' .
            ' Mosciski"}]}',
            Models\CreateOrUpdateBankAccount::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createBankAccount($userToken, $body);
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","bankAccountOwnershipType' .
                '":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2022-05-20T15' .
                ':48:54Z","description":"Official USD Testing Bank Account 1","fields":[{"key":"' .
                'BANK_BBAN","value":"****7890"},{"key":"BANK_ACH_ABA","value":"****5678"},{"key"' .
                ':"BENEFICIARY_NAME","value":"Dennis Bruen"},{"key":"BANK_NAME","value":"API V2 ' .
                'USD BANK 1"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/' .
                'bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"rel":"self"' .
                '}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveBankAccount()
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
            $result = self::$controller->retrieveBankAccount(
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","bankAccountOwnershipType' .
                '":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2022-05-20T15' .
                ':48:54Z","description":"Official USD Testing Bank Account 1","fields":[{"key":"' .
                'BANK_BBAN","value":"****7890"},{"key":"BANK_ACH_ABA","value":"****5678"},{"key"' .
                ':"BENEFICIARY_NAME","value":"Dennis Bruen"},{"key":"BANK_NAME","value":"API V2 ' .
                'USD BANK 1"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/' .
                'bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"rel":"self"' .
                '}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testUpdateBankAccount()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $body = TestParam::object(
            '{"bankAccountOwnershipType":"BUSINESS","description":"Official USD Testing Bank Ac' .
            'count 1","bankCountry":"US","bankCurrency":"USD","type":"SAVINGS","fields":[{"key":' .
            '"BANK_BBAN","value":"01234567890"},{"key":"BANK_ACH_ABA","value":"012345678"},{"key' .
            '":"BANK_NAME","value":"API V2 USD BANK 1"},{"key":"BENEFICIARY_NAME","value":"Hazel' .
            ' Mosciski"}]}',
            Models\CreateOrUpdateBankAccount::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updateBankAccount($userToken, $destinationToken, $body);
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","bankAccountOwnershipType' .
                '":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2022-05-20T15' .
                ':48:54Z","description":"Official USD Testing Bank Account 1","fields":[{"key":"' .
                'BANK_BBAN","value":"****7890"},{"key":"BANK_ACH_ABA","value":"****5678"},{"key"' .
                ':"BENEFICIARY_NAME","value":"Dennis Bruen"},{"key":"BANK_NAME","value":"API V2 ' .
                'USD BANK 1"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/' .
                'bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"rel":"self"' .
                '}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testDeleteBankAccount()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->deleteBankAccount($userToken, $destinationToken);
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

    public function testRetrieveCreationRequirements()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $country = Models\Countries::US;
        $currency = Models\Currencies::USD;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveCreationRequirements($userToken, $country, $currency);
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
                '{"payload":[{"bankCountry":"IT","bankCurrency":"EUR","requirements":[{"require' .
                'ment":"BANK_IBAN","format":{"example":"IT43K0310412701000000820420","legend":[{' .
                '"key":"IT43K0310412701000000820420","descriptions":[{"language":"en-US","transl' .
                'ation":"Example IBAN"},{"language":"it-IT","translation":"Esempio IBAN"}]}]},"d' .
                'escription":[{"language":"en-US","translation":"IBAN"},{"language":"it-IT","tra' .
                'nslation":"IBAN"}],"validators":[{"validatorType":"REGEX","expression":"^IT' .
                '\\\\\\\\d{2}[A-Z]\\\\\\\\d{10}[0-9A-Z]{12}$"}]},{"requirement":"BANK_SWIFT_BIC"' .
                ',"format":{"example":"01234567890","legend":[{"key":"01234567890","descriptions' .
                '":[{"language":"en-US","translation":"Example Swift/BIC"},{"language":"it-IT","' .
                'translation":"Esempio Swift/BIC"}]}]},"description":[{"language":"en-US","trans' .
                'lation":"Swift/BIC"},{"language":"it-IT","translation":"Swift/BIC"}],"validator' .
                's":[{"validatorType":"REGEX","expression":"^[a-z0-9A-Z]{8,11}$"}]}],"quote":{"f' .
                'ormattedAmount":"$4.32 USD (USD, en-US), 0,00 â‚¬ EUR (EUR, fr-FR)","amount":4.' .
                '32,"currency":"USD"},"links":[{"params":{"rel":"self"},"href":"string"}]}],"lin' .
                'ks":[{"params":{"rel":"self"},"href":"string"}]}'
            )))
            ->assert();
    }

    public function testListCompanyBankAccounts()
    {
        // Parameters for the API call
        $accountToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';
        $page = 1;
        $pageSize = 20;
        $filter = 'string';
        $sort = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listCompanyBankAccounts(
                $accountToken,
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
                '{"payload":[{"token":"dest-969daa60-c743-4e4f-8609-559874f26d6c","bankAccountO' .
                'wnershipType":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2' .
                '022-05-20T16:26:25Z","description":"Official USD Testing Bank Account 2","field' .
                's":[{"key":"BANK_BBAN","value":"****7899"},{"key":"BANK_ACH_ABA","value":"****5' .
                '688"},{"key":"BENEFICIARY_NAME","value":"Harry Grady"},{"key":"BANK_NAME","valu' .
                'e":"API V2 USD BANK 2"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":' .
                '"https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0' .
                '189ac420a1/bank-accounts/dest-969daa60-c743-4e4f-8609-559874f26d6c","params":{"' .
                'rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"5","pageCount":"1","recordCou' .
                'nt":"1","timezone":"GMT","requestRef":"request-reference-value"},"links":[{"hre' .
                'f":"https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5' .
                '-c0189ac420a1/bank-accounts?page=1&pageSize=5&language=en-US","params":{"rel":"' .
                'self"}}]}'
            )))
            ->assert();
    }

    public function testCreateCompanyBankAccount()
    {
        // Parameters for the API call
        $accountToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';
        $body = TestParam::object(
            '{"bankAccountOwnershipType":"BUSINESS","description":"Official USD Testing Bank Ac' .
            'count 1","bankCountry":"US","bankCurrency":"USD","type":"SAVINGS","fields":[{"key":' .
            '"BANK_BBAN","value":"01234567890"},{"key":"BANK_ACH_ABA","value":"012345678"},{"key' .
            '":"BANK_NAME","value":"API V2 USD BANK 1"},{"key":"BENEFICIARY_NAME","value":"Hazel' .
            ' Mosciski"}]}',
            Models\CreateOrUpdateBankAccount::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createCompanyBankAccount($accountToken, $body);
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","bankAccountOwnershipType' .
                '":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2022-05-20T15' .
                ':48:54Z","description":"Official USD Testing Bank Account 1","fields":[{"key":"' .
                'BANK_BBAN","value":"****7890"},{"key":"BANK_ACH_ABA","value":"****5678"},{"key"' .
                ':"BENEFICIARY_NAME","value":"Dennis Bruen"},{"key":"BANK_NAME","value":"API V2 ' .
                'USD BANK 1"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/' .
                'bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"rel":"self"' .
                '}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCreateCompanyBankAccount1()
    {
        // Parameters for the API call
        $accountToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';
        $body = TestParam::object(
            '{"bankAccountOwnershipType":"BUSINESS","description":"Official USD Testing Bank Ac' .
            'count 1","bankCountry":"US","bankCurrency":"USD","type":"SAVINGS","fields":[{"key":' .
            '"BANK_BBAN","value":"01234567890"},{"key":"BANK_ACH_ABA","value":"012345678"},{"key' .
            '":"BANK_NAME","value":"API V2 USD BANK 1"},{"key":"BENEFICIARY_NAME","value":"Hazel' .
            ' Mosciski"}]}',
            Models\CreateOrUpdateBankAccount::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createCompanyBankAccount($accountToken, $body);
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","bankAccountOwnershipType' .
                '":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2022-05-20T15' .
                ':48:54Z","description":"Official USD Testing Bank Account 1","fields":[{"key":"' .
                'BANK_BBAN","value":"****7890"},{"key":"BANK_ACH_ABA","value":"****5678"},{"key"' .
                ':"BENEFICIARY_NAME","value":"Dennis Bruen"},{"key":"BANK_NAME","value":"API V2 ' .
                'USD BANK 1"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/' .
                'bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"rel":"self"' .
                '}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveCompanyBankAccount()
    {
        // Parameters for the API call
        $accountToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';
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
            $result = self::$controller->retrieveCompanyBankAccount(
                $accountToken,
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","bankAccountOwnershipType' .
                '":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2022-05-20T15' .
                ':48:54Z","description":"Official USD Testing Bank Account 1","fields":[{"key":"' .
                'BANK_BBAN","value":"****7890"},{"key":"BANK_ACH_ABA","value":"****5678"},{"key"' .
                ':"BENEFICIARY_NAME","value":"Dennis Bruen"},{"key":"BANK_NAME","value":"API V2 ' .
                'USD BANK 1"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/' .
                'bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"rel":"self"' .
                '}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testUpdateCompanyBankAccount()
    {
        // Parameters for the API call
        $accountToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $body = TestParam::object(
            '{"bankAccountOwnershipType":"BUSINESS","description":"Official USD Testing Bank Ac' .
            'count 1","bankCountry":"US","bankCurrency":"USD","type":"SAVINGS","fields":[{"key":' .
            '"BANK_BBAN","value":"01234567890"},{"key":"BANK_ACH_ABA","value":"012345678"},{"key' .
            '":"BANK_NAME","value":"API V2 USD BANK 1"},{"key":"BENEFICIARY_NAME","value":"Hazel' .
            ' Mosciski"}]}',
            Models\CreateOrUpdateBankAccount::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updateCompanyBankAccount($accountToken, $destinationToken, $body);
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
                '{"token":"dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","bankAccountOwnershipType' .
                '":"BUSINESS","bankCountry":"US","bankCurrency":"USD","createdOn":"2022-05-20T15' .
                ':48:54Z","description":"Official USD Testing Bank Account 1","fields":[{"key":"' .
                'BANK_BBAN","value":"****7890"},{"key":"BANK_ACH_ABA","value":"****5678"},{"key"' .
                ':"BENEFICIARY_NAME","value":"Dennis Bruen"},{"key":"BANK_NAME","value":"API V2 ' .
                'USD BANK 1"}],"status":"VERIFIED","type":"SAVINGS","links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/' .
                'bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4","params":{"rel":"self"' .
                '}}],"meta":{"timezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testDeleteCompanyBankAccount()
    {
        // Parameters for the API call
        $accountToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->deleteCompanyBankAccount($accountToken, $destinationToken);
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

    public function testRetrieveCompanyBankAccountCreationRequirements()
    {
        // Parameters for the API call
        $accountToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';
        $country = Models\Countries::US;
        $currency = Models\Currencies::USD;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveCompanyBankAccountCreationRequirements(
                $accountToken,
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
                '{"payload":[{"bankCountry":"IT","bankCurrency":"EUR","requirements":[{"require' .
                'ment":"BANK_IBAN","format":{"example":"IT43K0310412701000000820420","legend":[{' .
                '"key":"IT43K0310412701000000820420","descriptions":[{"language":"en-US","transl' .
                'ation":"Example IBAN"},{"language":"it-IT","translation":"Esempio IBAN"}]}]},"d' .
                'escription":[{"language":"en-US","translation":"IBAN"},{"language":"it-IT","tra' .
                'nslation":"IBAN"}],"validators":[{"validatorType":"REGEX","expression":"^IT' .
                '\\\\\\\\d{2}[A-Z]\\\\\\\\d{10}[0-9A-Z]{12}$"}]},{"requirement":"BANK_SWIFT_BIC"' .
                ',"format":{"example":"01234567890","legend":[{"key":"01234567890","descriptions' .
                '":[{"language":"en-US","translation":"Example Swift/BIC"},{"language":"it-IT","' .
                'translation":"Esempio Swift/BIC"}]}]},"description":[{"language":"en-US","trans' .
                'lation":"Swift/BIC"},{"language":"it-IT","translation":"Swift/BIC"}],"validator' .
                's":[{"validatorType":"REGEX","expression":"^[a-z0-9A-Z]{8,11}$"}]}],"quote":{"f' .
                'ormattedAmount":"$4.32 USD (USD, en-US), 0,00 â‚¬ EUR (EUR, fr-FR)","amount":4.' .
                '32,"currency":"USD"},"links":[{"params":{"rel":"self"},"href":"string"}]}],"lin' .
                'ks":[{"params":{"rel":"self"},"href":"string"}]}'
            )))
            ->assert();
    }

    public function testRetrieveBankAccountCreationRequirementsForAPrepaidCard()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $country = Models\Countries::US;
        $currency = Models\Currencies::USD;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveBankAccountCreationRequirementsForAPrepaidCard(
                $userToken,
                $destinationToken,
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
                '{"payload":[{"bankCountry":"IT","bankCurrency":"EUR","requirements":[{"require' .
                'ment":"BANK_IBAN","format":{"example":"IT43K0310412701000000820420","legend":[{' .
                '"key":"IT43K0310412701000000820420","descriptions":[{"language":"en-US","transl' .
                'ation":"Example IBAN"},{"language":"it-IT","translation":"Esempio IBAN"}]}]},"d' .
                'escription":[{"language":"en-US","translation":"IBAN"},{"language":"it-IT","tra' .
                'nslation":"IBAN"}],"validators":[{"validatorType":"REGEX","expression":"^IT' .
                '\\\\\\\\d{2}[A-Z]\\\\\\\\d{10}[0-9A-Z]{12}$"}]},{"requirement":"BANK_SWIFT_BIC"' .
                ',"format":{"example":"01234567890","legend":[{"key":"01234567890","descriptions' .
                '":[{"language":"en-US","translation":"Example Swift/BIC"},{"language":"it-IT","' .
                'translation":"Esempio Swift/BIC"}]}]},"description":[{"language":"en-US","trans' .
                'lation":"Swift/BIC"},{"language":"it-IT","translation":"Swift/BIC"}],"validator' .
                's":[{"validatorType":"REGEX","expression":"^[a-z0-9A-Z]{8,11}$"}]}],"quote":{"f' .
                'ormattedAmount":"$4.32 USD (USD, en-US), 0,00 â‚¬ EUR (EUR, fr-FR)","amount":4.' .
                '32,"currency":"USD"},"links":[{"params":{"rel":"self"},"href":"string"}]}],"lin' .
                'ks":[{"params":{"rel":"self"},"href":"string"}]}'
            )))
            ->assert();
    }
}
