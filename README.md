COME INIZIARE:
powershell:

// 1 => mi posiziono nella cartella e creo il progetto:


cd ..\marika\BOOLEAN_projects\
composer create-project laravel/laravel NOME_PRPGETTO_LARAVEL

................................................................
VISUAL STUDIO CODE - TERMINALE
// 2=> scarico il pacchetto sass boottrap e modifico lo scaffold originale
poi faccio partire il primo server.

composer require pacificdev/laravel_9_preset
php artisan preset:ui bootstrap

npm install
npm run dev
.................................................................................
//3=> avvio un nuovo terminale e faccio partire il secondo server da cui visualizzo il lavoro in tempo reale

php artisan serve


..................................................................................................
//5=> inizializzare repository github:

controllo codice sorgente → inizializza repository

   poi selezionare la voce REMOTES → + 

    richiede:

    nome repository : origin

    url repository : copia e incolla da GitHub


.................................................................................
//6=> CONTROLLER -creare nuovo controller:

php artisan make:controller FirstController

........................................
//7=> MODEL - creare un nuovo modello:

php artisan make:model MyModel


importare sempre il model nel controller
@use app/models/MyModel


