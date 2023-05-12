# TheLogicStudio\CodatPHP\BillCreditNotesApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesBillCreditNoteIdPut()**](BillCreditNotesApi.md#companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesBillCreditNoteIdPut) | **PUT** /companies/{companyId}/connections/{connectionId}/push/billCreditNotes/{billCreditNoteId} | Posts an updated billCreditNote to the accounting package for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesPost()**](BillCreditNotesApi.md#companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/billCreditNotes | Posts a new billCreditNote to the accounting package for a given company. |
| [**companiesCompanyIdDataBillCreditNotesBillCreditNoteIdGet()**](BillCreditNotesApi.md#companiesCompanyIdDataBillCreditNotesBillCreditNoteIdGet) | **GET** /companies/{companyId}/data/billCreditNotes/{billCreditNoteId} | Gets a single billCreditNote corresponding to the supplied Id |
| [**companiesCompanyIdDataBillCreditNotesGet()**](BillCreditNotesApi.md#companiesCompanyIdDataBillCreditNotesGet) | **GET** /companies/{companyId}/data/billCreditNotes | Gets a list of all bill credit notes for a company, with pagination |


## `companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesBillCreditNoteIdPut()`

```php
companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesBillCreditNoteIdPut($company_id, $connection_id, $bill_credit_note_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_bill_credit_note): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNotePushOperation
```

Posts an updated billCreditNote to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\BillCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$bill_credit_note_id = 'bill_credit_note_id_example'; // string
$timeout_in_minutes = 56; // int
$force_update = false; // bool
$codat_data_contracts_datasets_bill_credit_note = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNote(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNote

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesBillCreditNoteIdPut($company_id, $connection_id, $bill_credit_note_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_bill_credit_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillCreditNotesApi->companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesBillCreditNoteIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **bill_credit_note_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **force_update** | **bool**|  | [optional] [default to false] |
| **codat_data_contracts_datasets_bill_credit_note** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNote**](../Model/CodatDataContractsDatasetsBillCreditNote.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNotePushOperation**](../Model/CodatDataContractsDatasetsBillCreditNotePushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_bill_credit_note): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNotePushOperation
```

Posts a new billCreditNote to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\BillCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_bill_credit_note = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNote(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNote

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_bill_credit_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillCreditNotesApi->companiesCompanyIdConnectionsConnectionIdPushBillCreditNotesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_bill_credit_note** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNote**](../Model/CodatDataContractsDatasetsBillCreditNote.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNotePushOperation**](../Model/CodatDataContractsDatasetsBillCreditNotePushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataBillCreditNotesBillCreditNoteIdGet()`

```php
companiesCompanyIdDataBillCreditNotesBillCreditNoteIdGet($company_id, $bill_credit_note_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNote
```

Gets a single billCreditNote corresponding to the supplied Id

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\BillCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$bill_credit_note_id = 'bill_credit_note_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataBillCreditNotesBillCreditNoteIdGet($company_id, $bill_credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillCreditNotesApi->companiesCompanyIdDataBillCreditNotesBillCreditNoteIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **bill_credit_note_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNote**](../Model/CodatDataContractsDatasetsBillCreditNote.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataBillCreditNotesGet()`

```php
companiesCompanyIdDataBillCreditNotesGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNotePagedResponseModel
```

Gets a list of all bill credit notes for a company, with pagination

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\BillCreditNotesApi(
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
    $result = $apiInstance->companiesCompanyIdDataBillCreditNotesGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillCreditNotesApi->companiesCompanyIdDataBillCreditNotesGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillCreditNotePagedResponseModel**](../Model/CodatDataContractsDatasetsBillCreditNotePagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
