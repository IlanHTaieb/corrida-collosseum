<?php

namespace App\Interfaces;

interface CrudInterface
{
    public function index();

    public function show();

    public function create();

    public function store($request);

    public function edit();

    public function update($request);

    public function destroy();
}