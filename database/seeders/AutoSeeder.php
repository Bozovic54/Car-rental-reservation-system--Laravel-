<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Auto;
class AutoSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a1= new Auto();
        $a1->marka="Renault";
        $a1->model="Megane";
        $a1->save();
        $a2= new Auto();
        $a2->marka="Dacia";
        $a2->model="Sandero";
        $a2->save();
        $a3= new Auto();
        $a3->marka="Peugeot";
        $a3->model="306";
        $a3->save();
    }
}
