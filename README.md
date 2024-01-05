# Sistem Informasi Akademik Sederhana'

Project Ini Merupakan Tugas Akhir Kelompok Pemrograman Lanjutan

Build with:

-   Laravel 9
-   Bootstrap 5 using template SB Admin 2

Feature:

-   Register
-   LogIn | LogOut
-   CRUD

![register.png](ss/register.png)

![login.png](ss/login.png)

![dashboard.png](ss/dashboard.png)

![view.png](view/login.png)

![add.png](ss/add.png)

![edit.png](edit/login.png)

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
