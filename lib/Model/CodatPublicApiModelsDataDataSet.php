<?php
/**
 * CodatPublicApiModelsDataDataSet
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
 * CodatPublicApiModelsDataDataSet Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatPublicApiModelsDataDataSet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.Public.Api.Models.Data.DataSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dataset_logs_url' => 'string',
        'id' => 'string',
        'company_id' => 'string',
        'connection_id' => 'string',
        'data_type' => 'string',
        'status' => '\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDatasetStatus',
        'error_message' => 'string',
        'requested' => '\DateTime',
        'completed' => '\DateTime',
        'progress' => 'int',
        'is_completed' => 'bool',
        'is_errored' => 'bool',
        'validationinformation_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dataset_logs_url' => null,
        'id' => 'uuid',
        'company_id' => 'uuid',
        'connection_id' => 'uuid',
        'data_type' => null,
        'status' => null,
        'error_message' => null,
        'requested' => 'date-time',
        'completed' => 'date-time',
        'progress' => 'int32',
        'is_completed' => null,
        'is_errored' => null,
        'validationinformation_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dataset_logs_url' => true,
		'id' => false,
		'company_id' => false,
		'connection_id' => false,
		'data_type' => true,
		'status' => false,
		'error_message' => true,
		'requested' => false,
		'completed' => true,
		'progress' => false,
		'is_completed' => false,
		'is_errored' => false,
		'validationinformation_url' => true
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
        'dataset_logs_url' => 'datasetLogsUrl',
        'id' => 'id',
        'company_id' => 'companyId',
        'connection_id' => 'connectionId',
        'data_type' => 'dataType',
        'status' => 'status',
        'error_message' => 'errorMessage',
        'requested' => 'requested',
        'completed' => 'completed',
        'progress' => 'progress',
        'is_completed' => 'isCompleted',
        'is_errored' => 'isErrored',
        'validationinformation_url' => 'validationinformationUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataset_logs_url' => 'setDatasetLogsUrl',
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'connection_id' => 'setConnectionId',
        'data_type' => 'setDataType',
        'status' => 'setStatus',
        'error_message' => 'setErrorMessage',
        'requested' => 'setRequested',
        'completed' => 'setCompleted',
        'progress' => 'setProgress',
        'is_completed' => 'setIsCompleted',
        'is_errored' => 'setIsErrored',
        'validationinformation_url' => 'setValidationinformationUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataset_logs_url' => 'getDatasetLogsUrl',
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'connection_id' => 'getConnectionId',
        'data_type' => 'getDataType',
        'status' => 'getStatus',
        'error_message' => 'getErrorMessage',
        'requested' => 'getRequested',
        'completed' => 'getCompleted',
        'progress' => 'getProgress',
        'is_completed' => 'getIsCompleted',
        'is_errored' => 'getIsErrored',
        'validationinformation_url' => 'getValidationinformationUrl'
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
        $this->setIfExists('dataset_logs_url', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('connection_id', $data ?? [], null);
        $this->setIfExists('data_type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('error_message', $data ?? [], null);
        $this->setIfExists('requested', $data ?? [], null);
        $this->setIfExists('completed', $data ?? [], null);
        $this->setIfExists('progress', $data ?? [], null);
        $this->setIfExists('is_completed', $data ?? [], null);
        $this->setIfExists('is_errored', $data ?? [], null);
        $this->setIfExists('validationinformation_url', $data ?? [], null);
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
        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if ($this->container['connection_id'] === null) {
            $invalidProperties[] = "'connection_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['requested'] === null) {
            $invalidProperties[] = "'requested' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
        }
        if ($this->container['is_completed'] === null) {
            $invalidProperties[] = "'is_completed' can't be null";
        }
        if ($this->container['is_errored'] === null) {
            $invalidProperties[] = "'is_errored' can't be null";
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
     * Gets dataset_logs_url
     *
     * @return string|null
     */
    public function getDatasetLogsUrl()
    {
        return $this->container['dataset_logs_url'];
    }

    /**
     * Sets dataset_logs_url
     *
     * @param string|null $dataset_logs_url dataset_logs_url
     *
     * @return self
     */
    public function setDatasetLogsUrl($dataset_logs_url)
    {
        if (is_null($dataset_logs_url)) {
            array_push($this->openAPINullablesSetToNull, 'dataset_logs_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dataset_logs_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dataset_logs_url'] = $dataset_logs_url;

        return $this;
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
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id company_id
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        if (is_null($company_id)) {
            throw new \InvalidArgumentException('non-nullable company_id cannot be null');
        }
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets connection_id
     *
     * @return string
     */
    public function getConnectionId()
    {
        return $this->container['connection_id'];
    }

    /**
     * Sets connection_id
     *
     * @param string $connection_id connection_id
     *
     * @return self
     */
    public function setConnectionId($connection_id)
    {
        if (is_null($connection_id)) {
            throw new \InvalidArgumentException('non-nullable connection_id cannot be null');
        }
        $this->container['connection_id'] = $connection_id;

        return $this;
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
     * Gets status
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDatasetStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDatasetStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message error_message
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        if (is_null($error_message)) {
            array_push($this->openAPINullablesSetToNull, 'error_message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('error_message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets requested
     *
     * @return \DateTime
     */
    public function getRequested()
    {
        return $this->container['requested'];
    }

    /**
     * Sets requested
     *
     * @param \DateTime $requested requested
     *
     * @return self
     */
    public function setRequested($requested)
    {
        if (is_null($requested)) {
            throw new \InvalidArgumentException('non-nullable requested cannot be null');
        }
        $this->container['requested'] = $requested;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return \DateTime|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param \DateTime|null $completed completed
     *
     * @return self
     */
    public function setCompleted($completed)
    {
        if (is_null($completed)) {
            array_push($this->openAPINullablesSetToNull, 'completed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('completed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return int
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param int $progress progress
     *
     * @return self
     */
    public function setProgress($progress)
    {
        if (is_null($progress)) {
            throw new \InvalidArgumentException('non-nullable progress cannot be null');
        }
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets is_completed
     *
     * @return bool
     */
    public function getIsCompleted()
    {
        return $this->container['is_completed'];
    }

    /**
     * Sets is_completed
     *
     * @param bool $is_completed is_completed
     *
     * @return self
     */
    public function setIsCompleted($is_completed)
    {
        if (is_null($is_completed)) {
            throw new \InvalidArgumentException('non-nullable is_completed cannot be null');
        }
        $this->container['is_completed'] = $is_completed;

        return $this;
    }

    /**
     * Gets is_errored
     *
     * @return bool
     */
    public function getIsErrored()
    {
        return $this->container['is_errored'];
    }

    /**
     * Sets is_errored
     *
     * @param bool $is_errored is_errored
     *
     * @return self
     */
    public function setIsErrored($is_errored)
    {
        if (is_null($is_errored)) {
            throw new \InvalidArgumentException('non-nullable is_errored cannot be null');
        }
        $this->container['is_errored'] = $is_errored;

        return $this;
    }

    /**
     * Gets validationinformation_url
     *
     * @return string|null
     */
    public function getValidationinformationUrl()
    {
        return $this->container['validationinformation_url'];
    }

    /**
     * Sets validationinformation_url
     *
     * @param string|null $validationinformation_url validationinformation_url
     *
     * @return self
     */
    public function setValidationinformationUrl($validationinformation_url)
    {
        if (is_null($validationinformation_url)) {
            array_push($this->openAPINullablesSetToNull, 'validationinformation_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validationinformation_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validationinformation_url'] = $validationinformation_url;

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


