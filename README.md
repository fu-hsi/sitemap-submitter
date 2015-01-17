# SitemapSubmitter.php
Sends a sitemap to Google and Bing search engines.
## Usage
```php
<?php
use FuHsi\SitemapSubmitter\SitemapSubmitter;
include 'SitemapSubmitter.php';

SitemapSubmitter::submit('http://example.com/sitemap.xml');
?>
