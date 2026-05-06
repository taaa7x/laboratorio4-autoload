Sistema de Autocarga PHP con PSR-4 y Composer
Este proyecto demuestra la implementación de un sistema de carga automática de clases utilizando el estándar PSR-4. Se documenta la transición de una carga manual mediante require hacia una arquitectura profesional gestionada por Composer y la SPL (Standard PHP Library). Estructura de Archivos y Namespaces

La arquitectura del proyecto sigue una relación estricta entre los espacios de nombres (Namespaces) y la ubicación física de los archivos en el disco:PlaintextAUTOLOAD/
├── App/
│   └── User.php           <-- Namespace: App
├── Database/
│   └── ProductModel.php   <-- Namespace: Database
├── vendor/                <-- Generado por Composer
├── composer.json          <-- Configuración de rutas PSR-4
└── index.php              <-- Punto de entrada (Orquestador)
NamespaceCarpeta FísicaClaseApp\/AppUserDatabase\/DatabaseProductModel

Tecnologías Utilizadas
PHP 8.x
Composer (Gestor de dependencias)
PSR-4 (Autoloading Standard)
SPL (Standard PHP Library)
