<?php
/**
 * CodatPublicApiModelsCompanyProfileModel
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
 * CodatPublicApiModelsCompanyProfileModel Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatPublicApiModelsCompanyProfileModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.Public.Api.Models.Company.ProfileModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'logo_url' => 'string',
        'icon_url' => 'string',
        'redirect_url' => 'string',
        'white_list_urls' => 'string[]',
        'api_key' => 'string',
        'alert_auth_header' => 'string',
        'confirm_company_name' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'logo_url' => null,
        'icon_url' => null,
        'redirect_url' => null,
        'white_list_urls' => null,
        'api_key' => null,
        'alert_auth_header' => null,
        'confirm_company_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'logo_url' => true,
		'icon_url' => true,
		'redirect_url' => true,
		'white_list_urls' => true,
		'api_key' => true,
		'alert_auth_header' => true,
		'confirm_company_name' => false
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
        'name' => 'name',
        'logo_url' => 'logoUrl',
        'icon_url' => 'iconUrl',
        'redirect_url' => 'redirectUrl',
        'white_list_urls' => 'whiteListUrls',
        'api_key' => 'apiKey',
        'alert_auth_header' => 'alertAuthHeader',
        'confirm_company_name' => 'confirmCompanyName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'logo_url' => 'setLogoUrl',
        'icon_url' => 'setIconUrl',
        'redirect_url' => 'setRedirectUrl',
        'white_list_urls' => 'setWhiteListUrls',
        'api_key' => 'setApiKey',
        'alert_auth_header' => 'setAlertAuthHeader',
        'confirm_company_name' => 'setConfirmCompanyName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'logo_url' => 'getLogoUrl',
        'icon_url' => 'getIconUrl',
        'redirect_url' => 'getRedirectUrl',
        'white_list_urls' => 'getWhiteListUrls',
        'api_key' => 'getApiKey',
        'alert_auth_header' => 'getAlertAuthHeader',
        'confirm_company_name' => 'getConfirmCompanyName'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('logo_url', $data ?? [], null);
        $this->setIfExists('icon_url', $data ?? [], null);
        $this->setIfExists('redirect_url', $data ?? [], null);
        $this->setIfExists('white_list_urls', $data ?? [], null);
        $this->setIfExists('api_key', $data ?? [], null);
        $this->setIfExists('alert_auth_header', $data ?? [], null);
        $this->setIfExists('confirm_company_name', $data ?? [], null);
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
     * Gets icon_url
     *
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string|null $icon_url icon_url
     *
     * @return self
     */
    public function setIconUrl($icon_url)
    {
        if (is_null($icon_url)) {
            array_push($this->openAPINullablesSetToNull, 'icon_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icon_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['icon_url'] = $icon_url;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url redirect_url
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        if (is_null($redirect_url)) {
            array_push($this->openAPINullablesSetToNull, 'redirect_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirect_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets white_list_urls
     *
     * @return string[]|null
     */
    public function getWhiteListUrls()
    {
        return $this->container['white_list_urls'];
    }

    /**
     * Sets white_list_urls
     *
     * @param string[]|null $white_list_urls white_list_urls
     *
     * @return self
     */
    public function setWhiteListUrls($white_list_urls)
    {
        if (is_null($white_list_urls)) {
            array_push($this->openAPINullablesSetToNull, 'white_list_urls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('white_list_urls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['white_list_urls'] = $white_list_urls;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string|null $api_key api_key
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            array_push($this->openAPINullablesSetToNull, 'api_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('api_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets alert_auth_header
     *
     * @return string|null
     */
    public function getAlertAuthHeader()
    {
        return $this->container['alert_auth_header'];
    }

    /**
     * Sets alert_auth_header
     *
     * @param string|null $alert_auth_header alert_auth_header
     *
     * @return self
     */
    public function setAlertAuthHeader($alert_auth_header)
    {
        if (is_null($alert_auth_header)) {
            array_push($this->openAPINullablesSetToNull, 'alert_auth_header');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alert_auth_header', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['alert_auth_header'] = $alert_auth_header;

        return $this;
    }

    /**
     * Gets confirm_company_name
     *
     * @return bool|null
     */
    public function getConfirmCompanyName()
    {
        return $this->container['confirm_company_name'];
    }

    /**
     * Sets confirm_company_name
     *
     * @param bool|null $confirm_company_name confirm_company_name
     *
     * @return self
     */
    public function setConfirmCompanyName($confirm_company_name)
    {
        if (is_null($confirm_company_name)) {
            throw new \InvalidArgumentException('non-nullable confirm_company_name cannot be null');
        }
        $this->container['confirm_company_name'] = $confirm_company_name;

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

