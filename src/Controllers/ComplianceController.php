<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Controllers;

use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PayQuickerSDKLib\Exceptions\ApiErrorResultException;
use PayQuickerSDKLib\Exceptions\ApiException;
use PayQuickerSDKLib\Models\IdvCheckListResult;
use PayQuickerSDKLib\Models\IdvCheckResult;

class ComplianceController extends BaseController
{
    /**
     * Retrieve a list of [IDV checks](page:resources/user#list-user-idv-checks) by user token that
     * supports filtering, sorting, and pagination through existing mechanisms.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     *
     * @return IdvCheckListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listIdentityChecks(string $userToken): IdvCheckListResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/idv-checks')
            ->auth('server')
            ->parameters(TemplateParam::init('user-token', $userToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(IdvCheckListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a list of [IDV checks](page:resources/user#retrieve-user-idv-check) by IDVC token that
     * supports filtering, sorting, and pagination through existing mechanisms.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $idvcToken Auto-generated unique identifier representing a user IDV check,
     *        prefixed with `idvc-`.
     *
     * @return IdvCheckResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveIdentityCheck(string $userToken, string $idvcToken): IdvCheckResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/idv-checks/{idvc-token}')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('idvc-token', $idvcToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(IdvCheckResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
