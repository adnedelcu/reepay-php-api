<?php
/**
 * InlineResponse20012
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
 * InlineResponse20012 Class Doc Comment
 *
 * @category    Class
 * @description A page in a paginated customer search
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20012 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_12';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'page' => 'int',
        'size' => 'int',
        'count' => 'int',
        'search' => 'string',
        'sort' => 'string',
        'content' => '\Swagger\Client\Model\InlineResponse20012Content[]',
        'total_elements' => 'int',
        'total_pages' => 'int'
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
        'page' => 'page',
        'size' => 'size',
        'count' => 'count',
        'search' => 'search',
        'sort' => 'sort',
        'content' => 'content',
        'total_elements' => 'total_elements',
        'total_pages' => 'total_pages'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'page' => 'setPage',
        'size' => 'setSize',
        'count' => 'setCount',
        'search' => 'setSearch',
        'sort' => 'setSort',
        'content' => 'setContent',
        'total_elements' => 'setTotalElements',
        'total_pages' => 'setTotalPages'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'page' => 'getPage',
        'size' => 'getSize',
        'count' => 'getCount',
        'search' => 'getSearch',
        'sort' => 'getSort',
        'content' => 'getContent',
        'total_elements' => 'getTotalElements',
        'total_pages' => 'getTotalPages'
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
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['total_elements'] = isset($data['total_elements']) ? $data['total_elements'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['page'] === null) {
            $invalid_properties[] = "'page' can't be null";
        }
        if (($this->container['page'] < 1)) {
            $invalid_properties[] = "invalid value for 'page', must be bigger than or equal to 1.";
        }

        if ($this->container['size'] === null) {
            $invalid_properties[] = "'size' can't be null";
        }
        if (($this->container['size'] < 1)) {
            $invalid_properties[] = "invalid value for 'size', must be bigger than or equal to 1.";
        }

        if ($this->container['count'] === null) {
            $invalid_properties[] = "'count' can't be null";
        }
        if (($this->container['count'] < 0)) {
            $invalid_properties[] = "invalid value for 'count', must be bigger than or equal to 0.";
        }

        if ($this->container['content'] === null) {
            $invalid_properties[] = "'content' can't be null";
        }
        if ($this->container['total_elements'] === null) {
            $invalid_properties[] = "'total_elements' can't be null";
        }
        if (($this->container['total_elements'] < 0)) {
            $invalid_properties[] = "invalid value for 'total_elements', must be bigger than or equal to 0.";
        }

        if ($this->container['total_pages'] === null) {
            $invalid_properties[] = "'total_pages' can't be null";
        }
        if (($this->container['total_pages'] < 0)) {
            $invalid_properties[] = "invalid value for 'total_pages', must be bigger than or equal to 0.";
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

        if ($this->container['page'] === null) {
            return false;
        }
        if ($this->container['page'] < 1) {
            return false;
        }
        if ($this->container['size'] === null) {
            return false;
        }
        if ($this->container['size'] < 1) {
            return false;
        }
        if ($this->container['count'] === null) {
            return false;
        }
        if ($this->container['count'] < 0) {
            return false;
        }
        if ($this->container['content'] === null) {
            return false;
        }
        if ($this->container['total_elements'] === null) {
            return false;
        }
        if ($this->container['total_elements'] < 0) {
            return false;
        }
        if ($this->container['total_pages'] === null) {
            return false;
        }
        if ($this->container['total_pages'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets page
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     * @param int $page Number of current page in paginated list
     * @return $this
     */
    public function setPage($page)
    {

        if (($page < 1)) {
            throw new \InvalidArgumentException('invalid value for $page when calling InlineResponse20012., must be bigger than or equal to 1.');
        }

        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param int $size Page size in paginated list
     * @return $this
     */
    public function setSize($size)
    {

        if (($size < 1)) {
            throw new \InvalidArgumentException('invalid value for $size when calling InlineResponse20012., must be bigger than or equal to 1.');
        }

        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count Number of elements in current page
     * @return $this
     */
    public function setCount($count)
    {

        if (($count < 0)) {
            throw new \InvalidArgumentException('invalid value for $count when calling InlineResponse20012., must be bigger than or equal to 0.');
        }

        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets search
     * @return string
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     * @param string $search Optional search expression used
     * @return $this
     */
    public function setSearch($search)
    {
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets sort
     * @return string
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     * @param string $sort Optional sort expression used
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets content
     * @return \Swagger\Client\Model\InlineResponse20012Content[]
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param \Swagger\Client\Model\InlineResponse20012Content[] $content List of customers for current page
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets total_elements
     * @return int
     */
    public function getTotalElements()
    {
        return $this->container['total_elements'];
    }

    /**
     * Sets total_elements
     * @param int $total_elements Total number of elements in paginated list
     * @return $this
     */
    public function setTotalElements($total_elements)
    {

        if (($total_elements < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_elements when calling InlineResponse20012., must be bigger than or equal to 0.');
        }

        $this->container['total_elements'] = $total_elements;

        return $this;
    }

    /**
     * Gets total_pages
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     * @param int $total_pages Total number of pages in paginated list
     * @return $this
     */
    public function setTotalPages($total_pages)
    {

        if (($total_pages < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_pages when calling InlineResponse20012., must be bigger than or equal to 0.');
        }

        $this->container['total_pages'] = $total_pages;

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


