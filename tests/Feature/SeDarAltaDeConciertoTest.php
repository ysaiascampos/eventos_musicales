<?php

namespace Tests\Feature;

use App\Models\Concierto;
use App\Models\Grupos;
use App\Models\Medios;
use App\Models\Promotores;
use App\Models\Recintos;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertJson;

class SeDarAltaDeConciertoTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test SeDarAltaDeConcierto.
     *
     * @return void
     */
    public function testSeDarAltaDeConcierto()
    {
        $this->withoutExceptionHandling();
        $promotor = factory(Promotores::class)->create();
        $recintos = factory(Recintos::class)->create();
        $grupo = factory(Grupos::class)->create();
        $medio = factory(Medios::class)->create();

        $dataConcierto = [
            'nombre' => 'concierto 1',
            'numero_espectador' => 2,
            'fecha' => Carbon::now(),
            'rentabilidad' => 10,
            'id_promotor' => $promotor->id,
            'id_recinto' => $recintos->id,
            'id_grupo' => $grupo->id,
            'id_medio' => $medio->id,
        ];
        $concierto = factory(Concierto::class)->make($dataConcierto)->toArray();

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/conciertos', $concierto);
        
        $message = 'Concierto Created Successfully.';
        $response
                ->assertStatus(201)
                ->assertJson([
                    'success' => true,
                    'data'    => [],
                    'message' => $message,
                ]);
    }
}
