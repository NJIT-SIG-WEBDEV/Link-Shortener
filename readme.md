##SIG Backend - Laravel Link Shortener
Hi everyone, Jay asked me to post up what I had so far for anyone who is working on the link shortener web app using the PHP framework Laravel 5. For those unfamiliar with Laravel 5 I know there a lot of folders but the ones I will be working in the most will be:

- app
- app/http
- resources
 
I will be working on this project all week until the next meeting but hopefully it will be done by this coming Sunday Feb 28. I'll continue adding to this Readme and do my best in documenting my code. 

Thanks,<br>
Dennis 

##Notes on Database Connectivity
For this project I'll be using MySQL. If you want to use a different database connection like SQLite then you would go into <b>app/config/database.php</b> and change the default database connection type. Below you'll see the default.
<img src="http://s21.postimg.org/frgy2yymv/sample1.png">

Also very important are the environment variables for your project, it includes things like the login for the database connection you are using. Now you generally do not include such things. By default the <b>.env</b> file is included in <b>.gitignore</b> file so it won't be pushed into the repository.You will see <b>.env.example</b> here in the repo. This is what the <b>.env</b> will generally look like. So rename it to <b>.env</b> if you don't already have it in your project or if you do just delete it.

###Setting environment variables
Below are four environment variables you want to pay attention to. They are pretty self explanatory just change them to match your database host, database name, username, and password. Since we are running this on our own computers the DB_HOST will be your localhost (localhost or 127.0.0.1 take your pick). I had a bit of trouble before connecting to MySql on a previous project and including a port number seemed to solve the problem. <b>127.0.0.1:8889<b>
<img src="http://s22.postimg.org/ujhuqjdb5/sample2.png">