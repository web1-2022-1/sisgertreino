# Ferramentas

Para hospedar o sistema é necessário ter o servidor web apache 2.4.41, php 7.4.3 e o banco MySql versão 8.0.29, instalados na máquina, além disso é preciso ter-se uma  ferramenta de manipulaçao do banco, por exemplo o PhpMyadmin. Para o desenvolvimento foi utilizado o PhpMyadmin.

Tendo as ferramentas, será necessário rodar o script das tabelas SQL no banco, que consta no [arquivo BD](../BD/BdSisgerTreino.sql). É recomendado que faça a criação das tabelas executando uma de cada vez, para evitar erros.

Acione o apache enviando a aplicação para a pasta htdochtml (via Xampp no Windows) ou www/html (via terminal no Linux).



# Para rodar o site

- Instale o Apache;
- Instale o Php;
- Instale o MySql;
- Clone o repositório;
- Adicione o arquivo na pasta do apache (htdocs no windows, www/html no Linux);
- Extraia os arquivos do .zip;
- Entre na pasta "BD";
- Entre no arquivo "DB.php";
- Acessar o arquivo "Variáveis";
- - Modificar a linha 10 trocando ```define(host=ifbaiano1');``` para ```define(host= host de acordo com o seu banco de dados);```;
- - Modificar a linha 10 trocando ```define(,dbname= ifbaiano2);``` para ```define(dbname= nome do seu banco de dados);```;
- - Modificar a linha 10 trocando ```define("ifbaiano3");``` para ```define("usuario do seu banco de dados");```;
- - Modificar a linha 10 trocando ```define("ifbaiano4");``` para ```define("senha do seu banco de dados");```;

## Realizar login

- Usuário: admin
- Senha: 

