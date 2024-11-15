@echo off
REM Ruta al archivo .exe dentro del proyecto
set "EXE_PATH=C:\BitWave\GestorDocumental\instalador\mi_instalador.exe"

REM Verificar si el archivo .exe existe
if exist "%EXE_PATH%" (
    echo El archivo %EXE_PATH% se ha encontrado.
    echo Iniciando instalación...
    
    REM Ejecutar el instalador .exe
    "%EXE_PATH%" /quiet /norestart
    
    REM Verificar si la instalación fue exitosa
    if %errorlevel% == 0 (
        echo Instalación completada con éxito.
    ) else (
        echo Hubo un error durante la instalación.
    )
) else (
    echo El archivo %EXE_PATH% no se encuentra en la ruta especificada.
)

REM Fin del script
pause
