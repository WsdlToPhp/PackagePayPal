<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VATDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information required To list a business item. BusinessSeller - only for add item, the RestrictedToBusiness and VATPercent for both get and add, for revise all must be optional
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class VATDetailsType extends AbstractStructBase
{
    /**
     * The BusinessSeller
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $BusinessSeller;
    /**
     * The RestrictedToBusiness
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $RestrictedToBusiness;
    /**
     * The VATPercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $VATPercent;
    /**
     * Constructor method for VATDetailsType
     * @uses VATDetailsType::setBusinessSeller()
     * @uses VATDetailsType::setRestrictedToBusiness()
     * @uses VATDetailsType::setVATPercent()
     * @param bool $businessSeller
     * @param bool $restrictedToBusiness
     * @param float $vATPercent
     */
    public function __construct($businessSeller = null, $restrictedToBusiness = null, $vATPercent = null)
    {
        $this
            ->setBusinessSeller($businessSeller)
            ->setRestrictedToBusiness($restrictedToBusiness)
            ->setVATPercent($vATPercent);
    }
    /**
     * Get BusinessSeller value
     * @return bool|null
     */
    public function getBusinessSeller()
    {
        return $this->BusinessSeller;
    }
    /**
     * Set BusinessSeller value
     * @param bool $businessSeller
     * @return \PayPal\StructType\VATDetailsType
     */
    public function setBusinessSeller($businessSeller = null)
    {
        $this->BusinessSeller = $businessSeller;
        return $this;
    }
    /**
     * Get RestrictedToBusiness value
     * @return bool|null
     */
    public function getRestrictedToBusiness()
    {
        return $this->RestrictedToBusiness;
    }
    /**
     * Set RestrictedToBusiness value
     * @param bool $restrictedToBusiness
     * @return \PayPal\StructType\VATDetailsType
     */
    public function setRestrictedToBusiness($restrictedToBusiness = null)
    {
        $this->RestrictedToBusiness = $restrictedToBusiness;
        return $this;
    }
    /**
     * Get VATPercent value
     * @return float|null
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }
    /**
     * Set VATPercent value
     * @param float $vATPercent
     * @return \PayPal\StructType\VATDetailsType
     */
    public function setVATPercent($vATPercent = null)
    {
        $this->VATPercent = $vATPercent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\VATDetailsType
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
