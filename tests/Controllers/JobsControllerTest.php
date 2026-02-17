<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Tests\Controllers;

use PayQuickerSDKLib\Controllers\JobsController;
use PayQuickerSDKLib\Exceptions;
use PayQuickerSDKLib\Models;

class JobsControllerTest extends BaseTestController
{
    /**
     * @var JobsController JobsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getJobsController();
    }

    public function testListPaymentJobs()
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
            $result = self::$controller->listPaymentJobs($page, $pageSize, $filter, $sort, $language);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testCreatePaymentJob()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createPaymentJob($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testCreatePaymentJob1()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createPaymentJob($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(201)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testRetrievePaymentJob()
    {
        // Parameters for the API call
        $jobToken = 'jobs-2bbfc967-d12e-4647-a887-d905172fb4bc';
        $filter = 'string';
        $language = Models\Languages::ENUS;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrievePaymentJob($jobToken, $filter, $language);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }

    public function testCancelPaymentJob()
    {
        // Parameters for the API call
        $jobToken = 'jobs-2bbfc967-d12e-4647-a887-d905172fb4bc';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->cancelPaymentJob($jobToken);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(201)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }
}
