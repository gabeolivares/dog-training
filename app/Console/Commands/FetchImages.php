<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Cloudinary;
use File;

class FetchImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches images from cloudinary';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        \Cloudinary::config(array(
          "cloud_name" => env('CLOUDINARY_CLOUD_NAME'),
          "api_key" => env('CLOUDINARY_KEY'),
          "api_secret" => env('CLOUDINARY_SECRET')
        ));

        $api = new \Cloudinary\Api();
        $result = $api->resources(array("type" => "upload", "prefix" => "gallery/", "max_results" => 500));

        $contents = json_encode($result['resources']);
        $bytes_written = File::put("public/data.json", $contents);
        if ($bytes_written === false)
        {
          die("Error writing to file");
        }
    }
}
