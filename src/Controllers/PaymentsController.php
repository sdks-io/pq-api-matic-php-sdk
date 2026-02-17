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
use PayQuickerSDKLib\Models\PaymentListResult;
use PayQuickerSDKLib\Models\PaymentResult;

class PaymentsController extends BaseController
{
    /**
     * Retrieve a list of [payments](page:resources/payments) that supports filtering, sorting, and
     * pagination through existing mechanisms.
     *
     *
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return PaymentListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPayments(
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): PaymentListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/payments')
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
            ->type(PaymentListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a [payment](page:resources/payments) quote.
     *
     *
     * @param mixed $body
     *
     * @return PaymentResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createPaymentQuote($body = null): PaymentResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/payments')
            ->auth('server')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)->strictType('anyOf(oneOf(GatewayPaymentQuote,PortalPaymentQuote),null)')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PaymentResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single [payment](page:resources/payments).
     *
     *
     * @param string $paymentToken Auto-generated unique identifier representing an individual
     *        payment transaction and quote, prefixed with `pmnt-`.
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $language Filter results by language type.
     *
     * @return PaymentResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrievePayment(
        string $paymentToken,
        ?string $filter = null,
        ?string $language = null
    ): PaymentResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/payments/{payment-token}')
            ->auth('server')
            ->parameters(
                TemplateParam::init('payment-token', $paymentToken)->required(),
                QueryParam::init('filter', $filter),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PaymentResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Accept an open [payment](page:resources/payments) quote.
     *
     *
     * @param string $paymentToken Auto-generated unique identifier representing an individual
     *        payment transaction and quote, prefixed with `pmnt-`.
     *
     * @return PaymentResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function acceptPaymentQuote(string $paymentToken): PaymentResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/payments/{payment-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('payment-token', $paymentToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PaymentResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Cancel an open [payment](page:resources/payments) quote.
     *
     *
     * @param string $paymentToken Auto-generated unique identifier representing an individual
     *        payment transaction and quote, prefixed with `pmnt-`.
     *
     * @return PaymentResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cancelPaymentQuote(string $paymentToken): PaymentResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/payments/{payment-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('payment-token', $paymentToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PaymentResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Perform a [payment](page:resources/payments) retraction for the full payment amount.
     *
     *
     * @param string $paymentToken Auto-generated unique identifier representing an individual
     *        payment transaction and quote, prefixed with `pmnt-`.
     *
     * @return PaymentResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retractPayment(string $paymentToken): PaymentResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/payments/{payment-token}/retract')
            ->auth('server')
            ->parameters(TemplateParam::init('payment-token', $paymentToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PaymentResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
