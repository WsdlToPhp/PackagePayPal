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
     * Meta information extracted from the WSDL
     * - documentation: The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Character length and limitations:20 single-byte characters
     * - base: xs:string
     * @var string
     */
    public $Token;
    /**
     * The PaymentInfo
     * Meta information extracted from the WSDL
     * - documentation: Information about the transaction
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentInfoType[]
     */
    public $PaymentInfo;
    /**
     * The BillingAgreementID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementID;
    /**
     * The RedirectRequired
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RedirectRequired;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Memo entered by sender in PayPal Review Page note field. Optional Character length and limitations: 255 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The MsgSubID
     * Meta information extracted from the WSDL
     * - documentation: Unique id passed in the DoEC call.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * The SuccessPageRedirectRequested
     * Meta information extracted from the WSDL
     * - documentation: Redirect back to PayPal, PayPal can host the success page.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SuccessPageRedirectRequested;
    /**
     * The UserSelectedOptions
     * Meta information extracted from the WSDL
     * - documentation: Information about the user selected options.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\UserSelectedOptionType
     */
    public $UserSelectedOptions;
    /**
     * The CoupledPaymentInfo
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
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
     * This method is responsible for validating the values passed to the setPaymentInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentInfoForArrayConstraintsFromSetPaymentInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem) {
            // validation for constraint: itemType
            if (!$doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem instanceof \PayPal\StructType\PaymentInfoType) {
                $invalidValues[] = is_object($doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem) ? get_class($doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem) : sprintf('%s(%s)', gettype($doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem), var_export($doExpressCheckoutPaymentResponseDetailsTypePaymentInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentInfo property can only contain items of type \PayPal\StructType\PaymentInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentInfoType[] $paymentInfo
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setPaymentInfo(array $paymentInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentInfoArrayErrorMessage = self::validatePaymentInfoForArrayConstraintsFromSetPaymentInfo($paymentInfo))) {
            throw new \InvalidArgumentException($paymentInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($paymentInfo) && count($paymentInfo) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($paymentInfo)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The PaymentInfo property can only contain items of type \PayPal\StructType\PaymentInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->PaymentInfo) && count($this->PaymentInfo) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->PaymentInfo)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementID, true), gettype($billingAgreementID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirectRequired, true), gettype($redirectRequired)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgSubID, true), gettype($msgSubID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($successPageRedirectRequested, true), gettype($successPageRedirectRequested)), __LINE__);
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
     * This method is responsible for validating the values passed to the setCoupledPaymentInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCoupledPaymentInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCoupledPaymentInfoForArrayConstraintsFromSetCoupledPaymentInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem) {
            // validation for constraint: itemType
            if (!$doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem instanceof \PayPal\StructType\CoupledPaymentInfoType) {
                $invalidValues[] = is_object($doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem) ? get_class($doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem) : sprintf('%s(%s)', gettype($doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem), var_export($doExpressCheckoutPaymentResponseDetailsTypeCoupledPaymentInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CoupledPaymentInfo property can only contain items of type \PayPal\StructType\CoupledPaymentInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CoupledPaymentInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\CoupledPaymentInfoType[] $coupledPaymentInfo
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function setCoupledPaymentInfo(array $coupledPaymentInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($coupledPaymentInfoArrayErrorMessage = self::validateCoupledPaymentInfoForArrayConstraintsFromSetCoupledPaymentInfo($coupledPaymentInfo))) {
            throw new \InvalidArgumentException($coupledPaymentInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($coupledPaymentInfo) && count($coupledPaymentInfo) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($coupledPaymentInfo)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The CoupledPaymentInfo property can only contain items of type \PayPal\StructType\CoupledPaymentInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->CoupledPaymentInfo) && count($this->CoupledPaymentInfo) >= 5) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->CoupledPaymentInfo)), __LINE__);
        }
        $this->CoupledPaymentInfo[] = $item;
        return $this;
    }
}
