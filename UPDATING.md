# Codat API Client
To updated the API Client package:

1. Get the latest YAML from [Codat](https://api.codat.io/swagger/v1/swagger.yaml).
2. Make the following changes to correct it:
    1. Add the server to the YAML as shown below
3. Set up  [OpenAPI Generator](https://github.com/OpenAPITools/openapi-generator).
4. Create a `config.json` file, like the example below
5. Run `java -jar ~/openapi-generator-cli.jar generate -g ../swagger.yaml -l php -o ./client -c config.json`.
6. Copy the resultant files back to the git repo at https://github.com/thelogicstudio/CodatPHP, being careful not to break the README.md or composer.json. Probably just need to copy in the subfolders.

## Additions to OpenAPI YAML
```
servers:
  - url: "https://api.codat.io"
```

## Example config.json
```
{
  "invokerPackage": "TheLogicStudio\\ExperianBusinessesPHP",
  "gitUserId": "TheLogicStudio",
  "gitRepoId": "ExperianBusinessesPHP"
}
```