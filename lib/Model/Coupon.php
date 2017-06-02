<?php
/**
 * Coupon
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
 * Coupon Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Coupon implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Coupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'handle' => 'string',
        'code' => 'string',
        'discount' => 'string',
        'name' => 'string',
        'state' => 'string',
        'type' => 'string',
        'redemptions' => 'int',
        'expired' => '\DateTime',
        'created' => '\DateTime',
        'all_plans' => 'bool',
        'eligible_plans' => 'string[]',
        'max_redemptions' => 'int',
        'valid_until' => '\DateTime',
        'expire_reason' => 'string'
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
        'handle' => 'handle',
        'code' => 'code',
        'discount' => 'discount',
        'name' => 'name',
        'state' => 'state',
        'type' => 'type',
        'redemptions' => 'redemptions',
        'expired' => 'expired',
        'created' => 'created',
        'all_plans' => 'all_plans',
        'eligible_plans' => 'eligible_plans',
        'max_redemptions' => 'max_redemptions',
        'valid_until' => 'valid_until',
        'expire_reason' => 'expire_reason'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'handle' => 'setHandle',
        'code' => 'setCode',
        'discount' => 'setDiscount',
        'name' => 'setName',
        'state' => 'setState',
        'type' => 'setType',
        'redemptions' => 'setRedemptions',
        'expired' => 'setExpired',
        'created' => 'setCreated',
        'all_plans' => 'setAllPlans',
        'eligible_plans' => 'setEligiblePlans',
        'max_redemptions' => 'setMaxRedemptions',
        'valid_until' => 'setValidUntil',
        'expire_reason' => 'setExpireReason'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'handle' => 'getHandle',
        'code' => 'getCode',
        'discount' => 'getDiscount',
        'name' => 'getName',
        'state' => 'getState',
        'type' => 'getType',
        'redemptions' => 'getRedemptions',
        'expired' => 'getExpired',
        'created' => 'getCreated',
        'all_plans' => 'getAllPlans',
        'eligible_plans' => 'getEligiblePlans',
        'max_redemptions' => 'getMaxRedemptions',
        'valid_until' => 'getValidUntil',
        'expire_reason' => 'getExpireReason'
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

    const STATE_ACTIVE = 'active';
    const STATE_DELETED = 'deleted';
    const STATE_EXPIRED = 'expired';
    const STATE_GENERATING = 'generating';
    const TYPE_SINGLE = 'single';
    const TYPE_SET = 'set';
    const EXPIRE_REASON_EARLY = 'early';
    const EXPIRE_REASON_VALID_UNTIL = 'valid_until';
    const EXPIRE_REASON_MAX = 'max';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_DELETED,
            self::STATE_EXPIRED,
            self::STATE_GENERATING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SINGLE,
            self::TYPE_SET,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getExpireReasonAllowableValues()
    {
        return [
            self::EXPIRE_REASON_EARLY,
            self::EXPIRE_REASON_VALID_UNTIL,
            self::EXPIRE_REASON_MAX,
        ];
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
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['redemptions'] = isset($data['redemptions']) ? $data['redemptions'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['all_plans'] = isset($data['all_plans']) ? $data['all_plans'] : null;
        $this->container['eligible_plans'] = isset($data['eligible_plans']) ? $data['eligible_plans'] : null;
        $this->container['max_redemptions'] = isset($data['max_redemptions']) ? $data['max_redemptions'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        $this->container['expire_reason'] = isset($data['expire_reason']) ? $data['expire_reason'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['discount'] === null) {
            $invalid_properties[] = "'discount' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = ["active", "deleted", "expired", "generating"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'active', 'deleted', 'expired', 'generating'.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["single", "set"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'single', 'set'.";
        }

        if ($this->container['redemptions'] === null) {
            $invalid_properties[] = "'redemptions' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if (!is_null($this->container['max_redemptions']) && ($this->container['max_redemptions'] < 0)) {
            $invalid_properties[] = "invalid value for 'max_redemptions', must be bigger than or equal to 0.";
        }

        $allowed_values = ["early", "valid_until", "max"];
        if (!in_array($this->container['expire_reason'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'expire_reason', must be one of 'early', 'valid_until', 'max'.";
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

        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['discount'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = ["active", "deleted", "expired", "generating"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["single", "set"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['redemptions'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['max_redemptions'] < 0) {
            return false;
        }
        $allowed_values = ["early", "valid_until", "max"];
        if (!in_array($this->container['expire_reason'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per account unique handle for the coupon
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code The coupon code. Maximum 100 characters.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets discount
     * @return string
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     * @param string $discount Discount to use for coupon
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Internal name for the coupon.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Coupon state `active`, `expired`, `deleted` or `generating`
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('active', 'deleted', 'expired', 'generating');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'active', 'deleted', 'expired', 'generating'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Coupon type either `single` or `set`
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('single', 'set');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'single', 'set'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets redemptions
     * @return int
     */
    public function getRedemptions()
    {
        return $this->container['redemptions'];
    }

    /**
     * Sets redemptions
     * @param int $redemptions Number of times the coupon has been redeemed
     * @return $this
     */
    public function setRedemptions($redemptions)
    {
        $this->container['redemptions'] = $redemptions;

        return $this;
    }

    /**
     * Gets expired
     * @return \DateTime
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     * @param \DateTime $expired Date and time for expire if state expired. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created Date when the coupon was created. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets all_plans
     * @return bool
     */
    public function getAllPlans()
    {
        return $this->container['all_plans'];
    }

    /**
     * Sets all_plans
     * @param bool $all_plans Whether all plans are eligible for this coupon. Defaults to false.
     * @return $this
     */
    public function setAllPlans($all_plans)
    {
        $this->container['all_plans'] = $all_plans;

        return $this;
    }

    /**
     * Gets eligible_plans
     * @return string[]
     */
    public function getEligiblePlans()
    {
        return $this->container['eligible_plans'];
    }

    /**
     * Sets eligible_plans
     * @param string[] $eligible_plans If not all_plans are set to true, then the set of eligible plan handles must be defined.
     * @return $this
     */
    public function setEligiblePlans($eligible_plans)
    {
        $this->container['eligible_plans'] = $eligible_plans;

        return $this;
    }

    /**
     * Gets max_redemptions
     * @return int
     */
    public function getMaxRedemptions()
    {
        return $this->container['max_redemptions'];
    }

    /**
     * Sets max_redemptions
     * @param int $max_redemptions Optional maximum number of times this coupon can be redeemed.
     * @return $this
     */
    public function setMaxRedemptions($max_redemptions)
    {

        if (!is_null($max_redemptions) && ($max_redemptions < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_redemptions when calling Coupon., must be bigger than or equal to 0.');
        }

        $this->container['max_redemptions'] = $max_redemptions;

        return $this;
    }

    /**
     * Gets valid_until
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     * @param \DateTime $valid_until Optional date and time until which the coupon is redeemable. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets expire_reason
     * @return string
     */
    public function getExpireReason()
    {
        return $this->container['expire_reason'];
    }

    /**
     * Sets expire_reason
     * @param string $expire_reason The expire reason if expired. One of `early`, `valid_until` or `max`. Respectively on demand early expire, valid until has passed or max redemptions has been reached.
     * @return $this
     */
    public function setExpireReason($expire_reason)
    {
        $allowed_values = array('early', 'valid_until', 'max');
        if (!is_null($expire_reason) && (!in_array($expire_reason, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'expire_reason', must be one of 'early', 'valid_until', 'max'");
        }
        $this->container['expire_reason'] = $expire_reason;

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


