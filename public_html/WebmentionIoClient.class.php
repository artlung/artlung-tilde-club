<?php

/**
 * Class Webmention
 *
 */
class WebmentionIoClient
{

    /**
     * @var mixed
     */
    private $url;
    /**
     * @var mixed
     */
    private $data;

    private $cacheFile = __DIR__ . '/cache/.webmentions.json';

    public function setUrl($string)
    {
        $this->url = $string;
    }

    /**
     * @throws Exception
     */
    public function getWebmentions()
    {
        if ($this->hasCachedWebmentions()) {
            return $this->loadCachedWebmentions();
        } else {
            return $this->fetchWebmentions()->cacheWebmentions();
        }
    }


    /**
     * @throws Exception
     */
    private function getDomain()
    {
        $url = $this->url;
        if (!$url) {
            throw new Exception("Invalid URL. Set a valid URL with setUrl()");
        }
        $url = parse_url($url);
        return $url['host'];
    }

    /**
     * @throws Exception
     */
    private function getToken()
    {
        $token = file_get_contents(__DIR__ . '/.webmention-token');
        if (!$token) {
            throw new Exception("No token found. Create a file .webmention-token with your token.");
        }
        return trim($token);
    }

    /**
     * @throws Exception
     */
    private function fetchWebmentions()
    {
        $url = 'https://webmention.io/api/mentions.jf2';
        $params = [
            'token' => $this->getToken(),
            'domain' => $this->getDomain()
        ];
        $url .= '?' . http_build_query($params);


        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $this->data = $data;
        return $this;
    }

    private function hasCachedWebmentions()
    {
        return file_exists($this->cacheFile);
    }

    /**
     * @return $this
     */
    private function loadCachedWebmentions()
    {
        $json = file_get_contents($this->cacheFile);
        $data = json_decode($json, true);
        $this->data = $data;
        return $this;
    }

    /**
     * @return $this
     * @throws Exception
     */
    private function cacheWebmentions()
    {
        $json = json_encode($this->data);
        $success = file_put_contents($this->cacheFile, $json);
        if (!$success) {
            throw new Exception("Failed to cache webmentions.");
        }
        return $this;
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function clearCache()
    {
        $success = false;
        if (file_exists($this->cacheFile)) {
            $success = unlink($this->cacheFile);
        }
        if (!$success) {
            throw new Exception("Failed to clear cache.");
        }
        return $this;


    }

    /**
     * @throws Exception
     */
    public function printDL()
    {
        $data = $this->data;

        // sort by published date descending
        usort($data['children'], function ($a, $b) {
            return strtotime($b['published']) - strtotime($a['published']);
        });



        if (!$data) {
            echo "No webmentions found.";
            return;
        }
        echo "<dl>\n";
        $lastDate = '';
        foreach ($data['children'] as $mention) {
            $published = new DateTime($mention['published']);
            $friendlyDate = $published->format('Y F j');
            if ($friendlyDate != $lastDate) {
                echo "<dt>$friendlyDate</dt>\n";
                $lastDate = $friendlyDate;
            }
            echo "<dd>";
            // echo the avatar if available
            if (isset($mention['author']['photo'])) {
                echo "<img src='{$mention['author']['photo']}' alt='{$mention['author']['name']}'>";
            }
            echo "<a href='{$mention['url']}'>{$mention['name']}</a> ({$mention['type']})";
            echo "</dd>\n";
        }
        echo "</dl>\n";
    }


    /**
     * @return string
     */
    public function getCacheFile()
    {
        return $this->cacheFile;
    }

    /**
     *
     * Set a different path for a cache file
     *
     * @param $cacheFile
     * @return $this
     */
    public function setCacheFile($cacheFile)
    {
        $this->cacheFile = $cacheFile;
        return $this;
    }

    public function cacheFileIsReadable()
    {
        return is_readable($this->cacheFile);
    }

    public function cacheFileIsWritable()
    {
        return is_writable($this->cacheFile);
    }
}