<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib;

use Core\ClientBuilder;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\TemplateParam;
use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Authentication\ClientsideCredentials;
use PayQuickerSDKLib\Authentication\ClientsideCredentialsBuilder;
use PayQuickerSDKLib\Authentication\ClientsideManager;
use PayQuickerSDKLib\Authentication\ServerCredentials;
use PayQuickerSDKLib\Authentication\ServerCredentialsBuilder;
use PayQuickerSDKLib\Authentication\ServerManager;
use PayQuickerSDKLib\Controllers\AgreementsController;
use PayQuickerSDKLib\Controllers\BalancesController;
use PayQuickerSDKLib\Controllers\BankAccountsController;
use PayQuickerSDKLib\Controllers\ClientSideController;
use PayQuickerSDKLib\Controllers\ComplianceController;
use PayQuickerSDKLib\Controllers\DocumentsController;
use PayQuickerSDKLib\Controllers\ElectronicWalletsController;
use PayQuickerSDKLib\Controllers\EventsController;
use PayQuickerSDKLib\Controllers\InvitationsController;
use PayQuickerSDKLib\Controllers\JobsController;
use PayQuickerSDKLib\Controllers\OAuthAuthorizationController;
use PayQuickerSDKLib\Controllers\PaymentsController;
use PayQuickerSDKLib\Controllers\PrepaidCardsController;
use PayQuickerSDKLib\Controllers\ProgramController;
use PayQuickerSDKLib\Controllers\ReceiptsController;
use PayQuickerSDKLib\Controllers\SpendbackController;
use PayQuickerSDKLib\Controllers\SpendbackRefundsController;
use PayQuickerSDKLib\Controllers\StatementsController;
use PayQuickerSDKLib\Controllers\TransfersController;
use PayQuickerSDKLib\Controllers\UsersController;
use PayQuickerSDKLib\Controllers\WebhooksController;
use PayQuickerSDKLib\Logging\LoggingConfigurationBuilder;
use PayQuickerSDKLib\Logging\RequestLoggingConfigurationBuilder;
use PayQuickerSDKLib\Logging\ResponseLoggingConfigurationBuilder;
use PayQuickerSDKLib\Proxy\ProxyConfigurationBuilder;
use PayQuickerSDKLib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class PayQuickerSDKClient implements ConfigurationInterface
{
    private $agreements;

    private $balances;

    private $bankAccounts;

    private $clientSide;

    private $compliance;

    private $documents;

    private $electronicWallets;

    private $events;

    private $payments;

    private $prepaidCards;

    private $program;

    private $receipts;

    private $spendback;

    private $spendbackRefunds;

    private $statements;

    private $transfers;

    private $users;

    private $webhooks;

    private $jobs;

    private $invitations;

    private $oAuthAuthorization;

    private $serverManager;

    private $clientsideManager;

    private $loggingConfigurationBuilder;

    private $proxyConfiguration;

    private $config;

    private $client;

    /**
     * @see PayQuickerSDKClientBuilder::init()
     * @see PayQuickerSDKClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->serverManager = new ServerManager($this->config);
        $this->clientsideManager = new ClientsideManager($this->config);
        $this->validateConfig();
        $loggingConfiguration = null;
        if ($this->config['loggingConfiguration'] instanceof LoggingConfigurationBuilder) {
            $this->loggingConfigurationBuilder = $this->config['loggingConfiguration'];
            $loggingConfiguration = $this->loggingConfigurationBuilder->build();
        }
        $this->proxyConfiguration = $this->config['proxyConfiguration'] ?? ConfigurationDefaults::PROXY_CONFIGURATION;
        $this->client = ClientBuilder::init(
            new HttpClient(Configuration::init($this)->proxyConfiguration($this->proxyConfiguration))
        )
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('PayQuicker SDK 2026.02.01')
            ->globalConfig($this->getGlobalConfiguration())
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::API)
            ->authManagers(['server' => $this->serverManager, 'clientside' => $this->clientsideManager])
            ->loggingConfiguration($loggingConfiguration)
            ->build();
        $this->serverManager->setClient($this->client);
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return PayQuickerSDKClientBuilder PayQuickerSDKClientBuilder instance
     */
    public function toBuilder(): PayQuickerSDKClientBuilder
    {
        $builder = PayQuickerSDKClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->xMyPayQuickerVersion($this->getXMyPayQuickerVersion())
            ->environment($this->getEnvironment())
            ->sandboxInstance($this->getSandboxInstance())
            ->uatInstance($this->getUatInstance())
            ->httpCallback($this->config['httpCallback'] ?? null)
            ->proxyConfiguration($this->getProxyConfigurationBuilder());

        $server = $this->getServerCredentialsBuilder();
        if ($server != null) {
            $builder->serverCredentials($server);
        }

        $clientside = $this->getClientsideCredentialsBuilder();
        if ($clientside != null) {
            $builder->clientsideCredentials($clientside);
        }
        $loggingConfigurationBuilder = $this->getLoggingConfigurationBuilder();
        if ($loggingConfigurationBuilder != null) {
            $builder->loggingConfiguration($loggingConfigurationBuilder);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getXMyPayQuickerVersion(): string
    {
        return $this->config['xMyPayQuickerVersion'] ?? ConfigurationDefaults::X_MY_PAY_QUICKER_VERSION;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getSandboxInstance(): string
    {
        return $this->config['sandboxInstance'] ?? ConfigurationDefaults::SANDBOX_INSTANCE;
    }

    public function getUatInstance(): string
    {
        return $this->config['uatInstance'] ?? ConfigurationDefaults::UAT_INSTANCE;
    }

    public function getServerCredentials(): ServerCredentials
    {
        return $this->serverManager;
    }

    public function getServerCredentialsBuilder(): ?ServerCredentialsBuilder
    {
        if (empty($this->serverManager->getOAuthClientId()) && empty($this->serverManager->getOAuthClientSecret())) {
            return null;
        }
        return ServerCredentialsBuilder::init(
            $this->serverManager->getOAuthClientId(),
            $this->serverManager->getOAuthClientSecret()
        )->oAuthToken($this->serverManager->getOAuthToken())->oAuthScopes($this->serverManager->getOAuthScopes());
    }

    public function getClientsideCredentials(): ClientsideCredentials
    {
        return $this->clientsideManager;
    }

    public function getClientsideCredentialsBuilder(): ?ClientsideCredentialsBuilder
    {
        if (empty($this->clientsideManager->getAccessToken())) {
            return null;
        }
        return ClientsideCredentialsBuilder::init($this->clientsideManager->getAccessToken());
    }

    public function getLoggingConfigurationBuilder(): ?LoggingConfigurationBuilder
    {
        if (is_null($this->loggingConfigurationBuilder)) {
            return null;
        }
        $config = $this->loggingConfigurationBuilder->getConfiguration();
        return LoggingConfigurationBuilder::init()
            ->level($config['level'])
            ->logger($config['logger'])
            ->maskSensitiveHeaders($config['maskSensitiveHeaders'])
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()
                ->includeQueryInPath($config['requestConfiguration']['includeQueryInPath'])
                ->body($config['requestConfiguration']['body'])
                ->headers($config['requestConfiguration']['headers'])
                ->includeHeaders(...$config['requestConfiguration']['includeHeaders'])
                ->excludeHeaders(...$config['requestConfiguration']['excludeHeaders'])
                ->unmaskHeaders(...$config['requestConfiguration']['unmaskHeaders']))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()
                ->body($config['responseConfiguration']['body'])
                ->headers($config['responseConfiguration']['headers'])
                ->includeHeaders(...$config['responseConfiguration']['includeHeaders'])
                ->excludeHeaders(...$config['responseConfiguration']['excludeHeaders'])
                ->unmaskHeaders(...$config['responseConfiguration']['unmaskHeaders']));
    }

    /**
     * Get the proxy configuration builder
     */
    public function getProxyConfigurationBuilder(): ProxyConfigurationBuilder
    {
        return ProxyConfigurationBuilder::init($this->proxyConfiguration['address'])
            ->port($this->proxyConfiguration['port'])
            ->tunnel($this->proxyConfiguration['tunnel'])
            ->auth($this->proxyConfiguration['auth']['user'], $this->proxyConfiguration['auth']['pass'])
            ->authMethod($this->proxyConfiguration['auth']['method']);
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see PayQuickerSDKClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see PayQuickerSDKClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Validate required configuration variables
     */
    private function validateConfig(): void
    {
        $builder = PayQuickerSDKClientBuilder::init();

        $server = $this->getServerCredentialsBuilder();
        if ($server != null) {
            $builder->serverCredentials($server);
        }
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::API): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Agreements Controller
     */
    public function getAgreementsController(): AgreementsController
    {
        if ($this->agreements == null) {
            $this->agreements = new AgreementsController($this->client);
        }
        return $this->agreements;
    }

    /**
     * Returns Balances Controller
     */
    public function getBalancesController(): BalancesController
    {
        if ($this->balances == null) {
            $this->balances = new BalancesController($this->client);
        }
        return $this->balances;
    }

    /**
     * Returns Bank Accounts Controller
     */
    public function getBankAccountsController(): BankAccountsController
    {
        if ($this->bankAccounts == null) {
            $this->bankAccounts = new BankAccountsController($this->client);
        }
        return $this->bankAccounts;
    }

    /**
     * Returns Client Side Controller
     */
    public function getClientSideController(): ClientSideController
    {
        if ($this->clientSide == null) {
            $this->clientSide = new ClientSideController($this->client);
        }
        return $this->clientSide;
    }

    /**
     * Returns Compliance Controller
     */
    public function getComplianceController(): ComplianceController
    {
        if ($this->compliance == null) {
            $this->compliance = new ComplianceController($this->client);
        }
        return $this->compliance;
    }

    /**
     * Returns Documents Controller
     */
    public function getDocumentsController(): DocumentsController
    {
        if ($this->documents == null) {
            $this->documents = new DocumentsController($this->client);
        }
        return $this->documents;
    }

    /**
     * Returns Electronic Wallets Controller
     */
    public function getElectronicWalletsController(): ElectronicWalletsController
    {
        if ($this->electronicWallets == null) {
            $this->electronicWallets = new ElectronicWalletsController($this->client);
        }
        return $this->electronicWallets;
    }

    /**
     * Returns Events Controller
     */
    public function getEventsController(): EventsController
    {
        if ($this->events == null) {
            $this->events = new EventsController($this->client);
        }
        return $this->events;
    }

    /**
     * Returns Payments Controller
     */
    public function getPaymentsController(): PaymentsController
    {
        if ($this->payments == null) {
            $this->payments = new PaymentsController($this->client);
        }
        return $this->payments;
    }

    /**
     * Returns Prepaid Cards Controller
     */
    public function getPrepaidCardsController(): PrepaidCardsController
    {
        if ($this->prepaidCards == null) {
            $this->prepaidCards = new PrepaidCardsController($this->client);
        }
        return $this->prepaidCards;
    }

    /**
     * Returns Program Controller
     */
    public function getProgramController(): ProgramController
    {
        if ($this->program == null) {
            $this->program = new ProgramController($this->client);
        }
        return $this->program;
    }

    /**
     * Returns Receipts Controller
     */
    public function getReceiptsController(): ReceiptsController
    {
        if ($this->receipts == null) {
            $this->receipts = new ReceiptsController($this->client);
        }
        return $this->receipts;
    }

    /**
     * Returns Spendback Controller
     */
    public function getSpendbackController(): SpendbackController
    {
        if ($this->spendback == null) {
            $this->spendback = new SpendbackController($this->client);
        }
        return $this->spendback;
    }

    /**
     * Returns Spendback Refunds Controller
     */
    public function getSpendbackRefundsController(): SpendbackRefundsController
    {
        if ($this->spendbackRefunds == null) {
            $this->spendbackRefunds = new SpendbackRefundsController($this->client);
        }
        return $this->spendbackRefunds;
    }

    /**
     * Returns Statements Controller
     */
    public function getStatementsController(): StatementsController
    {
        if ($this->statements == null) {
            $this->statements = new StatementsController($this->client);
        }
        return $this->statements;
    }

    /**
     * Returns Transfers Controller
     */
    public function getTransfersController(): TransfersController
    {
        if ($this->transfers == null) {
            $this->transfers = new TransfersController($this->client);
        }
        return $this->transfers;
    }

    /**
     * Returns Users Controller
     */
    public function getUsersController(): UsersController
    {
        if ($this->users == null) {
            $this->users = new UsersController($this->client);
        }
        return $this->users;
    }

    /**
     * Returns Webhooks Controller
     */
    public function getWebhooksController(): WebhooksController
    {
        if ($this->webhooks == null) {
            $this->webhooks = new WebhooksController($this->client);
        }
        return $this->webhooks;
    }

    /**
     * Returns Jobs Controller
     */
    public function getJobsController(): JobsController
    {
        if ($this->jobs == null) {
            $this->jobs = new JobsController($this->client);
        }
        return $this->jobs;
    }

    /**
     * Returns Invitations Controller
     */
    public function getInvitationsController(): InvitationsController
    {
        if ($this->invitations == null) {
            $this->invitations = new InvitationsController($this->client);
        }
        return $this->invitations;
    }

    /**
     * Returns O Auth Authorization Controller
     */
    public function getOAuthAuthorizationController(): OAuthAuthorizationController
    {
        if ($this->oAuthAuthorization == null) {
            $this->oAuthAuthorization = new OAuthAuthorizationController($this->client);
        }
        return $this->oAuthAuthorization;
    }

    /**
     * Get the defined global configurations
     */
    private function getGlobalConfiguration(): array
    {
        return [
            TemplateParam::init('sandbox_instance', $this->getSandboxInstance())->dontEncode(),
            TemplateParam::init('uat_instance', $this->getUatInstance())->dontEncode(),
            HeaderParam::init('X-MyPayQuicker-Version', $this->getXMyPayQuickerVersion())
        ];
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::PRODUCTION => [Server::API => 'https://api.payquicker.io/api/v2'],
        Environment::SANDBOX => [Server::API => 'https://api.{sandbox_instance}.payquicker.io/api/v2'],
        Environment::UAT => [Server::API => 'https://api.{uat_instance}.payquicker.io/api/v2'],
        Environment::DEVELOPMENT => [Server::API => 'https://api.local.payquicker.io/api/v2']
    ];
}
