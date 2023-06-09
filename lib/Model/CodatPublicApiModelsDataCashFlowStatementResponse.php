<?php
/**
 * CodatPublicApiModelsDataCashFlowStatementResponse
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

use \ArrayAccess;
use \TheLogicStudio\CodatPHP\ObjectSerializer;

/**
 * CodatPublicApiModelsDataCashFlowStatementResponse Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatPublicApiModelsDataCashFlowStatementResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.Public.Api.Models.Data.CashFlowStatementResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reports' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCashFlowStatement[]',
        'report_basis' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCashFlowStatementReportingBasis',
        'report_input' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCashFlowStatementReportingData',
        'currency' => 'string',
        'most_recent_available_month' => '\DateTime',
        'earliest_available_month' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reports' => null,
        'report_basis' => null,
        'report_input' => null,
        'currency' => null,
        'most_recent_available_month' => 'date-time',
        'earliest_available_month' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reports' => false,
		'report_basis' => false,
		'report_input' => false,
		'currency' => false,
		'most_recent_available_month' => true,
		'earliest_available_month' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'reports' => 'reports',
        'report_basis' => 'reportBasis',
        'report_input' => 'reportInput',
        'currency' => 'currency',
        'most_recent_available_month' => 'mostRecentAvailableMonth',
        'earliest_available_month' => 'earliestAvailableMonth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reports' => 'setReports',
        'report_basis' => 'setReportBasis',
        'report_input' => 'setReportInput',
        'currency' => 'setCurrency',
        'most_recent_available_month' => 'setMostRecentAvailableMonth',
        'earliest_available_month' => 'setEarliestAvailableMonth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reports' => 'getReports',
        'report_basis' => 'getReportBasis',
        'report_input' => 'getReportInput',
        'currency' => 'getCurrency',
        'most_recent_available_month' => 'getMostRecentAvailableMonth',
        'earliest_available_month' => 'getEarliestAvailableMonth'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('reports', $data ?? [], null);
        $this->setIfExists('report_basis', $data ?? [], null);
        $this->setIfExists('report_input', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('most_recent_available_month', $data ?? [], null);
        $this->setIfExists('earliest_available_month', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reports'] === null) {
            $invalidProperties[] = "'reports' can't be null";
        }
        if ($this->container['report_basis'] === null) {
            $invalidProperties[] = "'report_basis' can't be null";
        }
        if ($this->container['report_input'] === null) {
            $invalidProperties[] = "'report_input' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) < 1)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets reports
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCashFlowStatement[]
     */
    public function getReports()
    {
        return $this->container['reports'];
    }

    /**
     * Sets reports
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCashFlowStatement[] $reports reports
     *
     * @return self
     */
    public function setReports($reports)
    {
        if (is_null($reports)) {
            throw new \InvalidArgumentException('non-nullable reports cannot be null');
        }
        $this->container['reports'] = $reports;

        return $this;
    }

    /**
     * Gets report_basis
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCashFlowStatementReportingBasis
     */
    public function getReportBasis()
    {
        return $this->container['report_basis'];
    }

    /**
     * Sets report_basis
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCashFlowStatementReportingBasis $report_basis report_basis
     *
     * @return self
     */
    public function setReportBasis($report_basis)
    {
        if (is_null($report_basis)) {
            throw new \InvalidArgumentException('non-nullable report_basis cannot be null');
        }
        $this->container['report_basis'] = $report_basis;

        return $this;
    }

    /**
     * Gets report_input
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCashFlowStatementReportingData
     */
    public function getReportInput()
    {
        return $this->container['report_input'];
    }

    /**
     * Sets report_input
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCashFlowStatementReportingData $report_input report_input
     *
     * @return self
     */
    public function setReportInput($report_input)
    {
        if (is_null($report_input)) {
            throw new \InvalidArgumentException('non-nullable report_input cannot be null');
        }
        $this->container['report_input'] = $report_input;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }

        if ((mb_strlen($currency) < 1)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling CodatPublicApiModelsDataCashFlowStatementResponse., must be bigger than or equal to 1.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets most_recent_available_month
     *
     * @return \DateTime|null
     */
    public function getMostRecentAvailableMonth()
    {
        return $this->container['most_recent_available_month'];
    }

    /**
     * Sets most_recent_available_month
     *
     * @param \DateTime|null $most_recent_available_month most_recent_available_month
     *
     * @return self
     */
    public function setMostRecentAvailableMonth($most_recent_available_month)
    {
        if (is_null($most_recent_available_month)) {
            array_push($this->openAPINullablesSetToNull, 'most_recent_available_month');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('most_recent_available_month', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['most_recent_available_month'] = $most_recent_available_month;

        return $this;
    }

    /**
     * Gets earliest_available_month
     *
     * @return \DateTime|null
     */
    public function getEarliestAvailableMonth()
    {
        return $this->container['earliest_available_month'];
    }

    /**
     * Sets earliest_available_month
     *
     * @param \DateTime|null $earliest_available_month earliest_available_month
     *
     * @return self
     */
    public function setEarliestAvailableMonth($earliest_available_month)
    {
        if (is_null($earliest_available_month)) {
            array_push($this->openAPINullablesSetToNull, 'earliest_available_month');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('earliest_available_month', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['earliest_available_month'] = $earliest_available_month;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


