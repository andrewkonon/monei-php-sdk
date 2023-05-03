<?php
/**
 * CreateSubscriptionRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MONEI API v1
 *
 * <p>The MONEI API is organized around <a href=\"https://en.wikipedia.org/wiki/Representational_State_Transfer\">REST</a>. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.</p> <h4 id=\"base-url\">Base URL:</h4> <p><a href=\"https://api.monei.com/v1\">https://api.monei.com/v1</a></p> <h4 id=\"client-libraries\">Client libraries:</h4> <ul> <li><a href=\"https://github.com/MONEI/monei-php-sdk\">PHP SDK</a></li> <li><a href=\"https://github.com/MONEI/monei-python-sdk\">Python SDK</a></li> <li><a href=\"https://github.com/MONEI/monei-node-sdk\">Node.js SDK</a></li> <li><a href=\"https://postman.monei.com/\">Postman Collection</a></li> </ul> <h4 id=\"important\">Important:</h4> <p><strong>If you are not using our official SDKs, you need to provide a valid <code>User-Agent</code> header in each request, otherwise your requests will be rejected.</strong></p>
 *
 * The version of the OpenAPI document: 1.3.3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
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
 * CreateSubscriptionRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSubscriptionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSubscriptionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'currency' => 'string',
        'interval' => '\OpenAPI\Client\Model\SubscriptionInterval',
        'interval_count' => 'int',
        'description' => 'string',
        'customer' => '\OpenAPI\Client\Model\PaymentCustomer',
        'billing_details' => '\OpenAPI\Client\Model\PaymentBillingDetails',
        'shipping_details' => '\OpenAPI\Client\Model\PaymentShippingDetails',
        'trial_period_end' => 'float',
        'trial_period_days' => 'int',
        'callback_url' => 'string',
        'payment_callback_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => 'int32',
        'currency' => null,
        'interval' => null,
        'interval_count' => 'int32',
        'description' => null,
        'customer' => null,
        'billing_details' => null,
        'shipping_details' => null,
        'trial_period_end' => 'int64',
        'trial_period_days' => 'int32',
        'callback_url' => null,
        'payment_callback_url' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'interval' => 'interval',
        'interval_count' => 'intervalCount',
        'description' => 'description',
        'customer' => 'customer',
        'billing_details' => 'billingDetails',
        'shipping_details' => 'shippingDetails',
        'trial_period_end' => 'trialPeriodEnd',
        'trial_period_days' => 'trialPeriodDays',
        'callback_url' => 'callbackUrl',
        'payment_callback_url' => 'paymentCallbackUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'interval' => 'setInterval',
        'interval_count' => 'setIntervalCount',
        'description' => 'setDescription',
        'customer' => 'setCustomer',
        'billing_details' => 'setBillingDetails',
        'shipping_details' => 'setShippingDetails',
        'trial_period_end' => 'setTrialPeriodEnd',
        'trial_period_days' => 'setTrialPeriodDays',
        'callback_url' => 'setCallbackUrl',
        'payment_callback_url' => 'setPaymentCallbackUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'interval' => 'getInterval',
        'interval_count' => 'getIntervalCount',
        'description' => 'getDescription',
        'customer' => 'getCustomer',
        'billing_details' => 'getBillingDetails',
        'shipping_details' => 'getShippingDetails',
        'trial_period_end' => 'getTrialPeriodEnd',
        'trial_period_days' => 'getTrialPeriodDays',
        'callback_url' => 'getCallbackUrl',
        'payment_callback_url' => 'getPaymentCallbackUrl'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['interval'] = $data['interval'] ?? null;
        $this->container['interval_count'] = $data['interval_count'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['billing_details'] = $data['billing_details'] ?? null;
        $this->container['shipping_details'] = $data['shipping_details'] ?? null;
        $this->container['trial_period_end'] = $data['trial_period_end'] ?? null;
        $this->container['trial_period_days'] = $data['trial_period_days'] ?? null;
        $this->container['callback_url'] = $data['callback_url'] ?? null;
        $this->container['payment_callback_url'] = $data['payment_callback_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Amount intended to be collected by this payment. A positive integer representing how much to charge in the smallest currency unit (e.g., 100 cents to charge 1.00 USD).
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Three-letter [ISO currency code](https://en.wikipedia.org/wiki/ISO_4217), in uppercase. Must be a supported currency.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return \OpenAPI\Client\Model\SubscriptionInterval
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param \OpenAPI\Client\Model\SubscriptionInterval $interval interval
     *
     * @return self
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets interval_count
     *
     * @return int|null
     */
    public function getIntervalCount()
    {
        return $this->container['interval_count'];
    }

    /**
     * Sets interval_count
     *
     * @param int|null $interval_count Number of intervals between subscription payments.
     *
     * @return self
     */
    public function setIntervalCount($interval_count)
    {
        $this->container['interval_count'] = $interval_count;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description An arbitrary string attached to the subscription. Often useful for displaying to users.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\PaymentCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\PaymentCustomer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets billing_details
     *
     * @return \OpenAPI\Client\Model\PaymentBillingDetails|null
     */
    public function getBillingDetails()
    {
        return $this->container['billing_details'];
    }

    /**
     * Sets billing_details
     *
     * @param \OpenAPI\Client\Model\PaymentBillingDetails|null $billing_details billing_details
     *
     * @return self
     */
    public function setBillingDetails($billing_details)
    {
        $this->container['billing_details'] = $billing_details;

        return $this;
    }

    /**
     * Gets shipping_details
     *
     * @return \OpenAPI\Client\Model\PaymentShippingDetails|null
     */
    public function getShippingDetails()
    {
        return $this->container['shipping_details'];
    }

    /**
     * Sets shipping_details
     *
     * @param \OpenAPI\Client\Model\PaymentShippingDetails|null $shipping_details shipping_details
     *
     * @return self
     */
    public function setShippingDetails($shipping_details)
    {
        $this->container['shipping_details'] = $shipping_details;

        return $this;
    }

    /**
     * Gets trial_period_end
     *
     * @return float|null
     */
    public function getTrialPeriodEnd()
    {
        return $this->container['trial_period_end'];
    }

    /**
     * Sets trial_period_end
     *
     * @param float|null $trial_period_end The end date of the trial period. Measured in seconds since the Unix epoch.
     *
     * @return self
     */
    public function setTrialPeriodEnd($trial_period_end)
    {
        $this->container['trial_period_end'] = $trial_period_end;

        return $this;
    }

    /**
     * Gets trial_period_days
     *
     * @return int|null
     */
    public function getTrialPeriodDays()
    {
        return $this->container['trial_period_days'];
    }

    /**
     * Sets trial_period_days
     *
     * @param int|null $trial_period_days Number of days the trial period lasts.
     *
     * @return self
     */
    public function setTrialPeriodDays($trial_period_days)
    {
        $this->container['trial_period_days'] = $trial_period_days;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string|null $callback_url The URL will be called each time subscription status changes.
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets payment_callback_url
     *
     * @return string|null
     */
    public function getPaymentCallbackUrl()
    {
        return $this->container['payment_callback_url'];
    }

    /**
     * Sets payment_callback_url
     *
     * @param string|null $payment_callback_url The URL will be called each time subscription creates a new payments.
     *
     * @return self
     */
    public function setPaymentCallbackUrl($payment_callback_url)
    {
        $this->container['payment_callback_url'] = $payment_callback_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


