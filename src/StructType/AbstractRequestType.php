<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base type definition of request payload that can carry any type of payload content with optional versioning information and detail level requirements.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class AbstractRequestType extends AbstractStructBase
{
    /**
     * The DetailLevel
     * Meta information extracted from the WSDL
     * - documentation: This specifies the required detail level that is needed by a client application pertaining to a particular data component (e.g., Item, Transaction, etc.). The detail level is specified in the DetailLevelCodeType which has all the
     * enumerated values of the detail level for each component.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DetailLevel;
    /**
     * The ErrorLanguage
     * Meta information extracted from the WSDL
     * - documentation: This should be the standard RFC 3066 language identification tag, e.g., en_US.
     * - minOccurs: 0
     * @var string
     */
    public $ErrorLanguage;
    /**
     * The Version
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setDetailLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetailLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailLevelForArrayConstraintsFromSetDetailLevel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $abstractRequestTypeDetailLevelItem) {
            // validation for constraint: enumeration
            if (!\PayPal\EnumType\DetailLevelCodeType::valueIsValid($abstractRequestTypeDetailLevelItem)) {
                $invalidValues[] = is_object($abstractRequestTypeDetailLevelItem) ? get_class($abstractRequestTypeDetailLevelItem) : sprintf('%s(%s)', gettype($abstractRequestTypeDetailLevelItem), var_export($abstractRequestTypeDetailLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\DetailLevelCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \PayPal\EnumType\DetailLevelCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
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
        // validation for constraint: array
        if ('' !== ($detailLevelArrayErrorMessage = self::validateDetailLevelForArrayConstraintsFromSetDetailLevel($detailLevel))) {
            throw new \InvalidArgumentException($detailLevelArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\DetailLevelCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \PayPal\EnumType\DetailLevelCodeType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorLanguage, true), gettype($errorLanguage)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \PayPal\StructType\AbstractRequestType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
