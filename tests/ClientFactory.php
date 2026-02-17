<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Tests;

use Core\Types\CallbackCatcher;
use PayQuickerSDKLib\Authentication\ClientsideCredentialsBuilder;
use PayQuickerSDKLib\Authentication\ServerCredentialsBuilder;
use PayQuickerSDKLib\PayQuickerSDKClient;
use PayQuickerSDKLib\PayQuickerSDKClientBuilder;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): PayQuickerSDKClient
    {
        $clientBuilder = PayQuickerSDKClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(PayQuickerSDKClientBuilder $builder): PayQuickerSDKClientBuilder
    {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        PayQuickerSDKClientBuilder $builder
    ): PayQuickerSDKClientBuilder {
        $timeout = getenv('PAY_QUICKER_SDK_TIMEOUT');
        $numberOfRetries = getenv('PAY_QUICKER_SDK_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('PAY_QUICKER_SDK_MAXIMUM_RETRY_WAIT_TIME');
        $xMyPayQuickerVersion = getenv('PAY_QUICKER_SDK_X_MY_PAY_QUICKER_VERSION');
        $environment = getenv('PAY_QUICKER_SDK_ENVIRONMENT');
        $sandboxInstance = getenv('PAY_QUICKER_SDK_SANDBOX_INSTANCE');
        $uatInstance = getenv('PAY_QUICKER_SDK_UAT_INSTANCE');
        $oAuthClientId = getenv('PAY_QUICKER_SDK_O_AUTH_CLIENT_ID');
        $oAuthClientSecret = getenv('PAY_QUICKER_SDK_O_AUTH_CLIENT_SECRET');
        $accessToken = getenv('PAY_QUICKER_SDK_ACCESS_TOKEN');

        if (!empty($timeout) && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if (!empty($numberOfRetries) && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if (!empty($maximumRetryWaitTime) && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if (!empty($xMyPayQuickerVersion)) {
            $builder->xMyPayQuickerVersion($xMyPayQuickerVersion);
        }

        if (!empty($environment)) {
            $builder->environment($environment);
        }

        if (!empty($sandboxInstance)) {
            $builder->sandboxInstance($sandboxInstance);
        }

        if (!empty($uatInstance)) {
            $builder->uatInstance($uatInstance);
        }

        if (!empty($oAuthClientId) && !empty($oAuthClientSecret)) {
            $builder->serverCredentials(ServerCredentialsBuilder::init($oAuthClientId, $oAuthClientSecret));
        }

        if (!empty($accessToken)) {
            $builder->clientsideCredentials(ClientsideCredentialsBuilder::init($accessToken));
        }

        return $builder;
    }
}
