<?php

namespace Microsoft\Graph\Generated\Teams\Item\EscapedClone;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\ClonableTeamParts;
use Microsoft\Graph\Generated\Models\Microsoft\Graph\TeamVisibilityType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloneRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $classification  */
    private ?string $classification = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $mailNickname  */
    private ?string $mailNickname = null;
    
    /** @var ClonableTeamParts|null $partsToClone  */
    private ?ClonableTeamParts $partsToClone = null;
    
    /** @var TeamVisibilityType|null $visibility  */
    private ?TeamVisibilityType $visibility = null;
    
    /**
     * Instantiates a new cloneRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloneRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloneRequestBody {
        return new CloneRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the classification property value. 
     * @return string|null
    */
    public function getClassification(): ?string {
        return $this->classification;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'classification' => function (self $o, ParseNode $n) { $o->setClassification($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'mailNickname' => function (self $o, ParseNode $n) { $o->setMailNickname($n->getStringValue()); },
            'partsToClone' => function (self $o, ParseNode $n) { $o->setPartsToClone($n->getEnumValue(ClonableTeamParts::class)); },
            'visibility' => function (self $o, ParseNode $n) { $o->setVisibility($n->getEnumValue(TeamVisibilityType::class)); },
        ];
    }

    /**
     * Gets the mailNickname property value. 
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->mailNickname;
    }

    /**
     * Gets the partsToClone property value. 
     * @return ClonableTeamParts|null
    */
    public function getPartsToClone(): ?ClonableTeamParts {
        return $this->partsToClone;
    }

    /**
     * Gets the visibility property value. 
     * @return TeamVisibilityType|null
    */
    public function getVisibility(): ?TeamVisibilityType {
        return $this->visibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('classification', $this->classification);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('mailNickname', $this->mailNickname);
        $writer->writeEnumValue('partsToClone', $this->partsToClone);
        $writer->writeEnumValue('visibility', $this->visibility);
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
     * Sets the classification property value. 
     *  @param string|null $value Value to set for the classification property.
    */
    public function setClassification(?string $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the mailNickname property value. 
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value ): void {
        $this->mailNickname = $value;
    }

    /**
     * Sets the partsToClone property value. 
     *  @param ClonableTeamParts|null $value Value to set for the partsToClone property.
    */
    public function setPartsToClone(?ClonableTeamParts $value ): void {
        $this->partsToClone = $value;
    }

    /**
     * Sets the visibility property value. 
     *  @param TeamVisibilityType|null $value Value to set for the visibility property.
    */
    public function setVisibility(?TeamVisibilityType $value ): void {
        $this->visibility = $value;
    }

}
