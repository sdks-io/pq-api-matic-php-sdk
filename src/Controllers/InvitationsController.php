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
use PayQuickerSDKLib\Models\CreateInvitation;
use PayQuickerSDKLib\Models\InvitationListResult;
use PayQuickerSDKLib\Models\InvitationResult;
use PayQuickerSDKLib\Models\Languages;

class InvitationsController extends BaseController
{
    /**
     * Retrieve a list of [invitations](page:resources/invitations) that supports filtering, sorting, and
     * pagination through existing mechanisms.
     *
     *
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return InvitationListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listInvitations(
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): InvitationListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/invitations')
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
            ->type(InvitationListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a [invitation](page:resources/invitations) quote.
     *
     *
     * @param CreateInvitation|null $body
     *
     * @return InvitationResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createInvitation(?CreateInvitation $body = null): InvitationResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/invitations')
            ->auth('server')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(InvitationResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single [invitation](page:resources/invitations).
     *
     *
     * @param string $invitationToken Auto-generated unique identifier representing an invite,
     *        prefixed with `invt-`.
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $language Filter results by language type.
     *
     * @return InvitationResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveInvitation(
        string $invitationToken,
        ?string $filter = null,
        ?string $language = null
    ): InvitationResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/invitations/{invitation-token}')
            ->auth('server')
            ->parameters(
                TemplateParam::init('invitation-token', $invitationToken)->required(),
                QueryParam::init('filter', $filter),
                QueryParam::init('language', $language)->serializeBy([Languages::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(InvitationResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Accept an open [invitation](page:resources/invitations) quote.
     *
     *
     * @param string $invitationToken Auto-generated unique identifier representing an invite,
     *        prefixed with `invt-`.
     *
     * @return InvitationResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateInvitation(string $invitationToken): InvitationResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/invitations/{invitation-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('invitation-token', $invitationToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(InvitationResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Cancel an open [invitation](page:resources/invitations) quote.
     *
     *
     * @param string $invitationToken Auto-generated unique identifier representing an invite,
     *        prefixed with `invt-`.
     *
     * @return InvitationResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cancelInvitation(string $invitationToken): InvitationResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/invitations/{invitation-token}')
            ->auth('server')
            ->parameters(TemplateParam::init('invitation-token', $invitationToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(InvitationResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
