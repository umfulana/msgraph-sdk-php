<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $content The content of the item. */
    private ?string $content = null;
    
    /** @var BodyType|null $contentType The type of the content. Possible values are text and html. */
    private ?BodyType $contentType = null;
    
    /**
     * Instantiates a new itemBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ItemBody {
        return new ItemBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the content property value. The content of the item.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Gets the contentType property value. The type of the content. Possible values are text and html.
     * @return BodyType|null
    */
    public function getContentType(): ?BodyType {
        return $this->contentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'content' => function (self $o, ParseNode $n) { $o->setContent($n->getStringValue()); },
            'contentType' => function (self $o, ParseNode $n) { $o->setContentType($n->getEnumValue(BodyType::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('content', $this->content);
        $writer->writeEnumValue('contentType', $this->contentType);
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
     * Sets the content property value. The content of the item.
     *  @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the contentType property value. The type of the content. Possible values are text and html.
     *  @param BodyType|null $value Value to set for the contentType property.
    */
    public function setContentType(?BodyType $value ): void {
        $this->contentType = $value;
    }

}
