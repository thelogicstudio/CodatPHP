<?php
/**
 * CodatDataContractsDatasetsCommerceProductVariant
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
 * CodatDataContractsDatasetsCommerceProductVariant Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatDataContractsDatasetsCommerceProductVariant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.DataContracts.Datasets.Commerce.ProductVariant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'quantity' => 'float',
        'is_tax_enabled' => 'bool',
        'sku' => 'string',
        'barcode' => 'string',
        'unit_of_measure' => 'string',
        'vat_percentage' => 'float',
        'prices' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceProductVariantPrice[]',
        'inventory' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceInventory',
        'shipping_required' => 'bool',
        'created_date' => '\DateTime'
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
        'name' => null,
        'quantity' => 'double',
        'is_tax_enabled' => null,
        'sku' => null,
        'barcode' => null,
        'unit_of_measure' => null,
        'vat_percentage' => 'double',
        'prices' => null,
        'inventory' => null,
        'shipping_required' => null,
        'created_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'name' => true,
		'quantity' => false,
		'is_tax_enabled' => false,
		'sku' => true,
		'barcode' => true,
		'unit_of_measure' => true,
		'vat_percentage' => false,
		'prices' => true,
		'inventory' => false,
		'shipping_required' => false,
		'created_date' => false
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
        'name' => 'name',
        'quantity' => 'quantity',
        'is_tax_enabled' => 'isTaxEnabled',
        'sku' => 'sku',
        'barcode' => 'barcode',
        'unit_of_measure' => 'unitOfMeasure',
        'vat_percentage' => 'vatPercentage',
        'prices' => 'prices',
        'inventory' => 'inventory',
        'shipping_required' => 'shippingRequired',
        'created_date' => 'createdDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'is_tax_enabled' => 'setIsTaxEnabled',
        'sku' => 'setSku',
        'barcode' => 'setBarcode',
        'unit_of_measure' => 'setUnitOfMeasure',
        'vat_percentage' => 'setVatPercentage',
        'prices' => 'setPrices',
        'inventory' => 'setInventory',
        'shipping_required' => 'setShippingRequired',
        'created_date' => 'setCreatedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'is_tax_enabled' => 'getIsTaxEnabled',
        'sku' => 'getSku',
        'barcode' => 'getBarcode',
        'unit_of_measure' => 'getUnitOfMeasure',
        'vat_percentage' => 'getVatPercentage',
        'prices' => 'getPrices',
        'inventory' => 'getInventory',
        'shipping_required' => 'getShippingRequired',
        'created_date' => 'getCreatedDate'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('is_tax_enabled', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('barcode', $data ?? [], null);
        $this->setIfExists('unit_of_measure', $data ?? [], null);
        $this->setIfExists('vat_percentage', $data ?? [], null);
        $this->setIfExists('prices', $data ?? [], null);
        $this->setIfExists('inventory', $data ?? [], null);
        $this->setIfExists('shipping_required', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
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
     * Gets quantity
     *
     * @return float|null
     * @deprecated
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity quantity
     *
     * @return self
     * @deprecated
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets is_tax_enabled
     *
     * @return bool|null
     */
    public function getIsTaxEnabled()
    {
        return $this->container['is_tax_enabled'];
    }

    /**
     * Sets is_tax_enabled
     *
     * @param bool|null $is_tax_enabled is_tax_enabled
     *
     * @return self
     */
    public function setIsTaxEnabled($is_tax_enabled)
    {
        if (is_null($is_tax_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_tax_enabled cannot be null');
        }
        $this->container['is_tax_enabled'] = $is_tax_enabled;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            array_push($this->openAPINullablesSetToNull, 'sku');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sku', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string|null $barcode barcode
     *
     * @return self
     */
    public function setBarcode($barcode)
    {
        if (is_null($barcode)) {
            array_push($this->openAPINullablesSetToNull, 'barcode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('barcode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets unit_of_measure
     *
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     *
     * @param string|null $unit_of_measure unit_of_measure
     *
     * @return self
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        if (is_null($unit_of_measure)) {
            array_push($this->openAPINullablesSetToNull, 'unit_of_measure');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unit_of_measure', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unit_of_measure'] = $unit_of_measure;

        return $this;
    }

    /**
     * Gets vat_percentage
     *
     * @return float|null
     */
    public function getVatPercentage()
    {
        return $this->container['vat_percentage'];
    }

    /**
     * Sets vat_percentage
     *
     * @param float|null $vat_percentage vat_percentage
     *
     * @return self
     */
    public function setVatPercentage($vat_percentage)
    {
        if (is_null($vat_percentage)) {
            throw new \InvalidArgumentException('non-nullable vat_percentage cannot be null');
        }
        $this->container['vat_percentage'] = $vat_percentage;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceProductVariantPrice[]|null
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceProductVariantPrice[]|null $prices prices
     *
     * @return self
     */
    public function setPrices($prices)
    {
        if (is_null($prices)) {
            array_push($this->openAPINullablesSetToNull, 'prices');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prices', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceInventory|null
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceInventory|null $inventory inventory
     *
     * @return self
     */
    public function setInventory($inventory)
    {
        if (is_null($inventory)) {
            throw new \InvalidArgumentException('non-nullable inventory cannot be null');
        }
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets shipping_required
     *
     * @return bool|null
     */
    public function getShippingRequired()
    {
        return $this->container['shipping_required'];
    }

    /**
     * Sets shipping_required
     *
     * @param bool|null $shipping_required shipping_required
     *
     * @return self
     */
    public function setShippingRequired($shipping_required)
    {
        if (is_null($shipping_required)) {
            throw new \InvalidArgumentException('non-nullable shipping_required cannot be null');
        }
        $this->container['shipping_required'] = $shipping_required;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime|null $created_date created_date
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }
        $this->container['created_date'] = $created_date;

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


