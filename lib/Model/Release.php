<?php
/**
 * Release
 *
 * PHP version 5
 *
 * @category Class
 * @package  OneMusicAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OneMusicAPI
 *
 * OneMusicAPI is a low cost music metadata API
 *
 * The version of the OpenAPI document: 0.0.0
 * Contact: dan@elstensoftware.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OneMusicAPI\Client\Model;

use \ArrayAccess;
use \OneMusicAPI\Client\ObjectSerializer;

/**
 * Release Class Doc Comment
 *
 * @category Class
 * @package  OneMusicAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Release implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Release';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source_uri' => 'string',
        'title' => 'string',
        'subtitle' => 'string',
        'artist' => 'string',
        'year' => 'string',
        'country' => 'string',
        'genre' => 'string[]',
        'compilation' => 'bool',
        'media' => '\OneMusicAPI\Client\Model\Medium[]',
        'images' => '\OneMusicAPI\Client\Model\Image[]',
        'uris' => 'string[]',
        'types' => 'string[]',
        'label' => '\OneMusicAPI\Client\Model\ReleaseLabel',
        'barcode' => 'string',
        'score' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'source_uri' => null,
        'title' => null,
        'subtitle' => null,
        'artist' => null,
        'year' => null,
        'country' => null,
        'genre' => null,
        'compilation' => null,
        'media' => null,
        'images' => null,
        'uris' => null,
        'types' => null,
        'label' => null,
        'barcode' => null,
        'score' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'source_uri' => 'sourceUri',
        'title' => 'title',
        'subtitle' => 'subtitle',
        'artist' => 'artist',
        'year' => 'year',
        'country' => 'country',
        'genre' => 'genre',
        'compilation' => 'compilation',
        'media' => 'media',
        'images' => 'images',
        'uris' => 'uris',
        'types' => 'types',
        'label' => 'label',
        'barcode' => 'barcode',
        'score' => 'score'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_uri' => 'setSourceUri',
        'title' => 'setTitle',
        'subtitle' => 'setSubtitle',
        'artist' => 'setArtist',
        'year' => 'setYear',
        'country' => 'setCountry',
        'genre' => 'setGenre',
        'compilation' => 'setCompilation',
        'media' => 'setMedia',
        'images' => 'setImages',
        'uris' => 'setUris',
        'types' => 'setTypes',
        'label' => 'setLabel',
        'barcode' => 'setBarcode',
        'score' => 'setScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_uri' => 'getSourceUri',
        'title' => 'getTitle',
        'subtitle' => 'getSubtitle',
        'artist' => 'getArtist',
        'year' => 'getYear',
        'country' => 'getCountry',
        'genre' => 'getGenre',
        'compilation' => 'getCompilation',
        'media' => 'getMedia',
        'images' => 'getImages',
        'uris' => 'getUris',
        'types' => 'getTypes',
        'label' => 'getLabel',
        'barcode' => 'getBarcode',
        'score' => 'getScore'
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
        return self::$openAPIModelName;
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
        $this->container['source_uri'] = isset($data['source_uri']) ? $data['source_uri'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['subtitle'] = isset($data['subtitle']) ? $data['subtitle'] : null;
        $this->container['artist'] = isset($data['artist']) ? $data['artist'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['genre'] = isset($data['genre']) ? $data['genre'] : null;
        $this->container['compilation'] = isset($data['compilation']) ? $data['compilation'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['uris'] = isset($data['uris']) ? $data['uris'] : null;
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['source_uri'] === null) {
            $invalidProperties[] = "'source_uri' can't be null";
        }
        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets source_uri
     *
     * @return string
     */
    public function getSourceUri()
    {
        return $this->container['source_uri'];
    }

    /**
     * Sets source_uri
     *
     * @param string $source_uri source_uri
     *
     * @return $this
     */
    public function setSourceUri($source_uri)
    {
        $this->container['source_uri'] = $source_uri;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subtitle
     *
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle
     *
     * @param string|null $subtitle subtitle
     *
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->container['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * Gets artist
     *
     * @return string|null
     */
    public function getArtist()
    {
        return $this->container['artist'];
    }

    /**
     * Sets artist
     *
     * @param string|null $artist artist
     *
     * @return $this
     */
    public function setArtist($artist)
    {
        $this->container['artist'] = $artist;

        return $this;
    }

    /**
     * Gets year
     *
     * @return string|null
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param string|null $year year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets genre
     *
     * @return string[]|null
     */
    public function getGenre()
    {
        return $this->container['genre'];
    }

    /**
     * Sets genre
     *
     * @param string[]|null $genre genre
     *
     * @return $this
     */
    public function setGenre($genre)
    {
        $this->container['genre'] = $genre;

        return $this;
    }

    /**
     * Gets compilation
     *
     * @return bool|null
     */
    public function getCompilation()
    {
        return $this->container['compilation'];
    }

    /**
     * Sets compilation
     *
     * @param bool|null $compilation compilation
     *
     * @return $this
     */
    public function setCompilation($compilation)
    {
        $this->container['compilation'] = $compilation;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OneMusicAPI\Client\Model\Medium[]|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OneMusicAPI\Client\Model\Medium[]|null $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \OneMusicAPI\Client\Model\Image[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \OneMusicAPI\Client\Model\Image[]|null $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets uris
     *
     * @return string[]|null
     */
    public function getUris()
    {
        return $this->container['uris'];
    }

    /**
     * Sets uris
     *
     * @param string[]|null $uris uris
     *
     * @return $this
     */
    public function setUris($uris)
    {
        $this->container['uris'] = $uris;

        return $this;
    }

    /**
     * Gets types
     *
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param string[]|null $types types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->container['types'] = $types;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \OneMusicAPI\Client\Model\ReleaseLabel|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \OneMusicAPI\Client\Model\ReleaseLabel|null $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string|null $barcode barcode
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets score
     *
     * @return double
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param double $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


