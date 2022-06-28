create schema projetoweb;

set schema 'projetoweb';

create table login(
	id_login serial not NULL,
	usuario varchar(69),
	senha varchar(50)
);

create table aluno(
	cpf_aluno integer not NULL ,
	nome varchar(69),
	dt_nascimento date
);

create table instrutor(
	cpf_instrutor integer not NULL,
	nome varchar(69),
	dt_nascimento date,
	fk_login serial
);

create table treino(
	id_treino integer not null,
	nome varchar(24),
	num_serie integer,
	repeticoes integer,
	carga integer,
	tempo_descanso varchar(24),
	observacao_treino text,
	fk_exercicio serial,
	cpf_aluno integer,
	cpf_instrutor integer
	
);

create table exercicio(
	id_exercicio serial not NULL,
	nome varchar(36),
	dificuldade varchar(12),
	grupo_muscular varchar(24),
	descricao text
	
);

create table contato(
	id_contato serial not NULL, 
	telefone varchar(14),
	email varchar(26),
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
	peso double precision,
	altura double precision,
	sexo char,
	observacao_aluno text,
	cpf_aluno integer
);


/* Adcionando primary key */
--login
alter table login add primary key (id_login);
--aluno
ALTER TABLE aluno ADD PRIMARY KEY (cpf_aluno);
--instrutor
alter table instrutor add primary key (cpf_instrutor);
--treino
alter table treino add primary key (id_treino);
--exercicio
alter table exercicio add primary key (id_exercicio);
--contato
alter table contato add primary key (id_contato);
--historico
alter table historico add primary key (id_historico);
--dados fisicos
alter table dado_fisicos add primary key (id_dados_fisicos);


/* adcionando foreign key */


--instrutor

alter table instrutor 
add foreign key (fk_login) references login(id_login);

--contato
alter table contato 
add foreign key (cpf_aluno) references aluno(cpf_aluno);
alter table  contato
add foreign key (cpf_instrutor) references instrutor(cpf_instrutor);

--treino
alter table treino
add foreign key (fk_exercicio) references exercicio(id_exercicio);
alter table treino
add foreign key (cpf_aluno) references aluno(cpf_aluno);
alter table treino
add foreign key (cpf_instrutor) references instrutor(cpf_instrutor);

--historico
alter table historico
add foreign key (cpf_aluno) references aluno(cpf_aluno);
alter table historico
add foreign key (fk_treino) references treino(id_treino);

--dados fisicos
alter table dado_fisicos
add foreign key (cpf_aluno) references aluno(cpf_aluno);







