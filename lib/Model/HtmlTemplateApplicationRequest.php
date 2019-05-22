<?php
/**
 * HtmlTemplateApplicationRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * convertapi
 *
 * Convert API lets you effortlessly convert file formats and types.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * HtmlTemplateApplicationRequest Class Doc Comment
 *
 * @category Class
 * @description HTML template application request
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HtmlTemplateApplicationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HtmlTemplateApplicationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'html_template' => 'string',
        'html_template_url' => 'string',
        'operations' => '\Swagger\Client\Model\HtmlTemplateOperation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'html_template' => null,
        'html_template_url' => null,
        'operations' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'html_template' => 'HtmlTemplate',
        'html_template_url' => 'HtmlTemplateUrl',
        'operations' => 'Operations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'html_template' => 'setHtmlTemplate',
        'html_template_url' => 'setHtmlTemplateUrl',
        'operations' => 'setOperations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'html_template' => 'getHtmlTemplate',
        'html_template_url' => 'getHtmlTemplateUrl',
        'operations' => 'getOperations'
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
        return self::$swaggerModelName;
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
        $this->container['html_template'] = isset($data['html_template']) ? $data['html_template'] : null;
        $this->container['html_template_url'] = isset($data['html_template_url']) ? $data['html_template_url'] : null;
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
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

        return true;
    }


    /**
     * Gets html_template
     *
     * @return string
     */
    public function getHtmlTemplate()
    {
        return $this->container['html_template'];
    }

    /**
     * Sets html_template
     *
     * @param string $html_template html_template
     *
     * @return $this
     */
    public function setHtmlTemplate($html_template)
    {
        $this->container['html_template'] = $html_template;

        return $this;
    }

    /**
     * Gets html_template_url
     *
     * @return string
     */
    public function getHtmlTemplateUrl()
    {
        return $this->container['html_template_url'];
    }

    /**
     * Sets html_template_url
     *
     * @param string $html_template_url html_template_url
     *
     * @return $this
     */
    public function setHtmlTemplateUrl($html_template_url)
    {
        $this->container['html_template_url'] = $html_template_url;

        return $this;
    }

    /**
     * Gets operations
     *
     * @return \Swagger\Client\Model\HtmlTemplateOperation[]
     */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
     * Sets operations
     *
     * @param \Swagger\Client\Model\HtmlTemplateOperation[] $operations operations
     *
     * @return $this
     */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


