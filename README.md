# **PlanW**

**PlanW** is a web-based system developed in PHP for managing **people** and **courses**. It allows for the management of users (teachers and students), authenticating users, and administering courses in a simple way.

---

## 💻 **Main Features**

- **User Management**:  
  The system allows managing both **students** and **teachers**. Administrators can **add**, **edit**, and **delete** people.

- **User Authentication**:  
  Users can **log in** and access specific features based on their role (student or teacher).

- **Course Management**:  
  Administrators can manage available **courses**, assign them to teachers, and enroll students in courses.

---

## 📊 **Project Structure**

### Main Files

- **`index.php`**: Homepage that displays available resources or a welcome screen.
- **`login.php`**: Login page for users.
- **`loginproceso.php`**: Processes login data.
- **`cerrar.php`**: Logs out the user.
- **`editarpersona.php`**: Form for editing people's information.
- **`leer.php`**: Page for reading and displaying information about people or courses.
- **`eliminar.php`**: Deletes people or course records.
- **`conexion.php`**: Establishes a connection to the database.
- **`footer.php` / `header.php`**: Template files for the footer and header.
- **`sidebar.php`**: Sidebar navigation menu.
- **`style.css`**: Stylesheet for the visual appearance of the project.

### Directories

- **`alumnos/`**: Files related to student management.
- **`docentes/`**: Files related to teacher management.
- **`cursos/`**: Files for managing courses.
- **`relaciones/`**: Files that manage the relationships between different modules.

---

## 🛠 **Technologies Used**

- **PHP** for server-side logic.
- **MySQL** for the database (presumably, since there is a database connection).
- **HTML/CSS** for frontend development.
- **JavaScript** for client-side interactivity (possibly related to files in `js/`).

---

## 🚀 **Installation and Setup**

1. **Clone the repository** or download the project source code.
   ```bash
   git clone https://github.com/Moriarty369/php_website_basic_project.git
   ```

2. **Database Setup**  
   Ensure that you have a MySQL database server. You can either create the database manually or modify the parameters in **`conexion.php`** to point to your database server.

3. **Set Up the Environment**  
   The project should work when uploaded to your web server or when configured in a local server environment like XAMPP or MAMP.

---

## 📝 **How to Use**

- **Login**: Enter the system with your account credentials (either student or teacher).
  
- **Manage People**: From the admin panel, you can add, edit, and delete people records.

- **Manage Courses**: Administrators can create and manage courses, assign teachers to the courses, and enroll students.

---

## 🤝 **Contributing**

If you'd like to contribute to the project, follow these steps:

1. **Fork the repository**.
2. **Create a new branch**:
   ```bash
   git checkout -b feature/new-feature
   ```
3. Make your changes and ensure everything works correctly.
4. **Submit a pull request** with your changes.

---

## ✒️ **Author**

- Abelardo Acosta https://github.com/Moriarty369

---

---

# **PlanW**

**PlanW** es un sistema web desarrollado en PHP para la gestión de **personas** y **cursos**. Permite gestionar usuarios (docentes y alumnos), autenticar usuarios y administrar cursos de una manera sencilla.

---

## 💻 **Características Principales**

- **Gestión de Usuarios**:  
  El sistema permite gestionar tanto **alumnos** como **docentes**. Los administradores pueden **agregar**, **editar** y **eliminar** personas.

- **Autenticación de Usuarios**:  
  Los usuarios pueden **iniciar sesión** y acceder a funciones específicas según su rol (alumno o docente).

- **Gestión de Cursos**:  
  Los administradores pueden gestionar los **cursos** disponibles, asignarlos a los docentes y matricular a los alumnos.

---

## 📊 **Estructura del Proyecto**

### Archivos Principales

- **`index.php`**: Página de inicio que muestra los recursos disponibles o una pantalla de bienvenida.
- **`login.php`**: Página de inicio de sesión para los usuarios.
- **`loginproceso.php`**: Procesa los datos de inicio de sesión.
- **`cerrar.php`**: Cierra la sesión del usuario.
- **`editarpersona.php`**: Formulario para editar la información de las personas.
- **`leer.php`**: Página para leer y mostrar información de personas o cursos.
- **`eliminar.php`**: Elimina registros de personas o cursos.
- **`conexion.php`**: Establece la conexión con la base de datos.
- **`footer.php` / `header.php`**: Archivos de plantilla para el pie de página y el encabezado.
- **`sidebar.php`**: Menú de navegación lateral.
- **`style.css`**: Estilo para la apariencia visual del proyecto.

### Directorios

- **`alumnos/`**: Archivos relacionados con la gestión de los alumnos.
- **`docentes/`**: Archivos relacionados con la gestión de los docentes.
- **`cursos/`**: Archivos para la gestión de los cursos.
- **`relaciones/`**: Archivos que gestionan las relaciones entre los diferentes módulos.

---

## 🛠 **Tecnologías Usadas**

- **PHP** para la lógica del servidor.
- **MySQL** para la base de datos (presumiblemente, ya que hay una conexión con la base de datos).
- **HTML/CSS** para el desarrollo del frontend.
- **JavaScript** para la interactividad del cliente (posiblemente relacionado con los archivos en `js/`).

---

## 🚀 **Instalación y Configuración**

1. **Clona el repositorio** o descarga el código fuente del proyecto.
   ```bash
   git clone https://github.com/Moriarty369/php_website_basic_project.git
   ```

2. **Configuración de la Base de Datos**  
   Asegúrate de tener un servidor de base de datos MySQL. Puedes crear la base de datos manualmente o modificar los parámetros en **`conexion.php`** para que apunten a tu servidor de base de datos.

3. **Configuración del Entorno**  
   El proyecto debería funcionar al subir los archivos a tu servidor web o al configurarlo en un servidor local como XAMPP o MAMP.

---

## 📝 **Cómo Usar**

- **Iniciar sesión**: Entra en el sistema con las credenciales de tu cuenta (ya sea de alumno o docente).
  
- **Gestionar Personas**: Desde el panel de administración, podrás agregar, editar y eliminar registros de personas.

- **Gestionar Cursos**: Los administradores pueden crear y gestionar cursos, asignar docentes a los cursos y matricular a los alumnos.

---

## 🤝 **Contribuir**

Si deseas contribuir al proyecto, sigue estos pasos:

1. **Forkea el repositorio**.
2. **Crea una nueva rama**:
   ```bash
   git checkout -b feature/nueva-funcionalidad
   ```
3. Realiza tus cambios y asegúrate de que todo funcione correctamente.
4. **Envía un pull request** con tus cambios.

---

## ✒️ **Autores**

- Abelardo Acosta https://github.com/Moriarty369

---
