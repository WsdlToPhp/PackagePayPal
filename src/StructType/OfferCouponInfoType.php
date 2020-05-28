<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferCouponInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: OffersAndCouponsInfoType Information about a Offers and Coupons.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OfferCouponInfoType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type of the incentive
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: ID of the Incentive used in transaction
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount used on transaction
     * - minOccurs: 0
     * @var string
     */
    public $Amount;
    /**
     * The AmountCurrency
     * Meta information extracted from the WSDL
     * - documentation: Amount Currency
     * - minOccurs: 0
     * @var string
     */
    public $AmountCurrency;
    /**
     * Constructor method for OfferCouponInfoType
     * @uses OfferCouponInfoType::setType()
     * @uses OfferCouponInfoType::setID()
     * @uses OfferCouponInfoType::setAmount()
     * @uses OfferCouponInfoType::setAmountCurrency()
     * @param string $type
     * @param string $iD
     * @param string $amount
     * @param string $amountCurrency
     */
    public function __construct($type = null, $iD = null, $amount = null, $amountCurrency = null)
    {
        $this
            ->setType($type)
            ->setID($iD)
            ->setAmount($amount)
            ->setAmountCurrency($amountCurrency);
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
     * @param string $type
     * @return \PayPal\StructType\OfferCouponInfoType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \PayPal\StructType\OfferCouponInfoType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \PayPal\StructType\OfferCouponInfoType
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get AmountCurrency value
     * @return string|null
     */
    public function getAmountCurrency()
    {
        return $this->AmountCurrency;
    }
    /**
     * Set AmountCurrency value
     * @param string $amountCurrency
     * @return \PayPal\StructType\OfferCouponInfoType
     */
    public function setAmountCurrency($amountCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($amountCurrency) && !is_string($amountCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amountCurrency, true), gettype($amountCurrency)), __LINE__);
        }
        $this->AmountCurrency = $amountCurrency;
        return $this;
    }
}
