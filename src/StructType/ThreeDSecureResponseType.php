<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThreeDSecureResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: 3DS remaining fields.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ThreeDSecureResponseType extends AbstractStructBase
{
    /**
     * The Vpas
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Vpas;
    /**
     * The EciSubmitted3DS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EciSubmitted3DS;
    /**
     * Constructor method for ThreeDSecureResponseType
     * @uses ThreeDSecureResponseType::setVpas()
     * @uses ThreeDSecureResponseType::setEciSubmitted3DS()
     * @param string $vpas
     * @param string $eciSubmitted3DS
     */
    public function __construct($vpas = null, $eciSubmitted3DS = null)
    {
        $this
            ->setVpas($vpas)
            ->setEciSubmitted3DS($eciSubmitted3DS);
    }
    /**
     * Get Vpas value
     * @return string|null
     */
    public function getVpas()
    {
        return $this->Vpas;
    }
    /**
     * Set Vpas value
     * @param string $vpas
     * @return \PayPal\StructType\ThreeDSecureResponseType
     */
    public function setVpas($vpas = null)
    {
        // validation for constraint: string
        if (!is_null($vpas) && !is_string($vpas)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpas)), __LINE__);
        }
        $this->Vpas = $vpas;
        return $this;
    }
    /**
     * Get EciSubmitted3DS value
     * @return string|null
     */
    public function getEciSubmitted3DS()
    {
        return $this->EciSubmitted3DS;
    }
    /**
     * Set EciSubmitted3DS value
     * @param string $eciSubmitted3DS
     * @return \PayPal\StructType\ThreeDSecureResponseType
     */
    public function setEciSubmitted3DS($eciSubmitted3DS = null)
    {
        // validation for constraint: string
        if (!is_null($eciSubmitted3DS) && !is_string($eciSubmitted3DS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eciSubmitted3DS)), __LINE__);
        }
        $this->EciSubmitted3DS = $eciSubmitted3DS;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ThreeDSecureResponseType
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
