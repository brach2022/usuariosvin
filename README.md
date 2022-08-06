# usuariosvin

### Requerimientos para la instalación

1. xampp
2. Maria DB que viene incluido con el xampp

### Pasos para la intalación

1. Instalar xampp de la pagina oficial [XAMPP](https://www.apachefriends.org/es/index.html).
2. Crear una carpena en el directorio htdocs con el nombre usuariosvin
3. Clonar el repositorio en esta carpenat con con el codigo 'git clone https://github.com/brach2022/usuariosvin.git'
4. Una vez clonada la carpeta ir a la adminitración de base de datos de xampp y crear la base de datos usuarios
5. Importar el archivo .sql que esta en la raiz del repositorios en la base de datos usuarios 
6. Ir a la carpeta config y en archivo database.php ajustar los datos de conexión de acorde a su base de datos
7. luego de realizar los pasos anteriores ya puede realizar el utilizar el CRUD de usuario de usuariosvin

### Para poder realizar puebas en usuariosvin siga los siguientes pasos

1. Abra el panel de administración de xampp e inicie el apache y el MySQl
2. Abra en un navegador web la siguiente url http//localhost/[directorio donde clono el repositorio]/usuariosvin
3. Con el paso anterior se le va desplegar la pantalla de registro a usuariosvin en la cual va poder ingrezar los datos los usuarios
4. Luego en una pestaña aparte abra la url http//localhost/[directorio donde clono el repositorio]/usuariosvin/admin.php para el administrador 
en el cual puede listar , actualizar y eliminar registros de la base de datos