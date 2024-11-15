## Diagrama de Flujo

```mermaid
graph TD
    A[Instalador De Docs] --> B[Requeriments]
    B --> C{Requisitos Completos}
    C -->|Sí| D["Instalar Gestion Docs"]
    C -->|No| E["Actualizar Aplicacion"]
    C -->|Salir| F["Cancelar Instalaciones"]
