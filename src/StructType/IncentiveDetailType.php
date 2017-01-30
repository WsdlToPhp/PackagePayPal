<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveDetailType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveDetailType extends AbstractStructBase
{
    /**
     * The RedemptionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RedemptionCode;
    /**
     * The DisplayCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayCode;
    /**
     * The ProgramId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProgramId;
    /**
     * The IncentiveType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IncentiveType;
    /**
     * The IncentiveDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IncentiveDescription;
    /**
     * The AppliedTo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveAppliedToType[]
     */
    public $AppliedTo;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ErrorCode;
    /**
     * Constructor method for IncentiveDetailType
     * @uses IncentiveDetailType::setRedemptionCode()
     * @uses IncentiveDetailType::setDisplayCode()
     * @uses IncentiveDetailType::setProgramId()
     * @uses IncentiveDetailType::setIncentiveType()
     * @uses IncentiveDetailType::setIncentiveDescription()
     * @uses IncentiveDetailType::setAppliedTo()
     * @uses IncentiveDetailType::setStatus()
     * @uses IncentiveDetailType::setErrorCode()
     * @param string $redemptionCode
     * @param string $displayCode
     * @param string $programId
     * @param string $incentiveType
     * @param string $incentiveDescription
     * @param \PayPal\StructType\IncentiveAppliedToType[] $appliedTo
     * @param string $status
     * @param string $errorCode
     */
    public function __construct($redemptionCode = null, $displayCode = null, $programId = null, $incentiveType = null, $incentiveDescription = null, array $appliedTo = array(), $status = null, $errorCode = null)
    {
        $this
            ->setRedemptionCode($redemptionCode)
            ->setDisplayCode($displayCode)
            ->setProgramId($programId)
            ->setIncentiveType($incentiveType)
            ->setIncentiveDescription($incentiveDescription)
            ->setAppliedTo($appliedTo)
            ->setStatus($status)
            ->setErrorCode($errorCode);
    }
    /**
     * Get RedemptionCode value
     * @return string|null
     */
    public function getRedemptionCode()
    {
        return $this->RedemptionCode;
    }
    /**
     * Set RedemptionCode value
     * @param string $redemptionCode
     * @return \PayPal\StructType\IncentiveDetailType
     */
    public function setRedemptionCode($redemptionCode = null)
    {
        // validation for constraint: string
        if (!is_null($redemptionCode) && !is_string($redemptionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redemptionCode)), __LINE__);
        }
        $this->RedemptionCode = $redemptionCode;
        return $this;
    }
    /**
     * Get DisplayCode value
     * @return string|null
     */
    public function getDisplayCode()
    {
        return $this->DisplayCode;
    }
    /**
     * Set DisplayCode value
     * @param string $displayCode
     * @return \PayPal\StructType\IncentiveDetailType
     */
    public function setDisplayCode($displayCode = null)
    {
        // validation for constraint: string
        if (!is_null($displayCode) && !is_string($displayCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayCode)), __LINE__);
        }
        $this->DisplayCode = $displayCode;
        return $this;
    }
    /**
     * Get ProgramId value
     * @return string|null
     */
    public function getProgramId()
    {
        return $this->ProgramId;
    }
    /**
     * Set ProgramId value
     * @param string $programId
     * @return \PayPal\StructType\IncentiveDetailType
     */
    public function setProgramId($programId = null)
    {
        // validation for constraint: string
        if (!is_null($programId) && !is_string($programId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programId)), __LINE__);
        }
        $this->ProgramId = $programId;
        return $this;
    }
    /**
     * Get IncentiveType value
     * @return string|null
     */
    public function getIncentiveType()
    {
        return $this->IncentiveType;
    }
    /**
     * Set IncentiveType value
     * @uses \PayPal\EnumType\IncentiveTypeCodeType::valueIsValid()
     * @uses \PayPal\EnumType\IncentiveTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $incentiveType
     * @return \PayPal\StructType\IncentiveDetailType
     */
    public function setIncentiveType($incentiveType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\IncentiveTypeCodeType::valueIsValid($incentiveType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $incentiveType, implode(', ', \PayPal\EnumType\IncentiveTypeCodeType::getValidValues())), __LINE__);
        }
        $this->IncentiveType = $incentiveType;
        return $this;
    }
    /**
     * Get IncentiveDescription value
     * @return string|null
     */
    public function getIncentiveDescription()
    {
        return $this->IncentiveDescription;
    }
    /**
     * Set IncentiveDescription value
     * @param string $incentiveDescription
     * @return \PayPal\StructType\IncentiveDetailType
     */
    public function setIncentiveDescription($incentiveDescription = null)
    {
        // validation for constraint: string
        if (!is_null($incentiveDescription) && !is_string($incentiveDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($incentiveDescription)), __LINE__);
        }
        $this->IncentiveDescription = $incentiveDescription;
        return $this;
    }
    /**
     * Get AppliedTo value
     * @return \PayPal\StructType\IncentiveAppliedToType[]|null
     */
    public function getAppliedTo()
    {
        return $this->AppliedTo;
    }
    /**
     * Set AppliedTo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveAppliedToType[] $appliedTo
     * @return \PayPal\StructType\IncentiveDetailType
     */
    public function setAppliedTo(array $appliedTo = array())
    {
        foreach ($appliedTo as $incentiveDetailTypeAppliedToItem) {
            // validation for constraint: itemType
            if (!$incentiveDetailTypeAppliedToItem instanceof \PayPal\StructType\IncentiveAppliedToType) {
                throw new \InvalidArgumentException(sprintf('The AppliedTo property can only contain items of \PayPal\StructType\IncentiveAppliedToType, "%s" given', is_object($incentiveDetailTypeAppliedToItem) ? get_class($incentiveDetailTypeAppliedToItem) : gettype($incentiveDetailTypeAppliedToItem)), __LINE__);
            }
        }
        $this->AppliedTo = $appliedTo;
        return $this;
    }
    /**
     * Add item to AppliedTo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveAppliedToType $item
     * @return \PayPal\StructType\IncentiveDetailType
     */
    public function addToAppliedTo(\PayPal\StructType\IncentiveAppliedToType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\IncentiveAppliedToType) {
            throw new \InvalidArgumentException(sprintf('The AppliedTo property can only contain items of \PayPal\StructType\IncentiveAppliedToType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AppliedTo[] = $item;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \PayPal\StructType\IncentiveDetailType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param string $errorCode
     * @return \PayPal\StructType\IncentiveDetailType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\IncentiveDetailType
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
