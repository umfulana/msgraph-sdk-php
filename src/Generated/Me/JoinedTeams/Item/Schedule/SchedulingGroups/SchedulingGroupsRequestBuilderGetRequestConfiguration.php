<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\SchedulingGroups;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SchedulingGroupsRequestBuilderGetRequestConfiguration 
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
     * @var SchedulingGroupsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SchedulingGroupsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new schedulingGroupsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return SchedulingGroupsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): SchedulingGroupsRequestBuilderGetQueryParameters {
        return new SchedulingGroupsRequestBuilderGetQueryParameters($count, $filter, $orderby, $search, $select, $skip, $top);
    }

    /**
     * Instantiates a new schedulingGroupsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SchedulingGroupsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SchedulingGroupsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
