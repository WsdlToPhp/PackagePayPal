<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BAUpdateResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BAUpdateResponseType extends AbstractResponseType
{
    /**
     * The BAUpdateResponseDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:BAUpdateResponseDetails
     * @var \PayPal\StructType\BAUpdateResponseDetailsType
     */
    public $BAUpdateResponseDetails;
    /**
     * Constructor method for BAUpdateResponseType
     * @uses BAUpdateResponseType::setBAUpdateResponseDetails()
     * @param \PayPal\StructType\BAUpdateResponseDetailsType $bAUpdateResponseDetails
     */
    public function __construct(\PayPal\StructType\BAUpdateResponseDetailsType $bAUpdateResponseDetails = null)
    {
        $this
            ->setBAUpdateResponseDetails($bAUpdateResponseDetails);
    }
    /**
     * Get BAUpdateResponseDetails value
     * @return \PayPal\StructType\BAUpdateResponseDetailsType|null
     */
    public function getBAUpdateResponseDetails()
    {
        return $this->BAUpdateResponseDetails;
    }
    /**
     * Set BAUpdateResponseDetails value
     * @param \PayPal\StructType\BAUpdateResponseDetailsType $bAUpdateResponseDetails
     * @return \PayPal\StructType\BAUpdateResponseType
     */
    public function setBAUpdateResponseDetails(\PayPal\StructType\BAUpdateResponseDetailsType $bAUpdateResponseDetails = null)
    {
        $this->BAUpdateResponseDetails = $bAUpdateResponseDetails;
        return $this;
    }
}
