# bakersDozen
A collaborative and timed portfolio project.

# Instructions
1) Clone the repo on your drive and/or server
2) Set up recaptcha v2 by going here: https://www.google.com/recaptcha and clicking v3 admin console, then clicking the + in the top right, and setting up a new site with v2.
   Add whatever domain it'll be hosted on, as well as localhost and 127.0.0.1 for testing. Mine looks like this:
   
   ![recaptcha](https://i.imgur.com/PSo3boq.png)
3) Install all packages and dependencies with NPM and Composer (install them if you don't have them), by running npm install and composer install.
4) Set up a new mysql database on your server or local environment with whatever name you want, using "contact.sql" to add the contact table to this db.
5) Set up a ".env" file in the main directory with the following settings

```
RECAPTCHA_SITE=""
RECAPTCHA_SECRET=""
DB_DSN="mysql"
DB_HOST="localhost"
DB_PORT="3306"
DB_NAME=""
DB_USER=""
DB_PASS=""
SMTP_HOST="smtp.office365.com"
SMTP_PORT="587"
SMTP_SECURE="tls"
SMTP_AUTH="true"
SMTP_USERNAME=""
SMTP_PASSWORD=""
```

  - RECAPTCHA_SITE and RECAPTCHA_SECRET are the site & secret keys you can get from your recaptcha control panel.
  - DB_DSN, DB_HOST, and DB_PORT should likely stay the same
  - DB_NAME is the name of the database on your server
  - DB_USER and DB_PASS are the user account credentials for the database
  - SMTP_HOST is the SMTP hostname, this one is set up for emailing from an office365 account
  - SMTP_PORT should stay the same if using office365. If using a different mail provider it *may* not work, but feel free to try looking up these values for a different provider.
  - SMTP_SECURE and SMTP_AUTH again should stay the same if using office365.
  - SMTP_USERNAME and SMTP_PASSWORD are your account credentials for the mail account

6) Go to dist/inc/mailer.php and change the "SetFrom()" address to your own, and the same with "addAddress()"
7) Make sure the .env file is added to .gitignore, as this file contains secret information that you don't exactly want showing up on GitHub.

If you want to use PHP.ini for environment variables instead, here is where the ENVs are used:

- /dist/inc/functions.php - line 104 (recaptcha secret key)
- /dist/inc/connection.php - lines 9 through 14 (database info)
- /dist/inc/mailer.php - lines 24 through 29 (SMTP info)
- /order.php - line 196 (recaptcha site key)
