<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillOutstandingAmountResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillOutstandingAmountResponseType extends AbstractResponseType
{
    /**
     * The BillOutstandingAmountResponseDetails
     * Meta informations extracted from the WSDL
     * - ref: ebl:BillOutstandingAmountResponseDetails
     * @var \PayPal\StructType\BillOutstandingAmountResponseDetailsType
     */
    public $BillOutstandingAmountResponseDetails;
    /**
     * Constructor method for BillOutstandingAmountResponseType
     * @uses BillOutstandingAmountResponseType::setBillOutstandingAmountResponseDetails()
     * @param \PayPal\StructType\BillOutstandingAmountResponseDetailsType $billOutstandingAmountResponseDetails
     */
    public function __construct(\PayPal\StructType\BillOutstandingAmountResponseDetailsType $billOutstandingAmountResponseDetails = null)
    {
        $this
            ->setBillOutstandingAmountResponseDetails($billOutstandingAmountResponseDetails);
    }
    /**
     * Get BillOutstandingAmountResponseDetails value
     * @return \PayPal\StructType\BillOutstandingAmountResponseDetailsType|null
     */
    public function getBillOutstandingAmountResponseDetails()
    {
        return $this->BillOutstandingAmountResponseDetails;
    }
    /**
     * Set BillOutstandingAmountResponseDetails value
     * @param \PayPal\StructType\BillOutstandingAmountResponseDetailsType $billOutstandingAmountResponseDetails
     * @return \PayPal\StructType\BillOutstandingAmountResponseType
     */
    public function setBillOutstandingAmountResponseDetails(\PayPal\StructType\BillOutstandingAmountResponseDetailsType $billOutstandingAmountResponseDetails = null)
    {
        $this->BillOutstandingAmountResponseDetails = $billOutstandingAmountResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BillOutstandingAmountResponseType
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
