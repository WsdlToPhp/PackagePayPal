<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayControlDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains elements that allows customization of display (user interface) elements.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DisplayControlDetailsType extends AbstractStructBase
{
    /**
     * The InContextPaymentButtonImage
     * Meta information extracted from the WSDL
     * - documentation: Optional URL to pay button image for the inline checkout flow. Currently applicable only to the inline checkout flow when the FlowControlDetails/InlineReturnURL is present.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InContextPaymentButtonImage;
    /**
     * Constructor method for DisplayControlDetailsType
     * @uses DisplayControlDetailsType::setInContextPaymentButtonImage()
     * @param string $inContextPaymentButtonImage
     */
    public function __construct($inContextPaymentButtonImage = null)
    {
        $this
            ->setInContextPaymentButtonImage($inContextPaymentButtonImage);
    }
    /**
     * Get InContextPaymentButtonImage value
     * @return string|null
     */
    public function getInContextPaymentButtonImage()
    {
        return $this->InContextPaymentButtonImage;
    }
    /**
     * Set InContextPaymentButtonImage value
     * @param string $inContextPaymentButtonImage
     * @return \PayPal\StructType\DisplayControlDetailsType
     */
    public function setInContextPaymentButtonImage($inContextPaymentButtonImage = null)
    {
        // validation for constraint: string
        if (!is_null($inContextPaymentButtonImage) && !is_string($inContextPaymentButtonImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inContextPaymentButtonImage, true), gettype($inContextPaymentButtonImage)), __LINE__);
        }
        $this->InContextPaymentButtonImage = $inContextPaymentButtonImage;
        return $this;
    }
}
