<?php
echo "<h1>🧪 Test PHP Simple - PsicoMétrica</h1>";
echo "<p><strong>✅ PHP está funcionando!</strong></p>";
echo "<p><strong>Fecha:</strong> " . date('Y-m-d H:i:s') . "</p>";
echo "<p><strong>Versión PHP:</strong> " . phpversion() . "</p>";
echo "<p><strong>Servidor:</strong> " . ($_SERVER['SERVER_SOFTWARE'] ?? 'N/A') . "</p>";
echo "<p><strong>Directorio:</strong> " . getcwd() . "</p>";
echo "<hr>";
echo "<p><a href='/'>← Volver al inicio</a></p>";
?>
