https://florian-boolean.notion.site/Laravel-2ea24bf28e484a6087331ed58f79db32 


COME INIZIARE:
powershell:

// 0 =>
mi posiziono nella cartella e creo il progetto, mi ci posiziono e apro visual studio code:

    cd ..\marika\BOOLEAN_projects\
    composer create-project laravel/laravel NOME_PRPGETTO_LARAVEL
    cd NOME_PRPGETTO_LARAVEL
    code .
.....................................................

//1=> inizializzare repository github:

controllo codice sorgente → publish on github

recupera in automatioc il nome della repo ma va specificato che è public altrimenti mette private di default!!
    
.................................................

VISUAL STUDIO CODE - CONFIGURARE IL FILE .env
//2=>
ENV -direzionare al database:


`DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=DB_MY_SQL(crearne uno nuovo su php MyAdmin con nome repositorie)

DB_USERNAME=root

DB_PASSWORD=root`
................................................................................

// 3=> scarico pacchetti
VISUAL STUDIO CODE - TERMINALE

IN CASO VOGLIAMO L’AUTENTIZAZIONE, PRIMA INSTALLIAMO LARAVEL/BREEZE

    composer require laravel/breeze --dev
    php artisan breeze:install 
    0 (blade)
    no
    no
    

scarico il pacchetto sass boottrap e modifico lo scaffold originale
poi faccio partire il primo server.
 
    composer require pacificdev/laravel_9_preset  
    
!!!!SE ABBIAMO ATTIVATO LARAVEL BREEZE, IL COMANDO DOVRA’ ESSERE !!!!

    php artisan preset:ui bootstrap --auth
    
!!ALTRIMENTI:!!
   `php artisan preset:ui bootstrap`
.........................................................
//4=>

avvio un nuovo terminale e faccio partire il secondo server da cui visualizzo il lavoro in tempo reale

    npm install
    npm run dev
    php artisan serve
................................................................

CRUD:

//6=> 
MODEL - creare un nuovo modello con migration(-m), controller(-c) e rotte delle crud nel controller (-r):

    php artisan make:model Entita -m -c -r 

!!!!!!!!!ALTRIMENTI MANUALMENTE !!!!!!!!

`php artisan make:model Entita

php artisan make:migration create_entitas_table

php artisan make:controller EntitaController --resource`


importare sempre il model nel controller
`@use app/models/MyModel`
......................................................


//7=> DATABASE - IMPORTARE DA FILE ESISTENTE UN DB:

avviare MAMP

new  → 

assegnare nome  → create

→ import 

allegare il file zip → go


................................................................................

//8=>
MIGRATIONS

- per creare una tabella → `php artisan make:migration create_nome_table ` - Crea una nuova migration

- per aggiornare una tabella già esistente → `php artisan make:migration update_qualcosa_to_nome_table` 
 (il nome della migration deve finire con `[to|from|in]_name_table`)

`php artisan migrate` - Esegue tutte le migration ancora da eseguire

`php artisan migrate:rollback` - Annulla l’ultimo gruppo di migration eseguite

(per poter utilizzare la funzione change all'interno di una migrtion occorre scaricare il pacchetto da terminale:

`composer require doctrine/dbal`

...........................................................................................................
//9=>
SEEDER
- `php artisan make:seeder NameTableSeeder` - crea un seeder all’interno della cartella `database/seeders`. 
- `php artisan db:seed UsersTableSeeder` - esegue il contenuto di un seeder.

.........................................................................................................
//10=>
ROUTE-WEB
scorciatoia CRUD
Route::resource()
.........................................................................................................
//11=>
AUTENTICATOR
- `admin` cartella utenti loggati (rotte admin). / su queste si faranno poi valutazioni sul ruolo
- `guests`  cartella pubblica (rotte public) .

voci:
  `->group(funzione()) `
  
 ` ->middleware(['auth', 'verified'])` controlli pre richiesta 
 `->name("admin.")` dove è collocato il file
 `->prefix("admin")` prefisso uri nome rotta 
 
`Route::middleware(['auth', 'verified'])
    ->prefix("admin") 
    ->name("admin.") 
    ->group(function () {
        Route::get('/', [DashboardController::class, "home"])->name('dashboard');
        Route::get('/users', [DashboardController::class, "home"])->name('users');
        Route::get('/pippo', [DashboardController::class, "home"])->name('pippo');

       
       Route::resource("posts", PostController::class);
  });`
  - Occorre poi decidere DOVE l’utente verrà reindirizzato DOPO che ha eseguito il login. Di default questo viene indirizzato su `\dashobard`. Per cambiare questo valore modifichiamo la variabile `HOME` dentro `app/Providers/RouteServiceProvider.php`
