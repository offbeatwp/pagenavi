# PageNavi

Creating a paginated view is very easy with WP-PageNavi. This service enables you to use the power of WP-PageNavi together with the power of OffbeatWP.

```bash
composer require offbeatwp/pagenavi
```

Add in your `config/services.php`:

```php
\OffbeatWP\PageNavi\Services::class,
```
## Usage

In you (twig-template) use:

```twig
{{ pagenavi.show(YOUR_COLLECTION) }}
```
