# TheLogicStudio\CodatPHP\BankAccountsApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdBankTransactionsGet()**](BankAccountsApi.md#companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdBankTransactionsGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/bankAccounts/{accountId}/bankTransactions | Gets bank transactions for a given bank account ID |
| [**companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdGet()**](BankAccountsApi.md#companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/bankAccounts/{accountId} | Gets the bank account with a given ID |
| [**companiesCompanyIdConnectionsConnectionIdDataBankAccountsGet()**](BankAccountsApi.md#companiesCompanyIdConnectionsConnectionIdDataBankAccountsGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/bankAccounts | Gets the list of bank accounts for a given connection |
| [**companiesCompanyIdConnectionsConnectionIdOptionsBankAccountsAccountIdBankTransactionsGet()**](BankAccountsApi.md#companiesCompanyIdConnectionsConnectionIdOptionsBankAccountsAccountIdBankTransactionsGet) | **GET** /companies/{companyId}/connections/{connectionId}/options/bankAccounts/{accountId}/bankTransactions | Gets the options of pushing bank account transactions. |
| [**companiesCompanyIdConnectionsConnectionIdPushBankAccountsAccountIdBankTransactionsPost()**](BankAccountsApi.md#companiesCompanyIdConnectionsConnectionIdPushBankAccountsAccountIdBankTransactionsPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/bankAccounts/{accountId}/bankTransactions | Posts bank transactions to the accounting package for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushBankAccountsBankAccountIdPut()**](BankAccountsApi.md#companiesCompanyIdConnectionsConnectionIdPushBankAccountsBankAccountIdPut) | **PUT** /companies/{companyId}/connections/{connectionId}/push/bankAccounts/{bankAccountId} | Posts an updated bank account to the accounting package for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushBankAccountsPost()**](BankAccountsApi.md#companiesCompanyIdConnectionsConnectionIdPushBankAccountsPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/bankAccounts | Posts a new bank account to the accounting package for a given company. |
| [**companiesCompanyIdDataBankAccountsAccountIdGet()**](BankAccountsApi.md#companiesCompanyIdDataBankAccountsAccountIdGet) | **GET** /companies/{companyId}/data/bankAccounts/{accountId} | Gets the bank account for given account ID. |
| [**companiesCompanyIdDataBankAccountsAccountIdTransactionsGet()**](BankAccountsApi.md#companiesCompanyIdDataBankAccountsAccountIdTransactionsGet) | **GET** /companies/{companyId}/data/bankAccounts/{accountId}/transactions | Gets the latest bank transactions for given account ID and company. |


## `companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdBankTransactionsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdBankTransactionsGet($company_id, $connection_id, $account_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankTransactionPagedResponseModel
```

Gets bank transactions for a given bank account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$account_id = 'account_id_example'; // string
$page = 1; // int
$page_size = 100; // int
$query = 'query_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdBankTransactionsGet($company_id, $connection_id, $account_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdBankTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **account_id** | **string**|  | |
| **page** | **int**|  | [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **query** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankTransactionPagedResponseModel**](../Model/CodatDataContractsDatasetsBankTransactionPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdGet($company_id, $connection_id, $account_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccount
```

Gets the bank account with a given ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdGet($company_id, $connection_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->companiesCompanyIdConnectionsConnectionIdDataBankAccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccount**](../Model/CodatDataContractsDatasetsBankAccount.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataBankAccountsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataBankAccountsGet($company_id, $connection_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccountPagedResponseModel
```

Gets the list of bank accounts for a given connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$page = 1; // int
$page_size = 100; // int
$query = 'query_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataBankAccountsGet($company_id, $connection_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->companiesCompanyIdConnectionsConnectionIdDataBankAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **page** | **int**|  | [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **query** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccountPagedResponseModel**](../Model/CodatDataContractsDatasetsBankAccountPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdOptionsBankAccountsAccountIdBankTransactionsGet()`

```php
companiesCompanyIdConnectionsConnectionIdOptionsBankAccountsAccountIdBankTransactionsGet($company_id, $connection_id, $account_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsPushPushOption
```

Gets the options of pushing bank account transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdOptionsBankAccountsAccountIdBankTransactionsGet($company_id, $connection_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->companiesCompanyIdConnectionsConnectionIdOptionsBankAccountsAccountIdBankTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsPushPushOption**](../Model/CodatDataContractsPushPushOption.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushBankAccountsAccountIdBankTransactionsPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushBankAccountsAccountIdBankTransactionsPost($company_id, $connection_id, $account_id, $allow_sync_on_push_complete, $timeout_in_minutes, $codat_data_contracts_datasets_bank_transactions): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankTransactionsPushOperation
```

Posts bank transactions to the accounting package for a given company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$account_id = 'account_id_example'; // string
$allow_sync_on_push_complete = true; // bool
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_bank_transactions = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankTransactions(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankTransactions

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushBankAccountsAccountIdBankTransactionsPost($company_id, $connection_id, $account_id, $allow_sync_on_push_complete, $timeout_in_minutes, $codat_data_contracts_datasets_bank_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->companiesCompanyIdConnectionsConnectionIdPushBankAccountsAccountIdBankTransactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **account_id** | **string**|  | |
| **allow_sync_on_push_complete** | **bool**|  | [optional] [default to true] |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_bank_transactions** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankTransactions**](../Model/CodatDataContractsDatasetsBankTransactions.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankTransactionsPushOperation**](../Model/CodatDataContractsDatasetsBankTransactionsPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushBankAccountsBankAccountIdPut()`

```php
companiesCompanyIdConnectionsConnectionIdPushBankAccountsBankAccountIdPut($company_id, $connection_id, $bank_account_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_bank_account): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccountPushOperation
```

Posts an updated bank account to the accounting package for a given company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$bank_account_id = 'bank_account_id_example'; // string
$timeout_in_minutes = 56; // int
$force_update = false; // bool
$codat_data_contracts_datasets_bank_account = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccount(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccount

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushBankAccountsBankAccountIdPut($company_id, $connection_id, $bank_account_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->companiesCompanyIdConnectionsConnectionIdPushBankAccountsBankAccountIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **bank_account_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **force_update** | **bool**|  | [optional] [default to false] |
| **codat_data_contracts_datasets_bank_account** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccount**](../Model/CodatDataContractsDatasetsBankAccount.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccountPushOperation**](../Model/CodatDataContractsDatasetsBankAccountPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushBankAccountsPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushBankAccountsPost($company_id, $connection_id, $allow_sync_on_push_complete, $timeout_in_minutes, $codat_data_contracts_datasets_bank_account): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccountPushOperation
```

Posts a new bank account to the accounting package for a given company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$allow_sync_on_push_complete = true; // bool
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_bank_account = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccount(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccount

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushBankAccountsPost($company_id, $connection_id, $allow_sync_on_push_complete, $timeout_in_minutes, $codat_data_contracts_datasets_bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->companiesCompanyIdConnectionsConnectionIdPushBankAccountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **allow_sync_on_push_complete** | **bool**|  | [optional] [default to true] |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_bank_account** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccount**](../Model/CodatDataContractsDatasetsBankAccount.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankAccountPushOperation**](../Model/CodatDataContractsDatasetsBankAccountPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataBankAccountsAccountIdGet()`

```php
companiesCompanyIdDataBankAccountsAccountIdGet($company_id, $account_id, $query): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankStatementAccount
```

Gets the bank account for given account ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$account_id = 'account_id_example'; // string
$query = 'query_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataBankAccountsAccountIdGet($company_id, $account_id, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->companiesCompanyIdDataBankAccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **account_id** | **string**|  | |
| **query** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankStatementAccount**](../Model/CodatDataContractsDatasetsBankStatementAccount.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataBankAccountsAccountIdTransactionsGet()`

```php
companiesCompanyIdDataBankAccountsAccountIdTransactionsGet($company_id, $account_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankStatementLinePagedResponseModel
```

Gets the latest bank transactions for given account ID and company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$account_id = 'account_id_example'; // string
$page = 1; // int
$page_size = 100; // int
$query = 'query_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataBankAccountsAccountIdTransactionsGet($company_id, $account_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->companiesCompanyIdDataBankAccountsAccountIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **account_id** | **string**|  | |
| **page** | **int**|  | [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **query** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankStatementLinePagedResponseModel**](../Model/CodatDataContractsDatasetsBankStatementLinePagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
