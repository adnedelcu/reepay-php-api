<?php
/**
 * SubscriptionPeriodBalance
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
 * SubscriptionPeriodBalance Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionPeriodBalance implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionPeriodBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'invoice' => '\Swagger\Client\Model\InlineResponse20015',
        'paid' => 'int',
        'consumed' => 'int',
        'remaining' => 'int',
        'online_refundable' => 'int'
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
        'date' => 'date',
        'invoice' => 'invoice',
        'paid' => 'paid',
        'consumed' => 'consumed',
        'remaining' => 'remaining',
        'online_refundable' => 'online_refundable'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'invoice' => 'setInvoice',
        'paid' => 'setPaid',
        'consumed' => 'setConsumed',
        'remaining' => 'setRemaining',
        'online_refundable' => 'setOnlineRefundable'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'invoice' => 'getInvoice',
        'paid' => 'getPaid',
        'consumed' => 'getConsumed',
        'remaining' => 'getRemaining',
        'online_refundable' => 'getOnlineRefundable'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : null;
        $this->container['consumed'] = isset($data['consumed']) ? $data['consumed'] : null;
        $this->container['remaining'] = isset($data['remaining']) ? $data['remaining'] : null;
        $this->container['online_refundable'] = isset($data['online_refundable']) ? $data['online_refundable'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date Date in period for this period balance
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets invoice
     * @return \Swagger\Client\Model\InlineResponse20015
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param \Swagger\Client\Model\InlineResponse20015 $invoice
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets paid
     * @return int
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     * @param int $paid The plan amount paid and settled for this period
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets consumed
     * @return int
     */
    public function getConsumed()
    {
        return $this->container['consumed'];
    }

    /**
     * Sets consumed
     * @param int $consumed The partial plan amount consumed up to date for this period
     * @return $this
     */
    public function setConsumed($consumed)
    {
        $this->container['consumed'] = $consumed;

        return $this;
    }

    /**
     * Gets remaining
     * @return int
     */
    public function getRemaining()
    {
        return $this->container['remaining'];
    }

    /**
     * Sets remaining
     * @param int $remaining The partial plan amount remaining for this period. This amount can be refunded in the case the subscription is expired or put on hold and the amount has been paid.
     * @return $this
     */
    public function setRemaining($remaining)
    {
        $this->container['remaining'] = $remaining;

        return $this;
    }

    /**
     * Gets online_refundable
     * @return int
     */
    public function getOnlineRefundable()
    {
        return $this->container['online_refundable'];
    }

    /**
     * Sets online_refundable
     * @param int $online_refundable The amount that can be online refunded on the subscription
     * @return $this
     */
    public function setOnlineRefundable($online_refundable)
    {
        $this->container['online_refundable'] = $online_refundable;

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


