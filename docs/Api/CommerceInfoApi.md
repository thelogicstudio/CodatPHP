# TheLogicStudio\CodatPHP\CommerceInfoApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataCommerceInfoGet()**](CommerceInfoApi.md#companiesCompanyIdConnectionsConnectionIdDataCommerceInfoGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-info | Gets the latest basic info for a commerce company. |


## `companiesCompanyIdConnectionsConnectionIdDataCommerceInfoGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataCommerceInfoGet($company_id, $connection_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceCompanyInfo
```

Gets the latest basic info for a commerce company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CommerceInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataCommerceInfoGet($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceInfoApi->companiesCompanyIdConnectionsConnectionIdDataCommerceInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommerceCompanyInfo**](../Model/CodatDataContractsDatasetsCommerceCompanyInfo.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
