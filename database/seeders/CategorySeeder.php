<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Categorías de las palabras
     */
    public function run(): void
    {
        $categories = [
            'Biología',
            'Historia',
            'Tecnología',
            'Cocina',
            'Física',
            'Música',
            'Swift',
            'Libros',
            'Países',
            'Deportes'
        ];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
