# TheLogicStudio\CodatPHP\TrackingCategoriesApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdDataTrackingCategoriesGet()**](TrackingCategoriesApi.md#companiesCompanyIdDataTrackingCategoriesGet) | **GET** /companies/{companyId}/data/trackingCategories | Gets the latest tracking categories for a given company. |
| [**companiesCompanyIdDataTrackingCategoriesTrackingCategoryIdGet()**](TrackingCategoriesApi.md#companiesCompanyIdDataTrackingCategoriesTrackingCategoryIdGet) | **GET** /companies/{companyId}/data/trackingCategories/{trackingCategoryId} | Gets the specified tracking categories for a given company. |


## `companiesCompanyIdDataTrackingCategoriesGet()`

```php
companiesCompanyIdDataTrackingCategoriesGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataTrackingCategoryPagedResponseModel
```

Gets the latest tracking categories for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\TrackingCategoriesApi(
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
    $result = $apiInstance->companiesCompanyIdDataTrackingCategoriesGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingCategoriesApi->companiesCompanyIdDataTrackingCategoriesGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataTrackingCategoryPagedResponseModel**](../Model/CodatPublicApiModelsDataTrackingCategoryPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataTrackingCategoriesTrackingCategoryIdGet()`

```php
companiesCompanyIdDataTrackingCategoriesTrackingCategoryIdGet($company_id, $tracking_category_id): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataTrackingCategoryTree
```

Gets the specified tracking categories for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\TrackingCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$tracking_category_id = 'tracking_category_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataTrackingCategoriesTrackingCategoryIdGet($company_id, $tracking_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingCategoriesApi->companiesCompanyIdDataTrackingCategoriesTrackingCategoryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **tracking_category_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataTrackingCategoryTree**](../Model/CodatPublicApiModelsDataTrackingCategoryTree.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
