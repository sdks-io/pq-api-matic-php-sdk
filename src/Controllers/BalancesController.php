<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PayQuickerSDKLib\Exceptions\ApiErrorResultException;
use PayQuickerSDKLib\Exceptions\ApiException;
use PayQuickerSDKLib\Models\BalanceListResult;
use PayQuickerSDKLib\Models\BalanceResult;
use PayQuickerSDKLib\Models\Languages;

class BalancesController extends BaseController
{
    /**
     * Retrieve a list of bank account [balances](page:resources/balances) that supports filtering, sorting,
     * and pagination through existing mechanisms.
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
     * @return BalanceListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAccountBalances(
        string $accountToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): BalanceListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/accounts/{account-token}/balances')
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
            ->type(BalanceListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a list of user [balances](page:resources/balances) that supports filtering, sorting, and
     * pagination through existing mechanisms.
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
     * @return BalanceListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listUserBalances(
        string $userToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): BalanceListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/balances')
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
            ->type(BalanceListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a [prepaid card](page:resources/prepaid-cards) [balances](page:resources/balances) by
     * destination token that supports filtering, sorting, and pagination through existing mechanisms.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param string|null $language Filter results by language type.
     *
     * @return BalanceResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCardBalance(
        string $userToken,
        string $destinationToken,
        ?string $language = null
    ): BalanceResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/users/{user-token}/prepaid-cards/{destination-token}/balances'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(BalanceResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
