<?php

namespace Generated\Schema;

use JsonSerializable;

class SaveWebhookConfig implements SerializableInterface, JsonSerializable
{
    public const ROUTIGO_EVENT_STOP_DONE = 'STOP_DONE';
    public const ROUTIGO_EVENT_TOUR_PLANNED = 'TOUR_PLANNED';
    public const ROUTIGO_EVENT_TOUR_ASSIGNED = 'TOUR_ASSIGNED';
    public const ROUTIGO_EVENT_TOUR_UNASSIGNED = 'TOUR_UNASSIGNED';
    public const ROUTIGO_EVENT_TOUR_STARTED = 'TOUR_STARTED';
    public const ROUTIGO_EVENT_TOUR_FINISHED = 'TOUR_FINISHED';
    public const ROUTIGO_EVENT_SHIPMENT_DONE = 'SHIPMENT_DONE';
    public const ROUTIGO_EVENT_ASSIGNMENT_ARRIVED = 'ASSIGNMENT_ARRIVED';
    public const ROUTIGO_EVENT_ASSIGNMENT_DONE = 'ASSIGNMENT_DONE';
    public const ROUTIGO_EVENT_STOP_ARRIVED = 'STOP_ARRIVED';
    public const ROUTIGO_EVENT_TYPE_TOUR = 'TOUR';
    public const ROUTIGO_EVENT_TYPE_STOP = 'STOP';
    public const ROUTIGO_EVENT_TYPE_SHIPMENT = 'SHIPMENT';
    public const ROUTIGO_EVENT_TYPE_ASSIGNMENT = 'ASSIGNMENT';
    private string $routigoEvent;
    private string $routigoEventType;
    private ?array $serviceCentres = null;
    private EndpointNotificationAction $action;
    private array $optionalPropertyChanged = array('serviceCentres' => false);
    /**
     * @param string $routigoEvent
     * @param string $routigoEventType
     * @param EndpointNotificationAction $action
    */
    public function __construct(string $routigoEvent, string $routigoEventType, EndpointNotificationAction $action)
    {
        $this->routigoEvent = $routigoEvent;
        $this->routigoEventType = $routigoEventType;
        $this->action = $action;
    }
    /**
     * @param string[] $serviceCentres
     * @return self
    */
    public function setServiceCentres(array $serviceCentres) : self
    {
        $this->serviceCentres = $serviceCentres;
        $this->optionalPropertyChanged['serviceCentres'] = true;
        return $this;
    }
    /**
     * @return bool
    */
    public function hasServiceCentres() : bool
    {
        return $this->optionalPropertyChanged['serviceCentres'];
    }
    /**
     * @return string
    */
    public function getRoutigoEvent() : string
    {
        return $this->routigoEvent;
    }
    /**
     * @return string
    */
    public function getRoutigoEventType() : string
    {
        return $this->routigoEventType;
    }
    /**
     * @return string[]|null
    */
    public function getServiceCentres() : ?array
    {
        return $this->serviceCentres;
    }
    /**
     * @return EndpointNotificationAction
    */
    public function getAction() : EndpointNotificationAction
    {
        return $this->action;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        $fields = array();
        $fields['routigoEvent'] = $this->routigoEvent;
        $fields['routigoEventType'] = $this->routigoEventType;
        if ($this->hasServiceCentres()) {
            $fields['serviceCentres'] = $this->serviceCentres;
        }
        $fields['action'] = $this->action->toArray();
        return $fields;
    }
    /**
     * @return array
    */
    public function jsonSerialize() : array
    {
        return $this->toArray();
    }
}
