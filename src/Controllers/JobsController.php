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
use PayQuickerSDKLib\Models\PaymentJobListResult;
use PayQuickerSDKLib\Models\PaymentJobResult;

class JobsController extends BaseController
{
    /**
     * Retrieve a list of [jobs](page:resources/jobs) that supports filtering, sorting, and pagination
     * through existing mechanisms.
     *
     *
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return PaymentJobListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPaymentJobs(
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): PaymentJobListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/payments/jobs')
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
            ->type(PaymentJobListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a [payment](page:resources/jobs).
     *
     *
     * @param mixed $body
     *
     * @return PaymentJobResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createPaymentJob($body = null): PaymentJobResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/payments/jobs')
            ->auth('server')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)->strictType('anyOf(oneOf(GatewayPaymentJob,PortalPaymentJob),null)')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PaymentJobResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single payment [job](page:resources/jobs).
     *
     *
     * @param string $jobToken Auto-generated unique identifier representing a job, prefixed with
     *        `jobs-`.
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $language Filter results by language type.
     *
     * @return PaymentJobResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrievePaymentJob(
        string $jobToken,
        ?string $filter = null,
        ?string $language = null
    ): PaymentJobResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/payments/jobs/{job-token}')
            ->auth('server')
            ->parameters(
                TemplateParam::init('job-token', $jobToken)->required(),
                QueryParam::init('filter', $filter),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PaymentJobResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Cancel an submitted payment [job](page:resources/jobs).
     *
     *
     * @param string $jobToken Auto-generated unique identifier representing a job, prefixed with
     *        `jobs-`.
     *
     * @return PaymentJobResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cancelPaymentJob(string $jobToken): PaymentJobResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/payments/jobs/{job-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('job-token', $jobToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PaymentJobResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
