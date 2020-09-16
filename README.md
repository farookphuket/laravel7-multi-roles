# laravel7-multi-roles 


- last update 9 Sep 2020 12:20 a.m.



##  last update 16 Sep 2020 9:47 a.m.



> this is the multi roles user login project
> date 6 Sep 2020 this is done on a very late at night by 2:26 a.m. 


#   what is the feature


1.  user can login with role of "Admin","Moderate","Member"
2.  use Gate to check the current user will be match with the his user role
3.  moderate user cannot delete himself 
4.  moderate user have to confirm his password in every time if he want to update himself or another user
5.  generic user can edit or delete his profile

---


# clone this app to try on your project
> to clone this project to your local machine by just using the command `git clone https://github.com/farookphuket/laravel7-multi-roles.git`



---



# if you use Manjaro how to config Manjaro ONLY!

>   if you are on manjaro and you cannot connect to sqlite make sure you do this things.
>   last update 16 Sep 2020

1.  install php-sqlite by run command `sudo pacman -S php-sqlite`

2.  make sure that in your `.env` file you have give an apsolute path to your sqlite DB file `DB_DATABASE=/srv/http/your-project-folder/DB/database.sqlite`.



[env_file]:https://i.ibb.co/dtgT8zN/env-file.png
![env file][env_file]




3.  make sure that you have enable extension pdo_sqlite and sqlite3 in your php.ini file `sudo vim /etc/php/php.ini` then remove ';' from `extension=pdo_sqlite` and `extension=sqlite3`.




[php_ini]:https://i.ibb.co/3zqb8zD/php-ini.png
![php ini][php_ini]


4.  if you done all of the above your system will work as you expected!




>   please checkout the folder "MANJARO_ONLY"



---


# if you use Ubuntu 


> this is my Ubuntu 20.04 config that I use on my computer.

1.  install sqlite if you never set it up before `sudo apt install php-sqlite3`
