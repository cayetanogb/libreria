<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $libros = array(
        array(
            'name' => 'Rey blanco',
            'autor' => 'Juan Gómez',
            'isbn' => '97884913254',
            'image' => 'https://static.cegal.es/imagenes/marcadas/9788466/978846666854.gif'
        ),
        array(
            'name' => 'Los privilegios del ángel',
            'autor' => 'Dolores Redondo',
            'isbn' => '97884913254',
            'image' => 'https://static.cegal.es/imagenes/marcadas/9788423/978842335868.gif'
        ),
        array(
            'name' => 'Desparaíso',
            'autor' => 'Juan del Val',
            'isbn' => '97884913254',
            'image' => 'https://static.cegal.es/imagenes/marcadas/9788467/978846706113.gif'
        ),
        array(
            'name' => 'La hora de las gaviotas',
            'autor' => 'Ibon Martín',
            'isbn' => '97884913254',
            'image' => 'https://static.cegal.es/imagenes/marcadas/9788401/978840102565.gif'
        )
    );

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
    }
}
