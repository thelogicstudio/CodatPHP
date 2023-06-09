<?php
/**
 * CodatDataContractsDatasetsInvoice
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
 * CodatDataContractsDatasetsInvoice Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CodatDataContractsDatasetsInvoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Codat.DataContracts.Datasets.Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'invoice_number' => 'string',
        'customer_ref' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerRef',
        'sales_order_refs' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsRecordRef[]',
        'issue_date' => '\DateTime',
        'due_date' => '\DateTime',
        'modified_date' => '\DateTime',
        'source_modified_date' => '\DateTime',
        'paid_on_date' => '\DateTime',
        'currency' => 'string',
        'currency_rate' => 'float',
        'line_items' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoiceLineItem[]',
        'payment_allocations' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDetailedPaymentAllocation[]',
        'withholding_tax' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsWithholdingTax[]',
        'total_discount' => 'float',
        'sub_total' => 'float',
        'additional_tax_amount' => 'float',
        'additional_tax_percentage' => 'float',
        'total_tax_amount' => 'float',
        'total_amount' => 'float',
        'amount_due' => 'float',
        'discount_percentage' => 'float',
        'status' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoiceStatus',
        'note' => 'string',
        'metadata' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsMetadata',
        'supplemental_data' => '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDataInterfacesSupplementalData'
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
        'invoice_number' => null,
        'customer_ref' => null,
        'sales_order_refs' => null,
        'issue_date' => 'date-time',
        'due_date' => 'date-time',
        'modified_date' => 'date-time',
        'source_modified_date' => 'date-time',
        'paid_on_date' => 'date-time',
        'currency' => null,
        'currency_rate' => 'double',
        'line_items' => null,
        'payment_allocations' => null,
        'withholding_tax' => null,
        'total_discount' => 'double',
        'sub_total' => 'double',
        'additional_tax_amount' => 'double',
        'additional_tax_percentage' => 'double',
        'total_tax_amount' => 'double',
        'total_amount' => 'double',
        'amount_due' => 'double',
        'discount_percentage' => 'double',
        'status' => null,
        'note' => null,
        'metadata' => null,
        'supplemental_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'invoice_number' => true,
		'customer_ref' => false,
		'sales_order_refs' => true,
		'issue_date' => false,
		'due_date' => true,
		'modified_date' => true,
		'source_modified_date' => true,
		'paid_on_date' => true,
		'currency' => true,
		'currency_rate' => true,
		'line_items' => true,
		'payment_allocations' => true,
		'withholding_tax' => true,
		'total_discount' => true,
		'sub_total' => true,
		'additional_tax_amount' => false,
		'additional_tax_percentage' => false,
		'total_tax_amount' => false,
		'total_amount' => false,
		'amount_due' => false,
		'discount_percentage' => true,
		'status' => false,
		'note' => true,
		'metadata' => false,
		'supplemental_data' => false
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
        'invoice_number' => 'invoiceNumber',
        'customer_ref' => 'customerRef',
        'sales_order_refs' => 'salesOrderRefs',
        'issue_date' => 'issueDate',
        'due_date' => 'dueDate',
        'modified_date' => 'modifiedDate',
        'source_modified_date' => 'sourceModifiedDate',
        'paid_on_date' => 'paidOnDate',
        'currency' => 'currency',
        'currency_rate' => 'currencyRate',
        'line_items' => 'lineItems',
        'payment_allocations' => 'paymentAllocations',
        'withholding_tax' => 'withholdingTax',
        'total_discount' => 'totalDiscount',
        'sub_total' => 'subTotal',
        'additional_tax_amount' => 'additionalTaxAmount',
        'additional_tax_percentage' => 'additionalTaxPercentage',
        'total_tax_amount' => 'totalTaxAmount',
        'total_amount' => 'totalAmount',
        'amount_due' => 'amountDue',
        'discount_percentage' => 'discountPercentage',
        'status' => 'status',
        'note' => 'note',
        'metadata' => 'metadata',
        'supplemental_data' => 'supplementalData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'invoice_number' => 'setInvoiceNumber',
        'customer_ref' => 'setCustomerRef',
        'sales_order_refs' => 'setSalesOrderRefs',
        'issue_date' => 'setIssueDate',
        'due_date' => 'setDueDate',
        'modified_date' => 'setModifiedDate',
        'source_modified_date' => 'setSourceModifiedDate',
        'paid_on_date' => 'setPaidOnDate',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'line_items' => 'setLineItems',
        'payment_allocations' => 'setPaymentAllocations',
        'withholding_tax' => 'setWithholdingTax',
        'total_discount' => 'setTotalDiscount',
        'sub_total' => 'setSubTotal',
        'additional_tax_amount' => 'setAdditionalTaxAmount',
        'additional_tax_percentage' => 'setAdditionalTaxPercentage',
        'total_tax_amount' => 'setTotalTaxAmount',
        'total_amount' => 'setTotalAmount',
        'amount_due' => 'setAmountDue',
        'discount_percentage' => 'setDiscountPercentage',
        'status' => 'setStatus',
        'note' => 'setNote',
        'metadata' => 'setMetadata',
        'supplemental_data' => 'setSupplementalData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'invoice_number' => 'getInvoiceNumber',
        'customer_ref' => 'getCustomerRef',
        'sales_order_refs' => 'getSalesOrderRefs',
        'issue_date' => 'getIssueDate',
        'due_date' => 'getDueDate',
        'modified_date' => 'getModifiedDate',
        'source_modified_date' => 'getSourceModifiedDate',
        'paid_on_date' => 'getPaidOnDate',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'line_items' => 'getLineItems',
        'payment_allocations' => 'getPaymentAllocations',
        'withholding_tax' => 'getWithholdingTax',
        'total_discount' => 'getTotalDiscount',
        'sub_total' => 'getSubTotal',
        'additional_tax_amount' => 'getAdditionalTaxAmount',
        'additional_tax_percentage' => 'getAdditionalTaxPercentage',
        'total_tax_amount' => 'getTotalTaxAmount',
        'total_amount' => 'getTotalAmount',
        'amount_due' => 'getAmountDue',
        'discount_percentage' => 'getDiscountPercentage',
        'status' => 'getStatus',
        'note' => 'getNote',
        'metadata' => 'getMetadata',
        'supplemental_data' => 'getSupplementalData'
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
        $this->setIfExists('invoice_number', $data ?? [], null);
        $this->setIfExists('customer_ref', $data ?? [], null);
        $this->setIfExists('sales_order_refs', $data ?? [], null);
        $this->setIfExists('issue_date', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('modified_date', $data ?? [], null);
        $this->setIfExists('source_modified_date', $data ?? [], null);
        $this->setIfExists('paid_on_date', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('currency_rate', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('payment_allocations', $data ?? [], null);
        $this->setIfExists('withholding_tax', $data ?? [], null);
        $this->setIfExists('total_discount', $data ?? [], null);
        $this->setIfExists('sub_total', $data ?? [], null);
        $this->setIfExists('additional_tax_amount', $data ?? [], null);
        $this->setIfExists('additional_tax_percentage', $data ?? [], null);
        $this->setIfExists('total_tax_amount', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('amount_due', $data ?? [], null);
        $this->setIfExists('discount_percentage', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('supplemental_data', $data ?? [], null);
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

        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if ($this->container['total_tax_amount'] === null) {
            $invalidProperties[] = "'total_tax_amount' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['amount_due'] === null) {
            $invalidProperties[] = "'amount_due' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number invoice_number
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        if (is_null($invoice_number)) {
            array_push($this->openAPINullablesSetToNull, 'invoice_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invoice_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets customer_ref
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerRef|null
     */
    public function getCustomerRef()
    {
        return $this->container['customer_ref'];
    }

    /**
     * Sets customer_ref
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerRef|null $customer_ref customer_ref
     *
     * @return self
     */
    public function setCustomerRef($customer_ref)
    {
        if (is_null($customer_ref)) {
            throw new \InvalidArgumentException('non-nullable customer_ref cannot be null');
        }
        $this->container['customer_ref'] = $customer_ref;

        return $this;
    }

    /**
     * Gets sales_order_refs
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsRecordRef[]|null
     */
    public function getSalesOrderRefs()
    {
        return $this->container['sales_order_refs'];
    }

    /**
     * Sets sales_order_refs
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsRecordRef[]|null $sales_order_refs sales_order_refs
     *
     * @return self
     */
    public function setSalesOrderRefs($sales_order_refs)
    {
        if (is_null($sales_order_refs)) {
            array_push($this->openAPINullablesSetToNull, 'sales_order_refs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sales_order_refs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sales_order_refs'] = $sales_order_refs;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param \DateTime $issue_date issue_date
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {
        if (is_null($issue_date)) {
            throw new \InvalidArgumentException('non-nullable issue_date cannot be null');
        }
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            array_push($this->openAPINullablesSetToNull, 'due_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('due_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['due_date'] = $due_date;

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
     * Gets paid_on_date
     *
     * @return \DateTime|null
     */
    public function getPaidOnDate()
    {
        return $this->container['paid_on_date'];
    }

    /**
     * Sets paid_on_date
     *
     * @param \DateTime|null $paid_on_date paid_on_date
     *
     * @return self
     */
    public function setPaidOnDate($paid_on_date)
    {
        if (is_null($paid_on_date)) {
            array_push($this->openAPINullablesSetToNull, 'paid_on_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paid_on_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paid_on_date'] = $paid_on_date;

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
     * Gets line_items
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoiceLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoiceLineItem[]|null $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            array_push($this->openAPINullablesSetToNull, 'line_items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('line_items', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets payment_allocations
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDetailedPaymentAllocation[]|null
     */
    public function getPaymentAllocations()
    {
        return $this->container['payment_allocations'];
    }

    /**
     * Sets payment_allocations
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDetailedPaymentAllocation[]|null $payment_allocations payment_allocations
     *
     * @return self
     */
    public function setPaymentAllocations($payment_allocations)
    {
        if (is_null($payment_allocations)) {
            array_push($this->openAPINullablesSetToNull, 'payment_allocations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_allocations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_allocations'] = $payment_allocations;

        return $this;
    }

    /**
     * Gets withholding_tax
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsWithholdingTax[]|null
     */
    public function getWithholdingTax()
    {
        return $this->container['withholding_tax'];
    }

    /**
     * Sets withholding_tax
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsWithholdingTax[]|null $withholding_tax withholding_tax
     *
     * @return self
     */
    public function setWithholdingTax($withholding_tax)
    {
        if (is_null($withholding_tax)) {
            array_push($this->openAPINullablesSetToNull, 'withholding_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('withholding_tax', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['withholding_tax'] = $withholding_tax;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return float|null
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param float|null $total_discount total_discount
     *
     * @return self
     */
    public function setTotalDiscount($total_discount)
    {
        if (is_null($total_discount)) {
            array_push($this->openAPINullablesSetToNull, 'total_discount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_discount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return float|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param float|null $sub_total sub_total
     *
     * @return self
     */
    public function setSubTotal($sub_total)
    {
        if (is_null($sub_total)) {
            array_push($this->openAPINullablesSetToNull, 'sub_total');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sub_total', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets additional_tax_amount
     *
     * @return float|null
     */
    public function getAdditionalTaxAmount()
    {
        return $this->container['additional_tax_amount'];
    }

    /**
     * Sets additional_tax_amount
     *
     * @param float|null $additional_tax_amount additional_tax_amount
     *
     * @return self
     */
    public function setAdditionalTaxAmount($additional_tax_amount)
    {
        if (is_null($additional_tax_amount)) {
            throw new \InvalidArgumentException('non-nullable additional_tax_amount cannot be null');
        }
        $this->container['additional_tax_amount'] = $additional_tax_amount;

        return $this;
    }

    /**
     * Gets additional_tax_percentage
     *
     * @return float|null
     */
    public function getAdditionalTaxPercentage()
    {
        return $this->container['additional_tax_percentage'];
    }

    /**
     * Sets additional_tax_percentage
     *
     * @param float|null $additional_tax_percentage additional_tax_percentage
     *
     * @return self
     */
    public function setAdditionalTaxPercentage($additional_tax_percentage)
    {
        if (is_null($additional_tax_percentage)) {
            throw new \InvalidArgumentException('non-nullable additional_tax_percentage cannot be null');
        }
        $this->container['additional_tax_percentage'] = $additional_tax_percentage;

        return $this;
    }

    /**
     * Gets total_tax_amount
     *
     * @return float
     */
    public function getTotalTaxAmount()
    {
        return $this->container['total_tax_amount'];
    }

    /**
     * Sets total_tax_amount
     *
     * @param float $total_tax_amount total_tax_amount
     *
     * @return self
     */
    public function setTotalTaxAmount($total_tax_amount)
    {
        if (is_null($total_tax_amount)) {
            throw new \InvalidArgumentException('non-nullable total_tax_amount cannot be null');
        }
        $this->container['total_tax_amount'] = $total_tax_amount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float $total_amount total_amount
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
     * Gets amount_due
     *
     * @return float
     */
    public function getAmountDue()
    {
        return $this->container['amount_due'];
    }

    /**
     * Sets amount_due
     *
     * @param float $amount_due amount_due
     *
     * @return self
     */
    public function setAmountDue($amount_due)
    {
        if (is_null($amount_due)) {
            throw new \InvalidArgumentException('non-nullable amount_due cannot be null');
        }
        $this->container['amount_due'] = $amount_due;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return float|null
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param float|null $discount_percentage discount_percentage
     *
     * @return self
     */
    public function setDiscountPercentage($discount_percentage)
    {
        if (is_null($discount_percentage)) {
            array_push($this->openAPINullablesSetToNull, 'discount_percentage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount_percentage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoiceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoiceStatus $status status
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
     * Gets supplemental_data
     *
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDataInterfacesSupplementalData|null
     */
    public function getSupplementalData()
    {
        return $this->container['supplemental_data'];
    }

    /**
     * Sets supplemental_data
     *
     * @param \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDataInterfacesSupplementalData|null $supplemental_data supplemental_data
     *
     * @return self
     */
    public function setSupplementalData($supplemental_data)
    {
        if (is_null($supplemental_data)) {
            throw new \InvalidArgumentException('non-nullable supplemental_data cannot be null');
        }
        $this->container['supplemental_data'] = $supplemental_data;

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


