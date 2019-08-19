<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateBillingAgreementResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateBillingAgreementResponseType extends AbstractResponseType
{
    /**
     * The BillingAgreementID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BillingAgreementID;
    /**
     * Constructor method for CreateBillingAgreementResponseType
     * @uses CreateBillingAgreementResponseType::setBillingAgreementID()
     * @param string $billingAgreementID
     */
    public function __construct($billingAgreementID = null)
    {
        $this
            ->setBillingAgreementID($billingAgreementID);
    }
    /**
     * Get BillingAgreementID value
     * @return string
     */
    public function getBillingAgreementID()
    {
        return $this->BillingAgreementID;
    }
    /**
     * Set BillingAgreementID value
     * @param string $billingAgreementID
     * @return \PayPal\StructType\CreateBillingAgreementResponseType
     */
    public function setBillingAgreementID($billingAgreementID = null)
    {
        // validation for constraint: string
        if (!is_null($billingAgreementID) && !is_string($billingAgreementID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementID, true), gettype($billingAgreementID)), __LINE__);
        }
        $this->BillingAgreementID = $billingAgreementID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CreateBillingAgreementResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
