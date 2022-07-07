<?php
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$request -> getPathInfo();

$request->query->get('name');
$request->request->get('name', 'nom par defaut');

$request->getMethod();