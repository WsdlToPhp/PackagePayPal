<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlowControlDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: An optional set of values related to flow-specific details.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FlowControlDetailsType extends AbstractStructBase
{
    /**
     * The ErrorURL
     * Meta information extracted from the WSDL
     * - documentation: The URL to redirect to for an unpayable transaction. This field is currently used only for the inline checkout flow.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorURL;
    /**
     * The InContextReturnURL
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorURL, true), gettype($errorURL)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inContextReturnURL, true), gettype($inContextReturnURL)), __LINE__);
        }
        $this->InContextReturnURL = $inContextReturnURL;
        return $this;
    }
}
