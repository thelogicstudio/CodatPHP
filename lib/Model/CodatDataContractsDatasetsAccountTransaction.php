<?php
/**
 * CodatDataContractsDatasetsAccountTransaction
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
 * CodatDataContractsDatasetsAccountTransaction Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatDataContractsDatasetsAccountTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.DataContracts.Datasets.AccountTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'transaction_id' => 'string',
        'note' => 'string',
        'bank_account_ref' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAccountRef',
        'date' => '\DateTime',
        'status' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAccountTransactionStatus',
        'currency' => 'string',
        'currency_rate' => 'float',
        'lines' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAccountTransactionLine[]',
        'total_amount' => 'float',
        'modified_date' => '\DateTime',
        'source_modified_date' => '\DateTime',
        'metadata' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'transaction_id' => null,
        'note' => null,
        'bank_account_ref' => null,
        'date' => 'date-time',
        'status' => null,
        'currency' => null,
        'currency_rate' => 'double',
        'lines' => null,
        'total_amount' => 'double',
        'modified_date' => 'date-time',
        'source_modified_date' => 'date-time',
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'transaction_id' => true,
		'note' => true,
		'bank_account_ref' => false,
		'date' => false,
		'status' => false,
		'currency' => true,
		'currency_rate' => true,
		'lines' => true,
		'total_amount' => false,
		'modified_date' => true,
		'source_modified_date' => true,
		'metadata' => false
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
        'transaction_id' => 'transactionId',
        'note' => 'note',
        'bank_account_ref' => 'bankAccountRef',
        'date' => 'date',
        'status' => 'status',
        'currency' => 'currency',
        'currency_rate' => 'currencyRate',
        'lines' => 'lines',
        'total_amount' => 'totalAmount',
        'modified_date' => 'modifiedDate',
        'source_modified_date' => 'sourceModifiedDate',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'transaction_id' => 'setTransactionId',
        'note' => 'setNote',
        'bank_account_ref' => 'setBankAccountRef',
        'date' => 'setDate',
        'status' => 'setStatus',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'lines' => 'setLines',
        'total_amount' => 'setTotalAmount',
        'modified_date' => 'setModifiedDate',
        'source_modified_date' => 'setSourceModifiedDate',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'transaction_id' => 'getTransactionId',
        'note' => 'getNote',
        'bank_account_ref' => 'getBankAccountRef',
        'date' => 'getDate',
        'status' => 'getStatus',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'lines' => 'getLines',
        'total_amount' => 'getTotalAmount',
        'modified_date' => 'getModifiedDate',
        'source_modified_date' => 'getSourceModifiedDate',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('transaction_id', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('bank_account_ref', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('currency_rate', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('modified_date', $data ?? [], null);
        $this->setIfExists('source_modified_date', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id transaction_id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        if (is_null($transaction_id)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            array_push($this->openAPINullablesSetToNull, 'note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('note', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets bank_account_ref
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAccountRef|null
     */
    public function getBankAccountRef()
    {
        return $this->container['bank_account_ref'];
    }

    /**
     * Sets bank_account_ref
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAccountRef|null $bank_account_ref bank_account_ref
     *
     * @return self
     */
    public function setBankAccountRef($bank_account_ref)
    {
        if (is_null($bank_account_ref)) {
            throw new \InvalidArgumentException('non-nullable bank_account_ref cannot be null');
        }
        $this->container['bank_account_ref'] = $bank_account_ref;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAccountTransactionStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAccountTransactionStatus|null $status status
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
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_rate
     *
     * @return float|null
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param float|null $currency_rate currency_rate
     *
     * @return self
     */
    public function setCurrencyRate($currency_rate)
    {
        if (is_null($currency_rate)) {
            array_push($this->openAPINullablesSetToNull, 'currency_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency_rate'] = $currency_rate;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAccountTransactionLine[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAccountTransactionLine[]|null $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        if (is_null($lines)) {
            array_push($this->openAPINullablesSetToNull, 'lines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float|null $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        if (is_null($total_amount)) {
            throw new \InvalidArgumentException('non-nullable total_amount cannot be null');
        }
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets modified_date
     *
     * @return \DateTime|null
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date
     *
     * @param \DateTime|null $modified_date modified_date
     *
     * @return self
     */
    public function setModifiedDate($modified_date)
    {
        if (is_null($modified_date)) {
            array_push($this->openAPINullablesSetToNull, 'modified_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('modified_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['modified_date'] = $modified_date;

        return $this;
    }

    /**
     * Gets source_modified_date
     *
     * @return \DateTime|null
     */
    public function getSourceModifiedDate()
    {
        return $this->container['source_modified_date'];
    }

    /**
     * Sets source_modified_date
     *
     * @param \DateTime|null $source_modified_date source_modified_date
     *
     * @return self
     */
    public function setSourceModifiedDate($source_modified_date)
    {
        if (is_null($source_modified_date)) {
            array_push($this->openAPINullablesSetToNull, 'source_modified_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_modified_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source_modified_date'] = $source_modified_date;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsMetadata|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsMetadata|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

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


