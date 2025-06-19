<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <?php            
            $nomeCompleto = "Mario Vergara"; 
            $idade = 33; 
            $fotoPerfil = "imagens/sua_foto.jpg"; 
        ?>    
        <div class="perfil">
            <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
            <h1><?php echo $nomeCompleto; ?></h1>
            <p>Idade: <?php echo $idade; ?> anos</p>
        </div>
    </header>

    <section id="experiencia">
        <h2>Experiência Profissional</h2>
        <?php            
            $experiencias = [
                [
                    "empresa" => "FERRARI",
                    "cargo" => "Gestor de Tecnologia",
                    "periodo" => "2012 - 2017",
                    "descricao" => "Criou o primeiro painel inteligente do mercado."
                ],
                [
                    "empresa" => "SPACE-X",
                    "cargo" => "Engenheiro de Comunicações Aeroespaciais",
                    "periodo" => "2018 - 2023",
                    "descricao" => "Resposnsávelo pelo projeto Starlink."
                ],
                [
                    "empresa" => "Prefeitura Municipal de Jaguariuna",
                    "cargo" => "Secretário de Infraestutura",
                    "periodo" => "2024 - atualmente",
                    "descricao" => "Só um carguinho público enquanto tiro umas férias."
                ]
            ];
        ?>
        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia['cargo']; ?></h3>
                        <h4><?php echo $experiencia['empresa']; ?></h4>
                        <p class="periodo"><?php echo $experiencia['periodo']; ?></p>
                        <p><?php echo $experiencia['descricao']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Sem experiência profissional para mostrar.</p>
        <?php endif; ?>
    </section>

    <section id="cursos">
        <h2>Cursos e Formações</h2>
        <?php            
            $cursos = [
                [
                    "nome" => "Bacharel em Ciência da Computação",
                    "instituicao" => "Harvard",
                    "periodo" => "2007 - 2012"
                ],
                [
                    "nome" => "Mestrado em Engenharia Espacial",
                    "instituicao" => "MIT",
                    "periodo" => "2013 - 2015"
                ],
                [
                    "nome" => "Doutorado em Robótica",
                    "instituicao" => "Arizona State University",
                    "periodo" => "2018 - 2022"
                ], 
                [
                    "nome" => "Cursinho de Gestão Pública",
                    "instituicao" => "SENAC",
                    "periodo" => "2023"
                ]
            ];
        ?>
        <?php if (!empty($cursos)): ?>
            <ul>
                <?php foreach ($cursos as $curso): ?>
                    <li>
                        <h3><?php echo $curso['nome']; ?></h3>
                        <h4><?php echo $curso['instituicao']; ?></h4>
                        <p class="periodo"><?php echo $curso['periodo']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum curso ou formação para mostrar.</p>
        <?php endif; ?>
    </section>

    <section id="habilidades">
        <h2>Habilidades e Hobbies</h2>
        <?php            
            $habilidades = [
                "PHP" => 8,
                "HTML" => 9,
                "CSS" => 7,
                "JavaScript" => 6,
                "Banco de Dados" => 7
            ];

            $hobbies = [
                "Leitura" => 9,
                "Games" => 8,
                "Caminhada" => 7
            ];
        ?>

        <h3>Habilidades</h3>
        <?php if (!empty($habilidades)): ?>
            <ul>
                <?php foreach ($habilidades as $habilidade => $nivel): ?>
                    <li>
                        <?php echo $habilidade; ?> <span>(<?php echo $nivel; ?>/10)</span>
                        <div class="barra-fundo">
                            <div class="barra-preenchimento" style="width: <?php echo $nivel * 10; ?>%;"></div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h3>Hobbies</h3>
        <?php if (!empty($hobbies)): ?>
            <ul>
                <?php foreach ($hobbies as $hobby => $interesse): ?>
                    <li>
                        <?php echo $hobby; ?> <span>(<?php echo $interesse; ?>/10)</span>
                        <div class="barra-fundo">
                            <div class="barra-preenchimento hobby" style="width: <?php echo $interesse * 10; ?>%;"></div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>

    <footer>
        <p>© <?php echo date("Y"); ?> <?php echo $nomeCompleto; ?></p>
    </footer>

</body>
</html>
