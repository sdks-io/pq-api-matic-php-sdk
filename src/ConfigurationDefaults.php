<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib;

use Psr\Log\LogLevel;

/**
 * Default values for the configuration parameters of the client.
 */
class ConfigurationDefaults
{
    public const TIMEOUT = 0;

    public const ENABLE_RETRIES = false;

    public const NUMBER_OF_RETRIES = 0;

    public const RETRY_INTERVAL = 1;

    public const BACK_OFF_FACTOR = 2;

    public const MAXIMUM_RETRY_WAIT_TIME = 0;

    public const RETRY_ON_TIMEOUT = true;

    public const HTTP_STATUS_CODES_TO_RETRY = [408, 413, 429, 500, 502, 503, 504, 521, 522, 524];

    public const HTTP_METHODS_TO_RETRY = ['GET', 'PUT'];

    public const X_MY_PAY_QUICKER_VERSION = '2026.02.01';

    public const ENVIRONMENT = Environment::SANDBOX;

    public const SANDBOX_INSTANCE = Models\SandboxInstance::SANDBOX;

    public const UAT_INSTANCE = Models\UatInstance::UAT1;

    public const O_AUTH_CLIENT_ID = '';

    public const O_AUTH_CLIENT_SECRET = '';

    public const O_AUTH_TOKEN = null;

    public const O_AUTH_SCOPES = null;

    public const ACCESS_TOKEN = '';

    public const PROXY_CONFIGURATION = [
        'port' => 0,
        'tunnel' => false,
        'address' => '',
        'auth' => ['user' => '', 'pass' => '', 'method' => CURLAUTH_BASIC]
    ];

    public const SERVER_CLOCK_SKEW = 0;

    public const LOGGER_ALLOWED_LEVELS = [
        LogLevel::EMERGENCY,
        LogLevel::ALERT,
        LogLevel::CRITICAL,
        LogLevel::ERROR,
        LogLevel::WARNING,
        LogLevel::NOTICE,
        LogLevel::INFO,
        LogLevel::DEBUG
    ];

    public const LOGGER_LEVEL = LogLevel::INFO;

    public const LOGGER_MASK_SENSITIVE_HEADERS = true;

    public const LOGGER_INCLUDE_QUERY_IN_PATH = false;

    public const LOGGER_LOG_BODY = false;

    public const LOGGER_LOG_HEADERS = false;

    public const LOGGER_EXCLUDE_HEADERS = [];

    public const LOGGER_INCLUDE_HEADERS = [];

    public const LOGGER_UNMASK_HEADERS = [];

    /**
     * @var array Associative list of all default configurations
     */
    public const _ALL = [
        'timeout' => self::TIMEOUT,
        'enableRetries' => self::ENABLE_RETRIES,
        'numberOfRetries' => self::NUMBER_OF_RETRIES,
        'retryInterval' => self::RETRY_INTERVAL,
        'backOffFactor' => self::BACK_OFF_FACTOR,
        'maximumRetryWaitTime' => self::MAXIMUM_RETRY_WAIT_TIME,
        'retryOnTimeout' => self::RETRY_ON_TIMEOUT,
        'httpStatusCodesToRetry' => self::HTTP_STATUS_CODES_TO_RETRY,
        'httpMethodsToRetry' => self::HTTP_METHODS_TO_RETRY,
        'xMyPayQuickerVersion' => self::X_MY_PAY_QUICKER_VERSION,
        'environment' => self::ENVIRONMENT,
        'sandboxInstance' => self::SANDBOX_INSTANCE,
        'uatInstance' => self::UAT_INSTANCE,
        'oAuthClientId' => self::O_AUTH_CLIENT_ID,
        'oAuthClientSecret' => self::O_AUTH_CLIENT_SECRET,
        'oAuthToken' => self::O_AUTH_TOKEN,
        'oAuthScopes' => self::O_AUTH_SCOPES,
        'accessToken' => self::ACCESS_TOKEN,
        'server-ClockSkew' => self::SERVER_CLOCK_SKEW,
        'server-TokenProvider' => null,
        'server-OnTokenUpdate' => null,
        'loggingConfiguration' => null,
        'proxyConfiguration' => self::PROXY_CONFIGURATION
    ];
}
