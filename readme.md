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
                  
                  --Redis set up --
                   https://github.com/MicrosoftArchive/redis/releases = when installing check the env variable. Then follow this-
                  https://dzone.com/articles/running-redis-on-windows-81-and-prior = instructions ==
                  1.Visit the archived MSOpenTech Redis Github repository at https://github.com/MicrosoftArchive/redis/.
                  2.Scroll down to the "Redis on Windows" section and click on the release page link.
                  3.Find the latest version (currently 3.2.100)
                  4.Download and run the .msi file and walk through the Setup Wizard instructions. Accept the Wizard's default values, but make sure to   check the "Add the Redis installation folder to the Path environment variable" checkbox. Option #2: If you are unable to run the Setup Wizard, then follow these steps to install via .zip file. (Note: You may also download the forked Redis source code and build it to run on your version of Windows, but these steps will not be covered in this blog post):
                    4a.Download the .zip file to your hard drive.
                    4b.Unzip the files into any location, such as 'C:\Program Files\Redis\'.
                    4c.Follow these additional steps to complete the installation of Redis (Note that these steps are for Windows 7 Professional; other versions may require different steps):
                      Add the path of your Redis folder as a Windows "environment variable."
                        Open your "Control Panel" application and search for "Edit the system management variables."
                        Open the "Environmental Variables" window.
                        Under "User Variables," find the variable named "Path" and click "Edit."
                        Add "C:\Program Files\Redis\" to the end of the variable value and click "OK."
                        If the Path variable doesn't exist, then click "New," add "C:\Program Files\Redis\" and click "OK."
                      Install Redis as a Windows Service.
                        Open your Command Prompt (ex: cmd.exe).
                        From your Redis folder (ex: C:\Program Files\Redis\) run the following command:
                         redis-server --service-install
                        Note: To uninstall Redis as a Windows Service type:
                         redis-server --service-uninstall

                  5.To run Redis 3.2.1 port on Windows 8.1 (or previous editions):
                    Open your Command Prompt (ex: cmd.exe) and type:
                     redis-server --service-start
                    The Redis API will create a default Redis, which is ready to accept connections on port 6379. You may now connect to it with the redis-cli.exe file. Note: To save and stop the Redis database, type:
                     redis-server shutdown save
                    Note: To shut down the Redis server, type:
                     redis-server --service-stop

                   6.From your Redis folder (ex: C:\Program Files\Redis\) run the following command to check redis is running:
                    redis-cli ping
                   --Redis set up --

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
