<?php
/**
 * V1refundNoteLines
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
 * V1refundNoteLines Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1refundNoteLines implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1refund_note_lines';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'int',
        'text' => 'string',
        'quantity' => 'int',
        'order_line_id' => 'string'
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
        'amount' => 'amount',
        'text' => 'text',
        'quantity' => 'quantity',
        'order_line_id' => 'order_line_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'text' => 'setText',
        'quantity' => 'setQuantity',
        'order_line_id' => 'setOrderLineId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'text' => 'getText',
        'quantity' => 'getQuantity',
        'order_line_id' => 'getOrderLineId'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['order_line_id'] = isset($data['order_line_id']) ? $data['order_line_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 1)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 1.";
        }

        if ($this->container['text'] === null) {
            $invalid_properties[] = "'text' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] < 1)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
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

        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 1) {
            return false;
        }
        if ($this->container['text'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['quantity'] < 1) {
            return false;
        }
        return true;
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
     * @param int $amount Per quantity amount in the smallest unit for the account currency
     * @return $this
     */
    public function setAmount($amount)
    {

        if (($amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling V1refundNoteLines., must be bigger than or equal to 1.');
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
     * @param string $text Credit note line text
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling V1refundNoteLines., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets order_line_id
     * @return string
     */
    public function getOrderLineId()
    {
        return $this->container['order_line_id'];
    }

    /**
     * Sets order_line_id
     * @param string $order_line_id Optional reference to invoice order line for which this refund line is related
     * @return $this
     */
    public function setOrderLineId($order_line_id)
    {
        $this->container['order_line_id'] = $order_line_id;

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


