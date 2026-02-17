<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Exceptions;

use PayQuickerSDKLib\ApiHelper;

class ApiErrorResultException extends ApiException
{
    /**
     * @var string
     */
    private $severity;

    /**
     * @var string
     */
    private $error;

    /**
     * @var float
     */
    private $codeProperty;

    /**
     * @var string
     */
    private $messageProperty;

    /**
     * @var string
     */
    private $referenceId;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var string|null
     */
    private $requestRef;

    /**
     * @param string $reason
     * @param \PayQuickerSDKLib\Http\HttpRequest $request
     * @param \PayQuickerSDKLib\Http\HttpResponse $response
     * @param string $severity
     * @param string $error
     * @param float $codeProperty
     * @param string $messageProperty
     * @param string $referenceId
     * @param string $timestamp
     */
    public function __construct(
        string $reason,
        \PayQuickerSDKLib\Http\HttpRequest $request,
        \PayQuickerSDKLib\Http\HttpResponse $response,
        string $severity,
        string $error,
        float $codeProperty,
        string $messageProperty,
        string $referenceId,
        string $timestamp
    ) {
        parent::__construct($reason, $request, $response);
        $this->severity = $severity;
        $this->error = $error;
        $this->codeProperty = $codeProperty;
        $this->messageProperty = $messageProperty;
        $this->referenceId = $referenceId;
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Severity.
     * Error Severity
     */
    public function getSeverity(): string
    {
        return $this->severity;
    }

    /**
     * Sets Severity.
     * Error Severity
     *
     * @required
     * @maps severity
     */
    public function setSeverity(string $severity): void
    {
        $this->severity = $severity;
    }

    /**
     * Returns Error.
     * Error Code Name
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     * Error Code Name
     *
     * @required
     * @maps error
     */
    public function setError(string $error): void
    {
        $this->error = $error;
    }

    /**
     * Returns Code Property.
     * Error Code Number
     */
    public function getCodeProperty(): float
    {
        return $this->codeProperty;
    }

    /**
     * Sets Code Property.
     * Error Code Number
     *
     * @required
     * @maps code
     */
    public function setCodeProperty(float $codeProperty): void
    {
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Message Property.
     * Description of the error.
     */
    public function getMessageProperty(): string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     * Description of the error.
     *
     * @required
     * @maps message
     */
    public function setMessageProperty(string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }

    /**
     * Returns Reference Id.
     * Reference ID for issue tracking.
     */
    public function getReferenceId(): string
    {
        return $this->referenceId;
    }

    /**
     * Sets Reference Id.
     * Reference ID for issue tracking.
     *
     * @required
     * @maps referenceId
     */
    public function setReferenceId(string $referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    /**
     * Returns Timestamp.
     * Timestamp of when the error occurred.
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     * Timestamp of when the error occurred.
     *
     * @required
     * @maps timestamp
     */
    public function setTimestamp(string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Request Ref.
     * Request reference for issue tracking.
     */
    public function getRequestRef(): ?string
    {
        return $this->requestRef;
    }

    /**
     * Sets Request Ref.
     * Request reference for issue tracking.
     *
     * @maps requestRef
     */
    public function setRequestRef(?string $requestRef): void
    {
        $this->requestRef = $requestRef;
    }

    /**
     * Converts the ApiErrorResultException object to a human-readable string representation.
     *
     * @return string The string representation of the ApiErrorResultException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApiErrorResultException',
            [
                'severity' => $this->severity,
                'error' => $this->error,
                'codeProperty' => $this->codeProperty,
                'messageProperty' => $this->messageProperty,
                'referenceId' => $this->referenceId,
                'timestamp' => $this->timestamp,
                'requestRef' => $this->requestRef,
                'additionalProperties' => $this->additionalProperties
            ],
            parent::__toString()
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }
}
