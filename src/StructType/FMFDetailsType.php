<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FMFDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Thes are filters that could result in accept/deny/pending action.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FMFDetailsType extends AbstractStructBase
{
    /**
     * The AcceptFilters
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RiskFilterListType
     */
    public $AcceptFilters;
    /**
     * The PendingFilters
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RiskFilterListType
     */
    public $PendingFilters;
    /**
     * The DenyFilters
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RiskFilterListType
     */
    public $DenyFilters;
    /**
     * The ReportFilters
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RiskFilterListType
     */
    public $ReportFilters;
    /**
     * Constructor method for FMFDetailsType
     * @uses FMFDetailsType::setAcceptFilters()
     * @uses FMFDetailsType::setPendingFilters()
     * @uses FMFDetailsType::setDenyFilters()
     * @uses FMFDetailsType::setReportFilters()
     * @param \PayPal\StructType\RiskFilterListType $acceptFilters
     * @param \PayPal\StructType\RiskFilterListType $pendingFilters
     * @param \PayPal\StructType\RiskFilterListType $denyFilters
     * @param \PayPal\StructType\RiskFilterListType $reportFilters
     */
    public function __construct(\PayPal\StructType\RiskFilterListType $acceptFilters = null, \PayPal\StructType\RiskFilterListType $pendingFilters = null, \PayPal\StructType\RiskFilterListType $denyFilters = null, \PayPal\StructType\RiskFilterListType $reportFilters = null)
    {
        $this
            ->setAcceptFilters($acceptFilters)
            ->setPendingFilters($pendingFilters)
            ->setDenyFilters($denyFilters)
            ->setReportFilters($reportFilters);
    }
    /**
     * Get AcceptFilters value
     * @return \PayPal\StructType\RiskFilterListType|null
     */
    public function getAcceptFilters()
    {
        return $this->AcceptFilters;
    }
    /**
     * Set AcceptFilters value
     * @param \PayPal\StructType\RiskFilterListType $acceptFilters
     * @return \PayPal\StructType\FMFDetailsType
     */
    public function setAcceptFilters(\PayPal\StructType\RiskFilterListType $acceptFilters = null)
    {
        $this->AcceptFilters = $acceptFilters;
        return $this;
    }
    /**
     * Get PendingFilters value
     * @return \PayPal\StructType\RiskFilterListType|null
     */
    public function getPendingFilters()
    {
        return $this->PendingFilters;
    }
    /**
     * Set PendingFilters value
     * @param \PayPal\StructType\RiskFilterListType $pendingFilters
     * @return \PayPal\StructType\FMFDetailsType
     */
    public function setPendingFilters(\PayPal\StructType\RiskFilterListType $pendingFilters = null)
    {
        $this->PendingFilters = $pendingFilters;
        return $this;
    }
    /**
     * Get DenyFilters value
     * @return \PayPal\StructType\RiskFilterListType|null
     */
    public function getDenyFilters()
    {
        return $this->DenyFilters;
    }
    /**
     * Set DenyFilters value
     * @param \PayPal\StructType\RiskFilterListType $denyFilters
     * @return \PayPal\StructType\FMFDetailsType
     */
    public function setDenyFilters(\PayPal\StructType\RiskFilterListType $denyFilters = null)
    {
        $this->DenyFilters = $denyFilters;
        return $this;
    }
    /**
     * Get ReportFilters value
     * @return \PayPal\StructType\RiskFilterListType|null
     */
    public function getReportFilters()
    {
        return $this->ReportFilters;
    }
    /**
     * Set ReportFilters value
     * @param \PayPal\StructType\RiskFilterListType $reportFilters
     * @return \PayPal\StructType\FMFDetailsType
     */
    public function setReportFilters(\PayPal\StructType\RiskFilterListType $reportFilters = null)
    {
        $this->ReportFilters = $reportFilters;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\FMFDetailsType
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
