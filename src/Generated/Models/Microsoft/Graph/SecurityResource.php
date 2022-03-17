<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityResource implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $resource Name of the resource that is related to current alert. Required. */
    private ?string $resource = null;
    
    /** @var SecurityResourceType|null $resourceType Represents type of security resources related to an alert. Possible values are: attacked, related. */
    private ?SecurityResourceType $resourceType = null;
    
    /**
     * Instantiates a new securityResource and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityResource
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SecurityResource {
        return new SecurityResource();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'resource' => function (self $o, ParseNode $n) { $o->setResource($n->getStringValue()); },
            'resourceType' => function (self $o, ParseNode $n) { $o->setResourceType($n->getEnumValue(SecurityResourceType::class)); },
        ];
    }

    /**
     * Gets the resource property value. Name of the resource that is related to current alert. Required.
     * @return string|null
    */
    public function getResource(): ?string {
        return $this->resource;
    }

    /**
     * Gets the resourceType property value. Represents type of security resources related to an alert. Possible values are: attacked, related.
     * @return SecurityResourceType|null
    */
    public function getResourceType(): ?SecurityResourceType {
        return $this->resourceType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('resource', $this->resource);
        $writer->writeEnumValue('resourceType', $this->resourceType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the resource property value. Name of the resource that is related to current alert. Required.
     *  @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceType property value. Represents type of security resources related to an alert. Possible values are: attacked, related.
     *  @param SecurityResourceType|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?SecurityResourceType $value ): void {
        $this->resourceType = $value;
    }

}
