<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ValType extends AbstractStructBase
{
    /**
     * The ValueLiteral
     * @var string
     */
    public $ValueLiteral;
    /**
     * The ValueID
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ValueID;
    /**
     * Constructor method for ValType
     * @uses ValType::setValueLiteral()
     * @uses ValType::setValueID()
     * @param string $valueLiteral
     * @param string $valueID
     */
    public function __construct($valueLiteral = null, $valueID = null)
    {
        $this
            ->setValueLiteral($valueLiteral)
            ->setValueID($valueID);
    }
    /**
     * Get ValueLiteral value
     * @return string|null
     */
    public function getValueLiteral()
    {
        return $this->ValueLiteral;
    }
    /**
     * Set ValueLiteral value
     * @param string $valueLiteral
     * @return \PayPal\StructType\ValType
     */
    public function setValueLiteral($valueLiteral = null)
    {
        // validation for constraint: string
        if (!is_null($valueLiteral) && !is_string($valueLiteral)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueLiteral, true), gettype($valueLiteral)), __LINE__);
        }
        $this->ValueLiteral = $valueLiteral;
        return $this;
    }
    /**
     * Get ValueID value
     * @return string|null
     */
    public function getValueID()
    {
        return $this->ValueID;
    }
    /**
     * Set ValueID value
     * @param string $valueID
     * @return \PayPal\StructType\ValType
     */
    public function setValueID($valueID = null)
    {
        // validation for constraint: string
        if (!is_null($valueID) && !is_string($valueID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueID, true), gettype($valueID)), __LINE__);
        }
        $this->ValueID = $valueID;
        return $this;
    }
}
