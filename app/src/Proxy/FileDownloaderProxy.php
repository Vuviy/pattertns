<?php

namespace App\Proxy;

class FileDownloaderProxy implements Downloader
{
    private ?string $cache = null;

    public function __construct(private FileDownloader $downloader) {}

    public function download(string $url): string
    {
        if ($this->cache !== null) {
            echo "Returning cached content\n";
            return $this->cache;
        }

        $this->cache = $this->downloader->download($url);
        return $this->cache;
    }
}