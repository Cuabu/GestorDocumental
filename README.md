# Diagrama de Flujo

```mermaid
graficar TD
    A[Instalador De Docs] B(Requeriments)
    B --> C{Requisitos Completados} 
    C -->|Yes| D["Quiere Instalar Gestion Docs"]
    C -->|No| E["Actualizar Aplicacion"]
    C -->|Salir| F["Cancelar Instalaciones"]