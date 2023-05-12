# # CodatDataContractsDatasetsInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**invoice_number** | **string** |  | [optional]
**customer_ref** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerRef**](CodatDataContractsDatasetsCustomerRef.md) |  | [optional]
**sales_order_refs** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsRecordRef[]**](CodatDataContractsDatasetsRecordRef.md) |  | [optional]
**issue_date** | **\DateTime** |  |
**due_date** | **\DateTime** |  | [optional]
**modified_date** | **\DateTime** |  | [optional]
**source_modified_date** | **\DateTime** |  | [optional]
**paid_on_date** | **\DateTime** |  | [optional]
**currency** | **string** |  | [optional]
**currency_rate** | **float** |  | [optional]
**line_items** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoiceLineItem[]**](CodatDataContractsDatasetsInvoiceLineItem.md) |  | [optional]
**payment_allocations** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDetailedPaymentAllocation[]**](CodatDataContractsDatasetsDetailedPaymentAllocation.md) |  | [optional]
**withholding_tax** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsWithholdingTax[]**](CodatDataContractsDatasetsWithholdingTax.md) |  | [optional]
**total_discount** | **float** |  | [optional]
**sub_total** | **float** |  | [optional]
**additional_tax_amount** | **float** |  | [optional]
**additional_tax_percentage** | **float** |  | [optional]
**total_tax_amount** | **float** |  |
**total_amount** | **float** |  |
**amount_due** | **float** |  |
**discount_percentage** | **float** |  | [optional]
**status** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoiceStatus**](CodatDataContractsDatasetsInvoiceStatus.md) |  |
**note** | **string** |  | [optional]
**metadata** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsMetadata**](CodatDataContractsDatasetsMetadata.md) |  | [optional]
**supplemental_data** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDataInterfacesSupplementalData**](CodatDataContractsDatasetsDataInterfacesSupplementalData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
