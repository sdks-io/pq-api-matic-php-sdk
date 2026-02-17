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
use PayQuickerSDKLib\Controllers\ReceiptsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class ReceiptsControllerTest extends BaseTestController
{
    /**
     * @var ReceiptsController ReceiptsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getReceiptsController();
    }

    public function testListAccountReceipts()
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
            $result = self::$controller->listAccountReceipts(
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
                '{"payload":[{"token":"rcpt-86674764-9b7a-4b31-adce-bd3299172f1f","type":"ACCOU' .
                'NT_TO_ACCOUNT_TRANSFER","createdOn":"2022-05-04T18:50:36Z","sign":"DEBIT","sour' .
                'ceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationToken":"user-6' .
                '31b200f-665d-4dbe-bd01-3063c9dec97d","amount":-96.82,"currency":"USD","status":' .
                '"COMPLETE","descriptions":[{"language":"en-US","translation":"Transfer to Brann' .
                'on Mertz (Cruz.Hilpert)"}],"details":{"memo":"User To User - memo","note":"User' .
                ' To User - note","correlationToken":"xfer-25c89128-733a-49c2-ac47-31fdfb7e2629"' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc96' .
                '7-d12e-4647-a887-d905172fb4bc/receipts/rcpt-86674764-9b7a-4b31-adce-bd3299172f1' .
                'f","params":{"rel":"self"}}]},{"token":"rcpt-09b52cad-9e83-46d9-b36f-5d59e560de' .
                '3a","type":"ACCOUNT_TO_ACCOUNT_TRANSFER","createdOn":"2022-05-04T06:48:44Z","si' .
                'gn":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinat' .
                'ionToken":"user-631b200f-665d-4dbe-bd01-3063c9dec97d","amount":-96.82,"currency' .
                '":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation":"' .
                'Transfer to Brannon Mertz (Cruz.Hilpert)"}],"details":{"memo":"User To User - m' .
                'emo","note":"User To User - note","correlationToken":"xfer-bc1571c2-f748-4478-9' .
                '748-56018209c2a9"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/u' .
                'sers/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-09b52cad-9e83-46d9' .
                '-b36f-5d59e560de3a","params":{"rel":"self"}}]},{"token":"rcpt-5a7542e4-1bfe-411' .
                '2-bbe6-8b8db53ffe1e","type":"SPENDBACK_RETURN","createdOn":"2022-05-04T06:04:43' .
                'Z","sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","d' .
                'estinationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":78.98,"cu' .
                'rrency":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translat' .
                'ion":"Refund for purchase ARIS07D7VANJRJN2C from "}],"details":{"correlationTok' .
                'en":"spnd-42a5c7e9-63be-4686-988f-e184fce663cd"},"links":[{"href":"https://api.' .
                'sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/re' .
                'ceipts/rcpt-5a7542e4-1bfe-4112-bbe6-8b8db53ffe1e","params":{"rel":"self"}}]},{"' .
                'token":"rcpt-19b7dd3b-e597-4759-b55e-608a8efbd7cc","type":"SPENDBACK","createdO' .
                'n":"2022-05-04T06:04:14Z","sign":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647' .
                '-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b1478' .
                '60","amount":-78.98,"currency":"USD","status":"COMPLETE","descriptions":[{"lang' .
                'uage":"en-US","translation":"Purchase from Arco MCB Gateway"}],"details":{"corr' .
                'elationToken":"spnd-7daae4c3-3766-4beb-9b26-c2b3d4dadf27"},"links":[{"href":"ht' .
                'tps://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d9051' .
                '72fb4bc/receipts/rcpt-19b7dd3b-e597-4759-b55e-608a8efbd7cc","params":{"rel":"se' .
                'lf"}}]},{"token":"rcpt-1736aaff-b952-40bf-96bf-742cb12f092d","type":"SPENDBACK_' .
                'RETURN","createdOn":"2022-05-03T18:57:33Z","sign":"CREDIT","sourceToken":"acct-' .
                '3908ab5a-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc","amount":300,"currency":"USD","status":"COMPLETE","descri' .
                'ptions":[{"language":"en-US","translation":"Refund for purchase ARIS07D7VANJRJN' .
                '07 from "}],"details":{"correlationToken":"spnd-28b73a28-8b9b-4a75-98ca-b9492d7' .
                '77695"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2' .
                'bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-1736aaff-b952-40bf-96bf-742cb' .
                '12f092d","params":{"rel":"self"}}]},{"token":"rcpt-ad5e8d05-be48-492d-8368-aa01' .
                '22e805de","type":"SPENDBACK","createdOn":"2022-05-03T18:57:25Z","sign":"DEBIT",' .
                '"sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationToken":"a' .
                'cct-3908ab5a-6ce1-474d-8b80-a63a7b147860","amount":-300,"currency":"USD","statu' .
                's":"COMPLETE","descriptions":[{"language":"en-US","translation":"Purchase from ' .
                'Arco MCB Gateway"}],"details":{"correlationToken":"spnd-ac4ad980-2b72-415e-80ef' .
                '-890ba4bc107e"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/user' .
                's/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-ad5e8d05-be48-492d-83' .
                '68-aa0122e805de","params":{"rel":"self"}}]},{"token":"rcpt-2de81d8a-573b-46a1-a' .
                'b4b-ec691a100f2e","type":"SPENDBACK_RETURN","createdOn":"2022-05-03T16:53:21Z",' .
                '"sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","dest' .
                'inationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":15,"currency' .
                '":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation":"' .
                'Partial refund for purchase ARIS07D7UN68D27PP from "}],"details":{"correlationT' .
                'oken":"spnd-16e75c71-dc71-4c49-8500-475715c098ac"},"links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/' .
                'receipts/rcpt-2de81d8a-573b-46a1-ab4b-ec691a100f2e","params":{"rel":"self"}}]},' .
                '{"token":"rcpt-c5a43c8c-be7a-4297-a348-6010d4342935","type":"SPENDBACK","create' .
                'dOn":"2022-05-03T16:53:00Z","sign":"DEBIT","sourceToken":"user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b14' .
                '7860","amount":-300,"currency":"USD","status":"COMPLETE","descriptions":[{"lang' .
                'uage":"en-US","translation":"Purchase from Arco MCB Gateway"}],"details":{"corr' .
                'elationToken":"spnd-59c3529d-18c2-460e-b422-ad548fab256c"},"links":[{"href":"ht' .
                'tps://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d9051' .
                '72fb4bc/receipts/rcpt-c5a43c8c-be7a-4297-a348-6010d4342935","params":{"rel":"se' .
                'lf"}}]},{"token":"rcpt-220101e5-b2b6-429f-bd76-0a790b70b42d","type":"SPENDBACK"' .
                ',"createdOn":"2022-05-02T20:40:39Z","sign":"DEBIT","sourceToken":"user-2bbfc967' .
                '-d12e-4647-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-' .
                'a63a7b147860","amount":-300,"currency":"USD","status":"COMPLETE","descriptions"' .
                ':[{"language":"en-US","translation":"Purchase from Arco MCB Gateway"}],"details' .
                '":{"correlationToken":"spnd-4c414196-d3dd-4233-a729-6fc2da0810eb"},"links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a8' .
                '87-d905172fb4bc/receipts/rcpt-220101e5-b2b6-429f-bd76-0a790b70b42d","params":{"' .
                'rel":"self"}}]},{"token":"rcpt-bf34989d-0b13-47ee-bd51-b96b0ecbe866","type":"PR' .
                'EPAID_CARD_LOAD","createdOn":"2022-04-29T19:27:08Z","sign":"DEBIT","sourceToken' .
                '":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationToken":"dest-b61bc870' .
                '-8ab8-4870-a209-6398b60269d5","amount":-25,"currency":"USD","status":"COMPLETE"' .
                ',"descriptions":[{"language":"en-US","translation":"Transfer to Arco MCB Gatewa' .
                'y Commission Account (USD) - $25.00 USD (Conversion rate: 1)"}],"details":{"car' .
                'dExpiryDate":"04/2025","cardHolderName":"Timothy Mueller","cardNumber":"*******' .
                '*****3940","memo":"Memo - Card Transfer 1","note":"Note - Card Transfer 1","cor' .
                'relationToken":"xfer-bf34989d-0b13-47ee-bd51-b96b0ecbe866"},"links":[{"href":"h' .
                'ttps://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905' .
                '172fb4bc/receipts/rcpt-bf34989d-0b13-47ee-bd51-b96b0ecbe866","params":{"rel":"s' .
                'elf"}}]},{"token":"rcpt-022b3730-e62e-4ee3-8af9-714a06dadf3c","type":"PAYMENT",' .
                '"createdOn":"2022-04-29T19:20:22Z","sign":"CREDIT","sourceToken":"acct-3908ab5a' .
                '-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d12e-4647-a887-' .
                'd905172fb4bc","amount":1500,"currency":"USD","status":"COMPLETE","descriptions"' .
                ':[{"language":"en-US","translation":"Payment received from  Arco MCB Gateway"}]' .
                ',"details":{"correlationToken":"pmnt-87c94572-8241-4c46-976e-0f0dfe3211a6"},"li' .
                'nks":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc/receipts/rcpt-022b3730-e62e-4ee3-8af9-714a06dadf3c","p' .
                'arams":{"rel":"self"}}]},{"token":"rcpt-24e6c58c-5819-41fa-8dd4-15f8920a68e9","' .
                'type":"ACCOUNT_TO_ACCOUNT_TRANSFER","createdOn":"2022-04-28T22:08:43Z","sign":"' .
                'DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationTo' .
                'ken":"user-631b200f-665d-4dbe-bd01-3063c9dec97d","amount":-10,"currency":"USD",' .
                '"status":"COMPLETE","descriptions":[{"language":"en-US","translation":"Transfer' .
                ' to Brannon Mertz (Cruz.Hilpert)"}],"details":{"memo":"User To User - memo","no' .
                'te":"User To User - note","correlationToken":"xfer-aa657951-d6bc-4023-a3a7-3777' .
                '38650b28"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/use' .
                'r-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-24e6c58c-5819-41fa-8dd4-15' .
                'f8920a68e9","params":{"rel":"self"}}]},{"token":"rcpt-20c97ff0-b83c-403a-aad7-2' .
                '5a00bdd80af","type":"PAYMENT_RETRACTION","createdOn":"2022-04-27T22:23:57Z","si' .
                'gn":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinat' .
                'ionToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","amount":-1000.22,"curren' .
                'cy":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation"' .
                ':"Retraction for ARIS07D0RVW6VKY02"}],"details":{"correlationToken":"pmnt-4c19e' .
                '750-c901-484c-acba-12979e8c6b58"},"links":[{"href":"https://api.sandbox.payquic' .
                'ker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-20c' .
                '97ff0-b83c-403a-aad7-25a00bdd80af","params":{"rel":"self"}}]},{"token":"rcpt-dd' .
                'c68526-8b18-42b6-9fac-75a04d580d6f","type":"PAYMENT","createdOn":"2022-04-27T22' .
                ':23:31Z","sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b1478' .
                '60","destinationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":100' .
                '0.22,"currency":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","' .
                'translation":"Payment received from  Arco MCB Gateway"}],"details":{"correlatio' .
                'nToken":"pmnt-51297345-c803-44ab-9e2e-70713142dd58"},"links":[{"href":"https://' .
                'api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4b' .
                'c/receipts/rcpt-ddc68526-8b18-42b6-9fac-75a04d580d6f","params":{"rel":"self"}}]' .
                '},{"token":"rcpt-be174879-7829-4275-a0e6-164a7d5b5251","type":"PAYMENT_RETRACTI' .
                'ON","createdOn":"2022-04-27T22:19:17Z","sign":"DEBIT","sourceToken":"user-2bbfc' .
                '967-d12e-4647-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b' .
                '80-a63a7b147860","amount":-1500,"currency":"USD","status":"COMPLETE","descripti' .
                'ons":[{"language":"en-US","translation":"Retraction for ARIS07D0RVW6VKXZS"}],"d' .
                'etails":{"correlationToken":"pmnt-61db2938-fa74-48e9-a3f1-b83d21f492d8"},"links' .
                '":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4' .
                '647-a887-d905172fb4bc/receipts/rcpt-be174879-7829-4275-a0e6-164a7d5b5251","para' .
                'ms":{"rel":"self"}}]},{"token":"rcpt-3baa92d6-a443-4b45-a245-b34ad51c85f6","typ' .
                'e":"PAYMENT","createdOn":"2022-04-27T22:18:56Z","sign":"CREDIT","sourceToken":"' .
                'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d1' .
                '2e-4647-a887-d905172fb4bc","amount":1500,"currency":"USD","status":"COMPLETE","' .
                'descriptions":[{"language":"en-US","translation":"Payment received from  Arco M' .
                'CB Gateway"}],"details":{"correlationToken":"pmnt-c99be127-65b2-474b-bf3a-80f4f' .
                '6133f6a"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user' .
                '-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-3baa92d6-a443-4b45-a245-b34' .
                'ad51c85f6","params":{"rel":"self"}}]},{"token":"rcpt-d91a1d65-adab-43b1-8f33-9f' .
                '5a9fac8da7","type":"PAYMENT_RETRACTION","createdOn":"2022-04-26T17:45:22Z","sig' .
                'n":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinati' .
                'onToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","amount":-78.98,"currency"' .
                ':"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation":"R' .
                'etraction for ARIS07CW0646GSO3H"}],"details":{"correlationToken":"pmnt-f293a55f' .
                '-fae4-45cd-b63c-3023e02ef699"},"links":[{"href":"https://api.sandbox.payquicker' .
                '.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-d91a1d' .
                '65-adab-43b1-8f33-9f5a9fac8da7","params":{"rel":"self"}}]},{"token":"rcpt-5c1ec' .
                '450-09c5-4f97-828f-94f843f755f1","type":"PAYMENT","createdOn":"2022-04-26T17:11' .
                ':29Z","sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860"' .
                ',"destinationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":78.98,' .
                '"currency":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","trans' .
                'lation":"Payment received from  Arco MCB Gateway"}],"details":{"correlationToke' .
                'n":"pmnt-9d60431b-8bcd-41a7-a002-1669426dac21"},"links":[{"href":"https://api.s' .
                'andbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/rec' .
                'eipts/rcpt-5c1ec450-09c5-4f97-828f-94f843f755f1","params":{"rel":"self"}}]},{"t' .
                'oken":"rcpt-74abe865-7719-438d-8fa2-b27cdb03ec06","type":"PAYMENT_RETRACTION","' .
                'createdOn":"2022-04-26T15:47:39Z","sign":"DEBIT","sourceToken":"user-2bbfc967-d' .
                '12e-4647-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a6' .
                '3a7b147860","amount":-1500,"currency":"USD","status":"COMPLETE","descriptions":' .
                '[{"language":"en-US","translation":"Retraction for ARIS07CVR5THWRZML"}],"detail' .
                's":{"correlationToken":"pmnt-ab72dd70-37f1-4024-9b44-525ae6e634a4"},"links":[{"' .
                'href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a' .
                '887-d905172fb4bc/receipts/rcpt-74abe865-7719-438d-8fa2-b27cdb03ec06","params":{' .
                '"rel":"self"}}]},{"token":"rcpt-e3abab12-bcaa-41fd-91d3-3819f27e8eba","type":"P' .
                'AYMENT","createdOn":"2022-04-26T15:47:31Z","sign":"CREDIT","sourceToken":"acct-' .
                '3908ab5a-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc","amount":1500,"currency":"USD","status":"COMPLETE","descr' .
                'iptions":[{"language":"en-US","translation":"Payment received from  Arco MCB Ga' .
                'teway"}],"details":{"correlationToken":"pmnt-9aca4986-fab9-4d39-8370-a7724b71ac' .
                'e1"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbf' .
                'c967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-e3abab12-bcaa-41fd-91d3-3819f27e' .
                '8eba","params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"20","pageCou' .
                'nt":"2","recordCount":"22","timezone":"GMT","requestRef":"request-reference-val' .
                'ue"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbf' .
                'c967-d12e-4647-a887-d905172fb4bc/receipts?pageSize=20&language=en-US","params":' .
                '{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrieveAccountReceipt()
    {
        // Parameters for the API call
        $accountToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';
        $receiptToken = 'rcpt-86674764-9b7a-4b31-adce-bd3299172f1f';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveAccountReceipt($accountToken, $receiptToken);
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
                '{"token":"rcpt-b58721a3-33e8-4a62-b51d-a997b46fbce0","type":"PAYMENT","created' .
                'On":"2022-05-04T13:19:38Z","sign":"DEBIT","sourceToken":"acct-4433f040-4ad5-41e' .
                '5-a6e3-c9611a7be95e","destinationToken":"user-cf6244d7-f6b8-4625-906a-9f21fc8c7' .
                '74b","amount":-1500,"currency":"USD","status":"COMPLETE","descriptions":[{"lang' .
                'uage":"en-US","translation":"Payment sent to Boutique Partner Cale Cruickshank ' .
                '(Izaiah_McCullough)"}],"details":{"memo":"Payment 1 Memo","note":"Payment 1 Not' .
                'e","correlationToken":"pmnt-1d4ae3b0-09c9-402a-8d38-3de1bfdbd1e3"},"links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/accounts/acct-4433f040-4ad5-41e5' .
                '-a6e3-c9611a7be95e/receipts/rcpt-b58721a3-33e8-4a62-b51d-a997b46fbce0","params"' .
                ':{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-valu' .
                'e"}}'
            )))
            ->assert();
    }

    public function testListPrepaidCardReceipts()
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
            $result = self::$controller->listPrepaidCardReceipts(
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
                '{"payload":[{"token":"rcpt-86674764-9b7a-4b31-adce-bd3299172f1f","type":"ACCOU' .
                'NT_TO_ACCOUNT_TRANSFER","createdOn":"2022-05-04T18:50:36Z","sign":"DEBIT","sour' .
                'ceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationToken":"user-6' .
                '31b200f-665d-4dbe-bd01-3063c9dec97d","amount":-96.82,"currency":"USD","status":' .
                '"COMPLETE","descriptions":[{"language":"en-US","translation":"Transfer to Brann' .
                'on Mertz (Cruz.Hilpert)"}],"details":{"memo":"User To User - memo","note":"User' .
                ' To User - note","correlationToken":"xfer-25c89128-733a-49c2-ac47-31fdfb7e2629"' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc96' .
                '7-d12e-4647-a887-d905172fb4bc/receipts/rcpt-86674764-9b7a-4b31-adce-bd3299172f1' .
                'f","params":{"rel":"self"}}]},{"token":"rcpt-09b52cad-9e83-46d9-b36f-5d59e560de' .
                '3a","type":"ACCOUNT_TO_ACCOUNT_TRANSFER","createdOn":"2022-05-04T06:48:44Z","si' .
                'gn":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinat' .
                'ionToken":"user-631b200f-665d-4dbe-bd01-3063c9dec97d","amount":-96.82,"currency' .
                '":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation":"' .
                'Transfer to Brannon Mertz (Cruz.Hilpert)"}],"details":{"memo":"User To User - m' .
                'emo","note":"User To User - note","correlationToken":"xfer-bc1571c2-f748-4478-9' .
                '748-56018209c2a9"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/u' .
                'sers/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-09b52cad-9e83-46d9' .
                '-b36f-5d59e560de3a","params":{"rel":"self"}}]},{"token":"rcpt-5a7542e4-1bfe-411' .
                '2-bbe6-8b8db53ffe1e","type":"SPENDBACK_RETURN","createdOn":"2022-05-04T06:04:43' .
                'Z","sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","d' .
                'estinationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":78.98,"cu' .
                'rrency":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translat' .
                'ion":"Refund for purchase ARIS07D7VANJRJN2C from "}],"details":{"correlationTok' .
                'en":"spnd-42a5c7e9-63be-4686-988f-e184fce663cd"},"links":[{"href":"https://api.' .
                'sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/re' .
                'ceipts/rcpt-5a7542e4-1bfe-4112-bbe6-8b8db53ffe1e","params":{"rel":"self"}}]},{"' .
                'token":"rcpt-19b7dd3b-e597-4759-b55e-608a8efbd7cc","type":"SPENDBACK","createdO' .
                'n":"2022-05-04T06:04:14Z","sign":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647' .
                '-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b1478' .
                '60","amount":-78.98,"currency":"USD","status":"COMPLETE","descriptions":[{"lang' .
                'uage":"en-US","translation":"Purchase from Arco MCB Gateway"}],"details":{"corr' .
                'elationToken":"spnd-7daae4c3-3766-4beb-9b26-c2b3d4dadf27"},"links":[{"href":"ht' .
                'tps://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d9051' .
                '72fb4bc/receipts/rcpt-19b7dd3b-e597-4759-b55e-608a8efbd7cc","params":{"rel":"se' .
                'lf"}}]},{"token":"rcpt-1736aaff-b952-40bf-96bf-742cb12f092d","type":"SPENDBACK_' .
                'RETURN","createdOn":"2022-05-03T18:57:33Z","sign":"CREDIT","sourceToken":"acct-' .
                '3908ab5a-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc","amount":300,"currency":"USD","status":"COMPLETE","descri' .
                'ptions":[{"language":"en-US","translation":"Refund for purchase ARIS07D7VANJRJN' .
                '07 from "}],"details":{"correlationToken":"spnd-28b73a28-8b9b-4a75-98ca-b9492d7' .
                '77695"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2' .
                'bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-1736aaff-b952-40bf-96bf-742cb' .
                '12f092d","params":{"rel":"self"}}]},{"token":"rcpt-ad5e8d05-be48-492d-8368-aa01' .
                '22e805de","type":"SPENDBACK","createdOn":"2022-05-03T18:57:25Z","sign":"DEBIT",' .
                '"sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationToken":"a' .
                'cct-3908ab5a-6ce1-474d-8b80-a63a7b147860","amount":-300,"currency":"USD","statu' .
                's":"COMPLETE","descriptions":[{"language":"en-US","translation":"Purchase from ' .
                'Arco MCB Gateway"}],"details":{"correlationToken":"spnd-ac4ad980-2b72-415e-80ef' .
                '-890ba4bc107e"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/user' .
                's/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-ad5e8d05-be48-492d-83' .
                '68-aa0122e805de","params":{"rel":"self"}}]},{"token":"rcpt-2de81d8a-573b-46a1-a' .
                'b4b-ec691a100f2e","type":"SPENDBACK_RETURN","createdOn":"2022-05-03T16:53:21Z",' .
                '"sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","dest' .
                'inationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":15,"currency' .
                '":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation":"' .
                'Partial refund for purchase ARIS07D7UN68D27PP from "}],"details":{"correlationT' .
                'oken":"spnd-16e75c71-dc71-4c49-8500-475715c098ac"},"links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/' .
                'receipts/rcpt-2de81d8a-573b-46a1-ab4b-ec691a100f2e","params":{"rel":"self"}}]},' .
                '{"token":"rcpt-c5a43c8c-be7a-4297-a348-6010d4342935","type":"SPENDBACK","create' .
                'dOn":"2022-05-03T16:53:00Z","sign":"DEBIT","sourceToken":"user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b14' .
                '7860","amount":-300,"currency":"USD","status":"COMPLETE","descriptions":[{"lang' .
                'uage":"en-US","translation":"Purchase from Arco MCB Gateway"}],"details":{"corr' .
                'elationToken":"spnd-59c3529d-18c2-460e-b422-ad548fab256c"},"links":[{"href":"ht' .
                'tps://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d9051' .
                '72fb4bc/receipts/rcpt-c5a43c8c-be7a-4297-a348-6010d4342935","params":{"rel":"se' .
                'lf"}}]},{"token":"rcpt-220101e5-b2b6-429f-bd76-0a790b70b42d","type":"SPENDBACK"' .
                ',"createdOn":"2022-05-02T20:40:39Z","sign":"DEBIT","sourceToken":"user-2bbfc967' .
                '-d12e-4647-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-' .
                'a63a7b147860","amount":-300,"currency":"USD","status":"COMPLETE","descriptions"' .
                ':[{"language":"en-US","translation":"Purchase from Arco MCB Gateway"}],"details' .
                '":{"correlationToken":"spnd-4c414196-d3dd-4233-a729-6fc2da0810eb"},"links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a8' .
                '87-d905172fb4bc/receipts/rcpt-220101e5-b2b6-429f-bd76-0a790b70b42d","params":{"' .
                'rel":"self"}}]},{"token":"rcpt-bf34989d-0b13-47ee-bd51-b96b0ecbe866","type":"PR' .
                'EPAID_CARD_LOAD","createdOn":"2022-04-29T19:27:08Z","sign":"DEBIT","sourceToken' .
                '":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationToken":"dest-b61bc870' .
                '-8ab8-4870-a209-6398b60269d5","amount":-25,"currency":"USD","status":"COMPLETE"' .
                ',"descriptions":[{"language":"en-US","translation":"Transfer to Arco MCB Gatewa' .
                'y Commission Account (USD) - $25.00 USD (Conversion rate: 1)"}],"details":{"car' .
                'dExpiryDate":"04/2025","cardHolderName":"Timothy Mueller","cardNumber":"*******' .
                '*****3940","memo":"Memo - Card Transfer 1","note":"Note - Card Transfer 1","cor' .
                'relationToken":"xfer-bf34989d-0b13-47ee-bd51-b96b0ecbe866"},"links":[{"href":"h' .
                'ttps://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905' .
                '172fb4bc/receipts/rcpt-bf34989d-0b13-47ee-bd51-b96b0ecbe866","params":{"rel":"s' .
                'elf"}}]},{"token":"rcpt-022b3730-e62e-4ee3-8af9-714a06dadf3c","type":"PAYMENT",' .
                '"createdOn":"2022-04-29T19:20:22Z","sign":"CREDIT","sourceToken":"acct-3908ab5a' .
                '-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d12e-4647-a887-' .
                'd905172fb4bc","amount":1500,"currency":"USD","status":"COMPLETE","descriptions"' .
                ':[{"language":"en-US","translation":"Payment received from  Arco MCB Gateway"}]' .
                ',"details":{"correlationToken":"pmnt-87c94572-8241-4c46-976e-0f0dfe3211a6"},"li' .
                'nks":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc/receipts/rcpt-022b3730-e62e-4ee3-8af9-714a06dadf3c","p' .
                'arams":{"rel":"self"}}]},{"token":"rcpt-24e6c58c-5819-41fa-8dd4-15f8920a68e9","' .
                'type":"ACCOUNT_TO_ACCOUNT_TRANSFER","createdOn":"2022-04-28T22:08:43Z","sign":"' .
                'DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationTo' .
                'ken":"user-631b200f-665d-4dbe-bd01-3063c9dec97d","amount":-10,"currency":"USD",' .
                '"status":"COMPLETE","descriptions":[{"language":"en-US","translation":"Transfer' .
                ' to Brannon Mertz (Cruz.Hilpert)"}],"details":{"memo":"User To User - memo","no' .
                'te":"User To User - note","correlationToken":"xfer-aa657951-d6bc-4023-a3a7-3777' .
                '38650b28"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/use' .
                'r-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-24e6c58c-5819-41fa-8dd4-15' .
                'f8920a68e9","params":{"rel":"self"}}]},{"token":"rcpt-20c97ff0-b83c-403a-aad7-2' .
                '5a00bdd80af","type":"PAYMENT_RETRACTION","createdOn":"2022-04-27T22:23:57Z","si' .
                'gn":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinat' .
                'ionToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","amount":-1000.22,"curren' .
                'cy":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation"' .
                ':"Retraction for ARIS07D0RVW6VKY02"}],"details":{"correlationToken":"pmnt-4c19e' .
                '750-c901-484c-acba-12979e8c6b58"},"links":[{"href":"https://api.sandbox.payquic' .
                'ker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-20c' .
                '97ff0-b83c-403a-aad7-25a00bdd80af","params":{"rel":"self"}}]},{"token":"rcpt-dd' .
                'c68526-8b18-42b6-9fac-75a04d580d6f","type":"PAYMENT","createdOn":"2022-04-27T22' .
                ':23:31Z","sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b1478' .
                '60","destinationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":100' .
                '0.22,"currency":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","' .
                'translation":"Payment received from  Arco MCB Gateway"}],"details":{"correlatio' .
                'nToken":"pmnt-51297345-c803-44ab-9e2e-70713142dd58"},"links":[{"href":"https://' .
                'api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4b' .
                'c/receipts/rcpt-ddc68526-8b18-42b6-9fac-75a04d580d6f","params":{"rel":"self"}}]' .
                '},{"token":"rcpt-be174879-7829-4275-a0e6-164a7d5b5251","type":"PAYMENT_RETRACTI' .
                'ON","createdOn":"2022-04-27T22:19:17Z","sign":"DEBIT","sourceToken":"user-2bbfc' .
                '967-d12e-4647-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b' .
                '80-a63a7b147860","amount":-1500,"currency":"USD","status":"COMPLETE","descripti' .
                'ons":[{"language":"en-US","translation":"Retraction for ARIS07D0RVW6VKXZS"}],"d' .
                'etails":{"correlationToken":"pmnt-61db2938-fa74-48e9-a3f1-b83d21f492d8"},"links' .
                '":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4' .
                '647-a887-d905172fb4bc/receipts/rcpt-be174879-7829-4275-a0e6-164a7d5b5251","para' .
                'ms":{"rel":"self"}}]},{"token":"rcpt-3baa92d6-a443-4b45-a245-b34ad51c85f6","typ' .
                'e":"PAYMENT","createdOn":"2022-04-27T22:18:56Z","sign":"CREDIT","sourceToken":"' .
                'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d1' .
                '2e-4647-a887-d905172fb4bc","amount":1500,"currency":"USD","status":"COMPLETE","' .
                'descriptions":[{"language":"en-US","translation":"Payment received from  Arco M' .
                'CB Gateway"}],"details":{"correlationToken":"pmnt-c99be127-65b2-474b-bf3a-80f4f' .
                '6133f6a"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user' .
                '-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-3baa92d6-a443-4b45-a245-b34' .
                'ad51c85f6","params":{"rel":"self"}}]},{"token":"rcpt-d91a1d65-adab-43b1-8f33-9f' .
                '5a9fac8da7","type":"PAYMENT_RETRACTION","createdOn":"2022-04-26T17:45:22Z","sig' .
                'n":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinati' .
                'onToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","amount":-78.98,"currency"' .
                ':"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation":"R' .
                'etraction for ARIS07CW0646GSO3H"}],"details":{"correlationToken":"pmnt-f293a55f' .
                '-fae4-45cd-b63c-3023e02ef699"},"links":[{"href":"https://api.sandbox.payquicker' .
                '.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-d91a1d' .
                '65-adab-43b1-8f33-9f5a9fac8da7","params":{"rel":"self"}}]},{"token":"rcpt-5c1ec' .
                '450-09c5-4f97-828f-94f843f755f1","type":"PAYMENT","createdOn":"2022-04-26T17:11' .
                ':29Z","sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860"' .
                ',"destinationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":78.98,' .
                '"currency":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","trans' .
                'lation":"Payment received from  Arco MCB Gateway"}],"details":{"correlationToke' .
                'n":"pmnt-9d60431b-8bcd-41a7-a002-1669426dac21"},"links":[{"href":"https://api.s' .
                'andbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/rec' .
                'eipts/rcpt-5c1ec450-09c5-4f97-828f-94f843f755f1","params":{"rel":"self"}}]},{"t' .
                'oken":"rcpt-74abe865-7719-438d-8fa2-b27cdb03ec06","type":"PAYMENT_RETRACTION","' .
                'createdOn":"2022-04-26T15:47:39Z","sign":"DEBIT","sourceToken":"user-2bbfc967-d' .
                '12e-4647-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a6' .
                '3a7b147860","amount":-1500,"currency":"USD","status":"COMPLETE","descriptions":' .
                '[{"language":"en-US","translation":"Retraction for ARIS07CVR5THWRZML"}],"detail' .
                's":{"correlationToken":"pmnt-ab72dd70-37f1-4024-9b44-525ae6e634a4"},"links":[{"' .
                'href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a' .
                '887-d905172fb4bc/receipts/rcpt-74abe865-7719-438d-8fa2-b27cdb03ec06","params":{' .
                '"rel":"self"}}]},{"token":"rcpt-e3abab12-bcaa-41fd-91d3-3819f27e8eba","type":"P' .
                'AYMENT","createdOn":"2022-04-26T15:47:31Z","sign":"CREDIT","sourceToken":"acct-' .
                '3908ab5a-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc","amount":1500,"currency":"USD","status":"COMPLETE","descr' .
                'iptions":[{"language":"en-US","translation":"Payment received from  Arco MCB Ga' .
                'teway"}],"details":{"correlationToken":"pmnt-9aca4986-fab9-4d39-8370-a7724b71ac' .
                'e1"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbf' .
                'c967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-e3abab12-bcaa-41fd-91d3-3819f27e' .
                '8eba","params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"20","pageCou' .
                'nt":"2","recordCount":"22","timezone":"GMT","requestRef":"request-reference-val' .
                'ue"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbf' .
                'c967-d12e-4647-a887-d905172fb4bc/receipts?pageSize=20&language=en-US","params":' .
                '{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrievePrepaidCardReceipt()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $destinationToken =
            'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
        $receiptToken = 'rcpt-86674764-9b7a-4b31-adce-bd3299172f1f';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrievePrepaidCardReceipt($userToken, $destinationToken, $receiptToken);
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
                '{"token":"rcpt-b58721a3-33e8-4a62-b51d-a997b46fbce0","type":"PAYMENT","created' .
                'On":"2022-05-04T13:19:38Z","sign":"DEBIT","sourceToken":"acct-4433f040-4ad5-41e' .
                '5-a6e3-c9611a7be95e","destinationToken":"user-cf6244d7-f6b8-4625-906a-9f21fc8c7' .
                '74b","amount":-1500,"currency":"USD","status":"COMPLETE","descriptions":[{"lang' .
                'uage":"en-US","translation":"Payment sent to Boutique Partner Cale Cruickshank ' .
                '(Izaiah_McCullough)"}],"details":{"memo":"Payment 1 Memo","note":"Payment 1 Not' .
                'e","correlationToken":"pmnt-1d4ae3b0-09c9-402a-8d38-3de1bfdbd1e3"},"links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/accounts/acct-4433f040-4ad5-41e5' .
                '-a6e3-c9611a7be95e/receipts/rcpt-b58721a3-33e8-4a62-b51d-a997b46fbce0","params"' .
                ':{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-valu' .
                'e"}}'
            )))
            ->assert();
    }

    public function testListUserReceipts()
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
            $result = self::$controller->listUserReceipts($userToken, $page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"rcpt-86674764-9b7a-4b31-adce-bd3299172f1f","type":"ACCOU' .
                'NT_TO_ACCOUNT_TRANSFER","createdOn":"2022-05-04T18:50:36Z","sign":"DEBIT","sour' .
                'ceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationToken":"user-6' .
                '31b200f-665d-4dbe-bd01-3063c9dec97d","amount":-96.82,"currency":"USD","status":' .
                '"COMPLETE","descriptions":[{"language":"en-US","translation":"Transfer to Brann' .
                'on Mertz (Cruz.Hilpert)"}],"details":{"memo":"User To User - memo","note":"User' .
                ' To User - note","correlationToken":"xfer-25c89128-733a-49c2-ac47-31fdfb7e2629"' .
                '},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc96' .
                '7-d12e-4647-a887-d905172fb4bc/receipts/rcpt-86674764-9b7a-4b31-adce-bd3299172f1' .
                'f","params":{"rel":"self"}}]},{"token":"rcpt-09b52cad-9e83-46d9-b36f-5d59e560de' .
                '3a","type":"ACCOUNT_TO_ACCOUNT_TRANSFER","createdOn":"2022-05-04T06:48:44Z","si' .
                'gn":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinat' .
                'ionToken":"user-631b200f-665d-4dbe-bd01-3063c9dec97d","amount":-96.82,"currency' .
                '":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation":"' .
                'Transfer to Brannon Mertz (Cruz.Hilpert)"}],"details":{"memo":"User To User - m' .
                'emo","note":"User To User - note","correlationToken":"xfer-bc1571c2-f748-4478-9' .
                '748-56018209c2a9"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/u' .
                'sers/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-09b52cad-9e83-46d9' .
                '-b36f-5d59e560de3a","params":{"rel":"self"}}]},{"token":"rcpt-5a7542e4-1bfe-411' .
                '2-bbe6-8b8db53ffe1e","type":"SPENDBACK_RETURN","createdOn":"2022-05-04T06:04:43' .
                'Z","sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","d' .
                'estinationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":78.98,"cu' .
                'rrency":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translat' .
                'ion":"Refund for purchase ARIS07D7VANJRJN2C from "}],"details":{"correlationTok' .
                'en":"spnd-42a5c7e9-63be-4686-988f-e184fce663cd"},"links":[{"href":"https://api.' .
                'sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/re' .
                'ceipts/rcpt-5a7542e4-1bfe-4112-bbe6-8b8db53ffe1e","params":{"rel":"self"}}]},{"' .
                'token":"rcpt-19b7dd3b-e597-4759-b55e-608a8efbd7cc","type":"SPENDBACK","createdO' .
                'n":"2022-05-04T06:04:14Z","sign":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647' .
                '-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b1478' .
                '60","amount":-78.98,"currency":"USD","status":"COMPLETE","descriptions":[{"lang' .
                'uage":"en-US","translation":"Purchase from Arco MCB Gateway"}],"details":{"corr' .
                'elationToken":"spnd-7daae4c3-3766-4beb-9b26-c2b3d4dadf27"},"links":[{"href":"ht' .
                'tps://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d9051' .
                '72fb4bc/receipts/rcpt-19b7dd3b-e597-4759-b55e-608a8efbd7cc","params":{"rel":"se' .
                'lf"}}]},{"token":"rcpt-1736aaff-b952-40bf-96bf-742cb12f092d","type":"SPENDBACK_' .
                'RETURN","createdOn":"2022-05-03T18:57:33Z","sign":"CREDIT","sourceToken":"acct-' .
                '3908ab5a-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc","amount":300,"currency":"USD","status":"COMPLETE","descri' .
                'ptions":[{"language":"en-US","translation":"Refund for purchase ARIS07D7VANJRJN' .
                '07 from "}],"details":{"correlationToken":"spnd-28b73a28-8b9b-4a75-98ca-b9492d7' .
                '77695"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2' .
                'bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-1736aaff-b952-40bf-96bf-742cb' .
                '12f092d","params":{"rel":"self"}}]},{"token":"rcpt-ad5e8d05-be48-492d-8368-aa01' .
                '22e805de","type":"SPENDBACK","createdOn":"2022-05-03T18:57:25Z","sign":"DEBIT",' .
                '"sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationToken":"a' .
                'cct-3908ab5a-6ce1-474d-8b80-a63a7b147860","amount":-300,"currency":"USD","statu' .
                's":"COMPLETE","descriptions":[{"language":"en-US","translation":"Purchase from ' .
                'Arco MCB Gateway"}],"details":{"correlationToken":"spnd-ac4ad980-2b72-415e-80ef' .
                '-890ba4bc107e"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/user' .
                's/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-ad5e8d05-be48-492d-83' .
                '68-aa0122e805de","params":{"rel":"self"}}]},{"token":"rcpt-2de81d8a-573b-46a1-a' .
                'b4b-ec691a100f2e","type":"SPENDBACK_RETURN","createdOn":"2022-05-03T16:53:21Z",' .
                '"sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","dest' .
                'inationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":15,"currency' .
                '":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation":"' .
                'Partial refund for purchase ARIS07D7UN68D27PP from "}],"details":{"correlationT' .
                'oken":"spnd-16e75c71-dc71-4c49-8500-475715c098ac"},"links":[{"href":"https://ap' .
                'i.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/' .
                'receipts/rcpt-2de81d8a-573b-46a1-ab4b-ec691a100f2e","params":{"rel":"self"}}]},' .
                '{"token":"rcpt-c5a43c8c-be7a-4297-a348-6010d4342935","type":"SPENDBACK","create' .
                'dOn":"2022-05-03T16:53:00Z","sign":"DEBIT","sourceToken":"user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b14' .
                '7860","amount":-300,"currency":"USD","status":"COMPLETE","descriptions":[{"lang' .
                'uage":"en-US","translation":"Purchase from Arco MCB Gateway"}],"details":{"corr' .
                'elationToken":"spnd-59c3529d-18c2-460e-b422-ad548fab256c"},"links":[{"href":"ht' .
                'tps://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d9051' .
                '72fb4bc/receipts/rcpt-c5a43c8c-be7a-4297-a348-6010d4342935","params":{"rel":"se' .
                'lf"}}]},{"token":"rcpt-220101e5-b2b6-429f-bd76-0a790b70b42d","type":"SPENDBACK"' .
                ',"createdOn":"2022-05-02T20:40:39Z","sign":"DEBIT","sourceToken":"user-2bbfc967' .
                '-d12e-4647-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-' .
                'a63a7b147860","amount":-300,"currency":"USD","status":"COMPLETE","descriptions"' .
                ':[{"language":"en-US","translation":"Purchase from Arco MCB Gateway"}],"details' .
                '":{"correlationToken":"spnd-4c414196-d3dd-4233-a729-6fc2da0810eb"},"links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a8' .
                '87-d905172fb4bc/receipts/rcpt-220101e5-b2b6-429f-bd76-0a790b70b42d","params":{"' .
                'rel":"self"}}]},{"token":"rcpt-bf34989d-0b13-47ee-bd51-b96b0ecbe866","type":"PR' .
                'EPAID_CARD_LOAD","createdOn":"2022-04-29T19:27:08Z","sign":"DEBIT","sourceToken' .
                '":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationToken":"dest-b61bc870' .
                '-8ab8-4870-a209-6398b60269d5","amount":-25,"currency":"USD","status":"COMPLETE"' .
                ',"descriptions":[{"language":"en-US","translation":"Transfer to Arco MCB Gatewa' .
                'y Commission Account (USD) - $25.00 USD (Conversion rate: 1)"}],"details":{"car' .
                'dExpiryDate":"04/2025","cardHolderName":"Timothy Mueller","cardNumber":"*******' .
                '*****3940","memo":"Memo - Card Transfer 1","note":"Note - Card Transfer 1","cor' .
                'relationToken":"xfer-bf34989d-0b13-47ee-bd51-b96b0ecbe866"},"links":[{"href":"h' .
                'ttps://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905' .
                '172fb4bc/receipts/rcpt-bf34989d-0b13-47ee-bd51-b96b0ecbe866","params":{"rel":"s' .
                'elf"}}]},{"token":"rcpt-022b3730-e62e-4ee3-8af9-714a06dadf3c","type":"PAYMENT",' .
                '"createdOn":"2022-04-29T19:20:22Z","sign":"CREDIT","sourceToken":"acct-3908ab5a' .
                '-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d12e-4647-a887-' .
                'd905172fb4bc","amount":1500,"currency":"USD","status":"COMPLETE","descriptions"' .
                ':[{"language":"en-US","translation":"Payment received from  Arco MCB Gateway"}]' .
                ',"details":{"correlationToken":"pmnt-87c94572-8241-4c46-976e-0f0dfe3211a6"},"li' .
                'nks":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12' .
                'e-4647-a887-d905172fb4bc/receipts/rcpt-022b3730-e62e-4ee3-8af9-714a06dadf3c","p' .
                'arams":{"rel":"self"}}]},{"token":"rcpt-24e6c58c-5819-41fa-8dd4-15f8920a68e9","' .
                'type":"ACCOUNT_TO_ACCOUNT_TRANSFER","createdOn":"2022-04-28T22:08:43Z","sign":"' .
                'DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinationTo' .
                'ken":"user-631b200f-665d-4dbe-bd01-3063c9dec97d","amount":-10,"currency":"USD",' .
                '"status":"COMPLETE","descriptions":[{"language":"en-US","translation":"Transfer' .
                ' to Brannon Mertz (Cruz.Hilpert)"}],"details":{"memo":"User To User - memo","no' .
                'te":"User To User - note","correlationToken":"xfer-aa657951-d6bc-4023-a3a7-3777' .
                '38650b28"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/use' .
                'r-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-24e6c58c-5819-41fa-8dd4-15' .
                'f8920a68e9","params":{"rel":"self"}}]},{"token":"rcpt-20c97ff0-b83c-403a-aad7-2' .
                '5a00bdd80af","type":"PAYMENT_RETRACTION","createdOn":"2022-04-27T22:23:57Z","si' .
                'gn":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinat' .
                'ionToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","amount":-1000.22,"curren' .
                'cy":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation"' .
                ':"Retraction for ARIS07D0RVW6VKY02"}],"details":{"correlationToken":"pmnt-4c19e' .
                '750-c901-484c-acba-12979e8c6b58"},"links":[{"href":"https://api.sandbox.payquic' .
                'ker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-20c' .
                '97ff0-b83c-403a-aad7-25a00bdd80af","params":{"rel":"self"}}]},{"token":"rcpt-dd' .
                'c68526-8b18-42b6-9fac-75a04d580d6f","type":"PAYMENT","createdOn":"2022-04-27T22' .
                ':23:31Z","sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b1478' .
                '60","destinationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":100' .
                '0.22,"currency":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","' .
                'translation":"Payment received from  Arco MCB Gateway"}],"details":{"correlatio' .
                'nToken":"pmnt-51297345-c803-44ab-9e2e-70713142dd58"},"links":[{"href":"https://' .
                'api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4b' .
                'c/receipts/rcpt-ddc68526-8b18-42b6-9fac-75a04d580d6f","params":{"rel":"self"}}]' .
                '},{"token":"rcpt-be174879-7829-4275-a0e6-164a7d5b5251","type":"PAYMENT_RETRACTI' .
                'ON","createdOn":"2022-04-27T22:19:17Z","sign":"DEBIT","sourceToken":"user-2bbfc' .
                '967-d12e-4647-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b' .
                '80-a63a7b147860","amount":-1500,"currency":"USD","status":"COMPLETE","descripti' .
                'ons":[{"language":"en-US","translation":"Retraction for ARIS07D0RVW6VKXZS"}],"d' .
                'etails":{"correlationToken":"pmnt-61db2938-fa74-48e9-a3f1-b83d21f492d8"},"links' .
                '":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4' .
                '647-a887-d905172fb4bc/receipts/rcpt-be174879-7829-4275-a0e6-164a7d5b5251","para' .
                'ms":{"rel":"self"}}]},{"token":"rcpt-3baa92d6-a443-4b45-a245-b34ad51c85f6","typ' .
                'e":"PAYMENT","createdOn":"2022-04-27T22:18:56Z","sign":"CREDIT","sourceToken":"' .
                'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d1' .
                '2e-4647-a887-d905172fb4bc","amount":1500,"currency":"USD","status":"COMPLETE","' .
                'descriptions":[{"language":"en-US","translation":"Payment received from  Arco M' .
                'CB Gateway"}],"details":{"correlationToken":"pmnt-c99be127-65b2-474b-bf3a-80f4f' .
                '6133f6a"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user' .
                '-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-3baa92d6-a443-4b45-a245-b34' .
                'ad51c85f6","params":{"rel":"self"}}]},{"token":"rcpt-d91a1d65-adab-43b1-8f33-9f' .
                '5a9fac8da7","type":"PAYMENT_RETRACTION","createdOn":"2022-04-26T17:45:22Z","sig' .
                'n":"DEBIT","sourceToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","destinati' .
                'onToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860","amount":-78.98,"currency"' .
                ':"USD","status":"COMPLETE","descriptions":[{"language":"en-US","translation":"R' .
                'etraction for ARIS07CW0646GSO3H"}],"details":{"correlationToken":"pmnt-f293a55f' .
                '-fae4-45cd-b63c-3023e02ef699"},"links":[{"href":"https://api.sandbox.payquicker' .
                '.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-d91a1d' .
                '65-adab-43b1-8f33-9f5a9fac8da7","params":{"rel":"self"}}]},{"token":"rcpt-5c1ec' .
                '450-09c5-4f97-828f-94f843f755f1","type":"PAYMENT","createdOn":"2022-04-26T17:11' .
                ':29Z","sign":"CREDIT","sourceToken":"acct-3908ab5a-6ce1-474d-8b80-a63a7b147860"' .
                ',"destinationToken":"user-2bbfc967-d12e-4647-a887-d905172fb4bc","amount":78.98,' .
                '"currency":"USD","status":"COMPLETE","descriptions":[{"language":"en-US","trans' .
                'lation":"Payment received from  Arco MCB Gateway"}],"details":{"correlationToke' .
                'n":"pmnt-9d60431b-8bcd-41a7-a002-1669426dac21"},"links":[{"href":"https://api.s' .
                'andbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a887-d905172fb4bc/rec' .
                'eipts/rcpt-5c1ec450-09c5-4f97-828f-94f843f755f1","params":{"rel":"self"}}]},{"t' .
                'oken":"rcpt-74abe865-7719-438d-8fa2-b27cdb03ec06","type":"PAYMENT_RETRACTION","' .
                'createdOn":"2022-04-26T15:47:39Z","sign":"DEBIT","sourceToken":"user-2bbfc967-d' .
                '12e-4647-a887-d905172fb4bc","destinationToken":"acct-3908ab5a-6ce1-474d-8b80-a6' .
                '3a7b147860","amount":-1500,"currency":"USD","status":"COMPLETE","descriptions":' .
                '[{"language":"en-US","translation":"Retraction for ARIS07CVR5THWRZML"}],"detail' .
                's":{"correlationToken":"pmnt-ab72dd70-37f1-4024-9b44-525ae6e634a4"},"links":[{"' .
                'href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbfc967-d12e-4647-a' .
                '887-d905172fb4bc/receipts/rcpt-74abe865-7719-438d-8fa2-b27cdb03ec06","params":{' .
                '"rel":"self"}}]},{"token":"rcpt-e3abab12-bcaa-41fd-91d3-3819f27e8eba","type":"P' .
                'AYMENT","createdOn":"2022-04-26T15:47:31Z","sign":"CREDIT","sourceToken":"acct-' .
                '3908ab5a-6ce1-474d-8b80-a63a7b147860","destinationToken":"user-2bbfc967-d12e-46' .
                '47-a887-d905172fb4bc","amount":1500,"currency":"USD","status":"COMPLETE","descr' .
                'iptions":[{"language":"en-US","translation":"Payment received from  Arco MCB Ga' .
                'teway"}],"details":{"correlationToken":"pmnt-9aca4986-fab9-4d39-8370-a7724b71ac' .
                'e1"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbf' .
                'c967-d12e-4647-a887-d905172fb4bc/receipts/rcpt-e3abab12-bcaa-41fd-91d3-3819f27e' .
                '8eba","params":{"rel":"self"}}]}],"meta":{"pageNo":"1","pageSize":"20","pageCou' .
                'nt":"2","recordCount":"22","timezone":"GMT","requestRef":"request-reference-val' .
                'ue"},"links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-2bbf' .
                'c967-d12e-4647-a887-d905172fb4bc/receipts?pageSize=20&language=en-US","params":' .
                '{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testRetrieveUserReceipt()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $receiptToken = 'rcpt-86674764-9b7a-4b31-adce-bd3299172f1f';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveUserReceipt($userToken, $receiptToken);
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
                '{"token":"rcpt-b58721a3-33e8-4a62-b51d-a997b46fbce0","type":"PAYMENT","created' .
                'On":"2022-05-04T13:19:38Z","sign":"DEBIT","sourceToken":"acct-4433f040-4ad5-41e' .
                '5-a6e3-c9611a7be95e","destinationToken":"user-cf6244d7-f6b8-4625-906a-9f21fc8c7' .
                '74b","amount":-1500,"currency":"USD","status":"COMPLETE","descriptions":[{"lang' .
                'uage":"en-US","translation":"Payment sent to Boutique Partner Cale Cruickshank ' .
                '(Izaiah_McCullough)"}],"details":{"memo":"Payment 1 Memo","note":"Payment 1 Not' .
                'e","correlationToken":"pmnt-1d4ae3b0-09c9-402a-8d38-3de1bfdbd1e3"},"links":[{"h' .
                'ref":"https://api.sandbox.payquicker.io/api/v2/accounts/acct-4433f040-4ad5-41e5' .
                '-a6e3-c9611a7be95e/receipts/rcpt-b58721a3-33e8-4a62-b51d-a997b46fbce0","params"' .
                ':{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference-valu' .
                'e"}}'
            )))
            ->assert();
    }
}
