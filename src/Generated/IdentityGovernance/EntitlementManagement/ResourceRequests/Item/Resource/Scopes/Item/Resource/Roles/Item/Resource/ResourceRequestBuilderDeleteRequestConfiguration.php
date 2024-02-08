<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceRequests\Item\Resource\Scopes\Item\Resource\Roles\Item\Resource;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourceRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * Instantiates a new ResourceRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        parent::__construct($headers ?? [], $options ?? []);
    }

}
