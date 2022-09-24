<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipo;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory

{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= Equipo::class;
    public function definition()
    {
        $codEquipo=$this->faker->sentence(); //lo hago para generar url amigables
        return [
            'slug' =>str::slug($codEquipo,'-'),
            'idSecc' => $this->faker->RandomElement([1,2,3,4]),
            'idSubSecc' => $this->faker->RandomElement([5,6,7,8]),
            'codEquipo' => $codEquipo,
            'marca' => $this->faker->RandomElement(['Siemens','ABB','Telemecanique','Shneider']),
            'modelo' => $this->faker->RandomElement(['ATS-25','ELB-56','TRE-17','PIP-45']),
            'det1' => $this->faker->sentence(),
            'det2' => $this->faker->sentence(),
            'det3' => $this->faker->sentence(),
            'det4' => $this->faker->sentence(),
            'det5' => $this->faker->sentence(),
            'histEquipo' => $this->faker->RandomElement([321,452,675,678]),
            'creador' => $this->faker->sentence(),
        ];
    }
}