@echo off
REM URL del repositorio de GitHub
set REPO_URL=https://github.com/Cuabu/GestorDocumental.git

REM Carpeta destino en C:
set DEST_DIR=C:\BitWave

REM Ruta del script a ejecutar
set SCRIPT_PATH=%DEST_DIR%\GestorDocumental\GestionDocumental\requeriments\start.sh

REM Verificar si Git está instalado
git --version >nul 2>&1
if %errorlevel% neq 0 (
    echo Git no está instalado. Por favor, instala Git y vuelve a intentar.
    exit /b
)

REM Crear la carpeta de destino si no existe
if not exist "%DEST_DIR%" (
    mkdir "%DEST_DIR%"
    echo Carpeta %DEST_DIR% creada.
)

REM Clonar el repositorio en la carpeta de destino
echo Clonando el repositorio de GitHub en %DEST_DIR%...
git clone %REPO_URL% "%DEST_DIR%\GestorDocumental"
if %errorlevel% neq 0 (
    echo Error al clonar el repositorio. Verifica la URL y tu conexión a Internet.
    exit /b
)

REM Verificar si el script start.sh existe
if exist "%SCRIPT_PATH%" (
    echo Ejecutando el script en %SCRIPT_PATH%...
    bash "%SCRIPT_PATH%"
    if %errorlevel% neq 0 (
        echo Error al ejecutar el script en %SCRIPT_PATH%.
        exit /b
    )
) else (
    echo El script %SCRIPT_PATH% no se encontró.
    exit /b
)

echo Proceso completado exitosamente.
pause
