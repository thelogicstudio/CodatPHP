# TheLogicStudio\CodatPHP\DatasetLogsApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdDataDatasetLogsDatasetIdGet()**](DatasetLogsApi.md#companiesCompanyIdDataDatasetLogsDatasetIdGet) | **GET** /companies/{companyId}/data/datasetLogs/{datasetId} | Gets dataset messages for a given dataset |


## `companiesCompanyIdDataDatasetLogsDatasetIdGet()`

```php
companiesCompanyIdDataDatasetLogsDatasetIdGet($company_id, $dataset_id): \TheLogicStudio\CodatPHP\Model\CodatPullMessagesContractsDatasetMessages
```

Gets dataset messages for a given dataset

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DatasetLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$dataset_id = 'dataset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataDatasetLogsDatasetIdGet($company_id, $dataset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatasetLogsApi->companiesCompanyIdDataDatasetLogsDatasetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **dataset_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPullMessagesContractsDatasetMessages**](../Model/CodatPullMessagesContractsDatasetMessages.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
