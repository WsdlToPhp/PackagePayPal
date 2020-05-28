<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecurringPaymentsProfileDetailsRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetRecurringPaymentsProfileDetailsRequestType extends AbstractRequestType
{
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProfileID;
    /**
     * Constructor method for GetRecurringPaymentsProfileDetailsRequestType
     * @uses GetRecurringPaymentsProfileDetailsRequestType::setProfileID()
     * @param string $profileID
     */
    public function __construct($profileID = null)
    {
        $this
            ->setProfileID($profileID);
    }
    /**
     * Get ProfileID value
     * @return string
     */
    public function getProfileID()
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType
     */
    public function setProfileID($profileID = null)
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileID, true), gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        return $this;
    }
}
