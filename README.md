# GestorDocumental
Estas pautas ayudan a que la base de datos cumpla con las normativas de gestión documental, haciendo más eficiente la administración, seguridad y consulta de los documentos.

# Proyecto de Documentación

Este es un ejemplo de cómo mostrar gráficos Mermaid en GitHub.

## Diagrama de Flujo

```mermaid
graficar TD
    A[Instalador De Docs] -->|Descargando herramientas| B(Procesar Requisitos)
    B --> C{Requisitos Completados} 
    C -->|Yes| D["Quiere Instalar Gestion Docs"]
    C -->|No| E["Actualizar Aplicacion"]
    C -->|Salir| F["Cancelar Instalaciones"]