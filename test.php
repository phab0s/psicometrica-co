<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP - PsicoMétrica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .success {
            color: #28a745;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .info {
            color: #17a2b8;
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .error {
            color: #dc3545;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .php-info {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            margin: 20px 0;
            font-family: monospace;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🧪 Test de PHP en Render</h1>
        
        <div class="success">
            <strong>✅ PHP está funcionando correctamente!</strong><br>
            Si puedes ver esta página, significa que PHP se está ejecutando en tu servidor de Render.
        </div>

        <div class="info">
            <strong>📊 Información del servidor:</strong>
            <ul>
                <li><strong>Fecha y hora:</strong> <?php echo date('Y-m-d H:i:s'); ?></li>
                <li><strong>Zona horaria:</strong> <?php echo date_default_timezone_get(); ?></li>
                <li><strong>Versión de PHP:</strong> <?php echo phpversion(); ?></li>
                <li><strong>Servidor web:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?></li>
                <li><strong>IP del servidor:</strong> <?php echo $_SERVER['SERVER_ADDR'] ?? 'N/A'; ?></li>
            </ul>
        </div>

        <div class="info">
            <strong>🔧 Módulos PHP disponibles:</strong>
            <div class="php-info">
                <?php
                $modules = get_loaded_extensions();
                $important_modules = ['curl', 'json', 'mbstring', 'openssl', 'pdo', 'xml'];
                
                foreach ($important_modules as $module) {
                    if (extension_loaded($module)) {
                        echo "✅ $module: " . phpversion($module) . "\n";
                    } else {
                        echo "❌ $module: No disponible\n";
                    }
                }
                ?>
            </div>
        </div>

        <div class="info">
            <strong>📁 Información del directorio:</strong>
            <div class="php-info">
                <strong>Directorio actual:</strong> <?php echo getcwd(); ?><br>
                <strong>Archivos en el directorio:</strong><br>
                <?php
                $files = scandir('.');
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        $type = is_dir($file) ? '📁' : '📄';
                        echo "$type $file<br>";
                    }
                }
                ?>
            </div>
        </div>

        <div class="info">
            <strong>🌐 Variables de entorno:</strong>
            <div class="php-info">
                <?php
                $env_vars = ['RENDER', 'RENDER_EXTERNAL_HOSTNAME', 'PORT', 'NODE_ENV'];
                foreach ($env_vars as $var) {
                    $value = getenv($var);
                    if ($value !== false) {
                        echo "✅ $var: $value\n";
                    } else {
                        echo "❌ $var: No definida\n";
                    }
                }
                ?>
            </div>
        </div>

        <div class="success">
            <strong>🎉 ¡Test completado exitosamente!</strong><br>
            Tu servidor PHP en Render está funcionando perfectamente.
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <a href="/" style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">← Volver al inicio</a>
        </div>
    </div>
</body>
</html>
