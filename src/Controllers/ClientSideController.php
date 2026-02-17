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
use PayQuickerSDKLib\Models\OperationResult;
use PayQuickerSDKLib\Models\PrepaidCardDataResult;
use PayQuickerSDKLib\Models\PrepaidCardDataTokenResult;
use PayQuickerSDKLib\Models\PrepaidCardDataType;
use PayQuickerSDKLib\Models\PrepaidCardImageSide;
use PayQuickerSDKLib\Models\PrepaidCardPinResult;
use PayQuickerSDKLib\Models\PrepaidCardPinTokenResult;
use PayQuickerSDKLib\Models\RetrieveCardData;
use PayQuickerSDKLib\Models\RetrieveCardPin;
use PayQuickerSDKLib\Models\UpdateCardPin;

class ClientSideController extends BaseController
{
    /**
     * Generate a token used to reveal [prepaid card](page:resources/prepaid-cards) information in the form
     * of image data (base64) or JSON.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param string $format Desired format for the prepaid card data.
     * @param string|null $side Side to specify when retrieving a prepaid card's image data.
     *        *Required if IMAGE format specified.
     *
     * @return PrepaidCardDataTokenResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createCardDataToken(
        string $userToken,
        string $destinationToken,
        string $format,
        ?string $side = null
    ): PrepaidCardDataTokenResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/users/{user-token}/prepaid-cards/{destination-token}/pci'
        )
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                QueryParam::init('format', $format)
                    ->required()
                    ->serializeBy([PrepaidCardDataType::class, 'checkValue']),
                QueryParam::init('side', $side)->serializeBy([PrepaidCardImageSide::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PrepaidCardDataTokenResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Return [prepaid card](page:resources/prepaid-cards) data in the form of image data, text, or both.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param string $format Desired format for the prepaid card data.
     * @param string|null $side Side to specify when retrieving a prepaid card's image data.
     *        *Required if IMAGE format specified.
     * @param RetrieveCardData|null $body
     *
     * @return PrepaidCardDataResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCardData(
        string $userToken,
        string $destinationToken,
        string $format,
        ?string $side = null,
        ?RetrieveCardData $body = null
    ): PrepaidCardDataResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/users/{user-token}/prepaid-cards/{destination-token}/pci'
        )
            ->auth('clientside')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                QueryParam::init('format', $format)
                    ->required()
                    ->serializeBy([PrepaidCardDataType::class, 'checkValue']),
                HeaderParam::init('Content-Type', 'application/json'),
                QueryParam::init('side', $side)->serializeBy([PrepaidCardImageSide::class, 'checkValue']),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PrepaidCardDataResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve one part of a two-part token required to reveal or set a client side [prepaid card](page:
     * resources/prepaid-cards) PIN.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     *
     * @return PrepaidCardPinTokenResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createCardPINToken(string $userToken, string $destinationToken): PrepaidCardPinTokenResult
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/users/{user-token}/prepaid-cards/{destination-token}/pin'
        )
            ->auth('server')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PrepaidCardPinTokenResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Set a [PIN](#/rest/models/structures/prepaid-card-pin) for a [prepaid card](page:resources/prepaid-
     * cards), if supported by program.
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param UpdateCardPin|null $body
     *
     * @return OperationResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCardPIN(
        string $userToken,
        string $destinationToken,
        ?UpdateCardPin $body = null
    ): OperationResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/users/{user-token}/prepaid-cards/{destination-token}/pin'
        )
            ->auth('clientside')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(OperationResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Reveal a [PIN](#/rest/models/structures/prepaid-card-pin) for a [prepaid card](page:
     * resources/prepaid-cards).
     *
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        `user-`.
     * @param string $destinationToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with `dest-`.
     * @param RetrieveCardPin|null $body
     *
     * @return PrepaidCardPinResult Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCardPIN(
        string $userToken,
        string $destinationToken,
        ?RetrieveCardPin $body = null
    ): PrepaidCardPinResult {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/users/{user-token}/prepaid-cards/{destination-token}/pin'
        )
            ->auth('clientside')
            ->parameters(
                TemplateParam::init('user-token', $userToken)->required(),
                TemplateParam::init('destination-token', $destinationToken)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('500', ErrorType::init('', ApiErrorResultException::class))
            ->throwErrorOn('0', ErrorType::init('', ApiErrorResultException::class))
            ->type(PrepaidCardPinResult::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
