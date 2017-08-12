<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base type definition of request payload that can carry any type of payload content with optional versioning information and detail level requirements.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class AbstractRequestType extends AbstractStructBase
{
    /**
     * The DetailLevel
     * Meta informations extracted from the WSDL
     * - documentation: This specifies the required detail level that is needed by a client application pertaining to a particular data component (e.g., Item, Transaction, etc.). The detail level is specified in the DetailLevelCodeType which has all the
     * enumerated values of the detail level for each component.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DetailLevel;
    /**
     * The ErrorLanguage
     * Meta informations extracted from the WSDL
     * - documentation: This should be the standard RFC 3066 language identification tag, e.g., en_US.
     * - minOccurs: 0
     * @var string
     */
    public $ErrorLanguage;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: This refers to the version of the request payload schema.
     * @var string
     */
    public $Version;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AbstractRequestType
     * @uses AbstractRequestType::setDetailLevel()
     * @uses AbstractRequestType::setErrorLanguage()
     * @uses AbstractRequestType::setVersion()
     * @uses AbstractRequestType::setAny()
     * @param string[] $detailLevel
     * @param string $errorLanguage
     * @param string $version
     * @param \DOMDocument $any
     */
    public function __construct(array $detailLevel = array(), $errorLanguage = null, $version = null, \DOMDocument $any = null)
    {
        $this
            ->setDetailLevel($detailLevel)
            ->setErrorLanguage($errorLanguage)
            ->setVersion($version)
            ->setAny($any);
    }
    /**
     * Get DetailLevel value
     * @return string[]|null
     */
    public function getDetailLevel()
    {
        return $this->DetailLevel;
    }
    /**
     * Set DetailLevel value
     * @uses \PayPal\EnumType\DetailLevelCodeType::valueIsValid()
     * @uses \PayPal\EnumType\DetailLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $detailLevel
     * @return \PayPal\StructType\AbstractRequestType
     */
    public function setDetailLevel(array $detailLevel = array())
    {
        $invalidValues = array();
        foreach ($detailLevel as $abstractRequestTypeDetailLevelItem) {
            if (!\PayPal\EnumType\DetailLevelCodeType::valueIsValid($abstractRequestTypeDetailLevelItem)) {
                $invalidValues[] = var_export($abstractRequestTypeDetailLevelItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \PayPal\EnumType\DetailLevelCodeType::getValidValues())), __LINE__);
        }
        $this->DetailLevel = $detailLevel;
        return $this;
    }
    /**
     * Add item to DetailLevel value
     * @uses \PayPal\EnumType\DetailLevelCodeType::valueIsValid()
     * @uses \PayPal\EnumType\DetailLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\AbstractRequestType
     */
    public function addToDetailLevel($item)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\DetailLevelCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \PayPal\EnumType\DetailLevelCodeType::getValidValues())), __LINE__);
        }
        $this->DetailLevel[] = $item;
        return $this;
    }
    /**
     * Get ErrorLanguage value
     * @return string|null
     */
    public function getErrorLanguage()
    {
        return $this->ErrorLanguage;
    }
    /**
     * Set ErrorLanguage value
     * @param string $errorLanguage
     * @return \PayPal\StructType\AbstractRequestType
     */
    public function setErrorLanguage($errorLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($errorLanguage) && !is_string($errorLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorLanguage)), __LINE__);
        }
        $this->ErrorLanguage = $errorLanguage;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \PayPal\StructType\AbstractRequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \PayPal\StructType\AbstractRequestType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \PayPal\StructType\AbstractRequestType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AbstractRequestType
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
