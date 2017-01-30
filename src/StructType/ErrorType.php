<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The ShortMessage
     * @var string
     */
    public $ShortMessage;
    /**
     * The LongMessage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LongMessage;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - documentation: Error code can be used by a receiving application to debugging a response message. These codes will need to be uniquely defined for each application.
     * @var string
     */
    public $ErrorCode;
    /**
     * The SeverityCode
     * Meta informations extracted from the WSDL
     * - documentation: SeverityCode indicates whether the error is an application level error or if it is informational error, i.e., warning.
     * @var string
     */
    public $SeverityCode;
    /**
     * The ErrorParameters
     * Meta informations extracted from the WSDL
     * - documentation: This optional element may carry additional application-specific error variables that indicate specific information about the error condition particularly in the cases where there are multiple instances of the ErrorType which require
     * additional context.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\ErrorParameterType[]
     */
    public $ErrorParameters;
    /**
     * Constructor method for ErrorType
     * @uses ErrorType::setShortMessage()
     * @uses ErrorType::setLongMessage()
     * @uses ErrorType::setErrorCode()
     * @uses ErrorType::setSeverityCode()
     * @uses ErrorType::setErrorParameters()
     * @param string $shortMessage
     * @param string $longMessage
     * @param string $errorCode
     * @param string $severityCode
     * @param \PayPal\StructType\ErrorParameterType[] $errorParameters
     */
    public function __construct($shortMessage = null, $longMessage = null, $errorCode = null, $severityCode = null, array $errorParameters = array())
    {
        $this
            ->setShortMessage($shortMessage)
            ->setLongMessage($longMessage)
            ->setErrorCode($errorCode)
            ->setSeverityCode($severityCode)
            ->setErrorParameters($errorParameters);
    }
    /**
     * Get ShortMessage value
     * @return string|null
     */
    public function getShortMessage()
    {
        return $this->ShortMessage;
    }
    /**
     * Set ShortMessage value
     * @param string $shortMessage
     * @return \PayPal\StructType\ErrorType
     */
    public function setShortMessage($shortMessage = null)
    {
        // validation for constraint: string
        if (!is_null($shortMessage) && !is_string($shortMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortMessage)), __LINE__);
        }
        $this->ShortMessage = $shortMessage;
        return $this;
    }
    /**
     * Get LongMessage value
     * @return string|null
     */
    public function getLongMessage()
    {
        return $this->LongMessage;
    }
    /**
     * Set LongMessage value
     * @param string $longMessage
     * @return \PayPal\StructType\ErrorType
     */
    public function setLongMessage($longMessage = null)
    {
        // validation for constraint: string
        if (!is_null($longMessage) && !is_string($longMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($longMessage)), __LINE__);
        }
        $this->LongMessage = $longMessage;
        return $this;
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
     * @return \PayPal\StructType\ErrorType
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
     * Get SeverityCode value
     * @return string|null
     */
    public function getSeverityCode()
    {
        return $this->SeverityCode;
    }
    /**
     * Set SeverityCode value
     * @uses \PayPal\EnumType\SeverityCodeType::valueIsValid()
     * @uses \PayPal\EnumType\SeverityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $severityCode
     * @return \PayPal\StructType\ErrorType
     */
    public function setSeverityCode($severityCode = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\SeverityCodeType::valueIsValid($severityCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $severityCode, implode(', ', \PayPal\EnumType\SeverityCodeType::getValidValues())), __LINE__);
        }
        $this->SeverityCode = $severityCode;
        return $this;
    }
    /**
     * Get ErrorParameters value
     * @return \PayPal\StructType\ErrorParameterType[]|null
     */
    public function getErrorParameters()
    {
        return $this->ErrorParameters;
    }
    /**
     * Set ErrorParameters value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ErrorParameterType[] $errorParameters
     * @return \PayPal\StructType\ErrorType
     */
    public function setErrorParameters(array $errorParameters = array())
    {
        foreach ($errorParameters as $errorTypeErrorParametersItem) {
            // validation for constraint: itemType
            if (!$errorTypeErrorParametersItem instanceof \PayPal\StructType\ErrorParameterType) {
                throw new \InvalidArgumentException(sprintf('The ErrorParameters property can only contain items of \PayPal\StructType\ErrorParameterType, "%s" given', is_object($errorTypeErrorParametersItem) ? get_class($errorTypeErrorParametersItem) : gettype($errorTypeErrorParametersItem)), __LINE__);
            }
        }
        $this->ErrorParameters = $errorParameters;
        return $this;
    }
    /**
     * Add item to ErrorParameters value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ErrorParameterType $item
     * @return \PayPal\StructType\ErrorType
     */
    public function addToErrorParameters(\PayPal\StructType\ErrorParameterType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\ErrorParameterType) {
            throw new \InvalidArgumentException(sprintf('The ErrorParameters property can only contain items of \PayPal\StructType\ErrorParameterType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ErrorParameters[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ErrorType
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
