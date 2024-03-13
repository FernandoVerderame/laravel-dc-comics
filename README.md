Ciao ragazzi,
esercizio di oggi: Laravel Comics Layout
nome repo: laravel-comics
Create un nuovo progetto Laravel. Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.
Bonus:
Create più pagine istituzionali che condividono lo stesso layout
Steps installazione SASS e Bootstrap
composer require pacificdev/laravel_9_preset
php artisan preset:ui bootstrap
npm i
Rimuovere riga 3 del package.json (type: module)
npm run dev
Importare gli assets con la direttiva @vite() nella  <head> del vostro layout
Buon lavoro!