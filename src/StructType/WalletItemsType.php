<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WalletItemsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about an Item stored in the PayPal Wallet.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class WalletItemsType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: (Optional)Identifies a wallet item of a given type. The format varies depending on the type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - documentation: (Optional)Uniquely identifies a wallet item of given type. Format varies depending on the type. Character length and limitations: 64 single-byte characters maximum.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: (Optional)Description of wallet item. Character length and limitations: 512 single-byte characters maximum.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for WalletItemsType
     * @uses WalletItemsType::setType()
     * @uses WalletItemsType::setId()
     * @uses WalletItemsType::setDescription()
     * @param string $type
     * @param string $id
     * @param string $description
     */
    public function __construct($type = null, $id = null, $description = null)
    {
        $this
            ->setType($type)
            ->setId($id)
            ->setDescription($description);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \PayPal\EnumType\WalletItemType::valueIsValid()
     * @uses \PayPal\EnumType\WalletItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \PayPal\StructType\WalletItemsType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\WalletItemType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\WalletItemType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \PayPal\EnumType\WalletItemType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \PayPal\StructType\WalletItemsType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \PayPal\StructType\WalletItemsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\WalletItemsType
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
