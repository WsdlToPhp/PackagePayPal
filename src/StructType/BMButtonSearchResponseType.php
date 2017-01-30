<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMButtonSearchResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMButtonSearchResponseType extends AbstractResponseType
{
    /**
     * The ButtonSearchResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: ebl:ButtonSearchResult
     * @var \PayPal\StructType\ButtonSearchResultType[]
     */
    public $ButtonSearchResult;
    /**
     * Constructor method for BMButtonSearchResponseType
     * @uses BMButtonSearchResponseType::setButtonSearchResult()
     * @param \PayPal\StructType\ButtonSearchResultType[] $buttonSearchResult
     */
    public function __construct(array $buttonSearchResult = array())
    {
        $this
            ->setButtonSearchResult($buttonSearchResult);
    }
    /**
     * Get ButtonSearchResult value
     * @return \PayPal\StructType\ButtonSearchResultType[]|null
     */
    public function getButtonSearchResult()
    {
        return $this->ButtonSearchResult;
    }
    /**
     * Set ButtonSearchResult value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ButtonSearchResultType[] $buttonSearchResult
     * @return \PayPal\StructType\BMButtonSearchResponseType
     */
    public function setButtonSearchResult(array $buttonSearchResult = array())
    {
        foreach ($buttonSearchResult as $bMButtonSearchResponseTypeButtonSearchResultItem) {
            // validation for constraint: itemType
            if (!$bMButtonSearchResponseTypeButtonSearchResultItem instanceof \PayPal\StructType\ButtonSearchResultType) {
                throw new \InvalidArgumentException(sprintf('The ButtonSearchResult property can only contain items of \PayPal\StructType\ButtonSearchResultType, "%s" given', is_object($bMButtonSearchResponseTypeButtonSearchResultItem) ? get_class($bMButtonSearchResponseTypeButtonSearchResultItem) : gettype($bMButtonSearchResponseTypeButtonSearchResultItem)), __LINE__);
            }
        }
        $this->ButtonSearchResult = $buttonSearchResult;
        return $this;
    }
    /**
     * Add item to ButtonSearchResult value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ButtonSearchResultType $item
     * @return \PayPal\StructType\BMButtonSearchResponseType
     */
    public function addToButtonSearchResult(\PayPal\StructType\ButtonSearchResultType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\ButtonSearchResultType) {
            throw new \InvalidArgumentException(sprintf('The ButtonSearchResult property can only contain items of \PayPal\StructType\ButtonSearchResultType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ButtonSearchResult[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMButtonSearchResponseType
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
