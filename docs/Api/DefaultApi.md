# OpenAPI\Client\DefaultApi

All URIs are relative to *http://api.onemusicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**release**](DefaultApi.md#release) | **GET** /20190716/release | 



## release

> \OpenAPI\Client\Model\Release[] release($user_key, $inc, $must_inc, $max_result_count, $min_certainty, $min_image_score, $min_image_width, $min_image_height, $max_image_width, $max_image_height, $title, $artist, $barcode)



Searches for releases. Queries to /release must be either a name query, an Acoustid fingerprint query, a CD TOC query or a MusicBrainz Disc ID query.  Queries can be sent as a GET or POST request. In general, production use of OneMusicAPI should use POST for searches, because query URLs can otherwise get too long.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_key = 'user_key_example'; // string | Your API key.
$inc = 'inc_example'; // string | 
$must_inc = 'must_inc_example'; // string | 
$max_result_count = 56; // int | 
$min_certainty = 3.4; // float | 
$min_image_score = 56; // int | 
$min_image_width = 56; // int | 
$min_image_height = 56; // int | 
$max_image_width = 56; // int | 
$max_image_height = 56; // int | 
$title = 'title_example'; // string | The title of the release.
$artist = 'artist_example'; // string | The name of the artist for the release.
$barcode = 'barcode_example'; // string | The barcode for the release.

try {
    $result = $apiInstance->release($user_key, $inc, $must_inc, $max_result_count, $min_certainty, $min_image_score, $min_image_width, $min_image_height, $max_image_width, $max_image_height, $title, $artist, $barcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->release: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_key** | **string**| Your API key. |
 **inc** | **string**|  | [optional]
 **must_inc** | **string**|  | [optional]
 **max_result_count** | **int**|  | [optional]
 **min_certainty** | **float**|  | [optional]
 **min_image_score** | **int**|  | [optional]
 **min_image_width** | **int**|  | [optional]
 **min_image_height** | **int**|  | [optional]
 **max_image_width** | **int**|  | [optional]
 **max_image_height** | **int**|  | [optional]
 **title** | **string**| The title of the release. | [optional]
 **artist** | **string**| The name of the artist for the release. | [optional]
 **barcode** | **string**| The barcode for the release. | [optional]

### Return type

[**\OpenAPI\Client\Model\Release[]**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

