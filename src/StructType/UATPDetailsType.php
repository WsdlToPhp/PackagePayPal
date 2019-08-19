<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UATPDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: UATP Card Details Type
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UATPDetailsType extends AbstractStructBase
{
    /**
     * The UATPNumber
     * Meta information extracted from the WSDL
     * - documentation: UATP Card Number
     * @var string
     */
    public $UATPNumber;
    /**
     * The ExpMonth
     * Meta information extracted from the WSDL
     * - documentation: UATP Card expirty month
     * @var int
     */
    public $ExpMonth;
    /**
     * The ExpYear
     * Meta information extracted from the WSDL
     * - documentation: UATP Card expirty year
     * @var int
     */
    public $ExpYear;
    /**
     * Constructor method for UATPDetailsType
     * @uses UATPDetailsType::setUATPNumber()
     * @uses UATPDetailsType::setExpMonth()
     * @uses UATPDetailsType::setExpYear()
     * @param string $uATPNumber
     * @param int $expMonth
     * @param int $expYear
     */
    public function __construct($uATPNumber = null, $expMonth = null, $expYear = null)
    {
        $this
            ->setUATPNumber($uATPNumber)
            ->setExpMonth($expMonth)
            ->setExpYear($expYear);
    }
    /**
     * Get UATPNumber value
     * @return string|null
     */
    public function getUATPNumber()
    {
        return $this->UATPNumber;
    }
    /**
     * Set UATPNumber value
     * @param string $uATPNumber
     * @return \PayPal\StructType\UATPDetailsType
     */
    public function setUATPNumber($uATPNumber = null)
    {
        // validation for constraint: string
        if (!is_null($uATPNumber) && !is_string($uATPNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uATPNumber, true), gettype($uATPNumber)), __LINE__);
        }
        $this->UATPNumber = $uATPNumber;
        return $this;
    }
    /**
     * Get ExpMonth value
     * @return int|null
     */
    public function getExpMonth()
    {
        return $this->ExpMonth;
    }
    /**
     * Set ExpMonth value
     * @param int $expMonth
     * @return \PayPal\StructType\UATPDetailsType
     */
    public function setExpMonth($expMonth = null)
    {
        // validation for constraint: int
        if (!is_null($expMonth) && !(is_int($expMonth) || ctype_digit($expMonth))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expMonth, true), gettype($expMonth)), __LINE__);
        }
        $this->ExpMonth = $expMonth;
        return $this;
    }
    /**
     * Get ExpYear value
     * @return int|null
     */
    public function getExpYear()
    {
        return $this->ExpYear;
    }
    /**
     * Set ExpYear value
     * @param int $expYear
     * @return \PayPal\StructType\UATPDetailsType
     */
    public function setExpYear($expYear = null)
    {
        // validation for constraint: int
        if (!is_null($expYear) && !(is_int($expYear) || ctype_digit($expYear))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expYear, true), gettype($expYear)), __LINE__);
        }
        $this->ExpYear = $expYear;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UATPDetailsType
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
