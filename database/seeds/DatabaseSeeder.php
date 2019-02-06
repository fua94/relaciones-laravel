<?php

use Illuminate\Database\Seeder;

use App\Models\Card;
use App\Models\City;
use App\Models\Student;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        City::create([
            'name' => 'Quito',
            'code' => 'UIO'
        ]);

        City::create([
            'name' => 'Guayaquil',
            'code' => 'GYE'
        ]);

        Student::create([
            'first_name' => 'Francisco',
            'last_name' => 'Ulloa',
            'city_id' => 1
        ]);

        Student::create([
            'first_name' => 'Juan',
            'last_name' => 'Moreira',
            'city_id' => 2
        ]);

        Subject::create([
            'name' => 'Calculo',
            'code' => 'CAL1'
        ]);

        Subject::create([
            'name' => 'Algebra',
            'code' => 'ALG1'
        ]);

        $student = Student::find(1);
        $student->subjects()->sync([1,2]);

        Card::create([
            'code' => 'C-001',
            'student_id' => 1
        ]);

        //MANY TO MANY
        //$student->subjects()->attach(2); //asigna
        //$student->subjects()->dettach(2); //desasigna

        $student->subjects()->sync([1,2]); //asignacion masiva

        // $student->subjects()->save(new Subject([
        //     'name' => 'Quimica',
        //     'code' => 'QUI1'
        // ])); //creacion y asignacion

        //ONE TO MANY
        //$user->account()->associate($account); $user->save();
    }
}
