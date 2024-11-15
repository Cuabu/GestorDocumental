## Diagrama de Flujo

```mermaid
graph TD
    A[Instalador De Docs] --> A1[Instalación Online]
    A --> A2[Instalación Offline]

    A1 --> B[Requerimientos]
    B -->|Sí| D["Quiere Instalar Gestión Docs"]
    D --> I[Completado]
    I --> J[Fin de Instalación]
    
    B -->|No| E["Actualizar Aplicación"]
    E --> F[Conexión a Internet]
    F --> G[Actualizar]
    G --> K[Actualización Completa]
    K --> J
    
    B -->|Salir| H["Cancelar Instalaciones"]
    H --> L["Instalación Cancelada"]
    L --> J

    A2 --> M["Requerimientos"]