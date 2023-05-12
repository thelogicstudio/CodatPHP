<?php
/**
 * CodatDataContractsDatasetsCommercePlatformTransactionType
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
 * CodatDataContractsDatasetsCommercePlatformTransactionType Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CodatDataContractsDatasetsCommercePlatformTransactionType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const PAYMENT = 'Payment';

    public const REFUND = 'Refund';

    public const PAYOUT = 'Payout';

    public const FAILED_PAYOUT = 'FailedPayout';

    public const TRANSFER = 'Transfer';

    public const PAYMENT_FEE = 'PaymentFee';

    public const PAYMENT_FEE_REFUND = 'PaymentFeeRefund';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PAYMENT,
            self::REFUND,
            self::PAYOUT,
            self::FAILED_PAYOUT,
            self::TRANSFER,
            self::PAYMENT_FEE,
            self::PAYMENT_FEE_REFUND
        ];
    }
}

