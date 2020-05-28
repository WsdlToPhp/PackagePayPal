<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAuthorizationRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Shipping Address for this transaction.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateAuthorizationRequestType extends AbstractRequestType
{
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: The value of the authorizationâtransaction identification number returned by a PayPal product. Required Character length and limits: 19 single-byte characters maximum
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TransactionID;
    /**
     * The ShipToAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:ShipToAddress
     * @var \PayPal\StructType\AddressType
     */
    public $ShipToAddress;
    /**
     * The IPAddress
     * Meta information extracted from the WSDL
     * - documentation: IP Address of the buyer
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IPAddress;
    /**
     * The ShipToStore
     * Meta information extracted from the WSDL
     * - documentation: A flag indicating that this transaction is a Ship to Store transaction. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipToStore;
    /**
     * Constructor method for UpdateAuthorizationRequestType
     * @uses UpdateAuthorizationRequestType::setTransactionID()
     * @uses UpdateAuthorizationRequestType::setShipToAddress()
     * @uses UpdateAuthorizationRequestType::setIPAddress()
     * @uses UpdateAuthorizationRequestType::setShipToStore()
     * @param string $transactionID
     * @param \PayPal\StructType\AddressType $shipToAddress
     * @param string $iPAddress
     * @param string $shipToStore
     */
    public function __construct($transactionID = null, \PayPal\StructType\AddressType $shipToAddress = null, $iPAddress = null, $shipToStore = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setShipToAddress($shipToAddress)
            ->setIPAddress($iPAddress)
            ->setShipToStore($shipToStore);
    }
    /**
     * Get TransactionID value
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \PayPal\StructType\UpdateAuthorizationRequestType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get ShipToAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getShipToAddress()
    {
        return $this->ShipToAddress;
    }
    /**
     * Set ShipToAddress value
     * @param \PayPal\StructType\AddressType $shipToAddress
     * @return \PayPal\StructType\UpdateAuthorizationRequestType
     */
    public function setShipToAddress(\PayPal\StructType\AddressType $shipToAddress = null)
    {
        $this->ShipToAddress = $shipToAddress;
        return $this;
    }
    /**
     * Get IPAddress value
     * @return string|null
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }
    /**
     * Set IPAddress value
     * @param string $iPAddress
     * @return \PayPal\StructType\UpdateAuthorizationRequestType
     */
    public function setIPAddress($iPAddress = null)
    {
        // validation for constraint: string
        if (!is_null($iPAddress) && !is_string($iPAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iPAddress, true), gettype($iPAddress)), __LINE__);
        }
        $this->IPAddress = $iPAddress;
        return $this;
    }
    /**
     * Get ShipToStore value
     * @return string|null
     */
    public function getShipToStore()
    {
        return $this->ShipToStore;
    }
    /**
     * Set ShipToStore value
     * @param string $shipToStore
     * @return \PayPal\StructType\UpdateAuthorizationRequestType
     */
    public function setShipToStore($shipToStore = null)
    {
        // validation for constraint: string
        if (!is_null($shipToStore) && !is_string($shipToStore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipToStore, true), gettype($shipToStore)), __LINE__);
        }
        $this->ShipToStore = $shipToStore;
        return $this;
    }
}
