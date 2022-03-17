<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Application extends DirectoryObject 
{
    /** @var array<AddIn>|null $addIns Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Office 365 call the application in the context of a document the user is working on. */
    private ?array $addIns = null;
    
    /** @var ApiApplication|null $api Specifies settings for an application that implements a web API. */
    private ?ApiApplication $api = null;
    
    /** @var string|null $appId The unique identifier for the application that is assigned to an application by Azure AD. Not nullable. Read-only. */
    private ?string $appId = null;
    
    /** @var string|null $applicationTemplateId Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne). */
    private ?string $applicationTemplateId = null;
    
    /** @var array<AppRole>|null $appRoles The collection of roles assigned to the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable. */
    private ?array $appRoles = null;
    
    /** @var DateTime|null $createdDateTime The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderBy. */
    private ?DateTime $createdDateTime = null;
    
    /** @var DirectoryObject|null $createdOnBehalfOf Read-only. */
    private ?DirectoryObject $createdOnBehalfOf = null;
    
    /** @var string|null $description Free text field to provide a description of the application object to end users. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search. */
    private ?string $description = null;
    
    /** @var string|null $disabledByMicrosoftStatus Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not). */
    private ?string $disabledByMicrosoftStatus = null;
    
    /** @var string|null $displayName The display name for the application. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy. */
    private ?string $displayName = null;
    
    /** @var array<ExtensionProperty>|null $extensionProperties Read-only. Nullable. */
    private ?array $extensionProperties = null;
    
    /** @var string|null $groupMembershipClaims Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Azure AD roles), All (this gets all of the security groups, distribution groups, and Azure AD directory roles that the signed-in user is a member of). */
    private ?string $groupMembershipClaims = null;
    
    /** @var array<HomeRealmDiscoveryPolicy>|null $homeRealmDiscoveryPolicies  */
    private ?array $homeRealmDiscoveryPolicies = null;
    
    /** @var array<string>|null $identifierUris Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you'll reference in your API's code, and it must be globally unique. You can use the default value provided, which is in the form api://<application-client-id>, or specify a more readable URI like https://contoso.com/api. For more information on valid identifierUris patterns and best practices, see Azure AD application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith). */
    private ?array $identifierUris = null;
    
    /** @var InformationalUrl|null $info Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values). */
    private ?InformationalUrl $info = null;
    
    /** @var bool|null $isDeviceOnlyAuthSupported Specifies whether this application supports device authentication without a user. The default is false. */
    private ?bool $isDeviceOnlyAuthSupported = null;
    
    /** @var bool|null $isFallbackPublicClient Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false which means the fallback application type is confidential client such as a web app. There are certain scenarios where Azure AD cannot determine the client application type. For example, the ROPC flow where it is configured without specifying a redirect URI. In those cases Azure AD interprets the application type based on the value of this property. */
    private ?bool $isFallbackPublicClient = null;
    
    /** @var array<KeyCredential>|null $keyCredentials The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le). */
    private ?array $keyCredentials = null;
    
    /** @var StreamInterface|null $logo The main logo for the application. Not nullable. */
    private ?StreamInterface $logo = null;
    
    /** @var string|null $notes Notes relevant for the management of the application. */
    private ?string $notes = null;
    
    /** @var bool|null $oauth2RequirePostResponse  */
    private ?bool $oauth2RequirePostResponse = null;
    
    /** @var OptionalClaims|null $optionalClaims Application developers can configure optional claims in their Azure AD applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app. */
    private ?OptionalClaims $optionalClaims = null;
    
    /** @var array<DirectoryObject>|null $owners Directory objects that are owners of the application. Read-only. Nullable. Supports $expand. */
    private ?array $owners = null;
    
    /** @var ParentalControlSettings|null $parentalControlSettings Specifies parental control settings for an application. */
    private ?ParentalControlSettings $parentalControlSettings = null;
    
    /** @var array<PasswordCredential>|null $passwordCredentials The collection of password credentials associated with the application. Not nullable. */
    private ?array $passwordCredentials = null;
    
    /** @var PublicClientApplication|null $publicClient Specifies settings for installed clients such as desktop or mobile devices. */
    private ?PublicClientApplication $publicClient = null;
    
    /** @var string|null $publisherDomain The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application's publisher domain. Supports $filter (eq, ne, ge, le, startsWith). */
    private ?string $publisherDomain = null;
    
    /** @var array<RequiredResourceAccess>|null $requiredResourceAccess Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. Not nullable. Supports $filter (eq, not, ge, le). */
    private ?array $requiredResourceAccess = null;
    
    /** @var string|null $signInAudience Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg, AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount (default), and PersonalMicrosoftAccount. See more in the table below. Supports $filter (eq, ne, not). */
    private ?string $signInAudience = null;
    
    /** @var SpaApplication|null $spa Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens. */
    private ?SpaApplication $spa = null;
    
    /** @var array<string>|null $tags Custom strings that can be used to categorize and identify the application. Not nullable. Supports $filter (eq, not, ge, le, startsWith). */
    private ?array $tags = null;
    
    /** @var string|null $tokenEncryptionKeyId Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user. */
    private ?string $tokenEncryptionKeyId = null;
    
    /** @var array<TokenIssuancePolicy>|null $tokenIssuancePolicies  */
    private ?array $tokenIssuancePolicies = null;
    
    /** @var array<TokenLifetimePolicy>|null $tokenLifetimePolicies The tokenLifetimePolicies assigned to this application. Supports $expand. */
    private ?array $tokenLifetimePolicies = null;
    
    /** @var VerifiedPublisher|null $verifiedPublisher Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification. */
    private ?VerifiedPublisher $verifiedPublisher = null;
    
    /** @var WebApplication|null $web Specifies settings for a web application. */
    private ?WebApplication $web = null;
    
    /**
     * Instantiates a new application and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Application
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Application {
        return new Application();
    }

    /**
     * Gets the addIns property value. Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Office 365 call the application in the context of a document the user is working on.
     * @return array<AddIn>|null
    */
    public function getAddIns(): ?array {
        return $this->addIns;
    }

    /**
     * Gets the api property value. Specifies settings for an application that implements a web API.
     * @return ApiApplication|null
    */
    public function getApi(): ?ApiApplication {
        return $this->api;
    }

    /**
     * Gets the appId property value. The unique identifier for the application that is assigned to an application by Azure AD. Not nullable. Read-only.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the applicationTemplateId property value. Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne).
     * @return string|null
    */
    public function getApplicationTemplateId(): ?string {
        return $this->applicationTemplateId;
    }

    /**
     * Gets the appRoles property value. The collection of roles assigned to the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
     * @return array<AppRole>|null
    */
    public function getAppRoles(): ?array {
        return $this->appRoles;
    }

    /**
     * Gets the createdDateTime property value. The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderBy.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the createdOnBehalfOf property value. Read-only.
     * @return DirectoryObject|null
    */
    public function getCreatedOnBehalfOf(): ?DirectoryObject {
        return $this->createdOnBehalfOf;
    }

    /**
     * Gets the description property value. Free text field to provide a description of the application object to end users. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the disabledByMicrosoftStatus property value. Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     * @return string|null
    */
    public function getDisabledByMicrosoftStatus(): ?string {
        return $this->disabledByMicrosoftStatus;
    }

    /**
     * Gets the displayName property value. The display name for the application. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the extensionProperties property value. Read-only. Nullable.
     * @return array<ExtensionProperty>|null
    */
    public function getExtensionProperties(): ?array {
        return $this->extensionProperties;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'addIns' => function (self $o, ParseNode $n) { $o->setAddIns($n->getCollectionOfObjectValues(AddIn::class)); },
            'api' => function (self $o, ParseNode $n) { $o->setApi($n->getObjectValue(ApiApplication::class)); },
            'appId' => function (self $o, ParseNode $n) { $o->setAppId($n->getStringValue()); },
            'applicationTemplateId' => function (self $o, ParseNode $n) { $o->setApplicationTemplateId($n->getStringValue()); },
            'appRoles' => function (self $o, ParseNode $n) { $o->setAppRoles($n->getCollectionOfObjectValues(AppRole::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'createdOnBehalfOf' => function (self $o, ParseNode $n) { $o->setCreatedOnBehalfOf($n->getObjectValue(DirectoryObject::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'disabledByMicrosoftStatus' => function (self $o, ParseNode $n) { $o->setDisabledByMicrosoftStatus($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'extensionProperties' => function (self $o, ParseNode $n) { $o->setExtensionProperties($n->getCollectionOfObjectValues(ExtensionProperty::class)); },
            'groupMembershipClaims' => function (self $o, ParseNode $n) { $o->setGroupMembershipClaims($n->getStringValue()); },
            'homeRealmDiscoveryPolicies' => function (self $o, ParseNode $n) { $o->setHomeRealmDiscoveryPolicies($n->getCollectionOfObjectValues(HomeRealmDiscoveryPolicy::class)); },
            'identifierUris' => function (self $o, ParseNode $n) { $o->setIdentifierUris($n->getCollectionOfPrimitiveValues()); },
            'info' => function (self $o, ParseNode $n) { $o->setInfo($n->getObjectValue(InformationalUrl::class)); },
            'isDeviceOnlyAuthSupported' => function (self $o, ParseNode $n) { $o->setIsDeviceOnlyAuthSupported($n->getBooleanValue()); },
            'isFallbackPublicClient' => function (self $o, ParseNode $n) { $o->setIsFallbackPublicClient($n->getBooleanValue()); },
            'keyCredentials' => function (self $o, ParseNode $n) { $o->setKeyCredentials($n->getCollectionOfObjectValues(KeyCredential::class)); },
            'logo' => function (self $o, ParseNode $n) { $o->setLogo($n->getBinaryContent()); },
            'notes' => function (self $o, ParseNode $n) { $o->setNotes($n->getStringValue()); },
            'oauth2RequirePostResponse' => function (self $o, ParseNode $n) { $o->setOauth2RequirePostResponse($n->getBooleanValue()); },
            'optionalClaims' => function (self $o, ParseNode $n) { $o->setOptionalClaims($n->getObjectValue(OptionalClaims::class)); },
            'owners' => function (self $o, ParseNode $n) { $o->setOwners($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'parentalControlSettings' => function (self $o, ParseNode $n) { $o->setParentalControlSettings($n->getObjectValue(ParentalControlSettings::class)); },
            'passwordCredentials' => function (self $o, ParseNode $n) { $o->setPasswordCredentials($n->getCollectionOfObjectValues(PasswordCredential::class)); },
            'publicClient' => function (self $o, ParseNode $n) { $o->setPublicClient($n->getObjectValue(PublicClientApplication::class)); },
            'publisherDomain' => function (self $o, ParseNode $n) { $o->setPublisherDomain($n->getStringValue()); },
            'requiredResourceAccess' => function (self $o, ParseNode $n) { $o->setRequiredResourceAccess($n->getCollectionOfObjectValues(RequiredResourceAccess::class)); },
            'signInAudience' => function (self $o, ParseNode $n) { $o->setSignInAudience($n->getStringValue()); },
            'spa' => function (self $o, ParseNode $n) { $o->setSpa($n->getObjectValue(SpaApplication::class)); },
            'tags' => function (self $o, ParseNode $n) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'tokenEncryptionKeyId' => function (self $o, ParseNode $n) { $o->setTokenEncryptionKeyId($n->getStringValue()); },
            'tokenIssuancePolicies' => function (self $o, ParseNode $n) { $o->setTokenIssuancePolicies($n->getCollectionOfObjectValues(TokenIssuancePolicy::class)); },
            'tokenLifetimePolicies' => function (self $o, ParseNode $n) { $o->setTokenLifetimePolicies($n->getCollectionOfObjectValues(TokenLifetimePolicy::class)); },
            'verifiedPublisher' => function (self $o, ParseNode $n) { $o->setVerifiedPublisher($n->getObjectValue(VerifiedPublisher::class)); },
            'web' => function (self $o, ParseNode $n) { $o->setWeb($n->getObjectValue(WebApplication::class)); },
        ]);
    }

    /**
     * Gets the groupMembershipClaims property value. Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Azure AD roles), All (this gets all of the security groups, distribution groups, and Azure AD directory roles that the signed-in user is a member of).
     * @return string|null
    */
    public function getGroupMembershipClaims(): ?string {
        return $this->groupMembershipClaims;
    }

    /**
     * Gets the homeRealmDiscoveryPolicies property value. 
     * @return array<HomeRealmDiscoveryPolicy>|null
    */
    public function getHomeRealmDiscoveryPolicies(): ?array {
        return $this->homeRealmDiscoveryPolicies;
    }

    /**
     * Gets the identifierUris property value. Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you'll reference in your API's code, and it must be globally unique. You can use the default value provided, which is in the form api://<application-client-id>, or specify a more readable URI like https://contoso.com/api. For more information on valid identifierUris patterns and best practices, see Azure AD application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getIdentifierUris(): ?array {
        return $this->identifierUris;
    }

    /**
     * Gets the info property value. Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     * @return InformationalUrl|null
    */
    public function getInfo(): ?InformationalUrl {
        return $this->info;
    }

    /**
     * Gets the isDeviceOnlyAuthSupported property value. Specifies whether this application supports device authentication without a user. The default is false.
     * @return bool|null
    */
    public function getIsDeviceOnlyAuthSupported(): ?bool {
        return $this->isDeviceOnlyAuthSupported;
    }

    /**
     * Gets the isFallbackPublicClient property value. Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false which means the fallback application type is confidential client such as a web app. There are certain scenarios where Azure AD cannot determine the client application type. For example, the ROPC flow where it is configured without specifying a redirect URI. In those cases Azure AD interprets the application type based on the value of this property.
     * @return bool|null
    */
    public function getIsFallbackPublicClient(): ?bool {
        return $this->isFallbackPublicClient;
    }

    /**
     * Gets the keyCredentials property value. The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<KeyCredential>|null
    */
    public function getKeyCredentials(): ?array {
        return $this->keyCredentials;
    }

    /**
     * Gets the logo property value. The main logo for the application. Not nullable.
     * @return StreamInterface|null
    */
    public function getLogo(): ?StreamInterface {
        return $this->logo;
    }

    /**
     * Gets the notes property value. Notes relevant for the management of the application.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the oauth2RequirePostResponse property value. 
     * @return bool|null
    */
    public function getOauth2RequirePostResponse(): ?bool {
        return $this->oauth2RequirePostResponse;
    }

    /**
     * Gets the optionalClaims property value. Application developers can configure optional claims in their Azure AD applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
     * @return OptionalClaims|null
    */
    public function getOptionalClaims(): ?OptionalClaims {
        return $this->optionalClaims;
    }

    /**
     * Gets the owners property value. Directory objects that are owners of the application. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getOwners(): ?array {
        return $this->owners;
    }

    /**
     * Gets the parentalControlSettings property value. Specifies parental control settings for an application.
     * @return ParentalControlSettings|null
    */
    public function getParentalControlSettings(): ?ParentalControlSettings {
        return $this->parentalControlSettings;
    }

    /**
     * Gets the passwordCredentials property value. The collection of password credentials associated with the application. Not nullable.
     * @return array<PasswordCredential>|null
    */
    public function getPasswordCredentials(): ?array {
        return $this->passwordCredentials;
    }

    /**
     * Gets the publicClient property value. Specifies settings for installed clients such as desktop or mobile devices.
     * @return PublicClientApplication|null
    */
    public function getPublicClient(): ?PublicClientApplication {
        return $this->publicClient;
    }

    /**
     * Gets the publisherDomain property value. The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application's publisher domain. Supports $filter (eq, ne, ge, le, startsWith).
     * @return string|null
    */
    public function getPublisherDomain(): ?string {
        return $this->publisherDomain;
    }

    /**
     * Gets the requiredResourceAccess property value. Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<RequiredResourceAccess>|null
    */
    public function getRequiredResourceAccess(): ?array {
        return $this->requiredResourceAccess;
    }

    /**
     * Gets the signInAudience property value. Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg, AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount (default), and PersonalMicrosoftAccount. See more in the table below. Supports $filter (eq, ne, not).
     * @return string|null
    */
    public function getSignInAudience(): ?string {
        return $this->signInAudience;
    }

    /**
     * Gets the spa property value. Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
     * @return SpaApplication|null
    */
    public function getSpa(): ?SpaApplication {
        return $this->spa;
    }

    /**
     * Gets the tags property value. Custom strings that can be used to categorize and identify the application. Not nullable. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the tokenEncryptionKeyId property value. Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
     * @return string|null
    */
    public function getTokenEncryptionKeyId(): ?string {
        return $this->tokenEncryptionKeyId;
    }

    /**
     * Gets the tokenIssuancePolicies property value. 
     * @return array<TokenIssuancePolicy>|null
    */
    public function getTokenIssuancePolicies(): ?array {
        return $this->tokenIssuancePolicies;
    }

    /**
     * Gets the tokenLifetimePolicies property value. The tokenLifetimePolicies assigned to this application. Supports $expand.
     * @return array<TokenLifetimePolicy>|null
    */
    public function getTokenLifetimePolicies(): ?array {
        return $this->tokenLifetimePolicies;
    }

    /**
     * Gets the verifiedPublisher property value. Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification.
     * @return VerifiedPublisher|null
    */
    public function getVerifiedPublisher(): ?VerifiedPublisher {
        return $this->verifiedPublisher;
    }

    /**
     * Gets the web property value. Specifies settings for a web application.
     * @return WebApplication|null
    */
    public function getWeb(): ?WebApplication {
        return $this->web;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('addIns', $this->addIns);
        $writer->writeObjectValue('api', $this->api);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('applicationTemplateId', $this->applicationTemplateId);
        $writer->writeCollectionOfObjectValues('appRoles', $this->appRoles);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('createdOnBehalfOf', $this->createdOnBehalfOf);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('disabledByMicrosoftStatus', $this->disabledByMicrosoftStatus);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('extensionProperties', $this->extensionProperties);
        $writer->writeStringValue('groupMembershipClaims', $this->groupMembershipClaims);
        $writer->writeCollectionOfObjectValues('homeRealmDiscoveryPolicies', $this->homeRealmDiscoveryPolicies);
        $writer->writeCollectionOfPrimitiveValues('identifierUris', $this->identifierUris);
        $writer->writeObjectValue('info', $this->info);
        $writer->writeBooleanValue('isDeviceOnlyAuthSupported', $this->isDeviceOnlyAuthSupported);
        $writer->writeBooleanValue('isFallbackPublicClient', $this->isFallbackPublicClient);
        $writer->writeCollectionOfObjectValues('keyCredentials', $this->keyCredentials);
        $writer->writeBinaryContent('logo', $this->logo);
        $writer->writeStringValue('notes', $this->notes);
        $writer->writeBooleanValue('oauth2RequirePostResponse', $this->oauth2RequirePostResponse);
        $writer->writeObjectValue('optionalClaims', $this->optionalClaims);
        $writer->writeCollectionOfObjectValues('owners', $this->owners);
        $writer->writeObjectValue('parentalControlSettings', $this->parentalControlSettings);
        $writer->writeCollectionOfObjectValues('passwordCredentials', $this->passwordCredentials);
        $writer->writeObjectValue('publicClient', $this->publicClient);
        $writer->writeStringValue('publisherDomain', $this->publisherDomain);
        $writer->writeCollectionOfObjectValues('requiredResourceAccess', $this->requiredResourceAccess);
        $writer->writeStringValue('signInAudience', $this->signInAudience);
        $writer->writeObjectValue('spa', $this->spa);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeStringValue('tokenEncryptionKeyId', $this->tokenEncryptionKeyId);
        $writer->writeCollectionOfObjectValues('tokenIssuancePolicies', $this->tokenIssuancePolicies);
        $writer->writeCollectionOfObjectValues('tokenLifetimePolicies', $this->tokenLifetimePolicies);
        $writer->writeObjectValue('verifiedPublisher', $this->verifiedPublisher);
        $writer->writeObjectValue('web', $this->web);
    }

    /**
     * Sets the addIns property value. Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Office 365 call the application in the context of a document the user is working on.
     *  @param array<AddIn>|null $value Value to set for the addIns property.
    */
    public function setAddIns(?array $value ): void {
        $this->addIns = $value;
    }

    /**
     * Sets the api property value. Specifies settings for an application that implements a web API.
     *  @param ApiApplication|null $value Value to set for the api property.
    */
    public function setApi(?ApiApplication $value ): void {
        $this->api = $value;
    }

    /**
     * Sets the appId property value. The unique identifier for the application that is assigned to an application by Azure AD. Not nullable. Read-only.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the applicationTemplateId property value. Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne).
     *  @param string|null $value Value to set for the applicationTemplateId property.
    */
    public function setApplicationTemplateId(?string $value ): void {
        $this->applicationTemplateId = $value;
    }

    /**
     * Sets the appRoles property value. The collection of roles assigned to the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
     *  @param array<AppRole>|null $value Value to set for the appRoles property.
    */
    public function setAppRoles(?array $value ): void {
        $this->appRoles = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderBy.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the createdOnBehalfOf property value. Read-only.
     *  @param DirectoryObject|null $value Value to set for the createdOnBehalfOf property.
    */
    public function setCreatedOnBehalfOf(?DirectoryObject $value ): void {
        $this->createdOnBehalfOf = $value;
    }

    /**
     * Sets the description property value. Free text field to provide a description of the application object to end users. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the disabledByMicrosoftStatus property value. Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     *  @param string|null $value Value to set for the disabledByMicrosoftStatus property.
    */
    public function setDisabledByMicrosoftStatus(?string $value ): void {
        $this->disabledByMicrosoftStatus = $value;
    }

    /**
     * Sets the displayName property value. The display name for the application. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the extensionProperties property value. Read-only. Nullable.
     *  @param array<ExtensionProperty>|null $value Value to set for the extensionProperties property.
    */
    public function setExtensionProperties(?array $value ): void {
        $this->extensionProperties = $value;
    }

    /**
     * Sets the groupMembershipClaims property value. Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Azure AD roles), All (this gets all of the security groups, distribution groups, and Azure AD directory roles that the signed-in user is a member of).
     *  @param string|null $value Value to set for the groupMembershipClaims property.
    */
    public function setGroupMembershipClaims(?string $value ): void {
        $this->groupMembershipClaims = $value;
    }

    /**
     * Sets the homeRealmDiscoveryPolicies property value. 
     *  @param array<HomeRealmDiscoveryPolicy>|null $value Value to set for the homeRealmDiscoveryPolicies property.
    */
    public function setHomeRealmDiscoveryPolicies(?array $value ): void {
        $this->homeRealmDiscoveryPolicies = $value;
    }

    /**
     * Sets the identifierUris property value. Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you'll reference in your API's code, and it must be globally unique. You can use the default value provided, which is in the form api://<application-client-id>, or specify a more readable URI like https://contoso.com/api. For more information on valid identifierUris patterns and best practices, see Azure AD application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
     *  @param array<string>|null $value Value to set for the identifierUris property.
    */
    public function setIdentifierUris(?array $value ): void {
        $this->identifierUris = $value;
    }

    /**
     * Sets the info property value. Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     *  @param InformationalUrl|null $value Value to set for the info property.
    */
    public function setInfo(?InformationalUrl $value ): void {
        $this->info = $value;
    }

    /**
     * Sets the isDeviceOnlyAuthSupported property value. Specifies whether this application supports device authentication without a user. The default is false.
     *  @param bool|null $value Value to set for the isDeviceOnlyAuthSupported property.
    */
    public function setIsDeviceOnlyAuthSupported(?bool $value ): void {
        $this->isDeviceOnlyAuthSupported = $value;
    }

    /**
     * Sets the isFallbackPublicClient property value. Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false which means the fallback application type is confidential client such as a web app. There are certain scenarios where Azure AD cannot determine the client application type. For example, the ROPC flow where it is configured without specifying a redirect URI. In those cases Azure AD interprets the application type based on the value of this property.
     *  @param bool|null $value Value to set for the isFallbackPublicClient property.
    */
    public function setIsFallbackPublicClient(?bool $value ): void {
        $this->isFallbackPublicClient = $value;
    }

    /**
     * Sets the keyCredentials property value. The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le).
     *  @param array<KeyCredential>|null $value Value to set for the keyCredentials property.
    */
    public function setKeyCredentials(?array $value ): void {
        $this->keyCredentials = $value;
    }

    /**
     * Sets the logo property value. The main logo for the application. Not nullable.
     *  @param StreamInterface|null $value Value to set for the logo property.
    */
    public function setLogo(?StreamInterface $value ): void {
        $this->logo = $value;
    }

    /**
     * Sets the notes property value. Notes relevant for the management of the application.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the oauth2RequirePostResponse property value. 
     *  @param bool|null $value Value to set for the oauth2RequirePostResponse property.
    */
    public function setOauth2RequirePostResponse(?bool $value ): void {
        $this->oauth2RequirePostResponse = $value;
    }

    /**
     * Sets the optionalClaims property value. Application developers can configure optional claims in their Azure AD applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
     *  @param OptionalClaims|null $value Value to set for the optionalClaims property.
    */
    public function setOptionalClaims(?OptionalClaims $value ): void {
        $this->optionalClaims = $value;
    }

    /**
     * Sets the owners property value. Directory objects that are owners of the application. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value ): void {
        $this->owners = $value;
    }

    /**
     * Sets the parentalControlSettings property value. Specifies parental control settings for an application.
     *  @param ParentalControlSettings|null $value Value to set for the parentalControlSettings property.
    */
    public function setParentalControlSettings(?ParentalControlSettings $value ): void {
        $this->parentalControlSettings = $value;
    }

    /**
     * Sets the passwordCredentials property value. The collection of password credentials associated with the application. Not nullable.
     *  @param array<PasswordCredential>|null $value Value to set for the passwordCredentials property.
    */
    public function setPasswordCredentials(?array $value ): void {
        $this->passwordCredentials = $value;
    }

    /**
     * Sets the publicClient property value. Specifies settings for installed clients such as desktop or mobile devices.
     *  @param PublicClientApplication|null $value Value to set for the publicClient property.
    */
    public function setPublicClient(?PublicClientApplication $value ): void {
        $this->publicClient = $value;
    }

    /**
     * Sets the publisherDomain property value. The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application's publisher domain. Supports $filter (eq, ne, ge, le, startsWith).
     *  @param string|null $value Value to set for the publisherDomain property.
    */
    public function setPublisherDomain(?string $value ): void {
        $this->publisherDomain = $value;
    }

    /**
     * Sets the requiredResourceAccess property value. Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. Not nullable. Supports $filter (eq, not, ge, le).
     *  @param array<RequiredResourceAccess>|null $value Value to set for the requiredResourceAccess property.
    */
    public function setRequiredResourceAccess(?array $value ): void {
        $this->requiredResourceAccess = $value;
    }

    /**
     * Sets the signInAudience property value. Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg, AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount (default), and PersonalMicrosoftAccount. See more in the table below. Supports $filter (eq, ne, not).
     *  @param string|null $value Value to set for the signInAudience property.
    */
    public function setSignInAudience(?string $value ): void {
        $this->signInAudience = $value;
    }

    /**
     * Sets the spa property value. Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
     *  @param SpaApplication|null $value Value to set for the spa property.
    */
    public function setSpa(?SpaApplication $value ): void {
        $this->spa = $value;
    }

    /**
     * Sets the tags property value. Custom strings that can be used to categorize and identify the application. Not nullable. Supports $filter (eq, not, ge, le, startsWith).
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the tokenEncryptionKeyId property value. Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
     *  @param string|null $value Value to set for the tokenEncryptionKeyId property.
    */
    public function setTokenEncryptionKeyId(?string $value ): void {
        $this->tokenEncryptionKeyId = $value;
    }

    /**
     * Sets the tokenIssuancePolicies property value. 
     *  @param array<TokenIssuancePolicy>|null $value Value to set for the tokenIssuancePolicies property.
    */
    public function setTokenIssuancePolicies(?array $value ): void {
        $this->tokenIssuancePolicies = $value;
    }

    /**
     * Sets the tokenLifetimePolicies property value. The tokenLifetimePolicies assigned to this application. Supports $expand.
     *  @param array<TokenLifetimePolicy>|null $value Value to set for the tokenLifetimePolicies property.
    */
    public function setTokenLifetimePolicies(?array $value ): void {
        $this->tokenLifetimePolicies = $value;
    }

    /**
     * Sets the verifiedPublisher property value. Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification.
     *  @param VerifiedPublisher|null $value Value to set for the verifiedPublisher property.
    */
    public function setVerifiedPublisher(?VerifiedPublisher $value ): void {
        $this->verifiedPublisher = $value;
    }

    /**
     * Sets the web property value. Specifies settings for a web application.
     *  @param WebApplication|null $value Value to set for the web property.
    */
    public function setWeb(?WebApplication $value ): void {
        $this->web = $value;
    }

}
