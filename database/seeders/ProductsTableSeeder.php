<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Path to the CSV file
        $csvFile = base_path('database/seeders/data/products.csv');

        // Check if the file exists
        if (!File::exists($csvFile)) {
            throw new \Exception('products.csv not found');
        }

        // Read the CSV file
        $data = array_map('str_getcsv', file($csvFile));

        // Extract the headers
        $headers = array_shift($data);

        // Insert data into the database
        foreach ($data as $row) {
            DB::table('products')->insert(array_combine($headers, $row));
        }
    }
}
