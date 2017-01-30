<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of incentive application on individual bucket.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveInfoType extends AbstractStructBase
{
    /**
     * The IncentiveCode
     * Meta informations extracted from the WSDL
     * - documentation: Incentive redemption code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IncentiveCode;
    /**
     * The ApplyIndication
     * Meta informations extracted from the WSDL
     * - documentation: Defines which bucket or item that the incentive should be applied to.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveApplyIndicationType[]
     */
    public $ApplyIndication;
    /**
     * Constructor method for IncentiveInfoType
     * @uses IncentiveInfoType::setIncentiveCode()
     * @uses IncentiveInfoType::setApplyIndication()
     * @param string $incentiveCode
     * @param \PayPal\StructType\IncentiveApplyIndicationType[] $applyIndication
     */
    public function __construct($incentiveCode = null, array $applyIndication = array())
    {
        $this
            ->setIncentiveCode($incentiveCode)
            ->setApplyIndication($applyIndication);
    }
    /**
     * Get IncentiveCode value
     * @return string|null
     */
    public function getIncentiveCode()
    {
        return $this->IncentiveCode;
    }
    /**
     * Set IncentiveCode value
     * @param string $incentiveCode
     * @return \PayPal\StructType\IncentiveInfoType
     */
    public function setIncentiveCode($incentiveCode = null)
    {
        // validation for constraint: string
        if (!is_null($incentiveCode) && !is_string($incentiveCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($incentiveCode)), __LINE__);
        }
        $this->IncentiveCode = $incentiveCode;
        return $this;
    }
    /**
     * Get ApplyIndication value
     * @return \PayPal\StructType\IncentiveApplyIndicationType[]|null
     */
    public function getApplyIndication()
    {
        return $this->ApplyIndication;
    }
    /**
     * Set ApplyIndication value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveApplyIndicationType[] $applyIndication
     * @return \PayPal\StructType\IncentiveInfoType
     */
    public function setApplyIndication(array $applyIndication = array())
    {
        foreach ($applyIndication as $incentiveInfoTypeApplyIndicationItem) {
            // validation for constraint: itemType
            if (!$incentiveInfoTypeApplyIndicationItem instanceof \PayPal\StructType\IncentiveApplyIndicationType) {
                throw new \InvalidArgumentException(sprintf('The ApplyIndication property can only contain items of \PayPal\StructType\IncentiveApplyIndicationType, "%s" given', is_object($incentiveInfoTypeApplyIndicationItem) ? get_class($incentiveInfoTypeApplyIndicationItem) : gettype($incentiveInfoTypeApplyIndicationItem)), __LINE__);
            }
        }
        $this->ApplyIndication = $applyIndication;
        return $this;
    }
    /**
     * Add item to ApplyIndication value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveApplyIndicationType $item
     * @return \PayPal\StructType\IncentiveInfoType
     */
    public function addToApplyIndication(\PayPal\StructType\IncentiveApplyIndicationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\IncentiveApplyIndicationType) {
            throw new \InvalidArgumentException(sprintf('The ApplyIndication property can only contain items of \PayPal\StructType\IncentiveApplyIndicationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ApplyIndication[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\IncentiveInfoType
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
