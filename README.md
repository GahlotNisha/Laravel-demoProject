# Laravel-demoProject
This is a small project with curd operations , schedular ,seeder and fakers functionality<br>
<b>Steps to setup project</b> 
<p>1.git clone https://github.com/GahlotNisha/Laravel-demoProject.git </p><br>
<p>2.Switch to master branch</p>
<p>3.Run command - composer update <br>
composer dumpaoutload </p>
<p>4.change file name .env.example to .env</p>
<p>5.Cretae database by any name and fill details in .env file</p><br>
<p>6.Run php artisan migrate command.</p><br>
<p>7.Run php artisan serve .<p>
<p>8.Run php artisan db:seed - This command will add 100 records in user table and if u again run this command then updated at filed will be changed only.</p><br>
<p>9.Run php artisan fetch:users - This command will run corn for sending mail to admin for Todays registered users.</p><br>
<p>10.Create mailtrap account and add details in .env file for recieving mail or u can configure your smtp mail configuration.</p><br>
<p>11.Run php artisan serve - To see CURD operations where user can Add,Edit,Delete and read the post.</p><br>
