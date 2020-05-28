<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InstrumentDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: InstrumentDetailsType Promotional Instrument Information.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InstrumentDetailsType extends AbstractStructBase
{
    /**
     * The InstrumentCategory
     * Meta information extracted from the WSDL
     * - documentation: This field holds the category of the instrument only when it is promotional. Return value 1 represents BML, 2 reprasents PLCC/Cobranded.
     * - minOccurs: 0
     * @var string
     */
    public $InstrumentCategory;
    /**
     * The InstrumentID
     * Meta information extracted from the WSDL
     * - documentation: This field holds the InstrumentID issued by external party corresponding to the funding source used in payment.
     * - minOccurs: 0
     * @var string
     */
    public $InstrumentID;
    /**
     * Constructor method for InstrumentDetailsType
     * @uses InstrumentDetailsType::setInstrumentCategory()
     * @uses InstrumentDetailsType::setInstrumentID()
     * @param string $instrumentCategory
     * @param string $instrumentID
     */
    public function __construct($instrumentCategory = null, $instrumentID = null)
    {
        $this
            ->setInstrumentCategory($instrumentCategory)
            ->setInstrumentID($instrumentID);
    }
    /**
     * Get InstrumentCategory value
     * @return string|null
     */
    public function getInstrumentCategory()
    {
        return $this->InstrumentCategory;
    }
    /**
     * Set InstrumentCategory value
     * @param string $instrumentCategory
     * @return \PayPal\StructType\InstrumentDetailsType
     */
    public function setInstrumentCategory($instrumentCategory = null)
    {
        // validation for constraint: string
        if (!is_null($instrumentCategory) && !is_string($instrumentCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instrumentCategory, true), gettype($instrumentCategory)), __LINE__);
        }
        $this->InstrumentCategory = $instrumentCategory;
        return $this;
    }
    /**
     * Get InstrumentID value
     * @return string|null
     */
    public function getInstrumentID()
    {
        return $this->InstrumentID;
    }
    /**
     * Set InstrumentID value
     * @param string $instrumentID
     * @return \PayPal\StructType\InstrumentDetailsType
     */
    public function setInstrumentID($instrumentID = null)
    {
        // validation for constraint: string
        if (!is_null($instrumentID) && !is_string($instrumentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instrumentID, true), gettype($instrumentID)), __LINE__);
        }
        $this->InstrumentID = $instrumentID;
        return $this;
    }
}
