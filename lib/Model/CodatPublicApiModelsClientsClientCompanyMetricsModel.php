<?php
/**
 * CodatPublicApiModelsClientsClientCompanyMetricsModel
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
 * CodatPublicApiModelsClientsClientCompanyMetricsModel Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatPublicApiModelsClientsClientCompanyMetricsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.Public.Api.Models.Clients.ClientCompanyMetricsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currently_linked' => 'int',
        'no_longer_linked' => 'int',
        'not_yet_linked' => 'int',
        'all_time_linked' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currently_linked' => 'int32',
        'no_longer_linked' => 'int32',
        'not_yet_linked' => 'int32',
        'all_time_linked' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currently_linked' => false,
		'no_longer_linked' => false,
		'not_yet_linked' => false,
		'all_time_linked' => false
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
        'currently_linked' => 'currentlyLinked',
        'no_longer_linked' => 'noLongerLinked',
        'not_yet_linked' => 'notYetLinked',
        'all_time_linked' => 'allTimeLinked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currently_linked' => 'setCurrentlyLinked',
        'no_longer_linked' => 'setNoLongerLinked',
        'not_yet_linked' => 'setNotYetLinked',
        'all_time_linked' => 'setAllTimeLinked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currently_linked' => 'getCurrentlyLinked',
        'no_longer_linked' => 'getNoLongerLinked',
        'not_yet_linked' => 'getNotYetLinked',
        'all_time_linked' => 'getAllTimeLinked'
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
        $this->setIfExists('currently_linked', $data ?? [], null);
        $this->setIfExists('no_longer_linked', $data ?? [], null);
        $this->setIfExists('not_yet_linked', $data ?? [], null);
        $this->setIfExists('all_time_linked', $data ?? [], null);
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
     * Gets currently_linked
     *
     * @return int|null
     */
    public function getCurrentlyLinked()
    {
        return $this->container['currently_linked'];
    }

    /**
     * Sets currently_linked
     *
     * @param int|null $currently_linked currently_linked
     *
     * @return self
     */
    public function setCurrentlyLinked($currently_linked)
    {
        if (is_null($currently_linked)) {
            throw new \InvalidArgumentException('non-nullable currently_linked cannot be null');
        }
        $this->container['currently_linked'] = $currently_linked;

        return $this;
    }

    /**
     * Gets no_longer_linked
     *
     * @return int|null
     */
    public function getNoLongerLinked()
    {
        return $this->container['no_longer_linked'];
    }

    /**
     * Sets no_longer_linked
     *
     * @param int|null $no_longer_linked no_longer_linked
     *
     * @return self
     */
    public function setNoLongerLinked($no_longer_linked)
    {
        if (is_null($no_longer_linked)) {
            throw new \InvalidArgumentException('non-nullable no_longer_linked cannot be null');
        }
        $this->container['no_longer_linked'] = $no_longer_linked;

        return $this;
    }

    /**
     * Gets not_yet_linked
     *
     * @return int|null
     */
    public function getNotYetLinked()
    {
        return $this->container['not_yet_linked'];
    }

    /**
     * Sets not_yet_linked
     *
     * @param int|null $not_yet_linked not_yet_linked
     *
     * @return self
     */
    public function setNotYetLinked($not_yet_linked)
    {
        if (is_null($not_yet_linked)) {
            throw new \InvalidArgumentException('non-nullable not_yet_linked cannot be null');
        }
        $this->container['not_yet_linked'] = $not_yet_linked;

        return $this;
    }

    /**
     * Gets all_time_linked
     *
     * @return int|null
     */
    public function getAllTimeLinked()
    {
        return $this->container['all_time_linked'];
    }

    /**
     * Sets all_time_linked
     *
     * @param int|null $all_time_linked all_time_linked
     *
     * @return self
     */
    public function setAllTimeLinked($all_time_linked)
    {
        if (is_null($all_time_linked)) {
            throw new \InvalidArgumentException('non-nullable all_time_linked cannot be null');
        }
        $this->container['all_time_linked'] = $all_time_linked;

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


