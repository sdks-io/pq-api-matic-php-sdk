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
use PayQuickerSDKLib\Models\CreateOrUpdateUser;
use PayQuickerSDKLib\Models\Languages;
use PayQuickerSDKLib\Models\UserListResult;
use PayQuickerSDKLib\Models\UserResult;

class UsersController extends BaseController
{
    /**
     * Retrieve a list of [users](page:resources/user) that supports filtering, sorting, and pagination
     * through existing mechanisms.
     *
     *
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return UserListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listUsers(
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): UserListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users')
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
            ->type(UserListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new [user](page:resources/user).
     *
     *
     * @param CreateOrUpdateUser|null $body
     *
     * @return UserResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createUser(?CreateOrUpdateUser $body = null): UserResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/users')
            ->auth('server')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(UserResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Update a [user](page:resources/user) object (change [email](#/rest/models/structures/email-address)],
     * [address](#/rest/models/structures/address) change, etc.) using a user token.'
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param CreateOrUpdateUser|null $body
     *
     * @return UserResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateUser(string $userToken, ?CreateOrUpdateUser $body = null): UserResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/users/{user-token}')
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
            ->type(UserResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single [user](page:resources/user) record by user token.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     *
     * @return UserResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveUser(string $userToken): UserResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('user-token', $userToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(UserResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
