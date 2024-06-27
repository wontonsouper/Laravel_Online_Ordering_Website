<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Path to the CSV file
        $filePath = database_path('seeders/data/reviews.csv');
        
        // Open the CSV file
        if (($handle = fopen($filePath, 'r')) !== FALSE) {
            // Get the header row
            $header = fgetcsv($handle, 1000, ',');

            // Loop through each row of the CSV file
            while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                // Create an associative array with column names as keys and row data as values
                $rowData = array_combine($header, $data);

                // Insert the data into the database
                DB::table('reviews')->insert([
                    'review_name' => $rowData['review_name'],
                    'review_text' => $rowData['review_text'],
                    'review_approved' => filter_var($rowData['review_approved'], FILTER_VALIDATE_BOOLEAN),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // Close the file
            fclose($handle);
        }
    }
}
