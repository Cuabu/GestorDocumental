# Diagrama de Flujo

```mermaid
graph TD
    A[Instalador De Docs] -->|Descargando herramientas| B(Procesar Requisitos)
    B --> C{Requisitos Completados}
    C -->|Yes| D["Quiere Instalar Gestion Docs"]
    C -->|No| E["Actualizar Aplicacion"]
    C -->|Salir| F["Cancelar Instalaciones"]
