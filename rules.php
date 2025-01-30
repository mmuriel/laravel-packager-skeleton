<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    'config/mypackage.php' => 'config/:lc:package.php',
    'src/MyPackage.php' => 'src/:uc:package.php',
    'src/Contracts/MyPackage.php' => 'src/Contracts/:uc:package.php',
    'src/Database/Migrations/2025_01_28_023430_create_MyPackage_table.php' => 'src/Database/Migrations/2025_01_28_023430_create_:lc:package_table.php',
    'src/Facades/MyPackage.php' => 'src/Facades/:uc:package.php',
    'src/Http/routes.php' => 'src/Http/routes.php',
    'src/Http/Controllers/MyPackageController.php' => 'src/Http/Controllers/:uc:packageController.php',
    'src/Http/Controllers/Controller.php' => 'src/Http/Controllers/Controller.php',
    'src/Models/MyPackage.php' => 'src/Models/:uc:package.php',
    'src/Providers/MyPackageServiceProvider.php' => 'src/Providers/:uc:packageServiceProvider.php',
    'src/Repositories/MyPackageRepository.php' => 'src/Repositories/:uc:packageRepository.php',
];