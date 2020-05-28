<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionDetailsResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetTransactionDetailsResponseType extends AbstractResponseType
{
    /**
     * The PaymentTransactionDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:PaymentTransactionDetails
     * @var \PayPal\StructType\PaymentTransactionType
     */
    public $PaymentTransactionDetails;
    /**
     * The ThreeDSecureDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:ThreeDSecureDetails
     * @var \PayPal\StructType\ThreeDSecureInfoType
     */
    public $ThreeDSecureDetails;
    /**
     * Constructor method for GetTransactionDetailsResponseType
     * @uses GetTransactionDetailsResponseType::setPaymentTransactionDetails()
     * @uses GetTransactionDetailsResponseType::setThreeDSecureDetails()
     * @param \PayPal\StructType\PaymentTransactionType $paymentTransactionDetails
     * @param \PayPal\StructType\ThreeDSecureInfoType $threeDSecureDetails
     */
    public function __construct(\PayPal\StructType\PaymentTransactionType $paymentTransactionDetails = null, \PayPal\StructType\ThreeDSecureInfoType $threeDSecureDetails = null)
    {
        $this
            ->setPaymentTransactionDetails($paymentTransactionDetails)
            ->setThreeDSecureDetails($threeDSecureDetails);
    }
    /**
     * Get PaymentTransactionDetails value
     * @return \PayPal\StructType\PaymentTransactionType|null
     */
    public function getPaymentTransactionDetails()
    {
        return $this->PaymentTransactionDetails;
    }
    /**
     * Set PaymentTransactionDetails value
     * @param \PayPal\StructType\PaymentTransactionType $paymentTransactionDetails
     * @return \PayPal\StructType\GetTransactionDetailsResponseType
     */
    public function setPaymentTransactionDetails(\PayPal\StructType\PaymentTransactionType $paymentTransactionDetails = null)
    {
        $this->PaymentTransactionDetails = $paymentTransactionDetails;
        return $this;
    }
    /**
     * Get ThreeDSecureDetails value
     * @return \PayPal\StructType\ThreeDSecureInfoType|null
     */
    public function getThreeDSecureDetails()
    {
        return $this->ThreeDSecureDetails;
    }
    /**
     * Set ThreeDSecureDetails value
     * @param \PayPal\StructType\ThreeDSecureInfoType $threeDSecureDetails
     * @return \PayPal\StructType\GetTransactionDetailsResponseType
     */
    public function setThreeDSecureDetails(\PayPal\StructType\ThreeDSecureInfoType $threeDSecureDetails = null)
    {
        $this->ThreeDSecureDetails = $threeDSecureDetails;
        return $this;
    }
}
