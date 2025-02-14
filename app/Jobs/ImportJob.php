<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Bus\Batchable;

class ImportJob implements ShouldQueue
{
    use Batchable;
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public $failOnTimeout = false;
    protected $records;

    public function __construct($records)
    {
        $this->records = $records;
    }

    public function handle(): void
    {
        $str = false;

        foreach ($this->records as $data) {


            if (!empty($data['Название'])) {


                if (!empty($data['SRC'])) {
                    $str = @file_get_contents($data['SRC']);
                }

                if ($str !== false) {
                    $file = $str;
                    $filename = basename($data['SRC']);
                    Storage::disk('public')->put('product/' . $filename, $file);

                    $pic = '/storage/product/' . $filename;
                    $query = [
                        'name' => $data['Название'],
                        'price' => $data['Цена'],
                        'src' => $pic,
                        'api_id' => $data['Внешний код'],
                        'slug' => str_slug($data['Название'])
                    ];
                } else {
                    $query = [
                        'name' => $data['Название'],
                        'price' => $data['Цена'],
                        'api_id' => $data['Внешний код'],
                        'slug' => str_slug($data['Название']),
                        'src' => '/storage/product/no_image.png'
                    ];
                }

                Product::updateOrCreate(
                    ['api_id' => $data['Внешний код']],
                    $query
                );
            }
        }
    }
}
