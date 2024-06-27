<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class OrderProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Path to the CSV file
        $csvFile = database_path('seeders/data/order_products.csv');

        // Read the CSV file
        $csvData = array_map('str_getcsv', file($csvFile));

        // Get the headers
        $headers = array_shift($csvData);

        // Insert data into the order_products table
        foreach ($csvData as $row) {
            DB::table('order_products')->insert(array_combine($headers, $row));
        }
    }
}
