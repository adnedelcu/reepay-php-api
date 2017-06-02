<?php
/**
 * CreateRefund
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CreateRefund Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateRefund implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateRefund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice' => 'string',
        'key' => 'string',
        'amount' => 'int',
        'text' => 'string',
        'note_lines' => '\Swagger\Client\Model\V1refundNoteLines[]',
        'manual_transfer' => '\Swagger\Client\Model\V1refundManualTransfer'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'invoice' => 'invoice',
        'key' => 'key',
        'amount' => 'amount',
        'text' => 'text',
        'note_lines' => 'note_lines',
        'manual_transfer' => 'manual_transfer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'invoice' => 'setInvoice',
        'key' => 'setKey',
        'amount' => 'setAmount',
        'text' => 'setText',
        'note_lines' => 'setNoteLines',
        'manual_transfer' => 'setManualTransfer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'invoice' => 'getInvoice',
        'key' => 'getKey',
        'amount' => 'getAmount',
        'text' => 'getText',
        'note_lines' => 'getNoteLines',
        'manual_transfer' => 'getManualTransfer'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['note_lines'] = isset($data['note_lines']) ? $data['note_lines'] : null;
        $this->container['manual_transfer'] = isset($data['manual_transfer']) ? $data['manual_transfer'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['invoice'] === null) {
            $invalid_properties[] = "'invoice' can't be null";
        }
        if (!is_null($this->container['amount']) && ($this->container['amount'] < 1)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 1.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['invoice'] === null) {
            return false;
        }
        if ($this->container['amount'] < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets invoice
     * @return string
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param string $invoice Handle or id for invoice/charge to refund
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key Optional idempotency key. Only one refund can be performed for the same key. An idempotency key identifies uniquely the request and multiple requests with the same key and invoice will yield the same result. In case of networking errors the same request with same key can safely be retried.
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Optional amount in the smallest unit for the account currency. Either `amount` or `note_lines` can be provided, if neither is provided the full refundable amount is refunded.
     * @return $this
     */
    public function setAmount($amount)
    {

        if (!is_null($amount) && ($amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateRefund., must be bigger than or equal to 1.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text Optional refund text to use on credit note. Used in conjunction with `amount`. Ignored if `note_lines` is provided.
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets note_lines
     * @return \Swagger\Client\Model\V1refundNoteLines[]
     */
    public function getNoteLines()
    {
        return $this->container['note_lines'];
    }

    /**
     * Sets note_lines
     * @param \Swagger\Client\Model\V1refundNoteLines[] $note_lines Refund credit note lines to give detailed information for credit note. Either this or `amount` must be provided.
     * @return $this
     */
    public function setNoteLines($note_lines)
    {
        $this->container['note_lines'] = $note_lines;

        return $this;
    }

    /**
     * Gets manual_transfer
     * @return \Swagger\Client\Model\V1refundManualTransfer
     */
    public function getManualTransfer()
    {
        return $this->container['manual_transfer'];
    }

    /**
     * Sets manual_transfer
     * @param \Swagger\Client\Model\V1refundManualTransfer $manual_transfer
     * @return $this
     */
    public function setManualTransfer($manual_transfer)
    {
        $this->container['manual_transfer'] = $manual_transfer;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


