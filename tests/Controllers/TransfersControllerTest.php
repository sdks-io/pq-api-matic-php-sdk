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
use PayQuickerSDKLib\Controllers\TransfersController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class TransfersControllerTest extends BaseTestController
{
    /**
     * @var TransfersController TransfersController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getTransfersController();
    }

    public function testListTransfers()
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
            $result = self::$controller->listTransfers($page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"xfer-337b4c59-821d-4bac-a1dd-c9d7c15e41e8","clientTransf' .
                'erId":"1066ab05-84d0-453f-a827-1bd3b2ad9e3d","created":"2025-06-23T19:17:22Z","' .
                'destinationAmount":-14,"destinationCurrency":"USD","destinationToken":"dest-806' .
                '11686-e311-4acd-aeeb-244609a3b12b","fee":{"category":"USER","destinationCountry' .
                '":"USA","destinationCurrency":"USD","distribution":[{"amount":1.5,"currency":"U' .
                'SD","description":[{"language":"en-US","translation":"Transfer to a Bank Fee"},' .
                '{"language":"en-US","translation":"Poplatek za převod do banky"},{"language":"d' .
                'e-DE","translation":"Transfer zu einer Bankgebühr"},{"language":"es-ES","transl' .
                'ation":"Coste de la transferencia a un banco"},{"language":"en-US","translation' .
                '":"Pankkiin siirto -maksu"},{"language":"fr-FR","translation":"Frais de viremen' .
                't vers une banque"},{"language":"it-IT","translation":"Tariffa Trasferimento Ba' .
                'ncario"},{"language":"ja-JP","translation":"銀行への送金の手数料"},{"language":"ko-KR","t' .
                'ranslation":"은행으로 송금 수수료"},{"language":"nl-NL","translation":"Kosten bankoversc' .
                'hrijving"},{"language":"pl-PL","translation":"Opłata za przelew do banku"},{"la' .
                'nguage":"pt-BR","translation":"Taxa de Transferência para um Banco"},{"language' .
                '":"ru-RU","translation":"Комиссия за перевод на банковский счет"},{"language":"' .
                'en-US","translation":"Avgift för överföring till en bank"},{"language":"zh-Hans' .
                '","translation":"转账到银行手续费"},{"language":"zh-Hant","translation":"轉帳至銀行手續費"},{"l' .
                'anguage":"fr-CA","translation":"Frais de transfert bancaire"},{"language":"pt-P' .
                'T","translation":"Taxa de Transferência para um Banco"},{"language":"es-MX","tr' .
                'anslation":"Transferencia a una Tarifa Bancaria"},{"language":"en-GB","translat' .
                'ion":"Transfer to a Bank Fee"}],"formattedAmount":"$1.50 USD","percentage":1,"r' .
                'esponsibility":"USER","responsibilitySource":"SCHEDULE","sourceToken":"user-65e' .
                'c33d0-4518-41bb-8822-ed58c69e678e"}],"source":"TRANSACTION","totalAmount":-12.5' .
                ',"transactionAmount":-14,"type":"BANK_TRANSFER","valueAmount":1.5,"valueType":"' .
                'STATIC"},"fxRate":{"destinationAmount":-14,"destinationCurrency":"USD","rate":1' .
                ',"sourceAmount":-14,"sourceCurrency":"USD","sourceFormattedAmount":"($14.00) US' .
                'D","destinationFormattedAmount":"($14.00) USD"},"memo":"Bank transfer - memo","' .
                'note":"Bank transfer - note","sourceToken":"user-65ec33d0-4518-41bb-8822-ed58c6' .
                '9e678e","status":"ACCEPTED","receiptToken":"rcpt-337b4c59-821d-4bac-a1dd-c9d7c1' .
                '5e41e8","destinationFormattedAmount":"($14.00) USD","amount":-14,"formattedAmou' .
                'nt":"($14.00) USD","transferLockSide":"SOURCE","transferMethodType":"IACH","del' .
                'iveryDetails":{"minimumDeliveryMinutes":4320,"maximumDeliveryMinutes":10080},"l' .
                'inks":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-65ec33d0-45' .
                '18-41bb-8822-ed58c69e678e/transfers/xfer-337b4c59-821d-4bac-a1dd-c9d7c15e41e8",' .
                '"params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"2","pageCount":"1"' .
                ',"recordCount":"1","timezone":"GMT","requestRef":"request-reference-value"},"li' .
                'nks":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-65ec33d0-451' .
                '8-41bb-8822-ed58c69e678e/transfers?page=1&language=en-US&filter=%27transfertype' .
                '%27=%27BANK_TRANSFER%27&pageSize=2","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testCreateTransferQuote()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createTransferQuote($body);
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
                '{"token":"xfer-0722428d-7929-4bb5-a7eb-8526e8fe49e2","clientTransferId":"af1d2' .
                '6c4-07d8-4bba-bdf6-104fda46e896","created":"2025-06-24T12:40:53Z","destinationA' .
                'mount":14,"destinationCurrency":"USD","destinationToken":"dest-80611686-e311-4a' .
                'cd-aeeb-224609a3b12b","fee":{"category":"USER","destinationCountry":"USA","dest' .
                'inationCurrency":"USD","distribution":[{"amount":1.5,"currency":"USD","descript' .
                'ion":[{"language":"en-US","translation":"Transfer to a Bank Fee"},{"language":"' .
                'en-US","translation":"Poplatek za převod do banky"},{"language":"de-DE","transl' .
                'ation":"Transfer zu einer Bankgebühr"},{"language":"es-ES","translation":"Coste' .
                ' de la transferencia a un banco"},{"language":"en-US","translation":"Pankkiin s' .
                'iirto -maksu"},{"language":"fr-FR","translation":"Frais de virement vers une ba' .
                'nque"},{"language":"it-IT","translation":"Tariffa Trasferimento Bancario"},{"la' .
                'nguage":"ja-JP","translation":"銀行への送金の手数料"},{"language":"ko-KR","translation":"' .
                '은행으로 송금 수수료"},{"language":"nl-NL","translation":"Kosten bankoverschrijving"},{"' .
                'language":"pl-PL","translation":"Opłata za przelew do banku"},{"language":"pt-B' .
                'R","translation":"Taxa de Transferência para um Banco"},{"language":"ru-RU","tr' .
                'anslation":"Комиссия за перевод на банковский счет"},{"language":"en-US","trans' .
                'lation":"Avgift för överföring till en bank"},{"language":"zh-Hans","translatio' .
                'n":"转账到银行手续费"},{"language":"zh-Hant","translation":"轉帳至銀行手續費"},{"language":"fr-' .
                'CA","translation":"Frais de transfert bancaire"},{"language":"pt-PT","translati' .
                'on":"Taxa de Transferência para um Banco"},{"language":"es-MX","translation":"T' .
                'ransferencia a una Tarifa Bancaria"},{"language":"en-GB","translation":"Transfe' .
                'r to a Bank Fee"}],"formattedAmount":"$1.50 USD","percentage":1,"responsibility' .
                '":"USER","responsibilitySource":"SCHEDULE","sourceToken":"user-65ec33d0-4518-41' .
                'bb-8822-ed58c69e678e"}],"source":"TRANSACTION","totalAmount":15.5,"transactionA' .
                'mount":14,"type":"BANK_TRANSFER","valueAmount":1.5,"valueType":"STATIC"},"fxRat' .
                'e":{"destinationAmount":14,"destinationCurrency":"USD","rate":1,"sourceAmount":' .
                '14,"sourceCurrency":"USD","sourceFormattedAmount":"$14.00 USD","destinationForm' .
                'attedAmount":"$14.00 USD"},"memo":"Bank transfer - memo","note":"Bank transfer ' .
                '- note","sourceToken":"user-65ec33d0-4518-41bb-2822-ed58c69e678e","status":"PEN' .
                'DING_ACCEPTANCE","destinationFormattedAmount":"$14.00 USD","amount":14,"formatt' .
                'edAmount":"$14.00 USD","transferLockSide":"SOURCE","transferMethodType":"IACH",' .
                '"deliveryDetails":{"minimumDeliveryMinutes":4320,"maximumDeliveryMinutes":10080' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/transfers/xfer-072' .
                '2448d-7929-4bb5-a7eb-8526e8fe49e2","params":{"rel":"self"}}],"meta":{"timezone"' .
                ':"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCreateTransferQuote1()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createTransferQuote($body);
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
                '{"token":"xfer-0722428d-7929-4bb5-a7eb-8526e8fe49e2","clientTransferId":"af1d2' .
                '6c4-07d8-4bba-bdf6-104fda46e896","created":"2025-06-24T12:40:53Z","destinationA' .
                'mount":14,"destinationCurrency":"USD","destinationToken":"dest-80611686-e311-4a' .
                'cd-aeeb-224609a3b12b","fee":{"category":"USER","destinationCountry":"USA","dest' .
                'inationCurrency":"USD","distribution":[{"amount":1.5,"currency":"USD","descript' .
                'ion":[{"language":"en-US","translation":"Transfer to a Bank Fee"},{"language":"' .
                'en-US","translation":"Poplatek za převod do banky"},{"language":"de-DE","transl' .
                'ation":"Transfer zu einer Bankgebühr"},{"language":"es-ES","translation":"Coste' .
                ' de la transferencia a un banco"},{"language":"en-US","translation":"Pankkiin s' .
                'iirto -maksu"},{"language":"fr-FR","translation":"Frais de virement vers une ba' .
                'nque"},{"language":"it-IT","translation":"Tariffa Trasferimento Bancario"},{"la' .
                'nguage":"ja-JP","translation":"銀行への送金の手数料"},{"language":"ko-KR","translation":"' .
                '은행으로 송금 수수료"},{"language":"nl-NL","translation":"Kosten bankoverschrijving"},{"' .
                'language":"pl-PL","translation":"Opłata za przelew do banku"},{"language":"pt-B' .
                'R","translation":"Taxa de Transferência para um Banco"},{"language":"ru-RU","tr' .
                'anslation":"Комиссия за перевод на банковский счет"},{"language":"en-US","trans' .
                'lation":"Avgift för överföring till en bank"},{"language":"zh-Hans","translatio' .
                'n":"转账到银行手续费"},{"language":"zh-Hant","translation":"轉帳至銀行手續費"},{"language":"fr-' .
                'CA","translation":"Frais de transfert bancaire"},{"language":"pt-PT","translati' .
                'on":"Taxa de Transferência para um Banco"},{"language":"es-MX","translation":"T' .
                'ransferencia a una Tarifa Bancaria"},{"language":"en-GB","translation":"Transfe' .
                'r to a Bank Fee"}],"formattedAmount":"$1.50 USD","percentage":1,"responsibility' .
                '":"USER","responsibilitySource":"SCHEDULE","sourceToken":"user-65ec33d0-4518-41' .
                'bb-8822-ed58c69e678e"}],"source":"TRANSACTION","totalAmount":15.5,"transactionA' .
                'mount":14,"type":"BANK_TRANSFER","valueAmount":1.5,"valueType":"STATIC"},"fxRat' .
                'e":{"destinationAmount":14,"destinationCurrency":"USD","rate":1,"sourceAmount":' .
                '14,"sourceCurrency":"USD","sourceFormattedAmount":"$14.00 USD","destinationForm' .
                'attedAmount":"$14.00 USD"},"memo":"Bank transfer - memo","note":"Bank transfer ' .
                '- note","sourceToken":"user-65ec33d0-4518-41bb-2822-ed58c69e678e","status":"PEN' .
                'DING_ACCEPTANCE","destinationFormattedAmount":"$14.00 USD","amount":14,"formatt' .
                'edAmount":"$14.00 USD","transferLockSide":"SOURCE","transferMethodType":"IACH",' .
                '"deliveryDetails":{"minimumDeliveryMinutes":4320,"maximumDeliveryMinutes":10080' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/transfers/xfer-072' .
                '2448d-7929-4bb5-a7eb-8526e8fe49e2","params":{"rel":"self"}}],"meta":{"timezone"' .
                ':"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveTransfer()
    {
        // Parameters for the API call
        $transferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveTransfer($transferToken);
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
                '{"token":"xfer-0722428d-7929-4bb5-a7eb-8526e8fe49e2","clientTransferId":"af1d2' .
                '6c4-07d8-4bba-bdf6-104fda46e896","created":"2025-06-24T12:40:53Z","destinationA' .
                'mount":14,"destinationCurrency":"USD","destinationToken":"dest-80611686-e311-4a' .
                'cd-aeeb-224609a3b12b","fee":{"category":"USER","destinationCountry":"USA","dest' .
                'inationCurrency":"USD","distribution":[{"amount":1.5,"currency":"USD","descript' .
                'ion":[{"language":"en-US","translation":"Transfer to a Bank Fee"},{"language":"' .
                'en-US","translation":"Poplatek za převod do banky"},{"language":"de-DE","transl' .
                'ation":"Transfer zu einer Bankgebühr"},{"language":"es-ES","translation":"Coste' .
                ' de la transferencia a un banco"},{"language":"en-US","translation":"Pankkiin s' .
                'iirto -maksu"},{"language":"fr-FR","translation":"Frais de virement vers une ba' .
                'nque"},{"language":"it-IT","translation":"Tariffa Trasferimento Bancario"},{"la' .
                'nguage":"ja-JP","translation":"銀行への送金の手数料"},{"language":"ko-KR","translation":"' .
                '은행으로 송금 수수료"},{"language":"nl-NL","translation":"Kosten bankoverschrijving"},{"' .
                'language":"pl-PL","translation":"Opłata za przelew do banku"},{"language":"pt-B' .
                'R","translation":"Taxa de Transferência para um Banco"},{"language":"ru-RU","tr' .
                'anslation":"Комиссия за перевод на банковский счет"},{"language":"en-US","trans' .
                'lation":"Avgift för överföring till en bank"},{"language":"zh-Hans","translatio' .
                'n":"转账到银行手续费"},{"language":"zh-Hant","translation":"轉帳至銀行手續費"},{"language":"fr-' .
                'CA","translation":"Frais de transfert bancaire"},{"language":"pt-PT","translati' .
                'on":"Taxa de Transferência para um Banco"},{"language":"es-MX","translation":"T' .
                'ransferencia a una Tarifa Bancaria"},{"language":"en-GB","translation":"Transfe' .
                'r to a Bank Fee"}],"formattedAmount":"$1.50 USD","percentage":1,"responsibility' .
                '":"USER","responsibilitySource":"SCHEDULE","sourceToken":"user-65ec33d0-4518-41' .
                'bb-8822-ed58c69e678e"}],"source":"TRANSACTION","totalAmount":15.5,"transactionA' .
                'mount":14,"type":"BANK_TRANSFER","valueAmount":1.5,"valueType":"STATIC"},"fxRat' .
                'e":{"destinationAmount":14,"destinationCurrency":"USD","rate":1,"sourceAmount":' .
                '14,"sourceCurrency":"USD","sourceFormattedAmount":"$14.00 USD","destinationForm' .
                'attedAmount":"$14.00 USD"},"memo":"Bank transfer - memo","note":"Bank transfer ' .
                '- note","sourceToken":"user-65ec33d0-4518-41bb-2822-ed58c69e678e","status":"PEN' .
                'DING_ACCEPTANCE","destinationFormattedAmount":"$14.00 USD","amount":14,"formatt' .
                'edAmount":"$14.00 USD","transferLockSide":"SOURCE","transferMethodType":"IACH",' .
                '"deliveryDetails":{"minimumDeliveryMinutes":4320,"maximumDeliveryMinutes":10080' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/transfers/xfer-072' .
                '2448d-7929-4bb5-a7eb-8526e8fe49e2","params":{"rel":"self"}}],"meta":{"timezone"' .
                ':"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testAcceptTransferQuote()
    {
        // Parameters for the API call
        $transferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->acceptTransferQuote($transferToken);
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
                '{"token":"xfer-0722428d-7929-4bb5-a7eb-8526e8fe49e2","clientTransferId":"af1d2' .
                '6c4-07d8-4bba-bdf6-104fda46e896","created":"2025-06-24T12:40:53Z","destinationA' .
                'mount":14,"destinationCurrency":"USD","destinationToken":"dest-80611686-e311-4a' .
                'cd-aeeb-224609a3b12b","fee":{"category":"USER","destinationCountry":"USA","dest' .
                'inationCurrency":"USD","distribution":[{"amount":1.5,"currency":"USD","descript' .
                'ion":[{"language":"en-US","translation":"Transfer to a Bank Fee"},{"language":"' .
                'en-US","translation":"Poplatek za převod do banky"},{"language":"de-DE","transl' .
                'ation":"Transfer zu einer Bankgebühr"},{"language":"es-ES","translation":"Coste' .
                ' de la transferencia a un banco"},{"language":"en-US","translation":"Pankkiin s' .
                'iirto -maksu"},{"language":"fr-FR","translation":"Frais de virement vers une ba' .
                'nque"},{"language":"it-IT","translation":"Tariffa Trasferimento Bancario"},{"la' .
                'nguage":"ja-JP","translation":"銀行への送金の手数料"},{"language":"ko-KR","translation":"' .
                '은행으로 송금 수수료"},{"language":"nl-NL","translation":"Kosten bankoverschrijving"},{"' .
                'language":"pl-PL","translation":"Opłata za przelew do banku"},{"language":"pt-B' .
                'R","translation":"Taxa de Transferência para um Banco"},{"language":"ru-RU","tr' .
                'anslation":"Комиссия за перевод на банковский счет"},{"language":"en-US","trans' .
                'lation":"Avgift för överföring till en bank"},{"language":"zh-Hans","translatio' .
                'n":"转账到银行手续费"},{"language":"zh-Hant","translation":"轉帳至銀行手續費"},{"language":"fr-' .
                'CA","translation":"Frais de transfert bancaire"},{"language":"pt-PT","translati' .
                'on":"Taxa de Transferência para um Banco"},{"language":"es-MX","translation":"T' .
                'ransferencia a una Tarifa Bancaria"},{"language":"en-GB","translation":"Transfe' .
                'r to a Bank Fee"}],"formattedAmount":"$1.50 USD","percentage":1,"responsibility' .
                '":"USER","responsibilitySource":"SCHEDULE","sourceToken":"user-65ec33d0-4518-41' .
                'bb-8822-ed58c69e678e"}],"source":"TRANSACTION","totalAmount":15.5,"transactionA' .
                'mount":14,"type":"BANK_TRANSFER","valueAmount":1.5,"valueType":"STATIC"},"fxRat' .
                'e":{"destinationAmount":14,"destinationCurrency":"USD","rate":1,"sourceAmount":' .
                '14,"sourceCurrency":"USD","sourceFormattedAmount":"$14.00 USD","destinationForm' .
                'attedAmount":"$14.00 USD"},"memo":"Bank transfer - memo","note":"Bank transfer ' .
                '- note","sourceToken":"user-65ec33d0-4518-41bb-2822-ed58c69e678e","status":"PEN' .
                'DING_ACCEPTANCE","destinationFormattedAmount":"$14.00 USD","amount":14,"formatt' .
                'edAmount":"$14.00 USD","transferLockSide":"SOURCE","transferMethodType":"IACH",' .
                '"deliveryDetails":{"minimumDeliveryMinutes":4320,"maximumDeliveryMinutes":10080' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/transfers/xfer-072' .
                '2448d-7929-4bb5-a7eb-8526e8fe49e2","params":{"rel":"self"}}],"meta":{"timezone"' .
                ':"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testAcceptTransferQuote1()
    {
        // Parameters for the API call
        $transferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->acceptTransferQuote($transferToken);
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
                '{"token":"xfer-0722428d-7929-4bb5-a7eb-8526e8fe49e2","clientTransferId":"af1d2' .
                '6c4-07d8-4bba-bdf6-104fda46e896","created":"2025-06-24T12:40:53Z","destinationA' .
                'mount":14,"destinationCurrency":"USD","destinationToken":"dest-80611686-e311-4a' .
                'cd-aeeb-224609a3b12b","fee":{"category":"USER","destinationCountry":"USA","dest' .
                'inationCurrency":"USD","distribution":[{"amount":1.5,"currency":"USD","descript' .
                'ion":[{"language":"en-US","translation":"Transfer to a Bank Fee"},{"language":"' .
                'en-US","translation":"Poplatek za převod do banky"},{"language":"de-DE","transl' .
                'ation":"Transfer zu einer Bankgebühr"},{"language":"es-ES","translation":"Coste' .
                ' de la transferencia a un banco"},{"language":"en-US","translation":"Pankkiin s' .
                'iirto -maksu"},{"language":"fr-FR","translation":"Frais de virement vers une ba' .
                'nque"},{"language":"it-IT","translation":"Tariffa Trasferimento Bancario"},{"la' .
                'nguage":"ja-JP","translation":"銀行への送金の手数料"},{"language":"ko-KR","translation":"' .
                '은행으로 송금 수수료"},{"language":"nl-NL","translation":"Kosten bankoverschrijving"},{"' .
                'language":"pl-PL","translation":"Opłata za przelew do banku"},{"language":"pt-B' .
                'R","translation":"Taxa de Transferência para um Banco"},{"language":"ru-RU","tr' .
                'anslation":"Комиссия за перевод на банковский счет"},{"language":"en-US","trans' .
                'lation":"Avgift för överföring till en bank"},{"language":"zh-Hans","translatio' .
                'n":"转账到银行手续费"},{"language":"zh-Hant","translation":"轉帳至銀行手續費"},{"language":"fr-' .
                'CA","translation":"Frais de transfert bancaire"},{"language":"pt-PT","translati' .
                'on":"Taxa de Transferência para um Banco"},{"language":"es-MX","translation":"T' .
                'ransferencia a una Tarifa Bancaria"},{"language":"en-GB","translation":"Transfe' .
                'r to a Bank Fee"}],"formattedAmount":"$1.50 USD","percentage":1,"responsibility' .
                '":"USER","responsibilitySource":"SCHEDULE","sourceToken":"user-65ec33d0-4518-41' .
                'bb-8822-ed58c69e678e"}],"source":"TRANSACTION","totalAmount":15.5,"transactionA' .
                'mount":14,"type":"BANK_TRANSFER","valueAmount":1.5,"valueType":"STATIC"},"fxRat' .
                'e":{"destinationAmount":14,"destinationCurrency":"USD","rate":1,"sourceAmount":' .
                '14,"sourceCurrency":"USD","sourceFormattedAmount":"$14.00 USD","destinationForm' .
                'attedAmount":"$14.00 USD"},"memo":"Bank transfer - memo","note":"Bank transfer ' .
                '- note","sourceToken":"user-65ec33d0-4518-41bb-2822-ed58c69e678e","status":"PEN' .
                'DING_ACCEPTANCE","destinationFormattedAmount":"$14.00 USD","amount":14,"formatt' .
                'edAmount":"$14.00 USD","transferLockSide":"SOURCE","transferMethodType":"IACH",' .
                '"deliveryDetails":{"minimumDeliveryMinutes":4320,"maximumDeliveryMinutes":10080' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/transfers/xfer-072' .
                '2448d-7929-4bb5-a7eb-8526e8fe49e2","params":{"rel":"self"}}],"meta":{"timezone"' .
                ':"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCancelTransferQuote()
    {
        // Parameters for the API call
        $transferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->cancelTransferQuote($transferToken);
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
                '{"token":"xfer-0722428d-7929-4bb5-a7eb-8526e8fe49e2","clientTransferId":"af1d2' .
                '6c4-07d8-4bba-bdf6-104fda46e896","created":"2025-06-24T12:40:53Z","destinationA' .
                'mount":14,"destinationCurrency":"USD","destinationToken":"dest-80611686-e311-4a' .
                'cd-aeeb-224609a3b12b","fee":{"category":"USER","destinationCountry":"USA","dest' .
                'inationCurrency":"USD","distribution":[{"amount":1.5,"currency":"USD","descript' .
                'ion":[{"language":"en-US","translation":"Transfer to a Bank Fee"},{"language":"' .
                'en-US","translation":"Poplatek za převod do banky"},{"language":"de-DE","transl' .
                'ation":"Transfer zu einer Bankgebühr"},{"language":"es-ES","translation":"Coste' .
                ' de la transferencia a un banco"},{"language":"en-US","translation":"Pankkiin s' .
                'iirto -maksu"},{"language":"fr-FR","translation":"Frais de virement vers une ba' .
                'nque"},{"language":"it-IT","translation":"Tariffa Trasferimento Bancario"},{"la' .
                'nguage":"ja-JP","translation":"銀行への送金の手数料"},{"language":"ko-KR","translation":"' .
                '은행으로 송금 수수료"},{"language":"nl-NL","translation":"Kosten bankoverschrijving"},{"' .
                'language":"pl-PL","translation":"Opłata za przelew do banku"},{"language":"pt-B' .
                'R","translation":"Taxa de Transferência para um Banco"},{"language":"ru-RU","tr' .
                'anslation":"Комиссия за перевод на банковский счет"},{"language":"en-US","trans' .
                'lation":"Avgift för överföring till en bank"},{"language":"zh-Hans","translatio' .
                'n":"转账到银行手续费"},{"language":"zh-Hant","translation":"轉帳至銀行手續費"},{"language":"fr-' .
                'CA","translation":"Frais de transfert bancaire"},{"language":"pt-PT","translati' .
                'on":"Taxa de Transferência para um Banco"},{"language":"es-MX","translation":"T' .
                'ransferencia a una Tarifa Bancaria"},{"language":"en-GB","translation":"Transfe' .
                'r to a Bank Fee"}],"formattedAmount":"$1.50 USD","percentage":1,"responsibility' .
                '":"USER","responsibilitySource":"SCHEDULE","sourceToken":"user-65ec33d0-4518-41' .
                'bb-8822-ed58c69e678e"}],"source":"TRANSACTION","totalAmount":15.5,"transactionA' .
                'mount":14,"type":"BANK_TRANSFER","valueAmount":1.5,"valueType":"STATIC"},"fxRat' .
                'e":{"destinationAmount":14,"destinationCurrency":"USD","rate":1,"sourceAmount":' .
                '14,"sourceCurrency":"USD","sourceFormattedAmount":"$14.00 USD","destinationForm' .
                'attedAmount":"$14.00 USD"},"memo":"Bank transfer - memo","note":"Bank transfer ' .
                '- note","sourceToken":"user-65ec33d0-4518-41bb-2822-ed58c69e678e","status":"PEN' .
                'DING_ACCEPTANCE","destinationFormattedAmount":"$14.00 USD","amount":14,"formatt' .
                'edAmount":"$14.00 USD","transferLockSide":"SOURCE","transferMethodType":"IACH",' .
                '"deliveryDetails":{"minimumDeliveryMinutes":4320,"maximumDeliveryMinutes":10080' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/transfers/xfer-072' .
                '2448d-7929-4bb5-a7eb-8526e8fe49e2","params":{"rel":"self"}}],"meta":{"timezone"' .
                ':"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testListUserTransfers()
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
            $result = self::$controller->listUserTransfers($userToken, $page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"xfer-337b4c59-821d-4bac-a1dd-c9d7c15e41e8","clientTransf' .
                'erId":"1066ab05-84d0-453f-a827-1bd3b2ad9e3d","created":"2025-06-23T19:17:22Z","' .
                'destinationAmount":-14,"destinationCurrency":"USD","destinationToken":"dest-806' .
                '11686-e311-4acd-aeeb-244609a3b12b","fee":{"category":"USER","destinationCountry' .
                '":"USA","destinationCurrency":"USD","distribution":[{"amount":1.5,"currency":"U' .
                'SD","description":[{"language":"en-US","translation":"Transfer to a Bank Fee"},' .
                '{"language":"en-US","translation":"Poplatek za převod do banky"},{"language":"d' .
                'e-DE","translation":"Transfer zu einer Bankgebühr"},{"language":"es-ES","transl' .
                'ation":"Coste de la transferencia a un banco"},{"language":"en-US","translation' .
                '":"Pankkiin siirto -maksu"},{"language":"fr-FR","translation":"Frais de viremen' .
                't vers une banque"},{"language":"it-IT","translation":"Tariffa Trasferimento Ba' .
                'ncario"},{"language":"ja-JP","translation":"銀行への送金の手数料"},{"language":"ko-KR","t' .
                'ranslation":"은행으로 송금 수수료"},{"language":"nl-NL","translation":"Kosten bankoversc' .
                'hrijving"},{"language":"pl-PL","translation":"Opłata za przelew do banku"},{"la' .
                'nguage":"pt-BR","translation":"Taxa de Transferência para um Banco"},{"language' .
                '":"ru-RU","translation":"Комиссия за перевод на банковский счет"},{"language":"' .
                'en-US","translation":"Avgift för överföring till en bank"},{"language":"zh-Hans' .
                '","translation":"转账到银行手续费"},{"language":"zh-Hant","translation":"轉帳至銀行手續費"},{"l' .
                'anguage":"fr-CA","translation":"Frais de transfert bancaire"},{"language":"pt-P' .
                'T","translation":"Taxa de Transferência para um Banco"},{"language":"es-MX","tr' .
                'anslation":"Transferencia a una Tarifa Bancaria"},{"language":"en-GB","translat' .
                'ion":"Transfer to a Bank Fee"}],"formattedAmount":"$1.50 USD","percentage":1,"r' .
                'esponsibility":"USER","responsibilitySource":"SCHEDULE","sourceToken":"user-65e' .
                'c33d0-4518-41bb-8822-ed58c69e678e"}],"source":"TRANSACTION","totalAmount":-12.5' .
                ',"transactionAmount":-14,"type":"BANK_TRANSFER","valueAmount":1.5,"valueType":"' .
                'STATIC"},"fxRate":{"destinationAmount":-14,"destinationCurrency":"USD","rate":1' .
                ',"sourceAmount":-14,"sourceCurrency":"USD","sourceFormattedAmount":"($14.00) US' .
                'D","destinationFormattedAmount":"($14.00) USD"},"memo":"Bank transfer - memo","' .
                'note":"Bank transfer - note","sourceToken":"user-65ec33d0-4518-41bb-8822-ed58c6' .
                '9e678e","status":"ACCEPTED","receiptToken":"rcpt-337b4c59-821d-4bac-a1dd-c9d7c1' .
                '5e41e8","destinationFormattedAmount":"($14.00) USD","amount":-14,"formattedAmou' .
                'nt":"($14.00) USD","transferLockSide":"SOURCE","transferMethodType":"IACH","del' .
                'iveryDetails":{"minimumDeliveryMinutes":4320,"maximumDeliveryMinutes":10080},"l' .
                'inks":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-65ec33d0-45' .
                '18-41bb-8822-ed58c69e678e/transfers/xfer-337b4c59-821d-4bac-a1dd-c9d7c15e41e8",' .
                '"params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"2","pageCount":"1"' .
                ',"recordCount":"1","timezone":"GMT","requestRef":"request-reference-value"},"li' .
                'nks":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-65ec33d0-451' .
                '8-41bb-8822-ed58c69e678e/transfers?page=1&language=en-US&filter=%27transfertype' .
                '%27=%27BANK_TRANSFER%27&pageSize=2","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrieveUserTransfer()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $transferToken = 'xfer-bf34989d-0b13-47ee-bd51-b96b0ecbe866';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveUserTransfer($userToken, $transferToken);
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
                '{"token":"xfer-0722428d-7929-4bb5-a7eb-8526e8fe49e2","clientTransferId":"af1d2' .
                '6c4-07d8-4bba-bdf6-104fda46e896","created":"2025-06-24T12:40:53Z","destinationA' .
                'mount":14,"destinationCurrency":"USD","destinationToken":"dest-80611686-e311-4a' .
                'cd-aeeb-224609a3b12b","fee":{"category":"USER","destinationCountry":"USA","dest' .
                'inationCurrency":"USD","distribution":[{"amount":1.5,"currency":"USD","descript' .
                'ion":[{"language":"en-US","translation":"Transfer to a Bank Fee"},{"language":"' .
                'en-US","translation":"Poplatek za převod do banky"},{"language":"de-DE","transl' .
                'ation":"Transfer zu einer Bankgebühr"},{"language":"es-ES","translation":"Coste' .
                ' de la transferencia a un banco"},{"language":"en-US","translation":"Pankkiin s' .
                'iirto -maksu"},{"language":"fr-FR","translation":"Frais de virement vers une ba' .
                'nque"},{"language":"it-IT","translation":"Tariffa Trasferimento Bancario"},{"la' .
                'nguage":"ja-JP","translation":"銀行への送金の手数料"},{"language":"ko-KR","translation":"' .
                '은행으로 송금 수수료"},{"language":"nl-NL","translation":"Kosten bankoverschrijving"},{"' .
                'language":"pl-PL","translation":"Opłata za przelew do banku"},{"language":"pt-B' .
                'R","translation":"Taxa de Transferência para um Banco"},{"language":"ru-RU","tr' .
                'anslation":"Комиссия за перевод на банковский счет"},{"language":"en-US","trans' .
                'lation":"Avgift för överföring till en bank"},{"language":"zh-Hans","translatio' .
                'n":"转账到银行手续费"},{"language":"zh-Hant","translation":"轉帳至銀行手續費"},{"language":"fr-' .
                'CA","translation":"Frais de transfert bancaire"},{"language":"pt-PT","translati' .
                'on":"Taxa de Transferência para um Banco"},{"language":"es-MX","translation":"T' .
                'ransferencia a una Tarifa Bancaria"},{"language":"en-GB","translation":"Transfe' .
                'r to a Bank Fee"}],"formattedAmount":"$1.50 USD","percentage":1,"responsibility' .
                '":"USER","responsibilitySource":"SCHEDULE","sourceToken":"user-65ec33d0-4518-41' .
                'bb-8822-ed58c69e678e"}],"source":"TRANSACTION","totalAmount":15.5,"transactionA' .
                'mount":14,"type":"BANK_TRANSFER","valueAmount":1.5,"valueType":"STATIC"},"fxRat' .
                'e":{"destinationAmount":14,"destinationCurrency":"USD","rate":1,"sourceAmount":' .
                '14,"sourceCurrency":"USD","sourceFormattedAmount":"$14.00 USD","destinationForm' .
                'attedAmount":"$14.00 USD"},"memo":"Bank transfer - memo","note":"Bank transfer ' .
                '- note","sourceToken":"user-65ec33d0-4518-41bb-2822-ed58c69e678e","status":"PEN' .
                'DING_ACCEPTANCE","destinationFormattedAmount":"$14.00 USD","amount":14,"formatt' .
                'edAmount":"$14.00 USD","transferLockSide":"SOURCE","transferMethodType":"IACH",' .
                '"deliveryDetails":{"minimumDeliveryMinutes":4320,"maximumDeliveryMinutes":10080' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/transfers/xfer-072' .
                '2448d-7929-4bb5-a7eb-8526e8fe49e2","params":{"rel":"self"}}],"meta":{"timezone"' .
                ':"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }
}
