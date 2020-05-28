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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setButtonSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setButtonSearchResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateButtonSearchResultForArrayConstraintsFromSetButtonSearchResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bMButtonSearchResponseTypeButtonSearchResultItem) {
            // validation for constraint: itemType
            if (!$bMButtonSearchResponseTypeButtonSearchResultItem instanceof \PayPal\StructType\ButtonSearchResultType) {
                $invalidValues[] = is_object($bMButtonSearchResponseTypeButtonSearchResultItem) ? get_class($bMButtonSearchResponseTypeButtonSearchResultItem) : sprintf('%s(%s)', gettype($bMButtonSearchResponseTypeButtonSearchResultItem), var_export($bMButtonSearchResponseTypeButtonSearchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ButtonSearchResult property can only contain items of type \PayPal\StructType\ButtonSearchResultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ButtonSearchResult value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ButtonSearchResultType[] $buttonSearchResult
     * @return \PayPal\StructType\BMButtonSearchResponseType
     */
    public function setButtonSearchResult(array $buttonSearchResult = array())
    {
        // validation for constraint: array
        if ('' !== ($buttonSearchResultArrayErrorMessage = self::validateButtonSearchResultForArrayConstraintsFromSetButtonSearchResult($buttonSearchResult))) {
            throw new \InvalidArgumentException($buttonSearchResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($buttonSearchResult) && count($buttonSearchResult) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($buttonSearchResult)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The ButtonSearchResult property can only contain items of type \PayPal\StructType\ButtonSearchResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->ButtonSearchResult) && count($this->ButtonSearchResult) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->ButtonSearchResult)), __LINE__);
        }
        $this->ButtonSearchResult[] = $item;
        return $this;
    }
}
