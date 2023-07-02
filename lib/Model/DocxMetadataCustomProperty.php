<?php
/**
 * DocxMetadataCustomProperty
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
 * Swagger Codegen version: 2.4.32
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
 * DocxMetadataCustomProperty Class Doc Comment
 *
 * @category Class
 * @description Name and value pair for a custom-defined DOCX metadata property
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocxMetadataCustomProperty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocxMetadataCustomProperty';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'property_name' => 'string',
        'property_data_type' => 'string',
        'string_value' => 'string',
        'integer_value' => 'int',
        'double_value' => 'double',
        'date_value' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'property_name' => null,
        'property_data_type' => null,
        'string_value' => null,
        'integer_value' => 'int64',
        'double_value' => 'double',
        'date_value' => 'date-time'
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
        'property_name' => 'PropertyName',
        'property_data_type' => 'PropertyDataType',
        'string_value' => 'StringValue',
        'integer_value' => 'IntegerValue',
        'double_value' => 'DoubleValue',
        'date_value' => 'DateValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_name' => 'setPropertyName',
        'property_data_type' => 'setPropertyDataType',
        'string_value' => 'setStringValue',
        'integer_value' => 'setIntegerValue',
        'double_value' => 'setDoubleValue',
        'date_value' => 'setDateValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_name' => 'getPropertyName',
        'property_data_type' => 'getPropertyDataType',
        'string_value' => 'getStringValue',
        'integer_value' => 'getIntegerValue',
        'double_value' => 'getDoubleValue',
        'date_value' => 'getDateValue'
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
        $this->container['property_name'] = isset($data['property_name']) ? $data['property_name'] : null;
        $this->container['property_data_type'] = isset($data['property_data_type']) ? $data['property_data_type'] : null;
        $this->container['string_value'] = isset($data['string_value']) ? $data['string_value'] : null;
        $this->container['integer_value'] = isset($data['integer_value']) ? $data['integer_value'] : null;
        $this->container['double_value'] = isset($data['double_value']) ? $data['double_value'] : null;
        $this->container['date_value'] = isset($data['date_value']) ? $data['date_value'] : null;
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
     * Gets property_name
     *
     * @return string
     */
    public function getPropertyName()
    {
        return $this->container['property_name'];
    }

    /**
     * Sets property_name
     *
     * @param string $property_name Name of the property
     *
     * @return $this
     */
    public function setPropertyName($property_name)
    {
        $this->container['property_name'] = $property_name;

        return $this;
    }

    /**
     * Gets property_data_type
     *
     * @return string
     */
    public function getPropertyDataType()
    {
        return $this->container['property_data_type'];
    }

    /**
     * Sets property_data_type
     *
     * @param string $property_data_type Data type of the property; possible values are \"string\", \"integer\", \"double\" or \"date\"
     *
     * @return $this
     */
    public function setPropertyDataType($property_data_type)
    {
        $this->container['property_data_type'] = $property_data_type;

        return $this;
    }

    /**
     * Gets string_value
     *
     * @return string
     */
    public function getStringValue()
    {
        return $this->container['string_value'];
    }

    /**
     * Sets string_value
     *
     * @param string $string_value If the property is of a string data type, then provides the string value if available
     *
     * @return $this
     */
    public function setStringValue($string_value)
    {
        $this->container['string_value'] = $string_value;

        return $this;
    }

    /**
     * Gets integer_value
     *
     * @return int
     */
    public function getIntegerValue()
    {
        return $this->container['integer_value'];
    }

    /**
     * Sets integer_value
     *
     * @param int $integer_value If the property is of a integer data type, then provides the integer value if available
     *
     * @return $this
     */
    public function setIntegerValue($integer_value)
    {
        $this->container['integer_value'] = $integer_value;

        return $this;
    }

    /**
     * Gets double_value
     *
     * @return double
     */
    public function getDoubleValue()
    {
        return $this->container['double_value'];
    }

    /**
     * Sets double_value
     *
     * @param double $double_value If the property is of a double floating point data type, then provides the double value if available
     *
     * @return $this
     */
    public function setDoubleValue($double_value)
    {
        $this->container['double_value'] = $double_value;

        return $this;
    }

    /**
     * Gets date_value
     *
     * @return \DateTime
     */
    public function getDateValue()
    {
        return $this->container['date_value'];
    }

    /**
     * Sets date_value
     *
     * @param \DateTime $date_value If the property is of a date time data type, then provides the date time value if available
     *
     * @return $this
     */
    public function setDateValue($date_value)
    {
        $this->container['date_value'] = $date_value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


