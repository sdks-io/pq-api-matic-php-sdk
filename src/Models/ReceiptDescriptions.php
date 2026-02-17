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

class ReceiptDescriptions implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $language;

    /**
     * @var string|null
     */
    private $translation;

    /**
     * Returns Language.
     * The [Language](#/rest/models/structures/language) type in IETF's BCP 47 format
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Sets Language.
     * The [Language](#/rest/models/structures/language) type in IETF's BCP 47 format
     *
     * @maps language
     * @factory \PayQuickerSDKLib\Models\Languages::checkValue
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * Returns Translation.
     * Description translated to the indicated language
     */
    public function getTranslation(): ?string
    {
        return $this->translation;
    }

    /**
     * Sets Translation.
     * Description translated to the indicated language
     *
     * @maps translation
     */
    public function setTranslation(?string $translation): void
    {
        $this->translation = $translation;
    }

    /**
     * Converts the ReceiptDescriptions object to a human-readable string representation.
     *
     * @return string The string representation of the ReceiptDescriptions object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ReceiptDescriptions',
            [
                'language' => $this->language,
                'translation' => $this->translation,
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
        if (isset($this->language)) {
            $json['language']    = Languages::checkValue($this->language);
        }
        if (isset($this->translation)) {
            $json['translation'] = $this->translation;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
