<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBalanceRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBalanceRequestType extends AbstractRequestType
{
    /**
     * The ReturnAllCurrencies
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReturnAllCurrencies;
    /**
     * Constructor method for GetBalanceRequestType
     * @uses GetBalanceRequestType::setReturnAllCurrencies()
     * @param string $returnAllCurrencies
     */
    public function __construct($returnAllCurrencies = null)
    {
        $this
            ->setReturnAllCurrencies($returnAllCurrencies);
    }
    /**
     * Get ReturnAllCurrencies value
     * @return string|null
     */
    public function getReturnAllCurrencies()
    {
        return $this->ReturnAllCurrencies;
    }
    /**
     * Set ReturnAllCurrencies value
     * @param string $returnAllCurrencies
     * @return \PayPal\StructType\GetBalanceRequestType
     */
    public function setReturnAllCurrencies($returnAllCurrencies = null)
    {
        // validation for constraint: string
        if (!is_null($returnAllCurrencies) && !is_string($returnAllCurrencies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnAllCurrencies, true), gettype($returnAllCurrencies)), __LINE__);
        }
        $this->ReturnAllCurrencies = $returnAllCurrencies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetBalanceRequestType
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
