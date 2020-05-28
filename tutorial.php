<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \PayPal\ClassMap::get(),
);
/**
 * Samples for Refund ServiceType
 */
$refund = new \PayPal\ServiceType\Refund($options);
$refund->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for RefundTransaction operation/method
 */
if ($refund->RefundTransaction(new \PayPal\StructType\RefundTransactionReq()) !== false) {
    print_r($refund->getResult());
} else {
    print_r($refund->getLastError());
}
/**
 * Samples for Initiate ServiceType
 */
$initiate = new \PayPal\ServiceType\Initiate($options);
$initiate->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for InitiateRecoup operation/method
 */
if ($initiate->InitiateRecoup(new \PayPal\StructType\InitiateRecoupReq()) !== false) {
    print_r($initiate->getResult());
} else {
    print_r($initiate->getLastError());
}
/**
 * Samples for Complete ServiceType
 */
$complete = new \PayPal\ServiceType\Complete($options);
$complete->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for CompleteRecoup operation/method
 */
if ($complete->CompleteRecoup(new \PayPal\StructType\CompleteRecoupReq()) !== false) {
    print_r($complete->getResult());
} else {
    print_r($complete->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \PayPal\ServiceType\Cancel($options);
$cancel->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for CancelRecoup operation/method
 */
if ($cancel->CancelRecoup(new \PayPal\StructType\CancelRecoupReq()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \PayPal\ServiceType\Get($options);
$get->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for GetTransactionDetails operation/method
 */
if ($get->GetTransactionDetails(new \PayPal\StructType\GetTransactionDetailsReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBoardingDetails operation/method
 */
if ($get->GetBoardingDetails(new \PayPal\StructType\GetBoardingDetailsReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMobileStatus operation/method
 */
if ($get->GetMobileStatus(new \PayPal\StructType\GetMobileStatusReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBalance operation/method
 */
if ($get->GetBalance(new \PayPal\StructType\GetBalanceReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPalDetails operation/method
 */
if ($get->GetPalDetails(new \PayPal\StructType\GetPalDetailsReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAuthDetails operation/method
 */
if ($get->GetAuthDetails(new \PayPal\StructType\GetAuthDetailsReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAccessPermissionDetails operation/method
 */
if ($get->GetAccessPermissionDetails(new \PayPal\StructType\GetAccessPermissionDetailsReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetIncentiveEvaluation operation/method
 */
if ($get->GetIncentiveEvaluation(new \PayPal\StructType\GetIncentiveEvaluationReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetExpressCheckoutDetails operation/method
 */
if ($get->GetExpressCheckoutDetails(new \PayPal\StructType\GetExpressCheckoutDetailsReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBillingAgreementCustomerDetails operation/method
 */
if ($get->GetBillingAgreementCustomerDetails(new \PayPal\StructType\GetBillingAgreementCustomerDetailsReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRecurringPaymentsProfileDetails operation/method
 */
if ($get->GetRecurringPaymentsProfileDetails(new \PayPal\StructType\GetRecurringPaymentsProfileDetailsReq()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for BMC ServiceType
 */
$bMC = new \PayPal\ServiceType\BMC($options);
$bMC->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for BMCreateButton operation/method
 */
if ($bMC->BMCreateButton(new \PayPal\StructType\BMCreateButtonReq()) !== false) {
    print_r($bMC->getResult());
} else {
    print_r($bMC->getLastError());
}
/**
 * Samples for BMU ServiceType
 */
$bMU = new \PayPal\ServiceType\BMU($options);
$bMU->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for BMUpdateButton operation/method
 */
if ($bMU->BMUpdateButton(new \PayPal\StructType\BMUpdateButtonReq()) !== false) {
    print_r($bMU->getResult());
} else {
    print_r($bMU->getLastError());
}
/**
 * Samples for BMS ServiceType
 */
$bMS = new \PayPal\ServiceType\BMS($options);
$bMS->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for BMSetInventory operation/method
 */
if ($bMS->BMSetInventory(new \PayPal\StructType\BMSetInventoryReq()) !== false) {
    print_r($bMS->getResult());
} else {
    print_r($bMS->getLastError());
}
/**
 * Samples for BMG ServiceType
 */
$bMG = new \PayPal\ServiceType\BMG($options);
$bMG->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for BMGetButtonDetails operation/method
 */
if ($bMG->BMGetButtonDetails(new \PayPal\StructType\BMGetButtonDetailsReq()) !== false) {
    print_r($bMG->getResult());
} else {
    print_r($bMG->getLastError());
}
/**
 * Sample call for BMGetInventory operation/method
 */
if ($bMG->BMGetInventory(new \PayPal\StructType\BMGetInventoryReq()) !== false) {
    print_r($bMG->getResult());
} else {
    print_r($bMG->getLastError());
}
/**
 * Samples for BMM ServiceType
 */
$bMM = new \PayPal\ServiceType\BMM($options);
$bMM->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for BMManageButtonStatus operation/method
 */
if ($bMM->BMManageButtonStatus(new \PayPal\StructType\BMManageButtonStatusReq()) !== false) {
    print_r($bMM->getResult());
} else {
    print_r($bMM->getLastError());
}
/**
 * Samples for BMB ServiceType
 */
$bMB = new \PayPal\ServiceType\BMB($options);
$bMB->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for BMButtonSearch operation/method
 */
if ($bMB->BMButtonSearch(new \PayPal\StructType\BMButtonSearchReq()) !== false) {
    print_r($bMB->getResult());
} else {
    print_r($bMB->getLastError());
}
/**
 * Samples for Bill ServiceType
 */
$bill = new \PayPal\ServiceType\Bill($options);
$bill->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for BillUser operation/method
 */
if ($bill->BillUser(new \PayPal\StructType\BillUserReq()) !== false) {
    print_r($bill->getResult());
} else {
    print_r($bill->getLastError());
}
/**
 * Sample call for BillAgreementUpdate operation/method
 */
if ($bill->BillAgreementUpdate(new \PayPal\StructType\BillAgreementUpdateReq()) !== false) {
    print_r($bill->getResult());
} else {
    print_r($bill->getLastError());
}
/**
 * Sample call for BillOutstandingAmount operation/method
 */
if ($bill->BillOutstandingAmount(new \PayPal\StructType\BillOutstandingAmountReq()) !== false) {
    print_r($bill->getResult());
} else {
    print_r($bill->getLastError());
}
/**
 * Samples for Transaction ServiceType
 */
$transaction = new \PayPal\ServiceType\Transaction($options);
$transaction->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for TransactionSearch operation/method
 */
if ($transaction->TransactionSearch(new \PayPal\StructType\TransactionSearchReq()) !== false) {
    print_r($transaction->getResult());
} else {
    print_r($transaction->getLastError());
}
/**
 * Samples for Mass ServiceType
 */
$mass = new \PayPal\ServiceType\Mass($options);
$mass->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for MassPay operation/method
 */
if ($mass->MassPay(new \PayPal\StructType\MassPayReq()) !== false) {
    print_r($mass->getResult());
} else {
    print_r($mass->getLastError());
}
/**
 * Samples for Address ServiceType
 */
$address = new \PayPal\ServiceType\Address($options);
$address->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for AddressVerify operation/method
 */
if ($address->AddressVerify(new \PayPal\StructType\AddressVerifyReq()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Samples for Enter ServiceType
 */
$enter = new \PayPal\ServiceType\Enter($options);
$enter->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for EnterBoarding operation/method
 */
if ($enter->EnterBoarding(new \PayPal\StructType\EnterBoardingReq()) !== false) {
    print_r($enter->getResult());
} else {
    print_r($enter->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \PayPal\ServiceType\Create($options);
$create->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for CreateMobilePayment operation/method
 */
if ($create->CreateMobilePayment(new \PayPal\StructType\CreateMobilePaymentReq()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateBillingAgreement operation/method
 */
if ($create->CreateBillingAgreement(new \PayPal\StructType\CreateBillingAgreementReq()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateRecurringPaymentsProfile operation/method
 */
if ($create->CreateRecurringPaymentsProfile(new \PayPal\StructType\CreateRecurringPaymentsProfileReq()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \PayPal\ServiceType\Set($options);
$set->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for SetMobileCheckout operation/method
 */
if ($set->SetMobileCheckout(new \PayPal\StructType\SetMobileCheckoutReq()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetAuthFlowParam operation/method
 */
if ($set->SetAuthFlowParam(new \PayPal\StructType\SetAuthFlowParamReq()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetAccessPermissions operation/method
 */
if ($set->SetAccessPermissions(new \PayPal\StructType\SetAccessPermissionsReq()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetExpressCheckout operation/method
 */
if ($set->SetExpressCheckout(new \PayPal\StructType\SetExpressCheckoutReq()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetCustomerBillingAgreement operation/method
 */
if ($set->SetCustomerBillingAgreement(new \PayPal\StructType\SetCustomerBillingAgreementReq()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Do ServiceType
 */
$do = new \PayPal\ServiceType\_Do($options);
$do->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for DoMobileCheckoutPayment operation/method
 */
if ($do->DoMobileCheckoutPayment(new \PayPal\StructType\DoMobileCheckoutPaymentReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoExpressCheckoutPayment operation/method
 */
if ($do->DoExpressCheckoutPayment(new \PayPal\StructType\DoExpressCheckoutPaymentReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoUATPExpressCheckoutPayment operation/method
 */
if ($do->DoUATPExpressCheckoutPayment(new \PayPal\StructType\DoUATPExpressCheckoutPaymentReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoDirectPayment operation/method
 */
if ($do->DoDirectPayment(new \PayPal\StructType\DoDirectPaymentReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoCancel operation/method
 */
if ($do->DoCancel(new \PayPal\StructType\DoCancelReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoCapture operation/method
 */
if ($do->DoCapture(new \PayPal\StructType\DoCaptureReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoReauthorization operation/method
 */
if ($do->DoReauthorization(new \PayPal\StructType\DoReauthorizationReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoVoid operation/method
 */
if ($do->DoVoid(new \PayPal\StructType\DoVoidReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoAuthorization operation/method
 */
if ($do->DoAuthorization(new \PayPal\StructType\DoAuthorizationReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoUATPAuthorization operation/method
 */
if ($do->DoUATPAuthorization(new \PayPal\StructType\DoUATPAuthorizationReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoReferenceTransaction operation/method
 */
if ($do->DoReferenceTransaction(new \PayPal\StructType\DoReferenceTransactionReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for DoNonReferencedCredit operation/method
 */
if ($do->DoNonReferencedCredit(new \PayPal\StructType\DoNonReferencedCreditReq()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \PayPal\ServiceType\Update($options);
$update->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for UpdateAccessPermissions operation/method
 */
if ($update->UpdateAccessPermissions(new \PayPal\StructType\UpdateAccessPermissionsReq()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateAuthorization operation/method
 */
if ($update->UpdateAuthorization(new \PayPal\StructType\UpdateAuthorizationReq()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRecurringPaymentsProfile operation/method
 */
if ($update->UpdateRecurringPaymentsProfile(new \PayPal\StructType\UpdateRecurringPaymentsProfileReq()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Execute ServiceType
 */
$execute = new \PayPal\ServiceType\Execute($options);
$execute->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for ExecuteCheckoutOperations operation/method
 */
if ($execute->ExecuteCheckoutOperations(new \PayPal\StructType\ExecuteCheckoutOperationsReq()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Samples for Manage ServiceType
 */
$manage = new \PayPal\ServiceType\Manage($options);
$manage->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for ManagePendingTransactionStatus operation/method
 */
if ($manage->ManagePendingTransactionStatus(new \PayPal\StructType\ManagePendingTransactionStatusReq()) !== false) {
    print_r($manage->getResult());
} else {
    print_r($manage->getLastError());
}
/**
 * Sample call for ManageRecurringPaymentsProfileStatus operation/method
 */
if ($manage->ManageRecurringPaymentsProfileStatus(new \PayPal\StructType\ManageRecurringPaymentsProfileStatusReq()) !== false) {
    print_r($manage->getResult());
} else {
    print_r($manage->getLastError());
}
/**
 * Samples for Reverse ServiceType
 */
$reverse = new \PayPal\ServiceType\Reverse($options);
$reverse->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for ReverseTransaction operation/method
 */
if ($reverse->ReverseTransaction(new \PayPal\StructType\ReverseTransactionReq()) !== false) {
    print_r($reverse->getResult());
} else {
    print_r($reverse->getLastError());
}
/**
 * Samples for External ServiceType
 */
$external = new \PayPal\ServiceType\External($options);
$external->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for ExternalRememberMeOptOut operation/method
 */
if ($external->ExternalRememberMeOptOut(new \PayPal\StructType\ExternalRememberMeOptOutReq()) !== false) {
    print_r($external->getResult());
} else {
    print_r($external->getLastError());
}
