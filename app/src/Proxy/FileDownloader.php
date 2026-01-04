<?php

namespace App\Proxy;

class FileDownloader implements Downloader
{
    public function download(string $url): string
    {
        echo "Downloading $url...\n";
        return "File content from $url";
    }
}