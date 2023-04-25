<?php

namespace Microsoft\Graph\Generated\Applications\Item\HomeRealmDiscoveryPolicies;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Applications\Item\HomeRealmDiscoveryPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\HomeRealmDiscoveryPolicies\Item\HomeRealmDiscoveryPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Models\HomeRealmDiscoveryPolicyCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the homeRealmDiscoveryPolicies property of the microsoft.graph.application entity.
*/
class HomeRealmDiscoveryPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the homeRealmDiscoveryPolicies property of the microsoft.graph.application entity.
     * @param string $homeRealmDiscoveryPolicyId Unique identifier of the item
     * @return HomeRealmDiscoveryPolicyItemRequestBuilder
    */
    public function byHomeRealmDiscoveryPolicyId(string $homeRealmDiscoveryPolicyId): HomeRealmDiscoveryPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['homeRealmDiscoveryPolicy%2Did'] = $homeRealmDiscoveryPolicyId;
        return new HomeRealmDiscoveryPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new HomeRealmDiscoveryPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], "{+baseurl}/applications/{application%2Did}/homeRealmDiscoveryPolicies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}");
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get homeRealmDiscoveryPolicies from applications
     * @param HomeRealmDiscoveryPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?HomeRealmDiscoveryPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [HomeRealmDiscoveryPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get homeRealmDiscoveryPolicies from applications
     * @param HomeRealmDiscoveryPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HomeRealmDiscoveryPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

}
