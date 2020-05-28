<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentificationInfoType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IdentificationInfoType extends AbstractStructBase
{
    /**
     * The MobileIDInfo
     * Meta information extracted from the WSDL
     * - documentation: Mobile specific buyer identification.
     * - minOccurs: 0
     * @var \PayPal\StructType\MobileIDInfoType
     */
    public $MobileIDInfo;
    /**
     * The RememberMeIDInfo
     * Meta information extracted from the WSDL
     * - documentation: Contains login bypass information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RememberMeIDInfoType
     */
    public $RememberMeIDInfo;
    /**
     * The IdentityTokenInfo
     * Meta information extracted from the WSDL
     * - documentation: Identity Access Token.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\IdentityTokenInfoType
     */
    public $IdentityTokenInfo;
    /**
     * Constructor method for IdentificationInfoType
     * @uses IdentificationInfoType::setMobileIDInfo()
     * @uses IdentificationInfoType::setRememberMeIDInfo()
     * @uses IdentificationInfoType::setIdentityTokenInfo()
     * @param \PayPal\StructType\MobileIDInfoType $mobileIDInfo
     * @param \PayPal\StructType\RememberMeIDInfoType $rememberMeIDInfo
     * @param \PayPal\StructType\IdentityTokenInfoType $identityTokenInfo
     */
    public function __construct(\PayPal\StructType\MobileIDInfoType $mobileIDInfo = null, \PayPal\StructType\RememberMeIDInfoType $rememberMeIDInfo = null, \PayPal\StructType\IdentityTokenInfoType $identityTokenInfo = null)
    {
        $this
            ->setMobileIDInfo($mobileIDInfo)
            ->setRememberMeIDInfo($rememberMeIDInfo)
            ->setIdentityTokenInfo($identityTokenInfo);
    }
    /**
     * Get MobileIDInfo value
     * @return \PayPal\StructType\MobileIDInfoType|null
     */
    public function getMobileIDInfo()
    {
        return $this->MobileIDInfo;
    }
    /**
     * Set MobileIDInfo value
     * @param \PayPal\StructType\MobileIDInfoType $mobileIDInfo
     * @return \PayPal\StructType\IdentificationInfoType
     */
    public function setMobileIDInfo(\PayPal\StructType\MobileIDInfoType $mobileIDInfo = null)
    {
        $this->MobileIDInfo = $mobileIDInfo;
        return $this;
    }
    /**
     * Get RememberMeIDInfo value
     * @return \PayPal\StructType\RememberMeIDInfoType|null
     */
    public function getRememberMeIDInfo()
    {
        return $this->RememberMeIDInfo;
    }
    /**
     * Set RememberMeIDInfo value
     * @param \PayPal\StructType\RememberMeIDInfoType $rememberMeIDInfo
     * @return \PayPal\StructType\IdentificationInfoType
     */
    public function setRememberMeIDInfo(\PayPal\StructType\RememberMeIDInfoType $rememberMeIDInfo = null)
    {
        $this->RememberMeIDInfo = $rememberMeIDInfo;
        return $this;
    }
    /**
     * Get IdentityTokenInfo value
     * @return \PayPal\StructType\IdentityTokenInfoType|null
     */
    public function getIdentityTokenInfo()
    {
        return $this->IdentityTokenInfo;
    }
    /**
     * Set IdentityTokenInfo value
     * @param \PayPal\StructType\IdentityTokenInfoType $identityTokenInfo
     * @return \PayPal\StructType\IdentificationInfoType
     */
    public function setIdentityTokenInfo(\PayPal\StructType\IdentityTokenInfoType $identityTokenInfo = null)
    {
        $this->IdentityTokenInfo = $identityTokenInfo;
        return $this;
    }
}
