<?php
// CV en PHP - plantilla simple
// Puedes editar los datos para personalizar tu currículum

$cv = [
    "nombre" => "Carles Salvany",
    "titulo" => "Desarrollador Web",
    "email" => "neilblackbird@gmail.com",
    "telefono" => "+34 640796547",
    "ubicacion" => "Barcelona, España",
    "perfil" => "Desarrollador con experiencia en PHP, JavaScript y desarrollo web. Enfocado en crear aplicaciones eficientes y escalables.",

    "experiencia" => [
        [
            "puesto" => "Desarrollador PHP",
            "empresa" => "Empresa Ejemplo S.L.",
            "periodo" => "2023 - Actualidad",
            "descripcion" => "Desarrollo y mantenimiento de aplicaciones web con PHP y MySQL."
        ],
        [
            "puesto" => "Desarrollador Junior",
            "empresa" => "Startup Ejemplo",
            "periodo" => "2021 - 2023",
            "descripcion" => "Creación de sitios web y APIs REST."
        ]
    ],

    "educacion" => [
        [
            "titulo" => "Grado en Ingeniería Informática",
            "centro" => "Universidad Ejemplo",
            "periodo" => "2017 - 2021"
        ]
    ],

    "habilidades" => ["PHP", "MySQL", "HTML", "CSS", "JavaScript", "Laravel"]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CV - <?php echo $cv["nombre"]; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f4f4f4;
        }
        .container {
            background: white;
            padding: 30px;
            max-width: 800px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .item {
            margin-bottom: 10px;
        }
        .skills span {
            display: inline-block;
            background: #007BFF;
            color: white;
            padding: 5px 10px;
            margin: 3px;
            border-radius: 5px;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1><?php echo $cv["nombre"]; ?></h1>
    <h3><?php echo $cv["titulo"]; ?></h3>
    <img
src="https://ik.imagekit.io/TUUSUARIO/foto.jpg?tr=w-300,h-300,c-maintain_ratio,f-webp,q-80"
alt="perfil"
/>
    <div class="section">
        <p><strong>Email:</strong> <?php echo $cv["email"]; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $cv["telefono"]; ?></p>
        <p><strong>Ubicación:</strong> <?php echo $cv["ubicacion"]; ?></p>
    </div>

    <div class="section">
        <h2>Perfil</h2>
        <p><?php echo $cv["perfil"]; ?></p>
    </div>

    <div class="section">
        <h2>Experiencia</h2>
        <?php foreach ($cv["experiencia"] as $exp): ?>
            <div class="item">
                <strong><?php echo $exp["puesto"]; ?></strong> - <?php echo $exp["empresa"]; ?><br>
                <em><?php echo $exp["periodo"]; ?></em>
                <p><?php echo $exp["descripcion"]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="section">
        <h2>Educación</h2>
        <?php foreach ($cv["educacion"] as $edu): ?>
            <div class="item">
                <strong><?php echo $edu["titulo"]; ?></strong><br>
                <?php echo $edu["centro"]; ?> - <em><?php echo $edu["periodo"]; ?></em>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="section skills">
        <h2>Habilidades</h2>
        <?php foreach ($cv["habilidades"] as $skill): ?>
            <span><?php echo $skill; ?></span>
        <?php endforeach; ?>
    </div>

</div>

</body>
</html>
