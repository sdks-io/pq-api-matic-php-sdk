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

class UserEventResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $token;

    /**
     * @var bool|null
     */
    private $canBeCancelled;

    /**
     * @var string|null
     */
    private $eventRequirementCategoryType;

    /**
     * @var string|null
     */
    private $eventRequirementType;

    /**
     * @var string|null
     */
    private $eventStatus;

    /**
     * @var string|null
     */
    private $eventType;

    /**
     * @var bool|null
     */
    private $isComplete;

    /**
     * @var string|null
     */
    private $userAction;

    /**
     * @var string|null
     */
    private $userImpact;

    /**
     * @var string
     */
    private $event;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

    /**
     * @var MetadataItems|null
     */
    private $meta;

    /**
     * @param string $event
     */
    public function __construct(string $event)
    {
        $this->event = $event;
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
     * Returns Can Be Cancelled.
     */
    public function getCanBeCancelled(): ?bool
    {
        return $this->canBeCancelled;
    }

    /**
     * Sets Can Be Cancelled.
     *
     * @maps canBeCancelled
     */
    public function setCanBeCancelled(?bool $canBeCancelled): void
    {
        $this->canBeCancelled = $canBeCancelled;
    }

    /**
     * Returns Event Requirement Category Type.
     */
    public function getEventRequirementCategoryType(): ?string
    {
        return $this->eventRequirementCategoryType;
    }

    /**
     * Sets Event Requirement Category Type.
     *
     * @maps eventRequirementCategoryType
     * @factory \PayQuickerSDKLib\Models\EventRequirementCategories::checkValue
     */
    public function setEventRequirementCategoryType(?string $eventRequirementCategoryType): void
    {
        $this->eventRequirementCategoryType = $eventRequirementCategoryType;
    }

    /**
     * Returns Event Requirement Type.
     */
    public function getEventRequirementType(): ?string
    {
        return $this->eventRequirementType;
    }

    /**
     * Sets Event Requirement Type.
     *
     * @maps eventRequirementType
     * @factory \PayQuickerSDKLib\Models\EventRequirements::checkValue
     */
    public function setEventRequirementType(?string $eventRequirementType): void
    {
        $this->eventRequirementType = $eventRequirementType;
    }

    /**
     * Returns Event Status.
     * Indicates the current verification status type of an event.
     */
    public function getEventStatus(): ?string
    {
        return $this->eventStatus;
    }

    /**
     * Sets Event Status.
     * Indicates the current verification status type of an event.
     *
     * @maps eventStatus
     * @factory \PayQuickerSDKLib\Models\EventStatuses::checkValue
     */
    public function setEventStatus(?string $eventStatus): void
    {
        $this->eventStatus = $eventStatus;
    }

    /**
     * Returns Event Type.
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * Sets Event Type.
     *
     * @maps eventType
     * @factory \PayQuickerSDKLib\Models\EventTypes::checkValue
     */
    public function setEventType(?string $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * Returns Is Complete.
     */
    public function getIsComplete(): ?bool
    {
        return $this->isComplete;
    }

    /**
     * Sets Is Complete.
     *
     * @maps isComplete
     */
    public function setIsComplete(?bool $isComplete): void
    {
        $this->isComplete = $isComplete;
    }

    /**
     * Returns User Action.
     */
    public function getUserAction(): ?string
    {
        return $this->userAction;
    }

    /**
     * Sets User Action.
     *
     * @maps userAction
     * @factory \PayQuickerSDKLib\Models\UserAction::checkValue
     */
    public function setUserAction(?string $userAction): void
    {
        $this->userAction = $userAction;
    }

    /**
     * Returns User Impact.
     */
    public function getUserImpact(): ?string
    {
        return $this->userImpact;
    }

    /**
     * Sets User Impact.
     *
     * @maps userImpact
     * @factory \PayQuickerSDKLib\Models\UserImpact::checkValue
     */
    public function setUserImpact(?string $userImpact): void
    {
        $this->userImpact = $userImpact;
    }

    /**
     * Returns Event.
     * The type of Registration tied to a particular event
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * Sets Event.
     * The type of Registration tied to a particular event
     *
     * @required
     * @maps event
     * @factory \PayQuickerSDKLib\Models\EventCategoryTypes::checkValue
     */
    public function setEvent(string $event): void
    {
        $this->event = $event;
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
     * Converts the UserEventResult object to a human-readable string representation.
     *
     * @return string The string representation of the UserEventResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UserEventResult',
            [
                'token' => $this->token,
                'canBeCancelled' => $this->canBeCancelled,
                'eventRequirementCategoryType' => $this->eventRequirementCategoryType,
                'eventRequirementType' => $this->eventRequirementType,
                'eventStatus' => $this->eventStatus,
                'eventType' => $this->eventType,
                'isComplete' => $this->isComplete,
                'userAction' => $this->userAction,
                'userImpact' => $this->userImpact,
                'event' => $this->event,
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
            $json['token']                        = $this->token;
        }
        if (isset($this->canBeCancelled)) {
            $json['canBeCancelled']               = $this->canBeCancelled;
        }
        if (isset($this->eventRequirementCategoryType)) {
            $json['eventRequirementCategoryType'] =
                EventRequirementCategories::checkValue(
                    $this->eventRequirementCategoryType
                );
        }
        if (isset($this->eventRequirementType)) {
            $json['eventRequirementType']         = EventRequirements::checkValue($this->eventRequirementType);
        }
        if (isset($this->eventStatus)) {
            $json['eventStatus']                  = EventStatuses::checkValue($this->eventStatus);
        }
        if (isset($this->eventType)) {
            $json['eventType']                    = EventTypes::checkValue($this->eventType);
        }
        if (isset($this->isComplete)) {
            $json['isComplete']                   = $this->isComplete;
        }
        if (isset($this->userAction)) {
            $json['userAction']                   = UserAction::checkValue($this->userAction);
        }
        if (isset($this->userImpact)) {
            $json['userImpact']                   = UserImpact::checkValue($this->userImpact);
        }
        $json['event']                            = EventCategoryTypes::checkValue($this->event);
        if (isset($this->links)) {
            $json['links']                        = $this->links;
        }
        if (isset($this->meta)) {
            $json['meta']                         = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
