<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters {
        return new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters($expand, $select);
    }

}