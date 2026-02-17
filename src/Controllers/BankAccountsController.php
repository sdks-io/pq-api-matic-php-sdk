<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PayQuickerSDKLib\Exceptions\ApiErrorResultException;
use PayQuickerSDKLib\Exceptions\ApiException;
use PayQuickerSDKLib\Models\BankAccountListResult;
use PayQuickerSDKLib\Models\BankAccountRequirementListResult;
use PayQuickerSDKLib\Models\BankAccountResult;
use PayQuickerSDKLib\Models\Countries;
use PayQuickerSDKLib\Models\CreateOrUpdateBankAccount;
use PayQuickerSDKLib\Models\Currencies;
use PayQuickerSDKLib\Models\Languages;
use PayQuickerSDKLib\Models\OperationResult;

class BankAccountsController extends BaseController
{
    /**
     * Retrieve a list of [bank accounts](page:resources/bank-accounts) that supports filtering, sorting,
     * and pagination through existing mechanisms.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return BankAccountListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listBankAccounts(
        string $userToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): BankAccountListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/bank-accounts')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                QueryParam::init('page', $page)->required(),
                QueryParam::init('pageSize', $pageSize)->required(),
                QueryParam::init('filter', $filter),
                QueryParam::init('sort', $sort),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a [bank account](page:resources/bank-accounts) using a user token.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param CreateOrUpdateBankAccount|null $body
     *
     * @return BankAccountResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createBankAccount(string $userToken, ?CreateOrUpdateBankAccount $body = null): BankAccountResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/users/{user-token}/bank-accounts')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single [bank account](page:resources/bank-accounts) using a destination token.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return BankAccountResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveBankAccount(
        string $userToken,
        string $destinationToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): BankAccountResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/users/{user-token}/bank-accounts/{destination-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                QueryParam::init('page', $page)->required(),
                QueryParam::init('pageSize', $pageSize)->required(),
                QueryParam::init('filter', $filter),
                QueryParam::init('sort', $sort),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Update a [bank account](page:resources/bank-accounts).
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param CreateOrUpdateBankAccount|null $body
     *
     * @return BankAccountResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateBankAccount(
        string $userToken,
        string $destinationToken,
        ?CreateOrUpdateBankAccount $body = null
    ): BankAccountResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/users/{user-token}/bank-accounts/{destination-token}'
        )
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Delete a user [bank account](page:resources/bank-accounts).
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     *
     * @return OperationResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteBankAccount(string $userToken, string $destinationToken): OperationResult
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/users/{user-token}/bank-accounts/{destination-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(OperationResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve requirements for adding a [bank account](page:resources/bank-accounts) using the parameters
     * provided.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string|null $country Filter results by country.
     * @param string|null $currency Filter results by currency.
     *
     * @return BankAccountRequirementListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCreationRequirements(
        string $userToken,
        ?string $country = null,
        ?string $currency = null
    ): BankAccountRequirementListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/bank-accounts/requirements')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                QueryParam::init('country', $country)->serializeBy([Countries::class, 'checkValue']),
                QueryParam::init('currency', $currency)->serializeBy([Currencies::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountRequirementListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a list of company [bank accounts](page:resources/bank-accounts) that supports filtering,
     * sorting, and pagination through existing mechanisms.
     *
     *
     * @param string $accountToken Auto-generated unique identifier representing a company account,
     *        prefixed with `acct-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return BankAccountListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCompanyBankAccounts(
        string $accountToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): BankAccountListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/accounts/{account-token}/bank-accounts')
            ->auth('server')
            ->parameters(
                TemplateParam::init('account-token', $accountToken)->required(),
                QueryParam::init('page', $page)->required(),
                QueryParam::init('pageSize', $pageSize)->required(),
                QueryParam::init('filter', $filter),
                QueryParam::init('sort', $sort),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a company [bank account](page:resources/bank-accounts) using an account token.
     *
     *
     * @param string $accountToken Auto-generated unique identifier representing a company account,
     *        prefixed with `acct-`.
     * @param CreateOrUpdateBankAccount|null $body
     *
     * @return BankAccountResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createCompanyBankAccount(
        string $accountToken,
        ?CreateOrUpdateBankAccount $body = null
    ): BankAccountResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/accounts/{account-token}/bank-accounts')
            ->auth('server')
            ->parameters(
                TemplateParam::init('account-token', $accountToken)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single company [bank account](page:resources/bank-accounts) using a destination token.
     *
     *
     * @param string $accountToken Auto-generated unique identifier representing a company account,
     *        prefixed with `acct-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return BankAccountResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCompanyBankAccount(
        string $accountToken,
        string $destinationToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): BankAccountResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/accounts/{account-token}/bank-accounts/{destination-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('account-token', $accountToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                QueryParam::init('page', $page)->required(),
                QueryParam::init('pageSize', $pageSize)->required(),
                QueryParam::init('filter', $filter),
                QueryParam::init('sort', $sort),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Update a company [bank account](page:resources/bank-accounts).
     *
     *
     * @param string $accountToken Auto-generated unique identifier representing a company account,
     *        prefixed with `acct-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param CreateOrUpdateBankAccount|null $body
     *
     * @return BankAccountResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCompanyBankAccount(
        string $accountToken,
        string $destinationToken,
        ?CreateOrUpdateBankAccount $body = null
    ): BankAccountResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/accounts/{account-token}/bank-accounts/{destination-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('account-token', $accountToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Delete a company [bank account](page:resources/bank-accounts).
     *
     *
     * @param string $accountToken Auto-generated unique identifier representing a company account,
     *        prefixed with `acct-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     *
     * @return OperationResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteCompanyBankAccount(string $accountToken, string $destinationToken): OperationResult
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/accounts/{account-token}/bank-accounts/{destination-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('account-token', $accountToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(OperationResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve requirements for adding a [bank account](page:resources/bank-accounts) using the parameters
     * provided.
     *
     *
     * @param string $accountToken Auto-generated unique identifier representing a company account,
     *        prefixed with `acct-`.
     * @param string|null $country Filter results by country.
     * @param string|null $currency Filter results by currency.
     *
     * @return BankAccountRequirementListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCompanyBankAccountCreationRequirements(
        string $accountToken,
        ?string $country = null,
        ?string $currency = null
    ): BankAccountRequirementListResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/accounts/{account-token}/bank-accounts/requirements'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('account-token', $accountToken)->required(),
                QueryParam::init('country', $country)->serializeBy([Countries::class, 'checkValue']),
                QueryParam::init('currency', $currency)->serializeBy([Currencies::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountRequirementListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve requirements for adding a [bank account](page:resources/bank-accounts) using the pre-paid
     * card as the destination.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param string|null $country Filter results by country.
     * @param string|null $currency Filter results by currency.
     *
     * @return BankAccountRequirementListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveBankAccountCreationRequirementsForAPrepaidCard(
        string $userToken,
        string $destinationToken,
        ?string $country = null,
        ?string $currency = null
    ): BankAccountRequirementListResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/users/{user-token}/prepaid-cards/{destination-token}/bank-accounts/requirements'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                QueryParam::init('country', $country)->serializeBy([Countries::class, 'checkValue']),
                QueryParam::init('currency', $currency)->serializeBy([Currencies::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BankAccountRequirementListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
