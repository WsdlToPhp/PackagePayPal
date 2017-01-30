<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlowControlDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: An optional set of values related to flow-specific details.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FlowControlDetailsType extends AbstractStructBase
{
    /**
     * The ErrorURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL to redirect to for an unpayable transaction. This field is currently used only for the inline checkout flow.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorURL;
    /**
     * The InContextReturnURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL to redirect to after a user clicks the "Pay" or "Continue" button on the merchant's site. This field is currently used only for the inline checkout flow.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InContextReturnURL;
    /**
     * Constructor method for FlowControlDetailsType
     * @uses FlowControlDetailsType::setErrorURL()
     * @uses FlowControlDetailsType::setInContextReturnURL()
     * @param string $errorURL
     * @param string $inContextReturnURL
     */
    public function __construct($errorURL = null, $inContextReturnURL = null)
    {
        $this
            ->setErrorURL($errorURL)
            ->setInContextReturnURL($inContextReturnURL);
    }
    /**
     * Get ErrorURL value
     * @return string|null
     */
    public function getErrorURL()
    {
        return $this->ErrorURL;
    }
    /**
     * Set ErrorURL value
     * @param string $errorURL
     * @return \PayPal\StructType\FlowControlDetailsType
     */
    public function setErrorURL($errorURL = null)
    {
        // validation for constraint: string
        if (!is_null($errorURL) && !is_string($errorURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorURL)), __LINE__);
        }
        $this->ErrorURL = $errorURL;
        return $this;
    }
    /**
     * Get InContextReturnURL value
     * @return string|null
     */
    public function getInContextReturnURL()
    {
        return $this->InContextReturnURL;
    }
    /**
     * Set InContextReturnURL value
     * @param string $inContextReturnURL
     * @return \PayPal\StructType\FlowControlDetailsType
     */
    public function setInContextReturnURL($inContextReturnURL = null)
    {
        // validation for constraint: string
        if (!is_null($inContextReturnURL) && !is_string($inContextReturnURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inContextReturnURL)), __LINE__);
        }
        $this->InContextReturnURL = $inContextReturnURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\FlowControlDetailsType
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
