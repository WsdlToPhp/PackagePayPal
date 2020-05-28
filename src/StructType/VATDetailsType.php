<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VATDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information required To list a business item. BusinessSeller - only for add item, the RestrictedToBusiness and VATPercent for both get and add, for revise all must be optional
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class VATDetailsType extends AbstractStructBase
{
    /**
     * The BusinessSeller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $BusinessSeller;
    /**
     * The RestrictedToBusiness
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $RestrictedToBusiness;
    /**
     * The VATPercent
     * Meta information extracted from the WSDL
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
        // validation for constraint: boolean
        if (!is_null($businessSeller) && !is_bool($businessSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($businessSeller, true), gettype($businessSeller)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($restrictedToBusiness) && !is_bool($restrictedToBusiness)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restrictedToBusiness, true), gettype($restrictedToBusiness)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($vATPercent) && !(is_float($vATPercent) || is_numeric($vATPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vATPercent, true), gettype($vATPercent)), __LINE__);
        }
        $this->VATPercent = $vATPercent;
        return $this;
    }
}
