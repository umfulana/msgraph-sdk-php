<?php

namespace Microsoft\Graph\Generated\Communications\CallRecords;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Communications\CallRecords\CallRecordsGetDirectRoutingCallsWithFromDateTimeWithToDateTime\CallRecordsGetDirectRoutingCallsWithFromDateTimeWithToDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Communications\CallRecords\CallRecordsGetPstnCallsWithFromDateTimeWithToDateTime\CallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Communications\CallRecords\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Models\CallRecords\CallRecord;
use Microsoft\Graph\Generated\Models\CallRecords\CallRecordCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the callRecords property of the microsoft.graph.cloudCommunications entity.
*/
class CallRecordsRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to call the getDirectRoutingCalls method.
     * @param DateTime $fromDateTime Usage: fromDateTime={fromDateTime}
     * @param DateTime $toDateTime Usage: toDateTime={toDateTime}
     * @return CallRecordsGetDirectRoutingCallsWithFromDateTimeWithToDateTimeRequestBuilder
    */
    public function callRecordsGetDirectRoutingCallsWithFromDateTimeWithToDateTime(DateTime $fromDateTime, DateTime $toDateTime): CallRecordsGetDirectRoutingCallsWithFromDateTimeWithToDateTimeRequestBuilder {
        return new CallRecordsGetDirectRoutingCallsWithFromDateTimeWithToDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $fromDateTime, $toDateTime);
    }

    /**
     * Provides operations to call the getPstnCalls method.
     * @param DateTime $fromDateTime Usage: fromDateTime={fromDateTime}
     * @param DateTime $toDateTime Usage: toDateTime={toDateTime}
     * @return CallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilder
    */
    public function callRecordsGetPstnCallsWithFromDateTimeWithToDateTime(DateTime $fromDateTime, DateTime $toDateTime): CallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilder {
        return new CallRecordsGetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $fromDateTime, $toDateTime);
    }

    /**
     * Instantiates a new CallRecordsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/communications/callRecords{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get callRecords from communications
     * @param CallRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?CallRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CallRecordCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to callRecords for communications
     * @param CallRecord $body The request body
     * @param CallRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(CallRecord $body, ?CallRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CallRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get callRecords from communications
     * @param CallRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CallRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to callRecords for communications
     * @param CallRecord $body The request body
     * @param CallRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CallRecord $body, ?CallRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}