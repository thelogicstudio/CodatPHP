<?php
/**
 * CodatDataContractsDatasetsBillPaymentLinkType
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
 * CodatDataContractsDatasetsBillPaymentLinkType Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CodatDataContractsDatasetsBillPaymentLinkType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const UNLINKED = 'Unlinked';

    public const BILL = 'Bill';

    public const OTHER = 'Other';

    public const CREDIT_NOTE = 'CreditNote';

    public const BILL_PAYMENT = 'BillPayment';

    public const PAYMENT_ON_ACCOUNT = 'PaymentOnAccount';

    public const REFUND = 'Refund';

    public const MANUAL_JOURNAL = 'ManualJournal';

    public const DISCOUNT = 'Discount';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::UNLINKED,
            self::BILL,
            self::OTHER,
            self::CREDIT_NOTE,
            self::BILL_PAYMENT,
            self::PAYMENT_ON_ACCOUNT,
            self::REFUND,
            self::MANUAL_JOURNAL,
            self::DISCOUNT
        ];
    }
}


