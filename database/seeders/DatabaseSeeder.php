<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {

        DB::table('contacts')->insert([
            'name' => 'Test1',
            'email' => 'test1@example.com',
            'telephone' => '21987790327',
            'subject' => 'Entrevista',
            'mensage' => 'Marcar entrevista fique atenta ao e-mail!'

        ]);
        DB::table('contacts')->insert([
            'name' => 'Test2',
            'email' => 'test2@example.com',
            'telephone' => '21985488218',
            'subject' => 'Exame Admissional ',
            'mensage' => 'Marcar exames fique atenta ao e-mail!'

        ]);
        
    }
}
