@echo off
REM Verificar si Git está instalado
git --version >nul 2>&1
if %errorlevel% neq 0 (
    echo Git no está instalado. Procediendo con la instalación...

    REM URL del instalador de Git para Windows
    set GIT_URL=https://github.com/git-for-windows/git/releases/download/v2.42.0.windows.1/Git-2.42.0-64-bit.exe
    set TEMP_DIR=%temp%\GitInstaller.exe

    REM Descargar el instalador
    echo Descargando el instalador de Git...
    bitsadmin /transfer "GitDownload" /download /priority high %GIT_URL% %TEMP_DIR%
    if %errorlevel% neq 0 (
        echo Error al descargar Git. Verifica la conexión a Internet.
        exit /b
    )

    REM Ejecutar el instalador de Git de forma silenciosa
    echo Instalando Git...
    start /wait "" "%TEMP_DIR%" /VERYSILENT /NORESTART

    REM Eliminar el instalador descargado
    del "%TEMP_DIR%"

    REM Verificar la instalación de Git
    git --version >nul 2>&1
    if %errorlevel% neq 0 (
        echo Error en la instalación de Git.
        exit /b
    ) else (
        echo Git se ha instalado correctamente.
    )
) else (
    echo Git ya está instalado en este sistema.
)
pause
