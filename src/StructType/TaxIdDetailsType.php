<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxIdDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about the payer's tax info passed in by the merchant or partner. Optional.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TaxIdDetailsType extends AbstractStructBase
{
    /**
     * The TaxIdType
     * Meta information extracted from the WSDL
     * - documentation: The payer's Tax ID type; CNPJ/CPF for BR country.
     * - minOccurs: 0
     * @var string
     */
    public $TaxIdType;
    /**
     * The TaxId
     * Meta information extracted from the WSDL
     * - documentation: The payer's Tax ID
     * - minOccurs: 0
     * @var string
     */
    public $TaxId;
    /**
     * Constructor method for TaxIdDetailsType
     * @uses TaxIdDetailsType::setTaxIdType()
     * @uses TaxIdDetailsType::setTaxId()
     * @param string $taxIdType
     * @param string $taxId
     */
    public function __construct($taxIdType = null, $taxId = null)
    {
        $this
            ->setTaxIdType($taxIdType)
            ->setTaxId($taxId);
    }
    /**
     * Get TaxIdType value
     * @return string|null
     */
    public function getTaxIdType()
    {
        return $this->TaxIdType;
    }
    /**
     * Set TaxIdType value
     * @param string $taxIdType
     * @return \PayPal\StructType\TaxIdDetailsType
     */
    public function setTaxIdType($taxIdType = null)
    {
        // validation for constraint: string
        if (!is_null($taxIdType) && !is_string($taxIdType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxIdType, true), gettype($taxIdType)), __LINE__);
        }
        $this->TaxIdType = $taxIdType;
        return $this;
    }
    /**
     * Get TaxId value
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->TaxId;
    }
    /**
     * Set TaxId value
     * @param string $taxId
     * @return \PayPal\StructType\TaxIdDetailsType
     */
    public function setTaxId($taxId = null)
    {
        // validation for constraint: string
        if (!is_null($taxId) && !is_string($taxId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxId, true), gettype($taxId)), __LINE__);
        }
        $this->TaxId = $taxId;
        return $this;
    }
}
