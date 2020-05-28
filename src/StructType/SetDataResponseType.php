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
     * Meta information extracted from the WSDL
     * - documentation: If Checkout session was initialized successfully, the corresponding token is returned in this element.
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Token;
    /**
     * The ShippingAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType[]
     */
    public $ShippingAddresses;
    /**
     * The SetDataError
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
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
     * This method is responsible for validating the values passed to the setShippingAddresses method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingAddresses method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingAddressesForArrayConstraintsFromSetShippingAddresses(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setDataResponseTypeShippingAddressesItem) {
            // validation for constraint: itemType
            if (!$setDataResponseTypeShippingAddressesItem instanceof \PayPal\StructType\AddressType) {
                $invalidValues[] = is_object($setDataResponseTypeShippingAddressesItem) ? get_class($setDataResponseTypeShippingAddressesItem) : sprintf('%s(%s)', gettype($setDataResponseTypeShippingAddressesItem), var_export($setDataResponseTypeShippingAddressesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingAddresses property can only contain items of type \PayPal\StructType\AddressType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingAddresses value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AddressType[] $shippingAddresses
     * @return \PayPal\StructType\SetDataResponseType
     */
    public function setShippingAddresses(array $shippingAddresses = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingAddressesArrayErrorMessage = self::validateShippingAddressesForArrayConstraintsFromSetShippingAddresses($shippingAddresses))) {
            throw new \InvalidArgumentException($shippingAddressesArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The ShippingAddresses property can only contain items of type \PayPal\StructType\AddressType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * This method is responsible for validating the values passed to the setSetDataError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetDataError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSetDataErrorForArrayConstraintsFromSetSetDataError(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setDataResponseTypeSetDataErrorItem) {
            // validation for constraint: itemType
            if (!$setDataResponseTypeSetDataErrorItem instanceof \PayPal\StructType\ErrorType) {
                $invalidValues[] = is_object($setDataResponseTypeSetDataErrorItem) ? get_class($setDataResponseTypeSetDataErrorItem) : sprintf('%s(%s)', gettype($setDataResponseTypeSetDataErrorItem), var_export($setDataResponseTypeSetDataErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SetDataError property can only contain items of type \PayPal\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SetDataError value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ErrorType[] $setDataError
     * @return \PayPal\StructType\SetDataResponseType
     */
    public function setSetDataError(array $setDataError = array())
    {
        // validation for constraint: array
        if ('' !== ($setDataErrorArrayErrorMessage = self::validateSetDataErrorForArrayConstraintsFromSetSetDataError($setDataError))) {
            throw new \InvalidArgumentException($setDataErrorArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The SetDataError property can only contain items of type \PayPal\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SetDataError[] = $item;
        return $this;
    }
}
