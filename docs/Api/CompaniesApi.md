# TheLogicStudio\CodatPHP\CompaniesApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdDelete()**](CompaniesApi.md#companiesCompanyIdDelete) | **DELETE** /companies/{companyId} | Deletes a company, this is not reversible. |
| [**companiesCompanyIdGet()**](CompaniesApi.md#companiesCompanyIdGet) | **GET** /companies/{companyId} | Fetch metadata on a single company. |
| [**companiesCompanyIdPut()**](CompaniesApi.md#companiesCompanyIdPut) | **PUT** /companies/{companyId} | Update a company with a new name and optional description |
| [**companiesCompanyIdSettingsGet()**](CompaniesApi.md#companiesCompanyIdSettingsGet) | **GET** /companies/{companyId}/settings | Fetch settings on a single company. |
| [**companiesCompanyIdSettingsPut()**](CompaniesApi.md#companiesCompanyIdSettingsPut) | **PUT** /companies/{companyId}/settings | Update settings on a single company. |
| [**companiesCompanyIdSyncSettingsGet()**](CompaniesApi.md#companiesCompanyIdSyncSettingsGet) | **GET** /companies/{companyId}/syncSettings |  |
| [**companiesCompanyIdSyncSettingsPost()**](CompaniesApi.md#companiesCompanyIdSyncSettingsPost) | **POST** /companies/{companyId}/syncSettings |  |
| [**companiesGet()**](CompaniesApi.md#companiesGet) | **GET** /companies | Fetch a list of all companies metadata with accounting links on the Codat platform |
| [**companiesPost()**](CompaniesApi.md#companiesPost) | **POST** /companies | Initiate the process of onboarding a new company on the Codat platform |


## `companiesCompanyIdDelete()`

```php
companiesCompanyIdDelete($company_id)
```

Deletes a company, this is not reversible.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $apiInstance->companiesCompanyIdDelete($company_id);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdGet()`

```php
companiesCompanyIdGet($company_id): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompany
```

Fetch metadata on a single company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompany**](../Model/CodatPublicApiModelsCompanyCompany.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdPut()`

```php
companiesCompanyIdPut($company_id, $codat_public_api_models_company_update_company_model): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompany
```

Update a company with a new name and optional description

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$codat_public_api_models_company_update_company_model = new \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyUpdateCompanyModel(); // \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyUpdateCompanyModel

try {
    $result = $apiInstance->companiesCompanyIdPut($company_id, $codat_public_api_models_company_update_company_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **codat_public_api_models_company_update_company_model** | [**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyUpdateCompanyModel**](../Model/CodatPublicApiModelsCompanyUpdateCompanyModel.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompany**](../Model/CodatPublicApiModelsCompanyCompany.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdSettingsGet()`

```php
companiesCompanyIdSettingsGet($company_id): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompanySettings
```

Fetch settings on a single company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdSettingsGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompanySettings**](../Model/CodatPublicApiModelsCompanyCompanySettings.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdSettingsPut()`

```php
companiesCompanyIdSettingsPut($company_id, $codat_clients_api_client_contract_company_settings): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompanySettings
```

Update settings on a single company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$codat_clients_api_client_contract_company_settings = new \TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractCompanySettings(); // \TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractCompanySettings

try {
    $result = $apiInstance->companiesCompanyIdSettingsPut($company_id, $codat_clients_api_client_contract_company_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdSettingsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **codat_clients_api_client_contract_company_settings** | [**\TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractCompanySettings**](../Model/CodatClientsApiClientContractCompanySettings.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompanySettings**](../Model/CodatPublicApiModelsCompanyCompanySettings.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdSyncSettingsGet()`

```php
companiesCompanyIdSyncSettingsGet($company_id): \TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractCompanySyncSettings
```



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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdSyncSettingsGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdSyncSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractCompanySyncSettings**](../Model/CodatClientsApiClientContractCompanySyncSettings.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdSyncSettingsPost()`

```php
companiesCompanyIdSyncSettingsPost($company_id, $codat_clients_api_client_contract_company_sync_settings)
```



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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$codat_clients_api_client_contract_company_sync_settings = new \TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractCompanySyncSettings(); // \TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractCompanySyncSettings

try {
    $apiInstance->companiesCompanyIdSyncSettingsPost($company_id, $codat_clients_api_client_contract_company_sync_settings);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdSyncSettingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **codat_clients_api_client_contract_company_sync_settings** | [**\TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractCompanySyncSettings**](../Model/CodatClientsApiClientContractCompanySyncSettings.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesGet()`

```php
companiesGet($page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompanyPagedResponseModel
```

Fetch a list of all companies metadata with accounting links on the Codat platform

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$page_size = 100; // int
$query = 'query_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->companiesGet($page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **query** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompanyPagedResponseModel**](../Model/CodatPublicApiModelsCompanyCompanyPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesPost()`

```php
companiesPost($codat_public_api_models_company_add_company_model): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompany
```

Initiate the process of onboarding a new company on the Codat platform

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codat_public_api_models_company_add_company_model = new \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyAddCompanyModel(); // \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyAddCompanyModel

try {
    $result = $apiInstance->companiesPost($codat_public_api_models_company_add_company_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codat_public_api_models_company_add_company_model** | [**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyAddCompanyModel**](../Model/CodatPublicApiModelsCompanyAddCompanyModel.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompany**](../Model/CodatPublicApiModelsCompanyCompany.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
