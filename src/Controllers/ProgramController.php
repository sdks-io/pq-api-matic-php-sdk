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
use PayQuickerSDKLib\Models\Languages;
use PayQuickerSDKLib\Models\ProgramListResult;
use PayQuickerSDKLib\Models\ProgramResult;

class ProgramController extends BaseController
{
    /**
     * Retrieve a list of [programs](page:resources/programs) that supports filtering, sorting, and
     * pagination through existing mechanisms.
     *
     *
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return ProgramListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPrograms(
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): ProgramListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/programs')
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
            ->type(ProgramListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single [program](page:resources/programs) by its program token.
     *
     *
     * @param string $programToken Auto-generated unique identifier representing a program, prefixed
     *        with `prog-`.
     * @param string|null $language Filter results by language type.
     *
     * @return ProgramResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveProgram(string $programToken, ?string $language = null): ProgramResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/programs/{program-token}')
            ->auth('server')
            ->parameters(
                TemplateParam::init('program-token', $programToken)->required(),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(ProgramResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
