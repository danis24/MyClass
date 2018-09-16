<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    protected $class = [
        [
            "name" => "PPAW-A"
        ],
        [
            "name" => "PPAW-B"
        ],
        [
            "name" => "PPAW-C"
        ],
        [
            "name" => "PPAW-D"
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->class as $key => $value) {
            factory(\App\Services\MyClass\MyClass::class)->create([
                "name" => $value["name"]
            ]);
        }
    }
}
