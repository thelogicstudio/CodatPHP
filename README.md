# Codat SDK

[See Codat's API changes](https://docs.codat.io/changelog)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](http://getcomposer.org/), navigate to where your composer.json file is and run the command:


```
composer require thelogicstudio/codat-php
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
[UPDATING.md](UPDATING.md)


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\AccountTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$account_transaction_id = 'account_transaction_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataAccountTransactionsAccountTransactionIdGet($company_id, $connection_id, $account_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransactionsApi->companiesCompanyIdConnectionsConnectionIdDataAccountTransactionsAccountTransactionIdGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.codat.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountTransactionsApi* | [**companiesCompanyIdConnectionsConnectionIdDataAccountTransactionsAccountTransactionIdGet**](docs/Api/AccountTransactionsApi.md#companiescompanyidconnectionsconnectioniddataaccounttransactionsaccounttransactionidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/accountTransactions/{accountTransactionId} | Gets the specified account transaction for a given company and connection.
*AccountTransactionsApi* | [**companiesCompanyIdConnectionsConnectionIdDataAccountTransactionsGet**](docs/Api/AccountTransactionsApi.md#companiescompanyidconnectionsconnectioniddataaccounttransactionsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/accountTransactions | Gets the account transactions for a given company.
*AccountsApi* | [**companiesCompanyIdConnectionsConnectionIdPushAccountsPost**](docs/Api/AccountsApi.md#companiescompanyidconnectionsconnectionidpushaccountspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/accounts | Posts an individual account for a given company.
*AccountsApi* | [**companiesCompanyIdDataAccountsAccountIdGet**](docs/Api/AccountsApi.md#companiescompanyiddataaccountsaccountidget) | **GET** /companies/{companyId}/data/accounts/{accountId} | Gets a single account corresponding to the supplied Id
*AccountsApi* | [**companiesCompanyIdDataAccountsGet**](docs/Api/AccountsApi.md#companiescompanyiddataaccountsget) | **GET** /companies/{companyId}/data/accounts | Gets the latest chart of accounts for a company
*AssessApi* | [**companiesCompanyIdReportsEnhancedBalanceSheetAccountsGet**](docs/Api/AssessApi.md#companiescompanyidreportsenhancedbalancesheetaccountsget) | **GET** /companies/{companyId}/reports/enhancedBalanceSheet/accounts | Gets a list of accounts with account categories per statement period, specific to balance sheet
*AssessApi* | [**companiesCompanyIdReportsEnhancedCashFlowTransactionsGet**](docs/Api/AssessApi.md#companiescompanyidreportsenhancedcashflowtransactionsget) | **GET** /companies/{companyId}/reports/enhancedCashFlow/transactions | Gets a list of banking transactions and their categories.
*AssessApi* | [**companiesCompanyIdReportsEnhancedInvoicesGet**](docs/Api/AssessApi.md#companiescompanyidreportsenhancedinvoicesget) | **GET** /companies/{companyId}/reports/enhancedInvoices | 
*AssessApi* | [**companiesCompanyIdReportsEnhancedProfitAndLossAccountsGet**](docs/Api/AssessApi.md#companiescompanyidreportsenhancedprofitandlossaccountsget) | **GET** /companies/{companyId}/reports/enhancedProfitAndLoss/accounts | Gets a list of accounts with account categories per statement period, specific to profit and loss
*AssessApi* | [**dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityDetailsGet**](docs/Api/AssessApi.md#datacompaniescompanyidassessdatatypesdatatypedataintegritydetailsget) | **GET** /data/companies/{companyId}/assess/dataTypes/{dataType}/dataIntegrity/details | Gets record-by-record match results for a given company and datatype, optionally restricted by a Codat query string.
*AssessApi* | [**dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityStatusGet**](docs/Api/AssessApi.md#datacompaniescompanyidassessdatatypesdatatypedataintegritystatusget) | **GET** /data/companies/{companyId}/assess/dataTypes/{dataType}/dataIntegrity/status | Gets match status for a given company and datatype.
*AssessApi* | [**dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegritySummariesGet**](docs/Api/AssessApi.md#datacompaniescompanyidassessdatatypesdatatypedataintegritysummariesget) | **GET** /data/companies/{companyId}/assess/dataTypes/{dataType}/dataIntegrity/summaries | Gets match summary for a given company and datatype, optionally restricted by a Codat query string.
*AssessApi* | [**dataCompaniesCompanyIdAssessExcelDownloadGet**](docs/Api/AssessApi.md#datacompaniescompanyidassessexceldownloadget) | **GET** /data/companies/{companyId}/assess/excel/download | Download the Excel report to a local drive.
*AssessApi* | [**dataCompaniesCompanyIdAssessExcelGet**](docs/Api/AssessApi.md#datacompaniescompanyidassessexcelget) | **GET** /data/companies/{companyId}/assess/excel | Returns the status of the latest report requested.
*AssessApi* | [**dataCompaniesCompanyIdAssessExcelPost**](docs/Api/AssessApi.md#datacompaniescompanyidassessexcelpost) | **POST** /data/companies/{companyId}/assess/excel | Request an Excel report for download.
*AssessApi* | [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsCustomerRetentionGet**](docs/Api/AssessApi.md#datacompaniescompanyidconnectionsconnectionidassesscommercemetricscustomerretentionget) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/customerRetention | Gets the customer retention metrics for a specific company connection, over one or more periods of time.
*AssessApi* | [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsLifetimeValueGet**](docs/Api/AssessApi.md#datacompaniescompanyidconnectionsconnectionidassesscommercemetricslifetimevalueget) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/lifetimeValue | Gets the lifetime value metric for a specific company connection, over one or more periods of time.
*AssessApi* | [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsOrdersGet**](docs/Api/AssessApi.md#datacompaniescompanyidconnectionsconnectionidassesscommercemetricsordersget) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/orders | Gets the order information for a specific company connection, over one or more periods of time.
*AssessApi* | [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRefundsGet**](docs/Api/AssessApi.md#datacompaniescompanyidconnectionsconnectionidassesscommercemetricsrefundsget) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/refunds | Gets the refunds information for a specific company connection, over one or more periods of time.
*AssessApi* | [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRevenueGet**](docs/Api/AssessApi.md#datacompaniescompanyidconnectionsconnectionidassesscommercemetricsrevenueget) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/revenue | Gets the revenue and revenue growth for a specific company connection, over one or more periods of time.
*AssessApi* | [**dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsMrrGet**](docs/Api/AssessApi.md#datacompaniescompanyidconnectionsconnectionidassesssubscriptionsmrrget) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/subscriptions/mrr | Gets key metrics for subscription revenue.
*AssessApi* | [**dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsProcessGet**](docs/Api/AssessApi.md#datacompaniescompanyidconnectionsconnectionidassesssubscriptionsprocessget) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/subscriptions/process | Gets key metrics for subscription revenue.
*BankAccountsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdBankTransactionsGet**](docs/Api/BankAccountsApi.md#companiescompanyidconnectionsconnectioniddatabankaccountsaccountidbanktransactionsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/bankAccounts/{accountId}/bankTransactions | Gets bank transactions for a given bank account ID
*BankAccountsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdGet**](docs/Api/BankAccountsApi.md#companiescompanyidconnectionsconnectioniddatabankaccountsaccountidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/bankAccounts/{accountId} | Gets the bank account with a given ID
*BankAccountsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankAccountsGet**](docs/Api/BankAccountsApi.md#companiescompanyidconnectionsconnectioniddatabankaccountsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/bankAccounts | Gets the list of bank accounts for a given connection
*BankAccountsApi* | [**companiesCompanyIdConnectionsConnectionIdOptionsBankAccountsAccountIdBankTransactionsGet**](docs/Api/BankAccountsApi.md#companiescompanyidconnectionsconnectionidoptionsbankaccountsaccountidbanktransactionsget) | **GET** /companies/{companyId}/connections/{connectionId}/options/bankAccounts/{accountId}/bankTransactions | Gets the options of pushing bank account transactions.
*BankAccountsApi* | [**companiesCompanyIdConnectionsConnectionIdPushBankAccountsAccountIdBankTransactionsPost**](docs/Api/BankAccountsApi.md#companiescompanyidconnectionsconnectionidpushbankaccountsaccountidbanktransactionspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/bankAccounts/{accountId}/bankTransactions | Posts bank transactions to the accounting package for a given company.
*BankAccountsApi* | [**companiesCompanyIdConnectionsConnectionIdPushBankAccountsBankAccountIdPut**](docs/Api/BankAccountsApi.md#companiescompanyidconnectionsconnectionidpushbankaccountsbankaccountidput) | **PUT** /companies/{companyId}/connections/{connectionId}/push/bankAccounts/{bankAccountId} | Posts an updated bank account to the accounting package for a given company.
*BankAccountsApi* | [**companiesCompanyIdConnectionsConnectionIdPushBankAccountsPost**](docs/Api/BankAccountsApi.md#companiescompanyidconnectionsconnectionidpushbankaccountspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/bankAccounts | Posts a new bank account to the accounting package for a given company.
*BankAccountsApi* | [**companiesCompanyIdDataBankAccountsAccountIdGet**](docs/Api/BankAccountsApi.md#companiescompanyiddatabankaccountsaccountidget) | **GET** /companies/{companyId}/data/bankAccounts/{accountId} | Gets the bank account for given account ID.
*BankAccountsApi* | [**companiesCompanyIdDataBankAccountsAccountIdTransactionsGet**](docs/Api/BankAccountsApi.md#companiescompanyiddatabankaccountsaccountidtransactionsget) | **GET** /companies/{companyId}/data/bankAccounts/{accountId}/transactions | Gets the latest bank transactions for given account ID and company.
*BankingAccountBalancesApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankingAccountBalancesGet**](docs/Api/BankingAccountBalancesApi.md#companiescompanyidconnectionsconnectioniddatabankingaccountbalancesget) | **GET** /companies/{companyId}/connections/{connectionId}/data/banking-accountBalances | Gets a list of balances for a bank account including end-of-day batch balance or running balances per transaction.
*BankingAccountsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankingAccountsAccountIdGet**](docs/Api/BankingAccountsApi.md#companiescompanyidconnectionsconnectioniddatabankingaccountsaccountidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/banking-accounts/{accountId} | Gets a specified bank account for a given company
*BankingAccountsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankingAccountsGet**](docs/Api/BankingAccountsApi.md#companiescompanyidconnectionsconnectioniddatabankingaccountsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/banking-accounts | Gets a list of all bank accounts of the SMB, with rich data like balances, account numbers and institutions holding  the accounts.
*BankingTransactionCategoriesApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesGet**](docs/Api/BankingTransactionCategoriesApi.md#companiescompanyidconnectionsconnectioniddatabankingtransactioncategoriesget) | **GET** /companies/{companyId}/connections/{connectionId}/data/banking-transactionCategories | Gets a list of hierarchical categories associated with a transaction for greater contextual meaning to transaction  activity.
*BankingTransactionCategoriesApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesTransactionCategoryIdGet**](docs/Api/BankingTransactionCategoriesApi.md#companiescompanyidconnectionsconnectioniddatabankingtransactioncategoriestransactioncategoryidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/banking-transactionCategories/{transactionCategoryId} | Gets a specified bank transaction category for a given company
*BankingTransactionsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankingTransactionsGet**](docs/Api/BankingTransactionsApi.md#companiescompanyidconnectionsconnectioniddatabankingtransactionsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/banking-transactions | Gets a list of transactions incurred by a bank account.
*BankingTransactionsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBankingTransactionsTransactionIdGet**](docs/Api/BankingTransactionsApi.md#companiescompanyidconnectionsconnectioniddatabankingtransactionstransactionidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/banking-transactions/{transactionId} | Gets a specified bank transaction for a given company
*BankingTransactionsApi* | [**companiesCompanyIdDataBankingTransactionsGet**](docs/Api/BankingTransactionsApi.md#companiescompanyiddatabankingtransactionsget) | **GET** /companies/{companyId}/data/banking-transactions | Gets a list of transactions incurred by a company across all bank accounts.
*BillCreditNotesApi* | [**companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesBillCreditNoteIdPut**](docs/Api/BillCreditNotesApi.md#companiescompanyidconnectionsconnectionidpushbillcreditnotesbillcreditnoteidput) | **PUT** /companies/{companyId}/connections/{connectionId}/push/billCreditNotes/{billCreditNoteId} | Posts an updated billCreditNote to the accounting package for a given company.
*BillCreditNotesApi* | [**companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesPost**](docs/Api/BillCreditNotesApi.md#companiescompanyidconnectionsconnectionidpushbillcreditnotespost) | **POST** /companies/{companyId}/connections/{connectionId}/push/billCreditNotes | Posts a new billCreditNote to the accounting package for a given company.
*BillCreditNotesApi* | [**companiesCompanyIdDataBillCreditNotesBillCreditNoteIdGet**](docs/Api/BillCreditNotesApi.md#companiescompanyiddatabillcreditnotesbillcreditnoteidget) | **GET** /companies/{companyId}/data/billCreditNotes/{billCreditNoteId} | Gets a single billCreditNote corresponding to the supplied Id
*BillCreditNotesApi* | [**companiesCompanyIdDataBillCreditNotesGet**](docs/Api/BillCreditNotesApi.md#companiescompanyiddatabillcreditnotesget) | **GET** /companies/{companyId}/data/billCreditNotes | Gets a list of all bill credit notes for a company, with pagination
*BillPaymentsApi* | [**companiesCompanyIdConnectionsConnectionIdPushBillPaymentsPost**](docs/Api/BillPaymentsApi.md#companiescompanyidconnectionsconnectionidpushbillpaymentspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/billPayments | Posts a new bill payment to the accounting package for a given company.
*BillPaymentsApi* | [**companiesCompanyIdDataBillPaymentsBillPaymentIdGet**](docs/Api/BillPaymentsApi.md#companiescompanyiddatabillpaymentsbillpaymentidget) | **GET** /companies/{companyId}/data/billPayments/{billPaymentId} | 
*BillPaymentsApi* | [**companiesCompanyIdDataBillPaymentsGet**](docs/Api/BillPaymentsApi.md#companiescompanyiddatabillpaymentsget) | **GET** /companies/{companyId}/data/billPayments | Gets the latest billPayments for a company, with pagination
*BillsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBillsBillIdAttachmentsAttachmentIdDownloadGet**](docs/Api/BillsApi.md#companiescompanyidconnectionsconnectioniddatabillsbillidattachmentsattachmentiddownloadget) | **GET** /companies/{companyId}/connections/{connectionId}/data/bills/{billId}/attachments/{attachmentId}/download | 
*BillsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBillsBillIdAttachmentsAttachmentIdGet**](docs/Api/BillsApi.md#companiescompanyidconnectionsconnectioniddatabillsbillidattachmentsattachmentidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/bills/{billId}/attachments/{attachmentId} | 
*BillsApi* | [**companiesCompanyIdConnectionsConnectionIdDataBillsBillIdAttachmentsGet**](docs/Api/BillsApi.md#companiescompanyidconnectionsconnectioniddatabillsbillidattachmentsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/bills/{billId}/attachments | 
*BillsApi* | [**companiesCompanyIdConnectionsConnectionIdPushBillsBillIdAttachmentsPost**](docs/Api/BillsApi.md#companiescompanyidconnectionsconnectionidpushbillsbillidattachmentspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/bills/{billId}/attachments | 
*BillsApi* | [**companiesCompanyIdConnectionsConnectionIdPushBillsBillIdPut**](docs/Api/BillsApi.md#companiescompanyidconnectionsconnectionidpushbillsbillidput) | **PUT** /companies/{companyId}/connections/{connectionId}/push/bills/{billId} | Posts an updated bill to the accounting package for a given company.
*BillsApi* | [**companiesCompanyIdConnectionsConnectionIdPushBillsPost**](docs/Api/BillsApi.md#companiescompanyidconnectionsconnectionidpushbillspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/bills | Posts a new bill to the accounting package for a given company.
*BillsApi* | [**companiesCompanyIdDataBillsBillIdGet**](docs/Api/BillsApi.md#companiescompanyiddatabillsbillidget) | **GET** /companies/{companyId}/data/bills/{billId} | 
*BillsApi* | [**companiesCompanyIdDataBillsGet**](docs/Api/BillsApi.md#companiescompanyiddatabillsget) | **GET** /companies/{companyId}/data/bills | Gets the latest bills for a company, with pagination
*CommerceCustomersApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceCustomersCustomerIdGet**](docs/Api/CommerceCustomersApi.md#companiescompanyidconnectionsconnectioniddatacommercecustomerscustomeridget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-customers/{customerId} | Gets the specified commerce customer for a given company
*CommerceCustomersApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceCustomersGet**](docs/Api/CommerceCustomersApi.md#companiescompanyidconnectionsconnectioniddatacommercecustomersget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-customers | Gets the latest commerce customers for a company, with pagination
*CommerceDisputesApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceDisputesDisputeIdGet**](docs/Api/CommerceDisputesApi.md#companiescompanyidconnectionsconnectioniddatacommercedisputesdisputeidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-disputes/{disputeId} | Gets the specified commerce dispute for a given company
*CommerceDisputesApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceDisputesGet**](docs/Api/CommerceDisputesApi.md#companiescompanyidconnectionsconnectioniddatacommercedisputesget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-disputes | Gets the latest commerce disputes for a company, with pagination
*CommerceInfoApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceInfoGet**](docs/Api/CommerceInfoApi.md#companiescompanyidconnectionsconnectioniddatacommerceinfoget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-info | Gets the latest basic info for a commerce company.
*CommerceLocationsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceLocationsGet**](docs/Api/CommerceLocationsApi.md#companiescompanyidconnectionsconnectioniddatacommercelocationsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-locations | Gets the latest commerce locations for a company, with pagination
*CommerceLocationsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceLocationsLocationIdGet**](docs/Api/CommerceLocationsApi.md#companiescompanyidconnectionsconnectioniddatacommercelocationslocationidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-locations/{locationId} | Gets the specified commerce location for a given company
*CommerceOrdersApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceOrdersGet**](docs/Api/CommerceOrdersApi.md#companiescompanyidconnectionsconnectioniddatacommerceordersget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-orders | Gets the latest commerce orders for a company, with pagination
*CommerceOrdersApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceOrdersOrderIdGet**](docs/Api/CommerceOrdersApi.md#companiescompanyidconnectionsconnectioniddatacommerceordersorderidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-orders/{orderId} | Gets the specified commerce order for a given company
*CommercePaymentMethodsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsGet**](docs/Api/CommercePaymentMethodsApi.md#companiescompanyidconnectionsconnectioniddatacommercepaymentmethodsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-paymentMethods | Gets a list of all payment methods from a data connection
*CommercePaymentMethodsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsPaymentMethodIdGet**](docs/Api/CommercePaymentMethodsApi.md#companiescompanyidconnectionsconnectioniddatacommercepaymentmethodspaymentmethodidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-paymentMethods/{paymentMethodId} | Gets the details of an individual payment method.
*CommercePaymentsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommercePaymentsGet**](docs/Api/CommercePaymentsApi.md#companiescompanyidconnectionsconnectioniddatacommercepaymentsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-payments | Gets the latest commerce payments for a company, with pagination
*CommercePaymentsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommercePaymentsPaymentIdGet**](docs/Api/CommercePaymentsApi.md#companiescompanyidconnectionsconnectioniddatacommercepaymentspaymentidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-payments/{paymentId} | Gets the specified commerce payment for a given company
*CommerceProductCategoriesApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceProductCategoriesGet**](docs/Api/CommerceProductCategoriesApi.md#companiescompanyidconnectionsconnectioniddatacommerceproductcategoriesget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-productCategories | Gets the latest commerce product categories for a company, with pagination
*CommerceProductCategoriesApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceProductCategoriesProductIdGet**](docs/Api/CommerceProductCategoriesApi.md#companiescompanyidconnectionsconnectioniddatacommerceproductcategoriesproductidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-productCategories/{productId} | Gets the specified commerce product category for a given company
*CommerceProductsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceProductsGet**](docs/Api/CommerceProductsApi.md#companiescompanyidconnectionsconnectioniddatacommerceproductsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-products | Gets the latest commerce products for a company, with pagination
*CommerceProductsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceProductsProductIdGet**](docs/Api/CommerceProductsApi.md#companiescompanyidconnectionsconnectioniddatacommerceproductsproductidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-products/{productId} | Gets the specified commerce product for a given company
*CommerceTransactionsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceTransactionsGet**](docs/Api/CommerceTransactionsApi.md#companiescompanyidconnectionsconnectioniddatacommercetransactionsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-transactions | Gets the latest commerce transactions for a company, with pagination
*CommerceTransactionsApi* | [**companiesCompanyIdConnectionsConnectionIdDataCommerceTransactionsTransactionIdGet**](docs/Api/CommerceTransactionsApi.md#companiescompanyidconnectionsconnectioniddatacommercetransactionstransactionidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-transactions/{transactionId} | Gets the specified commerce transaction for a given company
*CompaniesApi* | [**companiesCompanyIdDelete**](docs/Api/CompaniesApi.md#companiescompanyiddelete) | **DELETE** /companies/{companyId} | Deletes a company, this is not reversible.
*CompaniesApi* | [**companiesCompanyIdGet**](docs/Api/CompaniesApi.md#companiescompanyidget) | **GET** /companies/{companyId} | Fetch metadata on a single company.
*CompaniesApi* | [**companiesCompanyIdPut**](docs/Api/CompaniesApi.md#companiescompanyidput) | **PUT** /companies/{companyId} | Update a company with a new name and optional description
*CompaniesApi* | [**companiesCompanyIdSettingsGet**](docs/Api/CompaniesApi.md#companiescompanyidsettingsget) | **GET** /companies/{companyId}/settings | Fetch settings on a single company.
*CompaniesApi* | [**companiesCompanyIdSettingsPut**](docs/Api/CompaniesApi.md#companiescompanyidsettingsput) | **PUT** /companies/{companyId}/settings | Update settings on a single company.
*CompaniesApi* | [**companiesCompanyIdSyncSettingsGet**](docs/Api/CompaniesApi.md#companiescompanyidsyncsettingsget) | **GET** /companies/{companyId}/syncSettings | 
*CompaniesApi* | [**companiesCompanyIdSyncSettingsPost**](docs/Api/CompaniesApi.md#companiescompanyidsyncsettingspost) | **POST** /companies/{companyId}/syncSettings | 
*CompaniesApi* | [**companiesGet**](docs/Api/CompaniesApi.md#companiesget) | **GET** /companies | Fetch a list of all companies metadata with accounting links on the Codat platform
*CompaniesApi* | [**companiesPost**](docs/Api/CompaniesApi.md#companiespost) | **POST** /companies | Initiate the process of onboarding a new company on the Codat platform
*ConnectionApi* | [**companiesCompanyIdConnectionsConnectionIdAuthorizationPut**](docs/Api/ConnectionApi.md#companiescompanyidconnectionsconnectionidauthorizationput) | **PUT** /companies/{companyId}/connections/{connectionId}/authorization | Put authorization information for a single data source connected to a single company.
*ConnectionApi* | [**companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsBankAccountIdPatch**](docs/Api/ConnectionApi.md#companiescompanyidconnectionsconnectionidconnectioninfobankfeedaccountsbankaccountidpatch) | **PATCH** /companies/{companyId}/connections/{connectionId}/connectionInfo/bankFeedAccounts/{bankAccountId} | Update a single BankFeed BankAccount for a single data source connected to a single company.
*ConnectionApi* | [**companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsGet**](docs/Api/ConnectionApi.md#companiescompanyidconnectionsconnectionidconnectioninfobankfeedaccountsget) | **GET** /companies/{companyId}/connections/{connectionId}/connectionInfo/bankFeedAccounts | Get BankFeed BankAccounts for a single data source connected to a single company.
*ConnectionApi* | [**companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsPut**](docs/Api/ConnectionApi.md#companiescompanyidconnectionsconnectionidconnectioninfobankfeedaccountsput) | **PUT** /companies/{companyId}/connections/{connectionId}/connectionInfo/bankFeedAccounts | Put BankFeed BankAccounts for a single data source connected to a single company.
*ConnectionApi* | [**companiesCompanyIdConnectionsConnectionIdDelete**](docs/Api/ConnectionApi.md#companiescompanyidconnectionsconnectioniddelete) | **DELETE** /companies/{companyId}/connections/{connectionId} | Disconnect and delete a data source from a company
*ConnectionApi* | [**companiesCompanyIdConnectionsConnectionIdGet**](docs/Api/ConnectionApi.md#companiescompanyidconnectionsconnectionidget) | **GET** /companies/{companyId}/connections/{connectionId} | Retrieve a single data source connected to a single company, including its connection status
*ConnectionApi* | [**companiesCompanyIdConnectionsConnectionIdPatch**](docs/Api/ConnectionApi.md#companiescompanyidconnectionsconnectionidpatch) | **PATCH** /companies/{companyId}/connections/{connectionId} | Disconnect a data source from a company
*ConnectionApi* | [**companiesCompanyIdConnectionsGet**](docs/Api/ConnectionApi.md#companiescompanyidconnectionsget) | **GET** /companies/{companyId}/connections | Retrieve all data sources connected to a single company, including their connection statuses
*ConnectionApi* | [**companiesCompanyIdConnectionsPost**](docs/Api/ConnectionApi.md#companiescompanyidconnectionspost) | **POST** /companies/{companyId}/connections | Connect a data source to a company
*CreditNotesApi* | [**companiesCompanyIdConnectionsConnectionIdPushCreditNotesCreditNoteIdPut**](docs/Api/CreditNotesApi.md#companiescompanyidconnectionsconnectionidpushcreditnotescreditnoteidput) | **PUT** /companies/{companyId}/connections/{connectionId}/push/creditNotes/{creditNoteId} | Posts an updated credit note to the accounting package for a given company.
*CreditNotesApi* | [**companiesCompanyIdConnectionsConnectionIdPushCreditNotesPost**](docs/Api/CreditNotesApi.md#companiescompanyidconnectionsconnectionidpushcreditnotespost) | **POST** /companies/{companyId}/connections/{connectionId}/push/creditNotes | 
*CreditNotesApi* | [**companiesCompanyIdDataCreditNotesCreditNoteIdGet**](docs/Api/CreditNotesApi.md#companiescompanyiddatacreditnotescreditnoteidget) | **GET** /companies/{companyId}/data/creditNotes/{creditNoteId} | Gets a single creditNote corresponding to the supplied Id
*CreditNotesApi* | [**companiesCompanyIdDataCreditNotesGet**](docs/Api/CreditNotesApi.md#companiescompanyiddatacreditnotesget) | **GET** /companies/{companyId}/data/creditNotes | Gets a list of all credit notes for a company, with pagination
*CustomersApi* | [**companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdDownloadGet**](docs/Api/CustomersApi.md#companiescompanyidconnectionsconnectioniddatacustomerscustomeridattachmentsattachmentiddownloadget) | **GET** /companies/{companyId}/connections/{connectionId}/data/customers/{customerId}/attachments/{attachmentId}/download | 
*CustomersApi* | [**companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdGet**](docs/Api/CustomersApi.md#companiescompanyidconnectionsconnectioniddatacustomerscustomeridattachmentsattachmentidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/customers/{customerId}/attachments/{attachmentId} | 
*CustomersApi* | [**companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsGet**](docs/Api/CustomersApi.md#companiescompanyidconnectionsconnectioniddatacustomerscustomeridattachmentsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/customers/{customerId}/attachments | 
*CustomersApi* | [**companiesCompanyIdConnectionsConnectionIdPushCustomersCustomerIdPut**](docs/Api/CustomersApi.md#companiescompanyidconnectionsconnectionidpushcustomerscustomeridput) | **PUT** /companies/{companyId}/connections/{connectionId}/push/customers/{customerId} | Posts an updated customer for a given company.
*CustomersApi* | [**companiesCompanyIdConnectionsConnectionIdPushCustomersPost**](docs/Api/CustomersApi.md#companiescompanyidconnectionsconnectionidpushcustomerspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/customers | Posts an individual customer for a given company.
*CustomersApi* | [**companiesCompanyIdDataCustomersCustomerIdGet**](docs/Api/CustomersApi.md#companiescompanyiddatacustomerscustomeridget) | **GET** /companies/{companyId}/data/customers/{customerId} | Gets a single customer corresponding to the supplied Id
*CustomersApi* | [**companiesCompanyIdDataCustomersGet**](docs/Api/CustomersApi.md#companiescompanyiddatacustomersget) | **GET** /companies/{companyId}/data/customers | Gets the latest customers for a company, with pagination
*DataApi* | [**companiesCompanyIdDataAllPost**](docs/Api/DataApi.md#companiescompanyiddataallpost) | **POST** /companies/{companyId}/data/all | Initiates the process of capturing a new data snapshot for a company
*DataApi* | [**companiesCompanyIdDataHistoryDatasetIdGet**](docs/Api/DataApi.md#companiescompanyiddatahistorydatasetidget) | **GET** /companies/{companyId}/data/history/{datasetId} | Fetch metadata on a single data synchronisation
*DataApi* | [**companiesCompanyIdDataHistoryGet**](docs/Api/DataApi.md#companiescompanyiddatahistoryget) | **GET** /companies/{companyId}/data/history | Fetch a list of all data snapshots captured for a company
*DataApi* | [**companiesCompanyIdDataQueueDataTypePost**](docs/Api/DataApi.md#companiescompanyiddataqueuedatatypepost) | **POST** /companies/{companyId}/data/queue/{dataType} | Initiates the process of capturing a data snapshot of a specified type for a company
*DataStatusApi* | [**companiesCompanyIdDataStatusGet**](docs/Api/DataStatusApi.md#companiescompanyiddatastatusget) | **GET** /companies/{companyId}/dataStatus | 
*DataTypesApi* | [**companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsGet**](docs/Api/DataTypesApi.md#companiescompanyidconnectionsconnectioniddatatypesdatatypeoptionsget) | **GET** /companies/{companyId}/connections/{connectionId}/dataTypes/{dataType}/options | Gets all available push options for the given data type
*DataTypesApi* | [**companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPOSTGet**](docs/Api/DataTypesApi.md#companiescompanyidconnectionsconnectioniddatatypesdatatypeoptionspostget) | **GET** /companies/{companyId}/connections/{connectionId}/dataTypes/{dataType}/options/POST | Gets the POST push options for the given data type
*DataTypesApi* | [**companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPUTGet**](docs/Api/DataTypesApi.md#companiescompanyidconnectionsconnectioniddatatypesdatatypeoptionsputget) | **GET** /companies/{companyId}/connections/{connectionId}/dataTypes/{dataType}/options/PUT | Gets the PUT push options for the given data type
*DatasetLogsApi* | [**companiesCompanyIdDataDatasetLogsDatasetIdGet**](docs/Api/DatasetLogsApi.md#companiescompanyiddatadatasetlogsdatasetidget) | **GET** /companies/{companyId}/data/datasetLogs/{datasetId} | Gets dataset messages for a given dataset
*DirectCostsApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdDownloadGet**](docs/Api/DirectCostsApi.md#companiescompanyidconnectionsconnectioniddatadirectcostsdirectcostidattachmentsattachmentiddownloadget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts/{directCostId}/attachments/{attachmentId}/download | Downloads an attachment for the specified direct cost for a given company.
*DirectCostsApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdGet**](docs/Api/DirectCostsApi.md#companiescompanyidconnectionsconnectioniddatadirectcostsdirectcostidattachmentsattachmentidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts/{directCostId}/attachments/{attachmentId} | Gets the specified direct cost attachment for a given company.
*DirectCostsApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsGet**](docs/Api/DirectCostsApi.md#companiescompanyidconnectionsconnectioniddatadirectcostsdirectcostidattachmentsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts/{directCostId}/attachments | Gets all attachments for the specified direct cost for a given company.
*DirectCostsApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdGet**](docs/Api/DirectCostsApi.md#companiescompanyidconnectionsconnectioniddatadirectcostsdirectcostidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts/{directCostId} | Gets the specified direct cost for a given company.
*DirectCostsApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsGet**](docs/Api/DirectCostsApi.md#companiescompanyidconnectionsconnectioniddatadirectcostsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts | Gets the direct costs for the company.
*DirectCostsApi* | [**companiesCompanyIdConnectionsConnectionIdPushDirectCostsDirectCostIdAttachmentPost**](docs/Api/DirectCostsApi.md#companiescompanyidconnectionsconnectionidpushdirectcostsdirectcostidattachmentpost) | **POST** /companies/{companyId}/connections/{connectionId}/push/directCosts/{directCostId}/attachment | Posts a new direct cost attachment for a given company.
*DirectCostsApi* | [**companiesCompanyIdConnectionsConnectionIdPushDirectCostsPost**](docs/Api/DirectCostsApi.md#companiescompanyidconnectionsconnectionidpushdirectcostspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/directCosts | Posts a new direct cost to the accounting package for a given company.
*DirectIncomesApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdDownloadGet**](docs/Api/DirectIncomesApi.md#companiescompanyidconnectionsconnectioniddatadirectincomesdirectincomeidattachmentsattachmentiddownloadget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes/{directIncomeId}/attachments/{attachmentId}/download | Downloads an attachment for the specified direct income for a given company.
*DirectIncomesApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdGet**](docs/Api/DirectIncomesApi.md#companiescompanyidconnectionsconnectioniddatadirectincomesdirectincomeidattachmentsattachmentidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes/{directIncomeId}/attachments/{attachmentId} | Gets the specified direct income attachment for a given company.
*DirectIncomesApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsGet**](docs/Api/DirectIncomesApi.md#companiescompanyidconnectionsconnectioniddatadirectincomesdirectincomeidattachmentsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes/{directIncomeId}/attachments | Gets all attachments for the specified direct income for a given company.
*DirectIncomesApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdGet**](docs/Api/DirectIncomesApi.md#companiescompanyidconnectionsconnectioniddatadirectincomesdirectincomeidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes/{directIncomeId} | Gets the specified direct income for a given company and connection.
*DirectIncomesApi* | [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesGet**](docs/Api/DirectIncomesApi.md#companiescompanyidconnectionsconnectioniddatadirectincomesget) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes | Gets the direct incomes for a given company.
*DirectIncomesApi* | [**companiesCompanyIdConnectionsConnectionIdPushDirectIncomesDirectIncomeIdAttachmentPost**](docs/Api/DirectIncomesApi.md#companiescompanyidconnectionsconnectionidpushdirectincomesdirectincomeidattachmentpost) | **POST** /companies/{companyId}/connections/{connectionId}/push/directIncomes/{directIncomeId}/attachment | Posts a new direct income attachment for a given company.
*DirectIncomesApi* | [**companiesCompanyIdConnectionsConnectionIdPushDirectIncomesPost**](docs/Api/DirectIncomesApi.md#companiescompanyidconnectionsconnectionidpushdirectincomespost) | **POST** /companies/{companyId}/connections/{connectionId}/push/directIncomes | Posts a new direct income to the accounting package for a given company.
*FilesApi* | [**companiesCompanyIdConnectionsConnectionIdFilesPost**](docs/Api/FilesApi.md#companiescompanyidconnectionsconnectionidfilespost) | **POST** /companies/{companyId}/connections/{connectionId}/files | Upload files for a company
*FilesApi* | [**companiesCompanyIdFilesDownloadGet**](docs/Api/FilesApi.md#companiescompanyidfilesdownloadget) | **GET** /companies/{companyId}/files/download | Download all files for a company. You can specify a date to download specific files for.
*FilesApi* | [**companiesCompanyIdFilesGet**](docs/Api/FilesApi.md#companiescompanyidfilesget) | **GET** /companies/{companyId}/files | View all files uploaded by a specified company
*FinancialsApi* | [**companiesCompanyIdDataFinancialsBalanceSheetGet**](docs/Api/FinancialsApi.md#companiescompanyiddatafinancialsbalancesheetget) | **GET** /companies/{companyId}/data/financials/balanceSheet | Gets the latest balance sheet for a company.
*FinancialsApi* | [**companiesCompanyIdDataFinancialsCashFlowStatementGet**](docs/Api/FinancialsApi.md#companiescompanyiddatafinancialscashflowstatementget) | **GET** /companies/{companyId}/data/financials/cashFlowStatement | Gets the latest cash flow statement for a company.
*FinancialsApi* | [**companiesCompanyIdDataFinancialsProfitAndLossGet**](docs/Api/FinancialsApi.md#companiescompanyiddatafinancialsprofitandlossget) | **GET** /companies/{companyId}/data/financials/profitAndLoss | Gets the latest profit and loss for a company.
*InfoApi* | [**companiesCompanyIdDataInfoGet**](docs/Api/InfoApi.md#companiescompanyiddatainfoget) | **GET** /companies/{companyId}/data/info | Gets the latest basic info for a company.
*InfoApi* | [**companiesCompanyIdDataInfoPost**](docs/Api/InfoApi.md#companiescompanyiddatainfopost) | **POST** /companies/{companyId}/data/info | Initiates the process of synchronising basic info for a company
*IntegrationsApi* | [**integrationsBankSettingsGet**](docs/Api/IntegrationsApi.md#integrationsbanksettingsget) | **GET** /integrations/bankSettings | 
*IntegrationsApi* | [**integrationsBankSettingsPut**](docs/Api/IntegrationsApi.md#integrationsbanksettingsput) | **PUT** /integrations/bankSettings | 
*IntegrationsApi* | [**integrationsCredentialsPlatformKeyDelete**](docs/Api/IntegrationsApi.md#integrationscredentialsplatformkeydelete) | **DELETE** /integrations/credentials/{platformKey} | Delete credentials used to authenticate with an accounting platform
*IntegrationsApi* | [**integrationsCredentialsPlatformKeyGet**](docs/Api/IntegrationsApi.md#integrationscredentialsplatformkeyget) | **GET** /integrations/credentials/{platformKey} | Fetch credentials required to authenticate with an accounting platform.
*IntegrationsApi* | [**integrationsCredentialsPlatformKeyPut**](docs/Api/IntegrationsApi.md#integrationscredentialsplatformkeyput) | **PUT** /integrations/credentials/{platformKey} | Update credentials required to authenticate with an accounting platform
*IntegrationsApi* | [**integrationsGet**](docs/Api/IntegrationsApi.md#integrationsget) | **GET** /integrations | 
*IntegrationsApi* | [**integrationsPlatformKeyBrandingGet**](docs/Api/IntegrationsApi.md#integrationsplatformkeybrandingget) | **GET** /integrations/{platformKey}/branding | 
*IntegrationsApi* | [**integrationsPlatformKeyEnabledPut**](docs/Api/IntegrationsApi.md#integrationsplatformkeyenabledput) | **PUT** /integrations/{platformKey}/enabled | 
*IntegrationsApi* | [**integrationsPlatformKeyGet**](docs/Api/IntegrationsApi.md#integrationsplatformkeyget) | **GET** /integrations/{platformKey} | 
*InvoicesApi* | [**companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdDownloadGet**](docs/Api/InvoicesApi.md#companiescompanyidconnectionsconnectioniddatainvoicesinvoiceidattachmentsattachmentiddownloadget) | **GET** /companies/{companyId}/connections/{connectionId}/data/invoices/{invoiceId}/attachments/{attachmentId}/download | 
*InvoicesApi* | [**companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdGet**](docs/Api/InvoicesApi.md#companiescompanyidconnectionsconnectioniddatainvoicesinvoiceidattachmentsattachmentidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/invoices/{invoiceId}/attachments/{attachmentId} | 
*InvoicesApi* | [**companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsGet**](docs/Api/InvoicesApi.md#companiescompanyidconnectionsconnectioniddatainvoicesinvoiceidattachmentsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/invoices/{invoiceId}/attachments | 
*InvoicesApi* | [**companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdAttachmentPost**](docs/Api/InvoicesApi.md#companiescompanyidconnectionsconnectionidpushinvoicesinvoiceidattachmentpost) | **POST** /companies/{companyId}/connections/{connectionId}/push/invoices/{invoiceId}/attachment | 
*InvoicesApi* | [**companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdPut**](docs/Api/InvoicesApi.md#companiescompanyidconnectionsconnectionidpushinvoicesinvoiceidput) | **PUT** /companies/{companyId}/connections/{connectionId}/push/invoices/{invoiceId} | Posts an updated invoice to the accounting package for a given company.
*InvoicesApi* | [**companiesCompanyIdConnectionsConnectionIdPushInvoicesPost**](docs/Api/InvoicesApi.md#companiescompanyidconnectionsconnectionidpushinvoicespost) | **POST** /companies/{companyId}/connections/{connectionId}/push/invoices | Posts a new invoice to the accounting package for a given company.
*InvoicesApi* | [**companiesCompanyIdDataInvoicesGet**](docs/Api/InvoicesApi.md#companiescompanyiddatainvoicesget) | **GET** /companies/{companyId}/data/invoices | Gets the latest invoices for a company, with pagination
*InvoicesApi* | [**companiesCompanyIdDataInvoicesInvoiceIdGet**](docs/Api/InvoicesApi.md#companiescompanyiddatainvoicesinvoiceidget) | **GET** /companies/{companyId}/data/invoices/{invoiceId} | 
*InvoicesApi* | [**companiesCompanyIdDataInvoicesInvoiceIdPdfGet**](docs/Api/InvoicesApi.md#companiescompanyiddatainvoicesinvoiceidpdfget) | **GET** /companies/{companyId}/data/invoices/{invoiceId}/pdf | 
*ItemsApi* | [**companiesCompanyIdConnectionsConnectionIdPushItemsPost**](docs/Api/ItemsApi.md#companiescompanyidconnectionsconnectionidpushitemspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/items | Posts a new item to the accounting package for a given company.
*ItemsApi* | [**companiesCompanyIdDataItemsGet**](docs/Api/ItemsApi.md#companiescompanyiddataitemsget) | **GET** /companies/{companyId}/data/items | Gets the items for a given company.
*ItemsApi* | [**companiesCompanyIdDataItemsItemIdGet**](docs/Api/ItemsApi.md#companiescompanyiddataitemsitemidget) | **GET** /companies/{companyId}/data/items/{itemId} | Gets the specified item for a given company.
*JournalEntriesApi* | [**companiesCompanyIdConnectionsConnectionIdPushJournalEntriesPost**](docs/Api/JournalEntriesApi.md#companiescompanyidconnectionsconnectionidpushjournalentriespost) | **POST** /companies/{companyId}/connections/{connectionId}/push/journalEntries | Posts a new journalEntry to the accounting package for a given company.
*JournalEntriesApi* | [**companiesCompanyIdDataJournalEntriesGet**](docs/Api/JournalEntriesApi.md#companiescompanyiddatajournalentriesget) | **GET** /companies/{companyId}/data/journalEntries | Gets the latest journal entries for a company, with pagination
*JournalEntriesApi* | [**companiesCompanyIdDataJournalEntriesJournalEntryIdGet**](docs/Api/JournalEntriesApi.md#companiescompanyiddatajournalentriesjournalentryidget) | **GET** /companies/{companyId}/data/journalEntries/{journalEntryId} | Gets a single JournalEntry corresponding to the supplied Id
*JournalsApi* | [**companiesCompanyIdConnectionsConnectionIdPushJournalsPost**](docs/Api/JournalsApi.md#companiescompanyidconnectionsconnectionidpushjournalspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/journals | Posts a new journal to the accounting package for a given company.
*JournalsApi* | [**companiesCompanyIdDataJournalsGet**](docs/Api/JournalsApi.md#companiescompanyiddatajournalsget) | **GET** /companies/{companyId}/data/journals | Gets the latest journals for a company, with pagination
*JournalsApi* | [**companiesCompanyIdDataJournalsJournalIdGet**](docs/Api/JournalsApi.md#companiescompanyiddatajournalsjournalidget) | **GET** /companies/{companyId}/data/journals/{journalId} | Gets a single journal corresponding to the supplied Id
*MetricsApi* | [**metricsCompaniesGet**](docs/Api/MetricsApi.md#metricscompaniesget) | **GET** /metrics/companies | 
*PaymentMethodsApi* | [**companiesCompanyIdDataPaymentMethodsGet**](docs/Api/PaymentMethodsApi.md#companiescompanyiddatapaymentmethodsget) | **GET** /companies/{companyId}/data/paymentMethods | Gets the payment methods for a given company.
*PaymentMethodsApi* | [**companiesCompanyIdDataPaymentMethodsPaymentMethodIdGet**](docs/Api/PaymentMethodsApi.md#companiescompanyiddatapaymentmethodspaymentmethodidget) | **GET** /companies/{companyId}/data/paymentMethods/{paymentMethodId} | Gets the specified payment method for a given company.
*PaymentsApi* | [**companiesCompanyIdConnectionsConnectionIdPushPaymentsPost**](docs/Api/PaymentsApi.md#companiescompanyidconnectionsconnectionidpushpaymentspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/payments | Posts a new payment to the accounting package for a given company.
*PaymentsApi* | [**companiesCompanyIdDataPaymentsGet**](docs/Api/PaymentsApi.md#companiescompanyiddatapaymentsget) | **GET** /companies/{companyId}/data/payments | Gets the latest payments for a company, with pagination
*PaymentsApi* | [**companiesCompanyIdDataPaymentsPaymentIdGet**](docs/Api/PaymentsApi.md#companiescompanyiddatapaymentspaymentidget) | **GET** /companies/{companyId}/data/payments/{paymentId} | 
*ProfileApi* | [**profileApiKeyPut**](docs/Api/ProfileApi.md#profileapikeyput) | **PUT** /profile/apiKey | Refresh the existing API key for your clients.
*ProfileApi* | [**profileGet**](docs/Api/ProfileApi.md#profileget) | **GET** /profile | Fetch your organisations company profile
*ProfileApi* | [**profilePut**](docs/Api/ProfileApi.md#profileput) | **PUT** /profile | Update your organisations company profile
*ProfileApi* | [**profileSyncSettingsDataTypePut**](docs/Api/ProfileApi.md#profilesyncsettingsdatatypeput) | **PUT** /profile/syncSettings/{dataType} | 
*ProfileApi* | [**profileSyncSettingsGet**](docs/Api/ProfileApi.md#profilesyncsettingsget) | **GET** /profile/syncSettings | 
*ProfileApi* | [**profileSyncSettingsPost**](docs/Api/ProfileApi.md#profilesyncsettingspost) | **POST** /profile/syncSettings | 
*PurchaseOrdersApi* | [**companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPost**](docs/Api/PurchaseOrdersApi.md#companiescompanyidconnectionsconnectionidpushpurchaseorderspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/purchaseOrders | Posts a new purchase order to the accounting package for a given company.
*PurchaseOrdersApi* | [**companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPurchaseOrderIdPut**](docs/Api/PurchaseOrdersApi.md#companiescompanyidconnectionsconnectionidpushpurchaseorderspurchaseorderidput) | **PUT** /companies/{companyId}/connections/{connectionId}/push/purchaseOrders/{purchaseOrderId} | Posts an updated purchase order to the accounting package for a given company.
*PurchaseOrdersApi* | [**companiesCompanyIdDataPurchaseOrdersGet**](docs/Api/PurchaseOrdersApi.md#companiescompanyiddatapurchaseordersget) | **GET** /companies/{companyId}/data/purchaseOrders | 
*PurchaseOrdersApi* | [**companiesCompanyIdDataPurchaseOrdersPurchaseOrderIdGet**](docs/Api/PurchaseOrdersApi.md#companiescompanyiddatapurchaseorderspurchaseorderidget) | **GET** /companies/{companyId}/data/purchaseOrders/{purchaseOrderId} | 
*PushApi* | [**companiesCompanyIdConnectionsConnectionIdOptionsDataTypeGet**](docs/Api/PushApi.md#companiescompanyidconnectionsconnectionidoptionsdatatypeget) | **GET** /companies/{companyId}/connections/{connectionId}/options/{dataType} | Gets the push options for the given data type
*PushApi* | [**companiesCompanyIdPushGet**](docs/Api/PushApi.md#companiescompanyidpushget) | **GET** /companies/{companyId}/push | Gets paged push operation records
*PushApi* | [**companiesCompanyIdPushPushOperationKeyGet**](docs/Api/PushApi.md#companiescompanyidpushpushoperationkeyget) | **GET** /companies/{companyId}/push/{pushOperationKey} | Gets a single push operation record
*ReportsApi* | [**companiesCompanyIdReportsAgedCreditorAvailableGet**](docs/Api/ReportsApi.md#companiescompanyidreportsagedcreditoravailableget) | **GET** /companies/{companyId}/reports/agedCreditor/available | 
*ReportsApi* | [**companiesCompanyIdReportsAgedCreditorGet**](docs/Api/ReportsApi.md#companiescompanyidreportsagedcreditorget) | **GET** /companies/{companyId}/reports/agedCreditor | Gets the aged creditor report for a company.
*ReportsApi* | [**companiesCompanyIdReportsAgedDebtorAvailableGet**](docs/Api/ReportsApi.md#companiescompanyidreportsageddebtoravailableget) | **GET** /companies/{companyId}/reports/agedDebtor/available | 
*ReportsApi* | [**companiesCompanyIdReportsAgedDebtorGet**](docs/Api/ReportsApi.md#companiescompanyidreportsageddebtorget) | **GET** /companies/{companyId}/reports/agedDebtor | Gets the aged debtor report for a company.
*ReportsApi* | [**companiesCompanyIdReportsEventsGet**](docs/Api/ReportsApi.md#companiescompanyidreportseventsget) | **GET** /companies/{companyId}/reports/events | 
*RulesApi* | [**rulesAlertsAlertIdGet**](docs/Api/RulesApi.md#rulesalertsalertidget) | **GET** /rules/alerts/{alertId} | 
*RulesApi* | [**rulesAlertsGet**](docs/Api/RulesApi.md#rulesalertsget) | **GET** /rules/alerts | 
*RulesApi* | [**rulesGet**](docs/Api/RulesApi.md#rulesget) | **GET** /rules | Fetch a list of rules
*RulesApi* | [**rulesPost**](docs/Api/RulesApi.md#rulespost) | **POST** /rules | Subscribe to a rule
*RulesApi* | [**rulesRuleIdAlertsGet**](docs/Api/RulesApi.md#rulesruleidalertsget) | **GET** /rules/{ruleId}/alerts | 
*RulesApi* | [**rulesRuleIdDelete**](docs/Api/RulesApi.md#rulesruleiddelete) | **DELETE** /rules/{ruleId} | 
*RulesApi* | [**rulesRuleIdGet**](docs/Api/RulesApi.md#rulesruleidget) | **GET** /rules/{ruleId} | 
*RulesApi* | [**rulesRuleIdPut**](docs/Api/RulesApi.md#rulesruleidput) | **PUT** /rules/{ruleId} | 
*SalesOrdersApi* | [**companiesCompanyIdDataSalesOrdersGet**](docs/Api/SalesOrdersApi.md#companiescompanyiddatasalesordersget) | **GET** /companies/{companyId}/data/salesOrders | 
*SalesOrdersApi* | [**companiesCompanyIdDataSalesOrdersSalesOrderIdGet**](docs/Api/SalesOrdersApi.md#companiescompanyiddatasalesorderssalesorderidget) | **GET** /companies/{companyId}/data/salesOrders/{salesOrderId} | 
*SettingsApi* | [**settingsGet**](docs/Api/SettingsApi.md#settingsget) | **GET** /settings | Fetch your settings
*SettingsApi* | [**settingsIntegrationsIntegrationIdGet**](docs/Api/SettingsApi.md#settingsintegrationsintegrationidget) | **GET** /settings/integrations/{integrationId} | Fetch your organisations integration settings
*SettingsApi* | [**settingsIntegrationsIntegrationIdPatch**](docs/Api/SettingsApi.md#settingsintegrationsintegrationidpatch) | **PATCH** /settings/integrations/{integrationId} | Update your organisations integration settings
*SettingsApi* | [**settingsPatch**](docs/Api/SettingsApi.md#settingspatch) | **PATCH** /settings | Update your settings
*SuppliersApi* | [**companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdDownloadGet**](docs/Api/SuppliersApi.md#companiescompanyidconnectionsconnectioniddatasupplierssupplieridattachmentsattachmentiddownloadget) | **GET** /companies/{companyId}/connections/{connectionId}/data/suppliers/{supplierId}/attachments/{attachmentId}/download | 
*SuppliersApi* | [**companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdGet**](docs/Api/SuppliersApi.md#companiescompanyidconnectionsconnectioniddatasupplierssupplieridattachmentsattachmentidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/suppliers/{supplierId}/attachments/{attachmentId} | 
*SuppliersApi* | [**companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsGet**](docs/Api/SuppliersApi.md#companiescompanyidconnectionsconnectioniddatasupplierssupplieridattachmentsget) | **GET** /companies/{companyId}/connections/{connectionId}/data/suppliers/{supplierId}/attachments | 
*SuppliersApi* | [**companiesCompanyIdConnectionsConnectionIdPushSuppliersPost**](docs/Api/SuppliersApi.md#companiescompanyidconnectionsconnectionidpushsupplierspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/suppliers | 
*SuppliersApi* | [**companiesCompanyIdConnectionsConnectionIdPushSuppliersSupplierIdPut**](docs/Api/SuppliersApi.md#companiescompanyidconnectionsconnectionidpushsupplierssupplieridput) | **PUT** /companies/{companyId}/connections/{connectionId}/push/suppliers/{supplierId} | 
*SuppliersApi* | [**companiesCompanyIdDataSuppliersGet**](docs/Api/SuppliersApi.md#companiescompanyiddatasuppliersget) | **GET** /companies/{companyId}/data/suppliers | Gets the latest suppliers for a company, with pagination
*SuppliersApi* | [**companiesCompanyIdDataSuppliersSupplierIdGet**](docs/Api/SuppliersApi.md#companiescompanyiddatasupplierssupplieridget) | **GET** /companies/{companyId}/data/suppliers/{supplierId} | Gets a single supplier corresponding to the supplied Id
*TaxRatesApi* | [**companiesCompanyIdDataTaxRatesGet**](docs/Api/TaxRatesApi.md#companiescompanyiddatataxratesget) | **GET** /companies/{companyId}/data/taxRates | Gets the latest tax rates for a given company.
*TaxRatesApi* | [**companiesCompanyIdDataTaxRatesTaxRateIdGet**](docs/Api/TaxRatesApi.md#companiescompanyiddatataxratestaxrateidget) | **GET** /companies/{companyId}/data/taxRates/{taxRateId} | Gets the specified tax rate for a given company.
*TrackingCategoriesApi* | [**companiesCompanyIdDataTrackingCategoriesGet**](docs/Api/TrackingCategoriesApi.md#companiescompanyiddatatrackingcategoriesget) | **GET** /companies/{companyId}/data/trackingCategories | Gets the latest tracking categories for a given company.
*TrackingCategoriesApi* | [**companiesCompanyIdDataTrackingCategoriesTrackingCategoryIdGet**](docs/Api/TrackingCategoriesApi.md#companiescompanyiddatatrackingcategoriestrackingcategoryidget) | **GET** /companies/{companyId}/data/trackingCategories/{trackingCategoryId} | Gets the specified tracking categories for a given company.
*TransfersApi* | [**companiesCompanyIdConnectionsConnectionIdDataTransfersGet**](docs/Api/TransfersApi.md#companiescompanyidconnectionsconnectioniddatatransfersget) | **GET** /companies/{companyId}/connections/{connectionId}/data/transfers | Gets the transfers for a given company.
*TransfersApi* | [**companiesCompanyIdConnectionsConnectionIdDataTransfersTransferIdGet**](docs/Api/TransfersApi.md#companiescompanyidconnectionsconnectioniddatatransferstransferidget) | **GET** /companies/{companyId}/connections/{connectionId}/data/transfers/{transferId} | Gets the specified transfer for a given company.
*TransfersApi* | [**companiesCompanyIdConnectionsConnectionIdPushTransfersPost**](docs/Api/TransfersApi.md#companiescompanyidconnectionsconnectionidpushtransferspost) | **POST** /companies/{companyId}/connections/{connectionId}/push/transfers | Posts a new transfer to the accounting package for a given company.

## Models

- [CodatAssessDataContractsCashFlowTransactionsAccountsDataSource](docs/Model/CodatAssessDataContractsCashFlowTransactionsAccountsDataSource.md)
- [CodatAssessDataContractsCashFlowTransactionsCashFlowReportBankingAccount](docs/Model/CodatAssessDataContractsCashFlowTransactionsCashFlowReportBankingAccount.md)
- [CodatAssessDataContractsCashFlowTransactionsCashFlowReportBankingTransaction](docs/Model/CodatAssessDataContractsCashFlowTransactionsCashFlowReportBankingTransaction.md)
- [CodatAssessDataContractsCashFlowTransactionsCashFlowTransactionsReport](docs/Model/CodatAssessDataContractsCashFlowTransactionsCashFlowTransactionsReport.md)
- [CodatAssessDataContractsCashFlowTransactionsSourceRef](docs/Model/CodatAssessDataContractsCashFlowTransactionsSourceRef.md)
- [CodatAssessDataContractsCashFlowTransactionsSourceType](docs/Model/CodatAssessDataContractsCashFlowTransactionsSourceType.md)
- [CodatAssessDataContractsCashFlowTransactionsTransactionCategory](docs/Model/CodatAssessDataContractsCashFlowTransactionsTransactionCategory.md)
- [CodatAssessDataContractsCashFlowTransactionsTransactionsDataSource](docs/Model/CodatAssessDataContractsCashFlowTransactionsTransactionsDataSource.md)
- [CodatAssessDataContractsCommerceMetricsPeriodUnit](docs/Model/CodatAssessDataContractsCommerceMetricsPeriodUnit.md)
- [CodatAssessDataContractsCommonPagedReportInfo](docs/Model/CodatAssessDataContractsCommonPagedReportInfo.md)
- [CodatAssessDataContractsFinancialsStatementsAccountCategory](docs/Model/CodatAssessDataContractsFinancialsStatementsAccountCategory.md)
- [CodatAssessDataContractsFinancialsStatementsAccountCategoryLevel](docs/Model/CodatAssessDataContractsFinancialsStatementsAccountCategoryLevel.md)
- [CodatAssessDataContractsFinancialsStatementsAccountCategoryStatus](docs/Model/CodatAssessDataContractsFinancialsStatementsAccountCategoryStatus.md)
- [CodatAssessDataContractsFinancialsStatementsEnhancedFinancialStatement](docs/Model/CodatAssessDataContractsFinancialsStatementsEnhancedFinancialStatement.md)
- [CodatAssessDataContractsFinancialsStatementsFinancialStatementReportInfo](docs/Model/CodatAssessDataContractsFinancialsStatementsFinancialStatementReportInfo.md)
- [CodatAssessDataContractsFinancialsStatementsFinancialStatementReportItem](docs/Model/CodatAssessDataContractsFinancialsStatementsFinancialStatementReportItem.md)
- [CodatClientsApiClientContractClientSyncSettings](docs/Model/CodatClientsApiClientContractClientSyncSettings.md)
- [CodatClientsApiClientContractCompanySettings](docs/Model/CodatClientsApiClientContractCompanySettings.md)
- [CodatClientsApiClientContractCompanySyncSettings](docs/Model/CodatClientsApiClientContractCompanySyncSettings.md)
- [CodatClientsApiClientContractSyncSetting](docs/Model/CodatClientsApiClientContractSyncSetting.md)
- [CodatDataContractsDatasetsAccount](docs/Model/CodatDataContractsDatasetsAccount.md)
- [CodatDataContractsDatasetsAccountPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsAccountPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsAccountPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsAccountPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsAccountPagedResponseModel](docs/Model/CodatDataContractsDatasetsAccountPagedResponseModel.md)
- [CodatDataContractsDatasetsAccountPushOperation](docs/Model/CodatDataContractsDatasetsAccountPushOperation.md)
- [CodatDataContractsDatasetsAccountRef](docs/Model/CodatDataContractsDatasetsAccountRef.md)
- [CodatDataContractsDatasetsAccountStatus](docs/Model/CodatDataContractsDatasetsAccountStatus.md)
- [CodatDataContractsDatasetsAccountTransaction](docs/Model/CodatDataContractsDatasetsAccountTransaction.md)
- [CodatDataContractsDatasetsAccountTransactionLine](docs/Model/CodatDataContractsDatasetsAccountTransactionLine.md)
- [CodatDataContractsDatasetsAccountTransactionPagedResponse](docs/Model/CodatDataContractsDatasetsAccountTransactionPagedResponse.md)
- [CodatDataContractsDatasetsAccountTransactionStatus](docs/Model/CodatDataContractsDatasetsAccountTransactionStatus.md)
- [CodatDataContractsDatasetsAccountType](docs/Model/CodatDataContractsDatasetsAccountType.md)
- [CodatDataContractsDatasetsAccountsPayableIsBilledToType](docs/Model/CodatDataContractsDatasetsAccountsPayableIsBilledToType.md)
- [CodatDataContractsDatasetsAccountsPayableTracking](docs/Model/CodatDataContractsDatasetsAccountsPayableTracking.md)
- [CodatDataContractsDatasetsAccountsReceivableIsBilledToType](docs/Model/CodatDataContractsDatasetsAccountsReceivableIsBilledToType.md)
- [CodatDataContractsDatasetsAccountsReceivableTracking](docs/Model/CodatDataContractsDatasetsAccountsReceivableTracking.md)
- [CodatDataContractsDatasetsAddress](docs/Model/CodatDataContractsDatasetsAddress.md)
- [CodatDataContractsDatasetsAddressType](docs/Model/CodatDataContractsDatasetsAddressType.md)
- [CodatDataContractsDatasetsAgedCreditorOutstanding](docs/Model/CodatDataContractsDatasetsAgedCreditorOutstanding.md)
- [CodatDataContractsDatasetsAgedCreditorOutstandingICollectionReport](docs/Model/CodatDataContractsDatasetsAgedCreditorOutstandingICollectionReport.md)
- [CodatDataContractsDatasetsAgedCurrencyOutstanding](docs/Model/CodatDataContractsDatasetsAgedCurrencyOutstanding.md)
- [CodatDataContractsDatasetsAgedDebtorOutstanding](docs/Model/CodatDataContractsDatasetsAgedDebtorOutstanding.md)
- [CodatDataContractsDatasetsAgedDebtorOutstandingICollectionReport](docs/Model/CodatDataContractsDatasetsAgedDebtorOutstandingICollectionReport.md)
- [CodatDataContractsDatasetsAgedOutstandingAmount](docs/Model/CodatDataContractsDatasetsAgedOutstandingAmount.md)
- [CodatDataContractsDatasetsAgedOutstandingAmountDetail](docs/Model/CodatDataContractsDatasetsAgedOutstandingAmountDetail.md)
- [CodatDataContractsDatasetsAllocation](docs/Model/CodatDataContractsDatasetsAllocation.md)
- [CodatDataContractsDatasetsAttachmentsDataset](docs/Model/CodatDataContractsDatasetsAttachmentsDataset.md)
- [CodatDataContractsDatasetsAttachmentsDatasetAttachment](docs/Model/CodatDataContractsDatasetsAttachmentsDatasetAttachment.md)
- [CodatDataContractsDatasetsBalanceSheet](docs/Model/CodatDataContractsDatasetsBalanceSheet.md)
- [CodatDataContractsDatasetsBankAccount](docs/Model/CodatDataContractsDatasetsBankAccount.md)
- [CodatDataContractsDatasetsBankAccountPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBankAccountPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBankAccountPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBankAccountPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBankAccountPagedResponseModel](docs/Model/CodatDataContractsDatasetsBankAccountPagedResponseModel.md)
- [CodatDataContractsDatasetsBankAccountPushOperation](docs/Model/CodatDataContractsDatasetsBankAccountPushOperation.md)
- [CodatDataContractsDatasetsBankAccountType](docs/Model/CodatDataContractsDatasetsBankAccountType.md)
- [CodatDataContractsDatasetsBankStatementAccount](docs/Model/CodatDataContractsDatasetsBankStatementAccount.md)
- [CodatDataContractsDatasetsBankStatementLine](docs/Model/CodatDataContractsDatasetsBankStatementLine.md)
- [CodatDataContractsDatasetsBankStatementLinePagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBankStatementLinePagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBankStatementLinePagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBankStatementLinePagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBankStatementLinePagedResponseModel](docs/Model/CodatDataContractsDatasetsBankStatementLinePagedResponseModel.md)
- [CodatDataContractsDatasetsBankTransaction](docs/Model/CodatDataContractsDatasetsBankTransaction.md)
- [CodatDataContractsDatasetsBankTransactionPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBankTransactionPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBankTransactionPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBankTransactionPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBankTransactionPagedResponseModel](docs/Model/CodatDataContractsDatasetsBankTransactionPagedResponseModel.md)
- [CodatDataContractsDatasetsBankTransactions](docs/Model/CodatDataContractsDatasetsBankTransactions.md)
- [CodatDataContractsDatasetsBankTransactionsPushOperation](docs/Model/CodatDataContractsDatasetsBankTransactionsPushOperation.md)
- [CodatDataContractsDatasetsBankingAccount](docs/Model/CodatDataContractsDatasetsBankingAccount.md)
- [CodatDataContractsDatasetsBankingAccountBalance](docs/Model/CodatDataContractsDatasetsBankingAccountBalance.md)
- [CodatDataContractsDatasetsBankingAccountBalanceAmounts](docs/Model/CodatDataContractsDatasetsBankingAccountBalanceAmounts.md)
- [CodatDataContractsDatasetsBankingAccountBalancePagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBankingAccountBalancePagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBankingAccountBalancePagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBankingAccountBalancePagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBankingAccountBalancePagedResponseModel](docs/Model/CodatDataContractsDatasetsBankingAccountBalancePagedResponseModel.md)
- [CodatDataContractsDatasetsBankingAccountIdentifiers](docs/Model/CodatDataContractsDatasetsBankingAccountIdentifiers.md)
- [CodatDataContractsDatasetsBankingAccountInstitution](docs/Model/CodatDataContractsDatasetsBankingAccountInstitution.md)
- [CodatDataContractsDatasetsBankingAccountPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBankingAccountPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBankingAccountPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBankingAccountPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBankingAccountPagedResponseModel](docs/Model/CodatDataContractsDatasetsBankingAccountPagedResponseModel.md)
- [CodatDataContractsDatasetsBankingAccountType](docs/Model/CodatDataContractsDatasetsBankingAccountType.md)
- [CodatDataContractsDatasetsBankingBankingTransactionCode](docs/Model/CodatDataContractsDatasetsBankingBankingTransactionCode.md)
- [CodatDataContractsDatasetsBankingTransaction](docs/Model/CodatDataContractsDatasetsBankingTransaction.md)
- [CodatDataContractsDatasetsBankingTransactionCategory](docs/Model/CodatDataContractsDatasetsBankingTransactionCategory.md)
- [CodatDataContractsDatasetsBankingTransactionCategoryPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBankingTransactionCategoryPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBankingTransactionCategoryPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBankingTransactionCategoryPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBankingTransactionCategoryPagedResponseModel](docs/Model/CodatDataContractsDatasetsBankingTransactionCategoryPagedResponseModel.md)
- [CodatDataContractsDatasetsBankingTransactionCategoryRef](docs/Model/CodatDataContractsDatasetsBankingTransactionCategoryRef.md)
- [CodatDataContractsDatasetsBankingTransactionCategoryStatus](docs/Model/CodatDataContractsDatasetsBankingTransactionCategoryStatus.md)
- [CodatDataContractsDatasetsBankingTransactionPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBankingTransactionPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBankingTransactionPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBankingTransactionPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBankingTransactionPagedResponseModel](docs/Model/CodatDataContractsDatasetsBankingTransactionPagedResponseModel.md)
- [CodatDataContractsDatasetsBill](docs/Model/CodatDataContractsDatasetsBill.md)
- [CodatDataContractsDatasetsBillCreditNote](docs/Model/CodatDataContractsDatasetsBillCreditNote.md)
- [CodatDataContractsDatasetsBillCreditNoteLineItem](docs/Model/CodatDataContractsDatasetsBillCreditNoteLineItem.md)
- [CodatDataContractsDatasetsBillCreditNotePagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBillCreditNotePagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBillCreditNotePagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBillCreditNotePagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBillCreditNotePagedResponseModel](docs/Model/CodatDataContractsDatasetsBillCreditNotePagedResponseModel.md)
- [CodatDataContractsDatasetsBillCreditNotePushOperation](docs/Model/CodatDataContractsDatasetsBillCreditNotePushOperation.md)
- [CodatDataContractsDatasetsBillItem](docs/Model/CodatDataContractsDatasetsBillItem.md)
- [CodatDataContractsDatasetsBillLineItem](docs/Model/CodatDataContractsDatasetsBillLineItem.md)
- [CodatDataContractsDatasetsBillPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBillPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBillPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBillPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBillPagedResponseModel](docs/Model/CodatDataContractsDatasetsBillPagedResponseModel.md)
- [CodatDataContractsDatasetsBillPayment](docs/Model/CodatDataContractsDatasetsBillPayment.md)
- [CodatDataContractsDatasetsBillPaymentLine](docs/Model/CodatDataContractsDatasetsBillPaymentLine.md)
- [CodatDataContractsDatasetsBillPaymentLineLink](docs/Model/CodatDataContractsDatasetsBillPaymentLineLink.md)
- [CodatDataContractsDatasetsBillPaymentLinkType](docs/Model/CodatDataContractsDatasetsBillPaymentLinkType.md)
- [CodatDataContractsDatasetsBillPaymentPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsBillPaymentPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsBillPaymentPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsBillPaymentPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsBillPaymentPagedResponseModel](docs/Model/CodatDataContractsDatasetsBillPaymentPagedResponseModel.md)
- [CodatDataContractsDatasetsBillPaymentPushOperation](docs/Model/CodatDataContractsDatasetsBillPaymentPushOperation.md)
- [CodatDataContractsDatasetsBillPushOperation](docs/Model/CodatDataContractsDatasetsBillPushOperation.md)
- [CodatDataContractsDatasetsBillStatus](docs/Model/CodatDataContractsDatasetsBillStatus.md)
- [CodatDataContractsDatasetsCashFlowStatement](docs/Model/CodatDataContractsDatasetsCashFlowStatement.md)
- [CodatDataContractsDatasetsCashFlowStatementReportingBasis](docs/Model/CodatDataContractsDatasetsCashFlowStatementReportingBasis.md)
- [CodatDataContractsDatasetsCashFlowStatementReportingData](docs/Model/CodatDataContractsDatasetsCashFlowStatementReportingData.md)
- [CodatDataContractsDatasetsCommerceAccountBalance](docs/Model/CodatDataContractsDatasetsCommerceAccountBalance.md)
- [CodatDataContractsDatasetsCommerceAddress](docs/Model/CodatDataContractsDatasetsCommerceAddress.md)
- [CodatDataContractsDatasetsCommerceAddressType](docs/Model/CodatDataContractsDatasetsCommerceAddressType.md)
- [CodatDataContractsDatasetsCommerceAncestorRef](docs/Model/CodatDataContractsDatasetsCommerceAncestorRef.md)
- [CodatDataContractsDatasetsCommerceCompanyInfo](docs/Model/CodatDataContractsDatasetsCommerceCompanyInfo.md)
- [CodatDataContractsDatasetsCommerceCustomer](docs/Model/CodatDataContractsDatasetsCommerceCustomer.md)
- [CodatDataContractsDatasetsCommerceCustomerPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCommerceCustomerPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCommerceCustomerPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCommerceCustomerPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCommerceCustomerPagedResponseModel](docs/Model/CodatDataContractsDatasetsCommerceCustomerPagedResponseModel.md)
- [CodatDataContractsDatasetsCommerceCustomerRef](docs/Model/CodatDataContractsDatasetsCommerceCustomerRef.md)
- [CodatDataContractsDatasetsCommerceDiscountAllocation](docs/Model/CodatDataContractsDatasetsCommerceDiscountAllocation.md)
- [CodatDataContractsDatasetsCommerceDispute](docs/Model/CodatDataContractsDatasetsCommerceDispute.md)
- [CodatDataContractsDatasetsCommerceDisputePagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCommerceDisputePagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCommerceDisputePagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCommerceDisputePagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCommerceDisputePagedResponseModel](docs/Model/CodatDataContractsDatasetsCommerceDisputePagedResponseModel.md)
- [CodatDataContractsDatasetsCommerceDisputeStatus](docs/Model/CodatDataContractsDatasetsCommerceDisputeStatus.md)
- [CodatDataContractsDatasetsCommerceInventory](docs/Model/CodatDataContractsDatasetsCommerceInventory.md)
- [CodatDataContractsDatasetsCommerceInventoryLocation](docs/Model/CodatDataContractsDatasetsCommerceInventoryLocation.md)
- [CodatDataContractsDatasetsCommerceLocation](docs/Model/CodatDataContractsDatasetsCommerceLocation.md)
- [CodatDataContractsDatasetsCommerceLocationPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCommerceLocationPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCommerceLocationPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCommerceLocationPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCommerceLocationPagedResponseModel](docs/Model/CodatDataContractsDatasetsCommerceLocationPagedResponseModel.md)
- [CodatDataContractsDatasetsCommerceLocationRef](docs/Model/CodatDataContractsDatasetsCommerceLocationRef.md)
- [CodatDataContractsDatasetsCommerceOrder](docs/Model/CodatDataContractsDatasetsCommerceOrder.md)
- [CodatDataContractsDatasetsCommerceOrderLineItem](docs/Model/CodatDataContractsDatasetsCommerceOrderLineItem.md)
- [CodatDataContractsDatasetsCommerceOrderPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCommerceOrderPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCommerceOrderPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCommerceOrderPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCommerceOrderPagedResponseModel](docs/Model/CodatDataContractsDatasetsCommerceOrderPagedResponseModel.md)
- [CodatDataContractsDatasetsCommercePayment](docs/Model/CodatDataContractsDatasetsCommercePayment.md)
- [CodatDataContractsDatasetsCommercePaymentMethod](docs/Model/CodatDataContractsDatasetsCommercePaymentMethod.md)
- [CodatDataContractsDatasetsCommercePaymentMethodPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCommercePaymentMethodPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCommercePaymentMethodPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCommercePaymentMethodPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCommercePaymentMethodPagedResponseModel](docs/Model/CodatDataContractsDatasetsCommercePaymentMethodPagedResponseModel.md)
- [CodatDataContractsDatasetsCommercePaymentMethodRef](docs/Model/CodatDataContractsDatasetsCommercePaymentMethodRef.md)
- [CodatDataContractsDatasetsCommercePaymentMethodStatus](docs/Model/CodatDataContractsDatasetsCommercePaymentMethodStatus.md)
- [CodatDataContractsDatasetsCommercePaymentPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCommercePaymentPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCommercePaymentPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCommercePaymentPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCommercePaymentPagedResponseModel](docs/Model/CodatDataContractsDatasetsCommercePaymentPagedResponseModel.md)
- [CodatDataContractsDatasetsCommercePaymentRef](docs/Model/CodatDataContractsDatasetsCommercePaymentRef.md)
- [CodatDataContractsDatasetsCommercePaymentStatus](docs/Model/CodatDataContractsDatasetsCommercePaymentStatus.md)
- [CodatDataContractsDatasetsCommercePaymentType](docs/Model/CodatDataContractsDatasetsCommercePaymentType.md)
- [CodatDataContractsDatasetsCommercePhone](docs/Model/CodatDataContractsDatasetsCommercePhone.md)
- [CodatDataContractsDatasetsCommercePhoneType](docs/Model/CodatDataContractsDatasetsCommercePhoneType.md)
- [CodatDataContractsDatasetsCommercePlatformTransactionType](docs/Model/CodatDataContractsDatasetsCommercePlatformTransactionType.md)
- [CodatDataContractsDatasetsCommerceProduct](docs/Model/CodatDataContractsDatasetsCommerceProduct.md)
- [CodatDataContractsDatasetsCommerceProductCategory](docs/Model/CodatDataContractsDatasetsCommerceProductCategory.md)
- [CodatDataContractsDatasetsCommerceProductCategoryPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCommerceProductCategoryPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCommerceProductCategoryPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCommerceProductCategoryPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCommerceProductCategoryPagedResponseModel](docs/Model/CodatDataContractsDatasetsCommerceProductCategoryPagedResponseModel.md)
- [CodatDataContractsDatasetsCommerceProductCategoryRef](docs/Model/CodatDataContractsDatasetsCommerceProductCategoryRef.md)
- [CodatDataContractsDatasetsCommerceProductPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCommerceProductPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCommerceProductPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCommerceProductPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCommerceProductPagedResponseModel](docs/Model/CodatDataContractsDatasetsCommerceProductPagedResponseModel.md)
- [CodatDataContractsDatasetsCommerceProductRef](docs/Model/CodatDataContractsDatasetsCommerceProductRef.md)
- [CodatDataContractsDatasetsCommerceProductStatus](docs/Model/CodatDataContractsDatasetsCommerceProductStatus.md)
- [CodatDataContractsDatasetsCommerceProductVariant](docs/Model/CodatDataContractsDatasetsCommerceProductVariant.md)
- [CodatDataContractsDatasetsCommerceProductVariantPrice](docs/Model/CodatDataContractsDatasetsCommerceProductVariantPrice.md)
- [CodatDataContractsDatasetsCommerceServiceCharge](docs/Model/CodatDataContractsDatasetsCommerceServiceCharge.md)
- [CodatDataContractsDatasetsCommerceServiceChargeType](docs/Model/CodatDataContractsDatasetsCommerceServiceChargeType.md)
- [CodatDataContractsDatasetsCommerceTaxComponentAllocation](docs/Model/CodatDataContractsDatasetsCommerceTaxComponentAllocation.md)
- [CodatDataContractsDatasetsCommerceTaxComponentRef](docs/Model/CodatDataContractsDatasetsCommerceTaxComponentRef.md)
- [CodatDataContractsDatasetsCommerceTransaction](docs/Model/CodatDataContractsDatasetsCommerceTransaction.md)
- [CodatDataContractsDatasetsCommerceTransactionPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCommerceTransactionPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCommerceTransactionPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCommerceTransactionPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCommerceTransactionPagedResponseModel](docs/Model/CodatDataContractsDatasetsCommerceTransactionPagedResponseModel.md)
- [CodatDataContractsDatasetsCommerceTransactionRefType](docs/Model/CodatDataContractsDatasetsCommerceTransactionRefType.md)
- [CodatDataContractsDatasetsCommerceTransactionSourceRef](docs/Model/CodatDataContractsDatasetsCommerceTransactionSourceRef.md)
- [CodatDataContractsDatasetsCommerceWebLink](docs/Model/CodatDataContractsDatasetsCommerceWebLink.md)
- [CodatDataContractsDatasetsCommerceWebLinkType](docs/Model/CodatDataContractsDatasetsCommerceWebLinkType.md)
- [CodatDataContractsDatasetsCompanyDataset](docs/Model/CodatDataContractsDatasetsCompanyDataset.md)
- [CodatDataContractsDatasetsContact](docs/Model/CodatDataContractsDatasetsContact.md)
- [CodatDataContractsDatasetsContactRef](docs/Model/CodatDataContractsDatasetsContactRef.md)
- [CodatDataContractsDatasetsCreditNote](docs/Model/CodatDataContractsDatasetsCreditNote.md)
- [CodatDataContractsDatasetsCreditNoteLineItem](docs/Model/CodatDataContractsDatasetsCreditNoteLineItem.md)
- [CodatDataContractsDatasetsCreditNotePagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCreditNotePagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCreditNotePagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCreditNotePagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCreditNotePagedResponseModel](docs/Model/CodatDataContractsDatasetsCreditNotePagedResponseModel.md)
- [CodatDataContractsDatasetsCreditNotePushOperation](docs/Model/CodatDataContractsDatasetsCreditNotePushOperation.md)
- [CodatDataContractsDatasetsCreditNoteStatus](docs/Model/CodatDataContractsDatasetsCreditNoteStatus.md)
- [CodatDataContractsDatasetsCustomer](docs/Model/CodatDataContractsDatasetsCustomer.md)
- [CodatDataContractsDatasetsCustomerPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsCustomerPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsCustomerPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsCustomerPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsCustomerPagedResponseModel](docs/Model/CodatDataContractsDatasetsCustomerPagedResponseModel.md)
- [CodatDataContractsDatasetsCustomerPushOperation](docs/Model/CodatDataContractsDatasetsCustomerPushOperation.md)
- [CodatDataContractsDatasetsCustomerRef](docs/Model/CodatDataContractsDatasetsCustomerRef.md)
- [CodatDataContractsDatasetsCustomerStatus](docs/Model/CodatDataContractsDatasetsCustomerStatus.md)
- [CodatDataContractsDatasetsDataInterfacesSupplementalData](docs/Model/CodatDataContractsDatasetsDataInterfacesSupplementalData.md)
- [CodatDataContractsDatasetsDetailedPaymentAllocation](docs/Model/CodatDataContractsDatasetsDetailedPaymentAllocation.md)
- [CodatDataContractsDatasetsDirectCost](docs/Model/CodatDataContractsDatasetsDirectCost.md)
- [CodatDataContractsDatasetsDirectCostLineItem](docs/Model/CodatDataContractsDatasetsDirectCostLineItem.md)
- [CodatDataContractsDatasetsDirectCostPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsDirectCostPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsDirectCostPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsDirectCostPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsDirectCostPagedResponseModel](docs/Model/CodatDataContractsDatasetsDirectCostPagedResponseModel.md)
- [CodatDataContractsDatasetsDirectCostPushOperation](docs/Model/CodatDataContractsDatasetsDirectCostPushOperation.md)
- [CodatDataContractsDatasetsDirectIncome](docs/Model/CodatDataContractsDatasetsDirectIncome.md)
- [CodatDataContractsDatasetsDirectIncomeLineItem](docs/Model/CodatDataContractsDatasetsDirectIncomeLineItem.md)
- [CodatDataContractsDatasetsDirectIncomePagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsDirectIncomePagedResponseHrefModel.md)
- [CodatDataContractsDatasetsDirectIncomePagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsDirectIncomePagedResponseLinksModel.md)
- [CodatDataContractsDatasetsDirectIncomePagedResponseModel](docs/Model/CodatDataContractsDatasetsDirectIncomePagedResponseModel.md)
- [CodatDataContractsDatasetsDirectIncomePushOperation](docs/Model/CodatDataContractsDatasetsDirectIncomePushOperation.md)
- [CodatDataContractsDatasetsFromAccount](docs/Model/CodatDataContractsDatasetsFromAccount.md)
- [CodatDataContractsDatasetsInvoice](docs/Model/CodatDataContractsDatasetsInvoice.md)
- [CodatDataContractsDatasetsInvoiceItem](docs/Model/CodatDataContractsDatasetsInvoiceItem.md)
- [CodatDataContractsDatasetsInvoiceLineItem](docs/Model/CodatDataContractsDatasetsInvoiceLineItem.md)
- [CodatDataContractsDatasetsInvoicePagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsInvoicePagedResponseHrefModel.md)
- [CodatDataContractsDatasetsInvoicePagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsInvoicePagedResponseLinksModel.md)
- [CodatDataContractsDatasetsInvoicePagedResponseModel](docs/Model/CodatDataContractsDatasetsInvoicePagedResponseModel.md)
- [CodatDataContractsDatasetsInvoicePushOperation](docs/Model/CodatDataContractsDatasetsInvoicePushOperation.md)
- [CodatDataContractsDatasetsInvoiceStatus](docs/Model/CodatDataContractsDatasetsInvoiceStatus.md)
- [CodatDataContractsDatasetsInvoiceableTracking](docs/Model/CodatDataContractsDatasetsInvoiceableTracking.md)
- [CodatDataContractsDatasetsInvoicingStatus](docs/Model/CodatDataContractsDatasetsInvoicingStatus.md)
- [CodatDataContractsDatasetsItem](docs/Model/CodatDataContractsDatasetsItem.md)
- [CodatDataContractsDatasetsItemPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsItemPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsItemPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsItemPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsItemPagedResponseModel](docs/Model/CodatDataContractsDatasetsItemPagedResponseModel.md)
- [CodatDataContractsDatasetsItemPushOperation](docs/Model/CodatDataContractsDatasetsItemPushOperation.md)
- [CodatDataContractsDatasetsItemRef](docs/Model/CodatDataContractsDatasetsItemRef.md)
- [CodatDataContractsDatasetsItemStatus](docs/Model/CodatDataContractsDatasetsItemStatus.md)
- [CodatDataContractsDatasetsItemType](docs/Model/CodatDataContractsDatasetsItemType.md)
- [CodatDataContractsDatasetsJournal](docs/Model/CodatDataContractsDatasetsJournal.md)
- [CodatDataContractsDatasetsJournalEntry](docs/Model/CodatDataContractsDatasetsJournalEntry.md)
- [CodatDataContractsDatasetsJournalEntryPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsJournalEntryPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsJournalEntryPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsJournalEntryPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsJournalEntryPagedResponseModel](docs/Model/CodatDataContractsDatasetsJournalEntryPagedResponseModel.md)
- [CodatDataContractsDatasetsJournalEntryPushOperation](docs/Model/CodatDataContractsDatasetsJournalEntryPushOperation.md)
- [CodatDataContractsDatasetsJournalLine](docs/Model/CodatDataContractsDatasetsJournalLine.md)
- [CodatDataContractsDatasetsJournalPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsJournalPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsJournalPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsJournalPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsJournalPagedResponseModel](docs/Model/CodatDataContractsDatasetsJournalPagedResponseModel.md)
- [CodatDataContractsDatasetsJournalPushOperation](docs/Model/CodatDataContractsDatasetsJournalPushOperation.md)
- [CodatDataContractsDatasetsJournalRef](docs/Model/CodatDataContractsDatasetsJournalRef.md)
- [CodatDataContractsDatasetsJournalStatus](docs/Model/CodatDataContractsDatasetsJournalStatus.md)
- [CodatDataContractsDatasetsMetadata](docs/Model/CodatDataContractsDatasetsMetadata.md)
- [CodatDataContractsDatasetsPayment](docs/Model/CodatDataContractsDatasetsPayment.md)
- [CodatDataContractsDatasetsPaymentAllocationPayment](docs/Model/CodatDataContractsDatasetsPaymentAllocationPayment.md)
- [CodatDataContractsDatasetsPaymentLine](docs/Model/CodatDataContractsDatasetsPaymentLine.md)
- [CodatDataContractsDatasetsPaymentLineLink](docs/Model/CodatDataContractsDatasetsPaymentLineLink.md)
- [CodatDataContractsDatasetsPaymentLinkType](docs/Model/CodatDataContractsDatasetsPaymentLinkType.md)
- [CodatDataContractsDatasetsPaymentMethod](docs/Model/CodatDataContractsDatasetsPaymentMethod.md)
- [CodatDataContractsDatasetsPaymentMethodPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsPaymentMethodPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsPaymentMethodPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsPaymentMethodPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsPaymentMethodPagedResponseModel](docs/Model/CodatDataContractsDatasetsPaymentMethodPagedResponseModel.md)
- [CodatDataContractsDatasetsPaymentMethodRef](docs/Model/CodatDataContractsDatasetsPaymentMethodRef.md)
- [CodatDataContractsDatasetsPaymentMethodStatus](docs/Model/CodatDataContractsDatasetsPaymentMethodStatus.md)
- [CodatDataContractsDatasetsPaymentMethodType](docs/Model/CodatDataContractsDatasetsPaymentMethodType.md)
- [CodatDataContractsDatasetsPaymentPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsPaymentPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsPaymentPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsPaymentPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsPaymentPagedResponseModel](docs/Model/CodatDataContractsDatasetsPaymentPagedResponseModel.md)
- [CodatDataContractsDatasetsPaymentPushOperation](docs/Model/CodatDataContractsDatasetsPaymentPushOperation.md)
- [CodatDataContractsDatasetsPhone](docs/Model/CodatDataContractsDatasetsPhone.md)
- [CodatDataContractsDatasetsPhoneType](docs/Model/CodatDataContractsDatasetsPhoneType.md)
- [CodatDataContractsDatasetsProfitAndLossReport](docs/Model/CodatDataContractsDatasetsProfitAndLossReport.md)
- [CodatDataContractsDatasetsProfitAndLossReportingType](docs/Model/CodatDataContractsDatasetsProfitAndLossReportingType.md)
- [CodatDataContractsDatasetsProjectRef](docs/Model/CodatDataContractsDatasetsProjectRef.md)
- [CodatDataContractsDatasetsPurchaseOrder](docs/Model/CodatDataContractsDatasetsPurchaseOrder.md)
- [CodatDataContractsDatasetsPurchaseOrderLineItem](docs/Model/CodatDataContractsDatasetsPurchaseOrderLineItem.md)
- [CodatDataContractsDatasetsPurchaseOrderPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsPurchaseOrderPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsPurchaseOrderPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsPurchaseOrderPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsPurchaseOrderPagedResponseModel](docs/Model/CodatDataContractsDatasetsPurchaseOrderPagedResponseModel.md)
- [CodatDataContractsDatasetsPurchaseOrderPushOperation](docs/Model/CodatDataContractsDatasetsPurchaseOrderPushOperation.md)
- [CodatDataContractsDatasetsPurchaseOrderRef](docs/Model/CodatDataContractsDatasetsPurchaseOrderRef.md)
- [CodatDataContractsDatasetsPurchaseOrderStatus](docs/Model/CodatDataContractsDatasetsPurchaseOrderStatus.md)
- [CodatDataContractsDatasetsRecordRef](docs/Model/CodatDataContractsDatasetsRecordRef.md)
- [CodatDataContractsDatasetsReportLine](docs/Model/CodatDataContractsDatasetsReportLine.md)
- [CodatDataContractsDatasetsSalesOrder](docs/Model/CodatDataContractsDatasetsSalesOrder.md)
- [CodatDataContractsDatasetsSalesOrderLineItem](docs/Model/CodatDataContractsDatasetsSalesOrderLineItem.md)
- [CodatDataContractsDatasetsSalesOrderPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsSalesOrderPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsSalesOrderPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsSalesOrderPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsSalesOrderPagedResponseModel](docs/Model/CodatDataContractsDatasetsSalesOrderPagedResponseModel.md)
- [CodatDataContractsDatasetsSalesOrderStatus](docs/Model/CodatDataContractsDatasetsSalesOrderStatus.md)
- [CodatDataContractsDatasetsShipTo](docs/Model/CodatDataContractsDatasetsShipTo.md)
- [CodatDataContractsDatasetsShipToContact](docs/Model/CodatDataContractsDatasetsShipToContact.md)
- [CodatDataContractsDatasetsSupplier](docs/Model/CodatDataContractsDatasetsSupplier.md)
- [CodatDataContractsDatasetsSupplierPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsSupplierPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsSupplierPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsSupplierPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsSupplierPagedResponseModel](docs/Model/CodatDataContractsDatasetsSupplierPagedResponseModel.md)
- [CodatDataContractsDatasetsSupplierPushOperation](docs/Model/CodatDataContractsDatasetsSupplierPushOperation.md)
- [CodatDataContractsDatasetsSupplierRef](docs/Model/CodatDataContractsDatasetsSupplierRef.md)
- [CodatDataContractsDatasetsSupplierStatus](docs/Model/CodatDataContractsDatasetsSupplierStatus.md)
- [CodatDataContractsDatasetsTaxRate](docs/Model/CodatDataContractsDatasetsTaxRate.md)
- [CodatDataContractsDatasetsTaxRateComponent](docs/Model/CodatDataContractsDatasetsTaxRateComponent.md)
- [CodatDataContractsDatasetsTaxRatePagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsTaxRatePagedResponseHrefModel.md)
- [CodatDataContractsDatasetsTaxRatePagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsTaxRatePagedResponseLinksModel.md)
- [CodatDataContractsDatasetsTaxRatePagedResponseModel](docs/Model/CodatDataContractsDatasetsTaxRatePagedResponseModel.md)
- [CodatDataContractsDatasetsTaxRateRef](docs/Model/CodatDataContractsDatasetsTaxRateRef.md)
- [CodatDataContractsDatasetsTaxRateStatus](docs/Model/CodatDataContractsDatasetsTaxRateStatus.md)
- [CodatDataContractsDatasetsToAccount](docs/Model/CodatDataContractsDatasetsToAccount.md)
- [CodatDataContractsDatasetsTracking](docs/Model/CodatDataContractsDatasetsTracking.md)
- [CodatDataContractsDatasetsTrackingCategoryRef](docs/Model/CodatDataContractsDatasetsTrackingCategoryRef.md)
- [CodatDataContractsDatasetsTrackingCategoryStatus](docs/Model/CodatDataContractsDatasetsTrackingCategoryStatus.md)
- [CodatDataContractsDatasetsTransactionType](docs/Model/CodatDataContractsDatasetsTransactionType.md)
- [CodatDataContractsDatasetsTransfer](docs/Model/CodatDataContractsDatasetsTransfer.md)
- [CodatDataContractsDatasetsTransferPagedResponseHrefModel](docs/Model/CodatDataContractsDatasetsTransferPagedResponseHrefModel.md)
- [CodatDataContractsDatasetsTransferPagedResponseLinksModel](docs/Model/CodatDataContractsDatasetsTransferPagedResponseLinksModel.md)
- [CodatDataContractsDatasetsTransferPagedResponseModel](docs/Model/CodatDataContractsDatasetsTransferPagedResponseModel.md)
- [CodatDataContractsDatasetsTransferPushOperation](docs/Model/CodatDataContractsDatasetsTransferPushOperation.md)
- [CodatDataContractsDatasetsTransferStatus](docs/Model/CodatDataContractsDatasetsTransferStatus.md)
- [CodatDataContractsDatasetsValidDatatypeLinks](docs/Model/CodatDataContractsDatasetsValidDatatypeLinks.md)
- [CodatDataContractsDatasetsWebLink](docs/Model/CodatDataContractsDatasetsWebLink.md)
- [CodatDataContractsDatasetsWebLinkType](docs/Model/CodatDataContractsDatasetsWebLinkType.md)
- [CodatDataContractsDatasetsWithholdingTax](docs/Model/CodatDataContractsDatasetsWithholdingTax.md)
- [CodatDataContractsPushOptionType](docs/Model/CodatDataContractsPushOptionType.md)
- [CodatDataContractsPushPushChangeType](docs/Model/CodatDataContractsPushPushChangeType.md)
- [CodatDataContractsPushPushFieldValidation](docs/Model/CodatDataContractsPushPushFieldValidation.md)
- [CodatDataContractsPushPushOperationChange](docs/Model/CodatDataContractsPushPushOperationChange.md)
- [CodatDataContractsPushPushOperationRecordRef](docs/Model/CodatDataContractsPushPushOperationRecordRef.md)
- [CodatDataContractsPushPushOption](docs/Model/CodatDataContractsPushPushOption.md)
- [CodatDataContractsPushPushOptionChoice](docs/Model/CodatDataContractsPushPushOptionChoice.md)
- [CodatDataContractsPushPushValidationInfo](docs/Model/CodatDataContractsPushPushValidationInfo.md)
- [CodatDataContractsResponsesHalLink](docs/Model/CodatDataContractsResponsesHalLink.md)
- [CodatDataContractsValidationValidationItem](docs/Model/CodatDataContractsValidationValidationItem.md)
- [CodatDataContractsValidationValidationResult](docs/Model/CodatDataContractsValidationValidationResult.md)
- [CodatDataIntegrityContractsDetailsTransactionDetails](docs/Model/CodatDataIntegrityContractsDetailsTransactionDetails.md)
- [CodatDataIntegrityContractsDetailsTransactionDetailsPagedResponse](docs/Model/CodatDataIntegrityContractsDetailsTransactionDetailsPagedResponse.md)
- [CodatDataIntegrityContractsMetadataMatchAmountInfo](docs/Model/CodatDataIntegrityContractsMetadataMatchAmountInfo.md)
- [CodatDataIntegrityContractsMetadataMatchConnectionIds](docs/Model/CodatDataIntegrityContractsMetadataMatchConnectionIds.md)
- [CodatDataIntegrityContractsMetadataMatchDateInfo](docs/Model/CodatDataIntegrityContractsMetadataMatchDateInfo.md)
- [CodatDataIntegrityContractsMetadataMatchMetadata](docs/Model/CodatDataIntegrityContractsMetadataMatchMetadata.md)
- [CodatDataIntegrityContractsMetadataMatchMetadataResponse](docs/Model/CodatDataIntegrityContractsMetadataMatchMetadataResponse.md)
- [CodatDataIntegrityContractsMetadataMatchStatusInfo](docs/Model/CodatDataIntegrityContractsMetadataMatchStatusInfo.md)
- [CodatDataIntegrityContractsMetadataRunStatus](docs/Model/CodatDataIntegrityContractsMetadataRunStatus.md)
- [CodatDataIntegrityContractsReportsBankingTransactionRef](docs/Model/CodatDataIntegrityContractsReportsBankingTransactionRef.md)
- [CodatDataIntegrityContractsReportsCustomerRef](docs/Model/CodatDataIntegrityContractsReportsCustomerRef.md)
- [CodatDataIntegrityContractsReportsInvoice](docs/Model/CodatDataIntegrityContractsReportsInvoice.md)
- [CodatDataIntegrityContractsReportsInvoicesReport](docs/Model/CodatDataIntegrityContractsReportsInvoicesReport.md)
- [CodatDataIntegrityContractsReportsPayment](docs/Model/CodatDataIntegrityContractsReportsPayment.md)
- [CodatDataIntegrityContractsSummaryMatchAmountSummary](docs/Model/CodatDataIntegrityContractsSummaryMatchAmountSummary.md)
- [CodatDataIntegrityContractsSummaryMatchCountSummary](docs/Model/CodatDataIntegrityContractsSummaryMatchCountSummary.md)
- [CodatDataIntegrityContractsSummaryMatchSummariesResponse](docs/Model/CodatDataIntegrityContractsSummaryMatchSummariesResponse.md)
- [CodatDataIntegrityContractsSummaryMatchSummary](docs/Model/CodatDataIntegrityContractsSummaryMatchSummary.md)
- [CodatPublicApiModelsAssessAssessExcelMeta](docs/Model/CodatPublicApiModelsAssessAssessExcelMeta.md)
- [CodatPublicApiModelsClientsBankingSettingsModelsBankIntegration](docs/Model/CodatPublicApiModelsClientsBankingSettingsModelsBankIntegration.md)
- [CodatPublicApiModelsClientsBankingSettingsModelsBankSetting](docs/Model/CodatPublicApiModelsClientsBankingSettingsModelsBankSetting.md)
- [CodatPublicApiModelsClientsBankingSettingsModelsBankSettingsDataset](docs/Model/CodatPublicApiModelsClientsBankingSettingsModelsBankSettingsDataset.md)
- [CodatPublicApiModelsClientsClientCompanyMetricsModel](docs/Model/CodatPublicApiModelsClientsClientCompanyMetricsModel.md)
- [CodatPublicApiModelsClientsClientSettingsModel](docs/Model/CodatPublicApiModelsClientsClientSettingsModel.md)
- [CodatPublicApiModelsClientsClientSettingsPatchModel](docs/Model/CodatPublicApiModelsClientsClientSettingsPatchModel.md)
- [CodatPublicApiModelsClientsClientSyncSettingsModel](docs/Model/CodatPublicApiModelsClientsClientSyncSettingsModel.md)
- [CodatPublicApiModelsClientsClientSyncSettingsSinglePutModel](docs/Model/CodatPublicApiModelsClientsClientSyncSettingsSinglePutModel.md)
- [CodatPublicApiModelsClientsIntegrationBrandingModel](docs/Model/CodatPublicApiModelsClientsIntegrationBrandingModel.md)
- [CodatPublicApiModelsClientsIntegrationBrandingModelButtonModel](docs/Model/CodatPublicApiModelsClientsIntegrationBrandingModelButtonModel.md)
- [CodatPublicApiModelsClientsIntegrationBrandingModelDefaultModel](docs/Model/CodatPublicApiModelsClientsIntegrationBrandingModelDefaultModel.md)
- [CodatPublicApiModelsClientsIntegrationBrandingModelFullModel](docs/Model/CodatPublicApiModelsClientsIntegrationBrandingModelFullModel.md)
- [CodatPublicApiModelsClientsIntegrationBrandingModelHoverModel](docs/Model/CodatPublicApiModelsClientsIntegrationBrandingModelHoverModel.md)
- [CodatPublicApiModelsClientsIntegrationBrandingModelImageModel](docs/Model/CodatPublicApiModelsClientsIntegrationBrandingModelImageModel.md)
- [CodatPublicApiModelsClientsIntegrationBrandingModelLogoModel](docs/Model/CodatPublicApiModelsClientsIntegrationBrandingModelLogoModel.md)
- [CodatPublicApiModelsClientsIntegrationBrandingModelSquareModel](docs/Model/CodatPublicApiModelsClientsIntegrationBrandingModelSquareModel.md)
- [CodatPublicApiModelsClientsIntegrationSettingsModel](docs/Model/CodatPublicApiModelsClientsIntegrationSettingsModel.md)
- [CodatPublicApiModelsClientsIntegrationSettingsPatchModel](docs/Model/CodatPublicApiModelsClientsIntegrationSettingsPatchModel.md)
- [CodatPublicApiModelsCompanyAddCompanyModel](docs/Model/CodatPublicApiModelsCompanyAddCompanyModel.md)
- [CodatPublicApiModelsCompanyCompany](docs/Model/CodatPublicApiModelsCompanyCompany.md)
- [CodatPublicApiModelsCompanyCompanyEventStream](docs/Model/CodatPublicApiModelsCompanyCompanyEventStream.md)
- [CodatPublicApiModelsCompanyCompanyEventStreamItem](docs/Model/CodatPublicApiModelsCompanyCompanyEventStreamItem.md)
- [CodatPublicApiModelsCompanyCompanyPagedResponseHrefModel](docs/Model/CodatPublicApiModelsCompanyCompanyPagedResponseHrefModel.md)
- [CodatPublicApiModelsCompanyCompanyPagedResponseLinksModel](docs/Model/CodatPublicApiModelsCompanyCompanyPagedResponseLinksModel.md)
- [CodatPublicApiModelsCompanyCompanyPagedResponseModel](docs/Model/CodatPublicApiModelsCompanyCompanyPagedResponseModel.md)
- [CodatPublicApiModelsCompanyCompanySettings](docs/Model/CodatPublicApiModelsCompanyCompanySettings.md)
- [CodatPublicApiModelsCompanyDataConnection](docs/Model/CodatPublicApiModelsCompanyDataConnection.md)
- [CodatPublicApiModelsCompanyDataConnectionError](docs/Model/CodatPublicApiModelsCompanyDataConnectionError.md)
- [CodatPublicApiModelsCompanyDataConnectionPagedResponseHrefModel](docs/Model/CodatPublicApiModelsCompanyDataConnectionPagedResponseHrefModel.md)
- [CodatPublicApiModelsCompanyDataConnectionPagedResponseLinksModel](docs/Model/CodatPublicApiModelsCompanyDataConnectionPagedResponseLinksModel.md)
- [CodatPublicApiModelsCompanyDataConnectionPagedResponseModel](docs/Model/CodatPublicApiModelsCompanyDataConnectionPagedResponseModel.md)
- [CodatPublicApiModelsCompanyPatchDataConnectionModel](docs/Model/CodatPublicApiModelsCompanyPatchDataConnectionModel.md)
- [CodatPublicApiModelsCompanyProfileModel](docs/Model/CodatPublicApiModelsCompanyProfileModel.md)
- [CodatPublicApiModelsCompanyUpdateCompanyModel](docs/Model/CodatPublicApiModelsCompanyUpdateCompanyModel.md)
- [CodatPublicApiModelsDataAccountResponse](docs/Model/CodatPublicApiModelsDataAccountResponse.md)
- [CodatPublicApiModelsDataAccountStatusResponse](docs/Model/CodatPublicApiModelsDataAccountStatusResponse.md)
- [CodatPublicApiModelsDataAccountTypeResponse](docs/Model/CodatPublicApiModelsDataAccountTypeResponse.md)
- [CodatPublicApiModelsDataBalanceSheetResponse](docs/Model/CodatPublicApiModelsDataBalanceSheetResponse.md)
- [CodatPublicApiModelsDataCashFlowStatementResponse](docs/Model/CodatPublicApiModelsDataCashFlowStatementResponse.md)
- [CodatPublicApiModelsDataConnectionArgs](docs/Model/CodatPublicApiModelsDataConnectionArgs.md)
- [CodatPublicApiModelsDataDataSet](docs/Model/CodatPublicApiModelsDataDataSet.md)
- [CodatPublicApiModelsDataDataSetPagedResponseHrefModel](docs/Model/CodatPublicApiModelsDataDataSetPagedResponseHrefModel.md)
- [CodatPublicApiModelsDataDataSetPagedResponseLinksModel](docs/Model/CodatPublicApiModelsDataDataSetPagedResponseLinksModel.md)
- [CodatPublicApiModelsDataDataSetPagedResponseModel](docs/Model/CodatPublicApiModelsDataDataSetPagedResponseModel.md)
- [CodatPublicApiModelsDataDataStatus](docs/Model/CodatPublicApiModelsDataDataStatus.md)
- [CodatPublicApiModelsDataDatasetStatus](docs/Model/CodatPublicApiModelsDataDatasetStatus.md)
- [CodatPublicApiModelsDataProfitAndLossResponse](docs/Model/CodatPublicApiModelsDataProfitAndLossResponse.md)
- [CodatPublicApiModelsDataPushOptionsAggregate](docs/Model/CodatPublicApiModelsDataPushOptionsAggregate.md)
- [CodatPublicApiModelsDataTrackingCategory](docs/Model/CodatPublicApiModelsDataTrackingCategory.md)
- [CodatPublicApiModelsDataTrackingCategoryPagedResponseHrefModel](docs/Model/CodatPublicApiModelsDataTrackingCategoryPagedResponseHrefModel.md)
- [CodatPublicApiModelsDataTrackingCategoryPagedResponseLinksModel](docs/Model/CodatPublicApiModelsDataTrackingCategoryPagedResponseLinksModel.md)
- [CodatPublicApiModelsDataTrackingCategoryPagedResponseModel](docs/Model/CodatPublicApiModelsDataTrackingCategoryPagedResponseModel.md)
- [CodatPublicApiModelsDataTrackingCategoryTree](docs/Model/CodatPublicApiModelsDataTrackingCategoryTree.md)
- [CodatPublicApiModelsDataValidDatatypeLinksResponse](docs/Model/CodatPublicApiModelsDataValidDatatypeLinksResponse.md)
- [CodatPublicApiModelsFileMetadataModel](docs/Model/CodatPublicApiModelsFileMetadataModel.md)
- [CodatPublicApiModelsPlatformCredentialsDataProvidedBy](docs/Model/CodatPublicApiModelsPlatformCredentialsDataProvidedBy.md)
- [CodatPublicApiModelsPlatformCredentialsDatatypeFeatures](docs/Model/CodatPublicApiModelsPlatformCredentialsDatatypeFeatures.md)
- [CodatPublicApiModelsPlatformCredentialsEnabledArgs](docs/Model/CodatPublicApiModelsPlatformCredentialsEnabledArgs.md)
- [CodatPublicApiModelsPlatformCredentialsIntegrationSupportedEnvironments](docs/Model/CodatPublicApiModelsPlatformCredentialsIntegrationSupportedEnvironments.md)
- [CodatPublicApiModelsPlatformCredentialsPlatformSourceModel](docs/Model/CodatPublicApiModelsPlatformCredentialsPlatformSourceModel.md)
- [CodatPublicApiModelsPlatformCredentialsPlatformSourceModelPagedResponseHrefModel](docs/Model/CodatPublicApiModelsPlatformCredentialsPlatformSourceModelPagedResponseHrefModel.md)
- [CodatPublicApiModelsPlatformCredentialsPlatformSourceModelPagedResponseLinksModel](docs/Model/CodatPublicApiModelsPlatformCredentialsPlatformSourceModelPagedResponseLinksModel.md)
- [CodatPublicApiModelsPlatformCredentialsPlatformSourceModelPagedResponseModel](docs/Model/CodatPublicApiModelsPlatformCredentialsPlatformSourceModelPagedResponseModel.md)
- [CodatPublicApiModelsPlatformCredentialsSourceType](docs/Model/CodatPublicApiModelsPlatformCredentialsSourceType.md)
- [CodatPublicApiModelsPlatformCredentialsSupportedFeatureState](docs/Model/CodatPublicApiModelsPlatformCredentialsSupportedFeatureState.md)
- [CodatPublicApiModelsRulesAddRuleModel](docs/Model/CodatPublicApiModelsRulesAddRuleModel.md)
- [CodatPublicApiModelsRulesAlertModel](docs/Model/CodatPublicApiModelsRulesAlertModel.md)
- [CodatPublicApiModelsRulesAlertModelPagedResponseHrefModel](docs/Model/CodatPublicApiModelsRulesAlertModelPagedResponseHrefModel.md)
- [CodatPublicApiModelsRulesAlertModelPagedResponseLinksModel](docs/Model/CodatPublicApiModelsRulesAlertModelPagedResponseLinksModel.md)
- [CodatPublicApiModelsRulesAlertModelPagedResponseModel](docs/Model/CodatPublicApiModelsRulesAlertModelPagedResponseModel.md)
- [CodatPublicApiModelsRulesNotifiers](docs/Model/CodatPublicApiModelsRulesNotifiers.md)
- [CodatPublicApiModelsRulesRule](docs/Model/CodatPublicApiModelsRulesRule.md)
- [CodatPublicApiModelsRulesRulePagedResponseHrefModel](docs/Model/CodatPublicApiModelsRulesRulePagedResponseHrefModel.md)
- [CodatPublicApiModelsRulesRulePagedResponseLinksModel](docs/Model/CodatPublicApiModelsRulesRulePagedResponseLinksModel.md)
- [CodatPublicApiModelsRulesRulePagedResponseModel](docs/Model/CodatPublicApiModelsRulesRulePagedResponseModel.md)
- [CodatPublicApiModelsSyncSettingsSyncSettingModel](docs/Model/CodatPublicApiModelsSyncSettingsSyncSettingModel.md)
- [CodatPullMessagesContractsDatasetMessages](docs/Model/CodatPullMessagesContractsDatasetMessages.md)
- [CodatPullMessagesContractsFetchMessage](docs/Model/CodatPullMessagesContractsFetchMessage.md)
- [CodatPullMessagesContractsMapMessage](docs/Model/CodatPullMessagesContractsMapMessage.md)
- [CodatPullMessagesContractsValidationMessage](docs/Model/CodatPullMessagesContractsValidationMessage.md)
- [CodatStandardReportingContractsIDimension](docs/Model/CodatStandardReportingContractsIDimension.md)
- [CodatStandardReportingContractsIDimensionItem](docs/Model/CodatStandardReportingContractsIDimensionItem.md)
- [CodatStandardReportingContractsIReportDataMeasure](docs/Model/CodatStandardReportingContractsIReportDataMeasure.md)
- [CodatStandardReportingContractsMeasure](docs/Model/CodatStandardReportingContractsMeasure.md)
- [CodatStandardReportingContractsReport](docs/Model/CodatStandardReportingContractsReport.md)
- [CodatStandardReportingContractsReportData](docs/Model/CodatStandardReportingContractsReportData.md)
- [CodatStandardReportingContractsReportError](docs/Model/CodatStandardReportingContractsReportError.md)
- [CodatStandardReportingContractsReportErrorType](docs/Model/CodatStandardReportingContractsReportErrorType.md)
- [CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount](docs/Model/CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount.md)
- [CompaniesCompanyIdConnectionsConnectionIdPatchRequest](docs/Model/CompaniesCompanyIdConnectionsConnectionIdPatchRequest.md)
- [CompaniesCompanyIdConnectionsPostRequest](docs/Model/CompaniesCompanyIdConnectionsPostRequest.md)
- [SystemObjectPushOperation](docs/Model/SystemObjectPushOperation.md)
- [SystemObjectPushOperationPagedResponseHrefModel](docs/Model/SystemObjectPushOperationPagedResponseHrefModel.md)
- [SystemObjectPushOperationPagedResponseLinksModel](docs/Model/SystemObjectPushOperationPagedResponseLinksModel.md)
- [SystemObjectPushOperationPagedResponseModel](docs/Model/SystemObjectPushOperationPagedResponseModel.md)

## Authorization

Authentication schemes defined for the API:
### APIKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


### CodatLogin

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://identity.codat.io/connect/authorize`
- **Scopes**: 
    - **PublicApi**: PublicApi

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
