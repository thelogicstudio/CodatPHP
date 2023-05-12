# TheLogicStudio\CodatPHP\DataStatusApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdDataStatusGet()**](DataStatusApi.md#companiesCompanyIdDataStatusGet) | **GET** /companies/{companyId}/dataStatus |  |


## `companiesCompanyIdDataStatusGet()`

```php
companiesCompanyIdDataStatusGet($company_id): array<string,\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDataStatus>
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DataStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataStatusGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataStatusApi->companiesCompanyIdDataStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

[**array<string,\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDataStatus>**](../Model/CodatPublicApiModelsDataDataStatus.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
