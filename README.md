# Backend-Developer-Web-Tarea-01-SENATI

Esta tarea trata sobre la construcción de un software que pueda identificar el área, perímetro y el tipo de un triángulo con los lados pasados en un input como parametros.

## Para la tarea utilizé:
- PHP
- CSS
- imagenes ".png"
- Un servicio APACHE con XAMPP

<img width="949" height="535" alt="image" src="https://github.com/user-attachments/assets/3d8b45b9-28ec-4f8e-b33c-760049086585" />
<img width="949" height="535" alt="image" src="https://github.com/user-attachments/assets/4dd12342-31ff-4698-a6dd-225152b0616c" />
<img width="949" height="535" alt="image" src="https://github.com/user-attachments/assets/5a02efcc-dec8-4901-8f86-c7abc8be149b" />

# Guía de Instalación y Despliegue de la Aplicación Web

Esta guía contiene las instrucciones necesarias para instalar el entorno de desarrollo local XAMPP y ejecutar esta aplicación web basada en PHP.

---

## Requisitos Previos

Antes de comenzar, asegúrate de tener descargado el instalador de XAMPP para tu sistema operativo desde la página oficial de Apache Friends.

---

## Paso 1: Instalar XAMPP

1. Ejecuta el archivo instalador de XAMPP que descargaste.
2. Si aparece una advertencia sobre el Control de Cuentas de Usuario (UAC), haz clic en **Aceptar**.
3. En la ventana de selección de componentes, asegúrate de que **Apache** y **PHP** estén seleccionados (puedes dejar el resto por defecto).
4. Sigue el asistente de instalación haciendo clic en **Next** (Siguiente) y mantén la ruta de instalación por defecto: `C:\xampp`.
5. Haz clic en **Finish** (Finalizar) para completar la instalación y abrir el Panel de Control de XAMPP.

---

## Paso 2: Ubicar el Proyecto en el Servidor Local

Para que el servidor web pueda interpretar los archivos PHP, el proyecto debe estar dentro de la carpeta raíz de XAMPP.

1. Abre el explorador de archivos de Windows.
2. Dirígete a la siguiente ruta exacta:
   `C:\xampp\htdocs`
3. Dentro de `htdocs`, crea una nueva carpeta para el proyecto. Por ejemplo, nombra la carpeta como `mi-app-web`.
4. Copia o mueve la carpeta con los archivos de este repositorio dentro de esa nueva carpeta.

La estructura debe quedar así:
`C:\xampp\htdocs\mi-app-web\Informe de Practica IP01`

---

## Paso 3: Iniciar el Servidor Web

1. Abre el **Panel de Control de XAMPP** (puedes buscarlo en el menú de inicio de Windows).
2. Localiza el módulo llamado **Apache**.
3. Haz clic en el botón **Start** (Iniciar) situado al lado de Apache.
4. Sabrás que está funcionando correctamente cuando el texto "Apache" se resalte en color verde y muestre los números de los puertos de red.

---

## Paso 4: Ejecutar la Aplicación en el Navegador

Una vez que el servidor esté activo y los archivos en su lugar, abre tu navegador web preferido (Chrome, Edge, Firefox, etc.) e ingresa la siguiente URL en la barra de direcciones:

```url
http://localhost/mi-app-web/Informe%20de%20Practica%20IP01/IP01.php
```
