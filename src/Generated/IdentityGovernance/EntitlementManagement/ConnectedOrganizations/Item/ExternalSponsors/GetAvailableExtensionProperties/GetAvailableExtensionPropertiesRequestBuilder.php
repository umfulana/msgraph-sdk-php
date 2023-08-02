<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\ExternalSponsors\GetAvailableExtensionProperties;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getAvailableExtensionProperties method.
*/
class GetAvailableExtensionPropertiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetAvailableExtensionPropertiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/connectedOrganizations/{connectedOrganization%2Did}/externalSponsors/getAvailableExtensionProperties');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Return all directory extension definitions that have been registered in a directory, including through multi-tenant apps. The following entities support extension properties:+ user+ group+ administrativeUnit+ application+ device+ organization
     * @param GetAvailableExtensionPropertiesPostRequestBody $body The request body
     * @param GetAvailableExtensionPropertiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/directoryobject-getavailableextensionproperties?view=graph-rest-1.0 Find more info here
    */
    public function post(GetAvailableExtensionPropertiesPostRequestBody $body, ?GetAvailableExtensionPropertiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [GetAvailableExtensionPropertiesResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Return all directory extension definitions that have been registered in a directory, including through multi-tenant apps. The following entities support extension properties:+ user+ group+ administrativeUnit+ application+ device+ organization
     * @param GetAvailableExtensionPropertiesPostRequestBody $body The request body
     * @param GetAvailableExtensionPropertiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetAvailableExtensionPropertiesPostRequestBody $body, ?GetAvailableExtensionPropertiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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