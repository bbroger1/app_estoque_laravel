<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento, created_at) values (?,?,?,?, now())', array('Arroz', 10, 10.50, '2018-12-01'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento, created_at) values (?,?,?,?, now())', array('Feijão', 8, 8.00, '2018-08-24'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento, created_at) values (?,?,?,?, now())', array('Óleo', 12, 5.99, '2018-10-01'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento, created_at) values (?,?,?,?, now())', array('Farinha', 20, 3.50, '2018-10-12'));
    }
}
