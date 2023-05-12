<?php
/**
 * CodatPublicApiModelsDataDatasetStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Codat API
 *
 * [See our API changes](https://docs.codat.io/changelog)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TheLogicStudio\CodatPHP\Model;
use \TheLogicStudio\CodatPHP\ObjectSerializer;

/**
 * CodatPublicApiModelsDataDatasetStatus Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CodatPublicApiModelsDataDatasetStatus
{
    /**
     * Possible values of this enum
     */
    public const INITIAL = 'Initial';

    public const QUEUED = 'Queued';

    public const FETCHING = 'Fetching';

    public const MAP_QUEUED = 'MapQueued';

    public const MAPPING = 'Mapping';

    public const COMPLETE = 'Complete';

    public const FETCH_ERROR = 'FetchError';

    public const MAP_ERROR = 'MapError';

    public const INTERNAL_ERROR = 'InternalError';

    public const PROCESSING_QUEUED = 'ProcessingQueued';

    public const PROCESSING = 'Processing';

    public const PROCESSING_ERROR = 'ProcessingError';

    public const VALIDATION_QUEUED = 'ValidationQueued';

    public const VALIDATING = 'Validating';

    public const VALIDATION_ERROR = 'ValidationError';

    public const AUTH_ERROR = 'AuthError';

    public const CANCELLED = 'Cancelled';

    public const NOT_SUPPORTED = 'NotSupported';

    public const RATE_LIMIT_ERROR = 'RateLimitError';

    public const PERMISSIONS_ERROR = 'PermissionsError';

    public const PREREQUISITE_NOT_MET = 'PrerequisiteNotMet';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INITIAL,
            self::QUEUED,
            self::FETCHING,
            self::MAP_QUEUED,
            self::MAPPING,
            self::COMPLETE,
            self::FETCH_ERROR,
            self::MAP_ERROR,
            self::INTERNAL_ERROR,
            self::PROCESSING_QUEUED,
            self::PROCESSING,
            self::PROCESSING_ERROR,
            self::VALIDATION_QUEUED,
            self::VALIDATING,
            self::VALIDATION_ERROR,
            self::AUTH_ERROR,
            self::CANCELLED,
            self::NOT_SUPPORTED,
            self::RATE_LIMIT_ERROR,
            self::PERMISSIONS_ERROR,
            self::PREREQUISITE_NOT_MET
        ];
    }
}


