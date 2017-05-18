<?php

use Illuminate\Foundation\Inspiring;

/*
  |--------------------------------------------------------------------------
  | Console Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of your Closure based console
  | commands. Each Closure is bound to a command instance allowing a
  | simple approach to interacting with each command's IO methods.
  |
 */

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

//Comandos personalizados...
Artisan::command('meu_comando:teste',function() {
    $email = $this->ask('Qual o seu e-mail?');
    $email_password = $this->secret('Qual a senha?');
    echo $email;
    echo $email_password;
    $time = $this->choice('Qual o seu time preferido?',['Flamengo','Fluminense'],0);
    
    //confirm prompt
    $this->confirm('Confirma as informações?');    
    
    $header = ['E-Mail','Senha','time'];
    $data = [ [ $email, $email_password,$time ] ];
    
    //exibe informações tabulares       
    $this->table($header,$data);
    //Saída no console.
    $this->info('Tudo pronto!');
    
})->describe('Testando a aplicação...');

