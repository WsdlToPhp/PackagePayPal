<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThreeDSecureRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Common 3DS fields. Common for both GTD and DCC API's.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ThreeDSecureRequestType extends AbstractStructBase
{
    /**
     * The Eci3ds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Eci3ds;
    /**
     * The Cavv
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Cavv;
    /**
     * The Xid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Xid;
    /**
     * The MpiVendor3ds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MpiVendor3ds;
    /**
     * The AuthStatus3ds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AuthStatus3ds;
    /**
     * Constructor method for ThreeDSecureRequestType
     * @uses ThreeDSecureRequestType::setEci3ds()
     * @uses ThreeDSecureRequestType::setCavv()
     * @uses ThreeDSecureRequestType::setXid()
     * @uses ThreeDSecureRequestType::setMpiVendor3ds()
     * @uses ThreeDSecureRequestType::setAuthStatus3ds()
     * @param string $eci3ds
     * @param string $cavv
     * @param string $xid
     * @param string $mpiVendor3ds
     * @param string $authStatus3ds
     */
    public function __construct($eci3ds = null, $cavv = null, $xid = null, $mpiVendor3ds = null, $authStatus3ds = null)
    {
        $this
            ->setEci3ds($eci3ds)
            ->setCavv($cavv)
            ->setXid($xid)
            ->setMpiVendor3ds($mpiVendor3ds)
            ->setAuthStatus3ds($authStatus3ds);
    }
    /**
     * Get Eci3ds value
     * @return string|null
     */
    public function getEci3ds()
    {
        return $this->Eci3ds;
    }
    /**
     * Set Eci3ds value
     * @param string $eci3ds
     * @return \PayPal\StructType\ThreeDSecureRequestType
     */
    public function setEci3ds($eci3ds = null)
    {
        // validation for constraint: string
        if (!is_null($eci3ds) && !is_string($eci3ds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eci3ds, true), gettype($eci3ds)), __LINE__);
        }
        $this->Eci3ds = $eci3ds;
        return $this;
    }
    /**
     * Get Cavv value
     * @return string|null
     */
    public function getCavv()
    {
        return $this->Cavv;
    }
    /**
     * Set Cavv value
     * @param string $cavv
     * @return \PayPal\StructType\ThreeDSecureRequestType
     */
    public function setCavv($cavv = null)
    {
        // validation for constraint: string
        if (!is_null($cavv) && !is_string($cavv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cavv, true), gettype($cavv)), __LINE__);
        }
        $this->Cavv = $cavv;
        return $this;
    }
    /**
     * Get Xid value
     * @return string|null
     */
    public function getXid()
    {
        return $this->Xid;
    }
    /**
     * Set Xid value
     * @param string $xid
     * @return \PayPal\StructType\ThreeDSecureRequestType
     */
    public function setXid($xid = null)
    {
        // validation for constraint: string
        if (!is_null($xid) && !is_string($xid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xid, true), gettype($xid)), __LINE__);
        }
        $this->Xid = $xid;
        return $this;
    }
    /**
     * Get MpiVendor3ds value
     * @return string|null
     */
    public function getMpiVendor3ds()
    {
        return $this->MpiVendor3ds;
    }
    /**
     * Set MpiVendor3ds value
     * @param string $mpiVendor3ds
     * @return \PayPal\StructType\ThreeDSecureRequestType
     */
    public function setMpiVendor3ds($mpiVendor3ds = null)
    {
        // validation for constraint: string
        if (!is_null($mpiVendor3ds) && !is_string($mpiVendor3ds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mpiVendor3ds, true), gettype($mpiVendor3ds)), __LINE__);
        }
        $this->MpiVendor3ds = $mpiVendor3ds;
        return $this;
    }
    /**
     * Get AuthStatus3ds value
     * @return string|null
     */
    public function getAuthStatus3ds()
    {
        return $this->AuthStatus3ds;
    }
    /**
     * Set AuthStatus3ds value
     * @param string $authStatus3ds
     * @return \PayPal\StructType\ThreeDSecureRequestType
     */
    public function setAuthStatus3ds($authStatus3ds = null)
    {
        // validation for constraint: string
        if (!is_null($authStatus3ds) && !is_string($authStatus3ds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authStatus3ds, true), gettype($authStatus3ds)), __LINE__);
        }
        $this->AuthStatus3ds = $authStatus3ds;
        return $this;
    }
}
