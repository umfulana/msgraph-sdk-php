<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Reject;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\RejectReason;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RejectRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $callbackUri  */
    private ?string $callbackUri = null;
    
    /** @var RejectReason|null $reason  */
    private ?RejectReason $reason = null;
    
    /**
     * Instantiates a new rejectRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RejectRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RejectRequestBody {
        return new RejectRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the callbackUri property value. 
     * @return string|null
    */
    public function getCallbackUri(): ?string {
        return $this->callbackUri;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'callbackUri' => function (self $o, ParseNode $n) { $o->setCallbackUri($n->getStringValue()); },
            'reason' => function (self $o, ParseNode $n) { $o->setReason($n->getEnumValue(RejectReason::class)); },
        ];
    }

    /**
     * Gets the reason property value. 
     * @return RejectReason|null
    */
    public function getReason(): ?RejectReason {
        return $this->reason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('callbackUri', $this->callbackUri);
        $writer->writeEnumValue('reason', $this->reason);
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
     * Sets the callbackUri property value. 
     *  @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value ): void {
        $this->callbackUri = $value;
    }

    /**
     * Sets the reason property value. 
     *  @param RejectReason|null $value Value to set for the reason property.
    */
    public function setReason(?RejectReason $value ): void {
        $this->reason = $value;
    }

}
