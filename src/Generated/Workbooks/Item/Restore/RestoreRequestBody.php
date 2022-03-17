<?php

namespace Microsoft\Graph\Generated\Workbooks\Item\Restore;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\ItemReference;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestoreRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var ItemReference|null $parentReference  */
    private ?ItemReference $parentReference = null;
    
    /**
     * Instantiates a new restoreRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestoreRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RestoreRequestBody {
        return new RestoreRequestBody();
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
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'parentReference' => function (self $o, ParseNode $n) { $o->setParentReference($n->getObjectValue(ItemReference::class)); },
        ];
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parentReference property value. 
     * @return ItemReference|null
    */
    public function getParentReference(): ?ItemReference {
        return $this->parentReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('parentReference', $this->parentReference);
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
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parentReference property value. 
     *  @param ItemReference|null $value Value to set for the parentReference property.
    */
    public function setParentReference(?ItemReference $value ): void {
        $this->parentReference = $value;
    }

}
