<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models;

use PayQuickerSDKLib\ApiHelper;
use stdClass;

class UserDocumentRequirementItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $countryOfBirth;

    /**
     * @var string|null
     */
    private $countryOfNationality;

    /**
     * @var UserDocumentRequirementItemDocumentsItems[]|null
     */
    private $documents;

    /**
     * Returns Country of Birth.
     */
    public function getCountryOfBirth(): ?string
    {
        return $this->countryOfBirth;
    }

    /**
     * Sets Country of Birth.
     *
     * @maps countryOfBirth
     */
    public function setCountryOfBirth(?string $countryOfBirth): void
    {
        $this->countryOfBirth = $countryOfBirth;
    }

    /**
     * Returns Country of Nationality.
     */
    public function getCountryOfNationality(): ?string
    {
        return $this->countryOfNationality;
    }

    /**
     * Sets Country of Nationality.
     *
     * @maps countryOfNationality
     */
    public function setCountryOfNationality(?string $countryOfNationality): void
    {
        $this->countryOfNationality = $countryOfNationality;
    }

    /**
     * Returns Documents.
     *
     * @return UserDocumentRequirementItemDocumentsItems[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Sets Documents.
     *
     * @maps documents
     *
     * @param UserDocumentRequirementItemDocumentsItems[]|null $documents
     */
    public function setDocuments(?array $documents): void
    {
        $this->documents = $documents;
    }

    /**
     * Converts the UserDocumentRequirementItem object to a human-readable string representation.
     *
     * @return string The string representation of the UserDocumentRequirementItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UserDocumentRequirementItem',
            [
                'countryOfBirth' => $this->countryOfBirth,
                'countryOfNationality' => $this->countryOfNationality,
                'documents' => $this->documents,
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
        if (isset($this->countryOfBirth)) {
            $json['countryOfBirth']       = $this->countryOfBirth;
        }
        if (isset($this->countryOfNationality)) {
            $json['countryOfNationality'] = $this->countryOfNationality;
        }
        if (isset($this->documents)) {
            $json['documents']            = $this->documents;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
