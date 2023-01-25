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
php artisan serve  npm run dev

    
    php artisan serve
    
..................................................................................................
//4=> inizializzare repository github:

controllo codice sorgente → inizializza repository

   poi selezionare la voce REMOTES → + 

    richiede:

    nome repository : origin

    url repository : copia e incolla da GitHub


.................................................................................
//5=> CONTROLLER -creare nuovo controller:

  
    php artisan make:controller FirstController

........................................
//6=> MODEL - creare un nuovo modello:

    php artisan make:model MyModel


importare sempre il model nel controller
@use app/models/MyModel

//7=> DATABASE - :

avviare MAMP

new  → 

assegnare nome  → create

→ import 

allegare il file zip → go

................................................................................
//7=> ENV -direzionare al database:


DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=DB_MY_SQL(crearne uno nuovo su php MyAdmin con nome repositorie)

DB_USERNAME=root

DB_PASSWORD=root
................................................................................


https://florian-boolean.notion.site/Laravel-2ea24bf28e484a6087331ed58f79db32

//8=> MIGRATIONS

- per creare una tabella → `php artisan make:migration create_nome_table ` - Crea una nuova migration

- per aggiornare una tabella già esistente → `php artisan make:migration update_qualcosa_to_nome_table` 
 (il nome della migration deve finire con `[to|from|in]_name_table`)

`php artisan migrate` - Esegue tutte le migration ancora da eseguire

`php artisan migrate:rollback` - Annulla l’ultimo gruppo di migration eseguite

(per poter utilizzare la funzione change all'interno di una migrtion occorre scaricare il pacchetto da terminale:


`composer require doctrine/dbal`

