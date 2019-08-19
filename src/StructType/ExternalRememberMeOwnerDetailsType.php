<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRememberMeOwnerDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: E-mail address or secure merchant account ID of merchant to associate with new external remember-me.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExternalRememberMeOwnerDetailsType extends AbstractStructBase
{
    /**
     * The ExternalRememberMeOwnerIDType
     * Meta information extracted from the WSDL
     * - documentation: A discriminant that tells SetEC what kind of data the ExternalRememberMeOwnerID parameter contains. Currently, the owner must be either the API actor or omitted/none. In the future, we may allow the owner to be a 3rd party merchant
     * account. Possible values are: None, ignore the ExternalRememberMeOwnerID. An empty value for this field also signifies None. Email, the owner ID is an email address SecureMerchantAccountID, the owner id is a string representing the secure merchant
     * account ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalRememberMeOwnerIDType;
    /**
     * The ExternalRememberMeOwnerID
     * Meta information extracted from the WSDL
     * - documentation: When opting in to bypass login via remember me, this parameter specifies the merchant account associated with the remembered login. Currentl, the owner must be either the API actor or omitted/none. In the future, we may allow the
     * owner to be a 3rd party merchant account. If the Owner ID Type field is not present or "None", this parameter is ignored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalRememberMeOwnerID;
    /**
     * Constructor method for ExternalRememberMeOwnerDetailsType
     * @uses ExternalRememberMeOwnerDetailsType::setExternalRememberMeOwnerIDType()
     * @uses ExternalRememberMeOwnerDetailsType::setExternalRememberMeOwnerID()
     * @param string $externalRememberMeOwnerIDType
     * @param string $externalRememberMeOwnerID
     */
    public function __construct($externalRememberMeOwnerIDType = null, $externalRememberMeOwnerID = null)
    {
        $this
            ->setExternalRememberMeOwnerIDType($externalRememberMeOwnerIDType)
            ->setExternalRememberMeOwnerID($externalRememberMeOwnerID);
    }
    /**
     * Get ExternalRememberMeOwnerIDType value
     * @return string|null
     */
    public function getExternalRememberMeOwnerIDType()
    {
        return $this->ExternalRememberMeOwnerIDType;
    }
    /**
     * Set ExternalRememberMeOwnerIDType value
     * @param string $externalRememberMeOwnerIDType
     * @return \PayPal\StructType\ExternalRememberMeOwnerDetailsType
     */
    public function setExternalRememberMeOwnerIDType($externalRememberMeOwnerIDType = null)
    {
        // validation for constraint: string
        if (!is_null($externalRememberMeOwnerIDType) && !is_string($externalRememberMeOwnerIDType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalRememberMeOwnerIDType, true), gettype($externalRememberMeOwnerIDType)), __LINE__);
        }
        $this->ExternalRememberMeOwnerIDType = $externalRememberMeOwnerIDType;
        return $this;
    }
    /**
     * Get ExternalRememberMeOwnerID value
     * @return string|null
     */
    public function getExternalRememberMeOwnerID()
    {
        return $this->ExternalRememberMeOwnerID;
    }
    /**
     * Set ExternalRememberMeOwnerID value
     * @param string $externalRememberMeOwnerID
     * @return \PayPal\StructType\ExternalRememberMeOwnerDetailsType
     */
    public function setExternalRememberMeOwnerID($externalRememberMeOwnerID = null)
    {
        // validation for constraint: string
        if (!is_null($externalRememberMeOwnerID) && !is_string($externalRememberMeOwnerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalRememberMeOwnerID, true), gettype($externalRememberMeOwnerID)), __LINE__);
        }
        $this->ExternalRememberMeOwnerID = $externalRememberMeOwnerID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ExternalRememberMeOwnerDetailsType
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
