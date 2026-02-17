<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Controllers;

use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PayQuickerSDKLib\Exceptions\ApiErrorResultException;
use PayQuickerSDKLib\Exceptions\ApiException;
use PayQuickerSDKLib\Models\CreateOrUpdateDocumentFields;
use PayQuickerSDKLib\Models\DocumentListResult;
use PayQuickerSDKLib\Models\DocumentRequirementsListResult;
use PayQuickerSDKLib\Models\DocumentResult;
use PayQuickerSDKLib\Models\Languages;
use PayQuickerSDKLib\Utils\FileWrapper;

class DocumentsController extends BaseController
{
    /**
     * Retrieve a list of user [documents](page:resources/documents) that supports filtering, sorting, and
     * pagination through existing mechanisms.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return DocumentListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listDocuments(
        string $userToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): DocumentListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/documents')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
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
            ->type(DocumentListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Upload a user [document](page:resources/documents).
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param CreateOrUpdateDocumentFields|null $fields
     * @param FileWrapper|null $upload Document to be uploaded
     *
     * @return DocumentResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function uploadDocument(
        string $userToken,
        ?CreateOrUpdateDocumentFields $fields = null,
        ?FileWrapper $upload = null
    ): DocumentResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/users/{user-token}/documents')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                FormParam::init('fields', $fields)->encodingHeader('Content-Type', 'application/json'),
                FormParam::init('upload', $upload)->encodingHeader('Content-Type', 'image/png')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(DocumentResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a single user [document](page:resources/documents) by its document token.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $documentToken Auto-generated unique identifier representing an uploaded
     *        document, prefixed with `docu-`.
     *
     * @return DocumentResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveDocument(string $userToken, string $documentToken): DocumentResult
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/documents/{document-token}')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('document-token', $documentToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(DocumentResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Replace the user [documents](page:resources/documents) at the given document token.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $documentToken Auto-generated unique identifier representing an uploaded
     *        document, prefixed with `docu-`.
     * @param CreateOrUpdateDocumentFields|null $fields
     * @param FileWrapper|null $upload Document to be uploaded
     *
     * @return DocumentResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function replaceDocument(
        string $userToken,
        string $documentToken,
        ?CreateOrUpdateDocumentFields $fields = null,
        ?FileWrapper $upload = null
    ): DocumentResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/users/{user-token}/documents/{document-token}')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('document-token', $documentToken)->required(),
                FormParam::init('fields', $fields)->encodingHeader('Content-Type', 'application/json'),
                FormParam::init('upload', $upload)->encodingHeader('Content-Type', 'image/png')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(DocumentResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a list of user documents that the user can provide
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param int $page Page number of specific page to return
     * @param int $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return DocumentRequirementsListResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listUserDocumentRequirements(
        string $userToken,
        int $page,
        int $pageSize,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): DocumentRequirementsListResult {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user-token}/documents/requirements')
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
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
            ->type(DocumentRequirementsListResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
