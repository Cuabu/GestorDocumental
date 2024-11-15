@echo off
setlocal EnableDelayedExpansion

REM ----- Definir la lista de scripts -----
set "SCRIPTS_LIST=github.bat update.bat python.bat "  REM Puedes agregar los scripts aquí

REM ----- Ejecutar cada script en la lista -----
for %%F in (%SCRIPTS_LIST%) do (
    echo Ejecutando %%F...
    
    REM Verifica si el script existe
    if exist "%%F" (
        call "%%F"
        REM Verifica si el script se ejecutó correctamente
        if errorlevel 1 (
            echo Error al ejecutar %%F. Abortando ejecución.
            exit /b
        )
        echo %%F ejecutado correctamente.
    ) else (
        echo El archivo %%F no existe. Saltando.
    )
)

echo Todos los scripts han sido ejecutados correctamente.
pause
exit
