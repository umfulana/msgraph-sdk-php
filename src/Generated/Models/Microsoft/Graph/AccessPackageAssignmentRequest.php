<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentRequest extends Entity 
{
    /** @var AccessPackage|null $accessPackage The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand. */
    private ?AccessPackage $accessPackage = null;
    
    /** @var AccessPackageAssignment|null $assignment For a requestType of UserAdd or AdminAdd, this is an access package assignment requested to be created.  For a requestType of UserRemove, AdminRemove or SystemRemove, this has the id property of an existing assignment to be removed.   Supports $expand. */
    private ?AccessPackageAssignment $assignment = null;
    
    /** @var DateTime|null $completedDateTime The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    private ?DateTime $completedDateTime = null;
    
    /** @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    private ?DateTime $createdDateTime = null;
    
    /** @var AccessPackageSubject|null $requestor The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand. */
    private ?AccessPackageSubject $requestor = null;
    
    /** @var AccessPackageRequestType|null $requestType The type of the request. The possible values are: notSpecified, userAdd, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd, unknownFutureValue. A request from the user themselves would have requestType of UserAdd or UserRemove. This property cannot be changed once set. */
    private ?AccessPackageRequestType $requestType = null;
    
    /** @var EntitlementManagementSchedule|null $schedule The range of dates that access is to be assigned to the requestor. This property cannot be changed once set. */
    private ?EntitlementManagementSchedule $schedule = null;
    
    /** @var AccessPackageRequestState|null $state The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only. */
    private ?AccessPackageRequestState $state = null;
    
    /** @var string|null $status More information on the request processing status. Read-only. */
    private ?string $status = null;
    
    /**
     * Instantiates a new accessPackageAssignmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequest
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequest {
        return new AccessPackageAssignmentRequest();
    }

    /**
     * Gets the accessPackage property value. The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        return $this->accessPackage;
    }

    /**
     * Gets the assignment property value. For a requestType of UserAdd or AdminAdd, this is an access package assignment requested to be created.  For a requestType of UserRemove, AdminRemove or SystemRemove, this has the id property of an existing assignment to be removed.   Supports $expand.
     * @return AccessPackageAssignment|null
    */
    public function getAssignment(): ?AccessPackageAssignment {
        return $this->assignment;
    }

    /**
     * Gets the completedDateTime property value. The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => function (self $o, ParseNode $n) { $o->setAccessPackage($n->getObjectValue(AccessPackage::class)); },
            'assignment' => function (self $o, ParseNode $n) { $o->setAssignment($n->getObjectValue(AccessPackageAssignment::class)); },
            'completedDateTime' => function (self $o, ParseNode $n) { $o->setCompletedDateTime($n->getDateTimeValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'requestor' => function (self $o, ParseNode $n) { $o->setRequestor($n->getObjectValue(AccessPackageSubject::class)); },
            'requestType' => function (self $o, ParseNode $n) { $o->setRequestType($n->getEnumValue(AccessPackageRequestType::class)); },
            'schedule' => function (self $o, ParseNode $n) { $o->setSchedule($n->getObjectValue(EntitlementManagementSchedule::class)); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(AccessPackageRequestState::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the requestor property value. The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     * @return AccessPackageSubject|null
    */
    public function getRequestor(): ?AccessPackageSubject {
        return $this->requestor;
    }

    /**
     * Gets the requestType property value. The type of the request. The possible values are: notSpecified, userAdd, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd, unknownFutureValue. A request from the user themselves would have requestType of UserAdd or UserRemove. This property cannot be changed once set.
     * @return AccessPackageRequestType|null
    */
    public function getRequestType(): ?AccessPackageRequestType {
        return $this->requestType;
    }

    /**
     * Gets the schedule property value. The range of dates that access is to be assigned to the requestor. This property cannot be changed once set.
     * @return EntitlementManagementSchedule|null
    */
    public function getSchedule(): ?EntitlementManagementSchedule {
        return $this->schedule;
    }

    /**
     * Gets the state property value. The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only.
     * @return AccessPackageRequestState|null
    */
    public function getState(): ?AccessPackageRequestState {
        return $this->state;
    }

    /**
     * Gets the status property value. More information on the request processing status. Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->accessPackage);
        $writer->writeObjectValue('assignment', $this->assignment);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('requestor', $this->requestor);
        $writer->writeEnumValue('requestType', $this->requestType);
        $writer->writeObjectValue('schedule', $this->schedule);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the accessPackage property value. The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value ): void {
        $this->accessPackage = $value;
    }

    /**
     * Sets the assignment property value. For a requestType of UserAdd or AdminAdd, this is an access package assignment requested to be created.  For a requestType of UserRemove, AdminRemove or SystemRemove, this has the id property of an existing assignment to be removed.   Supports $expand.
     *  @param AccessPackageAssignment|null $value Value to set for the assignment property.
    */
    public function setAssignment(?AccessPackageAssignment $value ): void {
        $this->assignment = $value;
    }

    /**
     * Sets the completedDateTime property value. The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the requestor property value. The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     *  @param AccessPackageSubject|null $value Value to set for the requestor property.
    */
    public function setRequestor(?AccessPackageSubject $value ): void {
        $this->requestor = $value;
    }

    /**
     * Sets the requestType property value. The type of the request. The possible values are: notSpecified, userAdd, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd, unknownFutureValue. A request from the user themselves would have requestType of UserAdd or UserRemove. This property cannot be changed once set.
     *  @param AccessPackageRequestType|null $value Value to set for the requestType property.
    */
    public function setRequestType(?AccessPackageRequestType $value ): void {
        $this->requestType = $value;
    }

    /**
     * Sets the schedule property value. The range of dates that access is to be assigned to the requestor. This property cannot be changed once set.
     *  @param EntitlementManagementSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?EntitlementManagementSchedule $value ): void {
        $this->schedule = $value;
    }

    /**
     * Sets the state property value. The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only.
     *  @param AccessPackageRequestState|null $value Value to set for the state property.
    */
    public function setState(?AccessPackageRequestState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the status property value. More information on the request processing status. Read-only.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
