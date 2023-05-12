<?php
/**
 * CodatPublicApiModelsPlatformCredentialsPlatformSourceModel
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
 * CodatPublicApiModelsPlatformCredentialsPlatformSourceModel Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatPublicApiModelsPlatformCredentialsPlatformSourceModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.Public.Api.Models.PlatformCredentials.PlatformSourceModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'key' => 'string',
        'logo_url' => 'string',
        'name' => 'string',
        'enabled' => 'bool',
        'source_id' => 'string',
        'integration_id' => 'string',
        'source_type' => '\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsSourceType',
        'is_offline_connector' => 'bool',
        'is_beta' => 'bool',
        'supported_environments' => '\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsIntegrationSupportedEnvironments',
        'linked_connections_count' => 'int',
        'total_connections_count' => 'int',
        'data_provided_by' => '\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsDataProvidedBy',
        'datatype_features' => '\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsDatatypeFeatures[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'key' => null,
        'logo_url' => null,
        'name' => null,
        'enabled' => null,
        'source_id' => 'uuid',
        'integration_id' => 'uuid',
        'source_type' => null,
        'is_offline_connector' => null,
        'is_beta' => null,
        'supported_environments' => null,
        'linked_connections_count' => 'int32',
        'total_connections_count' => 'int32',
        'data_provided_by' => null,
        'datatype_features' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'key' => true,
		'logo_url' => true,
		'name' => true,
		'enabled' => false,
		'source_id' => false,
		'integration_id' => false,
		'source_type' => false,
		'is_offline_connector' => false,
		'is_beta' => false,
		'supported_environments' => false,
		'linked_connections_count' => false,
		'total_connections_count' => false,
		'data_provided_by' => false,
		'datatype_features' => true
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
        'key' => 'key',
        'logo_url' => 'logoUrl',
        'name' => 'name',
        'enabled' => 'enabled',
        'source_id' => 'sourceId',
        'integration_id' => 'integrationId',
        'source_type' => 'sourceType',
        'is_offline_connector' => 'isOfflineConnector',
        'is_beta' => 'isBeta',
        'supported_environments' => 'supportedEnvironments',
        'linked_connections_count' => 'linkedConnectionsCount',
        'total_connections_count' => 'totalConnectionsCount',
        'data_provided_by' => 'dataProvidedBy',
        'datatype_features' => 'datatypeFeatures'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'key' => 'setKey',
        'logo_url' => 'setLogoUrl',
        'name' => 'setName',
        'enabled' => 'setEnabled',
        'source_id' => 'setSourceId',
        'integration_id' => 'setIntegrationId',
        'source_type' => 'setSourceType',
        'is_offline_connector' => 'setIsOfflineConnector',
        'is_beta' => 'setIsBeta',
        'supported_environments' => 'setSupportedEnvironments',
        'linked_connections_count' => 'setLinkedConnectionsCount',
        'total_connections_count' => 'setTotalConnectionsCount',
        'data_provided_by' => 'setDataProvidedBy',
        'datatype_features' => 'setDatatypeFeatures'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'key' => 'getKey',
        'logo_url' => 'getLogoUrl',
        'name' => 'getName',
        'enabled' => 'getEnabled',
        'source_id' => 'getSourceId',
        'integration_id' => 'getIntegrationId',
        'source_type' => 'getSourceType',
        'is_offline_connector' => 'getIsOfflineConnector',
        'is_beta' => 'getIsBeta',
        'supported_environments' => 'getSupportedEnvironments',
        'linked_connections_count' => 'getLinkedConnectionsCount',
        'total_connections_count' => 'getTotalConnectionsCount',
        'data_provided_by' => 'getDataProvidedBy',
        'datatype_features' => 'getDatatypeFeatures'
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
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('logo_url', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('integration_id', $data ?? [], null);
        $this->setIfExists('source_type', $data ?? [], null);
        $this->setIfExists('is_offline_connector', $data ?? [], null);
        $this->setIfExists('is_beta', $data ?? [], null);
        $this->setIfExists('supported_environments', $data ?? [], null);
        $this->setIfExists('linked_connections_count', $data ?? [], null);
        $this->setIfExists('total_connections_count', $data ?? [], null);
        $this->setIfExists('data_provided_by', $data ?? [], null);
        $this->setIfExists('datatype_features', $data ?? [], null);
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
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            array_push($this->openAPINullablesSetToNull, 'key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url logo_url
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        if (is_null($logo_url)) {
            array_push($this->openAPINullablesSetToNull, 'logo_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logo_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id source_id
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
     * Gets integration_id
     *
     * @return string|null
     */
    public function getIntegrationId()
    {
        return $this->container['integration_id'];
    }

    /**
     * Sets integration_id
     *
     * @param string|null $integration_id integration_id
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
     * Gets source_type
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsSourceType|null
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsSourceType|null $source_type source_type
     *
     * @return self
     */
    public function setSourceType($source_type)
    {
        if (is_null($source_type)) {
            throw new \InvalidArgumentException('non-nullable source_type cannot be null');
        }
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets is_offline_connector
     *
     * @return bool|null
     */
    public function getIsOfflineConnector()
    {
        return $this->container['is_offline_connector'];
    }

    /**
     * Sets is_offline_connector
     *
     * @param bool|null $is_offline_connector is_offline_connector
     *
     * @return self
     */
    public function setIsOfflineConnector($is_offline_connector)
    {
        if (is_null($is_offline_connector)) {
            throw new \InvalidArgumentException('non-nullable is_offline_connector cannot be null');
        }
        $this->container['is_offline_connector'] = $is_offline_connector;

        return $this;
    }

    /**
     * Gets is_beta
     *
     * @return bool|null
     */
    public function getIsBeta()
    {
        return $this->container['is_beta'];
    }

    /**
     * Sets is_beta
     *
     * @param bool|null $is_beta is_beta
     *
     * @return self
     */
    public function setIsBeta($is_beta)
    {
        if (is_null($is_beta)) {
            throw new \InvalidArgumentException('non-nullable is_beta cannot be null');
        }
        $this->container['is_beta'] = $is_beta;

        return $this;
    }

    /**
     * Gets supported_environments
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsIntegrationSupportedEnvironments|null
     */
    public function getSupportedEnvironments()
    {
        return $this->container['supported_environments'];
    }

    /**
     * Sets supported_environments
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsIntegrationSupportedEnvironments|null $supported_environments supported_environments
     *
     * @return self
     */
    public function setSupportedEnvironments($supported_environments)
    {
        if (is_null($supported_environments)) {
            throw new \InvalidArgumentException('non-nullable supported_environments cannot be null');
        }
        $this->container['supported_environments'] = $supported_environments;

        return $this;
    }

    /**
     * Gets linked_connections_count
     *
     * @return int|null
     */
    public function getLinkedConnectionsCount()
    {
        return $this->container['linked_connections_count'];
    }

    /**
     * Sets linked_connections_count
     *
     * @param int|null $linked_connections_count linked_connections_count
     *
     * @return self
     */
    public function setLinkedConnectionsCount($linked_connections_count)
    {
        if (is_null($linked_connections_count)) {
            throw new \InvalidArgumentException('non-nullable linked_connections_count cannot be null');
        }
        $this->container['linked_connections_count'] = $linked_connections_count;

        return $this;
    }

    /**
     * Gets total_connections_count
     *
     * @return int|null
     */
    public function getTotalConnectionsCount()
    {
        return $this->container['total_connections_count'];
    }

    /**
     * Sets total_connections_count
     *
     * @param int|null $total_connections_count total_connections_count
     *
     * @return self
     */
    public function setTotalConnectionsCount($total_connections_count)
    {
        if (is_null($total_connections_count)) {
            throw new \InvalidArgumentException('non-nullable total_connections_count cannot be null');
        }
        $this->container['total_connections_count'] = $total_connections_count;

        return $this;
    }

    /**
     * Gets data_provided_by
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsDataProvidedBy|null
     */
    public function getDataProvidedBy()
    {
        return $this->container['data_provided_by'];
    }

    /**
     * Sets data_provided_by
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsDataProvidedBy|null $data_provided_by data_provided_by
     *
     * @return self
     */
    public function setDataProvidedBy($data_provided_by)
    {
        if (is_null($data_provided_by)) {
            throw new \InvalidArgumentException('non-nullable data_provided_by cannot be null');
        }
        $this->container['data_provided_by'] = $data_provided_by;

        return $this;
    }

    /**
     * Gets datatype_features
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsDatatypeFeatures[]|null
     */
    public function getDatatypeFeatures()
    {
        return $this->container['datatype_features'];
    }

    /**
     * Sets datatype_features
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsPlatformCredentialsDatatypeFeatures[]|null $datatype_features datatype_features
     *
     * @return self
     */
    public function setDatatypeFeatures($datatype_features)
    {
        if (is_null($datatype_features)) {
            array_push($this->openAPINullablesSetToNull, 'datatype_features');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('datatype_features', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['datatype_features'] = $datatype_features;

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


