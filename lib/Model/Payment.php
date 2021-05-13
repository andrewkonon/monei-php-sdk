<?php
/**
 * Payment
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
 * Payment Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Payment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'order_id' => 'string',
        'description' => 'string',
        'account_id' => 'string',
        'authorization_code' => 'string',
        'livemode' => 'bool',
        'status' => '\OpenAPI\Client\Model\PaymentStatus',
        'status_code' => 'string',
        'status_message' => 'string',
        'customer' => '\OpenAPI\Client\Model\PaymentCustomer',
        'shop' => '\OpenAPI\Client\Model\PaymentShop',
        'billing_details' => '\OpenAPI\Client\Model\PaymentBillingDetails',
        'shipping_details' => '\OpenAPI\Client\Model\PaymentShippingDetails',
        'refunded_amount' => 'int',
        'last_refund_amount' => 'int',
        'last_refund_reason' => '\OpenAPI\Client\Model\PaymentLastRefundReason',
        'cancellation_reason' => '\OpenAPI\Client\Model\PaymentCancellationReason',
        'session_details' => '\OpenAPI\Client\Model\PaymentSessionDetails',
        'trace_details' => '\OpenAPI\Client\Model\PaymentTraceDetails',
        'payment_token' => 'string',
        'payment_method' => '\OpenAPI\Client\Model\PaymentPaymentMethod',
        'sequence' => '\OpenAPI\Client\Model\PaymentSequence',
        'sequence_id' => 'string',
        'next_action' => '\OpenAPI\Client\Model\PaymentNextAction',
        'created_at' => 'int',
        'updated_at' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'amount' => 'int32',
        'currency' => null,
        'order_id' => null,
        'description' => null,
        'account_id' => null,
        'authorization_code' => null,
        'livemode' => null,
        'status' => null,
        'status_code' => null,
        'status_message' => null,
        'customer' => null,
        'shop' => null,
        'billing_details' => null,
        'shipping_details' => null,
        'refunded_amount' => 'int32',
        'last_refund_amount' => 'int32',
        'last_refund_reason' => null,
        'cancellation_reason' => null,
        'session_details' => null,
        'trace_details' => null,
        'payment_token' => null,
        'payment_method' => null,
        'sequence' => null,
        'sequence_id' => null,
        'next_action' => null,
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
        'order_id' => 'orderId',
        'description' => 'description',
        'account_id' => 'accountId',
        'authorization_code' => 'authorizationCode',
        'livemode' => 'livemode',
        'status' => 'status',
        'status_code' => 'statusCode',
        'status_message' => 'statusMessage',
        'customer' => 'customer',
        'shop' => 'shop',
        'billing_details' => 'billingDetails',
        'shipping_details' => 'shippingDetails',
        'refunded_amount' => 'refundedAmount',
        'last_refund_amount' => 'lastRefundAmount',
        'last_refund_reason' => 'lastRefundReason',
        'cancellation_reason' => 'cancellationReason',
        'session_details' => 'sessionDetails',
        'trace_details' => 'traceDetails',
        'payment_token' => 'paymentToken',
        'payment_method' => 'paymentMethod',
        'sequence' => 'sequence',
        'sequence_id' => 'sequenceId',
        'next_action' => 'nextAction',
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
        'order_id' => 'setOrderId',
        'description' => 'setDescription',
        'account_id' => 'setAccountId',
        'authorization_code' => 'setAuthorizationCode',
        'livemode' => 'setLivemode',
        'status' => 'setStatus',
        'status_code' => 'setStatusCode',
        'status_message' => 'setStatusMessage',
        'customer' => 'setCustomer',
        'shop' => 'setShop',
        'billing_details' => 'setBillingDetails',
        'shipping_details' => 'setShippingDetails',
        'refunded_amount' => 'setRefundedAmount',
        'last_refund_amount' => 'setLastRefundAmount',
        'last_refund_reason' => 'setLastRefundReason',
        'cancellation_reason' => 'setCancellationReason',
        'session_details' => 'setSessionDetails',
        'trace_details' => 'setTraceDetails',
        'payment_token' => 'setPaymentToken',
        'payment_method' => 'setPaymentMethod',
        'sequence' => 'setSequence',
        'sequence_id' => 'setSequenceId',
        'next_action' => 'setNextAction',
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
        'order_id' => 'getOrderId',
        'description' => 'getDescription',
        'account_id' => 'getAccountId',
        'authorization_code' => 'getAuthorizationCode',
        'livemode' => 'getLivemode',
        'status' => 'getStatus',
        'status_code' => 'getStatusCode',
        'status_message' => 'getStatusMessage',
        'customer' => 'getCustomer',
        'shop' => 'getShop',
        'billing_details' => 'getBillingDetails',
        'shipping_details' => 'getShippingDetails',
        'refunded_amount' => 'getRefundedAmount',
        'last_refund_amount' => 'getLastRefundAmount',
        'last_refund_reason' => 'getLastRefundReason',
        'cancellation_reason' => 'getCancellationReason',
        'session_details' => 'getSessionDetails',
        'trace_details' => 'getTraceDetails',
        'payment_token' => 'getPaymentToken',
        'payment_method' => 'getPaymentMethod',
        'sequence' => 'getSequence',
        'sequence_id' => 'getSequenceId',
        'next_action' => 'getNextAction',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['authorization_code'] = isset($data['authorization_code']) ? $data['authorization_code'] : null;
        $this->container['livemode'] = isset($data['livemode']) ? $data['livemode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['status_message'] = isset($data['status_message']) ? $data['status_message'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['shop'] = isset($data['shop']) ? $data['shop'] : null;
        $this->container['billing_details'] = isset($data['billing_details']) ? $data['billing_details'] : null;
        $this->container['shipping_details'] = isset($data['shipping_details']) ? $data['shipping_details'] : null;
        $this->container['refunded_amount'] = isset($data['refunded_amount']) ? $data['refunded_amount'] : null;
        $this->container['last_refund_amount'] = isset($data['last_refund_amount']) ? $data['last_refund_amount'] : null;
        $this->container['last_refund_reason'] = isset($data['last_refund_reason']) ? $data['last_refund_reason'] : null;
        $this->container['cancellation_reason'] = isset($data['cancellation_reason']) ? $data['cancellation_reason'] : null;
        $this->container['session_details'] = isset($data['session_details']) ? $data['session_details'] : null;
        $this->container['trace_details'] = isset($data['trace_details']) ? $data['trace_details'] : null;
        $this->container['payment_token'] = isset($data['payment_token']) ? $data['payment_token'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['sequence_id'] = isset($data['sequence_id']) ? $data['sequence_id'] : null;
        $this->container['next_action'] = isset($data['next_action']) ? $data['next_action'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * @param string|null $id Unique identifier for the payment.
     *
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id An order ID from your system. A unique identifier that can be used to reconcile the payment with your internal system.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * @param string|null $description An arbitrary string attached to the payment. Often useful for displaying to users.
     *
     * @return $this
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
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets authorization_code
     *
     * @return string|null
     */
    public function getAuthorizationCode()
    {
        return $this->container['authorization_code'];
    }

    /**
     * Sets authorization_code
     *
     * @param string|null $authorization_code Unique identifier provided by the bank performing transaction.
     *
     * @return $this
     */
    public function setAuthorizationCode($authorization_code)
    {
        $this->container['authorization_code'] = $authorization_code;

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
     * @param bool|null $livemode Has the value `true` if the payment exists in live mode or the value `false` if the payment exists in test mode.
     *
     * @return $this
     */
    public function setLivemode($livemode)
    {
        $this->container['livemode'] = $livemode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\PaymentStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\PaymentStatus|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param string|null $status_code Payment status code.
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets status_message
     *
     * @return string|null
     */
    public function getStatusMessage()
    {
        return $this->container['status_message'];
    }

    /**
     * Sets status_message
     *
     * @param string|null $status_message Human readable status message, can be displayed to a user.
     *
     * @return $this
     */
    public function setStatusMessage($status_message)
    {
        $this->container['status_message'] = $status_message;

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
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets shop
     *
     * @return \OpenAPI\Client\Model\PaymentShop|null
     */
    public function getShop()
    {
        return $this->container['shop'];
    }

    /**
     * Sets shop
     *
     * @param \OpenAPI\Client\Model\PaymentShop|null $shop shop
     *
     * @return $this
     */
    public function setShop($shop)
    {
        $this->container['shop'] = $shop;

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
     * @return $this
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
     * @return $this
     */
    public function setShippingDetails($shipping_details)
    {
        $this->container['shipping_details'] = $shipping_details;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return int|null
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param int|null $refunded_amount Amount in cents refunded (can be less than the amount attribute on the payment if a partial refund was issued).
     *
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets last_refund_amount
     *
     * @return int|null
     */
    public function getLastRefundAmount()
    {
        return $this->container['last_refund_amount'];
    }

    /**
     * Sets last_refund_amount
     *
     * @param int|null $last_refund_amount Amount in cents refunded in the last transaction.
     *
     * @return $this
     */
    public function setLastRefundAmount($last_refund_amount)
    {
        $this->container['last_refund_amount'] = $last_refund_amount;

        return $this;
    }

    /**
     * Gets last_refund_reason
     *
     * @return \OpenAPI\Client\Model\PaymentLastRefundReason|null
     */
    public function getLastRefundReason()
    {
        return $this->container['last_refund_reason'];
    }

    /**
     * Sets last_refund_reason
     *
     * @param \OpenAPI\Client\Model\PaymentLastRefundReason|null $last_refund_reason last_refund_reason
     *
     * @return $this
     */
    public function setLastRefundReason($last_refund_reason)
    {
        $this->container['last_refund_reason'] = $last_refund_reason;

        return $this;
    }

    /**
     * Gets cancellation_reason
     *
     * @return \OpenAPI\Client\Model\PaymentCancellationReason|null
     */
    public function getCancellationReason()
    {
        return $this->container['cancellation_reason'];
    }

    /**
     * Sets cancellation_reason
     *
     * @param \OpenAPI\Client\Model\PaymentCancellationReason|null $cancellation_reason cancellation_reason
     *
     * @return $this
     */
    public function setCancellationReason($cancellation_reason)
    {
        $this->container['cancellation_reason'] = $cancellation_reason;

        return $this;
    }

    /**
     * Gets session_details
     *
     * @return \OpenAPI\Client\Model\PaymentSessionDetails|null
     */
    public function getSessionDetails()
    {
        return $this->container['session_details'];
    }

    /**
     * Sets session_details
     *
     * @param \OpenAPI\Client\Model\PaymentSessionDetails|null $session_details session_details
     *
     * @return $this
     */
    public function setSessionDetails($session_details)
    {
        $this->container['session_details'] = $session_details;

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
     * @return $this
     */
    public function setTraceDetails($trace_details)
    {
        $this->container['trace_details'] = $trace_details;

        return $this;
    }

    /**
     * Gets payment_token
     *
     * @return string|null
     */
    public function getPaymentToken()
    {
        return $this->container['payment_token'];
    }

    /**
     * Sets payment_token
     *
     * @param string|null $payment_token A permanent token represents a payment method used in the payment. Pass `generatePaymentToken: true` when you creating a payment to generate it. You can pass it as `paymentToken` parameter to create other payments with the same payment method. This token does not expire, and should only be used server-side.
     *
     * @return $this
     */
    public function setPaymentToken($payment_token)
    {
        $this->container['payment_token'] = $payment_token;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \OpenAPI\Client\Model\PaymentPaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \OpenAPI\Client\Model\PaymentPaymentMethod|null $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return \OpenAPI\Client\Model\PaymentSequence|null
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param \OpenAPI\Client\Model\PaymentSequence|null $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

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
     * @return $this
     */
    public function setSequenceId($sequence_id)
    {
        $this->container['sequence_id'] = $sequence_id;

        return $this;
    }

    /**
     * Gets next_action
     *
     * @return \OpenAPI\Client\Model\PaymentNextAction|null
     */
    public function getNextAction()
    {
        return $this->container['next_action'];
    }

    /**
     * Sets next_action
     *
     * @param \OpenAPI\Client\Model\PaymentNextAction|null $next_action next_action
     *
     * @return $this
     */
    public function setNextAction($next_action)
    {
        $this->container['next_action'] = $next_action;

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
     * @return $this
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
     * @return $this
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


