# Diagrama de Flujo

```mermaid
graph TD
    A[Instalador De Docs] -->|Descargar herramientas| B[Requeriments]
    B --> C{Requisitos Completados}
    C -->|Sí| D["Quiere Instalar Gestion Docs"]
    C -->|No| E["Actualizar Aplicacion"]
    C -->|Salir| F["Cancelar Instalaciones"]
