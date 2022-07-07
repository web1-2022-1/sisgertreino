<!--<?php
require_once '../../Controller/Treino/CrudTreino.php';
?>-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css vizualizarTreino/style_list.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>
<!--<?php
if($_POST['cpf_aluno']==NULL){
    $post_cpf_aluno = explode(':', $_POST['nome_aluno']);
    $cpf_aluno = intval(substr($post_cpf_aluno[1], 1, -2));
    $treino = new CrudTreino;
    $treino->setCpf_aluno($cpf_aluno);
}else{
    $treino = new CrudTreino;
    $treino->setCpf_aluno($_POST['cpf_aluno']);
}
?>-->

<body>

    <main id="scrollbar">

        <div class="sequencia_topo">

            <a href="">Home</a>
            <p> > </p>
            <a href="">Treino</a>
            <p> > </p>
            <a href="">Criar treino</a>
           

        </div>
        <div class="conteudo">
            <h1 class="edit-title">Lista de treinos</h1>
                <div class="button_find">
                    <button type="submit">Criar Novo Treino</button>
                </div>
            <table class="table" border="1">
                <thead>
                    <th class="table_head">Nome</th>
                    <th class="table_head">Data do Treino</th>
                    <th class="table_head">Ações</th>
                </thead>
                <tbody>
                    <p> 
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit aperiam, dolorem magni molestiae enim nisi laudantium deserunt asperiores soluta excepturi similique, nulla quaerat doloremque eius reiciendis voluptatibus animi, obcaecati corrupti.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet sequi dignissimos quo repellat exercitationem accusamus dolorum ab, ullam voluptates dicta eum neque assumenda? Inventore soluta explicabo ea asperiores voluptates totam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut magni laboriosam ipsam hic repellat aperiam delectus ipsum eveniet possimus sapiente quae, adipisci tempora voluptas provident distinctio! Iusto, consectetur consequatur!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ad corporis repellendus ducimus quas molestiae tenetur quos necessitatibus commodi reiciendis libero possimus, reprehenderit adipisci dignissimos illo non aliquid blanditiis suscipit!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis numquam ad rerum corrupti nisi tempore ratione quisquam velit laudantium sit voluptates expedita, labore quasi, dolorum accusamus necessitatibus sequi. Magni, architecto.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum sit voluptatem facilis excepturi officiis dolores. Perspiciatis amet ipsum dolores ipsam, repellat atque. Soluta qui nostrum quae culpa quod voluptate ad!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim perferendis, nihil adipisci ratione exercitationem earum aliquid minima optio ipsa commodi culpa ea delectus pariatur sequi id corrupti, ad dolores dicta?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus reiciendis veniam quas, labore harum voluptas perferendis autem consequuntur nesciunt consectetur voluptatem explicabo ad laudantium, est inventore minima, illum obcaecati dignissimos!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium molestiae alias repellat deleniti. Possimus, et. Esse, eveniet nemo porro, quis ullam magnam atque maxime iusto ratione maiores corporis, facilis ut!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, maiores, distinctio similique tempora quod repellat voluptas, eligendi dolore non eum pariatur exercitationem perspiciatis delectus eius laboriosam dolores! Placeat, necessitatibus obcaecati.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut molestiae harum animi perspiciatis tenetur quam, dolorem, quis aperiam repudiandae assumenda modi autem quidem consequuntur hic alias at? Libero, ipsum aperiam?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem culpa earum fuga veniam non eos in, sed nisi illo cumque aspernatur assumenda voluptates, sunt soluta, id magni placeat explicabo dignissimos!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit aperiam, dolorem magni molestiae enim nisi laudantium deserunt asperiores soluta excepturi similique, nulla quaerat doloremque eius reiciendis voluptatibus animi, obcaecati corrupti.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet sequi dignissimos quo repellat exercitationem accusamus dolorum ab, ullam voluptates dicta eum neque assumenda? Inventore soluta explicabo ea asperiores voluptates totam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut magni laboriosam ipsam hic repellat aperiam delectus ipsum eveniet possimus sapiente quae, adipisci tempora voluptas provident distinctio! Iusto, consectetur consequatur!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ad corporis repellendus ducimus quas molestiae tenetur quos necessitatibus commodi reiciendis libero possimus, reprehenderit adipisci dignissimos illo non aliquid blanditiis suscipit!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis numquam ad rerum corrupti nisi tempore ratione quisquam velit laudantium sit voluptates expedita, labore quasi, dolorum accusamus necessitatibus sequi. Magni, architecto.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum sit voluptatem facilis excepturi officiis dolores. Perspiciatis amet ipsum dolores ipsam, repellat atque. Soluta qui nostrum quae culpa quod voluptate ad!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim perferendis, nihil adipisci ratione exercitationem earum aliquid minima optio ipsa commodi culpa ea delectus pariatur sequi id corrupti, ad dolores dicta?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus reiciendis veniam quas, labore harum voluptas perferendis autem consequuntur nesciunt consectetur voluptatem explicabo ad laudantium, est inventore minima, illum obcaecati dignissimos!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium molestiae alias repellat deleniti. Possimus, et. Esse, eveniet nemo porro, quis ullam magnam atque maxime iusto ratione maiores corporis, facilis ut!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, maiores, distinctio similique tempora quod repellat voluptas, eligendi dolore non eum pariatur exercitationem perspiciatis delectus eius laboriosam dolores! Placeat, necessitatibus obcaecati.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut molestiae harum animi perspiciatis tenetur quam, dolorem, quis aperiam repudiandae assumenda modi autem quidem consequuntur hic alias at? Libero, ipsum aperiam?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem culpa earum fuga veniam non eos in, sed nisi illo cumque aspernatur assumenda voluptates, sunt soluta, id magni placeat explicabo dignissimos!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit aperiam, dolorem magni molestiae enim nisi laudantium deserunt asperiores soluta excepturi similique, nulla quaerat doloremque eius reiciendis voluptatibus animi, obcaecati corrupti.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet sequi dignissimos quo repellat exercitationem accusamus dolorum ab, ullam voluptates dicta eum neque assumenda? Inventore soluta explicabo ea asperiores voluptates totam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut magni laboriosam ipsam hic repellat aperiam delectus ipsum eveniet possimus sapiente quae, adipisci tempora voluptas provident distinctio! Iusto, consectetur consequatur!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ad corporis repellendus ducimus quas molestiae tenetur quos necessitatibus commodi reiciendis libero possimus, reprehenderit adipisci dignissimos illo non aliquid blanditiis suscipit!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis numquam ad rerum corrupti nisi tempore ratione quisquam velit laudantium sit voluptates expedita, labore quasi, dolorum accusamus necessitatibus sequi. Magni, architecto.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum sit voluptatem facilis excepturi officiis dolores. Perspiciatis amet ipsum dolores ipsam, repellat atque. Soluta qui nostrum quae culpa quod voluptate ad!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim perferendis, nihil adipisci ratione exercitationem earum aliquid minima optio ipsa commodi culpa ea delectus pariatur sequi id corrupti, ad dolores dicta?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus reiciendis veniam quas, labore harum voluptas perferendis autem consequuntur nesciunt consectetur voluptatem explicabo ad laudantium, est inventore minima, illum obcaecati dignissimos!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium molestiae alias repellat deleniti. Possimus, et. Esse, eveniet nemo porro, quis ullam magnam atque maxime iusto ratione maiores corporis, facilis ut!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, maiores, distinctio similique tempora quod repellat voluptas, eligendi dolore non eum pariatur exercitationem perspiciatis delectus eius laboriosam dolores! Placeat, necessitatibus obcaecati.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut molestiae harum animi perspiciatis tenetur quam, dolorem, quis aperiam repudiandae assumenda modi autem quidem consequuntur hic alias at? Libero, ipsum aperiam?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem culpa earum fuga veniam non eos in, sed nisi illo cumque aspernatur assumenda voluptates, sunt soluta, id magni placeat explicabo dignissimos!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit aperiam, dolorem magni molestiae enim nisi laudantium deserunt asperiores soluta excepturi similique, nulla quaerat doloremque eius reiciendis voluptatibus animi, obcaecati corrupti.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet sequi dignissimos quo repellat exercitationem accusamus dolorum ab, ullam voluptates dicta eum neque assumenda? Inventore soluta explicabo ea asperiores voluptates totam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut magni laboriosam ipsam hic repellat aperiam delectus ipsum eveniet possimus sapiente quae, adipisci tempora voluptas provident distinctio! Iusto, consectetur consequatur!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ad corporis repellendus ducimus quas molestiae tenetur quos necessitatibus commodi reiciendis libero possimus, reprehenderit adipisci dignissimos illo non aliquid blanditiis suscipit!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis numquam ad rerum corrupti nisi tempore ratione quisquam velit laudantium sit voluptates expedita, labore quasi, dolorum accusamus necessitatibus sequi. Magni, architecto.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum sit voluptatem facilis excepturi officiis dolores. Perspiciatis amet ipsum dolores ipsam, repellat atque. Soluta qui nostrum quae culpa quod voluptate ad!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim perferendis, nihil adipisci ratione exercitationem earum aliquid minima optio ipsa commodi culpa ea delectus pariatur sequi id corrupti, ad dolores dicta?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus reiciendis veniam quas, labore harum voluptas perferendis autem consequuntur nesciunt consectetur voluptatem explicabo ad laudantium, est inventore minima, illum obcaecati dignissimos!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium molestiae alias repellat deleniti. Possimus, et. Esse, eveniet nemo porro, quis ullam magnam atque maxime iusto ratione maiores corporis, facilis ut!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, maiores, distinctio similique tempora quod repellat voluptas, eligendi dolore non eum pariatur exercitationem perspiciatis delectus eius laboriosam dolores! Placeat, necessitatibus obcaecati.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut molestiae harum animi perspiciatis tenetur quam, dolorem, quis aperiam repudiandae assumenda modi autem quidem consequuntur hic alias at? Libero, ipsum aperiam?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem culpa earum fuga veniam non eos in, sed nisi illo cumque aspernatur assumenda voluptates, sunt soluta, id magni placeat explicabo dignissimos!
                    </p>
                    <!--<?php

                   
                    if (isset($_POST['excluir'])) {
                        $id = $_POST['id'];
                        $treino->delete($id);
                    }
                    foreach ($treino->findTreinoAluno() as $key => $value) {
                    ?>-->
                        <tr>
                            <td class="table_body"> <!--<?php echo $value->nome_treino; ?>--> </td>
                            <td class="table_body"> <!--<?php echo $value->dt_treino; ?>--> </td>
                            <td>
                                <form action="../visualizarFicha/index.php" method="post">
                                    <button type="submit" name="visualizar">
                                        <ion-icon name="eye-outline"></ion-icon>Visualizar
                                    </button>
                                    <input type="hidden" name="id_treino" value="<?php echo $value->id_treino ?>">
                                </form>
                                <button type="submit" name="alterar">
                                    <ion-icon name="create-outline"></ion-icon>Alterar
                                </button>
                                <form action="" method="post">
                                    <button type="submit" name="excluir">
                                        <ion-icon name="trash-outline"></ion-icon>Excluir
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $value->id_treino ?>">
                                    <input type="hidden" name="cpf_aluno" value="<?php echo $value->cpf_aluno ?>">

                                </form>

                            </td>
                        </tr>
                    <!--<?php } ?>-->

                </tbody>
            </table>
        </div>
    </main>

    <asideL>
        <div class="aaa">

            <div class="cont_esq">
                <img src="../../css/css vizualizarTreino/img/logo_braco.png" height="120px">
                <h3 id="text_logo">PoriGYM</h3>
            </div>

            <div class="but_esq">
                <ul>
                    <li class="list">
                        <a href="../dashboard/index.php" class="caixaLateral">
                            <span class="icon">
                                <ion-icon name="home-outline">Home</ion-icon>
                            </span>
                            <span class="title">Home</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="but_esq">
                <ul>
                    <li class="list">
                        <p class="space">
                            <span class="icon">
                                <ion-icon name="person-outline"></ion-icon>
                            </span>
                            <span class="title">Usuário</span>
                        </p>
                    </li>
                    <li class="list_inside">
                        <a href="../cadastrarUsuario/index.php" class="caixaLateral">
                            <span class="title_inside">Cadastrar usuário</span>
                        </a>
                    </li>
                    <li class="list_inside">
                        <a href="../visualizarUsuario/index.php" class="caixaLateral">
                            <span class="title_inside">Listar usuários</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="but_esq">
                <ul>
                    <li class="list">
                        <p class="space">
                            <span class="icon">
                                <ion-icon name="barbell-outline"></ion-icon>
                            </span>
                            <span class="title">Treino</span>
                        </p>
                    </li>
                    <li class="list_inside">
                        <a href="../treino/index.php" class="caixaLateral">
                            <span class="title_inside">Criar treinos</span>
                        </a>
                    </li>

                    <li class="list_inside">
                        <a href="../visualizarTreino/index.php" class="caixaLateral">
                            <span class="title_inside">Listar treinos</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="but_esq">
                <ul>
                    <li class="list">
                        <a href="../login/index.php" class="caixaLateral">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


    </asideL>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>