<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Subscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'description' => 'string',
        'account_id' => 'string',
        'livemode' => 'bool',
        'status' => '\OpenAPI\Client\Model\SubscriptionStatus',
        'customer' => '\OpenAPI\Client\Model\PaymentCustomer',
        'billing_details' => '\OpenAPI\Client\Model\PaymentBillingDetails',
        'shipping_details' => '\OpenAPI\Client\Model\PaymentShippingDetails',
        'interval' => '\OpenAPI\Client\Model\SubscriptionInterval',
        'interval_count' => 'int',
        'pause_interval_count' => 'int',
        'last_order_id' => 'string',
        'last_payment' => '\OpenAPI\Client\Model\SubscriptionLastPayment',
        'payment_method' => '\OpenAPI\Client\Model\SubscriptionPaymentMethod',
        'current_period_start' => 'float',
        'current_period_end' => 'float',
        'trial_period_end' => 'float',
        'next_payment_at' => 'int',
        'retry_count' => 'int',
        'cancel_at_period_end' => 'bool',
        'pause_at_period_end' => 'bool',
        'trace_details' => '\OpenAPI\Client\Model\PaymentTraceDetails',
        'sequence_id' => 'string',
        'callback_url' => 'string',
        'payment_callback_url' => 'string',
        'created_at' => 'int',
        'updated_at' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'amount' => 'int32',
        'currency' => null,
        'description' => null,
        'account_id' => null,
        'livemode' => null,
        'status' => null,
        'customer' => null,
        'billing_details' => null,
        'shipping_details' => null,
        'interval' => null,
        'interval_count' => 'int32',
        'pause_interval_count' => 'int32',
        'last_order_id' => null,
        'last_payment' => null,
        'payment_method' => null,
        'current_period_start' => 'int64',
        'current_period_end' => 'int64',
        'trial_period_end' => 'int64',
        'next_payment_at' => 'int64',
        'retry_count' => 'int32',
        'cancel_at_period_end' => null,
        'pause_at_period_end' => null,
        'trace_details' => null,
        'sequence_id' => null,
        'callback_url' => null,
        'payment_callback_url' => null,
        'created_at' => 'int64',
        'updated_at' => 'int64'
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
        'id' => 'id',
        'amount' => 'amount',
        'currency' => 'currency',
        'description' => 'description',
        'account_id' => 'accountId',
        'livemode' => 'livemode',
        'status' => 'status',
        'customer' => 'customer',
        'billing_details' => 'billingDetails',
        'shipping_details' => 'shippingDetails',
        'interval' => 'interval',
        'interval_count' => 'intervalCount',
        'pause_interval_count' => 'pauseIntervalCount',
        'last_order_id' => 'lastOrderId',
        'last_payment' => 'lastPayment',
        'payment_method' => 'paymentMethod',
        'current_period_start' => 'currentPeriodStart',
        'current_period_end' => 'currentPeriodEnd',
        'trial_period_end' => 'trialPeriodEnd',
        'next_payment_at' => 'nextPaymentAt',
        'retry_count' => 'retryCount',
        'cancel_at_period_end' => 'cancelAtPeriodEnd',
        'pause_at_period_end' => 'pauseAtPeriodEnd',
        'trace_details' => 'traceDetails',
        'sequence_id' => 'sequenceId',
        'callback_url' => 'callbackUrl',
        'payment_callback_url' => 'paymentCallbackUrl',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'account_id' => 'setAccountId',
        'livemode' => 'setLivemode',
        'status' => 'setStatus',
        'customer' => 'setCustomer',
        'billing_details' => 'setBillingDetails',
        'shipping_details' => 'setShippingDetails',
        'interval' => 'setInterval',
        'interval_count' => 'setIntervalCount',
        'pause_interval_count' => 'setPauseIntervalCount',
        'last_order_id' => 'setLastOrderId',
        'last_payment' => 'setLastPayment',
        'payment_method' => 'setPaymentMethod',
        'current_period_start' => 'setCurrentPeriodStart',
        'current_period_end' => 'setCurrentPeriodEnd',
        'trial_period_end' => 'setTrialPeriodEnd',
        'next_payment_at' => 'setNextPaymentAt',
        'retry_count' => 'setRetryCount',
        'cancel_at_period_end' => 'setCancelAtPeriodEnd',
        'pause_at_period_end' => 'setPauseAtPeriodEnd',
        'trace_details' => 'setTraceDetails',
        'sequence_id' => 'setSequenceId',
        'callback_url' => 'setCallbackUrl',
        'payment_callback_url' => 'setPaymentCallbackUrl',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'account_id' => 'getAccountId',
        'livemode' => 'getLivemode',
        'status' => 'getStatus',
        'customer' => 'getCustomer',
        'billing_details' => 'getBillingDetails',
        'shipping_details' => 'getShippingDetails',
        'interval' => 'getInterval',
        'interval_count' => 'getIntervalCount',
        'pause_interval_count' => 'getPauseIntervalCount',
        'last_order_id' => 'getLastOrderId',
        'last_payment' => 'getLastPayment',
        'payment_method' => 'getPaymentMethod',
        'current_period_start' => 'getCurrentPeriodStart',
        'current_period_end' => 'getCurrentPeriodEnd',
        'trial_period_end' => 'getTrialPeriodEnd',
        'next_payment_at' => 'getNextPaymentAt',
        'retry_count' => 'getRetryCount',
        'cancel_at_period_end' => 'getCancelAtPeriodEnd',
        'pause_at_period_end' => 'getPauseAtPeriodEnd',
        'trace_details' => 'getTraceDetails',
        'sequence_id' => 'getSequenceId',
        'callback_url' => 'getCallbackUrl',
        'payment_callback_url' => 'getPaymentCallbackUrl',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['livemode'] = $data['livemode'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['billing_details'] = $data['billing_details'] ?? null;
        $this->container['shipping_details'] = $data['shipping_details'] ?? null;
        $this->container['interval'] = $data['interval'] ?? null;
        $this->container['interval_count'] = $data['interval_count'] ?? null;
        $this->container['pause_interval_count'] = $data['pause_interval_count'] ?? null;
        $this->container['last_order_id'] = $data['last_order_id'] ?? null;
        $this->container['last_payment'] = $data['last_payment'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['current_period_start'] = $data['current_period_start'] ?? null;
        $this->container['current_period_end'] = $data['current_period_end'] ?? null;
        $this->container['trial_period_end'] = $data['trial_period_end'] ?? null;
        $this->container['next_payment_at'] = $data['next_payment_at'] ?? null;
        $this->container['retry_count'] = $data['retry_count'] ?? null;
        $this->container['cancel_at_period_end'] = $data['cancel_at_period_end'] ?? null;
        $this->container['pause_at_period_end'] = $data['pause_at_period_end'] ?? null;
        $this->container['trace_details'] = $data['trace_details'] ?? null;
        $this->container['sequence_id'] = $data['sequence_id'] ?? null;
        $this->container['callback_url'] = $data['callback_url'] ?? null;
        $this->container['payment_callback_url'] = $data['payment_callback_url'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier for the subscription.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount Amount intended to be collected by this payment. A positive integer representing how much to charge in the smallest currency unit (e.g., 100 cents to charge 1.00 USD).
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
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Three-letter [ISO currency code](https://en.wikipedia.org/wiki/ISO_4217), in uppercase. Must be a supported currency.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id MONEI Account identifier.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets livemode
     *
     * @return bool|null
     */
    public function getLivemode()
    {
        return $this->container['livemode'];
    }

    /**
     * Sets livemode
     *
     * @param bool|null $livemode Has the value `true` if the resource exists in live mode or the value `false` if the resource exists in test mode.
     *
     * @return self
     */
    public function setLivemode($livemode)
    {
        $this->container['livemode'] = $livemode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\SubscriptionStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\SubscriptionStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets interval
     *
     * @return \OpenAPI\Client\Model\SubscriptionInterval|null
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param \OpenAPI\Client\Model\SubscriptionInterval|null $interval interval
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
     * Gets pause_interval_count
     *
     * @return int|null
     */
    public function getPauseIntervalCount()
    {
        return $this->container['pause_interval_count'];
    }

    /**
     * Sets pause_interval_count
     *
     * @param int|null $pause_interval_count Number of intervals when subscription will be paused before it activates again.
     *
     * @return self
     */
    public function setPauseIntervalCount($pause_interval_count)
    {
        $this->container['pause_interval_count'] = $pause_interval_count;

        return $this;
    }

    /**
     * Gets last_order_id
     *
     * @return string|null
     */
    public function getLastOrderId()
    {
        return $this->container['last_order_id'];
    }

    /**
     * Sets last_order_id
     *
     * @param string|null $last_order_id An order ID from your system. A unique identifier that can be used to reconcile the payment with your internal system.
     *
     * @return self
     */
    public function setLastOrderId($last_order_id)
    {
        $this->container['last_order_id'] = $last_order_id;

        return $this;
    }

    /**
     * Gets last_payment
     *
     * @return \OpenAPI\Client\Model\SubscriptionLastPayment|null
     */
    public function getLastPayment()
    {
        return $this->container['last_payment'];
    }

    /**
     * Sets last_payment
     *
     * @param \OpenAPI\Client\Model\SubscriptionLastPayment|null $last_payment last_payment
     *
     * @return self
     */
    public function setLastPayment($last_payment)
    {
        $this->container['last_payment'] = $last_payment;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \OpenAPI\Client\Model\SubscriptionPaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \OpenAPI\Client\Model\SubscriptionPaymentMethod|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets current_period_start
     *
     * @return float|null
     */
    public function getCurrentPeriodStart()
    {
        return $this->container['current_period_start'];
    }

    /**
     * Sets current_period_start
     *
     * @param float|null $current_period_start The start date of the current subscription period. Measured in seconds since the Unix epoch.
     *
     * @return self
     */
    public function setCurrentPeriodStart($current_period_start)
    {
        $this->container['current_period_start'] = $current_period_start;

        return $this;
    }

    /**
     * Gets current_period_end
     *
     * @return float|null
     */
    public function getCurrentPeriodEnd()
    {
        return $this->container['current_period_end'];
    }

    /**
     * Sets current_period_end
     *
     * @param float|null $current_period_end The end date of the current subscription period. Measured in seconds since the Unix epoch.
     *
     * @return self
     */
    public function setCurrentPeriodEnd($current_period_end)
    {
        $this->container['current_period_end'] = $current_period_end;

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
     * Gets next_payment_at
     *
     * @return int|null
     */
    public function getNextPaymentAt()
    {
        return $this->container['next_payment_at'];
    }

    /**
     * Sets next_payment_at
     *
     * @param int|null $next_payment_at The date when the next payment will be made.
     *
     * @return self
     */
    public function setNextPaymentAt($next_payment_at)
    {
        $this->container['next_payment_at'] = $next_payment_at;

        return $this;
    }

    /**
     * Gets retry_count
     *
     * @return int|null
     */
    public function getRetryCount()
    {
        return $this->container['retry_count'];
    }

    /**
     * Sets retry_count
     *
     * @param int|null $retry_count Number of retries left for the subscription.
     *
     * @return self
     */
    public function setRetryCount($retry_count)
    {
        $this->container['retry_count'] = $retry_count;

        return $this;
    }

    /**
     * Gets cancel_at_period_end
     *
     * @return bool|null
     */
    public function getCancelAtPeriodEnd()
    {
        return $this->container['cancel_at_period_end'];
    }

    /**
     * Sets cancel_at_period_end
     *
     * @param bool|null $cancel_at_period_end If true, the subscription will be canceled at the end of the current period.
     *
     * @return self
     */
    public function setCancelAtPeriodEnd($cancel_at_period_end)
    {
        $this->container['cancel_at_period_end'] = $cancel_at_period_end;

        return $this;
    }

    /**
     * Gets pause_at_period_end
     *
     * @return bool|null
     */
    public function getPauseAtPeriodEnd()
    {
        return $this->container['pause_at_period_end'];
    }

    /**
     * Sets pause_at_period_end
     *
     * @param bool|null $pause_at_period_end If true, the subscription will be paused at the end of the current period.
     *
     * @return self
     */
    public function setPauseAtPeriodEnd($pause_at_period_end)
    {
        $this->container['pause_at_period_end'] = $pause_at_period_end;

        return $this;
    }

    /**
     * Gets trace_details
     *
     * @return \OpenAPI\Client\Model\PaymentTraceDetails|null
     */
    public function getTraceDetails()
    {
        return $this->container['trace_details'];
    }

    /**
     * Sets trace_details
     *
     * @param \OpenAPI\Client\Model\PaymentTraceDetails|null $trace_details trace_details
     *
     * @return self
     */
    public function setTraceDetails($trace_details)
    {
        $this->container['trace_details'] = $trace_details;

        return $this;
    }

    /**
     * Gets sequence_id
     *
     * @return string|null
     */
    public function getSequenceId()
    {
        return $this->container['sequence_id'];
    }

    /**
     * Sets sequence_id
     *
     * @param string|null $sequence_id A permanent identifier that refers to the initial payment of a sequence of payments. This value needs to be sent in the path for `RECURRING` payments.
     *
     * @return self
     */
    public function setSequenceId($sequence_id)
    {
        $this->container['sequence_id'] = $sequence_id;

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
     * Gets created_at
     *
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int|null $created_at Time at which the resource was created. Measured in seconds since the Unix epoch.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return int|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param int|null $updated_at Time at which the resource updated last time. Measured in seconds since the Unix epoch.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


