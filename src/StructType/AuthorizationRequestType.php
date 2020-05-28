<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthorizationRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AuthorizationRequestType extends AbstractStructBase
{
    /**
     * The IsRequested
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsRequested;
    /**
     * Constructor method for AuthorizationRequestType
     * @uses AuthorizationRequestType::setIsRequested()
     * @param bool $isRequested
     */
    public function __construct($isRequested = null)
    {
        $this
            ->setIsRequested($isRequested);
    }
    /**
     * Get IsRequested value
     * @return bool
     */
    public function getIsRequested()
    {
        return $this->IsRequested;
    }
    /**
     * Set IsRequested value
     * @param bool $isRequested
     * @return \PayPal\StructType\AuthorizationRequestType
     */
    public function setIsRequested($isRequested = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRequested) && !is_bool($isRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRequested, true), gettype($isRequested)), __LINE__);
        }
        $this->IsRequested = $isRequested;
        return $this;
    }
}
