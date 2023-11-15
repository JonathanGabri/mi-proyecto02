<?php

namespace Jonathan\Saludo;

use Illuminate\Support\ServiceProvider;

class SaludoServiceProvider extends ServiceProvider
{
public function boot()
 {
  // Carga las rutas del paquete
  $this->loadRoutesFrom(__DIR__.'/routes.php');

  // Carga las vistas del paquete
  $this->loadViewsFrom(__DIR__.'/views', 'saludo');

  // Publica los archivos de configuración del paquete
  $this->publishes([
      __DIR__.'/config/saludo.php' => config_path('saludo.php'),
  ]);
}

 public function register()
{
  // Registra el alias del facade del paquete
  $this->app->bind('saludo', function () {
      return new Saludo;
  });
 }
}
