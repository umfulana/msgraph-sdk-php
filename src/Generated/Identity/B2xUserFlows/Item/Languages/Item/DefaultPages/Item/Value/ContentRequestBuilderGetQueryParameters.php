<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item\DefaultPages\Item\Value;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get media content for the navigation property defaultPages from identity
*/
class ContentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24format")
     * @var string|null $format Format of the content
    */
    public ?string $format = null;
    
    /**
     * Instantiates a new ContentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $format Format of the content
    */
    public function __construct(?string $format = null) {
        $this->format = $format;
    }

}