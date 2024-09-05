<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MiLogin extends Command
{
    protected $signature = 'app:login {--U|usuario=} {--P|password=}';
    protected $description = 'Comando para login sencillo en línea de comandos';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->line("Bienvenido/a");

        $usuario = $this->option("usuario");
        $password = $this->option("password");

        if (empty($usuario)) {
            $usuario = $this->ask("usuario");
        }
        if (empty($password)) {
            $password = $this->secret("password");
        }

        if ($usuario == 'admin' && $password == 'password') {
            $this->info("Logueo correcto");
            return 0;
        } else {
            $this->error("Logueo Incorrecto");
            return 1;
        }
    }
}
