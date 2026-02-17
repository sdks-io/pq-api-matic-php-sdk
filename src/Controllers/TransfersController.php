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
use PayQuickerSDKLib\Models\Languages;
use PayQuickerSDKLib\Models\TransferListResult;
use PayQuickerSDKLib\Models\TransferResult;

class TransfersController extends BaseController
{
    /**
     * Retrieve a list of [transfers](page:resources/transfers) that supports filtering, sorting, and
     * pagination through existing mechanisms.
     *
     *
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return TransferListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listTransfers(
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): TransferListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transfers')
            ->auth('server')
            ->parameters(
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
            ->type(TransferListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new [transfer](page:resources/transfers) quote.
     *
     *
     * @param mixed $body
     *
     * @return TransferResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createTransferQuote($body = null): TransferResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transfers')
            ->auth('server')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)->strictType('anyOf(oneOf(GatewayTransferQuote,PortalTransferQuote),null)')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(TransferResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve details of a specific [transfer](page:resources/transfers) represented by a transfer token.
     *
     *
     * @param string $transferToken Auto-generated unique identifier representing an individual
     *        transfer transaction, prefixed with `xfer-`.
     *
     * @return TransferResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveTransfer(string $transferToken): TransferResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transfers/{transfer-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('transfer-token', $transferToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(TransferResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Accept a [transfer](page:resources/transfers) quote.
     *
     * @param string $transferToken Auto-generated unique identifier representing an individual
     *        transfer transaction, prefixed with `xfer-`.
     *
     * @return TransferResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function acceptTransferQuote(string $transferToken): TransferResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transfers/{transfer-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('transfer-token', $transferToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(TransferResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Optional [transfer](page:resources/transfers) quote cancellation that auto-cancels after a period
     * organically expires or when account activity invalidates the quote.
     *
     *
     * @param string $transferToken Auto-generated unique identifier representing an individual
     *        transfer transaction, prefixed with `xfer-`.
     *
     * @return TransferResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cancelTransferQuote(string $transferToken): TransferResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/transfers/{transfer-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('transfer-token', $transferToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(TransferResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a list of user [transfers](page:resources/transfers) that supports filtering, sorting, and
     * pagination through existing mechanisms.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return TransferListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listUserTransfers(
        string $userToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): TransferListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/transfers')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                QueryParam::init('page', $page)->required(),
                QueryParam::init('pageSize', $pageSize)->required(),
                QueryParam::init('filter', $filter),
                QueryParam::init('sort', $sort),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(TransferListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a specific user bank [transfer](page:resources/transfers).
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $transferToken Auto-generated unique identifier representing a transfer,
     *        prefixed with `xfer-`.
     *
     * @return TransferResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveUserTransfer(string $userToken, string $transferToken): TransferResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/transfers/{transfer-token}')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('transfer-token', $transferToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(TransferResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
