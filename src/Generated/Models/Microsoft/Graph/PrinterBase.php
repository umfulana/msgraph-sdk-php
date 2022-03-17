<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterBase extends Entity 
{
    /** @var PrinterCapabilities|null $capabilities The capabilities of the printer/printerShare. */
    private ?PrinterCapabilities $capabilities = null;
    
    /** @var PrinterDefaults|null $defaults The default print settings of printer/printerShare. */
    private ?PrinterDefaults $defaults = null;
    
    /** @var string|null $displayName The name of the printer/printerShare. */
    private ?string $displayName = null;
    
    /** @var bool|null $isAcceptingJobs Whether the printer/printerShare is currently accepting new print jobs. */
    private ?bool $isAcceptingJobs = null;
    
    /** @var array<PrintJob>|null $jobs The list of jobs that are queued for printing by the printer/printerShare. */
    private ?array $jobs = null;
    
    /** @var PrinterLocation|null $location The physical and/or organizational location of the printer/printerShare. */
    private ?PrinterLocation $location = null;
    
    /** @var string|null $manufacturer The manufacturer of the printer/printerShare. */
    private ?string $manufacturer = null;
    
    /** @var string|null $model The model name of the printer/printerShare. */
    private ?string $model = null;
    
    /** @var PrinterStatus|null $status  */
    private ?PrinterStatus $status = null;
    
    /**
     * Instantiates a new printerBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrinterBase {
        return new PrinterBase();
    }

    /**
     * Gets the capabilities property value. The capabilities of the printer/printerShare.
     * @return PrinterCapabilities|null
    */
    public function getCapabilities(): ?PrinterCapabilities {
        return $this->capabilities;
    }

    /**
     * Gets the defaults property value. The default print settings of printer/printerShare.
     * @return PrinterDefaults|null
    */
    public function getDefaults(): ?PrinterDefaults {
        return $this->defaults;
    }

    /**
     * Gets the displayName property value. The name of the printer/printerShare.
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
        return array_merge(parent::getFieldDeserializers(), [
            'capabilities' => function (self $o, ParseNode $n) { $o->setCapabilities($n->getObjectValue(PrinterCapabilities::class)); },
            'defaults' => function (self $o, ParseNode $n) { $o->setDefaults($n->getObjectValue(PrinterDefaults::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'isAcceptingJobs' => function (self $o, ParseNode $n) { $o->setIsAcceptingJobs($n->getBooleanValue()); },
            'jobs' => function (self $o, ParseNode $n) { $o->setJobs($n->getCollectionOfObjectValues(PrintJob::class)); },
            'location' => function (self $o, ParseNode $n) { $o->setLocation($n->getObjectValue(PrinterLocation::class)); },
            'manufacturer' => function (self $o, ParseNode $n) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (self $o, ParseNode $n) { $o->setModel($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getObjectValue(PrinterStatus::class)); },
        ]);
    }

    /**
     * Gets the isAcceptingJobs property value. Whether the printer/printerShare is currently accepting new print jobs.
     * @return bool|null
    */
    public function getIsAcceptingJobs(): ?bool {
        return $this->isAcceptingJobs;
    }

    /**
     * Gets the jobs property value. The list of jobs that are queued for printing by the printer/printerShare.
     * @return array<PrintJob>|null
    */
    public function getJobs(): ?array {
        return $this->jobs;
    }

    /**
     * Gets the location property value. The physical and/or organizational location of the printer/printerShare.
     * @return PrinterLocation|null
    */
    public function getLocation(): ?PrinterLocation {
        return $this->location;
    }

    /**
     * Gets the manufacturer property value. The manufacturer of the printer/printerShare.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The model name of the printer/printerShare.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the status property value. 
     * @return PrinterStatus|null
    */
    public function getStatus(): ?PrinterStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('capabilities', $this->capabilities);
        $writer->writeObjectValue('defaults', $this->defaults);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isAcceptingJobs', $this->isAcceptingJobs);
        $writer->writeCollectionOfObjectValues('jobs', $this->jobs);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeObjectValue('status', $this->status);
    }

    /**
     * Sets the capabilities property value. The capabilities of the printer/printerShare.
     *  @param PrinterCapabilities|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?PrinterCapabilities $value ): void {
        $this->capabilities = $value;
    }

    /**
     * Sets the defaults property value. The default print settings of printer/printerShare.
     *  @param PrinterDefaults|null $value Value to set for the defaults property.
    */
    public function setDefaults(?PrinterDefaults $value ): void {
        $this->defaults = $value;
    }

    /**
     * Sets the displayName property value. The name of the printer/printerShare.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isAcceptingJobs property value. Whether the printer/printerShare is currently accepting new print jobs.
     *  @param bool|null $value Value to set for the isAcceptingJobs property.
    */
    public function setIsAcceptingJobs(?bool $value ): void {
        $this->isAcceptingJobs = $value;
    }

    /**
     * Sets the jobs property value. The list of jobs that are queued for printing by the printer/printerShare.
     *  @param array<PrintJob>|null $value Value to set for the jobs property.
    */
    public function setJobs(?array $value ): void {
        $this->jobs = $value;
    }

    /**
     * Sets the location property value. The physical and/or organizational location of the printer/printerShare.
     *  @param PrinterLocation|null $value Value to set for the location property.
    */
    public function setLocation(?PrinterLocation $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the manufacturer property value. The manufacturer of the printer/printerShare.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The model name of the printer/printerShare.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the status property value. 
     *  @param PrinterStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PrinterStatus $value ): void {
        $this->status = $value;
    }

}
