# # CodatDataContractsDatasetsBill

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**reference** | **string** |  | [optional]
**supplier_ref** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplierRef**](CodatDataContractsDatasetsSupplierRef.md) |  | [optional]
**purchase_order_refs** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrderRef[]**](CodatDataContractsDatasetsPurchaseOrderRef.md) |  | [optional]
**issue_date** | **\DateTime** |  |
**due_date** | **\DateTime** |  | [optional]
**currency** | **string** |  | [optional]
**currency_rate** | **float** |  | [optional]
**line_items** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillLineItem[]**](CodatDataContractsDatasetsBillLineItem.md) |  | [optional]
**withholding_tax** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsWithholdingTax[]**](CodatDataContractsDatasetsWithholdingTax.md) |  | [optional]
**status** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillStatus**](CodatDataContractsDatasetsBillStatus.md) |  |
**sub_total** | **float** |  |
**tax_amount** | **float** |  |
**total_amount** | **float** |  |
**amount_due** | **float** |  | [optional]
**modified_date** | **\DateTime** |  | [optional]
**source_modified_date** | **\DateTime** |  | [optional]
**note** | **string** |  | [optional]
**payment_allocations** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDetailedPaymentAllocation[]**](CodatDataContractsDatasetsDetailedPaymentAllocation.md) |  | [optional]
**metadata** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsMetadata**](CodatDataContractsDatasetsMetadata.md) |  | [optional]
**supplemental_data** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDataInterfacesSupplementalData**](CodatDataContractsDatasetsDataInterfacesSupplementalData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
