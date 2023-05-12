# TheLogicStudio\CodatPHP\ProfileApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**profileApiKeyPut()**](ProfileApi.md#profileApiKeyPut) | **PUT** /profile/apiKey | Refresh the existing API key for your clients. |
| [**profileGet()**](ProfileApi.md#profileGet) | **GET** /profile | Fetch your organisations company profile |
| [**profilePut()**](ProfileApi.md#profilePut) | **PUT** /profile | Update your organisations company profile |
| [**profileSyncSettingsDataTypePut()**](ProfileApi.md#profileSyncSettingsDataTypePut) | **PUT** /profile/syncSettings/{dataType} |  |
| [**profileSyncSettingsGet()**](ProfileApi.md#profileSyncSettingsGet) | **GET** /profile/syncSettings |  |
| [**profileSyncSettingsPost()**](ProfileApi.md#profileSyncSettingsPost) | **POST** /profile/syncSettings |  |


## `profileApiKeyPut()`

```php
profileApiKeyPut(): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyProfileModel
```

Refresh the existing API key for your clients.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->profileApiKeyPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileApiKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyProfileModel**](../Model/CodatPublicApiModelsCompanyProfileModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profileGet()`

```php
profileGet(): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyProfileModel
```

Fetch your organisations company profile

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->profileGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyProfileModel**](../Model/CodatPublicApiModelsCompanyProfileModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilePut()`

```php
profilePut($codat_public_api_models_company_profile_model): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyProfileModel
```

Update your organisations company profile

If you are using the Codat 'link site' this information will be visible there.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codat_public_api_models_company_profile_model = new \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyProfileModel(); // \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyProfileModel

try {
    $result = $apiInstance->profilePut($codat_public_api_models_company_profile_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profilePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codat_public_api_models_company_profile_model** | [**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyProfileModel**](../Model/CodatPublicApiModelsCompanyProfileModel.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyProfileModel**](../Model/CodatPublicApiModelsCompanyProfileModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profileSyncSettingsDataTypePut()`

```php
profileSyncSettingsDataTypePut($data_type, $codat_public_api_models_clients_client_sync_settings_single_put_model): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsSyncSettingsSyncSettingModel
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_type = 'data_type_example'; // string
$codat_public_api_models_clients_client_sync_settings_single_put_model = new \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSyncSettingsSinglePutModel(); // \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSyncSettingsSinglePutModel

try {
    $result = $apiInstance->profileSyncSettingsDataTypePut($data_type, $codat_public_api_models_clients_client_sync_settings_single_put_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileSyncSettingsDataTypePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_type** | **string**|  | |
| **codat_public_api_models_clients_client_sync_settings_single_put_model** | [**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSyncSettingsSinglePutModel**](../Model/CodatPublicApiModelsClientsClientSyncSettingsSinglePutModel.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsSyncSettingsSyncSettingModel**](../Model/CodatPublicApiModelsSyncSettingsSyncSettingModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profileSyncSettingsGet()`

```php
profileSyncSettingsGet(): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSyncSettingsModel
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->profileSyncSettingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileSyncSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSyncSettingsModel**](../Model/CodatPublicApiModelsClientsClientSyncSettingsModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profileSyncSettingsPost()`

```php
profileSyncSettingsPost($codat_clients_api_client_contract_client_sync_settings)
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codat_clients_api_client_contract_client_sync_settings = new \TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractClientSyncSettings(); // \TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractClientSyncSettings

try {
    $apiInstance->profileSyncSettingsPost($codat_clients_api_client_contract_client_sync_settings);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileSyncSettingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codat_clients_api_client_contract_client_sync_settings** | [**\TheLogicStudio\CodatPHP\Model\CodatClientsApiClientContractClientSyncSettings**](../Model/CodatClientsApiClientContractClientSyncSettings.md)|  | [optional] |

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
