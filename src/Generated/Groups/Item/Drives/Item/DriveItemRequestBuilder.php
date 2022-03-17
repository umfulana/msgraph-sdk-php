<?php

namespace Microsoft\Graph\Generated\Groups\Item\Drives\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Bundles\BundlesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Bundles\Item\DriveItemItemRequestBuilder as MicrosoftGraphGeneratedGroupsItemDrivesItemBundlesItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\EscapedList\ListRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Following\FollowingRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Following\Item\DriveItemItemRequestBuilder as MicrosoftGraphGeneratedGroupsItemDrivesItemFollowingItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Items\Item\DriveItemItemRequestBuilder as MicrosoftGraphGeneratedGroupsItemDrivesItemItemsItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\RootRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Special\Item\DriveItemItemRequestBuilder as MicrosoftGraphGeneratedGroupsItemDrivesItemSpecialItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Special\SpecialRequestBuilder;
use Microsoft\Graph\Generated\Models\Microsoft\Graph\Drive;
use Microsoft\Graph\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DriveItemRequestBuilder 
{
    public function bundles(): BundlesRequestBuilder {
        return new BundlesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function escapedList(): ListRequestBuilder {
        return new ListRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function following(): FollowingRequestBuilder {
        return new FollowingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function root(): RootRequestBuilder {
        return new RootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function special(): SpecialRequestBuilder {
        return new SpecialRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.drives.item.bundles.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedGroupsItemDrivesItemBundlesItemDriveItemItemRequestBuilder
    */
    public function bundlesById(string $id): MicrosoftGraphGeneratedGroupsItemDrivesItemBundlesItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem_id'] = $id;
        return new MicrosoftGraphGeneratedGroupsItemDrivesItemBundlesItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group_id}/drives/{drive_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property drives for groups
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * The group's drives. Read-only.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property drives in groups
     * @param Drive $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Drive $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property drives for groups
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.drives.item.following.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedGroupsItemDrivesItemFollowingItemDriveItemItemRequestBuilder
    */
    public function followingById(string $id): MicrosoftGraphGeneratedGroupsItemDrivesItemFollowingItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem_id'] = $id;
        return new MicrosoftGraphGeneratedGroupsItemDrivesItemFollowingItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The group's drives. Read-only.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Drive::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.drives.item.items.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedGroupsItemDrivesItemItemsItemDriveItemItemRequestBuilder
    */
    public function itemsById(string $id): MicrosoftGraphGeneratedGroupsItemDrivesItemItemsItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem_id'] = $id;
        return new MicrosoftGraphGeneratedGroupsItemDrivesItemItemsItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property drives in groups
     * @param Drive $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Drive $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.drives.item.special.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedGroupsItemDrivesItemSpecialItemDriveItemItemRequestBuilder
    */
    public function specialById(string $id): MicrosoftGraphGeneratedGroupsItemDrivesItemSpecialItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem_id'] = $id;
        return new MicrosoftGraphGeneratedGroupsItemDrivesItemSpecialItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
