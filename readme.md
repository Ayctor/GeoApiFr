# GeoApiFr

It is a small php client library to use the [GéoAPI](https://api.gouv.fr/api/geoapi.html).

See official documentation for usage : [documentation](https://docs.geo.api.gouv.fr/)

### Usage 


```php
use GeoApiFr\GeoApiFr;

$instance = new GeoApiFr;

$regions = $instance->get('regions');

$versailles = $instance->get('communes', ['nom' => 'versailles'])
```

### Errors

It will return an empty array if the request with no params came up empty.

Return full error object if error 400.
