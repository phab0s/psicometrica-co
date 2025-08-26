@echo off
echo ========================================
echo    DESPLIEGUE AUTOMATICO A GITHUB
echo    PsicoMétrica Consultores S.A.S
echo ========================================
echo.

echo [1/6] Inicializando repositorio Git...
git init
if %errorlevel% neq 0 (
    echo ERROR: No se pudo inicializar Git
    pause
    exit /b 1
)

echo [2/6] Agregando todos los archivos...
git add .
if %errorlevel% neq 0 (
    echo ERROR: No se pudieron agregar los archivos
    pause
    exit /b 1
)

echo [3/6] Creando commit inicial...
git commit -m "Actualizacion del sitio web - %date% %time%"
if %errorlevel% neq 0 (
    echo ERROR: No se pudo crear el commit
    pause
    exit /b 1
)

echo [4/6] Configurando rama principal...
git branch -M main
if %errorlevel% neq 0 (
    echo ERROR: No se pudo configurar la rama main
    pause
    exit /b 1
)

echo [5/6] Configurando repositorio remoto...
git remote add origin https://github.com/phab0s/psicometrica-co.git
if %errorlevel% neq 0 (
    echo ADVERTENCIA: El repositorio remoto ya existe
    git remote set-url origin https://github.com/phab0s/psicometrica-co.git
)

echo [6/6] Subiendo cambios a GitHub...
git push -u origin main
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
echo    ¡DESPLIEGUE COMPLETADO EXITOSAMENTE!
echo ========================================
pause
