<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceOperatingSystemSummary implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $androidCount Number of android device count. */
    private ?int $androidCount = null;
    
    /** @var int|null $iosCount Number of iOS device count. */
    private ?int $iosCount = null;
    
    /** @var int|null $macOSCount Number of Mac OS X device count. */
    private ?int $macOSCount = null;
    
    /** @var int|null $unknownCount Number of unknown device count. */
    private ?int $unknownCount = null;
    
    /** @var int|null $windowsCount Number of Windows device count. */
    private ?int $windowsCount = null;
    
    /** @var int|null $windowsMobileCount Number of Windows mobile device count. */
    private ?int $windowsMobileCount = null;
    
    /**
     * Instantiates a new deviceOperatingSystemSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceOperatingSystemSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceOperatingSystemSummary {
        return new DeviceOperatingSystemSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the androidCount property value. Number of android device count.
     * @return int|null
    */
    public function getAndroidCount(): ?int {
        return $this->androidCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'androidCount' => function (self $o, ParseNode $n) { $o->setAndroidCount($n->getIntegerValue()); },
            'iosCount' => function (self $o, ParseNode $n) { $o->setIosCount($n->getIntegerValue()); },
            'macOSCount' => function (self $o, ParseNode $n) { $o->setMacOSCount($n->getIntegerValue()); },
            'unknownCount' => function (self $o, ParseNode $n) { $o->setUnknownCount($n->getIntegerValue()); },
            'windowsCount' => function (self $o, ParseNode $n) { $o->setWindowsCount($n->getIntegerValue()); },
            'windowsMobileCount' => function (self $o, ParseNode $n) { $o->setWindowsMobileCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the iosCount property value. Number of iOS device count.
     * @return int|null
    */
    public function getIosCount(): ?int {
        return $this->iosCount;
    }

    /**
     * Gets the macOSCount property value. Number of Mac OS X device count.
     * @return int|null
    */
    public function getMacOSCount(): ?int {
        return $this->macOSCount;
    }

    /**
     * Gets the unknownCount property value. Number of unknown device count.
     * @return int|null
    */
    public function getUnknownCount(): ?int {
        return $this->unknownCount;
    }

    /**
     * Gets the windowsCount property value. Number of Windows device count.
     * @return int|null
    */
    public function getWindowsCount(): ?int {
        return $this->windowsCount;
    }

    /**
     * Gets the windowsMobileCount property value. Number of Windows mobile device count.
     * @return int|null
    */
    public function getWindowsMobileCount(): ?int {
        return $this->windowsMobileCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('androidCount', $this->androidCount);
        $writer->writeIntegerValue('iosCount', $this->iosCount);
        $writer->writeIntegerValue('macOSCount', $this->macOSCount);
        $writer->writeIntegerValue('unknownCount', $this->unknownCount);
        $writer->writeIntegerValue('windowsCount', $this->windowsCount);
        $writer->writeIntegerValue('windowsMobileCount', $this->windowsMobileCount);
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
     * Sets the androidCount property value. Number of android device count.
     *  @param int|null $value Value to set for the androidCount property.
    */
    public function setAndroidCount(?int $value ): void {
        $this->androidCount = $value;
    }

    /**
     * Sets the iosCount property value. Number of iOS device count.
     *  @param int|null $value Value to set for the iosCount property.
    */
    public function setIosCount(?int $value ): void {
        $this->iosCount = $value;
    }

    /**
     * Sets the macOSCount property value. Number of Mac OS X device count.
     *  @param int|null $value Value to set for the macOSCount property.
    */
    public function setMacOSCount(?int $value ): void {
        $this->macOSCount = $value;
    }

    /**
     * Sets the unknownCount property value. Number of unknown device count.
     *  @param int|null $value Value to set for the unknownCount property.
    */
    public function setUnknownCount(?int $value ): void {
        $this->unknownCount = $value;
    }

    /**
     * Sets the windowsCount property value. Number of Windows device count.
     *  @param int|null $value Value to set for the windowsCount property.
    */
    public function setWindowsCount(?int $value ): void {
        $this->windowsCount = $value;
    }

    /**
     * Sets the windowsMobileCount property value. Number of Windows mobile device count.
     *  @param int|null $value Value to set for the windowsMobileCount property.
    */
    public function setWindowsMobileCount(?int $value ): void {
        $this->windowsMobileCount = $value;
    }

}
