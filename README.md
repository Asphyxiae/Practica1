
---

# Práctica - Instalación de un Servidor con Ansible

## Instala tu Aplicación Web con Ansible

Las herramientas de gestión de configuración, como Ansible, son fundamentales para automatizar y optimizar el proceso de configuración de servidores. Permiten establecer procedimientos estándar para nuevos servidores y reducir los errores humanos asociados con las configuraciones manuales.

**Por qué Ansible:**
- Arquitectura sencilla, sin necesidad de software especial en los nodos.
- Conjunto sólido de características y módulos incorporados.
- Facilita la escritura de secuencias de comandos de automatización.

**Objetivo:**
Utilizar Ansible para automatizar la instalación de paquetes y configuraciones necesarios para alojar una aplicación web dinámica. Esto incluye la creación de una página web personalizada, configuración de VirtualHost, gestión de la base de datos y configuración del firewall.

**Pasos a seguir:**
1. Instalación de paquetes necesarios.
2. Creación de una página web personalizada.
   - La página se verá en el dominio www.cvaltierra.com.
   - Acceso vía dirección IP mostrará la misma página.
3. Creación de un nuevo VirtualHost en el servidor web con root de documentos específico.
   - La aplicación web se desplegará en el dominio app.cvaltierra.com.
4. Habilitación del nuevo VirtualHost.
5. Configuración de la contraseña para el usuario administrador de la base de datos.
6. Carga del esquema de bases de datos en el servidor.
7. Eliminación de cuentas anónimas y base de datos de prueba.
8. Configuración del firewall para permitir el tráfico HTTP en el puerto configurado (por defecto, el 80).
9. Establecimiento de la aplicación web desarrollada.

Una vez que el playbook se ejecute por completo, tendrás un entorno web completamente funcional y atractivo de acuerdo a tus especificaciones y variables de configuración.

Funcionalidad: https://flip.com/s/oB7zwbcydezZ

Hecho por: Valtierra Lopez Carlos Andres.


---

Este redmi proporciona una descripción completa de tu tarea y los objetivos que deseas lograr utilizando Ansible para automatizar la instalación de tu aplicación web.
