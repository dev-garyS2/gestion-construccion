# Sistema de Gestión de Construcción 🚧

Aplicación web desarrollada con **Laravel**, **PHP** y **PostgreSQL** para gestionar proyectos y tareas de construcción.

---


## 🚀 Instalación Paso a Paso

### 1️⃣ Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/gestion-construccion.git
cd gestion-construccion
```

### 2️⃣ Instalar dependencias con Composer

```bash
composer install
```

### 3️⃣ Configurar variables de entorno

Copia la plantilla `.env.example` a `.env`:

```bash
cp .env.example .env
```

Edita `.env` con tus credenciales de PostgreSQL:

```dotenv
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=gestion_construccion
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 4️⃣ Crear la base de datos

En PostgreSQL:

```sql
CREATE DATABASE gestion_construccion;
```

### 5️⃣ Ejecutar migraciones

```bash
php artisan migrate
```

> ⚠️ Para empezar desde cero:

```bash
php artisan migrate:fresh
```

### 6️⃣ Ejecutar Seeders (datos iniciales)

```bash
php artisan db:seed
```

> ⚡ Todo en un solo paso:

```bash
php artisan migrate:fresh --seed
```

---

## 🗂 Estructura del Proyecto

```
gestion-construccion/
├── app/
│   ├── Http/Controllers/    # Controladores
│   └── Models/              # Modelos Eloquent
├── database/
│   ├── migrations/          # Migraciones de tablas
│   └── seeders/             # Seeders para datos iniciales
├── resources/
│   └── views/               # Vistas Blade
├── routes/
│   └── web.php              # Rutas web
├── .env.example
├── composer.json
└── README.md
```


### 4️⃣ Generar la clave de la aplicación

Laravel requiere una clave de cifrado para funcionar correctamente.

```bash
php artisan key:generate
```


---

## 💻 Uso

Levantar servidor local de Laravel:

```bash
php artisan serve
```

Acceder en: `http://127.0.0.1:8000`

---


## ✅ Datos de ejemplo

**Tipos de Proyecto:** Residencial, Comercial, Industrial  

**Estados de Tarea:** Pendiente, En Progreso, Finalizada  

**Proyectos:**

- Casa Familiar López (La Paz, tipo Residencial)  
- Centro Comercial Andino (Cochabamba, tipo Comercial)  
- Planta Industrial Norte (Santa Cruz, tipo Industrial)  

**Tareas:**

- Excavación del terreno  
- Cimentación  
- Diseño estructural  
- Instalación eléctrica  
- Montaje de maquinaria  

---


