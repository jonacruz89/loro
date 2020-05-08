<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = '[
            {"id":"1","name":"ANTIOQUIA"},
            {"id":"2","name":"ATLANTICO"},
            {"id":"3","name":"BOGOTA"},
            {"id":"4","name":"BOLIVAR"},
            {"id":"5","name":"BOYACA"},
            {"id":"6","name":"CALDAS"},
            {"id":"7","name":"CAQUETA"},
            {"id":"8","name":"CAUCA"},
            {"id":"9","name":"CESAR"},
            {"id":"10","name":"CORDOBA"},
            {"id":"11","name":"CUNDINAMARCA"},
            {"id":"12","name":"CHOCO"},
            {"id":"13","name":"HUILA"},
            {"id":"14","name":"LA GUAJIRA"},
            {"id":"15","name":"MAGDALENA"},
            {"id":"16","name":"META"},
            {"id":"17","name":"NARIÑO"},
            {"id":"18","name":"N. DE SANTANDER"},
            {"id":"19","name":"QUINDIO"},
            {"id":"20","name":"RISARALDA"},
            {"id":"21","name":"SANTANDER"},
            {"id":"22","name":"SUCRE"},
            {"id":"23","name":"TOLIMA"},
            {"id":"24","name":"VALLE DEL CAUCA"},
            {"id":"25","name":"ARAUCA"},
            {"id":"26","name":"CASANARE"},
            {"id":"27","name":"PUTUMAYO"},
            {"id":"28","name":"SAN ANDRES"},
            {"id":"29","name":"AMAZONAS"},
            {"id":"30","name":"GUAINIA"},
            {"id":"31","name":"GUAVIARE"},
            {"id":"32","name":"VAUPES"},
            {"id":"33","name":"VICHADA"}
            ]';

        foreach (json_decode($data) as $key => $value) {
            Department::create([
                'id' => $value->id,
                'name' => $value->name,
            ]);
        }

    }
}
