<?php

namespace Microsoft\Graph\Generated\Organization\Item\CertificateBasedAuthConfiguration;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\CertificateBasedAuthConfiguration;
use Microsoft\Graph\Generated\Models\CertificateBasedAuthConfigurationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Organization\Item\CertificateBasedAuthConfiguration\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Organization\Item\CertificateBasedAuthConfiguration\Item\CertificateBasedAuthConfigurationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the certificateBasedAuthConfiguration property of the microsoft.graph.organization entity.
*/
class CertificateBasedAuthConfigurationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the certificateBasedAuthConfiguration property of the microsoft.graph.organization entity.
     * @param string $certificateBasedAuthConfigurationId Unique identifier of the item
     * @return CertificateBasedAuthConfigurationItemRequestBuilder
    */
    public function byCertificateBasedAuthConfigurationId(string $certificateBasedAuthConfigurationId): CertificateBasedAuthConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['certificateBasedAuthConfiguration%2Did'] = $certificateBasedAuthConfigurationId;
        return new CertificateBasedAuthConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CertificateBasedAuthConfigurationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organization/{organization%2Did}/certificateBasedAuthConfiguration{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of certificateBasedAuthConfiguration objects.
     * @param CertificateBasedAuthConfigurationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/certificatebasedauthconfiguration-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?CertificateBasedAuthConfigurationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedAuthConfigurationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a new certificateBasedAuthConfiguration object.
     * @param CertificateBasedAuthConfiguration $body The request body
     * @param CertificateBasedAuthConfigurationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/certificatebasedauthconfiguration-post-certificatebasedauthconfiguration?view=graph-rest-1.0 Find more info here
    */
    public function post(CertificateBasedAuthConfiguration $body, ?CertificateBasedAuthConfigurationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedAuthConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get a list of certificateBasedAuthConfiguration objects.
     * @param CertificateBasedAuthConfigurationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CertificateBasedAuthConfigurationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Create a new certificateBasedAuthConfiguration object.
     * @param CertificateBasedAuthConfiguration $body The request body
     * @param CertificateBasedAuthConfigurationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CertificateBasedAuthConfiguration $body, ?CertificateBasedAuthConfigurationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}