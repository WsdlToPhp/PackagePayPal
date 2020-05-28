<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoCaptureResponseDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: The authorization identification number you specified in the request. Character length and limits: 19 single-byte characters maximum
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoCaptureResponseDetailsType extends AbstractStructBase
{
    /**
     * The AuthorizationID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:AuthorizationID
     * @var string
     */
    public $AuthorizationID;
    /**
     * The PaymentInfo
     * Meta information extracted from the WSDL
     * - documentation: Information about the transaction
     * @var \PayPal\StructType\PaymentInfoType
     */
    public $PaymentInfo;
    /**
     * The MsgSubID
     * Meta information extracted from the WSDL
     * - documentation: Return msgsubid back to merchant
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * The PartnerFundingSourceID
     * Meta information extracted from the WSDL
     * - documentation: Partner funding source id corresponding to the FS used in authorization.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PartnerFundingSourceID;
    /**
     * Constructor method for DoCaptureResponseDetailsType
     * @uses DoCaptureResponseDetailsType::setAuthorizationID()
     * @uses DoCaptureResponseDetailsType::setPaymentInfo()
     * @uses DoCaptureResponseDetailsType::setMsgSubID()
     * @uses DoCaptureResponseDetailsType::setPartnerFundingSourceID()
     * @param string $authorizationID
     * @param \PayPal\StructType\PaymentInfoType $paymentInfo
     * @param string $msgSubID
     * @param string $partnerFundingSourceID
     */
    public function __construct($authorizationID = null, \PayPal\StructType\PaymentInfoType $paymentInfo = null, $msgSubID = null, $partnerFundingSourceID = null)
    {
        $this
            ->setAuthorizationID($authorizationID)
            ->setPaymentInfo($paymentInfo)
            ->setMsgSubID($msgSubID)
            ->setPartnerFundingSourceID($partnerFundingSourceID);
    }
    /**
     * Get AuthorizationID value
     * @return string|null
     */
    public function getAuthorizationID()
    {
        return $this->AuthorizationID;
    }
    /**
     * Set AuthorizationID value
     * @param string $authorizationID
     * @return \PayPal\StructType\DoCaptureResponseDetailsType
     */
    public function setAuthorizationID($authorizationID = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationID) && !is_string($authorizationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationID, true), gettype($authorizationID)), __LINE__);
        }
        $this->AuthorizationID = $authorizationID;
        return $this;
    }
    /**
     * Get PaymentInfo value
     * @return \PayPal\StructType\PaymentInfoType|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @param \PayPal\StructType\PaymentInfoType $paymentInfo
     * @return \PayPal\StructType\DoCaptureResponseDetailsType
     */
    public function setPaymentInfo(\PayPal\StructType\PaymentInfoType $paymentInfo = null)
    {
        $this->PaymentInfo = $paymentInfo;
        return $this;
    }
    /**
     * Get MsgSubID value
     * @return string|null
     */
    public function getMsgSubID()
    {
        return $this->MsgSubID;
    }
    /**
     * Set MsgSubID value
     * @param string $msgSubID
     * @return \PayPal\StructType\DoCaptureResponseDetailsType
     */
    public function setMsgSubID($msgSubID = null)
    {
        // validation for constraint: string
        if (!is_null($msgSubID) && !is_string($msgSubID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgSubID, true), gettype($msgSubID)), __LINE__);
        }
        $this->MsgSubID = $msgSubID;
        return $this;
    }
    /**
     * Get PartnerFundingSourceID value
     * @return string|null
     */
    public function getPartnerFundingSourceID()
    {
        return $this->PartnerFundingSourceID;
    }
    /**
     * Set PartnerFundingSourceID value
     * @param string $partnerFundingSourceID
     * @return \PayPal\StructType\DoCaptureResponseDetailsType
     */
    public function setPartnerFundingSourceID($partnerFundingSourceID = null)
    {
        // validation for constraint: string
        if (!is_null($partnerFundingSourceID) && !is_string($partnerFundingSourceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerFundingSourceID, true), gettype($partnerFundingSourceID)), __LINE__);
        }
        $this->PartnerFundingSourceID = $partnerFundingSourceID;
        return $this;
    }
}
