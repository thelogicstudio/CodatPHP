<?php
/**
 * CodatPublicApiModelsCompanyDataConnection
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
 * CodatPublicApiModelsCompanyDataConnection Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatPublicApiModelsCompanyDataConnection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.Public.Api.Models.Company.DataConnection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'integration_id' => 'string',
        'integration_key' => 'string',
        'source_id' => 'string',
        'platform_name' => 'string',
        'link_url' => 'string',
        'status' => 'string',
        'last_sync' => '\DateTime',
        'created' => '\DateTime',
        'source_type' => 'string',
        'data_connection_errors' => '\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnectionError[]',
        'connection_info' => 'array<string,mixed>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'integration_id' => 'uuid',
        'integration_key' => null,
        'source_id' => 'uuid',
        'platform_name' => null,
        'link_url' => null,
        'status' => null,
        'last_sync' => 'date-time',
        'created' => 'date-time',
        'source_type' => null,
        'data_connection_errors' => null,
        'connection_info' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'integration_id' => false,
		'integration_key' => true,
		'source_id' => false,
		'platform_name' => false,
		'link_url' => false,
		'status' => true,
		'last_sync' => true,
		'created' => true,
		'source_type' => true,
		'data_connection_errors' => true,
		'connection_info' => true
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
        'id' => 'id',
        'integration_id' => 'integrationId',
        'integration_key' => 'integrationKey',
        'source_id' => 'sourceId',
        'platform_name' => 'platformName',
        'link_url' => 'linkUrl',
        'status' => 'status',
        'last_sync' => 'lastSync',
        'created' => 'created',
        'source_type' => 'sourceType',
        'data_connection_errors' => 'dataConnectionErrors',
        'connection_info' => 'connectionInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'integration_id' => 'setIntegrationId',
        'integration_key' => 'setIntegrationKey',
        'source_id' => 'setSourceId',
        'platform_name' => 'setPlatformName',
        'link_url' => 'setLinkUrl',
        'status' => 'setStatus',
        'last_sync' => 'setLastSync',
        'created' => 'setCreated',
        'source_type' => 'setSourceType',
        'data_connection_errors' => 'setDataConnectionErrors',
        'connection_info' => 'setConnectionInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'integration_id' => 'getIntegrationId',
        'integration_key' => 'getIntegrationKey',
        'source_id' => 'getSourceId',
        'platform_name' => 'getPlatformName',
        'link_url' => 'getLinkUrl',
        'status' => 'getStatus',
        'last_sync' => 'getLastSync',
        'created' => 'getCreated',
        'source_type' => 'getSourceType',
        'data_connection_errors' => 'getDataConnectionErrors',
        'connection_info' => 'getConnectionInfo'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('integration_id', $data ?? [], null);
        $this->setIfExists('integration_key', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('platform_name', $data ?? [], null);
        $this->setIfExists('link_url', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('last_sync', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('source_type', $data ?? [], null);
        $this->setIfExists('data_connection_errors', $data ?? [], null);
        $this->setIfExists('connection_info', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['integration_id'] === null) {
            $invalidProperties[] = "'integration_id' can't be null";
        }
        if ($this->container['source_id'] === null) {
            $invalidProperties[] = "'source_id' can't be null";
        }
        if ($this->container['platform_name'] === null) {
            $invalidProperties[] = "'platform_name' can't be null";
        }
        if ((mb_strlen($this->container['platform_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'platform_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['link_url'] === null) {
            $invalidProperties[] = "'link_url' can't be null";
        }
        if ((mb_strlen($this->container['link_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'link_url', the character length must be bigger than or equal to 1.";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets integration_id
     *
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->container['integration_id'];
    }

    /**
     * Sets integration_id
     *
     * @param string $integration_id integration_id
     *
     * @return self
     */
    public function setIntegrationId($integration_id)
    {
        if (is_null($integration_id)) {
            throw new \InvalidArgumentException('non-nullable integration_id cannot be null');
        }
        $this->container['integration_id'] = $integration_id;

        return $this;
    }

    /**
     * Gets integration_key
     *
     * @return string|null
     */
    public function getIntegrationKey()
    {
        return $this->container['integration_key'];
    }

    /**
     * Sets integration_key
     *
     * @param string|null $integration_key integration_key
     *
     * @return self
     */
    public function setIntegrationKey($integration_key)
    {
        if (is_null($integration_key)) {
            array_push($this->openAPINullablesSetToNull, 'integration_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('integration_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['integration_key'] = $integration_key;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string $source_id source_id
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        if (is_null($source_id)) {
            throw new \InvalidArgumentException('non-nullable source_id cannot be null');
        }
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets platform_name
     *
     * @return string
     */
    public function getPlatformName()
    {
        return $this->container['platform_name'];
    }

    /**
     * Sets platform_name
     *
     * @param string $platform_name platform_name
     *
     * @return self
     */
    public function setPlatformName($platform_name)
    {
        if (is_null($platform_name)) {
            throw new \InvalidArgumentException('non-nullable platform_name cannot be null');
        }

        if ((mb_strlen($platform_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $platform_name when calling CodatPublicApiModelsCompanyDataConnection., must be bigger than or equal to 1.');
        }

        $this->container['platform_name'] = $platform_name;

        return $this;
    }

    /**
     * Gets link_url
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->container['link_url'];
    }

    /**
     * Sets link_url
     *
     * @param string $link_url link_url
     *
     * @return self
     */
    public function setLinkUrl($link_url)
    {
        if (is_null($link_url)) {
            throw new \InvalidArgumentException('non-nullable link_url cannot be null');
        }

        if ((mb_strlen($link_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $link_url when calling CodatPublicApiModelsCompanyDataConnection., must be bigger than or equal to 1.');
        }

        $this->container['link_url'] = $link_url;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets last_sync
     *
     * @return \DateTime|null
     */
    public function getLastSync()
    {
        return $this->container['last_sync'];
    }

    /**
     * Sets last_sync
     *
     * @param \DateTime|null $last_sync last_sync
     *
     * @return self
     */
    public function setLastSync($last_sync)
    {
        if (is_null($last_sync)) {
            array_push($this->openAPINullablesSetToNull, 'last_sync');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_sync', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_sync'] = $last_sync;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            array_push($this->openAPINullablesSetToNull, 'created');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param string|null $source_type source_type
     *
     * @return self
     */
    public function setSourceType($source_type)
    {
        if (is_null($source_type)) {
            array_push($this->openAPINullablesSetToNull, 'source_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets data_connection_errors
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnectionError[]|null
     */
    public function getDataConnectionErrors()
    {
        return $this->container['data_connection_errors'];
    }

    /**
     * Sets data_connection_errors
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnectionError[]|null $data_connection_errors data_connection_errors
     *
     * @return self
     */
    public function setDataConnectionErrors($data_connection_errors)
    {
        if (is_null($data_connection_errors)) {
            array_push($this->openAPINullablesSetToNull, 'data_connection_errors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_connection_errors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_connection_errors'] = $data_connection_errors;

        return $this;
    }

    /**
     * Gets connection_info
     *
     * @return array<string,mixed>|null
     */
    public function getConnectionInfo()
    {
        return $this->container['connection_info'];
    }

    /**
     * Sets connection_info
     *
     * @param array<string,mixed>|null $connection_info connection_info
     *
     * @return self
     */
    public function setConnectionInfo($connection_info)
    {
        if (is_null($connection_info)) {
            array_push($this->openAPINullablesSetToNull, 'connection_info');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('connection_info', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['connection_info'] = $connection_info;

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


