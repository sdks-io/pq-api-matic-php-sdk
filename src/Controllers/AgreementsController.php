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
use PayQuickerSDKLib\Models\AgreementListResultJson;
use PayQuickerSDKLib\Models\AgreementResult;
use PayQuickerSDKLib\Models\Languages;

class AgreementsController extends BaseController
{
    /**
     * Retrieve a list of program [agreements](page:resources/agreements) that supports filtering, sorting,
     * and pagination through existing mechanisms.
     *
     *
     * @param string $programToken Auto-generated unique identifier representing a program, prefixed
     *        with `prog-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return AgreementListResultJson Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAgreements(
        string $programToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): AgreementListResultJson {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/programs/{program-token}/agreements')
            ->auth('server')
            ->parameters(
                TemplateParam::init('program-token', $programToken)->required(),
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
            ->type(AgreementListResultJson::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single program [agreement](page:resources/agreements).
     *
     *
     * @param string $programToken Auto-generated unique identifier representing a program, prefixed
     *        with `prog-`.
     * @param string $agreementToken Auto-generated unique identifier representing a program
     *        agreement, prefixed with `agmt-`.
     *
     * @return AgreementResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveProgramAgreement(string $programToken, string $agreementToken): AgreementResult
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/programs/{program-token}/agreements/{agreement-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('program-token', $programToken)->required(),
                TemplateParam::init('agreement-token', $agreementToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(AgreementResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Accept a single program [agreement](page:resources/agreements).
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $agreementToken Auto-generated unique identifier representing a program
     *        agreement, prefixed with `agmt-`.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function acceptAgreement(string $userToken, string $agreementToken): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/users/{user-token}/agreements/{agreement-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('agreement-token', $agreementToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class));

        $this->execute($_reqBuilder, $_resHandler);
    }
}
