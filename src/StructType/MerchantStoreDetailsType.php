<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchantStoreDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MerchantStoreDetailsType extends AbstractStructBase
{
    /**
     * The StoreID
     * Meta information extracted from the WSDL
     * - documentation: Store IDOptional Character length and limits: 50 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StoreID;
    /**
     * The TerminalID
     * Meta information extracted from the WSDL
     * - documentation: Terminal IDOptional Character length and limits: 50 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TerminalID;
    /**
     * Constructor method for MerchantStoreDetailsType
     * @uses MerchantStoreDetailsType::setStoreID()
     * @uses MerchantStoreDetailsType::setTerminalID()
     * @param string $storeID
     * @param string $terminalID
     */
    public function __construct($storeID = null, $terminalID = null)
    {
        $this
            ->setStoreID($storeID)
            ->setTerminalID($terminalID);
    }
    /**
     * Get StoreID value
     * @return string
     */
    public function getStoreID()
    {
        return $this->StoreID;
    }
    /**
     * Set StoreID value
     * @param string $storeID
     * @return \PayPal\StructType\MerchantStoreDetailsType
     */
    public function setStoreID($storeID = null)
    {
        // validation for constraint: string
        if (!is_null($storeID) && !is_string($storeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeID, true), gettype($storeID)), __LINE__);
        }
        $this->StoreID = $storeID;
        return $this;
    }
    /**
     * Get TerminalID value
     * @return string|null
     */
    public function getTerminalID()
    {
        return $this->TerminalID;
    }
    /**
     * Set TerminalID value
     * @param string $terminalID
     * @return \PayPal\StructType\MerchantStoreDetailsType
     */
    public function setTerminalID($terminalID = null)
    {
        // validation for constraint: string
        if (!is_null($terminalID) && !is_string($terminalID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminalID, true), gettype($terminalID)), __LINE__);
        }
        $this->TerminalID = $terminalID;
        return $this;
    }
}
