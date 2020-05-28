<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of incentive application on individual bucket.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveInfoType extends AbstractStructBase
{
    /**
     * The IncentiveCode
     * Meta information extracted from the WSDL
     * - documentation: Incentive redemption code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IncentiveCode;
    /**
     * The ApplyIndication
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incentiveCode, true), gettype($incentiveCode)), __LINE__);
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
     * This method is responsible for validating the values passed to the setApplyIndication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplyIndication method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplyIndicationForArrayConstraintsFromSetApplyIndication(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $incentiveInfoTypeApplyIndicationItem) {
            // validation for constraint: itemType
            if (!$incentiveInfoTypeApplyIndicationItem instanceof \PayPal\StructType\IncentiveApplyIndicationType) {
                $invalidValues[] = is_object($incentiveInfoTypeApplyIndicationItem) ? get_class($incentiveInfoTypeApplyIndicationItem) : sprintf('%s(%s)', gettype($incentiveInfoTypeApplyIndicationItem), var_export($incentiveInfoTypeApplyIndicationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ApplyIndication property can only contain items of type \PayPal\StructType\IncentiveApplyIndicationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ApplyIndication value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveApplyIndicationType[] $applyIndication
     * @return \PayPal\StructType\IncentiveInfoType
     */
    public function setApplyIndication(array $applyIndication = array())
    {
        // validation for constraint: array
        if ('' !== ($applyIndicationArrayErrorMessage = self::validateApplyIndicationForArrayConstraintsFromSetApplyIndication($applyIndication))) {
            throw new \InvalidArgumentException($applyIndicationArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The ApplyIndication property can only contain items of type \PayPal\StructType\IncentiveApplyIndicationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ApplyIndication[] = $item;
        return $this;
    }
}
