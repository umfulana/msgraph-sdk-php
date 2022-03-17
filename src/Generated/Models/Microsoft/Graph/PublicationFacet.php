<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PublicationFacet implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $level The state of publication for this document. Either published or checkout. Read-only. */
    private ?string $level = null;
    
    /** @var string|null $versionId The unique identifier for the version that is visible to the current caller. Read-only. */
    private ?string $versionId = null;
    
    /**
     * Instantiates a new publicationFacet and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PublicationFacet
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PublicationFacet {
        return new PublicationFacet();
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
            'level' => function (self $o, ParseNode $n) { $o->setLevel($n->getStringValue()); },
            'versionId' => function (self $o, ParseNode $n) { $o->setVersionId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the level property value. The state of publication for this document. Either published or checkout. Read-only.
     * @return string|null
    */
    public function getLevel(): ?string {
        return $this->level;
    }

    /**
     * Gets the versionId property value. The unique identifier for the version that is visible to the current caller. Read-only.
     * @return string|null
    */
    public function getVersionId(): ?string {
        return $this->versionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('level', $this->level);
        $writer->writeStringValue('versionId', $this->versionId);
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
     * Sets the level property value. The state of publication for this document. Either published or checkout. Read-only.
     *  @param string|null $value Value to set for the level property.
    */
    public function setLevel(?string $value ): void {
        $this->level = $value;
    }

    /**
     * Sets the versionId property value. The unique identifier for the version that is visible to the current caller. Read-only.
     *  @param string|null $value Value to set for the versionId property.
    */
    public function setVersionId(?string $value ): void {
        $this->versionId = $value;
    }

}
