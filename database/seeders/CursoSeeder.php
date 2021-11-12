<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso;

        $curso->name = 'Laravel';
        $curso->description = 'framework de PHP';
        $curso->categoria = 'desarrollo web';

        $curso->save();
        
        $curso2 = new Curso;

        $curso2->name = 'React';
        $curso2->description = 'framework para front-end';
        $curso2->categoria = 'desarrollo web';

        $curso2->save();
        
        $curso3 = new Curso;

        $curso3->name = 'Bootstrap';
        $curso3->description = 'framework para front-end';
        $curso3->categoria = 'desarrollo web';

        $curso3->save();
        
        $curso4 = new Curso;

        $curso4->name = 'Simphony';
        $curso4->description = 'framework de PHP';
        $curso4->categoria = 'desarrollo web';

        $curso4->save();
    }
}
