<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Car;

class CarTest extends TestCase
{
    public function test_create_car()
    {
        // Créer une maison fictive
        $house = new Car([
            'speed' => 123,
            'design' => "design_34"
        ]);

        // Vérifier que les valeurs sont bien assignées
        $this->assertEquals(123, $house->speed);
        $this->assertEquals("design_34", $house->design);
    }
}
