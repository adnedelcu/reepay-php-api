<?php
/**
 * Body20
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
 * Body20 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Body20 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'body_20';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'schedule' => 'int[]',
        'default_plan' => 'bool',
        'final_subscription_action' => 'string'
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
        'name' => 'name',
        'schedule' => 'schedule',
        'default_plan' => 'default_plan',
        'final_subscription_action' => 'final_subscription_action'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'schedule' => 'setSchedule',
        'default_plan' => 'setDefaultPlan',
        'final_subscription_action' => 'setFinalSubscriptionAction'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'schedule' => 'getSchedule',
        'default_plan' => 'getDefaultPlan',
        'final_subscription_action' => 'getFinalSubscriptionAction'
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

    const FINAL_SUBSCRIPTION_ACTION_EXPIRE = 'expire';
    const FINAL_SUBSCRIPTION_ACTION_ON_HOLD = 'on_hold';
    const FINAL_SUBSCRIPTION_ACTION_NONE = 'none';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFinalSubscriptionActionAllowableValues()
    {
        return [
            self::FINAL_SUBSCRIPTION_ACTION_EXPIRE,
            self::FINAL_SUBSCRIPTION_ACTION_ON_HOLD,
            self::FINAL_SUBSCRIPTION_ACTION_NONE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['default_plan'] = isset($data['default_plan']) ? $data['default_plan'] : null;
        $this->container['final_subscription_action'] = isset($data['final_subscription_action']) ? $data['final_subscription_action'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['schedule'] === null) {
            $invalid_properties[] = "'schedule' can't be null";
        }
        if ($this->container['default_plan'] === null) {
            $invalid_properties[] = "'default_plan' can't be null";
        }
        if ($this->container['final_subscription_action'] === null) {
            $invalid_properties[] = "'final_subscription_action' can't be null";
        }
        $allowed_values = ["expire", "on_hold", "none"];
        if (!in_array($this->container['final_subscription_action'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'final_subscription_action', must be one of 'expire', 'on_hold', 'none'.";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['schedule'] === null) {
            return false;
        }
        if ($this->container['default_plan'] === null) {
            return false;
        }
        if ($this->container['final_subscription_action'] === null) {
            return false;
        }
        $allowed_values = ["expire", "on_hold", "none"];
        if (!in_array($this->container['final_subscription_action'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $name Dunning plan name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets schedule
     * @return int[]
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     * @param int[] $schedule The schedule as list of intervals in days
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets default_plan
     * @return bool
     */
    public function getDefaultPlan()
    {
        return $this->container['default_plan'];
    }

    /**
     * Sets default_plan
     * @param bool $default_plan If this is default plan
     * @return $this
     */
    public function setDefaultPlan($default_plan)
    {
        $this->container['default_plan'] = $default_plan;

        return $this;
    }

    /**
     * Gets final_subscription_action
     * @return string
     */
    public function getFinalSubscriptionAction()
    {
        return $this->container['final_subscription_action'];
    }

    /**
     * Sets final_subscription_action
     * @param string $final_subscription_action Action to take for subscription if dunning fails, one of the following: `expire`, `on_hold`, `none`
     * @return $this
     */
    public function setFinalSubscriptionAction($final_subscription_action)
    {
        $allowed_values = array('expire', 'on_hold', 'none');
        if ((!in_array($final_subscription_action, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'final_subscription_action', must be one of 'expire', 'on_hold', 'none'");
        }
        $this->container['final_subscription_action'] = $final_subscription_action;

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


