1)
Download de zip file van de volgende link
https://we.tl/t-4leSGEtKnz
Zet de 2 mappen (fonts, img) in de volgende folder
barroc-it -> public -> storage

2)
Run het volgende command in cmd:
php artisan key:generate

3)
verander de database in het .env.example bestand naar een lege database naar bijvoorbeeld: barroc-intens
en verander het .env bestand naam naar .env en verwijder zo nodig de vorige

4)
Run het volgende command in cmd:
php artisan migrate:fresh --seed