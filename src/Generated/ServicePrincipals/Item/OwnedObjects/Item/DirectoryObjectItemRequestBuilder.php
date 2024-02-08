<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DirectoryObject;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item\GraphApplication\GraphApplicationRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item\GraphAppRoleAssignment\GraphAppRoleAssignmentRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item\GraphEndpoint\GraphEndpointRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item\GraphGroup\GraphGroupRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item\GraphServicePrincipal\GraphServicePrincipalRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the ownedObjects property of the microsoft.graph.servicePrincipal entity.
*/
class DirectoryObjectItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Casts the previous resource to application.
    */
    public function graphApplication(): GraphApplicationRequestBuilder {
        return new GraphApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to appRoleAssignment.
    */
    public function graphAppRoleAssignment(): GraphAppRoleAssignmentRequestBuilder {
        return new GraphAppRoleAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to endpoint.
    */
    public function graphEndpoint(): GraphEndpointRequestBuilder {
        return new GraphEndpointRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to group.
    */
    public function graphGroup(): GraphGroupRequestBuilder {
        return new GraphGroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function graphServicePrincipal(): GraphServicePrincipalRequestBuilder {
        return new GraphServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DirectoryObjectItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/ownedObjects/{directoryObject%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Directory objects that are owned by this service principal. Read-only. Nullable. Supports $expand, $select nested in $expand, and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     * @param DirectoryObjectItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DirectoryObject|null>
     * @throws Exception
    */
    public function get(?DirectoryObjectItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DirectoryObject::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Directory objects that are owned by this service principal. Read-only. Nullable. Supports $expand, $select nested in $expand, and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     * @param DirectoryObjectItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DirectoryObjectItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DirectoryObjectItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DirectoryObjectItemRequestBuilder {
        return new DirectoryObjectItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
