<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MenuImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Path to the CSV file
        $filePath = database_path('seeders/data/menu_images.csv');
        
        // Open the CSV file
        if (($handle = fopen($filePath, 'r')) !== FALSE) {
            // Get the header row
            $header = fgetcsv($handle, 1000, ',');

            // Loop through each row of the CSV file
            while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                // Create an associative array with column names as keys and row data as values
                $rowData = array_combine($header, $data);

                // Insert the data into the database
                DB::table('menu_images')->insert([
                    'title' => $rowData['title'],
                    'image_path' => $rowData['image_path'],
                    'order' => $rowData['order'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // Close the file
            fclose($handle);
        }
    }
}
