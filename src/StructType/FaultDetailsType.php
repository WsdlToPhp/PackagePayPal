<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FaultDetailsType extends AbstractStructBase
{
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - documentation: Error code can be used by a receiving application to debugging a SOAP response message that contain one or more SOAP Fault detail objects, i.e., fault detail sub-elements. These codes will need to be uniquely defined for each fault
     * scenario.
     * @var string
     */
    public $ErrorCode;
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - documentation: Severity indicates whether the error is a serious fault or if it is informational error, i.e., warning.
     * @var string
     */
    public $Severity;
    /**
     * The DetailedMessage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DetailedMessage;
    /**
     * Constructor method for FaultDetailsType
     * @uses FaultDetailsType::setErrorCode()
     * @uses FaultDetailsType::setSeverity()
     * @uses FaultDetailsType::setDetailedMessage()
     * @param string $errorCode
     * @param string $severity
     * @param string $detailedMessage
     */
    public function __construct($errorCode = null, $severity = null, $detailedMessage = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setSeverity($severity)
            ->setDetailedMessage($detailedMessage);
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param string $errorCode
     * @return \PayPal\StructType\FaultDetailsType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get Severity value
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @param string $severity
     * @return \PayPal\StructType\FaultDetailsType
     */
    public function setSeverity($severity = null)
    {
        // validation for constraint: string
        if (!is_null($severity) && !is_string($severity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($severity)), __LINE__);
        }
        $this->Severity = $severity;
        return $this;
    }
    /**
     * Get DetailedMessage value
     * @return string|null
     */
    public function getDetailedMessage()
    {
        return $this->DetailedMessage;
    }
    /**
     * Set DetailedMessage value
     * @param string $detailedMessage
     * @return \PayPal\StructType\FaultDetailsType
     */
    public function setDetailedMessage($detailedMessage = null)
    {
        // validation for constraint: string
        if (!is_null($detailedMessage) && !is_string($detailedMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailedMessage)), __LINE__);
        }
        $this->DetailedMessage = $detailedMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\FaultDetailsType
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
