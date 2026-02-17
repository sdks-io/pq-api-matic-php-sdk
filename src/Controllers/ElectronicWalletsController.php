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
use PayQuickerSDKLib\Models\Countries;
use PayQuickerSDKLib\Models\CreateOrUpdateElectronicWallet;
use PayQuickerSDKLib\Models\Currencies;
use PayQuickerSDKLib\Models\ElectronicWalletListResult;
use PayQuickerSDKLib\Models\ElectronicWalletRequirementListResult;
use PayQuickerSDKLib\Models\ElectronicWalletResult;
use PayQuickerSDKLib\Models\ElectronicWalletTypes;
use PayQuickerSDKLib\Models\Languages;
use PayQuickerSDKLib\Models\OperationResult;

class ElectronicWalletsController extends BaseController
{
    /**
     * Retrieve a list of [electronic wallets](page:resources/electronic-wallets) that supports filtering,
     * sorting, and pagination through existing mechanisms.
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
     * @return ElectronicWalletListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listElectronicWallets(
        string $userToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): ElectronicWalletListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/electronic-wallets')
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
            ->type(ElectronicWalletListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new [electronic wallet](page:resources/electronic-wallets) using a user token.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param CreateOrUpdateElectronicWallet|null $body
     *
     * @return ElectronicWalletResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createElectronicWallet(
        string $userToken,
        ?CreateOrUpdateElectronicWallet $body = null
    ): ElectronicWalletResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/users/{user-token}/electronic-wallets')
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
            ->type(ElectronicWalletResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve requirements for adding a [electronic wallet](page:resources/electronic-wallets) using the
     * parameters provided.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string|null $electronicWalletType Filter results by electronic wallet type.
     * @param string|null $country Filter results by country.
     * @param string|null $currency Filter results by currency.
     *
     * @return ElectronicWalletRequirementListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCreationRequirements(
        string $userToken,
        ?string $electronicWalletType = null,
        ?string $country = null,
        ?string $currency = null
    ): ElectronicWalletRequirementListResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/users/{user-token}/electronic-wallets/requirements'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                QueryParam::init('electronicWalletType', $electronicWalletType)
                    ->serializeBy([ElectronicWalletTypes::class, 'checkValue']),
                QueryParam::init('country', $country)->serializeBy([Countries::class, 'checkValue']),
                QueryParam::init('currency', $currency)->serializeBy([Currencies::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(ElectronicWalletRequirementListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single [electronic wallet](page:resources/electronic-wallets) using a destination token.
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
     * @return ElectronicWalletResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveElectronicWallet(
        string $userToken,
        string $destinationToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): ElectronicWalletResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/users/{user-token}/electronic-wallets/{destination-token}'
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
            ->type(ElectronicWalletResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Update a [electronic wallet](page:resources/electronic-wallets).
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param CreateOrUpdateElectronicWallet|null $body
     *
     * @return ElectronicWalletResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateElectronicWallet(
        string $userToken,
        string $destinationToken,
        ?CreateOrUpdateElectronicWallet $body = null
    ): ElectronicWalletResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/users/{user-token}/electronic-wallets/{destination-token}'
        )
            ->auth('server')
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
            ->type(ElectronicWalletResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Delete a user [electronic wallet](page:resources/electronic-wallets).
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
    public function deleteElectronicWallet(string $userToken, string $destinationToken): OperationResult
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/users/{user-token}/electronic-wallets/{destination-token}'
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
}
