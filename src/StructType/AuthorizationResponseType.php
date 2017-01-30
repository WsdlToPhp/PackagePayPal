<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthorizationResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AuthorizationResponseType extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Status will denote whether Auto authorization was successful or not.
     * - minOccurs: 1
     * @var string
     */
    public $Status;
    /**
     * The AuthorizationError
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\ErrorType[]
     */
    public $AuthorizationError;
    /**
     * Constructor method for AuthorizationResponseType
     * @uses AuthorizationResponseType::setStatus()
     * @uses AuthorizationResponseType::setAuthorizationError()
     * @param string $status
     * @param \PayPal\StructType\ErrorType[] $authorizationError
     */
    public function __construct($status = null, array $authorizationError = array())
    {
        $this
            ->setStatus($status)
            ->setAuthorizationError($authorizationError);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \PayPal\EnumType\AckCodeType::valueIsValid()
     * @uses \PayPal\EnumType\AckCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \PayPal\StructType\AuthorizationResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AckCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \PayPal\EnumType\AckCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get AuthorizationError value
     * @return \PayPal\StructType\ErrorType[]|null
     */
    public function getAuthorizationError()
    {
        return $this->AuthorizationError;
    }
    /**
     * Set AuthorizationError value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ErrorType[] $authorizationError
     * @return \PayPal\StructType\AuthorizationResponseType
     */
    public function setAuthorizationError(array $authorizationError = array())
    {
        foreach ($authorizationError as $authorizationResponseTypeAuthorizationErrorItem) {
            // validation for constraint: itemType
            if (!$authorizationResponseTypeAuthorizationErrorItem instanceof \PayPal\StructType\ErrorType) {
                throw new \InvalidArgumentException(sprintf('The AuthorizationError property can only contain items of \PayPal\StructType\ErrorType, "%s" given', is_object($authorizationResponseTypeAuthorizationErrorItem) ? get_class($authorizationResponseTypeAuthorizationErrorItem) : gettype($authorizationResponseTypeAuthorizationErrorItem)), __LINE__);
            }
        }
        $this->AuthorizationError = $authorizationError;
        return $this;
    }
    /**
     * Add item to AuthorizationError value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ErrorType $item
     * @return \PayPal\StructType\AuthorizationResponseType
     */
    public function addToAuthorizationError(\PayPal\StructType\ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\ErrorType) {
            throw new \InvalidArgumentException(sprintf('The AuthorizationError property can only contain items of \PayPal\StructType\ErrorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AuthorizationError[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AuthorizationResponseType
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
