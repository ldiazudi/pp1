# PP1 — Práctica Profesionalizante I

[![PHP](https://img.shields.io/badge/PHP-%3E%3D8.1-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Symfony](https://img.shields.io/badge/Symfony-6.4-000000?logo=symfony&logoColor=white)](https://symfony.com/)
[![Doctrine](https://img.shields.io/badge/Doctrine-ORM-2C3E50)](https://www.doctrine-project.org/)
[![Twig](https://img.shields.io/badge/Twig-3.x-000000)](https://twig.symfony.com/)

Repositorio del proyecto anual de la materia **Práctica Profesionalizante I (PP1)**.  
Se construyó de forma progresiva a lo largo del año, a medida que se vieron los temas en clase.

> **Nota:** este repo **no** es el trabajo práctico final (TP final). Es el proyecto de seguimiento / aprendizaje del cursado.

---

## Qué es

Aplicación de **carrito de compras** (catálogo, autenticación y armado de orden), precedida por ejercicios de HTML/CSS, PHP y Twig que documentan el recorrido de aprendizaje.

La parte funcional principal vive en `carrito/` (Symfony). El resto del árbol son prácticas previas (maquetado estático, PHP básico y Twig standalone).

---

## Stack (app `carrito/`)

| Tecnología | Uso |
|---|---|
| PHP ≥ 8.1 | Runtime |
| Symfony 6.4 | Framework web |
| Doctrine ORM + Migrations | Persistencia y esquema |
| Twig | Vistas |
| Symfony Security | Login / logout y control de acceso |
| MySQL | Base de datos (`DATABASE_URL` en `.env`) |
| Doctrine Fixtures | Datos de prueba (usuarios y productos) |

---

## Estructura del repositorio

```
pp1/
├── carrito/           # App Symfony: carrito de compras
├── twig/              # Ejercicios Twig (standalone, Composer)
├── css/               # Prácticas de CSS / HTML
├── ejer070426/        # Prácticas HTML tempranas
├── imagenes/          # Imágenes usadas en maquetas estáticas
├── pagina1.html       # Maqueta: login
├── pagina2.html       # Maqueta: listado de productos
├── pagina3.html       # Maqueta: detalle de producto
├── estilos.css        # Estilos de las maquetas
└── index.php          # Ejercicios PHP básicos
```

### App `carrito/` (resumen)

```
carrito/
├── src/
│   ├── Controller/    # Producto, Orden, Login, Profile
│   ├── Entity/        # User, Producto, Orden, Item
│   ├── Manager/       # ProductoManager, OrdenManager
│   ├── Repository/
│   └── DataFixtures/
├── templates/         # Twig (lista, detalle, login, header)
├── migrations/
├── public/            # Front controller e imágenes
└── config/            # Security, Doctrine, etc.
```

---

## Funcionalidad actual (`carrito/`)

Implementado en código:

- **AuthN / AuthZ:** login por formulario (`/login`), logout, acceso restringido a `ROLE_USER` (salvo login/logout).
- **Catálogo:** listado de productos (`/`) y detalle (`/producto/{id}`).
- **Orden:** alta de ítems vía POST (`/orden/agregar`); se reutiliza o crea una orden en estado `Iniciada` asociada al usuario.
- **Modelo:** relaciones `User` → `Orden` → `Item` → `Producto`.
- **Fixtures:** usuarios `usuario1@gmail.com` … `usuario5@gmail.com` y 10 productos de ejemplo.

Pendiente / incompleto (no inventar uso): el enlace «Ver Orden» del header aún no tiene ruta; `ProfileController` no expone ruta propia.

---

## Instalación y ejecución

### Requisitos

- PHP ≥ 8.1 con extensiones habituales de Symfony
- Composer
- MySQL 8 (o ajustar `DATABASE_URL`)
- Opcional: [Symfony CLI](https://symfony.com/download)

### App Symfony (`carrito/`)

```bash
cd carrito
composer install
```

Configurar la base en `carrito/.env` (por defecto):

```env
DATABASE_URL="mysql://root:@127.0.0.1:3306/carrito?serverVersion=8&charset=utf8mb4"
```

Crear la base, migrar y cargar fixtures:

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```

Levantar el servidor:

```bash
# con Symfony CLI
symfony server:start -d

# o con el servidor embebido de PHP
php -S 127.0.0.1:8000 -t public
```

Abrir `http://127.0.0.1:8000` (redirige a login si no hay sesión).

### Ejercicios Twig (`twig/`)

```bash
cd twig
composer install
php -S 127.0.0.1:8080
```

Ejemplos: `eje01.php?nombre=Juan`, `eje03.php`, `eje04.php?opcion=1`, `eje05.php?opcion=1&nombre=Carlos`.

### Maquetas HTML / CSS

Abrir en el navegador (o servir la raíz del repo) `pagina1.html`, `pagina2.html`, `pagina3.html`, o los archivos en `css/` y `ejer070426/`.

---

## Temas y conceptos cubiertos

Según lo que hay en el repo:

1. **HTML / CSS** — maquetado de login, grilla de productos y detalle; prácticas en `css/` y `ejer070426/`.
2. **PHP procedural** — bucles, funciones, formularios y excepciones (`index.php`).
3. **Twig** — variables, filtros, bucles e includes (`twig/`).
4. **Symfony** — proyecto Flex, controladores con atributos `#[Route]`, templates Twig, Asset Mapper.
5. **Doctrine** — entidades, repositorios, migraciones, fixtures.
6. **Arquitectura en capas** — Controllers → Managers → Repositories / EntityManager.
7. **Security** — `User` como user provider, form login, firewall, `access_control`.
8. **Dominio carrito** — orden iniciada, ítems con cantidad, relación con productos y usuario.

---

## Autor

Proyecto de cursado PP1 — repositorio: [ldiazudi/pp1](https://github.com/ldiazudi/pp1).
