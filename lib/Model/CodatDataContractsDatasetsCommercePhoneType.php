<?php
/**
 * CodatDataContractsDatasetsCommercePhoneType
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
 * CodatDataContractsDatasetsCommercePhoneType Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CodatDataContractsDatasetsCommercePhoneType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const PRIMARY = 'Primary';

    public const LANDLINE = 'Landline';

    public const MOBILE = 'Mobile';

    public const FAX = 'Fax';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PRIMARY,
            self::LANDLINE,
            self::MOBILE,
            self::FAX
        ];
    }
}


