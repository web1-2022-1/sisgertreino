# Ferramentas

Para hospedar o sistema é necessário ter o servidor web apache 2.4.41, php 7.4.3 e o banco MySql versão 8.0.29, instalados na máquina, além disso é preciso ter-se uma  ferramenta de manipulaçao do banco, por exemplo o PhpMyadmin. Para o desenvolvimento foi utilizado o PhpMyadmin.

Tendo as ferramentas, será necessário rodar o script das tabelas SQL no banco, que consta no [arquivo BD](../BD/BdSisgerTreino.sql). É recomendado que faça a criação das tabelas executando uma de cada vez, para evitar erros.

Acione o apache enviando a aplicação para a pasta htdochtml (via Xampp no Windows) ou www/html (via terminal no Linux).



# Para rodar o sistema

- Instale o Apache;
- Instale o Php;
- Instale o MySql;
- Clone o repositório: https://github.com/web1-2022-1/sisgertreino.git ;
- Adicione o arquivo na pasta do apache (htdocs no windows, www/html no Linux);
- Extraia os arquivos do .zip;
- Entre na pasta "BD";
- Entre no arquivo "DB.php";
- Ao acessar o "BD.php", é necessário realizar a configuração de acordo com o seu banco de dados: <br>
Modificar a linha 10 trocando ```("host=ifbaiano1");``` para ```(host= host de acordo com o seu banco de dados)```;<br>
Modificar a linha 10 trocando ```("dbname= ifbaiano2");``` para ```(dbname= nome do seu banco de dados)```;<br>
Modificar a linha 10 trocando ```("ifbaiano3");``` para ```(usuario do seu banco de dados)```;<br>
Modificar a linha 10 trocando ```("ifbaiano4");``` para ```(senha do seu banco de dados)```;<br>

## Realizar login

Já existe um login pré estabelecido no BdSisgerTreino.sql:

- Usuário: admin
- Senha: 

