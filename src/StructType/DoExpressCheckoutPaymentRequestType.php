<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoExpressCheckoutPaymentRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoExpressCheckoutPaymentRequestType extends AbstractRequestType
{
    /**
     * The DoExpressCheckoutPaymentRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoExpressCheckoutPaymentRequestDetails
     * @var \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public $DoExpressCheckoutPaymentRequestDetails;
    /**
     * The ReturnFMFDetails
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates that the response should include FMFDetails
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ReturnFMFDetails;
    /**
     * Constructor method for DoExpressCheckoutPaymentRequestType
     * @uses DoExpressCheckoutPaymentRequestType::setDoExpressCheckoutPaymentRequestDetails()
     * @uses DoExpressCheckoutPaymentRequestType::setReturnFMFDetails()
     * @param \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType $doExpressCheckoutPaymentRequestDetails
     * @param int $returnFMFDetails
     */
    public function __construct(\PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType $doExpressCheckoutPaymentRequestDetails = null, $returnFMFDetails = null)
    {
        $this
            ->setDoExpressCheckoutPaymentRequestDetails($doExpressCheckoutPaymentRequestDetails)
            ->setReturnFMFDetails($returnFMFDetails);
    }
    /**
     * Get DoExpressCheckoutPaymentRequestDetails value
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function getDoExpressCheckoutPaymentRequestDetails()
    {
        return $this->DoExpressCheckoutPaymentRequestDetails;
    }
    /**
     * Set DoExpressCheckoutPaymentRequestDetails value
     * @param \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType $doExpressCheckoutPaymentRequestDetails
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestType
     */
    public function setDoExpressCheckoutPaymentRequestDetails(\PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType $doExpressCheckoutPaymentRequestDetails = null)
    {
        $this->DoExpressCheckoutPaymentRequestDetails = $doExpressCheckoutPaymentRequestDetails;
        return $this;
    }
    /**
     * Get ReturnFMFDetails value
     * @return int|null
     */
    public function getReturnFMFDetails()
    {
        return $this->ReturnFMFDetails;
    }
    /**
     * Set ReturnFMFDetails value
     * @param int $returnFMFDetails
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestType
     */
    public function setReturnFMFDetails($returnFMFDetails = null)
    {
        // validation for constraint: int
        if (!is_null($returnFMFDetails) && !(is_int($returnFMFDetails) || ctype_digit($returnFMFDetails))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnFMFDetails, true), gettype($returnFMFDetails)), __LINE__);
        }
        $this->ReturnFMFDetails = $returnFMFDetails;
        return $this;
    }
}
