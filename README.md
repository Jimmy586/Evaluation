# Evaluation
Company 2 repository for the SWE2 project Spring2019

## API installation guide
1. Install and run xampp or Apache Server
2. Copy "/API/evaluation" directory to htdocs or "local server" directory.
3. Run curl command for testing. assuming auth_key=12345
4. Follow API documentation for request parameters (Documentation is inside API directory).

Curl command example:
```
curl -X POST --header "auth_key: 12345" -d "category=cat" -d "tags=tag" http://localhost/evaluation/company/
```
