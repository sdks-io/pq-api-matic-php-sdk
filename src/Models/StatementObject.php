<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models;

use PayQuickerSDKLib\ApiHelper;
use PayQuickerSDKLib\Utils\DateTimeHelper;
use stdClass;

/**
 * TODO: Make prepaidCardToken optional
 */
class StatementObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $fileContents;

    /**
     * @var string|null
     */
    private $filename;

    /**
     * @var string|null
     */
    private $mimeType;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $userToken;

    /**
     * @var string|null
     */
    private $prepaidCardToken;

    /**
     * @var \DateTime|null
     */
    private $from;

    /**
     * @var \DateTime|null
     */
    private $to;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

    /**
     * Returns File Contents.
     * The string representation of the file content.
     */
    public function getFileContents(): ?string
    {
        return $this->fileContents;
    }

    /**
     * Sets File Contents.
     * The string representation of the file content.
     *
     * @maps fileContents
     */
    public function setFileContents(?string $fileContents): void
    {
        $this->fileContents = $fileContents;
    }

    /**
     * Returns Filename.
     * The name given to a computer file in order to distinguish it from other files
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * Sets Filename.
     * The name given to a computer file in order to distinguish it from other files
     *
     * @maps filename
     */
    public function setFilename(?string $filename): void
    {
        $this->filename = $filename;
    }

    /**
     * Returns Mime Type.
     * A label used to identify a type of data.  Acts like a file extension on the internet.
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * Sets Mime Type.
     * A label used to identify a type of data.  Acts like a file extension on the internet.
     *
     * @maps mimeType
     */
    public function setMimeType(?string $mimeType): void
    {
        $this->mimeType = $mimeType;
    }

    /**
     * Returns Token.
     * [Token](#/rest/models/structures/token) representing the resource
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * [Token](#/rest/models/structures/token) representing the resource
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns User Token.
     * Auto-generated unique identifier representing a user, prefixed with `user-`.
     */
    public function getUserToken(): ?string
    {
        return $this->userToken;
    }

    /**
     * Sets User Token.
     * Auto-generated unique identifier representing a user, prefixed with `user-`.
     *
     * @maps userToken
     */
    public function setUserToken(?string $userToken): void
    {
        $this->userToken = $userToken;
    }

    /**
     * Returns Prepaid Card Token.
     * Auto-generated unique identifier representing a dest, prefixed with dest-.
     */
    public function getPrepaidCardToken(): ?string
    {
        return $this->prepaidCardToken;
    }

    /**
     * Sets Prepaid Card Token.
     * Auto-generated unique identifier representing a dest, prefixed with dest-.
     *
     * @maps prepaidCardToken
     */
    public function setPrepaidCardToken(?string $prepaidCardToken): void
    {
        $this->prepaidCardToken = $prepaidCardToken;
    }

    /**
     * Returns From.
     * Beginning date and time of a prepaid card statement
     */
    public function getFrom(): ?\DateTime
    {
        return $this->from;
    }

    /**
     * Sets From.
     * Beginning date and time of a prepaid card statement
     *
     * @maps from
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setFrom(?\DateTime $from): void
    {
        $this->from = $from;
    }

    /**
     * Returns To.
     * Ending date and time of a prepaid card statement
     */
    public function getTo(): ?\DateTime
    {
        return $this->to;
    }

    /**
     * Sets To.
     * Ending date and time of a prepaid card statement
     *
     * @maps to
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTo(?\DateTime $to): void
    {
        $this->to = $to;
    }

    /**
     * Returns Links.
     *
     * @return HateoasSelfRef[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     *
     * @maps links
     *
     * @param HateoasSelfRef[]|null $links
     */
    public function setLinks(?array $links): void
    {
        $this->links = $links;
    }

    /**
     * Converts the StatementObject object to a human-readable string representation.
     *
     * @return string The string representation of the StatementObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'StatementObject',
            [
                'fileContents' => $this->fileContents,
                'filename' => $this->filename,
                'mimeType' => $this->mimeType,
                'token' => $this->token,
                'userToken' => $this->userToken,
                'prepaidCardToken' => $this->prepaidCardToken,
                'from' => $this->from,
                'to' => $this->to,
                'links' => $this->links,
                'additionalProperties' => $this->additionalProperties
            ]
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

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->fileContents)) {
            $json['fileContents']     = $this->fileContents;
        }
        if (isset($this->filename)) {
            $json['filename']         = $this->filename;
        }
        if (isset($this->mimeType)) {
            $json['mimeType']         = $this->mimeType;
        }
        if (isset($this->token)) {
            $json['token']            = $this->token;
        }
        if (isset($this->userToken)) {
            $json['userToken']        = $this->userToken;
        }
        if (isset($this->prepaidCardToken)) {
            $json['prepaidCardToken'] = $this->prepaidCardToken;
        }
        if (isset($this->from)) {
            $json['from']             = DateTimeHelper::toRfc3339DateTime($this->from);
        }
        if (isset($this->to)) {
            $json['to']               = DateTimeHelper::toRfc3339DateTime($this->to);
        }
        if (isset($this->links)) {
            $json['links']            = $this->links;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
