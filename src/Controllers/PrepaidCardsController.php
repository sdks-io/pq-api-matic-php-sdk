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
use PayQuickerSDKLib\Models\AuthorizationListResult;
use PayQuickerSDKLib\Models\Languages;
use PayQuickerSDKLib\Models\OrderPrepaidCard;
use PayQuickerSDKLib\Models\PrepaidCardListResult;
use PayQuickerSDKLib\Models\PrepaidCardResult;
use PayQuickerSDKLib\Models\ReplacePrepaidCard;
use PayQuickerSDKLib\Models\UpdatePrepaidCard;

class PrepaidCardsController extends BaseController
{
    /**
     * Retrieve a list of [prepaid cards](page:resources/prepaid-cards) by user token that supports
     * filtering, sorting, and pagination through existing mechanisms.
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
     * @return PrepaidCardListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPrepaidCards(
        string $userToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): PrepaidCardListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/prepaid-cards')
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
            ->type(PrepaidCardListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Order a [prepaid card](page:resources/prepaid-cards) for the user by specifying a cardPackage.
     *
     * Assign a prepaid card to a user when a program token and card reference number are supplied.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param OrderPrepaidCard|null $body
     *
     * @return PrepaidCardResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function orderPrepaidCard(string $userToken, ?OrderPrepaidCard $body = null): PrepaidCardResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/users/{user-token}/prepaid-cards')
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
            ->type(PrepaidCardResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Replace a [prepaid card](page:resources/prepaid-cards) by destination token.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param ReplacePrepaidCard|null $body
     *
     * @return PrepaidCardResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function replacePrepaidCard(
        string $userToken,
        string $destinationToken,
        ?ReplacePrepaidCard $body = null
    ): PrepaidCardResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/users/{user-token}/prepaid-cards/{destination-token}'
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
            ->type(PrepaidCardResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve [prepaid card](page:resources/prepaid-cards) details by destination token.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     *
     * @return PrepaidCardResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrievePrepaidCard(string $userToken, string $destinationToken): PrepaidCardResult
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/users/{user-token}/prepaid-cards/{destination-token}'
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
            ->type(PrepaidCardResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Partial [prepaid card](page:resources/prepaid-cards) update.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param UpdatePrepaidCard|null $body
     *
     * @return PrepaidCardResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePrepaidCard(
        string $userToken,
        string $destinationToken,
        ?UpdatePrepaidCard $body = null
    ): PrepaidCardResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/users/{user-token}/prepaid-cards/{destination-token}'
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
            ->type(PrepaidCardResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * TODO
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     *
     * @return AuthorizationListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCardAuthorizations(string $userToken, string $destinationToken): AuthorizationListResult
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/users/{user-token}/prepaid-cards/{destination-token}/authorizations'
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
            ->type(AuthorizationListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
