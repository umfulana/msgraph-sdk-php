<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AudioConferencing implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $conferenceId The conference id of the online meeting. */
    private ?string $conferenceId = null;
    
    /** @var string|null $dialinUrl A URL to the externally-accessible web page that contains dial-in information. */
    private ?string $dialinUrl = null;
    
    /** @var string|null $tollFreeNumber  */
    private ?string $tollFreeNumber = null;
    
    /** @var array<string>|null $tollFreeNumbers List of toll-free numbers that are displayed in the meeting invite. */
    private ?array $tollFreeNumbers = null;
    
    /** @var string|null $tollNumber  */
    private ?string $tollNumber = null;
    
    /** @var array<string>|null $tollNumbers List of toll numbers that are displayed in the meeting invite. */
    private ?array $tollNumbers = null;
    
    /**
     * Instantiates a new audioConferencing and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AudioConferencing
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AudioConferencing {
        return new AudioConferencing();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the conferenceId property value. The conference id of the online meeting.
     * @return string|null
    */
    public function getConferenceId(): ?string {
        return $this->conferenceId;
    }

    /**
     * Gets the dialinUrl property value. A URL to the externally-accessible web page that contains dial-in information.
     * @return string|null
    */
    public function getDialinUrl(): ?string {
        return $this->dialinUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'conferenceId' => function (self $o, ParseNode $n) { $o->setConferenceId($n->getStringValue()); },
            'dialinUrl' => function (self $o, ParseNode $n) { $o->setDialinUrl($n->getStringValue()); },
            'tollFreeNumber' => function (self $o, ParseNode $n) { $o->setTollFreeNumber($n->getStringValue()); },
            'tollFreeNumbers' => function (self $o, ParseNode $n) { $o->setTollFreeNumbers($n->getCollectionOfPrimitiveValues()); },
            'tollNumber' => function (self $o, ParseNode $n) { $o->setTollNumber($n->getStringValue()); },
            'tollNumbers' => function (self $o, ParseNode $n) { $o->setTollNumbers($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the tollFreeNumber property value. 
     * @return string|null
    */
    public function getTollFreeNumber(): ?string {
        return $this->tollFreeNumber;
    }

    /**
     * Gets the tollFreeNumbers property value. List of toll-free numbers that are displayed in the meeting invite.
     * @return array<string>|null
    */
    public function getTollFreeNumbers(): ?array {
        return $this->tollFreeNumbers;
    }

    /**
     * Gets the tollNumber property value. 
     * @return string|null
    */
    public function getTollNumber(): ?string {
        return $this->tollNumber;
    }

    /**
     * Gets the tollNumbers property value. List of toll numbers that are displayed in the meeting invite.
     * @return array<string>|null
    */
    public function getTollNumbers(): ?array {
        return $this->tollNumbers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conferenceId', $this->conferenceId);
        $writer->writeStringValue('dialinUrl', $this->dialinUrl);
        $writer->writeStringValue('tollFreeNumber', $this->tollFreeNumber);
        $writer->writeCollectionOfPrimitiveValues('tollFreeNumbers', $this->tollFreeNumbers);
        $writer->writeStringValue('tollNumber', $this->tollNumber);
        $writer->writeCollectionOfPrimitiveValues('tollNumbers', $this->tollNumbers);
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
     * Sets the conferenceId property value. The conference id of the online meeting.
     *  @param string|null $value Value to set for the conferenceId property.
    */
    public function setConferenceId(?string $value ): void {
        $this->conferenceId = $value;
    }

    /**
     * Sets the dialinUrl property value. A URL to the externally-accessible web page that contains dial-in information.
     *  @param string|null $value Value to set for the dialinUrl property.
    */
    public function setDialinUrl(?string $value ): void {
        $this->dialinUrl = $value;
    }

    /**
     * Sets the tollFreeNumber property value. 
     *  @param string|null $value Value to set for the tollFreeNumber property.
    */
    public function setTollFreeNumber(?string $value ): void {
        $this->tollFreeNumber = $value;
    }

    /**
     * Sets the tollFreeNumbers property value. List of toll-free numbers that are displayed in the meeting invite.
     *  @param array<string>|null $value Value to set for the tollFreeNumbers property.
    */
    public function setTollFreeNumbers(?array $value ): void {
        $this->tollFreeNumbers = $value;
    }

    /**
     * Sets the tollNumber property value. 
     *  @param string|null $value Value to set for the tollNumber property.
    */
    public function setTollNumber(?string $value ): void {
        $this->tollNumber = $value;
    }

    /**
     * Sets the tollNumbers property value. List of toll numbers that are displayed in the meeting invite.
     *  @param array<string>|null $value Value to set for the tollNumbers property.
    */
    public function setTollNumbers(?array $value ): void {
        $this->tollNumbers = $value;
    }

}
