<?php
/**
 * DocxInsertImageRequest
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
 * Swagger Codegen version: unset
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
 * DocxInsertImageRequest Class Doc Comment
 *
 * @category Class
 * @description Input to set-footer command
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocxInsertImageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocxInsertImageRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'input_document_file_bytes' => 'string',
        'input_document_file_url' => 'string',
        'input_image_file_bytes' => 'string',
        'input_image_file_url' => 'string',
        'image_width' => 'int',
        'image_height' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'input_document_file_bytes' => 'byte',
        'input_document_file_url' => null,
        'input_image_file_bytes' => 'byte',
        'input_image_file_url' => null,
        'image_width' => 'int64',
        'image_height' => 'int64'
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
        'input_document_file_bytes' => 'InputDocumentFileBytes',
        'input_document_file_url' => 'InputDocumentFileUrl',
        'input_image_file_bytes' => 'InputImageFileBytes',
        'input_image_file_url' => 'InputImageFileUrl',
        'image_width' => 'ImageWidth',
        'image_height' => 'ImageHeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'input_document_file_bytes' => 'setInputDocumentFileBytes',
        'input_document_file_url' => 'setInputDocumentFileUrl',
        'input_image_file_bytes' => 'setInputImageFileBytes',
        'input_image_file_url' => 'setInputImageFileUrl',
        'image_width' => 'setImageWidth',
        'image_height' => 'setImageHeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'input_document_file_bytes' => 'getInputDocumentFileBytes',
        'input_document_file_url' => 'getInputDocumentFileUrl',
        'input_image_file_bytes' => 'getInputImageFileBytes',
        'input_image_file_url' => 'getInputImageFileUrl',
        'image_width' => 'getImageWidth',
        'image_height' => 'getImageHeight'
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
        $this->container['input_document_file_bytes'] = isset($data['input_document_file_bytes']) ? $data['input_document_file_bytes'] : null;
        $this->container['input_document_file_url'] = isset($data['input_document_file_url']) ? $data['input_document_file_url'] : null;
        $this->container['input_image_file_bytes'] = isset($data['input_image_file_bytes']) ? $data['input_image_file_bytes'] : null;
        $this->container['input_image_file_url'] = isset($data['input_image_file_url']) ? $data['input_image_file_url'] : null;
        $this->container['image_width'] = isset($data['image_width']) ? $data['image_width'] : null;
        $this->container['image_height'] = isset($data['image_height']) ? $data['image_height'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['input_document_file_bytes']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['input_document_file_bytes'])) {
            $invalidProperties[] = "invalid value for 'input_document_file_bytes', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['input_image_file_bytes']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['input_image_file_bytes'])) {
            $invalidProperties[] = "invalid value for 'input_image_file_bytes', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

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

        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['input_document_file_bytes'])) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['input_image_file_bytes'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets input_document_file_bytes
     *
     * @return string
     */
    public function getInputDocumentFileBytes()
    {
        return $this->container['input_document_file_bytes'];
    }

    /**
     * Sets input_document_file_bytes
     *
     * @param string $input_document_file_bytes Optional: Bytes of the input file to operate on
     *
     * @return $this
     */
    public function setInputDocumentFileBytes($input_document_file_bytes)
    {

        if (!is_null($input_document_file_bytes) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $input_document_file_bytes))) {
            throw new \InvalidArgumentException("invalid value for $input_document_file_bytes when calling DocxInsertImageRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['input_document_file_bytes'] = $input_document_file_bytes;

        return $this;
    }

    /**
     * Gets input_document_file_url
     *
     * @return string
     */
    public function getInputDocumentFileUrl()
    {
        return $this->container['input_document_file_url'];
    }

    /**
     * Sets input_document_file_url
     *
     * @param string $input_document_file_url Optional: URL of a file to operate on as input.  This can be a public URL, or you can also use the begin-editing API to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public).
     *
     * @return $this
     */
    public function setInputDocumentFileUrl($input_document_file_url)
    {
        $this->container['input_document_file_url'] = $input_document_file_url;

        return $this;
    }

    /**
     * Gets input_image_file_bytes
     *
     * @return string
     */
    public function getInputImageFileBytes()
    {
        return $this->container['input_image_file_bytes'];
    }

    /**
     * Sets input_image_file_bytes
     *
     * @param string $input_image_file_bytes Optional: Bytes of the input image file to operate on
     *
     * @return $this
     */
    public function setInputImageFileBytes($input_image_file_bytes)
    {

        if (!is_null($input_image_file_bytes) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $input_image_file_bytes))) {
            throw new \InvalidArgumentException("invalid value for $input_image_file_bytes when calling DocxInsertImageRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['input_image_file_bytes'] = $input_image_file_bytes;

        return $this;
    }

    /**
     * Gets input_image_file_url
     *
     * @return string
     */
    public function getInputImageFileUrl()
    {
        return $this->container['input_image_file_url'];
    }

    /**
     * Sets input_image_file_url
     *
     * @param string $input_image_file_url Optional: URL of an image file to operate on as input.  This can be a public URL, or you can also use the begin-editing API to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public).
     *
     * @return $this
     */
    public function setInputImageFileUrl($input_image_file_url)
    {
        $this->container['input_image_file_url'] = $input_image_file_url;

        return $this;
    }

    /**
     * Gets image_width
     *
     * @return int
     */
    public function getImageWidth()
    {
        return $this->container['image_width'];
    }

    /**
     * Sets image_width
     *
     * @param int $image_width Width in points of the image, set to 0 for default
     *
     * @return $this
     */
    public function setImageWidth($image_width)
    {
        $this->container['image_width'] = $image_width;

        return $this;
    }

    /**
     * Gets image_height
     *
     * @return int
     */
    public function getImageHeight()
    {
        return $this->container['image_height'];
    }

    /**
     * Sets image_height
     *
     * @param int $image_height Height in point of the image, set to 0 for default
     *
     * @return $this
     */
    public function setImageHeight($image_height)
    {
        $this->container['image_height'] = $image_height;

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

