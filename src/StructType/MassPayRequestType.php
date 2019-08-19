<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MassPayRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MassPayRequestType extends AbstractRequestType
{
    /**
     * The MassPayItem
     * Meta information extracted from the WSDL
     * - documentation: Details of each payment. A single MassPayRequest can include up to 250 MassPayItems. Required
     * - maxOccurs: 250
     * - minOccurs: 1
     * @var \PayPal\StructType\MassPayRequestItemType[]
     */
    public $MassPayItem;
    /**
     * The EmailSubject
     * Meta information extracted from the WSDL
     * - documentation: Subject line of the email sent to all recipients. This subject is not contained in the input file; you must create it with your application. Optional Character length and limitations: 255 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailSubject;
    /**
     * The ReceiverType
     * Meta information extracted from the WSDL
     * - documentation: Indicates how you identify the recipients of payments in all MassPayItems: either by EmailAddress (ReceiverEmail in MassPayItem), PhoneNumber (ReceiverPhone in MassPayItem), or by UserID (ReceiverID in MassPayItem). Required. You
     * must specify one or the other of EmailAddress or UserID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceiverType;
    /**
     * The ButtonSource
     * Meta information extracted from the WSDL
     * - documentation: Known as BN code, to track the partner referred merchant transactions. OptionalCharacter length and limitations: 32 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonSource;
    /**
     * Constructor method for MassPayRequestType
     * @uses MassPayRequestType::setMassPayItem()
     * @uses MassPayRequestType::setEmailSubject()
     * @uses MassPayRequestType::setReceiverType()
     * @uses MassPayRequestType::setButtonSource()
     * @param \PayPal\StructType\MassPayRequestItemType[] $massPayItem
     * @param string $emailSubject
     * @param string $receiverType
     * @param string $buttonSource
     */
    public function __construct(array $massPayItem = array(), $emailSubject = null, $receiverType = null, $buttonSource = null)
    {
        $this
            ->setMassPayItem($massPayItem)
            ->setEmailSubject($emailSubject)
            ->setReceiverType($receiverType)
            ->setButtonSource($buttonSource);
    }
    /**
     * Get MassPayItem value
     * @return \PayPal\StructType\MassPayRequestItemType[]
     */
    public function getMassPayItem()
    {
        return $this->MassPayItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMassPayItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMassPayItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMassPayItemForArrayConstraintsFromSetMassPayItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $massPayRequestTypeMassPayItemItem) {
            // validation for constraint: itemType
            if (!$massPayRequestTypeMassPayItemItem instanceof \PayPal\StructType\MassPayRequestItemType) {
                $invalidValues[] = is_object($massPayRequestTypeMassPayItemItem) ? get_class($massPayRequestTypeMassPayItemItem) : sprintf('%s(%s)', gettype($massPayRequestTypeMassPayItemItem), var_export($massPayRequestTypeMassPayItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MassPayItem property can only contain items of type \PayPal\StructType\MassPayRequestItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MassPayItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\MassPayRequestItemType[] $massPayItem
     * @return \PayPal\StructType\MassPayRequestType
     */
    public function setMassPayItem(array $massPayItem = array())
    {
        // validation for constraint: array
        if ('' !== ($massPayItemArrayErrorMessage = self::validateMassPayItemForArrayConstraintsFromSetMassPayItem($massPayItem))) {
            throw new \InvalidArgumentException($massPayItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(250)
        if (is_array($massPayItem) && count($massPayItem) > 250) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 250', count($massPayItem)), __LINE__);
        }
        $this->MassPayItem = $massPayItem;
        return $this;
    }
    /**
     * Add item to MassPayItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\MassPayRequestItemType $item
     * @return \PayPal\StructType\MassPayRequestType
     */
    public function addToMassPayItem(\PayPal\StructType\MassPayRequestItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\MassPayRequestItemType) {
            throw new \InvalidArgumentException(sprintf('The MassPayItem property can only contain items of type \PayPal\StructType\MassPayRequestItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(250)
        if (is_array($this->MassPayItem) && count($this->MassPayItem) >= 250) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 250', count($this->MassPayItem)), __LINE__);
        }
        $this->MassPayItem[] = $item;
        return $this;
    }
    /**
     * Get EmailSubject value
     * @return string|null
     */
    public function getEmailSubject()
    {
        return $this->EmailSubject;
    }
    /**
     * Set EmailSubject value
     * @param string $emailSubject
     * @return \PayPal\StructType\MassPayRequestType
     */
    public function setEmailSubject($emailSubject = null)
    {
        // validation for constraint: string
        if (!is_null($emailSubject) && !is_string($emailSubject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailSubject, true), gettype($emailSubject)), __LINE__);
        }
        $this->EmailSubject = $emailSubject;
        return $this;
    }
    /**
     * Get ReceiverType value
     * @return string|null
     */
    public function getReceiverType()
    {
        return $this->ReceiverType;
    }
    /**
     * Set ReceiverType value
     * @uses \PayPal\EnumType\ReceiverInfoCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ReceiverInfoCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $receiverType
     * @return \PayPal\StructType\MassPayRequestType
     */
    public function setReceiverType($receiverType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ReceiverInfoCodeType::valueIsValid($receiverType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ReceiverInfoCodeType', is_array($receiverType) ? implode(', ', $receiverType) : var_export($receiverType, true), implode(', ', \PayPal\EnumType\ReceiverInfoCodeType::getValidValues())), __LINE__);
        }
        $this->ReceiverType = $receiverType;
        return $this;
    }
    /**
     * Get ButtonSource value
     * @return string|null
     */
    public function getButtonSource()
    {
        return $this->ButtonSource;
    }
    /**
     * Set ButtonSource value
     * @param string $buttonSource
     * @return \PayPal\StructType\MassPayRequestType
     */
    public function setButtonSource($buttonSource = null)
    {
        // validation for constraint: string
        if (!is_null($buttonSource) && !is_string($buttonSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buttonSource, true), gettype($buttonSource)), __LINE__);
        }
        $this->ButtonSource = $buttonSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\MassPayRequestType
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
