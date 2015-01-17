<?php
/**
 * SitemapSubmitter Class
 *
 * @author      Mariusz 'Fu-Hsi' Kacki
 * @copyright   2015 Mariusz 'Fu-Hsi' Kacki
 * @package     SitemapSubmitter
 * @version     1.0.0
 * @link        https://github.com/fu-hsi/sitemap-submitter
 * @license     http://opensource.org/licenses/MIT MIT License
 */
namespace FuHsi\SitemapSubmitter;

/**
 *
 * @package SitemapSubmitter
 * @author Mariusz 'Fu-Hsi' Kacki
 * @since 1.0.0
 */
class SitemapSubmitter
{

    static public function submit($sitemapUrl)
    {
        $pingUrls = array(
            'http://www.google.com/webmasters/sitemaps/ping?sitemap=%s',
            'http://www.bing.com/webmaster/ping.aspx?siteMap=%s'
        );
        
        $sitemapUrl = urlencode($sitemapUrl);
        $result = true;
        
        foreach ($pingUrls as $url) {
            $result = $result && file_get_contents(sprintf($url, $sitemapUrl)) !== false;
        }
        
        return $result;
    }
}
?>
