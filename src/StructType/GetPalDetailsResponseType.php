<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPalDetailsResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetPalDetailsResponseType extends AbstractResponseType
{
    /**
     * The Pal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Pal;
    /**
     * The Locale
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Locale;
    /**
     * Constructor method for GetPalDetailsResponseType
     * @uses GetPalDetailsResponseType::setPal()
     * @uses GetPalDetailsResponseType::setLocale()
     * @param string $pal
     * @param string $locale
     */
    public function __construct($pal = null, $locale = null)
    {
        $this
            ->setPal($pal)
            ->setLocale($locale);
    }
    /**
     * Get Pal value
     * @return string
     */
    public function getPal()
    {
        return $this->Pal;
    }
    /**
     * Set Pal value
     * @param string $pal
     * @return \PayPal\StructType\GetPalDetailsResponseType
     */
    public function setPal($pal = null)
    {
        // validation for constraint: string
        if (!is_null($pal) && !is_string($pal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pal, true), gettype($pal)), __LINE__);
        }
        $this->Pal = $pal;
        return $this;
    }
    /**
     * Get Locale value
     * @return string
     */
    public function getLocale()
    {
        return $this->Locale;
    }
    /**
     * Set Locale value
     * @param string $locale
     * @return \PayPal\StructType\GetPalDetailsResponseType
     */
    public function setLocale($locale = null)
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->Locale = $locale;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetPalDetailsResponseType
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
