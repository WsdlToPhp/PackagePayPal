<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherPaymentMethodDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Lists the Payment Methods (other than PayPal) that the use can pay with e.g. Money Order. Optional.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OtherPaymentMethodDetailsType extends AbstractStructBase
{
    /**
     * The OtherPaymentMethodId
     * Meta informations extracted from the WSDL
     * - documentation: The identifier of the Payment Method.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OtherPaymentMethodId;
    /**
     * The OtherPaymentMethodType
     * Meta informations extracted from the WSDL
     * - documentation: Valid values are 'Method', 'SubMethod'.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OtherPaymentMethodType;
    /**
     * The OtherPaymentMethodLabel
     * Meta informations extracted from the WSDL
     * - documentation: The name of the Payment Method.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OtherPaymentMethodLabel;
    /**
     * The OtherPaymentMethodLabelDescription
     * Meta informations extracted from the WSDL
     * - documentation: The short description of the Payment Method, goes along with the label.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OtherPaymentMethodLabelDescription;
    /**
     * The OtherPaymentMethodLongDescriptionTitle
     * Meta informations extracted from the WSDL
     * - documentation: The title for the long description.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OtherPaymentMethodLongDescriptionTitle;
    /**
     * The OtherPaymentMethodLongDescription
     * Meta informations extracted from the WSDL
     * - documentation: The long description of the Payment Method.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OtherPaymentMethodLongDescription;
    /**
     * The OtherPaymentMethodIcon
     * Meta informations extracted from the WSDL
     * - documentation: The icon of the Payment Method.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OtherPaymentMethodIcon;
    /**
     * The OtherPaymentMethodHideLabel
     * Meta informations extracted from the WSDL
     * - documentation: If this flag is true, then OtherPaymentMethodIcon is required to have a valid value; the label will be hidden and only ICON will be shown.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $OtherPaymentMethodHideLabel;
    /**
     * Constructor method for OtherPaymentMethodDetailsType
     * @uses OtherPaymentMethodDetailsType::setOtherPaymentMethodId()
     * @uses OtherPaymentMethodDetailsType::setOtherPaymentMethodType()
     * @uses OtherPaymentMethodDetailsType::setOtherPaymentMethodLabel()
     * @uses OtherPaymentMethodDetailsType::setOtherPaymentMethodLabelDescription()
     * @uses OtherPaymentMethodDetailsType::setOtherPaymentMethodLongDescriptionTitle()
     * @uses OtherPaymentMethodDetailsType::setOtherPaymentMethodLongDescription()
     * @uses OtherPaymentMethodDetailsType::setOtherPaymentMethodIcon()
     * @uses OtherPaymentMethodDetailsType::setOtherPaymentMethodHideLabel()
     * @param string $otherPaymentMethodId
     * @param string $otherPaymentMethodType
     * @param string $otherPaymentMethodLabel
     * @param string $otherPaymentMethodLabelDescription
     * @param string $otherPaymentMethodLongDescriptionTitle
     * @param string $otherPaymentMethodLongDescription
     * @param string $otherPaymentMethodIcon
     * @param bool $otherPaymentMethodHideLabel
     */
    public function __construct($otherPaymentMethodId = null, $otherPaymentMethodType = null, $otherPaymentMethodLabel = null, $otherPaymentMethodLabelDescription = null, $otherPaymentMethodLongDescriptionTitle = null, $otherPaymentMethodLongDescription = null, $otherPaymentMethodIcon = null, $otherPaymentMethodHideLabel = null)
    {
        $this
            ->setOtherPaymentMethodId($otherPaymentMethodId)
            ->setOtherPaymentMethodType($otherPaymentMethodType)
            ->setOtherPaymentMethodLabel($otherPaymentMethodLabel)
            ->setOtherPaymentMethodLabelDescription($otherPaymentMethodLabelDescription)
            ->setOtherPaymentMethodLongDescriptionTitle($otherPaymentMethodLongDescriptionTitle)
            ->setOtherPaymentMethodLongDescription($otherPaymentMethodLongDescription)
            ->setOtherPaymentMethodIcon($otherPaymentMethodIcon)
            ->setOtherPaymentMethodHideLabel($otherPaymentMethodHideLabel);
    }
    /**
     * Get OtherPaymentMethodId value
     * @return string|null
     */
    public function getOtherPaymentMethodId()
    {
        return $this->OtherPaymentMethodId;
    }
    /**
     * Set OtherPaymentMethodId value
     * @param string $otherPaymentMethodId
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType
     */
    public function setOtherPaymentMethodId($otherPaymentMethodId = null)
    {
        // validation for constraint: string
        if (!is_null($otherPaymentMethodId) && !is_string($otherPaymentMethodId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherPaymentMethodId)), __LINE__);
        }
        $this->OtherPaymentMethodId = $otherPaymentMethodId;
        return $this;
    }
    /**
     * Get OtherPaymentMethodType value
     * @return string|null
     */
    public function getOtherPaymentMethodType()
    {
        return $this->OtherPaymentMethodType;
    }
    /**
     * Set OtherPaymentMethodType value
     * @param string $otherPaymentMethodType
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType
     */
    public function setOtherPaymentMethodType($otherPaymentMethodType = null)
    {
        // validation for constraint: string
        if (!is_null($otherPaymentMethodType) && !is_string($otherPaymentMethodType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherPaymentMethodType)), __LINE__);
        }
        $this->OtherPaymentMethodType = $otherPaymentMethodType;
        return $this;
    }
    /**
     * Get OtherPaymentMethodLabel value
     * @return string|null
     */
    public function getOtherPaymentMethodLabel()
    {
        return $this->OtherPaymentMethodLabel;
    }
    /**
     * Set OtherPaymentMethodLabel value
     * @param string $otherPaymentMethodLabel
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType
     */
    public function setOtherPaymentMethodLabel($otherPaymentMethodLabel = null)
    {
        // validation for constraint: string
        if (!is_null($otherPaymentMethodLabel) && !is_string($otherPaymentMethodLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherPaymentMethodLabel)), __LINE__);
        }
        $this->OtherPaymentMethodLabel = $otherPaymentMethodLabel;
        return $this;
    }
    /**
     * Get OtherPaymentMethodLabelDescription value
     * @return string|null
     */
    public function getOtherPaymentMethodLabelDescription()
    {
        return $this->OtherPaymentMethodLabelDescription;
    }
    /**
     * Set OtherPaymentMethodLabelDescription value
     * @param string $otherPaymentMethodLabelDescription
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType
     */
    public function setOtherPaymentMethodLabelDescription($otherPaymentMethodLabelDescription = null)
    {
        // validation for constraint: string
        if (!is_null($otherPaymentMethodLabelDescription) && !is_string($otherPaymentMethodLabelDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherPaymentMethodLabelDescription)), __LINE__);
        }
        $this->OtherPaymentMethodLabelDescription = $otherPaymentMethodLabelDescription;
        return $this;
    }
    /**
     * Get OtherPaymentMethodLongDescriptionTitle value
     * @return string|null
     */
    public function getOtherPaymentMethodLongDescriptionTitle()
    {
        return $this->OtherPaymentMethodLongDescriptionTitle;
    }
    /**
     * Set OtherPaymentMethodLongDescriptionTitle value
     * @param string $otherPaymentMethodLongDescriptionTitle
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType
     */
    public function setOtherPaymentMethodLongDescriptionTitle($otherPaymentMethodLongDescriptionTitle = null)
    {
        // validation for constraint: string
        if (!is_null($otherPaymentMethodLongDescriptionTitle) && !is_string($otherPaymentMethodLongDescriptionTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherPaymentMethodLongDescriptionTitle)), __LINE__);
        }
        $this->OtherPaymentMethodLongDescriptionTitle = $otherPaymentMethodLongDescriptionTitle;
        return $this;
    }
    /**
     * Get OtherPaymentMethodLongDescription value
     * @return string|null
     */
    public function getOtherPaymentMethodLongDescription()
    {
        return $this->OtherPaymentMethodLongDescription;
    }
    /**
     * Set OtherPaymentMethodLongDescription value
     * @param string $otherPaymentMethodLongDescription
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType
     */
    public function setOtherPaymentMethodLongDescription($otherPaymentMethodLongDescription = null)
    {
        // validation for constraint: string
        if (!is_null($otherPaymentMethodLongDescription) && !is_string($otherPaymentMethodLongDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherPaymentMethodLongDescription)), __LINE__);
        }
        $this->OtherPaymentMethodLongDescription = $otherPaymentMethodLongDescription;
        return $this;
    }
    /**
     * Get OtherPaymentMethodIcon value
     * @return string|null
     */
    public function getOtherPaymentMethodIcon()
    {
        return $this->OtherPaymentMethodIcon;
    }
    /**
     * Set OtherPaymentMethodIcon value
     * @param string $otherPaymentMethodIcon
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType
     */
    public function setOtherPaymentMethodIcon($otherPaymentMethodIcon = null)
    {
        // validation for constraint: string
        if (!is_null($otherPaymentMethodIcon) && !is_string($otherPaymentMethodIcon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherPaymentMethodIcon)), __LINE__);
        }
        $this->OtherPaymentMethodIcon = $otherPaymentMethodIcon;
        return $this;
    }
    /**
     * Get OtherPaymentMethodHideLabel value
     * @return bool|null
     */
    public function getOtherPaymentMethodHideLabel()
    {
        return $this->OtherPaymentMethodHideLabel;
    }
    /**
     * Set OtherPaymentMethodHideLabel value
     * @param bool $otherPaymentMethodHideLabel
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType
     */
    public function setOtherPaymentMethodHideLabel($otherPaymentMethodHideLabel = null)
    {
        $this->OtherPaymentMethodHideLabel = $otherPaymentMethodHideLabel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType
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
