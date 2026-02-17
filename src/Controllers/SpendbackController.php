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
use PayQuickerSDKLib\Models\SpendbackListResult;
use PayQuickerSDKLib\Models\SpendbackResult;

class SpendbackController extends BaseController
{
    /**
     * Retrieve a list of [spendbacks](page:resources/spendbacks) that supports filtering, sorting, and
     * pagination through existing mechanisms.
     *
     *
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return SpendbackListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSpendbacks(
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): SpendbackListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/spend-back')
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
            ->type(SpendbackListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a [spendback](page:resources/spendbacks) quote.
     *
     *
     * @param mixed $body
     *
     * @return SpendbackResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSpendbackQuote($body = null): SpendbackResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/spend-back')
            ->auth('server')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)->strictType('anyOf(oneOf(GatewaySpendbackQuote,PortalSpendbackQuote),null)')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(SpendbackResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single [spendbacks](page:resources/spendbacks) quote using the spendback token.
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
     * @return SpendbackResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveSpendback(
        string $spendbackToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): SpendbackResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/spend-back/{spendback-token}')
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
            ->type(SpendbackResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Accept an open [spendback](page:resources/spendbacks) quote.
     *
     *
     * @param string $spendbackToken Auto-generated unique identifier representing an individual
     *        spend back transaction and quote, prefixed with `spnd-`.
     *
     * @return SpendbackResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function acceptSpendbackQuote(string $spendbackToken): SpendbackResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/spend-back/{spendback-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('spendback-token', $spendbackToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(SpendbackResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Cancel an open [spendback](page:resources/spendbacks) quote.
     *
     *
     * @param string $spendbackToken Auto-generated unique identifier representing an individual
     *        spend back transaction and quote, prefixed with `spnd-`.
     *
     * @return SpendbackResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cancelSpendbackQuote(string $spendbackToken): SpendbackResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/spend-back/{spendback-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('spendback-token', $spendbackToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(SpendbackResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
