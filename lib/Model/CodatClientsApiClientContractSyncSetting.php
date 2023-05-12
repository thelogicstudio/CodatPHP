<?php
/**
 * CodatClientsApiClientContractSyncSetting
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
 * CodatClientsApiClientContractSyncSetting Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatClientsApiClientContractSyncSetting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.Clients.Api.Client.Contract.SyncSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data_type' => 'string',
        'fetch_on_first_link' => 'bool',
        'sync_schedule' => 'int',
        'sync_order' => 'int',
        'sync_from_utc' => '\DateTime',
        'sync_from_window' => 'int',
        'months_to_sync' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data_type' => null,
        'fetch_on_first_link' => null,
        'sync_schedule' => 'int32',
        'sync_order' => 'int32',
        'sync_from_utc' => 'date-time',
        'sync_from_window' => 'int32',
        'months_to_sync' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'data_type' => true,
		'fetch_on_first_link' => false,
		'sync_schedule' => false,
		'sync_order' => false,
		'sync_from_utc' => true,
		'sync_from_window' => true,
		'months_to_sync' => true
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
        'data_type' => 'dataType',
        'fetch_on_first_link' => 'fetchOnFirstLink',
        'sync_schedule' => 'syncSchedule',
        'sync_order' => 'syncOrder',
        'sync_from_utc' => 'syncFromUtc',
        'sync_from_window' => 'syncFromWindow',
        'months_to_sync' => 'monthsToSync'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_type' => 'setDataType',
        'fetch_on_first_link' => 'setFetchOnFirstLink',
        'sync_schedule' => 'setSyncSchedule',
        'sync_order' => 'setSyncOrder',
        'sync_from_utc' => 'setSyncFromUtc',
        'sync_from_window' => 'setSyncFromWindow',
        'months_to_sync' => 'setMonthsToSync'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_type' => 'getDataType',
        'fetch_on_first_link' => 'getFetchOnFirstLink',
        'sync_schedule' => 'getSyncSchedule',
        'sync_order' => 'getSyncOrder',
        'sync_from_utc' => 'getSyncFromUtc',
        'sync_from_window' => 'getSyncFromWindow',
        'months_to_sync' => 'getMonthsToSync'
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
        $this->setIfExists('data_type', $data ?? [], null);
        $this->setIfExists('fetch_on_first_link', $data ?? [], null);
        $this->setIfExists('sync_schedule', $data ?? [], null);
        $this->setIfExists('sync_order', $data ?? [], null);
        $this->setIfExists('sync_from_utc', $data ?? [], null);
        $this->setIfExists('sync_from_window', $data ?? [], null);
        $this->setIfExists('months_to_sync', $data ?? [], null);
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
     * Gets data_type
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string|null $data_type data_type
     *
     * @return self
     */
    public function setDataType($data_type)
    {
        if (is_null($data_type)) {
            array_push($this->openAPINullablesSetToNull, 'data_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets fetch_on_first_link
     *
     * @return bool|null
     */
    public function getFetchOnFirstLink()
    {
        return $this->container['fetch_on_first_link'];
    }

    /**
     * Sets fetch_on_first_link
     *
     * @param bool|null $fetch_on_first_link fetch_on_first_link
     *
     * @return self
     */
    public function setFetchOnFirstLink($fetch_on_first_link)
    {
        if (is_null($fetch_on_first_link)) {
            throw new \InvalidArgumentException('non-nullable fetch_on_first_link cannot be null');
        }
        $this->container['fetch_on_first_link'] = $fetch_on_first_link;

        return $this;
    }

    /**
     * Gets sync_schedule
     *
     * @return int|null
     */
    public function getSyncSchedule()
    {
        return $this->container['sync_schedule'];
    }

    /**
     * Sets sync_schedule
     *
     * @param int|null $sync_schedule sync_schedule
     *
     * @return self
     */
    public function setSyncSchedule($sync_schedule)
    {
        if (is_null($sync_schedule)) {
            throw new \InvalidArgumentException('non-nullable sync_schedule cannot be null');
        }
        $this->container['sync_schedule'] = $sync_schedule;

        return $this;
    }

    /**
     * Gets sync_order
     *
     * @return int|null
     */
    public function getSyncOrder()
    {
        return $this->container['sync_order'];
    }

    /**
     * Sets sync_order
     *
     * @param int|null $sync_order sync_order
     *
     * @return self
     */
    public function setSyncOrder($sync_order)
    {
        if (is_null($sync_order)) {
            throw new \InvalidArgumentException('non-nullable sync_order cannot be null');
        }
        $this->container['sync_order'] = $sync_order;

        return $this;
    }

    /**
     * Gets sync_from_utc
     *
     * @return \DateTime|null
     */
    public function getSyncFromUtc()
    {
        return $this->container['sync_from_utc'];
    }

    /**
     * Sets sync_from_utc
     *
     * @param \DateTime|null $sync_from_utc sync_from_utc
     *
     * @return self
     */
    public function setSyncFromUtc($sync_from_utc)
    {
        if (is_null($sync_from_utc)) {
            array_push($this->openAPINullablesSetToNull, 'sync_from_utc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sync_from_utc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sync_from_utc'] = $sync_from_utc;

        return $this;
    }

    /**
     * Gets sync_from_window
     *
     * @return int|null
     */
    public function getSyncFromWindow()
    {
        return $this->container['sync_from_window'];
    }

    /**
     * Sets sync_from_window
     *
     * @param int|null $sync_from_window sync_from_window
     *
     * @return self
     */
    public function setSyncFromWindow($sync_from_window)
    {
        if (is_null($sync_from_window)) {
            array_push($this->openAPINullablesSetToNull, 'sync_from_window');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sync_from_window', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sync_from_window'] = $sync_from_window;

        return $this;
    }

    /**
     * Gets months_to_sync
     *
     * @return int|null
     */
    public function getMonthsToSync()
    {
        return $this->container['months_to_sync'];
    }

    /**
     * Sets months_to_sync
     *
     * @param int|null $months_to_sync months_to_sync
     *
     * @return self
     */
    public function setMonthsToSync($months_to_sync)
    {
        if (is_null($months_to_sync)) {
            array_push($this->openAPINullablesSetToNull, 'months_to_sync');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('months_to_sync', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['months_to_sync'] = $months_to_sync;

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


