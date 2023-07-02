<?php
/**
 * DocxTopLevelComment
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
 * DocxTopLevelComment Class Doc Comment
 *
 * @category Class
 * @description Top-level Comment in a Word Document
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocxTopLevelComment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocxTopLevelComment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'path' => 'string',
        'author' => 'string',
        'author_initials' => 'string',
        'comment_text' => 'string',
        'comment_date' => '\DateTime',
        'reply_child_comments' => '\Swagger\Client\Model\DocxComment[]',
        'done' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'path' => null,
        'author' => null,
        'author_initials' => null,
        'comment_text' => null,
        'comment_date' => 'date-time',
        'reply_child_comments' => null,
        'done' => null
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
        'path' => 'Path',
        'author' => 'Author',
        'author_initials' => 'AuthorInitials',
        'comment_text' => 'CommentText',
        'comment_date' => 'CommentDate',
        'reply_child_comments' => 'ReplyChildComments',
        'done' => 'Done'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'path' => 'setPath',
        'author' => 'setAuthor',
        'author_initials' => 'setAuthorInitials',
        'comment_text' => 'setCommentText',
        'comment_date' => 'setCommentDate',
        'reply_child_comments' => 'setReplyChildComments',
        'done' => 'setDone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'path' => 'getPath',
        'author' => 'getAuthor',
        'author_initials' => 'getAuthorInitials',
        'comment_text' => 'getCommentText',
        'comment_date' => 'getCommentDate',
        'reply_child_comments' => 'getReplyChildComments',
        'done' => 'getDone'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['author_initials'] = isset($data['author_initials']) ? $data['author_initials'] : null;
        $this->container['comment_text'] = isset($data['comment_text']) ? $data['comment_text'] : null;
        $this->container['comment_date'] = isset($data['comment_date']) ? $data['comment_date'] : null;
        $this->container['reply_child_comments'] = isset($data['reply_child_comments']) ? $data['reply_child_comments'] : null;
        $this->container['done'] = isset($data['done']) ? $data['done'] : null;
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
     * @param string $path Path to the comment in the document
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author Author name of the comment
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets author_initials
     *
     * @return string
     */
    public function getAuthorInitials()
    {
        return $this->container['author_initials'];
    }

    /**
     * Sets author_initials
     *
     * @param string $author_initials Initials of the author of the comment
     *
     * @return $this
     */
    public function setAuthorInitials($author_initials)
    {
        $this->container['author_initials'] = $author_initials;

        return $this;
    }

    /**
     * Gets comment_text
     *
     * @return string
     */
    public function getCommentText()
    {
        return $this->container['comment_text'];
    }

    /**
     * Sets comment_text
     *
     * @param string $comment_text Text content of the comment
     *
     * @return $this
     */
    public function setCommentText($comment_text)
    {
        $this->container['comment_text'] = $comment_text;

        return $this;
    }

    /**
     * Gets comment_date
     *
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->container['comment_date'];
    }

    /**
     * Sets comment_date
     *
     * @param \DateTime $comment_date Date timestamp of the comment
     *
     * @return $this
     */
    public function setCommentDate($comment_date)
    {
        $this->container['comment_date'] = $comment_date;

        return $this;
    }

    /**
     * Gets reply_child_comments
     *
     * @return \Swagger\Client\Model\DocxComment[]
     */
    public function getReplyChildComments()
    {
        return $this->container['reply_child_comments'];
    }

    /**
     * Sets reply_child_comments
     *
     * @param \Swagger\Client\Model\DocxComment[] $reply_child_comments Child comments, that are replies to this one
     *
     * @return $this
     */
    public function setReplyChildComments($reply_child_comments)
    {
        $this->container['reply_child_comments'] = $reply_child_comments;

        return $this;
    }

    /**
     * Gets done
     *
     * @return bool
     */
    public function getDone()
    {
        return $this->container['done'];
    }

    /**
     * Sets done
     *
     * @param bool $done True if this comment is marked as Done in Word, otherwise it is false
     *
     * @return $this
     */
    public function setDone($done)
    {
        $this->container['done'] = $done;

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


