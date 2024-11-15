# Diagrama de Flujo

```mermaid
graph TD
    A[Instalacion De Docs] B[Requeriments]
    B --> C{Requisitos Completados}
    C -->|Sí| D["Quiere Instalar Gestion Docs"]
    C -->|No| E["Actualizar Aplicacion"]
    C -->|Salir| F["Cancelar Instalaciones"]
