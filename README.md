Jak uruchomić projekt?

1) composer install
2) Ustaw konfigurację bazy danych w  pliku env.
3) php artisan migrate:fresh
4) php artisan db:seed
5) php artisan key:generat
6) php arisan serve

Frontend wysyła zapytania na http://127.0.0.1:8000, jeżeli w twoim wypadku backend ustawił się na innym porcie, proszę zmień go na port 8000.
