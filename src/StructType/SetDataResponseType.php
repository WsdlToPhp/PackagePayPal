<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDataResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetDataResponseType extends AbstractStructBase
{
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - documentation: If Checkout session was initialized successfully, the corresponding token is returned in this element.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Token;
    /**
     * The ShippingAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType[]
     */
    public $ShippingAddresses;
    /**
     * The SetDataError
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\ErrorType[]
     */
    public $SetDataError;
    /**
     * Constructor method for SetDataResponseType
     * @uses SetDataResponseType::setToken()
     * @uses SetDataResponseType::setShippingAddresses()
     * @uses SetDataResponseType::setSetDataError()
     * @param string $token
     * @param \PayPal\StructType\AddressType[] $shippingAddresses
     * @param \PayPal\StructType\ErrorType[] $setDataError
     */
    public function __construct($token = null, array $shippingAddresses = array(), array $setDataError = array())
    {
        $this
            ->setToken($token)
            ->setShippingAddresses($shippingAddresses)
            ->setSetDataError($setDataError);
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \PayPal\StructType\SetDataResponseType
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->Token = $token;
        return $this;
    }
    /**
     * Get ShippingAddresses value
     * @return \PayPal\StructType\AddressType[]|null
     */
    public function getShippingAddresses()
    {
        return $this->ShippingAddresses;
    }
    /**
     * Set ShippingAddresses value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AddressType[] $shippingAddresses
     * @return \PayPal\StructType\SetDataResponseType
     */
    public function setShippingAddresses(array $shippingAddresses = array())
    {
        foreach ($shippingAddresses as $setDataResponseTypeShippingAddressesItem) {
            // validation for constraint: itemType
            if (!$setDataResponseTypeShippingAddressesItem instanceof \PayPal\StructType\AddressType) {
                throw new \InvalidArgumentException(sprintf('The ShippingAddresses property can only contain items of \PayPal\StructType\AddressType, "%s" given', is_object($setDataResponseTypeShippingAddressesItem) ? get_class($setDataResponseTypeShippingAddressesItem) : gettype($setDataResponseTypeShippingAddressesItem)), __LINE__);
            }
        }
        $this->ShippingAddresses = $shippingAddresses;
        return $this;
    }
    /**
     * Add item to ShippingAddresses value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AddressType $item
     * @return \PayPal\StructType\SetDataResponseType
     */
    public function addToShippingAddresses(\PayPal\StructType\AddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\AddressType) {
            throw new \InvalidArgumentException(sprintf('The ShippingAddresses property can only contain items of \PayPal\StructType\AddressType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingAddresses[] = $item;
        return $this;
    }
    /**
     * Get SetDataError value
     * @return \PayPal\StructType\ErrorType[]|null
     */
    public function getSetDataError()
    {
        return $this->SetDataError;
    }
    /**
     * Set SetDataError value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ErrorType[] $setDataError
     * @return \PayPal\StructType\SetDataResponseType
     */
    public function setSetDataError(array $setDataError = array())
    {
        foreach ($setDataError as $setDataResponseTypeSetDataErrorItem) {
            // validation for constraint: itemType
            if (!$setDataResponseTypeSetDataErrorItem instanceof \PayPal\StructType\ErrorType) {
                throw new \InvalidArgumentException(sprintf('The SetDataError property can only contain items of \PayPal\StructType\ErrorType, "%s" given', is_object($setDataResponseTypeSetDataErrorItem) ? get_class($setDataResponseTypeSetDataErrorItem) : gettype($setDataResponseTypeSetDataErrorItem)), __LINE__);
            }
        }
        $this->SetDataError = $setDataError;
        return $this;
    }
    /**
     * Add item to SetDataError value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ErrorType $item
     * @return \PayPal\StructType\SetDataResponseType
     */
    public function addToSetDataError(\PayPal\StructType\ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\ErrorType) {
            throw new \InvalidArgumentException(sprintf('The SetDataError property can only contain items of \PayPal\StructType\ErrorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SetDataError[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetDataResponseType
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
