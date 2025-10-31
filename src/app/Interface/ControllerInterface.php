<?php

namespace App\Interface;

interface ControllerInterface
{
    public function index();
    public function show();
    public function store();
    public function update($id);
    public function destroy($id);
}