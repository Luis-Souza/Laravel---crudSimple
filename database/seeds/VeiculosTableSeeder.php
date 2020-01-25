<?php

use App\Models\Veiculo;
use Illuminate\Database\Seeder;

class VeiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Veiculo::class, 80)->create();
    }
}
