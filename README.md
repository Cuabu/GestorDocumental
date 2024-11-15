## Diagrama de Flujo

```mermaid
graph TD
    A[Instalador De Docs] --> B[Requeriments]
    B -->|Yes| D["Quiere Instalar Gestion Docs"]
    B -->|No| E["Actualizar Aplicacion"]
    E --> F[Conexion a Internet]
    F --> G[Actualizar]
    B -->|Salir| H["Cancelar Instalaciones"]