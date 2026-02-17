<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib;

use CoreInterfaces\Http\HttpConfigurations;
use PayQuickerSDKLib\Authentication\ClientsideCredentials;
use PayQuickerSDKLib\Authentication\ClientsideCredentialsBuilder;
use PayQuickerSDKLib\Authentication\ServerCredentials;
use PayQuickerSDKLib\Authentication\ServerCredentialsBuilder;
use PayQuickerSDKLib\Logging\LoggingConfigurationBuilder;
use PayQuickerSDKLib\Proxy\ProxyConfigurationBuilder;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get date-based API Version specified in the header *required* on all calls.
     */
    public function getXMyPayQuickerVersion(): string;

    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get sandbox Environments
     */
    public function getSandboxInstance(): string;

    /**
     * Get uAT Environments
     */
    public function getUatInstance(): string;

    /**
     * Get the credentials to use with Server
     */
    public function getServerCredentials(): ServerCredentials;

    /**
     * Get the credentials builder instance to update credentials for Server
     */
    public function getServerCredentialsBuilder(): ?ServerCredentialsBuilder;

    /**
     * Get the credentials to use with Clientside
     */
    public function getClientsideCredentials(): ClientsideCredentials;

    /**
     * Get the credentials builder instance to update credentials for Clientside
     */
    public function getClientsideCredentialsBuilder(): ?ClientsideCredentialsBuilder;

    /**
     * Represents the logging configurations for API calls.
     */
    public function getLoggingConfigurationBuilder(): ?LoggingConfigurationBuilder;

    /**
     * Represents the proxy configurations for API calls.
     */
    public function getProxyConfigurationBuilder(): ProxyConfigurationBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::API): string;
}
