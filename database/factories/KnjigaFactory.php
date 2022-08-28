<?php

namespace Database\Factories;

use App\Models\Izdavac;
use App\Models\Pisac;
use Illuminate\Database\Eloquent\Factories\Factory;

class KnjigaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv'  => $this->faker->catchPhrase(),
            'zanr' => $this->faker->randomElement($array = array('Biografija', 'Drama', 'Edukativni', 'Istorijski', 'Ljubavni', 'Klasici')),
            'pismo' => $this->faker->randomElement($array = array('Cirilica', 'Latinica')),
            'povez' => $this->faker->randomElement($array = array('Tvrdi', 'Meki')),
            'broj_strana' => $this->faker->numberBetween($min = 15, $min = 1500),
            'cena' => $this->faker->numberBetween($min = 150, $min = 3000),
            'pisac_id' => Pisac::factory(),
            'izdavac_id' => Izdavac::factory()
        ];
    }
}
