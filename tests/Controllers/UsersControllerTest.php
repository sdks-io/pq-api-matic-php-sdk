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
use PayQuickerSDKLib\Controllers\UsersController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class UsersControllerTest extends BaseTestController
{
    /**
     * @var UsersController UsersController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getUsersController();
    }

    public function testListUsers()
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
            $result = self::$controller->listUsers($page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"user-19c60cc6-71c3-4db0-9092-4d422410c87e","addressLine1' .
                '":"400 Linden Oaks","addressLine2":"Rochester, NY 14625-2818","city":"Rochester' .
                '","country":"US","countryOfBirth":"US","countryOfNationality":"US","createdOn":' .
                '"2021-06-07T21:23:41Z","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTEMAI' .
                'L+Caden_Aufderhar@GMAIL.COM","firstName":"Susie","gender":"MALE","language":"en' .
                '-US","lastName":"Fadel","mobileNumber":"+1 585-987-6543","mobileNumberCountry":' .
                '"US","phoneNumber":"+1 585-987-6543","phoneNumberCountry":"US","postalCode":"14' .
                '625","premiseNumber":"400","programUserId":"Haley_Ryan","region":"NY","status":' .
                '"ACTIVE","userType":"INDIVIDUAL","links":[{"href":"https://api.sandbox.payquick' .
                'er.io/api/v2/users/user-19c60cc6-71c3-4db0-9092-4d422410c87e","params":{"rel":"' .
                'self"}}]},{"token":"user-2d926d31-a609-40e1-b28a-a32e0aeb6a79","addressLine1":"' .
                '400 Linden Oaks","addressLine2":"Rochester, NY 14625-2818","city":"Rochester","' .
                'country":"US","countryOfBirth":"US","countryOfNationality":"US","createdOn":"20' .
                '21-06-08T16:04:54Z","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTEMAIL+M' .
                'ilton_Cronin9@GMAIL.COM","firstName":"Alycia","gender":"MALE","language":"en-US' .
                '","lastName":"McLaughlin","mobileNumber":"+1 585-987-6543","mobileNumberCountry' .
                '":"US","phoneNumber":"+1 585-987-6543","phoneNumberCountry":"US","postalCode":"' .
                '14625","premiseNumber":"400","programUserId":"Elliot.Sawayn","region":"NY","sta' .
                'tus":"ACTIVE","userType":"INDIVIDUAL","links":[{"href":"https://api.sandbox.pay' .
                'quicker.io/api/v2/users/user-2d926d31-a609-40e1-b28a-a32e0aeb6a79","params":{"r' .
                'el":"self"}}]},{"token":"user-80df50a2-3cc8-462d-87c8-cf3e266994c8","addressLin' .
                'e1":"400 Linden Oaks","addressLine2":"Rochester, NY 14625-2818","city":"Rochest' .
                'er","country":"US","countryOfBirth":"US","countryOfNationality":"US","createdOn' .
                '":"2021-06-08T16:13:53Z","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTEM' .
                'AIL+Meta50@GMAIL.COM","firstName":"Trisha","gender":"MALE","governmentId":"0000' .
                '00000","language":"en-US","lastName":"Leffler","mobileNumber":"+1 585-987-6543"' .
                ',"mobileNumberCountry":"US","phoneNumber":"+1 585-987-6543","phoneNumberCountry' .
                '":"US","postalCode":"14625","premiseNumber":"400","programUserId":"Nona49","reg' .
                'ion":"NY","status":"ACTIVE","userType":"INDIVIDUAL","links":[{"href":"https://a' .
                'pi.sandbox.payquicker.io/api/v2/users/user-80df50a2-3cc8-462d-87c8-cf3e266994c8' .
                '","params":{"rel":"self"}}]},{"token":"user-b26db8d1-ebb1-4367-aad4-3ffb6f0f17c' .
                'f","addressLine1":"400 Linden Oaks","addressLine2":"Rochester, NY 14625-2818","' .
                'city":"Rochester","country":"US","countryOfBirth":"US","countryOfNationality":"' .
                'US","createdOn":"2021-06-08T16:21:54Z","dateOfBirth":"1991-04-13T00:00:00Z","em' .
                'ail":"PQTESTEMAIL+Frankie_Stoltenberg@GMAIL.COM","firstName":"Kevon","gender":"' .
                'MALE","governmentId":"000000000","language":"en-US","lastName":"Waelchi","mobil' .
                'eNumber":"+1 585-987-6543","mobileNumberCountry":"US","phoneNumber":"+1 585-987' .
                '-6543","phoneNumberCountry":"US","postalCode":"14625","premiseNumber":"400","pr' .
                'ogramUserId":"Lydia_Jacobi13","region":"NY","status":"ACTIVE","userType":"INDIV' .
                'IDUAL","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-b2' .
                '6db8d1-ebb1-4367-aad4-3ffb6f0f17cf","params":{"rel":"self"}}]},{"token":"user-6' .
                '1b12c1f-7cff-42e3-9c56-09ba2b08d2ed","addressLine1":"4179 BUFFALO ROAD","busine' .
                'ssAddressLine1":"400 Linden Oaks","businessAddressType":"BUSINESS","businessCit' .
                'y":"Rochester","businessCountry":"US","businessName":"Api V2 Company LLC","busi' .
                'nessOperatingName":"Api V2 Company LLC","businessPostalCode":"14625","businessR' .
                'egion":"NY","businessRegistrationCountry":"US","businessRegistrationRegion":"NY' .
                '","city":"NORTH CHILI","country":"US","countryOfBirth":"US","countryOfNationali' .
                'ty":"US","createdOn":"2021-06-08T16:36:05Z","dateOfBirth":"1991-04-13T00:00:00Z' .
                '","email":"PQTESTEMAIL+Helena.Skiles24@GMAIL.COM","firstName":"Westley","gender' .
                '":"MALE","governmentId":"000000000","language":"en-US","lastName":"Westley","mo' .
                'bileNumber":"+1 585-987-6543","mobileNumberCountry":"US","phoneNumber":"+1 585-' .
                '987-6543","phoneNumberCountry":"US","postalCode":"14514","premiseNumber":"400",' .
                '"programUserId":"Nicholas94","region":"NY","status":"ACTIVE","userType":"BUSINE' .
                'SS","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-61b12' .
                'c1f-7cff-42e3-9c56-09ba2b08d2ed","params":{"rel":"self"}}]}],"meta":{"pageNo":"' .
                '1","pageSize":"5","pageCount":"124","recordCount":"618","timezone":"GMT","reque' .
                'stRef":"request-reference-value"},"links":[{"href":"https://api.sandbox.payquic' .
                'ker.io/api/v2/users?pageSize=5&page=1","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testListUsers1()
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
            $result = self::$controller->listUsers($page, $pageSize, $filter, $sort, $language);
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
                '{"payload":[{"token":"user-19c60cc6-71c3-4db0-9092-4d422410c87e","addressLine1' .
                '":"400 Linden Oaks","addressLine2":"Rochester, NY 14625-2818","city":"Rochester' .
                '","country":"US","countryOfBirth":"US","countryOfNationality":"US","createdOn":' .
                '"2021-06-07T21:23:41Z","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTEMAI' .
                'L+Caden_Aufderhar@GMAIL.COM","firstName":"Susie","gender":"MALE","language":"en' .
                '-US","lastName":"Fadel","mobileNumber":"+1 585-987-6543","mobileNumberCountry":' .
                '"US","phoneNumber":"+1 585-987-6543","phoneNumberCountry":"US","postalCode":"14' .
                '625","premiseNumber":"400","programUserId":"Haley_Ryan","region":"NY","status":' .
                '"ACTIVE","userType":"INDIVIDUAL","links":[{"href":"https://api.sandbox.payquick' .
                'er.io/api/v2/users/user-19c60cc6-71c3-4db0-9092-4d422410c87e","params":{"rel":"' .
                'self"}}]},{"token":"user-2d926d31-a609-40e1-b28a-a32e0aeb6a79","addressLine1":"' .
                '400 Linden Oaks","addressLine2":"Rochester, NY 14625-2818","city":"Rochester","' .
                'country":"US","countryOfBirth":"US","countryOfNationality":"US","createdOn":"20' .
                '21-06-08T16:04:54Z","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTEMAIL+M' .
                'ilton_Cronin9@GMAIL.COM","firstName":"Alycia","gender":"MALE","language":"en-US' .
                '","lastName":"McLaughlin","mobileNumber":"+1 585-987-6543","mobileNumberCountry' .
                '":"US","phoneNumber":"+1 585-987-6543","phoneNumberCountry":"US","postalCode":"' .
                '14625","premiseNumber":"400","programUserId":"Elliot.Sawayn","region":"NY","sta' .
                'tus":"ACTIVE","userType":"INDIVIDUAL","links":[{"href":"https://api.sandbox.pay' .
                'quicker.io/api/v2/users/user-2d926d31-a609-40e1-b28a-a32e0aeb6a79","params":{"r' .
                'el":"self"}}]},{"token":"user-80df50a2-3cc8-462d-87c8-cf3e266994c8","addressLin' .
                'e1":"400 Linden Oaks","addressLine2":"Rochester, NY 14625-2818","city":"Rochest' .
                'er","country":"US","countryOfBirth":"US","countryOfNationality":"US","createdOn' .
                '":"2021-06-08T16:13:53Z","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTEM' .
                'AIL+Meta50@GMAIL.COM","firstName":"Trisha","gender":"MALE","governmentId":"0000' .
                '00000","language":"en-US","lastName":"Leffler","mobileNumber":"+1 585-987-6543"' .
                ',"mobileNumberCountry":"US","phoneNumber":"+1 585-987-6543","phoneNumberCountry' .
                '":"US","postalCode":"14625","premiseNumber":"400","programUserId":"Nona49","reg' .
                'ion":"NY","status":"ACTIVE","userType":"INDIVIDUAL","links":[{"href":"https://a' .
                'pi.sandbox.payquicker.io/api/v2/users/user-80df50a2-3cc8-462d-87c8-cf3e266994c8' .
                '","params":{"rel":"self"}}]},{"token":"user-b26db8d1-ebb1-4367-aad4-3ffb6f0f17c' .
                'f","addressLine1":"400 Linden Oaks","addressLine2":"Rochester, NY 14625-2818","' .
                'city":"Rochester","country":"US","countryOfBirth":"US","countryOfNationality":"' .
                'US","createdOn":"2021-06-08T16:21:54Z","dateOfBirth":"1991-04-13T00:00:00Z","em' .
                'ail":"PQTESTEMAIL+Frankie_Stoltenberg@GMAIL.COM","firstName":"Kevon","gender":"' .
                'MALE","governmentId":"000000000","language":"en-US","lastName":"Waelchi","mobil' .
                'eNumber":"+1 585-987-6543","mobileNumberCountry":"US","phoneNumber":"+1 585-987' .
                '-6543","phoneNumberCountry":"US","postalCode":"14625","premiseNumber":"400","pr' .
                'ogramUserId":"Lydia_Jacobi13","region":"NY","status":"ACTIVE","userType":"INDIV' .
                'IDUAL","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-b2' .
                '6db8d1-ebb1-4367-aad4-3ffb6f0f17cf","params":{"rel":"self"}}]},{"token":"user-6' .
                '1b12c1f-7cff-42e3-9c56-09ba2b08d2ed","addressLine1":"4179 BUFFALO ROAD","busine' .
                'ssAddressLine1":"400 Linden Oaks","businessAddressType":"BUSINESS","businessCit' .
                'y":"Rochester","businessCountry":"US","businessName":"Api V2 Company LLC","busi' .
                'nessOperatingName":"Api V2 Company LLC","businessPostalCode":"14625","businessR' .
                'egion":"NY","businessRegistrationCountry":"US","businessRegistrationRegion":"NY' .
                '","city":"NORTH CHILI","country":"US","countryOfBirth":"US","countryOfNationali' .
                'ty":"US","createdOn":"2021-06-08T16:36:05Z","dateOfBirth":"1991-04-13T00:00:00Z' .
                '","email":"PQTESTEMAIL+Helena.Skiles24@GMAIL.COM","firstName":"Westley","gender' .
                '":"MALE","governmentId":"000000000","language":"en-US","lastName":"Westley","mo' .
                'bileNumber":"+1 585-987-6543","mobileNumberCountry":"US","phoneNumber":"+1 585-' .
                '987-6543","phoneNumberCountry":"US","postalCode":"14514","premiseNumber":"400",' .
                '"programUserId":"Nicholas94","region":"NY","status":"ACTIVE","userType":"BUSINE' .
                'SS","links":[{"href":"https://api.sandbox.payquicker.io/api/v2/users/user-61b12' .
                'c1f-7cff-42e3-9c56-09ba2b08d2ed","params":{"rel":"self"}}]}],"meta":{"pageNo":"' .
                '1","pageSize":"5","pageCount":"124","recordCount":"618","timezone":"GMT","reque' .
                'stRef":"request-reference-value"},"links":[{"href":"https://api.sandbox.payquic' .
                'ker.io/api/v2/users?pageSize=5&page=1","params":{"rel":"self"}}]}'
            )))
            ->assert();
    }

    public function testCreateUser()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"CURRENCY":"USD","PROGRAMUSERID":"Jarrell_Sauer","EMAIL":"PQTESTEMAIL+Viviane.Leg' .
            'ros20@GMAIL.COM","FIRSTNAME":"Amari","LASTNAME":"Rippin","DATEOFBIRTH":"1991-04-13"' .
            ',"BUSINESSCONTACTROLE":"SW ENGINEER","GOVERNMENTIDTYPE":"SSN","GOVERNMENTID":"00000' .
            '0000","OCCUPATIONTITLE":"TESTER","OCCUPATIONTYPE":"GOVERNMENT","TAXRESIDENTSTATUS":' .
            '"PREFER_NOT_TO_ANSWER","PHONENUMBER":"+15859876543","MOBILENUMBER":"+15859876543","' .
            'PHONENUMBERCOUNTRY":"US","MOBILENUMBERCOUNTRY":"US","ADDRESSLINE1":"400 Linden Oaks' .
            '","ADDRESSLINE2":"","MAILINGADDRESSLINE1":"123 Emory Lane","MAILINGCOUNTRY":"US","M' .
            'AILINGCITY":"Rochester","MAILINGREGION":"NY","MAILINGPOSTALCODE":14625,"BUSINESSADD' .
            'RESSLINE1":"99 Office Park","BUSINESSADDRESSLINE2":"Suite 293","BUSINESSCOUNTRY":"U' .
            'S","BUSINESSCITY":"Modesto","BUSINESSREGION":"CA","BUSINESSPOSTALCODE":99785,"CITY"' .
            ':"Rochester","REGION":"NY","COUNTRY":"US","POSTALCODE":"14625","PREMISENUMBER":"","' .
            'ADDRESSTYPE":"RESIDENTIAL","EMPLOYERID":"1","GENDER":"MALE","USERTYPE":"INDIVIDUAL"' .
            ',"LANGUAGE":"EN-US","COUNTRYOFBIRTH":"US","COUNTRYOFNATIONALITY":"US","PROGRAMTOKEN' .
            '":"prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb","PrimaryUserToken":"user-35372005-a9a' .
            '3-41ae-ba46-a39cf944726d"}',
            Models\CreateOrUpdateUser::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createUser($body);
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
                '{"token":"user-91acd009-36d5-40d9-b8b1-39a3704b577e","addressLine1":"4179 BUFF' .
                'ALO ROAD","businessAddressLine1":"99 Office Park","businessAddressLine2":"Suite' .
                ' 293","businessAddressType":"BUSINESS","businessCity":"Modesto","businessContac' .
                'tRole":"OTHER","businessCountry":"US","businessName":"Api V2 Company LLC","busi' .
                'nessPostalCode":"99700","businessRegion":"CA","city":"NORTH CHILI","country":"U' .
                'S","countryOfBirth":"US","countryOfNationality":"US","createdOn":"2022-04-08T19' .
                ':44:16Z","currency":"USD","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTE' .
                'MAIL+Emanuel_Carroll@GMAIL.COM","employerId":"1","firstName":"Timothy","gender"' .
                ':"MALE","governmentId":"111111111","governmentIdType":"SSN","language":"en-US",' .
                '"lastName":"Mueller","mailingAddressLine1":"128 Maple Lane","mailingCity":"Roch' .
                'ester","mailingCountry":"US","mailingPostalCode":"14625","mailingRegion":"NY","' .
                'mobileNumber":"+15859876543","mobileNumberCountry":"US","occupationTitle":"TEST' .
                'ER","occupationType":"GOVERNMENT","phoneNumber":"+15859876543","phoneNumberCoun' .
                'try":"US","postalCode":"14514","programUserId":"Kaylee.Howe8","region":"NY","ta' .
                'xResidentStatus":"YES","userType":"INDIVIDUAL","links":[{"href":"https://api.sa' .
                'ndbox.payquicker.io/api/v2/users/user-91acd009-36d5-40d9-b8b1-39a3704b577e","pa' .
                'rams":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference' .
                '-value"}}'
            )))
            ->assert();
    }

    public function testCreateUser1()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"CURRENCY":"USD","PROGRAMUSERID":"Jarrell_Sauer","EMAIL":"PQTESTEMAIL+Viviane.Leg' .
            'ros20@GMAIL.COM","FIRSTNAME":"Amari","LASTNAME":"Rippin","DATEOFBIRTH":"1991-04-13"' .
            ',"BUSINESSCONTACTROLE":"SW ENGINEER","GOVERNMENTIDTYPE":"SSN","GOVERNMENTID":"00000' .
            '0000","OCCUPATIONTITLE":"TESTER","OCCUPATIONTYPE":"GOVERNMENT","TAXRESIDENTSTATUS":' .
            '"PREFER_NOT_TO_ANSWER","PHONENUMBER":"+15859876543","MOBILENUMBER":"+15859876543","' .
            'PHONENUMBERCOUNTRY":"US","MOBILENUMBERCOUNTRY":"US","ADDRESSLINE1":"400 Linden Oaks' .
            '","ADDRESSLINE2":"","MAILINGADDRESSLINE1":"123 Emory Lane","MAILINGCOUNTRY":"US","M' .
            'AILINGCITY":"Rochester","MAILINGREGION":"NY","MAILINGPOSTALCODE":14625,"BUSINESSADD' .
            'RESSLINE1":"99 Office Park","BUSINESSADDRESSLINE2":"Suite 293","BUSINESSCOUNTRY":"U' .
            'S","BUSINESSCITY":"Modesto","BUSINESSREGION":"CA","BUSINESSPOSTALCODE":99785,"CITY"' .
            ':"Rochester","REGION":"NY","COUNTRY":"US","POSTALCODE":"14625","PREMISENUMBER":"","' .
            'ADDRESSTYPE":"RESIDENTIAL","EMPLOYERID":"1","GENDER":"MALE","USERTYPE":"INDIVIDUAL"' .
            ',"LANGUAGE":"EN-US","COUNTRYOFBIRTH":"US","COUNTRYOFNATIONALITY":"US","PROGRAMTOKEN' .
            '":"prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb","PrimaryUserToken":"user-35372005-a9a' .
            '3-41ae-ba46-a39cf944726d"}',
            Models\CreateOrUpdateUser::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createUser($body);
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
                '{"token":"user-91acd009-36d5-40d9-b8b1-39a3704b577e","addressLine1":"4179 BUFF' .
                'ALO ROAD","businessAddressLine1":"99 Office Park","businessAddressLine2":"Suite' .
                ' 293","businessAddressType":"BUSINESS","businessCity":"Modesto","businessContac' .
                'tRole":"OTHER","businessCountry":"US","businessName":"Api V2 Company LLC","busi' .
                'nessPostalCode":"99700","businessRegion":"CA","city":"NORTH CHILI","country":"U' .
                'S","countryOfBirth":"US","countryOfNationality":"US","createdOn":"2022-04-08T19' .
                ':44:16Z","currency":"USD","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTE' .
                'MAIL+Emanuel_Carroll@GMAIL.COM","employerId":"1","firstName":"Timothy","gender"' .
                ':"MALE","governmentId":"111111111","governmentIdType":"SSN","language":"en-US",' .
                '"lastName":"Mueller","mailingAddressLine1":"128 Maple Lane","mailingCity":"Roch' .
                'ester","mailingCountry":"US","mailingPostalCode":"14625","mailingRegion":"NY","' .
                'mobileNumber":"+15859876543","mobileNumberCountry":"US","occupationTitle":"TEST' .
                'ER","occupationType":"GOVERNMENT","phoneNumber":"+15859876543","phoneNumberCoun' .
                'try":"US","postalCode":"14514","programUserId":"Kaylee.Howe8","region":"NY","ta' .
                'xResidentStatus":"YES","userType":"INDIVIDUAL","links":[{"href":"https://api.sa' .
                'ndbox.payquicker.io/api/v2/users/user-91acd009-36d5-40d9-b8b1-39a3704b577e","pa' .
                'rams":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference' .
                '-value"}}'
            )))
            ->assert();
    }

    public function testUpdateUser()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $body = TestParam::object(
            '{"CURRENCY":"USD","PROGRAMUSERID":"Jarrell_Sauer","EMAIL":"PQTESTEMAIL+Viviane.Leg' .
            'ros20@GMAIL.COM","FIRSTNAME":"Amari","LASTNAME":"Rippin","DATEOFBIRTH":"1991-04-13"' .
            ',"BUSINESSCONTACTROLE":"SW ENGINEER","GOVERNMENTIDTYPE":"SSN","GOVERNMENTID":"00000' .
            '0000","OCCUPATIONTITLE":"TESTER","OCCUPATIONTYPE":"GOVERNMENT","TAXRESIDENTSTATUS":' .
            '"PREFER_NOT_TO_ANSWER","PHONENUMBER":"+15859876543","MOBILENUMBER":"+15859876543","' .
            'PHONENUMBERCOUNTRY":"US","MOBILENUMBERCOUNTRY":"US","ADDRESSLINE1":"400 Linden Oaks' .
            '","ADDRESSLINE2":"","MAILINGADDRESSLINE1":"123 Emory Lane","MAILINGCOUNTRY":"US","M' .
            'AILINGCITY":"Rochester","MAILINGREGION":"NY","MAILINGPOSTALCODE":14625,"BUSINESSADD' .
            'RESSLINE1":"99 Office Park","BUSINESSADDRESSLINE2":"Suite 293","BUSINESSCOUNTRY":"U' .
            'S","BUSINESSCITY":"Modesto","BUSINESSREGION":"CA","BUSINESSPOSTALCODE":99785,"CITY"' .
            ':"Rochester","REGION":"NY","COUNTRY":"US","POSTALCODE":"14625","PREMISENUMBER":"","' .
            'ADDRESSTYPE":"RESIDENTIAL","EMPLOYERID":"1","GENDER":"MALE","USERTYPE":"INDIVIDUAL"' .
            ',"LANGUAGE":"EN-US","COUNTRYOFBIRTH":"US","COUNTRYOFNATIONALITY":"US","PROGRAMTOKEN' .
            '":"prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb","PrimaryUserToken":"user-35372005-a9a' .
            '3-41ae-ba46-a39cf944726d"}',
            Models\CreateOrUpdateUser::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updateUser($userToken, $body);
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
                '{"token":"user-91acd009-36d5-40d9-b8b1-39a3704b577e","addressLine1":"4179 BUFF' .
                'ALO ROAD","businessAddressLine1":"99 Office Park","businessAddressLine2":"Suite' .
                ' 293","businessAddressType":"BUSINESS","businessCity":"Modesto","businessContac' .
                'tRole":"OTHER","businessCountry":"US","businessName":"Api V2 Company LLC","busi' .
                'nessPostalCode":"99700","businessRegion":"CA","city":"NORTH CHILI","country":"U' .
                'S","countryOfBirth":"US","countryOfNationality":"US","createdOn":"2022-04-08T19' .
                ':44:16Z","currency":"USD","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTE' .
                'MAIL+Emanuel_Carroll@GMAIL.COM","employerId":"1","firstName":"Timothy","gender"' .
                ':"MALE","governmentId":"111111111","governmentIdType":"SSN","language":"en-US",' .
                '"lastName":"Mueller","mailingAddressLine1":"128 Maple Lane","mailingCity":"Roch' .
                'ester","mailingCountry":"US","mailingPostalCode":"14625","mailingRegion":"NY","' .
                'mobileNumber":"+15859876543","mobileNumberCountry":"US","occupationTitle":"TEST' .
                'ER","occupationType":"GOVERNMENT","phoneNumber":"+15859876543","phoneNumberCoun' .
                'try":"US","postalCode":"14514","programUserId":"Kaylee.Howe8","region":"NY","ta' .
                'xResidentStatus":"YES","userType":"INDIVIDUAL","links":[{"href":"https://api.sa' .
                'ndbox.payquicker.io/api/v2/users/user-91acd009-36d5-40d9-b8b1-39a3704b577e","pa' .
                'rams":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference' .
                '-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveUser()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveUser($userToken);
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
                '{"token":"user-91acd009-36d5-40d9-b8b1-39a3704b577e","addressLine1":"4179 BUFF' .
                'ALO ROAD","businessAddressLine1":"99 Office Park","businessAddressLine2":"Suite' .
                ' 293","businessAddressType":"BUSINESS","businessCity":"Modesto","businessContac' .
                'tRole":"OTHER","businessCountry":"US","businessName":"Api V2 Company LLC","busi' .
                'nessPostalCode":"99700","businessRegion":"CA","city":"NORTH CHILI","country":"U' .
                'S","countryOfBirth":"US","countryOfNationality":"US","createdOn":"2022-04-08T19' .
                ':44:16Z","currency":"USD","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTE' .
                'MAIL+Emanuel_Carroll@GMAIL.COM","employerId":"1","firstName":"Timothy","gender"' .
                ':"MALE","governmentId":"111111111","governmentIdType":"SSN","language":"en-US",' .
                '"lastName":"Mueller","mailingAddressLine1":"128 Maple Lane","mailingCity":"Roch' .
                'ester","mailingCountry":"US","mailingPostalCode":"14625","mailingRegion":"NY","' .
                'mobileNumber":"+15859876543","mobileNumberCountry":"US","occupationTitle":"TEST' .
                'ER","occupationType":"GOVERNMENT","phoneNumber":"+15859876543","phoneNumberCoun' .
                'try":"US","postalCode":"14514","programUserId":"Kaylee.Howe8","region":"NY","ta' .
                'xResidentStatus":"YES","userType":"INDIVIDUAL","links":[{"href":"https://api.sa' .
                'ndbox.payquicker.io/api/v2/users/user-91acd009-36d5-40d9-b8b1-39a3704b577e","pa' .
                'rams":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference' .
                '-value"}}'
            )))
            ->assert();
    }

    public function testRetrieveUser1()
    {
        // Parameters for the API call
        $userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveUser($userToken);
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
                '{"token":"user-91acd009-36d5-40d9-b8b1-39a3704b577e","addressLine1":"4179 BUFF' .
                'ALO ROAD","businessAddressLine1":"99 Office Park","businessAddressLine2":"Suite' .
                ' 293","businessAddressType":"BUSINESS","businessCity":"Modesto","businessContac' .
                'tRole":"OTHER","businessCountry":"US","businessName":"Api V2 Company LLC","busi' .
                'nessPostalCode":"99700","businessRegion":"CA","city":"NORTH CHILI","country":"U' .
                'S","countryOfBirth":"US","countryOfNationality":"US","createdOn":"2022-04-08T19' .
                ':44:16Z","currency":"USD","dateOfBirth":"1991-04-13T00:00:00Z","email":"PQTESTE' .
                'MAIL+Emanuel_Carroll@GMAIL.COM","employerId":"1","firstName":"Timothy","gender"' .
                ':"MALE","governmentId":"111111111","governmentIdType":"SSN","language":"en-US",' .
                '"lastName":"Mueller","mailingAddressLine1":"128 Maple Lane","mailingCity":"Roch' .
                'ester","mailingCountry":"US","mailingPostalCode":"14625","mailingRegion":"NY","' .
                'mobileNumber":"+15859876543","mobileNumberCountry":"US","occupationTitle":"TEST' .
                'ER","occupationType":"GOVERNMENT","phoneNumber":"+15859876543","phoneNumberCoun' .
                'try":"US","postalCode":"14514","programUserId":"Kaylee.Howe8","region":"NY","ta' .
                'xResidentStatus":"YES","userType":"INDIVIDUAL","links":[{"href":"https://api.sa' .
                'ndbox.payquicker.io/api/v2/users/user-91acd009-36d5-40d9-b8b1-39a3704b577e","pa' .
                'rams":{"rel":"self"}}],"meta":{"timezone":"GMT","requestRef":"request-reference' .
                '-value"}}'
            )))
            ->assert();
    }
}
