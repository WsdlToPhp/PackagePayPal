<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillUserRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillUserRequestType extends AbstractRequestType
{
    /**
     * The MerchantPullPaymentDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:MerchantPullPaymentDetails
     * @var \PayPal\StructType\MerchantPullPaymentType
     */
    public $MerchantPullPaymentDetails;
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
     * Constructor method for BillUserRequestType
     * @uses BillUserRequestType::setMerchantPullPaymentDetails()
     * @uses BillUserRequestType::setReturnFMFDetails()
     * @param \PayPal\StructType\MerchantPullPaymentType $merchantPullPaymentDetails
     * @param int $returnFMFDetails
     */
    public function __construct(\PayPal\StructType\MerchantPullPaymentType $merchantPullPaymentDetails = null, $returnFMFDetails = null)
    {
        $this
            ->setMerchantPullPaymentDetails($merchantPullPaymentDetails)
            ->setReturnFMFDetails($returnFMFDetails);
    }
    /**
     * Get MerchantPullPaymentDetails value
     * @return \PayPal\StructType\MerchantPullPaymentType|null
     */
    public function getMerchantPullPaymentDetails()
    {
        return $this->MerchantPullPaymentDetails;
    }
    /**
     * Set MerchantPullPaymentDetails value
     * @param \PayPal\StructType\MerchantPullPaymentType $merchantPullPaymentDetails
     * @return \PayPal\StructType\BillUserRequestType
     */
    public function setMerchantPullPaymentDetails(\PayPal\StructType\MerchantPullPaymentType $merchantPullPaymentDetails = null)
    {
        $this->MerchantPullPaymentDetails = $merchantPullPaymentDetails;
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
     * @return \PayPal\StructType\BillUserRequestType
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
