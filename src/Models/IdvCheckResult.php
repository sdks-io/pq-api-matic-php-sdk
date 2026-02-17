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

class IdvCheckResult implements \JsonSerializable
{
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
    private $idvProviderReference;

    /**
     * @var string|null
     */
    private $idvResult;

    /**
     * @var string|null
     */
    private $idvSubResult;

    /**
     * @var string|null
     */
    private $idvProvider;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var string|null
     */
    private $raw;

    /**
     * @var string|null
     */
    private $idvCheckType;

    /**
     * @var string|null
     */
    private $idvDisposition;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

    /**
     * @var MetadataItems|null
     */
    private $meta;

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
     * [Token](#/rest/models/structures/token) representing the resource
     */
    public function getUserToken(): ?string
    {
        return $this->userToken;
    }

    /**
     * Sets User Token.
     * [Token](#/rest/models/structures/token) representing the resource
     *
     * @maps userToken
     */
    public function setUserToken(?string $userToken): void
    {
        $this->userToken = $userToken;
    }

    /**
     * Returns Idv Provider Reference.
     * [Provider reference](#/rest/models/structures/identity-verification-provider-reference) used for
     * performing identity checks for the provider
     */
    public function getIdvProviderReference(): ?string
    {
        return $this->idvProviderReference;
    }

    /**
     * Sets Idv Provider Reference.
     * [Provider reference](#/rest/models/structures/identity-verification-provider-reference) used for
     * performing identity checks for the provider
     *
     * @maps idvProviderReference
     */
    public function setIdvProviderReference(?string $idvProviderReference): void
    {
        $this->idvProviderReference = $idvProviderReference;
    }

    /**
     * Returns Idv Result.
     * Result type of [verification](#/rest/models/structures/identity-verification-result-type)
     */
    public function getIdvResult(): ?string
    {
        return $this->idvResult;
    }

    /**
     * Sets Idv Result.
     * Result type of [verification](#/rest/models/structures/identity-verification-result-type)
     *
     * @maps idvResult
     * @factory \PayQuickerSDKLib\Models\IdentityVerificationResultTypes::checkValue
     */
    public function setIdvResult(?string $idvResult): void
    {
        $this->idvResult = $idvResult;
    }

    /**
     * Returns Idv Sub Result.
     * Sub result type of [verification](#/rest/models/structures/identity-verification-sub-result-type)
     */
    public function getIdvSubResult(): ?string
    {
        return $this->idvSubResult;
    }

    /**
     * Sets Idv Sub Result.
     * Sub result type of [verification](#/rest/models/structures/identity-verification-sub-result-type)
     *
     * @maps idvSubResult
     * @factory \PayQuickerSDKLib\Models\IdentityVerificationResultSubTypes::checkValue
     */
    public function setIdvSubResult(?string $idvSubResult): void
    {
        $this->idvSubResult = $idvSubResult;
    }

    /**
     * Returns Idv Provider.
     * Provider types of [verification](#/rest/models/structures/identity-verification-provider-type) that
     * can be used for performing identity checks
     */
    public function getIdvProvider(): ?string
    {
        return $this->idvProvider;
    }

    /**
     * Sets Idv Provider.
     * Provider types of [verification](#/rest/models/structures/identity-verification-provider-type) that
     * can be used for performing identity checks
     *
     * @maps idvProvider
     * @factory \PayQuickerSDKLib\Models\IdentityVerificationProviders::checkValue
     */
    public function setIdvProvider(?string $idvProvider): void
    {
        $this->idvProvider = $idvProvider;
    }

    /**
     * Returns Created On.
     * Time object was [created](#/rest/models/structures/created-on)
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Time object was [created](#/rest/models/structures/created-on)
     *
     * @maps createdOn
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Raw.
     * Contains the raw (unprocessed) [output](/#/rest/models/structures/identity-verification-provider-raw-
     * output) from the IDV provider
     */
    public function getRaw(): ?string
    {
        return $this->raw;
    }

    /**
     * Sets Raw.
     * Contains the raw (unprocessed) [output](/#/rest/models/structures/identity-verification-provider-raw-
     * output) from the IDV provider
     *
     * @maps raw
     */
    public function setRaw(?string $raw): void
    {
        $this->raw = $raw;
    }

    /**
     * Returns Idv Check Type.
     * [Type](#/rest/models/structures/identity-verification-check-type) of verification used for
     * performing an identity check
     */
    public function getIdvCheckType(): ?string
    {
        return $this->idvCheckType;
    }

    /**
     * Sets Idv Check Type.
     * [Type](#/rest/models/structures/identity-verification-check-type) of verification used for
     * performing an identity check
     *
     * @maps idvCheckType
     */
    public function setIdvCheckType(?string $idvCheckType): void
    {
        $this->idvCheckType = $idvCheckType;
    }

    /**
     * Returns Idv Disposition.
     * Disposition type of [verification](#/rest/models/structures/identity-verification-disposition-type)
     */
    public function getIdvDisposition(): ?string
    {
        return $this->idvDisposition;
    }

    /**
     * Sets Idv Disposition.
     * Disposition type of [verification](#/rest/models/structures/identity-verification-disposition-type)
     *
     * @maps idvDisposition
     */
    public function setIdvDisposition(?string $idvDisposition): void
    {
        $this->idvDisposition = $idvDisposition;
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
     * Returns Meta.
     */
    public function getMeta(): ?MetadataItems
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?MetadataItems $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Converts the IdvCheckResult object to a human-readable string representation.
     *
     * @return string The string representation of the IdvCheckResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'IdvCheckResult',
            [
                'token' => $this->token,
                'userToken' => $this->userToken,
                'idvProviderReference' => $this->idvProviderReference,
                'idvResult' => $this->idvResult,
                'idvSubResult' => $this->idvSubResult,
                'idvProvider' => $this->idvProvider,
                'createdOn' => $this->createdOn,
                'raw' => $this->raw,
                'idvCheckType' => $this->idvCheckType,
                'idvDisposition' => $this->idvDisposition,
                'links' => $this->links,
                'meta' => $this->meta,
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
        if (isset($this->token)) {
            $json['token']                = $this->token;
        }
        if (isset($this->userToken)) {
            $json['userToken']            = $this->userToken;
        }
        if (isset($this->idvProviderReference)) {
            $json['idvProviderReference'] = $this->idvProviderReference;
        }
        if (isset($this->idvResult)) {
            $json['idvResult']            = IdentityVerificationResultTypes::checkValue($this->idvResult);
        }
        if (isset($this->idvSubResult)) {
            $json['idvSubResult']         = IdentityVerificationResultSubTypes::checkValue($this->idvSubResult);
        }
        if (isset($this->idvProvider)) {
            $json['idvProvider']          = IdentityVerificationProviders::checkValue($this->idvProvider);
        }
        if (isset($this->createdOn)) {
            $json['createdOn']            = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->raw)) {
            $json['raw']                  = $this->raw;
        }
        if (isset($this->idvCheckType)) {
            $json['idvCheckType']         = $this->idvCheckType;
        }
        if (isset($this->idvDisposition)) {
            $json['idvDisposition']       = $this->idvDisposition;
        }
        if (isset($this->links)) {
            $json['links']                = $this->links;
        }
        if (isset($this->meta)) {
            $json['meta']                 = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
