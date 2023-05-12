# TheLogicStudio\CodatPHP\SettingsApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**settingsGet()**](SettingsApi.md#settingsGet) | **GET** /settings | Fetch your settings |
| [**settingsIntegrationsIntegrationIdGet()**](SettingsApi.md#settingsIntegrationsIntegrationIdGet) | **GET** /settings/integrations/{integrationId} | Fetch your organisations integration settings |
| [**settingsIntegrationsIntegrationIdPatch()**](SettingsApi.md#settingsIntegrationsIntegrationIdPatch) | **PATCH** /settings/integrations/{integrationId} | Update your organisations integration settings |
| [**settingsPatch()**](SettingsApi.md#settingsPatch) | **PATCH** /settings | Update your settings |


## `settingsGet()`

```php
settingsGet(): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSettingsModel
```

Fetch your settings

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->settingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSettingsModel**](../Model/CodatPublicApiModelsClientsClientSettingsModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsIntegrationsIntegrationIdGet()`

```php
settingsIntegrationsIntegrationIdGet($integration_id): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsIntegrationSettingsModel
```

Fetch your organisations integration settings

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string

try {
    $result = $apiInstance->settingsIntegrationsIntegrationIdGet($integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsIntegrationsIntegrationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsIntegrationSettingsModel**](../Model/CodatPublicApiModelsClientsIntegrationSettingsModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsIntegrationsIntegrationIdPatch()`

```php
settingsIntegrationsIntegrationIdPatch($integration_id, $codat_public_api_models_clients_integration_settings_patch_model): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsIntegrationSettingsModel
```

Update your organisations integration settings

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$codat_public_api_models_clients_integration_settings_patch_model = new \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsIntegrationSettingsPatchModel(); // \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsIntegrationSettingsPatchModel

try {
    $result = $apiInstance->settingsIntegrationsIntegrationIdPatch($integration_id, $codat_public_api_models_clients_integration_settings_patch_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsIntegrationsIntegrationIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **codat_public_api_models_clients_integration_settings_patch_model** | [**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsIntegrationSettingsPatchModel**](../Model/CodatPublicApiModelsClientsIntegrationSettingsPatchModel.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsIntegrationSettingsModel**](../Model/CodatPublicApiModelsClientsIntegrationSettingsModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsPatch()`

```php
settingsPatch($codat_public_api_models_clients_client_settings_patch_model): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSettingsModel
```

Update your settings

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codat_public_api_models_clients_client_settings_patch_model = new \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSettingsPatchModel(); // \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSettingsPatchModel

try {
    $result = $apiInstance->settingsPatch($codat_public_api_models_clients_client_settings_patch_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codat_public_api_models_clients_client_settings_patch_model** | [**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSettingsPatchModel**](../Model/CodatPublicApiModelsClientsClientSettingsPatchModel.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsClientsClientSettingsModel**](../Model/CodatPublicApiModelsClientsClientSettingsModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
