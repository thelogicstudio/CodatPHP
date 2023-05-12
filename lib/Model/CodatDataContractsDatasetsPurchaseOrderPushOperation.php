<?php
/**
 * CodatDataContractsDatasetsPurchaseOrderPushOperation
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
 * CodatDataContractsDatasetsPurchaseOrderPushOperation Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatDataContractsDatasetsPurchaseOrderPushOperation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.DataContracts.Datasets.PurchaseOrderPushOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'changes' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsPushPushOperationChange[]',
        'data' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder',
        'data_type' => 'string',
        'company_id' => 'string',
        'push_operation_key' => 'string',
        'data_connection_key' => 'string',
        'requested_on_utc' => '\DateTime',
        'completed_on_utc' => '\DateTime',
        'timeout_in_minutes' => 'int',
        'timeout_in_seconds' => 'int',
        'status' => 'string',
        'error_message' => 'string',
        'validation' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsValidationValidationResult',
        'status_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'changes' => null,
        'data' => null,
        'data_type' => null,
        'company_id' => 'uuid',
        'push_operation_key' => 'uuid',
        'data_connection_key' => 'uuid',
        'requested_on_utc' => 'date-time',
        'completed_on_utc' => 'date-time',
        'timeout_in_minutes' => 'int32',
        'timeout_in_seconds' => 'int32',
        'status' => null,
        'error_message' => null,
        'validation' => null,
        'status_code' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'changes' => true,
		'data' => false,
		'data_type' => true,
		'company_id' => false,
		'push_operation_key' => false,
		'data_connection_key' => false,
		'requested_on_utc' => false,
		'completed_on_utc' => true,
		'timeout_in_minutes' => true,
		'timeout_in_seconds' => true,
		'status' => false,
		'error_message' => true,
		'validation' => false,
		'status_code' => false
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
        'changes' => 'changes',
        'data' => 'data',
        'data_type' => 'dataType',
        'company_id' => 'companyId',
        'push_operation_key' => 'pushOperationKey',
        'data_connection_key' => 'dataConnectionKey',
        'requested_on_utc' => 'requestedOnUtc',
        'completed_on_utc' => 'completedOnUtc',
        'timeout_in_minutes' => 'timeoutInMinutes',
        'timeout_in_seconds' => 'timeoutInSeconds',
        'status' => 'status',
        'error_message' => 'errorMessage',
        'validation' => 'validation',
        'status_code' => 'statusCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changes' => 'setChanges',
        'data' => 'setData',
        'data_type' => 'setDataType',
        'company_id' => 'setCompanyId',
        'push_operation_key' => 'setPushOperationKey',
        'data_connection_key' => 'setDataConnectionKey',
        'requested_on_utc' => 'setRequestedOnUtc',
        'completed_on_utc' => 'setCompletedOnUtc',
        'timeout_in_minutes' => 'setTimeoutInMinutes',
        'timeout_in_seconds' => 'setTimeoutInSeconds',
        'status' => 'setStatus',
        'error_message' => 'setErrorMessage',
        'validation' => 'setValidation',
        'status_code' => 'setStatusCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changes' => 'getChanges',
        'data' => 'getData',
        'data_type' => 'getDataType',
        'company_id' => 'getCompanyId',
        'push_operation_key' => 'getPushOperationKey',
        'data_connection_key' => 'getDataConnectionKey',
        'requested_on_utc' => 'getRequestedOnUtc',
        'completed_on_utc' => 'getCompletedOnUtc',
        'timeout_in_minutes' => 'getTimeoutInMinutes',
        'timeout_in_seconds' => 'getTimeoutInSeconds',
        'status' => 'getStatus',
        'error_message' => 'getErrorMessage',
        'validation' => 'getValidation',
        'status_code' => 'getStatusCode'
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
        $this->setIfExists('changes', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('data_type', $data ?? [], null);
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('push_operation_key', $data ?? [], null);
        $this->setIfExists('data_connection_key', $data ?? [], null);
        $this->setIfExists('requested_on_utc', $data ?? [], null);
        $this->setIfExists('completed_on_utc', $data ?? [], null);
        $this->setIfExists('timeout_in_minutes', $data ?? [], null);
        $this->setIfExists('timeout_in_seconds', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('error_message', $data ?? [], null);
        $this->setIfExists('validation', $data ?? [], null);
        $this->setIfExists('status_code', $data ?? [], null);
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

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if ($this->container['push_operation_key'] === null) {
            $invalidProperties[] = "'push_operation_key' can't be null";
        }
        if ($this->container['data_connection_key'] === null) {
            $invalidProperties[] = "'data_connection_key' can't be null";
        }
        if ($this->container['requested_on_utc'] === null) {
            $invalidProperties[] = "'requested_on_utc' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ((mb_strlen($this->container['status']) < 1)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['status_code'] === null) {
            $invalidProperties[] = "'status_code' can't be null";
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
     * Gets changes
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsPushPushOperationChange[]|null
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsPushPushOperationChange[]|null $changes changes
     *
     * @return self
     */
    public function setChanges($changes)
    {
        if (is_null($changes)) {
            array_push($this->openAPINullablesSetToNull, 'changes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('changes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

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
     * Gets push_operation_key
     *
     * @return string
     */
    public function getPushOperationKey()
    {
        return $this->container['push_operation_key'];
    }

    /**
     * Sets push_operation_key
     *
     * @param string $push_operation_key push_operation_key
     *
     * @return self
     */
    public function setPushOperationKey($push_operation_key)
    {
        if (is_null($push_operation_key)) {
            throw new \InvalidArgumentException('non-nullable push_operation_key cannot be null');
        }
        $this->container['push_operation_key'] = $push_operation_key;

        return $this;
    }

    /**
     * Gets data_connection_key
     *
     * @return string
     */
    public function getDataConnectionKey()
    {
        return $this->container['data_connection_key'];
    }

    /**
     * Sets data_connection_key
     *
     * @param string $data_connection_key data_connection_key
     *
     * @return self
     */
    public function setDataConnectionKey($data_connection_key)
    {
        if (is_null($data_connection_key)) {
            throw new \InvalidArgumentException('non-nullable data_connection_key cannot be null');
        }
        $this->container['data_connection_key'] = $data_connection_key;

        return $this;
    }

    /**
     * Gets requested_on_utc
     *
     * @return \DateTime
     */
    public function getRequestedOnUtc()
    {
        return $this->container['requested_on_utc'];
    }

    /**
     * Sets requested_on_utc
     *
     * @param \DateTime $requested_on_utc requested_on_utc
     *
     * @return self
     */
    public function setRequestedOnUtc($requested_on_utc)
    {
        if (is_null($requested_on_utc)) {
            throw new \InvalidArgumentException('non-nullable requested_on_utc cannot be null');
        }
        $this->container['requested_on_utc'] = $requested_on_utc;

        return $this;
    }

    /**
     * Gets completed_on_utc
     *
     * @return \DateTime|null
     */
    public function getCompletedOnUtc()
    {
        return $this->container['completed_on_utc'];
    }

    /**
     * Sets completed_on_utc
     *
     * @param \DateTime|null $completed_on_utc completed_on_utc
     *
     * @return self
     */
    public function setCompletedOnUtc($completed_on_utc)
    {
        if (is_null($completed_on_utc)) {
            array_push($this->openAPINullablesSetToNull, 'completed_on_utc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('completed_on_utc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['completed_on_utc'] = $completed_on_utc;

        return $this;
    }

    /**
     * Gets timeout_in_minutes
     *
     * @return int|null
     */
    public function getTimeoutInMinutes()
    {
        return $this->container['timeout_in_minutes'];
    }

    /**
     * Sets timeout_in_minutes
     *
     * @param int|null $timeout_in_minutes timeout_in_minutes
     *
     * @return self
     */
    public function setTimeoutInMinutes($timeout_in_minutes)
    {
        if (is_null($timeout_in_minutes)) {
            array_push($this->openAPINullablesSetToNull, 'timeout_in_minutes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timeout_in_minutes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timeout_in_minutes'] = $timeout_in_minutes;

        return $this;
    }

    /**
     * Gets timeout_in_seconds
     *
     * @return int|null
     * @deprecated
     */
    public function getTimeoutInSeconds()
    {
        return $this->container['timeout_in_seconds'];
    }

    /**
     * Sets timeout_in_seconds
     *
     * @param int|null $timeout_in_seconds timeout_in_seconds
     *
     * @return self
     * @deprecated
     */
    public function setTimeoutInSeconds($timeout_in_seconds)
    {
        if (is_null($timeout_in_seconds)) {
            array_push($this->openAPINullablesSetToNull, 'timeout_in_seconds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timeout_in_seconds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timeout_in_seconds'] = $timeout_in_seconds;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        if ((mb_strlen($status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $status when calling CodatDataContractsDatasetsPurchaseOrderPushOperation., must be bigger than or equal to 1.');
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
     * Gets validation
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsValidationValidationResult|null
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsValidationValidationResult|null $validation validation
     *
     * @return self
     */
    public function setValidation($validation)
    {
        if (is_null($validation)) {
            throw new \InvalidArgumentException('non-nullable validation cannot be null');
        }
        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int $status_code status_code
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        if (is_null($status_code)) {
            throw new \InvalidArgumentException('non-nullable status_code cannot be null');
        }
        $this->container['status_code'] = $status_code;

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

