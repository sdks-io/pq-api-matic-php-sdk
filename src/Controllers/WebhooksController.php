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
use PayQuickerSDKLib\Models\CreateWebhookRequest;
use PayQuickerSDKLib\Models\Languages;
use PayQuickerSDKLib\Models\WebhookSubscriptionListResult;
use PayQuickerSDKLib\Models\WebhookSubscriptionResult;

class WebhooksController extends BaseController
{
    /**
     * Retrieve a list of all [webhook subscriptions](page:resources/webhooks) that supports filtering,
     * sorting, and pagination through existing mechanisms
     *
     *
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return WebhookSubscriptionListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSubscriptions(
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): WebhookSubscriptionListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/webhooks')
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
            ->type(WebhookSubscriptionListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Update a [webhook subscription](page:resources/webhooks).
     *
     * @param CreateWebhookRequest|null $body
     *
     * @return WebhookSubscriptionResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateSubscription(?CreateWebhookRequest $body = null): WebhookSubscriptionResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/webhooks')
            ->auth('server')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(WebhookSubscriptionResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a [webhook subscription](page:resources/webhooks).
     *
     * @param CreateWebhookRequest|null $body
     *
     * @return WebhookSubscriptionResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSubscription(?CreateWebhookRequest $body = null): WebhookSubscriptionResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/webhooks')
            ->auth('server')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(WebhookSubscriptionResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single [webhook subscription](page:resources/webhooks) using the webhook token.
     *
     *
     * @param string $webhookToken Auto-generated unique identifier representing a webhook
     *        subscription, prefixed with `webh-`.
     *
     * @return WebhookSubscriptionResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveSubscription(string $webhookToken): WebhookSubscriptionResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/webhooks/{webhook-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('webhook-token', $webhookToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(WebhookSubscriptionResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Delete a [webhook subscription](page:resources/webhooks).
     *
     *
     * @param string $webhookToken Auto-generated unique identifier representing a webhook
     *        subscription, prefixed with `webh-`.
     *
     * @return WebhookSubscriptionResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteSubscription(string $webhookToken): WebhookSubscriptionResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/webhooks/{webhook-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('webhook-token', $webhookToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(WebhookSubscriptionResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
