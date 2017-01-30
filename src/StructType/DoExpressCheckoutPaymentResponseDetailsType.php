<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoExpressCheckoutPaymentResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoExpressCheckoutPaymentResponseDetailsType extends AbstractStructBase
{
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - documentation: The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Character length and limitations:20 single-byte characters
     * @var string
     */
    public $Token;
    /**
     * The PaymentInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about the transaction
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentInfoType[]
     */
    public $PaymentInfo;
    /**
     * The BillingAgreementID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementID;
    /**
     * The RedirectRequired
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RedirectRequired;
    /**
     * The Note
     * Meta informations extracted from the WSDL
     * - documentation: Memo entered by sender in PayPal Review Page note field. Optional Character length and limitations: 255 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The MsgSubID
     * Meta informations extracted from the WSDL
     * - documentation: Unique id passed in the DoEC call.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * The SuccessPageRedirectRequested
     * Meta informations extracted from the WSDL
     * - documentation: Redirect back to PayPal, PayPal can host the success page.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SuccessPageRedirectRequested;
    /**
     * The UserSelectedOptions
     * Meta informations extracted from the WSDL
     * - documentation: Information about the user selected options.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\UserSelectedOptionType
     */
    public $UserSelectedOptions;
    /**
     * The CoupledPaymentInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about Coupled Payment transactions.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \PayPal\StructType\CoupledPaymentInfoType[]
     */
    public $CoupledPaymentInfo;
    /**
     * Constructor method for DoExpressCheckoutPaymentResponseDetailsType
     * @uses DoExpressCheckoutPaymentResponseDetailsType::setToken()
     * @uses DoExpressCheckoutPaymentResponseDetailsType::setPaymentInfo()
     * @uses DoExpressCheckoutPaymentResponseDetailsType::setBillingAgreementID()
     * @uses DoExpressCheckoutPaymentResponseDetailsType::setRedirectRequired()
     * @uses DoExpressCheckoutPaymentResponseDetailsType::setNote()
     * @uses DoExpressCheckoutPaymentResponseDetailsType::setMsgSubID()
     * @uses DoExpressCheckoutPaymentResponseDetailsType::setSuccessPageRedirectRequested()
     * @uses DoExpressCheckoutPaymentResponseDetailsType::setUserSelectedOptions()
     * @uses DoExpressCheckoutPaymentResponseDetailsType::setCoupledPaymentInfo()
     * @param string $token
     * @param \PayPal\StructType\PaymentInfoType[] $paymentInfo
     * @param string $billingAgreementID
     * @param string $redirectRequired
     * @param string $note
     * @param string $msgSubID
     * @param string $successPageRedirectRequested
     * @param \PayPal\StructType\UserSelectedOptionType $userSelectedOptions
     * @param \PayPal\StructType\CoupledPaymentInfoType[] $coupledPaymentInfo
     */
    public function __construct($token = null, array $paymentInfo = array(), $billingAgreementID = null, $redirectRequired = null, $note = null, $msgSubID = null, $successPageRedirectRequested = null, \PayPal\StructType\UserSelectedOptionType $userSelectedOptions = null, array $coupledPaymentInfo = array())
    {
        $this
            ->setToken($token)
            ->setPaymentInfo($paymentInfo)
            ->setBillingAgreementID($billingAgreementID)
            ->setRedirectRequired($redirectRequired)
            ->setNote($note)
            ->setMsgSubID($msgSubID)
            ->setSuccessPageRedirectRequested($successPageRedirectRequested)
            ->setUserSelectedOptions($userSelectedOptions)
            ->setCoupledPaymentInfo($coupledPaymentInfo);
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
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
     * Get PaymentInfo value
     * @return \PayPal\StructType\PaymentInfoType[]|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentInfoType[] $paymentInfo
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setPaymentInfo(array $paymentInfo = array())
    {
        foreach ($paymentInfo as $doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem) {
            // validation for constraint: itemType
            if (!$doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem instanceof \PayPal\StructType\PaymentInfoType) {
                throw new \InvalidArgumentException(sprintf('The PaymentInfo property can only contain items of \PayPal\StructType\PaymentInfoType, "%s" given', is_object($doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem) ? get_class($doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem) : gettype($doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem)), __LINE__);
            }
        }
        $this->PaymentInfo = $paymentInfo;
        return $this;
    }
    /**
     * Add item to PaymentInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentInfoType $item
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function addToPaymentInfo(\PayPal\StructType\PaymentInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentInfoType) {
            throw new \InvalidArgumentException(sprintf('The PaymentInfo property can only contain items of \PayPal\StructType\PaymentInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentInfo[] = $item;
        return $this;
    }
    /**
     * Get BillingAgreementID value
     * @return string|null
     */
    public function getBillingAgreementID()
    {
        return $this->BillingAgreementID;
    }
    /**
     * Set BillingAgreementID value
     * @param string $billingAgreementID
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setBillingAgreementID($billingAgreementID = null)
    {
        // validation for constraint: string
        if (!is_null($billingAgreementID) && !is_string($billingAgreementID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAgreementID)), __LINE__);
        }
        $this->BillingAgreementID = $billingAgreementID;
        return $this;
    }
    /**
     * Get RedirectRequired value
     * @return string|null
     */
    public function getRedirectRequired()
    {
        return $this->RedirectRequired;
    }
    /**
     * Set RedirectRequired value
     * @param string $redirectRequired
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setRedirectRequired($redirectRequired = null)
    {
        // validation for constraint: string
        if (!is_null($redirectRequired) && !is_string($redirectRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirectRequired)), __LINE__);
        }
        $this->RedirectRequired = $redirectRequired;
        return $this;
    }
    /**
     * Get Note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($note)), __LINE__);
        }
        $this->Note = $note;
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setMsgSubID($msgSubID = null)
    {
        // validation for constraint: string
        if (!is_null($msgSubID) && !is_string($msgSubID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msgSubID)), __LINE__);
        }
        $this->MsgSubID = $msgSubID;
        return $this;
    }
    /**
     * Get SuccessPageRedirectRequested value
     * @return string|null
     */
    public function getSuccessPageRedirectRequested()
    {
        return $this->SuccessPageRedirectRequested;
    }
    /**
     * Set SuccessPageRedirectRequested value
     * @param string $successPageRedirectRequested
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setSuccessPageRedirectRequested($successPageRedirectRequested = null)
    {
        // validation for constraint: string
        if (!is_null($successPageRedirectRequested) && !is_string($successPageRedirectRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($successPageRedirectRequested)), __LINE__);
        }
        $this->SuccessPageRedirectRequested = $successPageRedirectRequested;
        return $this;
    }
    /**
     * Get UserSelectedOptions value
     * @return \PayPal\StructType\UserSelectedOptionType|null
     */
    public function getUserSelectedOptions()
    {
        return $this->UserSelectedOptions;
    }
    /**
     * Set UserSelectedOptions value
     * @param \PayPal\StructType\UserSelectedOptionType $userSelectedOptions
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setUserSelectedOptions(\PayPal\StructType\UserSelectedOptionType $userSelectedOptions = null)
    {
        $this->UserSelectedOptions = $userSelectedOptions;
        return $this;
    }
    /**
     * Get CoupledPaymentInfo value
     * @return \PayPal\StructType\CoupledPaymentInfoType[]|null
     */
    public function getCoupledPaymentInfo()
    {
        return $this->CoupledPaymentInfo;
    }
    /**
     * Set CoupledPaymentInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\CoupledPaymentInfoType[] $coupledPaymentInfo
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setCoupledPaymentInfo(array $coupledPaymentInfo = array())
    {
        foreach ($coupledPaymentInfo as $doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem) {
            // validation for constraint: itemType
            if (!$doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem instanceof \PayPal\StructType\CoupledPaymentInfoType) {
                throw new \InvalidArgumentException(sprintf('The CoupledPaymentInfo property can only contain items of \PayPal\StructType\CoupledPaymentInfoType, "%s" given', is_object($doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem) ? get_class($doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem) : gettype($doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem)), __LINE__);
            }
        }
        $this->CoupledPaymentInfo = $coupledPaymentInfo;
        return $this;
    }
    /**
     * Add item to CoupledPaymentInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\CoupledPaymentInfoType $item
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function addToCoupledPaymentInfo(\PayPal\StructType\CoupledPaymentInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\CoupledPaymentInfoType) {
            throw new \InvalidArgumentException(sprintf('The CoupledPaymentInfo property can only contain items of \PayPal\StructType\CoupledPaymentInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CoupledPaymentInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
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
