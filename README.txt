1)
Download de zip file van de volgende link
https://we.tl/t-mCWrRsko3Q
Zet de 2 mappen (fonts, img) in de volgende folder
barroc-it -> public -> storage

2)
Run het volgende command in cmd:
php artisan key:generate

3)
verander de database in het .env bestand naar een lege database naar bijvoorbeeld: barroc-intens

4)
Run het volgende command in cmd:
php artisan migrate:fresh --seed