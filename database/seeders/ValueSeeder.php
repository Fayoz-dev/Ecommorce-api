<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => "Qora",
                "en" => "Black"
            ]
        ]);
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => "Qizil",
                "en" => "Red"
            ]
        ]);
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => "Sariq",
                "en" => "Yellow"
            ]
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => "MDF",
                "en" => "mdf"
            ]
        ]);
        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => "LDSP",
                "en" => "ldsp"
            ]
        ]);

    }
}
