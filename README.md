## Diagrama de Flujo

```mermaid
graph TD
    A[Instalador De Docs] --> B[Requeriments]
    B -->|Yes| D["Quiere Instalar Gestion Docs"]
    B -->|No| E["Actualizar Aplicacion"]
    B -->|Salir| F["Cancelar Instalaciones"]