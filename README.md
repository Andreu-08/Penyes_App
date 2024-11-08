# 🎉 Penyes App 🎉

Bienvenido a **Penyes App**, un proyecto para gestionar las festividades de un pueblo. Aquí las "peñas" (grupos de personas que organizan eventos) pueden interactuar, y el administrador puede gestionar usuarios, peñas, sorteos y pagos de membresía. Este README te guiará a través de las secciones principales del proyecto: configuración inicial, Home Page, Front Office y Back Office.

---

## 🚀 Configuración Inicial

### Tecnologías y Configuración
Este proyecto está basado en **Laravel 11** y utiliza **Docker** para su entorno de desarrollo, junto con una arquitectura de contenedores que incluye Nginx, MariaDB, y Mailhog para gestionar los correos de verificación en un entorno seguro y aislado.

1. **Clona el repositorio**:
   ```bash
   git clone https://github.com/tu-usuario/penyes-app.git
   cd penyes-app
1. **Inicia Docker**:
    
    ```bash
    docker-compose up    
    ```
    
2. **Accede a la aplicación** en [http://localhost:8080](http://localhost:8080/).

**Docker** gestiona todos los contenedores, así que no necesitas configuraciones adicionales de bases de datos o servidores web. Simplemente levanta el contenedor y ¡listo!

---

## 🏠 Home Page

La Home Page es la cara visible de Penyes App para los visitantes que aún no están registrados. Aquí pueden obtener una visión general de las festividades y peñas, además de acceder a un carrusel de actividades.

### Características Principales

- **Slogan y Foto Principal**: Una imagen que representa el espíritu de las peñas y un eslogan atractivo.
- **Carrusel de Actividades**: Aquí se muestran imágenes de eventos y actividades pasadas.
- **Secciones de Actividades y Horarios**: Los visitantes pueden ver un horario general de las actividades.
- **Footer con Ubicaciones**: Información adicional sobre dónde se celebran las actividades.

<img src="readme_img/homepage.png" alt="Home Page" width="600">

---

## 🧭 Front Office - Vista de Usuario

Esta es la vista para usuarios registrados. Después de hacer login, los usuarios pueden explorar las peñas, solicitar unirse a una, y ver detalles como su posición en el sorteo anual de ubicaciones.

### Vista del Front Office

- **Lista de Peñas**: Los usuarios pueden ver las peñas disponibles y enviar solicitudes para unirse a una.
- **Sorteos y Ubicaciones**: Cada peña se asigna aleatoriamente a una posición en un "carrusel" de ubicaciones anuales.
- **Perfil de Usuario**: Aquí pueden ver sus datos, solicitudes de membresía y estado de pagos.

<img src="readme_img/fronoffice.png" alt="Front Office" width="600">

---

## 🛠️ Back Office - Panel de Administración

La vista de Back Office está diseñada exclusivamente para el administrador. Este panel permite gestionar usuarios, peñas, sorteos y pagos de membresía. Es la columna vertebral de Penyes App.

### Funcionalidades del Back Office

- **Gestión de Usuarios y Peñas**: El administrador puede agregar, editar y eliminar usuarios y peñas.
- **Sorteos Anuales**: Asigna ubicaciones a las peñas de forma aleatoria para cada año y mantiene un historial.
- **Pagos de Membresía**: Aunque sea un simulacro, esta funcionalidad permite al administrador registrar y gestionar pagos.

<img src="readme_img/backoffice.png" alt="Back Office" width="600">

---

## 🌍 Tecnologías y Dependencias Principales

- **Laravel 11**: El framework backend.
- **Docker**: Para el entorno de contenedores.
- **MariaDB**: Base de datos para almacenar usuarios, peñas, y sorteos.
- **Mailhog**: Herramienta de testing para el envío de correos de verificación.
- **Bulma CSS (CDN)**: Estiliza la interfaz de usuario de una forma sencilla y elegante.

---

¡Gracias por explorar Penyes App! 🎉 Este proyecto está diseñado para ser una herramienta amigable y flexible para gestionar eventos locales.