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
use PayQuickerSDKLib\Models\EventListResult;
use PayQuickerSDKLib\Models\UserEventResult;

class EventsController extends BaseController
{
    /**
     * Retrieve a list of [user events](page:resources/user#list-user-events) that supports filtering,
     * sorting, and pagination through existing mechanisms.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     *
     * @return EventListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listEvents(string $userToken): EventListResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/events')
            ->auth('server')
            ->parameters(TemplateParam::init('user-token', $userToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(EventListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single [user event](page:resources/user#get-user-event).
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $eventToken Auto-generated unique identifier representing an event, prefixed
     *        with `evnt-`.
     *
     * @return UserEventResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveEvent(string $userToken, string $eventToken): UserEventResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/events/{event-token}')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('event-token', $eventToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(UserEventResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
