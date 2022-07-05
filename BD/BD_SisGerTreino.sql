create table login(
	id_login serial not NULL,
	usuario varchar(69),
	senha varchar(50)
);

create table aluno(
	cpf_aluno integer not NULL ,
	nome varchar(150),
	dt_nascimento date
);

create table instrutor(
	cpf_instrutor integer not NULL,
	nome varchar(150),
	dt_nascimento date,
	fk_login serial
);

create table treino(
	id_treino integer not null,
	nome_treino varchar(60),
	dt_treino date,
	fk_fichaExercicio serial,
	cpf_aluno integer,
	cpf_instrutor integer
	
);

create table fichaExercicio(
	id_fichaExercicio serial not NULL,
	nome varchar(75),
	num_serie integer,
	repeticoes integer,
	carga integer,
	tempo_descanso varchar(36),
	fk_exercicio integer

);

create table exercicio(
	id_exercicio integer not NULL,
	nome varchar(75),
	descricao text
	
);

create table contato(
	id_contato serial not NULL, 
	telefone varchar(14),
	email varchar(150),
	cpf_aluno integer,
	cpf_instrutor integer
);

create table historico(
	id_historico serial not NULL,
	dt_treino date,
	fk_treino integer,
	cpf_aluno integer
	
);

create table dado_fisicos(
	id_dados_fisicos serial not null,
	peso double,
	altura double,
	sexo char,
	observacao_aluno text,
	cpf_aluno integer
);


/* Adcionando primary key */
alter table login add primary key (id_login);

ALTER TABLE aluno ADD PRIMARY KEY (cpf_aluno);

alter table instrutor add primary key (cpf_instrutor);

alter table treino add primary key (id_treino);

alter table exercicio add primary key (id_exercicio);

alter table contato add primary key (id_contato);

alter table historico add primary key (id_historico);

alter table dado_fisicos add primary key (id_dados_fisicos);

alter table fichaExercicio add primary key (id_fichaExercicio);


/* adcionando foreign key */

alter table instrutor 
add foreign key (fk_login) references login(id_login);
alter table contato 
add foreign key (cpf_aluno) references aluno(cpf_aluno);
alter table  contato
add foreign key (cpf_instrutor) references instrutor(cpf_instrutor);

alter table treino
add foreign key (cpf_aluno) references aluno(cpf_aluno);
alter table treino
add foreign key (cpf_instrutor) references instrutor(cpf_instrutor);
alter table treino
add foreign key (fk_fichaExercicio) references fichaExercicio(id_fichaExercicio);

alter table fichaExercicio
add foreign key (fk_exercicio) references exercicio(id_exercicio);

alter table historico
add foreign key (cpf_aluno) references aluno(cpf_aluno);
alter table historico
add foreign key (fk_treino) references treino(id_treino);

alter table dado_fisicos
add foreign key (cpf_aluno) references aluno(cpf_aluno);
