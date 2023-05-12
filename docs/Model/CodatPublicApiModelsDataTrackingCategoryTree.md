# # CodatPublicApiModelsDataTrackingCategoryTree

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sub_categories** | [**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataTrackingCategoryTree[]**](CodatPublicApiModelsDataTrackingCategoryTree.md) |  | [optional]
**id** | **string** | The identifier for the item, unique per tracking category | [optional]
**parent_id** | **string** | The identifier for this item&#39;s immediate parent | [optional]
**modified_date** | **\DateTime** | The date the record was last updated in the system cache | [optional]
**source_modified_date** | **\DateTime** | The date the record was last changed in the originating system | [optional]
**name** | **string** | The name of the tracking category | [optional]
**has_children** | **bool** | Boolean value indicating whether this category has SubCategories | [optional]
**status** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTrackingCategoryStatus**](CodatDataContractsDatasetsTrackingCategoryStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
