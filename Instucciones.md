1. Estandarización de Metadatos
Normas aplicables: La NTC 4095 y la NTC-ISO 15489 (Gestión Documental).
Pautas: Define tablas para los metadatos que reflejen la información clave de cada documento: título, fecha de creación, tipo de documento, autor, entre otros. Estos campos son esenciales para asegurar la organización y recuperación de documentos.
2. Clasificación Documental
Normas aplicables: NTC 5014 (Clasificación archivística).
Pautas: Crea una tabla para categorías o clases documentales que permita asociar cada documento a una serie, subserie, y clase, según la tabla de retención documental (TRD). Esto facilita la búsqueda y gestión de documentos por su clasificación.
3. Ciclo de Vida del Documento
Normas aplicables: NTC-ISO 30300 (Sistemas de gestión de documentos).
Pautas: Añade campos de control para gestionar el ciclo de vida de cada documento, tales como estado (activo, inactivo), fechas de revisión, y fechas de eliminación (si aplica).
4. Identificación y Control de Acceso
Normas aplicables: NTC-ISO 27001 (Seguridad de la información).
Pautas: Define tablas para roles y permisos que regulen quién puede acceder o modificar cada documento. Esto es crucial para la confidencialidad y seguridad de la información.
5. Integridad y Autenticidad Documental
Normas aplicables: Decreto 1080 de 2015 (Gestión Electrónica de Documentos).
Pautas: Crea campos para almacenar datos de auditoría, como quién realizó cambios y cuándo. También puedes incluir firmas digitales o hashes de integridad para documentos críticos.
6. Plan de Conservación Documental
Normas aplicables: NTC 5681 (Conservación documental).
Pautas: Incluye una tabla que defina los plazos de conservación y las condiciones de almacenamiento para cada tipo de documento, de acuerdo con el plan de conservación.
7. Formatos y Tipos de Documentos
Normas aplicables: Decreto 1080 de 2015.
Pautas: Define una tabla de tipos de documento para clasificar si es físico o digital, su formato (PDF, DOCX, etc.), y el medio de conservación (físico, digital en servidor, en la nube, etc.).
Ejemplo de Tablas para la Base de Datos
Documentos: Contiene información sobre cada documento específico.

IDDocumento, Titulo, FechaCreacion, TipoDocumento, ClasificacionID, EstadoID, UsuarioCreadorID, HashIntegridad, etc.
Clasificacion: Define la categoría documental.

IDClasificacion, Serie, Subserie, Clase, TRD.
Permisos: Tabla para asignar roles de acceso.

IDPermiso, UsuarioID, DocumentoID, NivelAcceso.
Auditoria: Control de cambios en los documentos.

IDAuditoria, DocumentoID, UsuarioModificadorID, FechaModificacion, Accion.