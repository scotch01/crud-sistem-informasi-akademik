# Sistem Informasi Akademik Sederhana

Project Ini Merupakan Tugas Akhir Kelompok Pemrograman Lanjutan

Build with:

-   Laravel 9
-   Bootstrap 5 using template SB Admin 2

Feature:

-   Register
-   LogIn | LogOut
-   CRUD

![register](https://github.com/scotch01/crud-sistem-informasi-akademik/assets/101814955/f723de7f-06f0-4a97-a50c-b7ddd274f5b4)

![login](https://github.com/scotch01/crud-sistem-informasi-akademik/assets/101814955/f67d4a1d-ae8b-41dd-a4e6-887af76bfaa4)

![dashboard](https://github.com/scotch01/crud-sistem-informasi-akademik/assets/101814955/8f9b557b-49a3-4fc0-9976-08c7c95d10b5)

![view](https://github.com/scotch01/crud-sistem-informasi-akademik/assets/101814955/feaf70da-ffd1-4408-9023-1a7446417142)

![edit](https://github.com/scotch01/crud-sistem-informasi-akademik/assets/101814955/81a7e1cc-1431-4ec8-933e-118e5238abd1)

![add](https://github.com/scotch01/crud-sistem-informasi-akademik/assets/101814955/c5a43a0e-0630-4fde-93c2-cdc55f9a5307)

## Account for testing

You can simply create an account by registering and then logging in

## Deployment

1. **Clone Repository**

```bash
  git clone

  cd crud-sistem-informasi-akademik

  composer install
```

2. **create file `.env`**

```bash
  cp .env.example .env
```

3. **Open `.env` then change the following lines according to the database you want to use**

```bash
  DB_PORT=3306
  DB_DATABASE=crud_sia
  DB_USERNAME=root
  DB_PASSWORD=
```

4. **Generate app key**

```bash
  php artisan key:generate
```

5. **Run the migration**

```bash
  php artisan migrate
```

6. **Rune the Website**

```bash
  php artisan serve
```
