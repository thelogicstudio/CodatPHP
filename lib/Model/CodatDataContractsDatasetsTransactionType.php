<?php
/**
 * CodatDataContractsDatasetsTransactionType
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
 * CodatDataContractsDatasetsTransactionType Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CodatDataContractsDatasetsTransactionType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const CREDIT = 'Credit';

    public const DEBIT = 'Debit';

    public const INT = 'Int';

    public const DIV = 'Div';

    public const FEE = 'Fee';

    public const SER_CHG = 'SerChg';

    public const DEP = 'Dep';

    public const ATM = 'Atm';

    public const POS = 'Pos';

    public const XFER = 'Xfer';

    public const CHECK = 'Check';

    public const PAYMENT = 'Payment';

    public const CASH = 'Cash';

    public const DIRECT_DEP = 'DirectDep';

    public const DIRECT_DEBIT = 'DirectDebit';

    public const REPEAT_PMT = 'RepeatPmt';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::CREDIT,
            self::DEBIT,
            self::INT,
            self::DIV,
            self::FEE,
            self::SER_CHG,
            self::DEP,
            self::ATM,
            self::POS,
            self::XFER,
            self::CHECK,
            self::PAYMENT,
            self::CASH,
            self::DIRECT_DEP,
            self::DIRECT_DEBIT,
            self::REPEAT_PMT,
            self::OTHER
        ];
    }
}


