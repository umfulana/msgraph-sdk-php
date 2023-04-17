<?php

namespace Microsoft\Graph\Generated\Me\OnlineMeetings\Item\AttendanceReports\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MeetingAttendanceReportItemRequestBuilderGetRequestConfiguration 
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
     * @var MeetingAttendanceReportItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MeetingAttendanceReportItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MeetingAttendanceReportItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MeetingAttendanceReportItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MeetingAttendanceReportItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MeetingAttendanceReportItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MeetingAttendanceReportItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MeetingAttendanceReportItemRequestBuilderGetQueryParameters {
        return new MeetingAttendanceReportItemRequestBuilderGetQueryParameters($expand, $select);
    }

}