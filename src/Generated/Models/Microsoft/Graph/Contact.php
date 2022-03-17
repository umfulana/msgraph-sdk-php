<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Contact extends OutlookItem 
{
    /** @var string|null $assistantName The name of the contact's assistant. */
    private ?string $assistantName = null;
    
    /** @var DateTime|null $birthday The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $birthday = null;
    
    /** @var PhysicalAddress|null $businessAddress The contact's business address. */
    private ?PhysicalAddress $businessAddress = null;
    
    /** @var string|null $businessHomePage The business home page of the contact. */
    private ?string $businessHomePage = null;
    
    /** @var array<string>|null $businessPhones The contact's business phone numbers. */
    private ?array $businessPhones = null;
    
    /** @var array<string>|null $children The names of the contact's children. */
    private ?array $children = null;
    
    /** @var string|null $companyName The name of the contact's company. */
    private ?string $companyName = null;
    
    /** @var string|null $department The contact's department. */
    private ?string $department = null;
    
    /** @var string|null $displayName The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation. */
    private ?string $displayName = null;
    
    /** @var array<EmailAddress>|null $emailAddresses The contact's email addresses. */
    private ?array $emailAddresses = null;
    
    /** @var array<Extension>|null $extensions The collection of open extensions defined for the contact. Read-only. Nullable. */
    private ?array $extensions = null;
    
    /** @var string|null $fileAs The name the contact is filed under. */
    private ?string $fileAs = null;
    
    /** @var string|null $generation The contact's generation. */
    private ?string $generation = null;
    
    /** @var string|null $givenName The contact's given name. */
    private ?string $givenName = null;
    
    /** @var PhysicalAddress|null $homeAddress The contact's home address. */
    private ?PhysicalAddress $homeAddress = null;
    
    /** @var array<string>|null $homePhones The contact's home phone numbers. */
    private ?array $homePhones = null;
    
    /** @var array<string>|null $imAddresses  */
    private ?array $imAddresses = null;
    
    /** @var string|null $initials  */
    private ?string $initials = null;
    
    /** @var string|null $jobTitle  */
    private ?string $jobTitle = null;
    
    /** @var string|null $manager  */
    private ?string $manager = null;
    
    /** @var string|null $middleName  */
    private ?string $middleName = null;
    
    /** @var string|null $mobilePhone  */
    private ?string $mobilePhone = null;
    
    /** @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the contact. Read-only. Nullable. */
    private ?array $multiValueExtendedProperties = null;
    
    /** @var string|null $nickName  */
    private ?string $nickName = null;
    
    /** @var string|null $officeLocation  */
    private ?string $officeLocation = null;
    
    /** @var PhysicalAddress|null $otherAddress  */
    private ?PhysicalAddress $otherAddress = null;
    
    /** @var string|null $parentFolderId  */
    private ?string $parentFolderId = null;
    
    /** @var string|null $personalNotes  */
    private ?string $personalNotes = null;
    
    /** @var ProfilePhoto|null $photo Optional contact picture. You can get or set a photo for a contact. */
    private ?ProfilePhoto $photo = null;
    
    /** @var string|null $profession  */
    private ?string $profession = null;
    
    /** @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the contact. Read-only. Nullable. */
    private ?array $singleValueExtendedProperties = null;
    
    /** @var string|null $spouseName  */
    private ?string $spouseName = null;
    
    /** @var string|null $surname  */
    private ?string $surname = null;
    
    /** @var string|null $title  */
    private ?string $title = null;
    
    /** @var string|null $yomiCompanyName  */
    private ?string $yomiCompanyName = null;
    
    /** @var string|null $yomiGivenName  */
    private ?string $yomiGivenName = null;
    
    /** @var string|null $yomiSurname  */
    private ?string $yomiSurname = null;
    
    /**
     * Instantiates a new contact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Contact
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Contact {
        return new Contact();
    }

    /**
     * Gets the assistantName property value. The name of the contact's assistant.
     * @return string|null
    */
    public function getAssistantName(): ?string {
        return $this->assistantName;
    }

    /**
     * Gets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getBirthday(): ?DateTime {
        return $this->birthday;
    }

    /**
     * Gets the businessAddress property value. The contact's business address.
     * @return PhysicalAddress|null
    */
    public function getBusinessAddress(): ?PhysicalAddress {
        return $this->businessAddress;
    }

    /**
     * Gets the businessHomePage property value. The business home page of the contact.
     * @return string|null
    */
    public function getBusinessHomePage(): ?string {
        return $this->businessHomePage;
    }

    /**
     * Gets the businessPhones property value. The contact's business phone numbers.
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        return $this->businessPhones;
    }

    /**
     * Gets the children property value. The names of the contact's children.
     * @return array<string>|null
    */
    public function getChildren(): ?array {
        return $this->children;
    }

    /**
     * Gets the companyName property value. The name of the contact's company.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the department property value. The contact's department.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->department;
    }

    /**
     * Gets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the emailAddresses property value. The contact's email addresses.
     * @return array<EmailAddress>|null
    */
    public function getEmailAddresses(): ?array {
        return $this->emailAddresses;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the contact. Read-only. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assistantName' => function (self $o, ParseNode $n) { $o->setAssistantName($n->getStringValue()); },
            'birthday' => function (self $o, ParseNode $n) { $o->setBirthday($n->getDateTimeValue()); },
            'businessAddress' => function (self $o, ParseNode $n) { $o->setBusinessAddress($n->getObjectValue(PhysicalAddress::class)); },
            'businessHomePage' => function (self $o, ParseNode $n) { $o->setBusinessHomePage($n->getStringValue()); },
            'businessPhones' => function (self $o, ParseNode $n) { $o->setBusinessPhones($n->getCollectionOfPrimitiveValues()); },
            'children' => function (self $o, ParseNode $n) { $o->setChildren($n->getCollectionOfPrimitiveValues()); },
            'companyName' => function (self $o, ParseNode $n) { $o->setCompanyName($n->getStringValue()); },
            'department' => function (self $o, ParseNode $n) { $o->setDepartment($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'emailAddresses' => function (self $o, ParseNode $n) { $o->setEmailAddresses($n->getCollectionOfObjectValues(EmailAddress::class)); },
            'extensions' => function (self $o, ParseNode $n) { $o->setExtensions($n->getCollectionOfObjectValues(Extension::class)); },
            'fileAs' => function (self $o, ParseNode $n) { $o->setFileAs($n->getStringValue()); },
            'generation' => function (self $o, ParseNode $n) { $o->setGeneration($n->getStringValue()); },
            'givenName' => function (self $o, ParseNode $n) { $o->setGivenName($n->getStringValue()); },
            'homeAddress' => function (self $o, ParseNode $n) { $o->setHomeAddress($n->getObjectValue(PhysicalAddress::class)); },
            'homePhones' => function (self $o, ParseNode $n) { $o->setHomePhones($n->getCollectionOfPrimitiveValues()); },
            'imAddresses' => function (self $o, ParseNode $n) { $o->setImAddresses($n->getCollectionOfPrimitiveValues()); },
            'initials' => function (self $o, ParseNode $n) { $o->setInitials($n->getStringValue()); },
            'jobTitle' => function (self $o, ParseNode $n) { $o->setJobTitle($n->getStringValue()); },
            'manager' => function (self $o, ParseNode $n) { $o->setManager($n->getStringValue()); },
            'middleName' => function (self $o, ParseNode $n) { $o->setMiddleName($n->getStringValue()); },
            'mobilePhone' => function (self $o, ParseNode $n) { $o->setMobilePhone($n->getStringValue()); },
            'multiValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(MultiValueLegacyExtendedProperty::class)); },
            'nickName' => function (self $o, ParseNode $n) { $o->setNickName($n->getStringValue()); },
            'officeLocation' => function (self $o, ParseNode $n) { $o->setOfficeLocation($n->getStringValue()); },
            'otherAddress' => function (self $o, ParseNode $n) { $o->setOtherAddress($n->getObjectValue(PhysicalAddress::class)); },
            'parentFolderId' => function (self $o, ParseNode $n) { $o->setParentFolderId($n->getStringValue()); },
            'personalNotes' => function (self $o, ParseNode $n) { $o->setPersonalNotes($n->getStringValue()); },
            'photo' => function (self $o, ParseNode $n) { $o->setPhoto($n->getObjectValue(ProfilePhoto::class)); },
            'profession' => function (self $o, ParseNode $n) { $o->setProfession($n->getStringValue()); },
            'singleValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(SingleValueLegacyExtendedProperty::class)); },
            'spouseName' => function (self $o, ParseNode $n) { $o->setSpouseName($n->getStringValue()); },
            'surname' => function (self $o, ParseNode $n) { $o->setSurname($n->getStringValue()); },
            'title' => function (self $o, ParseNode $n) { $o->setTitle($n->getStringValue()); },
            'yomiCompanyName' => function (self $o, ParseNode $n) { $o->setYomiCompanyName($n->getStringValue()); },
            'yomiGivenName' => function (self $o, ParseNode $n) { $o->setYomiGivenName($n->getStringValue()); },
            'yomiSurname' => function (self $o, ParseNode $n) { $o->setYomiSurname($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileAs property value. The name the contact is filed under.
     * @return string|null
    */
    public function getFileAs(): ?string {
        return $this->fileAs;
    }

    /**
     * Gets the generation property value. The contact's generation.
     * @return string|null
    */
    public function getGeneration(): ?string {
        return $this->generation;
    }

    /**
     * Gets the givenName property value. The contact's given name.
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->givenName;
    }

    /**
     * Gets the homeAddress property value. The contact's home address.
     * @return PhysicalAddress|null
    */
    public function getHomeAddress(): ?PhysicalAddress {
        return $this->homeAddress;
    }

    /**
     * Gets the homePhones property value. The contact's home phone numbers.
     * @return array<string>|null
    */
    public function getHomePhones(): ?array {
        return $this->homePhones;
    }

    /**
     * Gets the imAddresses property value. 
     * @return array<string>|null
    */
    public function getImAddresses(): ?array {
        return $this->imAddresses;
    }

    /**
     * Gets the initials property value. 
     * @return string|null
    */
    public function getInitials(): ?string {
        return $this->initials;
    }

    /**
     * Gets the jobTitle property value. 
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->jobTitle;
    }

    /**
     * Gets the manager property value. 
     * @return string|null
    */
    public function getManager(): ?string {
        return $this->manager;
    }

    /**
     * Gets the middleName property value. 
     * @return string|null
    */
    public function getMiddleName(): ?string {
        return $this->middleName;
    }

    /**
     * Gets the mobilePhone property value. 
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        return $this->mobilePhone;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the nickName property value. 
     * @return string|null
    */
    public function getNickName(): ?string {
        return $this->nickName;
    }

    /**
     * Gets the officeLocation property value. 
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->officeLocation;
    }

    /**
     * Gets the otherAddress property value. 
     * @return PhysicalAddress|null
    */
    public function getOtherAddress(): ?PhysicalAddress {
        return $this->otherAddress;
    }

    /**
     * Gets the parentFolderId property value. 
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->parentFolderId;
    }

    /**
     * Gets the personalNotes property value. 
     * @return string|null
    */
    public function getPersonalNotes(): ?string {
        return $this->personalNotes;
    }

    /**
     * Gets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        return $this->photo;
    }

    /**
     * Gets the profession property value. 
     * @return string|null
    */
    public function getProfession(): ?string {
        return $this->profession;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the spouseName property value. 
     * @return string|null
    */
    public function getSpouseName(): ?string {
        return $this->spouseName;
    }

    /**
     * Gets the surname property value. 
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Gets the title property value. 
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the yomiCompanyName property value. 
     * @return string|null
    */
    public function getYomiCompanyName(): ?string {
        return $this->yomiCompanyName;
    }

    /**
     * Gets the yomiGivenName property value. 
     * @return string|null
    */
    public function getYomiGivenName(): ?string {
        return $this->yomiGivenName;
    }

    /**
     * Gets the yomiSurname property value. 
     * @return string|null
    */
    public function getYomiSurname(): ?string {
        return $this->yomiSurname;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assistantName', $this->assistantName);
        $writer->writeDateTimeValue('birthday', $this->birthday);
        $writer->writeObjectValue('businessAddress', $this->businessAddress);
        $writer->writeStringValue('businessHomePage', $this->businessHomePage);
        $writer->writeCollectionOfPrimitiveValues('businessPhones', $this->businessPhones);
        $writer->writeCollectionOfPrimitiveValues('children', $this->children);
        $writer->writeStringValue('companyName', $this->companyName);
        $writer->writeStringValue('department', $this->department);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('emailAddresses', $this->emailAddresses);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeStringValue('fileAs', $this->fileAs);
        $writer->writeStringValue('generation', $this->generation);
        $writer->writeStringValue('givenName', $this->givenName);
        $writer->writeObjectValue('homeAddress', $this->homeAddress);
        $writer->writeCollectionOfPrimitiveValues('homePhones', $this->homePhones);
        $writer->writeCollectionOfPrimitiveValues('imAddresses', $this->imAddresses);
        $writer->writeStringValue('initials', $this->initials);
        $writer->writeStringValue('jobTitle', $this->jobTitle);
        $writer->writeStringValue('manager', $this->manager);
        $writer->writeStringValue('middleName', $this->middleName);
        $writer->writeStringValue('mobilePhone', $this->mobilePhone);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('nickName', $this->nickName);
        $writer->writeStringValue('officeLocation', $this->officeLocation);
        $writer->writeObjectValue('otherAddress', $this->otherAddress);
        $writer->writeStringValue('parentFolderId', $this->parentFolderId);
        $writer->writeStringValue('personalNotes', $this->personalNotes);
        $writer->writeObjectValue('photo', $this->photo);
        $writer->writeStringValue('profession', $this->profession);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeStringValue('spouseName', $this->spouseName);
        $writer->writeStringValue('surname', $this->surname);
        $writer->writeStringValue('title', $this->title);
        $writer->writeStringValue('yomiCompanyName', $this->yomiCompanyName);
        $writer->writeStringValue('yomiGivenName', $this->yomiGivenName);
        $writer->writeStringValue('yomiSurname', $this->yomiSurname);
    }

    /**
     * Sets the assistantName property value. The name of the contact's assistant.
     *  @param string|null $value Value to set for the assistantName property.
    */
    public function setAssistantName(?string $value ): void {
        $this->assistantName = $value;
    }

    /**
     * Sets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the birthday property.
    */
    public function setBirthday(?DateTime $value ): void {
        $this->birthday = $value;
    }

    /**
     * Sets the businessAddress property value. The contact's business address.
     *  @param PhysicalAddress|null $value Value to set for the businessAddress property.
    */
    public function setBusinessAddress(?PhysicalAddress $value ): void {
        $this->businessAddress = $value;
    }

    /**
     * Sets the businessHomePage property value. The business home page of the contact.
     *  @param string|null $value Value to set for the businessHomePage property.
    */
    public function setBusinessHomePage(?string $value ): void {
        $this->businessHomePage = $value;
    }

    /**
     * Sets the businessPhones property value. The contact's business phone numbers.
     *  @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value ): void {
        $this->businessPhones = $value;
    }

    /**
     * Sets the children property value. The names of the contact's children.
     *  @param array<string>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

    /**
     * Sets the companyName property value. The name of the contact's company.
     *  @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value ): void {
        $this->companyName = $value;
    }

    /**
     * Sets the department property value. The contact's department.
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value ): void {
        $this->department = $value;
    }

    /**
     * Sets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the emailAddresses property value. The contact's email addresses.
     *  @param array<EmailAddress>|null $value Value to set for the emailAddresses property.
    */
    public function setEmailAddresses(?array $value ): void {
        $this->emailAddresses = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the contact. Read-only. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the fileAs property value. The name the contact is filed under.
     *  @param string|null $value Value to set for the fileAs property.
    */
    public function setFileAs(?string $value ): void {
        $this->fileAs = $value;
    }

    /**
     * Sets the generation property value. The contact's generation.
     *  @param string|null $value Value to set for the generation property.
    */
    public function setGeneration(?string $value ): void {
        $this->generation = $value;
    }

    /**
     * Sets the givenName property value. The contact's given name.
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value ): void {
        $this->givenName = $value;
    }

    /**
     * Sets the homeAddress property value. The contact's home address.
     *  @param PhysicalAddress|null $value Value to set for the homeAddress property.
    */
    public function setHomeAddress(?PhysicalAddress $value ): void {
        $this->homeAddress = $value;
    }

    /**
     * Sets the homePhones property value. The contact's home phone numbers.
     *  @param array<string>|null $value Value to set for the homePhones property.
    */
    public function setHomePhones(?array $value ): void {
        $this->homePhones = $value;
    }

    /**
     * Sets the imAddresses property value. 
     *  @param array<string>|null $value Value to set for the imAddresses property.
    */
    public function setImAddresses(?array $value ): void {
        $this->imAddresses = $value;
    }

    /**
     * Sets the initials property value. 
     *  @param string|null $value Value to set for the initials property.
    */
    public function setInitials(?string $value ): void {
        $this->initials = $value;
    }

    /**
     * Sets the jobTitle property value. 
     *  @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value ): void {
        $this->jobTitle = $value;
    }

    /**
     * Sets the manager property value. 
     *  @param string|null $value Value to set for the manager property.
    */
    public function setManager(?string $value ): void {
        $this->manager = $value;
    }

    /**
     * Sets the middleName property value. 
     *  @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value ): void {
        $this->middleName = $value;
    }

    /**
     * Sets the mobilePhone property value. 
     *  @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value ): void {
        $this->mobilePhone = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the nickName property value. 
     *  @param string|null $value Value to set for the nickName property.
    */
    public function setNickName(?string $value ): void {
        $this->nickName = $value;
    }

    /**
     * Sets the officeLocation property value. 
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value ): void {
        $this->officeLocation = $value;
    }

    /**
     * Sets the otherAddress property value. 
     *  @param PhysicalAddress|null $value Value to set for the otherAddress property.
    */
    public function setOtherAddress(?PhysicalAddress $value ): void {
        $this->otherAddress = $value;
    }

    /**
     * Sets the parentFolderId property value. 
     *  @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value ): void {
        $this->parentFolderId = $value;
    }

    /**
     * Sets the personalNotes property value. 
     *  @param string|null $value Value to set for the personalNotes property.
    */
    public function setPersonalNotes(?string $value ): void {
        $this->personalNotes = $value;
    }

    /**
     * Sets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     *  @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value ): void {
        $this->photo = $value;
    }

    /**
     * Sets the profession property value. 
     *  @param string|null $value Value to set for the profession property.
    */
    public function setProfession(?string $value ): void {
        $this->profession = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the spouseName property value. 
     *  @param string|null $value Value to set for the spouseName property.
    */
    public function setSpouseName(?string $value ): void {
        $this->spouseName = $value;
    }

    /**
     * Sets the surname property value. 
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value ): void {
        $this->surname = $value;
    }

    /**
     * Sets the title property value. 
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the yomiCompanyName property value. 
     *  @param string|null $value Value to set for the yomiCompanyName property.
    */
    public function setYomiCompanyName(?string $value ): void {
        $this->yomiCompanyName = $value;
    }

    /**
     * Sets the yomiGivenName property value. 
     *  @param string|null $value Value to set for the yomiGivenName property.
    */
    public function setYomiGivenName(?string $value ): void {
        $this->yomiGivenName = $value;
    }

    /**
     * Sets the yomiSurname property value. 
     *  @param string|null $value Value to set for the yomiSurname property.
    */
    public function setYomiSurname(?string $value ): void {
        $this->yomiSurname = $value;
    }

}
