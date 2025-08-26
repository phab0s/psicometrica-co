@echo off
echo ========================================
echo    ACTUALIZACION AUTOMATICA A GITHUB
echo    PsicoMétrica Consultores S.A.S
echo ========================================
echo.

echo [1/4] Verificando estado del repositorio...
git status
if %errorlevel% neq 0 (
    echo ERROR: No se pudo verificar el estado del repositorio
    echo Asegurate de estar en el directorio correcto
    pause
    exit /b 1
)

echo [2/4] Agregando cambios...
git add .
if %errorlevel% neq 0 (
    echo ERROR: No se pudieron agregar los cambios
    pause
    exit /b 1
)

echo [3/4] Creando commit de actualizacion...
git commit -m "Actualizacion del sitio web - %date% %time%"
if %errorlevel% neq 0 (
    echo ADVERTENCIA: No hay cambios para commitear
    echo El repositorio ya esta actualizado
    pause
    exit /b 0
)

echo [4/4] Subiendo cambios a GitHub...
git push origin main
if %errorlevel% neq 0 (
    echo ERROR: No se pudieron subir los cambios
    echo.
    echo Posibles soluciones:
    echo 1. Verifica tu conexion a internet
    echo 2. Verifica tus credenciales de GitHub
    echo 3. Asegurate de tener permisos en el repositorio
    pause
    exit /b 1
)

echo.
echo ========================================
echo    ¡ACTUALIZACION COMPLETADA!
echo ========================================
echo.
echo Los cambios han sido subidos a GitHub.
echo El sitio se actualizara automaticamente en Netlify.
echo.
pause
