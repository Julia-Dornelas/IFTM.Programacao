<?php

require_once "../../models/CategoriaModel.php";

class CategoriaController {

    private $model;

    function __construct()
    {
        $this->model = new CategoriaModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Categoria $c) {
        return $this->model->create($c);
    }

    public function edit(Categoria $c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}