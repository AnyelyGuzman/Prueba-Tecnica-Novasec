<?php

namespace App\Controllers;

use App\Models\DisponibilidadModel;

class DisponibilidadController extends BaseController
{
    private $model;

    public function __construct()
    {
       $this->model = new DisponibilidadModel();
    }

    public function index()
    {
        $data = [
            'result' => $this->model->getRoomType()
        ];

        return view('disponibilidad', $data);
    }

    public function consultDisponibilidad()
    {
        $dateStart = $this->request->getPost('dateStart');
        $dateEnd = $this->request->getPost('dateEnd');
        $habitacion = $this->request->getPost('habitacion');
        $data = [
            'resultFilter' => $this->model->disponibilidadByDate($dateStart, $dateEnd, $habitacion),
            'resultUser' => $this->model->getUsers()
        ];

        return view('disponibilidadFilter', $data);
    }
}
