<?php
/**
 * InlineResponse20014Cards
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
 * InlineResponse20014Cards Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20014Cards implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_14_cards';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'state' => 'string',
        'customer' => 'string',
        'failed' => '\DateTime',
        'created' => '\DateTime',
        'fingerprint' => 'string',
        'reactivated' => '\DateTime',
        'gw_ref' => 'string',
        'card_type' => 'string',
        'exp_date' => 'string',
        'masked_card' => 'string',
        'last_success' => '\DateTime',
        'last_failed' => '\DateTime',
        'first_fail' => '\DateTime',
        'error_code' => 'string',
        'error_state' => 'string'
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
        'id' => 'id',
        'state' => 'state',
        'customer' => 'customer',
        'failed' => 'failed',
        'created' => 'created',
        'fingerprint' => 'fingerprint',
        'reactivated' => 'reactivated',
        'gw_ref' => 'gw_ref',
        'card_type' => 'card_type',
        'exp_date' => 'exp_date',
        'masked_card' => 'masked_card',
        'last_success' => 'last_success',
        'last_failed' => 'last_failed',
        'first_fail' => 'first_fail',
        'error_code' => 'error_code',
        'error_state' => 'error_state'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'customer' => 'setCustomer',
        'failed' => 'setFailed',
        'created' => 'setCreated',
        'fingerprint' => 'setFingerprint',
        'reactivated' => 'setReactivated',
        'gw_ref' => 'setGwRef',
        'card_type' => 'setCardType',
        'exp_date' => 'setExpDate',
        'masked_card' => 'setMaskedCard',
        'last_success' => 'setLastSuccess',
        'last_failed' => 'setLastFailed',
        'first_fail' => 'setFirstFail',
        'error_code' => 'setErrorCode',
        'error_state' => 'setErrorState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'customer' => 'getCustomer',
        'failed' => 'getFailed',
        'created' => 'getCreated',
        'fingerprint' => 'getFingerprint',
        'reactivated' => 'getReactivated',
        'gw_ref' => 'getGwRef',
        'card_type' => 'getCardType',
        'exp_date' => 'getExpDate',
        'masked_card' => 'getMaskedCard',
        'last_success' => 'getLastSuccess',
        'last_failed' => 'getLastFailed',
        'first_fail' => 'getFirstFail',
        'error_code' => 'getErrorCode',
        'error_state' => 'getErrorState'
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
    const STATE_INACTIVATED = 'inactivated';
    const STATE_FAILED = 'failed';
    const CARD_TYPE_UNKNOWN = 'unknown';
    const CARD_TYPE_VISA = 'visa';
    const CARD_TYPE_MC = 'mc';
    const CARD_TYPE_DANKORT = 'dankort';
    const CARD_TYPE_VISA_DK = 'visa_dk';
    const CARD_TYPE_VISA_ELEC = 'visa_elec';
    const CARD_TYPE_MAESTRO = 'maestro';
    const CARD_TYPE_LASER = 'laser';
    const CARD_TYPE_AMEX = 'amex';
    const CARD_TYPE_DINERS = 'diners';
    const CARD_TYPE_DISCOVER = 'discover';
    const CARD_TYPE_JCB = 'jcb';
    const ERROR_STATE_PENDING = 'pending';
    const ERROR_STATE_SOFT_DECLINED = 'soft_declined';
    const ERROR_STATE_HARD_DECLINED = 'hard_declined';
    const ERROR_STATE_PROCESSING_ERROR = 'processing_error';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_INACTIVATED,
            self::STATE_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_UNKNOWN,
            self::CARD_TYPE_VISA,
            self::CARD_TYPE_MC,
            self::CARD_TYPE_DANKORT,
            self::CARD_TYPE_VISA_DK,
            self::CARD_TYPE_VISA_ELEC,
            self::CARD_TYPE_MAESTRO,
            self::CARD_TYPE_LASER,
            self::CARD_TYPE_AMEX,
            self::CARD_TYPE_DINERS,
            self::CARD_TYPE_DISCOVER,
            self::CARD_TYPE_JCB,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getErrorStateAllowableValues()
    {
        return [
            self::ERROR_STATE_PENDING,
            self::ERROR_STATE_SOFT_DECLINED,
            self::ERROR_STATE_HARD_DECLINED,
            self::ERROR_STATE_PROCESSING_ERROR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['reactivated'] = isset($data['reactivated']) ? $data['reactivated'] : null;
        $this->container['gw_ref'] = isset($data['gw_ref']) ? $data['gw_ref'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['exp_date'] = isset($data['exp_date']) ? $data['exp_date'] : null;
        $this->container['masked_card'] = isset($data['masked_card']) ? $data['masked_card'] : null;
        $this->container['last_success'] = isset($data['last_success']) ? $data['last_success'] : null;
        $this->container['last_failed'] = isset($data['last_failed']) ? $data['last_failed'] : null;
        $this->container['first_fail'] = isset($data['first_fail']) ? $data['first_fail'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_state'] = isset($data['error_state']) ? $data['error_state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = ["active", "inactivated", "failed"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'active', 'inactivated', 'failed'.";
        }

        if ($this->container['customer'] === null) {
            $invalid_properties[] = "'customer' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if ($this->container['gw_ref'] === null) {
            $invalid_properties[] = "'gw_ref' can't be null";
        }
        if ($this->container['card_type'] === null) {
            $invalid_properties[] = "'card_type' can't be null";
        }
        $allowed_values = ["unknown", "visa", "mc", "dankort", "visa_dk", "visa_elec", "maestro", "laser", "amex", "diners", "discover", "jcb"];
        if (!in_array($this->container['card_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'card_type', must be one of 'unknown', 'visa', 'mc', 'dankort', 'visa_dk', 'visa_elec', 'maestro', 'laser', 'amex', 'diners', 'discover', 'jcb'.";
        }

        $allowed_values = ["pending", "soft_declined", "hard_declined", "processing_error"];
        if (!in_array($this->container['error_state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'error_state', must be one of 'pending', 'soft_declined', 'hard_declined', 'processing_error'.";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = ["active", "inactivated", "failed"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['customer'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['gw_ref'] === null) {
            return false;
        }
        if ($this->container['card_type'] === null) {
            return false;
        }
        $allowed_values = ["unknown", "visa", "mc", "dankort", "visa_dk", "visa_elec", "maestro", "laser", "amex", "diners", "discover", "jcb"];
        if (!in_array($this->container['card_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["pending", "soft_declined", "hard_declined", "processing_error"];
        if (!in_array($this->container['error_state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique id for payment method
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $state State of the payment method: `active`, `inactivated` or `failed`
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('active', 'inactivated', 'failed');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'active', 'inactivated', 'failed'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets customer
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param string $customer Customer by handle
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets failed
     * @return \DateTime
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     * @param \DateTime $failed Date when the payment method failed. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

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
     * @param \DateTime $created Date when the payment method was created. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets fingerprint
     * @return string
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     * @param string $fingerprint Uniquely identifies this particular card number
     * @return $this
     */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets reactivated
     * @return \DateTime
     */
    public function getReactivated()
    {
        return $this->container['reactivated'];
    }

    /**
     * Sets reactivated
     * @param \DateTime $reactivated Date and time of reactivation if the card has been reactivated from failed state. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setReactivated($reactivated)
    {
        $this->container['reactivated'] = $reactivated;

        return $this;
    }

    /**
     * Gets gw_ref
     * @return string
     */
    public function getGwRef()
    {
        return $this->container['gw_ref'];
    }

    /**
     * Sets gw_ref
     * @param string $gw_ref Card gateway reference id
     * @return $this
     */
    public function setGwRef($gw_ref)
    {
        $this->container['gw_ref'] = $gw_ref;

        return $this;
    }

    /**
     * Gets card_type
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     * @param string $card_type Card type: `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
     * @return $this
     */
    public function setCardType($card_type)
    {
        $allowed_values = array('unknown', 'visa', 'mc', 'dankort', 'visa_dk', 'visa_elec', 'maestro', 'laser', 'amex', 'diners', 'discover', 'jcb');
        if ((!in_array($card_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'card_type', must be one of 'unknown', 'visa', 'mc', 'dankort', 'visa_dk', 'visa_elec', 'maestro', 'laser', 'amex', 'diners', 'discover', 'jcb'");
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets exp_date
     * @return string
     */
    public function getExpDate()
    {
        return $this->container['exp_date'];
    }

    /**
     * Sets exp_date
     * @param string $exp_date Card expire date on form MM-YY
     * @return $this
     */
    public function setExpDate($exp_date)
    {
        $this->container['exp_date'] = $exp_date;

        return $this;
    }

    /**
     * Gets masked_card
     * @return string
     */
    public function getMaskedCard()
    {
        return $this->container['masked_card'];
    }

    /**
     * Sets masked_card
     * @param string $masked_card Masked card number
     * @return $this
     */
    public function setMaskedCard($masked_card)
    {
        $this->container['masked_card'] = $masked_card;

        return $this;
    }

    /**
     * Gets last_success
     * @return \DateTime
     */
    public function getLastSuccess()
    {
        return $this->container['last_success'];
    }

    /**
     * Sets last_success
     * @param \DateTime $last_success Date and time of last succesfull use of the card. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setLastSuccess($last_success)
    {
        $this->container['last_success'] = $last_success;

        return $this;
    }

    /**
     * Gets last_failed
     * @return \DateTime
     */
    public function getLastFailed()
    {
        return $this->container['last_failed'];
    }

    /**
     * Sets last_failed
     * @param \DateTime $last_failed Date and time of last failed use of the card. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setLastFailed($last_failed)
    {
        $this->container['last_failed'] = $last_failed;

        return $this;
    }

    /**
     * Gets first_fail
     * @return \DateTime
     */
    public function getFirstFail()
    {
        return $this->container['first_fail'];
    }

    /**
     * Sets first_fail
     * @param \DateTime $first_fail Date and time of first succesfull use of the card. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setFirstFail($first_fail)
    {
        $this->container['first_fail'] = $first_fail;

        return $this;
    }

    /**
     * Gets error_code
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     * @param string $error_code An error code from the last failed use of the card. See [transaction errors](https://docs.reepay.com/api/#transaction-errors).
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_state
     * @return string
     */
    public function getErrorState()
    {
        return $this->container['error_state'];
    }

    /**
     * Sets error_state
     * @param string $error_state Error state from last failed use of the card: `pending`, `soft_declined`, `hard_declined` or `processing_error`
     * @return $this
     */
    public function setErrorState($error_state)
    {
        $allowed_values = array('pending', 'soft_declined', 'hard_declined', 'processing_error');
        if (!is_null($error_state) && (!in_array($error_state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'error_state', must be one of 'pending', 'soft_declined', 'hard_declined', 'processing_error'");
        }
        $this->container['error_state'] = $error_state;

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


