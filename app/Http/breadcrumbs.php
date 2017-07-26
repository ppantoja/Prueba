<?php

namespace App\Http;

use Breadcrumbs;

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Inicio', route('home'));
});


// Resumen
Breadcrumbs::register('resumen', function($breadcrumbs)
{
	$breadcrumbs->parent('home');
    $breadcrumbs->push('Resumen Presupuestario', route('resumen'));
});

// Visor

Breadcrumbs::register('visor', function($breadcrumbs)
{
	$breadcrumbs->parent('resumen');
    $breadcrumbs->push('Resumen Informativo', route('visor'));
});


//Plan Obras

Breadcrumbs::register('planobras_index', function($breadcrumbs)
{
	$breadcrumbs->parent('resumen');
    $breadcrumbs->push('Plan de Obras', route('planobras.index'));
});
