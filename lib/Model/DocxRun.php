<?php
/**
 * DocxRun
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
 * DocxRun Class Doc Comment
 *
 * @category Class
 * @description A content run in a Word Document (DOCX) file
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocxRun implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocxRun';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'run_index' => 'int',
        'path' => 'string',
        'text_items' => '\Swagger\Client\Model\DocxText[]',
        'bold' => 'bool',
        'italic' => 'bool',
        'underline' => 'string',
        'font_family' => 'string',
        'font_size' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'run_index' => 'int32',
        'path' => null,
        'text_items' => null,
        'bold' => null,
        'italic' => null,
        'underline' => null,
        'font_family' => null,
        'font_size' => null
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
        'run_index' => 'RunIndex',
        'path' => 'Path',
        'text_items' => 'TextItems',
        'bold' => 'Bold',
        'italic' => 'Italic',
        'underline' => 'Underline',
        'font_family' => 'FontFamily',
        'font_size' => 'FontSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'run_index' => 'setRunIndex',
        'path' => 'setPath',
        'text_items' => 'setTextItems',
        'bold' => 'setBold',
        'italic' => 'setItalic',
        'underline' => 'setUnderline',
        'font_family' => 'setFontFamily',
        'font_size' => 'setFontSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'run_index' => 'getRunIndex',
        'path' => 'getPath',
        'text_items' => 'getTextItems',
        'bold' => 'getBold',
        'italic' => 'getItalic',
        'underline' => 'getUnderline',
        'font_family' => 'getFontFamily',
        'font_size' => 'getFontSize'
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
        $this->container['run_index'] = isset($data['run_index']) ? $data['run_index'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['text_items'] = isset($data['text_items']) ? $data['text_items'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['italic'] = isset($data['italic']) ? $data['italic'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
        $this->container['font_family'] = isset($data['font_family']) ? $data['font_family'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
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
     * Gets run_index
     *
     * @return int
     */
    public function getRunIndex()
    {
        return $this->container['run_index'];
    }

    /**
     * Sets run_index
     *
     * @param int $run_index Index of the run, 0-based
     *
     * @return $this
     */
    public function setRunIndex($run_index)
    {
        $this->container['run_index'] = $run_index;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path The Path of the location of this Run object; leave blank for creation
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets text_items
     *
     * @return \Swagger\Client\Model\DocxText[]
     */
    public function getTextItems()
    {
        return $this->container['text_items'];
    }

    /**
     * Sets text_items
     *
     * @param \Swagger\Client\Model\DocxText[] $text_items Text items inside the run; this is where the actual text content is stored
     *
     * @return $this
     */
    public function setTextItems($text_items)
    {
        $this->container['text_items'] = $text_items;

        return $this;
    }

    /**
     * Gets bold
     *
     * @return bool
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /**
     * Sets bold
     *
     * @param bool $bold True to make the text bold, false otherwise
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /**
     * Gets italic
     *
     * @return bool
     */
    public function getItalic()
    {
        return $this->container['italic'];
    }

    /**
     * Sets italic
     *
     * @param bool $italic True to make the text italic, false otherwise
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->container['italic'] = $italic;

        return $this;
    }

    /**
     * Gets underline
     *
     * @return string
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /**
     * Sets underline
     *
     * @param string $underline Underline mode for the text; possible values are: Words, Double, Thick, Dotted, DottedHeavy, Dash, DashedHeavy, DashLong, DashLongHeavy, DotDash, DashDotHeavy, DotDotDash, DashDotDotHeavy, Wave, WavyHeavy, WavyDouble, None
     *
     * @return $this
     */
    public function setUnderline($underline)
    {
        $this->container['underline'] = $underline;

        return $this;
    }

    /**
     * Gets font_family
     *
     * @return string
     */
    public function getFontFamily()
    {
        return $this->container['font_family'];
    }

    /**
     * Sets font_family
     *
     * @param string $font_family Font Family name for the text, e.g. \"Arial\" or \"Times New Roman\"
     *
     * @return $this
     */
    public function setFontFamily($font_family)
    {
        $this->container['font_family'] = $font_family;

        return $this;
    }

    /**
     * Gets font_size
     *
     * @return string
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     *
     * @param string $font_size Font size in font points (e.g. \"24\")
     *
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;

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


