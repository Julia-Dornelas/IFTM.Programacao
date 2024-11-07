<?php

require_once "../../models/JogosModel.php";

class JogosController {

    private $model;

    function __construct()
    {
        $this->model = new JogosModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Jogos $c) {
        return $this->model->create($c);
    }

    public function edit(Jogos $c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}