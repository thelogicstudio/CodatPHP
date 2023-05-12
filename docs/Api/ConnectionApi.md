# TheLogicStudio\CodatPHP\ConnectionApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdAuthorizationPut()**](ConnectionApi.md#companiesCompanyIdConnectionsConnectionIdAuthorizationPut) | **PUT** /companies/{companyId}/connections/{connectionId}/authorization | Put authorization information for a single data source connected to a single company. |
| [**companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsBankAccountIdPatch()**](ConnectionApi.md#companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsBankAccountIdPatch) | **PATCH** /companies/{companyId}/connections/{connectionId}/connectionInfo/bankFeedAccounts/{bankAccountId} | Update a single BankFeed BankAccount for a single data source connected to a single company. |
| [**companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsGet()**](ConnectionApi.md#companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsGet) | **GET** /companies/{companyId}/connections/{connectionId}/connectionInfo/bankFeedAccounts | Get BankFeed BankAccounts for a single data source connected to a single company. |
| [**companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsPut()**](ConnectionApi.md#companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsPut) | **PUT** /companies/{companyId}/connections/{connectionId}/connectionInfo/bankFeedAccounts | Put BankFeed BankAccounts for a single data source connected to a single company. |
| [**companiesCompanyIdConnectionsConnectionIdDelete()**](ConnectionApi.md#companiesCompanyIdConnectionsConnectionIdDelete) | **DELETE** /companies/{companyId}/connections/{connectionId} | Disconnect and delete a data source from a company |
| [**companiesCompanyIdConnectionsConnectionIdGet()**](ConnectionApi.md#companiesCompanyIdConnectionsConnectionIdGet) | **GET** /companies/{companyId}/connections/{connectionId} | Retrieve a single data source connected to a single company, including its connection status |
| [**companiesCompanyIdConnectionsConnectionIdPatch()**](ConnectionApi.md#companiesCompanyIdConnectionsConnectionIdPatch) | **PATCH** /companies/{companyId}/connections/{connectionId} | Disconnect a data source from a company |
| [**companiesCompanyIdConnectionsGet()**](ConnectionApi.md#companiesCompanyIdConnectionsGet) | **GET** /companies/{companyId}/connections | Retrieve all data sources connected to a single company, including their connection statuses |
| [**companiesCompanyIdConnectionsPost()**](ConnectionApi.md#companiesCompanyIdConnectionsPost) | **POST** /companies/{companyId}/connections | Connect a data source to a company |


## `companiesCompanyIdConnectionsConnectionIdAuthorizationPut()`

```php
companiesCompanyIdConnectionsConnectionIdAuthorizationPut($company_id, $connection_id, $request_body): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnection
```

Put authorization information for a single data source connected to a single company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdAuthorizationPut($company_id, $connection_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->companiesCompanyIdConnectionsConnectionIdAuthorizationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnection**](../Model/CodatPublicApiModelsCompanyDataConnection.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsBankAccountIdPatch()`

```php
companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsBankAccountIdPatch($company_id, $connection_id, $bank_account_id, $codat_standardization_bank_feeds_accounts_contract_bank_feed_bank_account): \TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount
```

Update a single BankFeed BankAccount for a single data source connected to a single company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$bank_account_id = 'bank_account_id_example'; // string
$codat_standardization_bank_feeds_accounts_contract_bank_feed_bank_account = new \TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount(); // \TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsBankAccountIdPatch($company_id, $connection_id, $bank_account_id, $codat_standardization_bank_feeds_accounts_contract_bank_feed_bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsBankAccountIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **bank_account_id** | **string**|  | |
| **codat_standardization_bank_feeds_accounts_contract_bank_feed_bank_account** | [**\TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount**](../Model/CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount**](../Model/CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsGet()`

```php
companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsGet($company_id, $connection_id): \TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount[]
```

Get BankFeed BankAccounts for a single data source connected to a single company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsGet($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount[]**](../Model/CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsPut()`

```php
companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsPut($company_id, $connection_id, $codat_standardization_bank_feeds_accounts_contract_bank_feed_bank_account): \TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount[]
```

Put BankFeed BankAccounts for a single data source connected to a single company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$codat_standardization_bank_feeds_accounts_contract_bank_feed_bank_account = array(new \TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount()); // \TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount[]

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsPut($company_id, $connection_id, $codat_standardization_bank_feeds_accounts_contract_bank_feed_bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->companiesCompanyIdConnectionsConnectionIdConnectionInfoBankFeedAccountsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **codat_standardization_bank_feeds_accounts_contract_bank_feed_bank_account** | [**\TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount[]**](../Model/CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount[]**](../Model/CodatStandardizationBankFeedsAccountsContractBankFeedBankAccount.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDelete()`

```php
companiesCompanyIdConnectionsConnectionIdDelete($company_id, $connection_id): bool
```

Disconnect and delete a data source from a company

This revokes and removes a data connection from being listed as a company's connection(s).

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDelete($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->companiesCompanyIdConnectionsConnectionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

### Return type

**bool**

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdGet($company_id, $connection_id): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnection
```

Retrieve a single data source connected to a single company, including its connection status

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdGet($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->companiesCompanyIdConnectionsConnectionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnection**](../Model/CodatPublicApiModelsCompanyDataConnection.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPatch()`

```php
companiesCompanyIdConnectionsConnectionIdPatch($company_id, $connection_id, $companies_company_id_connections_connection_id_patch_request): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnection
```

Disconnect a data source from a company

This revokes a company’s access to a data source, but the data connection is still listed as a part of a company's  data connection(s). The status value in the request body should be \"Unlinked\" (case sensitive). Data connections  can only be unlinked if in the Linked or Deauthorized state.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$companies_company_id_connections_connection_id_patch_request = new \TheLogicStudio\CodatPHP\Model\CompaniesCompanyIdConnectionsConnectionIdPatchRequest(); // \TheLogicStudio\CodatPHP\Model\CompaniesCompanyIdConnectionsConnectionIdPatchRequest

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPatch($company_id, $connection_id, $companies_company_id_connections_connection_id_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->companiesCompanyIdConnectionsConnectionIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **companies_company_id_connections_connection_id_patch_request** | [**\TheLogicStudio\CodatPHP\Model\CompaniesCompanyIdConnectionsConnectionIdPatchRequest**](../Model/CompaniesCompanyIdConnectionsConnectionIdPatchRequest.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnection**](../Model/CodatPublicApiModelsCompanyDataConnection.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsGet()`

```php
companiesCompanyIdConnectionsGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnectionPagedResponseModel
```

Retrieve all data sources connected to a single company, including their connection statuses

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$page = 1; // int
$page_size = 100; // int
$query = 'query_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->companiesCompanyIdConnectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **page** | **int**|  | [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **query** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnectionPagedResponseModel**](../Model/CodatPublicApiModelsCompanyDataConnectionPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsPost()`

```php
companiesCompanyIdConnectionsPost($company_id, $companies_company_id_connections_post_request): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnection
```

Connect a data source to a company

Creates a data connection in PendingAuth status for the specified company and integration.  In the request body, specify the four-digit platformKey of the integration to link the company to as a text string.  Use GET /integrations to view all platformKeys.   **Note: the required request body for this endpoint has been recently changed; see details [here](https://docs.codat.io/changelog/44714-deprecation-string-request-create-connections-endpoint).**

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$companies_company_id_connections_post_request = new \TheLogicStudio\CodatPHP\Model\CompaniesCompanyIdConnectionsPostRequest(); // \TheLogicStudio\CodatPHP\Model\CompaniesCompanyIdConnectionsPostRequest

try {
    $result = $apiInstance->companiesCompanyIdConnectionsPost($company_id, $companies_company_id_connections_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->companiesCompanyIdConnectionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **companies_company_id_connections_post_request** | [**\TheLogicStudio\CodatPHP\Model\CompaniesCompanyIdConnectionsPostRequest**](../Model/CompaniesCompanyIdConnectionsPostRequest.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyDataConnection**](../Model/CodatPublicApiModelsCompanyDataConnection.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
