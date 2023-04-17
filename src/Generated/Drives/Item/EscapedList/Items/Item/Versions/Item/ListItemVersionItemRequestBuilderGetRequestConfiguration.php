<?php

namespace Microsoft\Graph\Generated\Drives\Item\EscapedList\Items\Item\Versions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ListItemVersionItemRequestBuilderGetRequestConfiguration 
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
     * @var ListItemVersionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ListItemVersionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ListItemVersionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ListItemVersionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ListItemVersionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ListItemVersionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ListItemVersionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ListItemVersionItemRequestBuilderGetQueryParameters {
        return new ListItemVersionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}