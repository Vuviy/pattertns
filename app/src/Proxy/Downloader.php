<?php

namespace App\Proxy;

interface Downloader
{
    public function download(string $url): string;

}