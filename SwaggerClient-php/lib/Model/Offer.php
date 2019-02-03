<?php
/**
 * Offer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Takealot Seller API
 *
 * The Takealot Seller API for Offers represents the initial phase of the Seller API. With this you will be able to manage your offers in an automated and scalable way. Please ensure you have read the documentation for the Seller API, found at https://sellerportal.takealot.com/api, for an introduction and important information before attempting to use this API. The below documentation describes each endpoint of the API.
 *
 * OpenAPI spec version: 1.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1
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
 * Offer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Offer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Offer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tsin_id' => 'int',
        'offer_id' => 'int',
        'sku' => 'string',
        'gtin' => 'string',
        'mp_barcode' => 'string',
        'price' => 'int',
        'rrp' => 'int',
        'leadtime_days' => 'int',
        'leadtime_stock' => 'int',
        'status' => 'string',
        'title' => 'string',
        'takealot_url' => 'string',
        'stock_at_takealot' => '\Swagger\Client\Model\OfferWarehouseStock[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tsin_id' => null,
        'offer_id' => null,
        'sku' => null,
        'gtin' => null,
        'mp_barcode' => null,
        'price' => null,
        'rrp' => null,
        'leadtime_days' => null,
        'leadtime_stock' => null,
        'status' => null,
        'title' => null,
        'takealot_url' => null,
        'stock_at_takealot' => null
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
        'tsin_id' => 'tsin_id',
        'offer_id' => 'offer_id',
        'sku' => 'sku',
        'gtin' => 'gtin',
        'mp_barcode' => 'mp_barcode',
        'price' => 'price',
        'rrp' => 'rrp',
        'leadtime_days' => 'leadtime_days',
        'leadtime_stock' => 'leadtime_stock',
        'status' => 'status',
        'title' => 'title',
        'takealot_url' => 'takealot_url',
        'stock_at_takealot' => 'stock_at_takealot'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tsin_id' => 'setTsinId',
        'offer_id' => 'setOfferId',
        'sku' => 'setSku',
        'gtin' => 'setGtin',
        'mp_barcode' => 'setMpBarcode',
        'price' => 'setPrice',
        'rrp' => 'setRrp',
        'leadtime_days' => 'setLeadtimeDays',
        'leadtime_stock' => 'setLeadtimeStock',
        'status' => 'setStatus',
        'title' => 'setTitle',
        'takealot_url' => 'setTakealotUrl',
        'stock_at_takealot' => 'setStockAtTakealot'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tsin_id' => 'getTsinId',
        'offer_id' => 'getOfferId',
        'sku' => 'getSku',
        'gtin' => 'getGtin',
        'mp_barcode' => 'getMpBarcode',
        'price' => 'getPrice',
        'rrp' => 'getRrp',
        'leadtime_days' => 'getLeadtimeDays',
        'leadtime_stock' => 'getLeadtimeStock',
        'status' => 'getStatus',
        'title' => 'getTitle',
        'takealot_url' => 'getTakealotUrl',
        'stock_at_takealot' => 'getStockAtTakealot'
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
        $this->container['tsin_id'] = isset($data['tsin_id']) ? $data['tsin_id'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['gtin'] = isset($data['gtin']) ? $data['gtin'] : null;
        $this->container['mp_barcode'] = isset($data['mp_barcode']) ? $data['mp_barcode'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['rrp'] = isset($data['rrp']) ? $data['rrp'] : null;
        $this->container['leadtime_days'] = isset($data['leadtime_days']) ? $data['leadtime_days'] : null;
        $this->container['leadtime_stock'] = isset($data['leadtime_stock']) ? $data['leadtime_stock'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['takealot_url'] = isset($data['takealot_url']) ? $data['takealot_url'] : null;
        $this->container['stock_at_takealot'] = isset($data['stock_at_takealot']) ? $data['stock_at_takealot'] : null;
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
     * Gets tsin_id
     *
     * @return int
     */
    public function getTsinId()
    {
        return $this->container['tsin_id'];
    }

    /**
     * Sets tsin_id
     *
     * @param int $tsin_id tsin_id
     *
     * @return $this
     */
    public function setTsinId($tsin_id)
    {
        $this->container['tsin_id'] = $tsin_id;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return int
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param int $offer_id offer_id
     *
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string $gtin gtin
     *
     * @return $this
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets mp_barcode
     *
     * @return string
     */
    public function getMpBarcode()
    {
        return $this->container['mp_barcode'];
    }

    /**
     * Sets mp_barcode
     *
     * @param string $mp_barcode mp_barcode
     *
     * @return $this
     */
    public function setMpBarcode($mp_barcode)
    {
        $this->container['mp_barcode'] = $mp_barcode;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets rrp
     *
     * @return int
     */
    public function getRrp()
    {
        return $this->container['rrp'];
    }

    /**
     * Sets rrp
     *
     * @param int $rrp rrp
     *
     * @return $this
     */
    public function setRrp($rrp)
    {
        $this->container['rrp'] = $rrp;

        return $this;
    }

    /**
     * Gets leadtime_days
     *
     * @return int
     */
    public function getLeadtimeDays()
    {
        return $this->container['leadtime_days'];
    }

    /**
     * Sets leadtime_days
     *
     * @param int $leadtime_days leadtime_days
     *
     * @return $this
     */
    public function setLeadtimeDays($leadtime_days)
    {
        $this->container['leadtime_days'] = $leadtime_days;

        return $this;
    }

    /**
     * Gets leadtime_stock
     *
     * @return int
     */
    public function getLeadtimeStock()
    {
        return $this->container['leadtime_stock'];
    }

    /**
     * Sets leadtime_stock
     *
     * @param int $leadtime_stock leadtime_stock
     *
     * @return $this
     */
    public function setLeadtimeStock($leadtime_stock)
    {
        $this->container['leadtime_stock'] = $leadtime_stock;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets takealot_url
     *
     * @return string
     */
    public function getTakealotUrl()
    {
        return $this->container['takealot_url'];
    }

    /**
     * Sets takealot_url
     *
     * @param string $takealot_url takealot_url
     *
     * @return $this
     */
    public function setTakealotUrl($takealot_url)
    {
        $this->container['takealot_url'] = $takealot_url;

        return $this;
    }

    /**
     * Gets stock_at_takealot
     *
     * @return \Swagger\Client\Model\OfferWarehouseStock[]
     */
    public function getStockAtTakealot()
    {
        return $this->container['stock_at_takealot'];
    }

    /**
     * Sets stock_at_takealot
     *
     * @param \Swagger\Client\Model\OfferWarehouseStock[] $stock_at_takealot stock_at_takealot
     *
     * @return $this
     */
    public function setStockAtTakealot($stock_at_takealot)
    {
        $this->container['stock_at_takealot'] = $stock_at_takealot;

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

