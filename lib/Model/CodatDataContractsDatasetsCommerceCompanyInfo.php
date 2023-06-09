<?php
/**
 * CodatDataContractsDatasetsCommerceCompanyInfo
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
 * CodatDataContractsDatasetsCommerceCompanyInfo Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatDataContractsDatasetsCommerceCompanyInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.DataContracts.Datasets.Commerce.CompanyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_name' => 'string',
        'commerce_platform_ref' => 'string',
        'company_legal_name' => 'string',
        'addresses' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceAddress[]',
        'phone_numbers' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommercePhone[]',
        'web_links' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceWebLink[]',
        'registration_number' => 'string',
        'base_currency' => 'string',
        'account_balances' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceAccountBalance[]',
        'source_urls' => 'array<string,string>',
        'created_date' => '\DateTime',
        'modified_date' => '\DateTime',
        'source_modified_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_name' => null,
        'commerce_platform_ref' => null,
        'company_legal_name' => null,
        'addresses' => null,
        'phone_numbers' => null,
        'web_links' => null,
        'registration_number' => null,
        'base_currency' => null,
        'account_balances' => null,
        'source_urls' => null,
        'created_date' => 'date-time',
        'modified_date' => 'date-time',
        'source_modified_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'company_name' => true,
		'commerce_platform_ref' => true,
		'company_legal_name' => true,
		'addresses' => true,
		'phone_numbers' => true,
		'web_links' => true,
		'registration_number' => true,
		'base_currency' => true,
		'account_balances' => true,
		'source_urls' => true,
		'created_date' => false,
		'modified_date' => true,
		'source_modified_date' => true
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
        'company_name' => 'companyName',
        'commerce_platform_ref' => 'commercePlatformRef',
        'company_legal_name' => 'companyLegalName',
        'addresses' => 'addresses',
        'phone_numbers' => 'phoneNumbers',
        'web_links' => 'webLinks',
        'registration_number' => 'registrationNumber',
        'base_currency' => 'baseCurrency',
        'account_balances' => 'accountBalances',
        'source_urls' => 'sourceUrls',
        'created_date' => 'createdDate',
        'modified_date' => 'modifiedDate',
        'source_modified_date' => 'sourceModifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'commerce_platform_ref' => 'setCommercePlatformRef',
        'company_legal_name' => 'setCompanyLegalName',
        'addresses' => 'setAddresses',
        'phone_numbers' => 'setPhoneNumbers',
        'web_links' => 'setWebLinks',
        'registration_number' => 'setRegistrationNumber',
        'base_currency' => 'setBaseCurrency',
        'account_balances' => 'setAccountBalances',
        'source_urls' => 'setSourceUrls',
        'created_date' => 'setCreatedDate',
        'modified_date' => 'setModifiedDate',
        'source_modified_date' => 'setSourceModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'commerce_platform_ref' => 'getCommercePlatformRef',
        'company_legal_name' => 'getCompanyLegalName',
        'addresses' => 'getAddresses',
        'phone_numbers' => 'getPhoneNumbers',
        'web_links' => 'getWebLinks',
        'registration_number' => 'getRegistrationNumber',
        'base_currency' => 'getBaseCurrency',
        'account_balances' => 'getAccountBalances',
        'source_urls' => 'getSourceUrls',
        'created_date' => 'getCreatedDate',
        'modified_date' => 'getModifiedDate',
        'source_modified_date' => 'getSourceModifiedDate'
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
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('commerce_platform_ref', $data ?? [], null);
        $this->setIfExists('company_legal_name', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('phone_numbers', $data ?? [], null);
        $this->setIfExists('web_links', $data ?? [], null);
        $this->setIfExists('registration_number', $data ?? [], null);
        $this->setIfExists('base_currency', $data ?? [], null);
        $this->setIfExists('account_balances', $data ?? [], null);
        $this->setIfExists('source_urls', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('modified_date', $data ?? [], null);
        $this->setIfExists('source_modified_date', $data ?? [], null);
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
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            array_push($this->openAPINullablesSetToNull, 'company_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets commerce_platform_ref
     *
     * @return string|null
     */
    public function getCommercePlatformRef()
    {
        return $this->container['commerce_platform_ref'];
    }

    /**
     * Sets commerce_platform_ref
     *
     * @param string|null $commerce_platform_ref commerce_platform_ref
     *
     * @return self
     */
    public function setCommercePlatformRef($commerce_platform_ref)
    {
        if (is_null($commerce_platform_ref)) {
            array_push($this->openAPINullablesSetToNull, 'commerce_platform_ref');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commerce_platform_ref', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['commerce_platform_ref'] = $commerce_platform_ref;

        return $this;
    }

    /**
     * Gets company_legal_name
     *
     * @return string|null
     */
    public function getCompanyLegalName()
    {
        return $this->container['company_legal_name'];
    }

    /**
     * Sets company_legal_name
     *
     * @param string|null $company_legal_name company_legal_name
     *
     * @return self
     */
    public function setCompanyLegalName($company_legal_name)
    {
        if (is_null($company_legal_name)) {
            array_push($this->openAPINullablesSetToNull, 'company_legal_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_legal_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company_legal_name'] = $company_legal_name;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceAddress[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceAddress[]|null $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        if (is_null($addresses)) {
            array_push($this->openAPINullablesSetToNull, 'addresses');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('addresses', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommercePhone[]|null
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommercePhone[]|null $phone_numbers phone_numbers
     *
     * @return self
     */
    public function setPhoneNumbers($phone_numbers)
    {
        if (is_null($phone_numbers)) {
            array_push($this->openAPINullablesSetToNull, 'phone_numbers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_numbers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets web_links
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceWebLink[]|null
     */
    public function getWebLinks()
    {
        return $this->container['web_links'];
    }

    /**
     * Sets web_links
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceWebLink[]|null $web_links web_links
     *
     * @return self
     */
    public function setWebLinks($web_links)
    {
        if (is_null($web_links)) {
            array_push($this->openAPINullablesSetToNull, 'web_links');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('web_links', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['web_links'] = $web_links;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param string|null $registration_number registration_number
     *
     * @return self
     */
    public function setRegistrationNumber($registration_number)
    {
        if (is_null($registration_number)) {
            array_push($this->openAPINullablesSetToNull, 'registration_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('registration_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets base_currency
     *
     * @return string|null
     */
    public function getBaseCurrency()
    {
        return $this->container['base_currency'];
    }

    /**
     * Sets base_currency
     *
     * @param string|null $base_currency base_currency
     *
     * @return self
     */
    public function setBaseCurrency($base_currency)
    {
        if (is_null($base_currency)) {
            array_push($this->openAPINullablesSetToNull, 'base_currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('base_currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['base_currency'] = $base_currency;

        return $this;
    }

    /**
     * Gets account_balances
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceAccountBalance[]|null
     */
    public function getAccountBalances()
    {
        return $this->container['account_balances'];
    }

    /**
     * Sets account_balances
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceAccountBalance[]|null $account_balances account_balances
     *
     * @return self
     */
    public function setAccountBalances($account_balances)
    {
        if (is_null($account_balances)) {
            array_push($this->openAPINullablesSetToNull, 'account_balances');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('account_balances', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['account_balances'] = $account_balances;

        return $this;
    }

    /**
     * Gets source_urls
     *
     * @return array<string,string>|null
     */
    public function getSourceUrls()
    {
        return $this->container['source_urls'];
    }

    /**
     * Sets source_urls
     *
     * @param array<string,string>|null $source_urls source_urls
     *
     * @return self
     */
    public function setSourceUrls($source_urls)
    {
        if (is_null($source_urls)) {
            array_push($this->openAPINullablesSetToNull, 'source_urls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_urls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source_urls'] = $source_urls;

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


