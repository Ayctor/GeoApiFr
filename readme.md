# GeoApiFr

It is a small php client library to use the [GéoAPI](https://api.gouv.fr/api/geoapi.html).

See [official documentation](https://docs.geo.api.gouv.fr/) for availables methods.

### Instalation

```
composer require ayctor/geoapifr
```

### Usage 


```php
use GeoApiFr\GeoApiFr;

// Create instance

$instance = new GeoApiFr;

$regions = $instance->get('regions');

// OR

$versailles = GeoApiFr::getInstance()->get('communes', ['nom' => 'versailles']);
```

### Errors

It will return an empty array if the request came up empty.

Return ```GuzzleHttp\Exception\RequestException``` object if error 400.
