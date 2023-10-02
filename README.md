 # ====================================================
       Steps for Laravel Custom Console Commands 
 # ====================================================


 1. Creare Console Command Using command
  "php artisan make:command MyCustomCommand"
 
 2. Edit Console Command in Signature You can define the Command name that you want to Keep 
 { protected $signature = 'logcustomcommand:my-custom-command';} 
 
 3. In Handle you can define the Logic That You want and In descripion You can write the description about the partiular console Command  

 4. Register Console commad in kernel, If you Don't do It also Working, meaans You can Skip this step {\App\Console\Commands\MyCustomCommand::class} 

 5. Execute Consoe Command {php artisan logcustomcommand:my-custom-command} 
    syntax php artisan console Command Signature 
 
