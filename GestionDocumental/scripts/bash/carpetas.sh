#!/bin/bash

# Definir el nombre del proyecto
project_name="GestionDocumental"

# Definir la ruta base del proyecto
base_path="$HOME/$project_name"

# Crear la estructura de carpetas
echo "Creando estructura de carpetas para el proyecto $project_name..."

# Carpeta principal del proyecto
mkdir -p "$base_path"

# Carpetas para la base de datos y scripts SQL
mkdir -p "$base_path/database/sql"
mkdir -p "$base_path/database/backups"

# Carpeta para scripts en Bash
mkdir -p "$base_path/scripts/bash"

# Carpeta para documentación del proyecto
mkdir -p "$base_path/documentacion"

# Carpeta para scripts de seguridad
mkdir -p "$base_path/seguridad"

# Carpeta para configuraciones (config files)
mkdir -p "$base_path/config"

# Carpeta para la aplicación y código fuente
mkdir -p "$base_path/app"
mkdir -p "$base_path/app/models"
mkdir -p "$base_path/app/controllers"
mkdir -p "$base_path/app/views"

# Carpeta para archivos de almacenamiento de documentos
mkdir -p "$base_path/storage/documentos"

# Carpeta para archivos temporales y logs
mkdir -p "$base_path/temp"
mkdir -p "$base_path/logs"

# Mensaje final de confirmación
echo "Estructura de carpetas creada exitosamente en $base_path"
