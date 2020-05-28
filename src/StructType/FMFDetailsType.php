<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FMFDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Thes are filters that could result in accept/deny/pending action.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FMFDetailsType extends AbstractStructBase
{
    /**
     * The AcceptFilters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RiskFilterListType
     */
    public $AcceptFilters;
    /**
     * The PendingFilters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RiskFilterListType
     */
    public $PendingFilters;
    /**
     * The DenyFilters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RiskFilterListType
     */
    public $DenyFilters;
    /**
     * The ReportFilters
     * Meta information extracted from the WSDL
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
}
