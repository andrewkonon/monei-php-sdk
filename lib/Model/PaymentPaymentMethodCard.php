<?php
/**
 * PaymentPaymentMethodCard
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MONEI API v1
 *
 * The MONEI API is organized around [REST](https://en.wikipedia.org/wiki/Representational_State_Transfer). Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs. <br/><br/> **Base URL:** https://api.monei.com/v1 <br/><br/> **Client libraries:** <ul>   <li><a target=\"_blank\" href=\"https://github.com/MONEI/monei-php-sdk\">PHP SDK</a></li>   <li><a target=\"_blank\" href=\"https://github.com/MONEI/monei-python-sdk\">Python SDK</a></li>   <li><a target=\"_blank\" href=\"https://github.com/MONEI/monei-node-sdk\">Node.js SDK</a></li> </ul>
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PaymentPaymentMethodCard Class Doc Comment
 *
 * @category Class
 * @description Details about the card used as payment method at the time of the transaction.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentPaymentMethodCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payment-PaymentMethodCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'brand' => 'string',
        'type' => 'string',
        'three_d_secure' => 'bool',
        'three_d_secure_version' => 'string',
        'last4' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'country' => null,
        'brand' => null,
        'type' => null,
        'three_d_secure' => null,
        'three_d_secure_version' => null,
        'last4' => null
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
        'country' => 'country',
        'brand' => 'brand',
        'type' => 'type',
        'three_d_secure' => 'threeDSecure',
        'three_d_secure_version' => 'threeDSecureVersion',
        'last4' => 'last4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'brand' => 'setBrand',
        'type' => 'setType',
        'three_d_secure' => 'setThreeDSecure',
        'three_d_secure_version' => 'setThreeDSecureVersion',
        'last4' => 'setLast4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'brand' => 'getBrand',
        'type' => 'getType',
        'three_d_secure' => 'getThreeDSecure',
        'three_d_secure_version' => 'getThreeDSecureVersion',
        'last4' => 'getLast4'
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

    const BRAND_VISA = 'visa';
    const BRAND_MASTERCARD = 'mastercard';
    const BRAND_DINERS = 'diners';
    const BRAND_AMEX = 'amex';
    const BRAND_JCB = 'jcb';
    const BRAND_UNIONPAY = 'unionpay';
    const BRAND_UNKNOWN = 'unknown';
    const TYPE_DEBIT = 'debit';
    const TYPE_CREDIT = 'credit';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBrandAllowableValues()
    {
        return [
            self::BRAND_VISA,
            self::BRAND_MASTERCARD,
            self::BRAND_DINERS,
            self::BRAND_AMEX,
            self::BRAND_JCB,
            self::BRAND_UNIONPAY,
            self::BRAND_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DEBIT,
            self::TYPE_CREDIT,
        ];
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['three_d_secure'] = isset($data['three_d_secure']) ? $data['three_d_secure'] : null;
        $this->container['three_d_secure_version'] = isset($data['three_d_secure_version']) ? $data['three_d_secure_version'] : null;
        $this->container['last4'] = isset($data['last4']) ? $data['last4'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBrandAllowableValues();
        if (!is_null($this->container['brand']) && !in_array($this->container['brand'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'brand', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param string|null $country Two-letter country code ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Card brand.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $allowedValues = $this->getBrandAllowableValues();
        if (!is_null($brand) && !in_array($brand, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'brand', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Card type `debit` or `credit`.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets three_d_secure
     *
     * @return bool|null
     */
    public function getThreeDSecure()
    {
        return $this->container['three_d_secure'];
    }

    /**
     * Sets three_d_secure
     *
     * @param bool|null $three_d_secure Wether this transaction used 3D Secure authentication.
     *
     * @return $this
     */
    public function setThreeDSecure($three_d_secure)
    {
        $this->container['three_d_secure'] = $three_d_secure;

        return $this;
    }

    /**
     * Gets three_d_secure_version
     *
     * @return string|null
     */
    public function getThreeDSecureVersion()
    {
        return $this->container['three_d_secure_version'];
    }

    /**
     * Sets three_d_secure_version
     *
     * @param string|null $three_d_secure_version The protocol version of the 3DS challenge.
     *
     * @return $this
     */
    public function setThreeDSecureVersion($three_d_secure_version)
    {
        $this->container['three_d_secure_version'] = $three_d_secure_version;

        return $this;
    }

    /**
     * Gets last4
     *
     * @return string|null
     */
    public function getLast4()
    {
        return $this->container['last4'];
    }

    /**
     * Sets last4
     *
     * @param string|null $last4 The last four digits of the card.
     *
     * @return $this
     */
    public function setLast4($last4)
    {
        $this->container['last4'] = $last4;

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


