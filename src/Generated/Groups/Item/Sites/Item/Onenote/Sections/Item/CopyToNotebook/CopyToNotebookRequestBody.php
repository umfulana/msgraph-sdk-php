<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Sections\Item\CopyToNotebook;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopyToNotebookRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $groupId  */
    private ?string $groupId = null;
    
    /** @var string|null $id  */
    private ?string $id = null;
    
    /** @var string|null $renameAs  */
    private ?string $renameAs = null;
    
    /** @var string|null $siteCollectionId  */
    private ?string $siteCollectionId = null;
    
    /** @var string|null $siteId  */
    private ?string $siteId = null;
    
    /**
     * Instantiates a new copyToNotebookRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopyToNotebookRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CopyToNotebookRequestBody {
        return new CopyToNotebookRequestBody();
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
            'groupId' => function (self $o, ParseNode $n) { $o->setGroupId($n->getStringValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'renameAs' => function (self $o, ParseNode $n) { $o->setRenameAs($n->getStringValue()); },
            'siteCollectionId' => function (self $o, ParseNode $n) { $o->setSiteCollectionId($n->getStringValue()); },
            'siteId' => function (self $o, ParseNode $n) { $o->setSiteId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the groupId property value. 
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * Gets the id property value. 
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the renameAs property value. 
     * @return string|null
    */
    public function getRenameAs(): ?string {
        return $this->renameAs;
    }

    /**
     * Gets the siteCollectionId property value. 
     * @return string|null
    */
    public function getSiteCollectionId(): ?string {
        return $this->siteCollectionId;
    }

    /**
     * Gets the siteId property value. 
     * @return string|null
    */
    public function getSiteId(): ?string {
        return $this->siteId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('groupId', $this->groupId);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('renameAs', $this->renameAs);
        $writer->writeStringValue('siteCollectionId', $this->siteCollectionId);
        $writer->writeStringValue('siteId', $this->siteId);
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
     * Sets the groupId property value. 
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value ): void {
        $this->groupId = $value;
    }

    /**
     * Sets the id property value. 
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the renameAs property value. 
     *  @param string|null $value Value to set for the renameAs property.
    */
    public function setRenameAs(?string $value ): void {
        $this->renameAs = $value;
    }

    /**
     * Sets the siteCollectionId property value. 
     *  @param string|null $value Value to set for the siteCollectionId property.
    */
    public function setSiteCollectionId(?string $value ): void {
        $this->siteCollectionId = $value;
    }

    /**
     * Sets the siteId property value. 
     *  @param string|null $value Value to set for the siteId property.
    */
    public function setSiteId(?string $value ): void {
        $this->siteId = $value;
    }

}
