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
 * Response from a payment job request
 */
class PaymentJobObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $portalId;

    /**
     * @var string|null
     */
    private $filename;

    /**
     * @var string|null
     */
    private $fileToken = 'docu-2053aaad-c1a5-45e2-a2da-f71287f32800';

    /**
     * @var \DateTime|null
     */
    private $created;

    /**
     * @var \DateTime|null
     */
    private $notBefore;

    /**
     * @var int|null
     */
    private $count;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var PaymentObject[]|null
     */
    private $items;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

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
     * Returns Portal Id.
     * Reference ID in the PayQuicker Hosted Portal, if applicable.
     */
    public function getPortalId(): ?string
    {
        return $this->portalId;
    }

    /**
     * Sets Portal Id.
     * Reference ID in the PayQuicker Hosted Portal, if applicable.
     *
     * @maps portalId
     */
    public function setPortalId(?string $portalId): void
    {
        $this->portalId = $portalId;
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
     * Returns File Token.
     * [Token](#/rest/models/structures/token) representing the document
     */
    public function getFileToken(): ?string
    {
        return $this->fileToken;
    }

    /**
     * Sets File Token.
     * [Token](#/rest/models/structures/token) representing the document
     *
     * @maps fileToken
     */
    public function setFileToken(?string $fileToken): void
    {
        $this->fileToken = $fileToken;
    }

    /**
     * Returns Created.
     * Time object was [created](#/rest/models/structures/created-on)
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * Sets Created.
     * Time object was [created](#/rest/models/structures/created-on)
     *
     * @maps created
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreated(?\DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * Returns Not Before.
     * [Transfer](#/rest/models/structures/not-before-or-after) is scheduled and will not process before
     * this time.
     */
    public function getNotBefore(): ?\DateTime
    {
        return $this->notBefore;
    }

    /**
     * Sets Not Before.
     * [Transfer](#/rest/models/structures/not-before-or-after) is scheduled and will not process before
     * this time.
     *
     * @maps notBefore
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNotBefore(?\DateTime $notBefore): void
    {
        $this->notBefore = $notBefore;
    }

    /**
     * Returns Count.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Sets Count.
     *
     * @maps count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Type.
     * Job Types
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Job Types
     *
     * @maps type
     * @factory \PayQuickerSDKLib\Models\JobTypes::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Status.
     * Job Status Types
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Job Status Types
     *
     * @maps status
     * @factory \PayQuickerSDKLib\Models\JobStatusTypes::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Items.
     *
     * @return PaymentObject[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     *
     * @maps items
     *
     * @param PaymentObject[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
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
     * Converts the PaymentJobObject object to a human-readable string representation.
     *
     * @return string The string representation of the PaymentJobObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaymentJobObject',
            [
                'token' => $this->token,
                'portalId' => $this->portalId,
                'filename' => $this->filename,
                'fileToken' => $this->fileToken,
                'created' => $this->created,
                'notBefore' => $this->notBefore,
                'count' => $this->count,
                'type' => $this->type,
                'status' => $this->status,
                'items' => $this->items,
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
        if (isset($this->token)) {
            $json['token']     = $this->token;
        }
        if (isset($this->portalId)) {
            $json['portalId']  = $this->portalId;
        }
        if (isset($this->filename)) {
            $json['filename']  = $this->filename;
        }
        if (isset($this->fileToken)) {
            $json['fileToken'] = $this->fileToken;
        }
        if (isset($this->created)) {
            $json['created']   = DateTimeHelper::toRfc3339DateTime($this->created);
        }
        if (isset($this->notBefore)) {
            $json['notBefore'] = DateTimeHelper::toRfc3339DateTime($this->notBefore);
        }
        if (isset($this->count)) {
            $json['count']     = $this->count;
        }
        if (isset($this->type)) {
            $json['type']      = JobTypes::checkValue($this->type);
        }
        if (isset($this->status)) {
            $json['status']    = JobStatusTypes::checkValue($this->status);
        }
        if (isset($this->items)) {
            $json['items']     = $this->items;
        }
        if (isset($this->links)) {
            $json['links']     = $this->links;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
