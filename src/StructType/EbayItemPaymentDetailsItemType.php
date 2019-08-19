<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EbayItemPaymentDetailsItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: EbayItemPaymentDetailsItemType - Type declaration to be used by other schemas. Information about an Ebay Payment Item.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EbayItemPaymentDetailsItemType extends AbstractStructBase
{
    /**
     * The ItemNumber
     * Meta information extracted from the WSDL
     * - documentation: Auction ItemNumber. Optional Character length and limitations: 765 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $ItemNumber;
    /**
     * The AuctionTransactionId
     * Meta information extracted from the WSDL
     * - documentation: Auction Transaction ID. Optional Character length and limitations: 255 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $AuctionTransactionId;
    /**
     * The OrderId
     * Meta information extracted from the WSDL
     * - documentation: Ebay Order ID. Optional Character length and limitations: 64 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $OrderId;
    /**
     * The CartID
     * Meta information extracted from the WSDL
     * - documentation: Ebay Cart ID. Optional Character length and limitations: 64 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $CartID;
    /**
     * Constructor method for EbayItemPaymentDetailsItemType
     * @uses EbayItemPaymentDetailsItemType::setItemNumber()
     * @uses EbayItemPaymentDetailsItemType::setAuctionTransactionId()
     * @uses EbayItemPaymentDetailsItemType::setOrderId()
     * @uses EbayItemPaymentDetailsItemType::setCartID()
     * @param string $itemNumber
     * @param string $auctionTransactionId
     * @param string $orderId
     * @param string $cartID
     */
    public function __construct($itemNumber = null, $auctionTransactionId = null, $orderId = null, $cartID = null)
    {
        $this
            ->setItemNumber($itemNumber)
            ->setAuctionTransactionId($auctionTransactionId)
            ->setOrderId($orderId)
            ->setCartID($cartID);
    }
    /**
     * Get ItemNumber value
     * @return string|null
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param string $itemNumber
     * @return \PayPal\StructType\EbayItemPaymentDetailsItemType
     */
    public function setItemNumber($itemNumber = null)
    {
        // validation for constraint: string
        if (!is_null($itemNumber) && !is_string($itemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemNumber, true), gettype($itemNumber)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    /**
     * Get AuctionTransactionId value
     * @return string|null
     */
    public function getAuctionTransactionId()
    {
        return $this->AuctionTransactionId;
    }
    /**
     * Set AuctionTransactionId value
     * @param string $auctionTransactionId
     * @return \PayPal\StructType\EbayItemPaymentDetailsItemType
     */
    public function setAuctionTransactionId($auctionTransactionId = null)
    {
        // validation for constraint: string
        if (!is_null($auctionTransactionId) && !is_string($auctionTransactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($auctionTransactionId, true), gettype($auctionTransactionId)), __LINE__);
        }
        $this->AuctionTransactionId = $auctionTransactionId;
        return $this;
    }
    /**
     * Get OrderId value
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param string $orderId
     * @return \PayPal\StructType\EbayItemPaymentDetailsItemType
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        return $this;
    }
    /**
     * Get CartID value
     * @return string|null
     */
    public function getCartID()
    {
        return $this->CartID;
    }
    /**
     * Set CartID value
     * @param string $cartID
     * @return \PayPal\StructType\EbayItemPaymentDetailsItemType
     */
    public function setCartID($cartID = null)
    {
        // validation for constraint: string
        if (!is_null($cartID) && !is_string($cartID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cartID, true), gettype($cartID)), __LINE__);
        }
        $this->CartID = $cartID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\EbayItemPaymentDetailsItemType
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
