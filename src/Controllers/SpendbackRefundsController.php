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
use PayQuickerSDKLib\Models\CreateSpendbackRefundQuote;
use PayQuickerSDKLib\Models\Languages;
use PayQuickerSDKLib\Models\SpendbackRefundListResult;
use PayQuickerSDKLib\Models\SpendbackRefundResult;

class SpendbackRefundsController extends BaseController
{
    /**
     * Retrieve a list of [spendbacks](page:resources/spendbacks) refunds that supports filtering, sorting,
     * and pagination through existing mechanisms.
     *
     *
     * @param string $spendbackToken Auto-generated unique identifier representing an individual
     *        spend back transaction and quote, prefixed with `spnd-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return SpendbackRefundListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSpendbackRefunds(
        string $spendbackToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): SpendbackRefundListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/spend-back/{spendback-token}/refund')
            ->auth('server')
            ->parameters(
                TemplateParam::init('spendback-token', $spendbackToken)->required(),
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
            ->type(SpendbackRefundListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Perform a [spendback](page:resources/spendbacks) refund for a partial amount.
     *
     *
     * @param string $spendbackToken Auto-generated unique identifier representing an individual
     *        spend back transaction and quote, prefixed with `spnd-`.
     * @param CreateSpendbackRefundQuote|null $body
     *
     * @return SpendbackRefundResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSpendbackRefundQuote(
        string $spendbackToken,
        ?CreateSpendbackRefundQuote $body = null
    ): SpendbackRefundResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/spend-back/{spendback-token}/refund')
            ->auth('server')
            ->parameters(
                TemplateParam::init('spendback-token', $spendbackToken)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(SpendbackRefundResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Cancel an spendback refund quote.
     *
     *
     * @param string $spendbackToken Auto-generated unique identifier representing an individual
     *        spend back transaction and quote, prefixed with `spnd-`.
     * @param string $refundToken Auto-generated unique identifier representing an individual spend
     *        back refund transaction and quote, prefixed with `rfnd-`.
     *
     * @return SpendbackRefundResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cancelSpendbackRefundQuote(string $spendbackToken, string $refundToken): SpendbackRefundResult
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/spend-back/{spendback-token}/refund/{refund-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('spendback-token', $spendbackToken)->required(),
                TemplateParam::init('refund-token', $refundToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(SpendbackRefundResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single spendback refund using the rfnd token
     *
     * @param string $spendbackToken Auto-generated unique identifier representing an individual
     *        spend back transaction and quote, prefixed with `spnd-`.
     * @param string $refundToken Auto-generated unique identifier representing an individual spend
     *        back refund transaction and quote, prefixed with `rfnd-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return SpendbackRefundResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveSpendbackRefund(
        string $spendbackToken,
        string $refundToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): SpendbackRefundResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/spend-back/{spendback-token}/refund/{refund-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('spendback-token', $spendbackToken)->required(),
                TemplateParam::init('refund-token', $refundToken)->required(),
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
            ->type(SpendbackRefundResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Accept a spendback return quote.
     *
     * @param string $spendbackToken Auto-generated unique identifier representing an individual
     *        spend back transaction and quote, prefixed with `spnd-`.
     * @param string $refundToken Auto-generated unique identifier representing an individual spend
     *        back refund transaction and quote, prefixed with `rfnd-`.
     *
     * @return SpendbackRefundResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function acceptSpendbackRefundQuote(string $spendbackToken, string $refundToken): SpendbackRefundResult
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/spend-back/{spendback-token}/refund/{refund-token}'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('spendback-token', $spendbackToken)->required(),
                TemplateParam::init('refund-token', $refundToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(SpendbackRefundResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
