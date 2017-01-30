<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorParameterType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ErrorParameterType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: Value of the application-specific error parameter.
     * @var string
     */
    public $Value;
    /**
     * The ParamID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies application-specific error parameter name.
     * @var string
     */
    public $ParamID;
    /**
     * Constructor method for ErrorParameterType
     * @uses ErrorParameterType::setValue()
     * @uses ErrorParameterType::setParamID()
     * @param string $value
     * @param string $paramID
     */
    public function __construct($value = null, $paramID = null)
    {
        $this
            ->setValue($value)
            ->setParamID($paramID);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \PayPal\StructType\ErrorParameterType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get ParamID value
     * @return string|null
     */
    public function getParamID()
    {
        return $this->ParamID;
    }
    /**
     * Set ParamID value
     * @param string $paramID
     * @return \PayPal\StructType\ErrorParameterType
     */
    public function setParamID($paramID = null)
    {
        // validation for constraint: string
        if (!is_null($paramID) && !is_string($paramID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paramID)), __LINE__);
        }
        $this->ParamID = $paramID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ErrorParameterType
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
