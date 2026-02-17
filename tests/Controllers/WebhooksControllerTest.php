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
use PayQuickerSDKLib\Controllers\WebhooksController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class WebhooksControllerTest extends BaseTestController
{
    /**
     * @var WebhooksController WebhooksController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getWebhooksController();
    }

    public function testListSubscriptions()
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
            $result = self::$controller->listSubscriptions($page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"webh-4cdcb012-8b3f-453f-af4f-c29e6091db92","created":"20' .
                '20-07-24T14:53:08Z","lastUpdated":"2021-08-09T18:31:55Z","url":"https://api.san' .
                'dbox.payquicker.io/integrations/internal/twohundred","namespace":"PREPAIDCARDS.' .
                'UPDATED.STATUS.CLOSEDSTOLEN","status":"SUBSCRIBED","links":[{"href":"https://pl' .
                'atform.mypayquicker.dev/api/v2/webhooks/webh-4cdcb012-8b3f-453f-af4f-c29e6091db' .
                '92","params":{"rel":"self"}}]},{"token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f' .
                '24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2021-08-09T18:31:55Z","url' .
                '":"https://fawebhookreceiver.azurewebsites.net/api/receive","namespace":"PAPERC' .
                'HECKS.UPDATED.STATUS.REDEEMED","status":"SUBSCRIBED","links":[{"href":"https://' .
                'platform.mypayquicker.dev/api/v2/webhooks/webh-4de2d5d8-f04a-4fe1-bff0-8d343295' .
                'f24e","params":{"rel":"self"}}]},{"namespace":"USERS.CREATED","status":"AVAILAB' .
                'LE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T1' .
                '4:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver' .
                '.azurewebsites.net/api/receive"},{"namespace":"USERS.UPDATED.STATUS.REGISTRATIO' .
                'NINPROGRESS","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d34329' .
                '5f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","u' .
                'rl":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"US' .
                'ERS.UPDATED.STATUS.REGISTRATIONCOMPLETE","status":"AVAILABLE","token":"webh-4de' .
                '2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdate' .
                'd":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/ap' .
                'i/receive"},{"namespace":"USERS.UPDATED.KYC.REQUIRED","status":"AVAILABLE","tok' .
                'en":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z' .
                '","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewe' .
                'bsites.net/api/receive"},{"namespace":"USERS.UPDATED.KYC.PROVIDED","status":"AV' .
                'AILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07' .
                '-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookrec' .
                'eiver.azurewebsites.net/api/receive"},{"namespace":"USERS.UPDATED.KYC.REJECTED"' .
                ',"status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","crea' .
                'ted":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https:/' .
                '/fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"USERS.UPDATED.' .
                'KYC.APPROVED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d3432' .
                '95f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","' .
                'url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"P' .
                'REPAIDCARDS.CREATED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0' .
                '-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53' .
                ':08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namesp' .
                'ace":"PREPAIDCARDS.UPDATED.STATUS.ACTIVE","status":"AVAILABLE","token":"webh-4d' .
                'e2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdat' .
                'ed":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/a' .
                'pi/receive"},{"namespace":"PREPAIDCARDS.UPDATED.STATUS.CLOSED","status":"AVAILA' .
                'BLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T' .
                '14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceive' .
                'r.azurewebsites.net/api/receive"},{"namespace":"PREPAIDCARDS.UPDATED.STATUS.CLO' .
                'SEDLOST","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24' .
                'e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":' .
                '"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"PREPAI' .
                'DCARDS.UPDATED.STATUS.PENDINGACTIVATION","status":"AVAILABLE","token":"webh-4de' .
                '2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdate' .
                'd":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/ap' .
                'i/receive"},{"namespace":"PREPAIDCARDS.UPDATED.STATUS.PENDINGORDER","status":"A' .
                'VAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-0' .
                '7-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookre' .
                'ceiver.azurewebsites.net/api/receive"},{"namespace":"PREPAIDCARDS.UPDATED.STATU' .
                'S.SUSPENDED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d34329' .
                '5f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","u' .
                'rl":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"BA' .
                'NKACCOUNTS.CREATED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-' .
                '8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:' .
                '08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespa' .
                'ce":"BANKACCOUNTS.UPDATED.STATUS.APPROVED","status":"AVAILABLE","token":"webh-4' .
                'de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpda' .
                'ted":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/' .
                'api/receive"},{"namespace":"BANKACCOUNTS.UPDATED.STATUS.DELETED","status":"AVAI' .
                'LABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-2' .
                '4T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookrecei' .
                'ver.azurewebsites.net/api/receive"},{"namespace":"BANKACCOUNTS.UPDATED.STATUS.C' .
                'OMPLIANCEHOLD","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343' .
                '295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z",' .
                '"url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"' .
                'BANKACCOUNTS.UPDATED.DETAILS.MODIFIED","status":"AVAILABLE","token":"webh-4de2d' .
                '5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated"' .
                ':"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/' .
                'receive"},{"namespace":"PAPERCHECKS.CREATED","status":"AVAILABLE","token":"webh' .
                '-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUp' .
                'dated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.ne' .
                't/api/receive"},{"namespace":"PAPERCHECKS.UPDATED.STATUS.INPROGRESS","status":"' .
                'AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-' .
                '07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookr' .
                'eceiver.azurewebsites.net/api/receive"},{"namespace":"PAPERCHECKS.UPDATED.STATU' .
                'S.CANCELLED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d34329' .
                '5f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","u' .
                'rl":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"PA' .
                'PERCHECKS.UPDATED.DETAILS.MODIFIED","status":"AVAILABLE","token":"webh-4de2d5d8' .
                '-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2' .
                '020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/rec' .
                'eive"},{"namespace":"TRANSFERQUOTES.CREATED","status":"AVAILABLE","token":"webh' .
                '-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUp' .
                'dated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.ne' .
                't/api/receive"},{"namespace":"TRANSFERQUOTES.ACCEPTED","status":"AVAILABLE","to' .
                'ken":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08' .
                'Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurew' .
                'ebsites.net/api/receive"},{"namespace":"TRANSFERQUOTES.VOIDED","status":"AVAILA' .
                'BLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T' .
                '14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceive' .
                'r.azurewebsites.net/api/receive"},{"namespace":"TRANSFERQUOTES.CANCELLED","stat' .
                'us":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"' .
                '2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://faweb' .
                'hookreceiver.azurewebsites.net/api/receive"},{"namespace":"PAYMENTQUOTES.CREATE' .
                'D","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","cr' .
                'eated":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https' .
                '://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"PAYMENTQUOTE' .
                'S.ACCEPTED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295' .
                'f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","ur' .
                'l":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"PAY' .
                'MENTQUOTES.VOIDED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8' .
                'd343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:0' .
                '8Z","url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespac' .
                'e":"PAYMENTQUOTES.CANCELLED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4' .
                'fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-' .
                '24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},' .
                '{"namespace":"SPENDBACKQUOTES.CREATED","status":"AVAILABLE","token":"webh-4de2d' .
                '5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated"' .
                ':"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/' .
                'receive"},{"namespace":"SPENDBACKQUOTES.ACCEPTED","status":"AVAILABLE","token":' .
                '"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","l' .
                'astUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsit' .
                'es.net/api/receive"},{"namespace":"SPENDBACKQUOTES.VOIDED","status":"AVAILABLE"' .
                ',"token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:5' .
                '3:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.az' .
                'urewebsites.net/api/receive"},{"namespace":"SPENDBACKQUOTES.CANCELLED","status"' .
                ':"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"202' .
                '0-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhoo' .
                'kreceiver.azurewebsites.net/api/receive"},{"namespace":"RECEIPTS.CREATED","stat' .
                'us":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"' .
                '2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://faweb' .
                'hookreceiver.azurewebsites.net/api/receive"},{"namespace":"RECEIPTS.UPDATED.STA' .
                'TUS.COMPLETED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343' .
                '295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z",' .
                '"url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"' .
                'RECEIPTS.UPDATED.STATUS.CANCELLED","status":"AVAILABLE","token":"webh-4de2d5d8-' .
                'f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"20' .
                '20-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/rece' .
                'ive"},{"namespace":"RECEIPTS.UPDATED.STATUS.REFUNDED","status":"AVAILABLE","tok' .
                'en":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z' .
                '","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewe' .
                'bsites.net/api/receive"},{"namespace":"RECEIPTS.UPDATED.STATUS.FAILED","status"' .
                ':"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"202' .
                '0-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhoo' .
                'kreceiver.azurewebsites.net/api/receive"},{"namespace":"RECEIPTS.UPDATED.STATUS' .
                '.PENDING","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f2' .
                '4e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url"' .
                ':"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"RECEI' .
                'PTS.UPDATED.STATUS.SCHEDULED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-' .
                '4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07' .
                '-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/receive"}' .
                ',{"namespace":"RECEIPTS.UPDATED.STATUS.PROCESSING","status":"AVAILABLE","token"' .
                ':"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","' .
                'lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsi' .
                'tes.net/api/receive"},{"namespace":"RECEIPTS.UPDATED.STATUS.REVERSED","status":' .
                '"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020' .
                '-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://fawebhook' .
                'receiver.azurewebsites.net/api/receive"},{"namespace":"RECEIPTS.UPDATED.DETAILS' .
                '.MODIFIED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f' .
                '24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url' .
                '":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":"USER' .
                'EVENTS.STARTED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d34' .
                '3295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z"' .
                ',"url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namespace":' .
                '"USEREVENTS.UPDATED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0' .
                '-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53' .
                ':08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{"namesp' .
                'ace":"USEREVENTS.COMPLETED","status":"AVAILABLE","token":"webh-4de2d5d8-f04a-4f' .
                'e1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","lastUpdated":"2020-07-2' .
                '4T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.net/api/receive"},{' .
                '"namespace":"RECEIPTS.UPDATED.STATUS.RETURNED","status":"AVAILABLE","token":"we' .
                'bh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created":"2020-07-24T14:53:08Z","last' .
                'Updated":"2020-07-24T14:53:08Z","url":"https://fawebhookreceiver.azurewebsites.' .
                'net/api/receive"},{"namespace":"PREPAIDCARDS.UPDATED.STATUS.PENDINGRELEASE","st' .
                'atus":"AVAILABLE","token":"webh-4de2d5d8-f04a-4fe1-bff0-8d343295f24e","created"' .
                ':"2020-07-24T14:53:08Z","lastUpdated":"2020-07-24T14:53:08Z","url":"https://faw' .
                'ebhookreceiver.azurewebsites.net/api/receive"}],"meta":{"pageNo":"1","pageSize"' .
                ':"100","pageCount":"0","recordCount":"0","timezone":"GMT","requestRef":"request' .
                '-reference-value"},"links":[{"href":"https://platform.mypayquicker.dev/api/v2/w' .
                'ebhooks","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testUpdateSubscription()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"namespace":"PAYMENTQUOTES.ACCEPTED","url":"https://fawebhookreceiver.azurewebsit' .
            'es.net/api/receive"}',
            Models\CreateWebhookRequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updateSubscription($body);
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
                '{"token":"webh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","created":"2020-07-24T14:' .
                '53:08Z","lastUpdated":"2022-04-13T05:53:48Z","url":"https://fawebhookreceiver.a' .
                'zurewebsites.net/api/receive","namespace":"PAYMENTQUOTES.ACCEPTED","status":"SU' .
                'BSCRIBED","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/webhooks/w' .
                'ebh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","params":{"rel":"self"}}],"meta":{"ti' .
                'mezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCreateSubscription()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"namespace":"PAYMENTQUOTES.ACCEPTED","url":"https://fawebhookreceiver.azurewebsit' .
            'es.net/api/receive"}',
            Models\CreateWebhookRequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createSubscription($body);
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
                '{"token":"webh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","created":"2020-07-24T14:' .
                '53:08Z","lastUpdated":"2022-04-13T05:53:48Z","url":"https://fawebhookreceiver.a' .
                'zurewebsites.net/api/receive","namespace":"PAYMENTQUOTES.ACCEPTED","status":"SU' .
                'BSCRIBED","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/webhooks/w' .
                'ebh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","params":{"rel":"self"}}],"meta":{"ti' .
                'mezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testCreateSubscription1()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"namespace":"PAYMENTQUOTES.ACCEPTED","url":"https://fawebhookreceiver.azurewebsit' .
            'es.net/api/receive"}',
            Models\CreateWebhookRequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createSubscription($body);
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
                '{"token":"webh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","created":"2020-07-24T14:' .
                '53:08Z","lastUpdated":"2022-04-13T05:53:48Z","url":"https://fawebhookreceiver.a' .
                'zurewebsites.net/api/receive","namespace":"PAYMENTQUOTES.ACCEPTED","status":"SU' .
                'BSCRIBED","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/webhooks/w' .
                'ebh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","params":{"rel":"self"}}],"meta":{"ti' .
                'mezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveSubscription()
    {
        // Parameters for the API call
        $webhookToken = 'webh-2dd54a53-3814-4ce1-862f-dc06b09ead4a';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveSubscription($webhookToken);
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
                '{"token":"webh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","created":"2020-07-24T14:' .
                '53:08Z","lastUpdated":"2022-04-13T05:53:48Z","url":"https://fawebhookreceiver.a' .
                'zurewebsites.net/api/receive","namespace":"PAYMENTQUOTES.ACCEPTED","status":"SU' .
                'BSCRIBED","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/webhooks/w' .
                'ebh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","params":{"rel":"self"}}],"meta":{"ti' .
                'mezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }

    public function testDeleteSubscription()
    {
        // Parameters for the API call
        $webhookToken = 'webh-2dd54a53-3814-4ce1-862f-dc06b09ead4a';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->deleteSubscription($webhookToken);
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
                '{"token":"webh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","created":"2020-07-24T14:' .
                '53:08Z","lastUpdated":"2022-04-13T05:53:48Z","url":"https://fawebhookreceiver.a' .
                'zurewebsites.net/api/receive","namespace":"PAYMENTQUOTES.ACCEPTED","status":"SU' .
                'BSCRIBED","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/webhooks/w' .
                'ebh-c33c81ab-9fd7-4835-8cf9-1b23473e1163","params":{"rel":"self"}}],"meta":{"ti' .
                'mezone":"GMT","requestRef":"request-reference-value"}}'
            )))
            ->assert();
    }
}
