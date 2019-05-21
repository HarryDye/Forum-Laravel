--Start up--

https://stackoverflow.com/questions/31291317/php-is-not-recognized-as-an-internal-or-external-command-in-command-prompt/31291404

composer install
npm install

database -  open xamp
            SQLyog -> forum2
            
Server - cd C:\Users\harry.dye\Documents\Treehouse\Laravel\Lets-Build-a-Forum-in-Laravel
         php artisan serve
         
Vue to work run - npm run watch

Start Redis - open ubuntu run - sudo service redis-server start
                  stop redis  - sudo service redis-server stop

--start up end--

Wipe database tables: - php artisan migrate:refresh

To populate the database:
php artisan tinker - $threads = factory('App\Thread', 10)->create();
-populates replies - $threads->each(function ($thread) { factory('App\Reply', 25)->create(["thread_id" => $thread->id]); });
                   after repopulating run - php artisan cache:clear

To run the tests - vendor\bin\phpunit

When working with laravel and something that is was happening before, isn't working after changes. Clear cache according to 
https://tecadmin.net/clear-cache-laravel-5/

To get regular expressions - https://regexr.com/

Using Scout and Algolia to have a complex search function on the app. 
https://laracasts.com/series/lets-build-a-forum-with-laravel/episodes/94 to 98
Algolia docs- https://community.algolia.com/
The vue instant search with algolia - https://community.algolia.com/vue-instantsearch/getting-started/getting-started.html

Do while to wait for a actions before making the next step.




















## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
