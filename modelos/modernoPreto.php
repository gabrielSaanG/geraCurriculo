<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/modernoPreto.css" />
    <title>Currículo</title>
    

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;600&display=swap');
    </style>
</head>
<body>
    <main>
        <div class="full-div">
            <div class="side">
                <div class="center">
                    <img src="<?= $foto ?>" alt="Foto" class="foto">
                    <div class="nome">
                    <h2>     
                        <?php   
                            echo "$nome";
                        ?>
                    </h2>
                    <p>
                        <?php
                            echo "$cargo";
                        ?>
                    </p>
                </div>
                
                </div>
                <section class="side-section">
                    <div class="first-section">
                        <div class="endereco" id="personal-info">
                            <h1>Endereço</h1>
                            <p>
                                <?php
                                    echo "$endereco";
                                ?>
                            </p>
                        </div>
                        <div class="telefone" id="personal-info">
                            <h1>Telefone</h1>
                            <p>
                                <?php
                                echo "$telefone";
                                ?>
                            </p>
                        </div>
                        <div class="email" id="personal-info">
                            <h1>Email</h1>
                            <p>
                                <?php
                                    echo "$email";
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="resumo" id="personal-info">
                            <h1>Resumo</h1>
                            <p><?php echo "$resumo" ?></p>
                        </div>
                </section>
            </div>
            <section class="lowerField">
                    <div class="formacao">
                    <?php if ($formacoes['cursos']){ ?>
                            <h2>Formação</h2>
                            <div class="line">
                            </div>
                                <ul class="lista">
                                <?php for ($i=0; $i < sizeof($formacoes['cursos']); $i++){ ?>
                                            <li>
                                                <div>
                                                    <h4>
                                                    <?= $formacoes['cursos'][$i] ?>
                                                    </h4>
                                                    <p><?= $formacoes['instituicoes'][$i]?> </p>
                                                    <p><?= $formacoes['conclusoes'][$i]?> </p>
                                                </div>
                                            </li>   
                                <?php } ?>
                                </ul>
                    <?php } ?>
                    </div>
                <div class="experiencia">
                    <?php if($experiencias['cargos']){?>
                        <h2>Experiências</h2>
                        <div class="line">
                        </div>
                        <ul class="lista-topicos">
                            <?php for($i=0; $i < sizeof($experiencias['cargos']); $i++) { ?>
                                <li>
                                    <div>
                                        <h4><?= $experiencias['cargos'][$i] ?></h4>
                                        <p><?= $experiencias['empresas'][$i] ?></p>
                                        <p><?= $experiencias['inicios'][$i] ?></p>
                                        <p><?= $experiencias['fins'][$i] ?></p>
                                    </div>
                                </li>
                            <?php } ?>
                            </ul>
                    <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
<script>
    window.print();
</script>
</html>