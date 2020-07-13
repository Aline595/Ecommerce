drop database loja;
-- script bd

-- criar base de dados
CREATE DATABASE loja;
-- selecionar bd
use loja;
-- mostar tabelas
show tables;

--  describe tb_roupa;
-- CRIAÇÃO DE TABELAS --

-- criando tabela cliente
-- describe `tb_cliente`;
-- DROP TABLE `tb_cliente`;
CREATE TABLE `loja`.`tb_cliente`(
	`pk_id_cliente` INT(6) NOT NULL AUTO_INCREMENT ,
	`nome_cliente` VARCHAR(100) NOT NULL ,
	`email` VARCHAR(100) NOT NULL ,
	`senha` VARCHAR(200) NOT NULL , 
    `cpf` VARCHAR(11) UNIQUE NOT NULL ,
	`telefone` VARCHAR(30) NOT NULL ,
	PRIMARY KEY (`pk_id_cliente`));
    
-- CRIAR TABELA PRODUTO
-- describe `tb_roupa`;
-- DROP TABLE `tb_roupa`;
CREATE TABLE `loja`.`tb_roupa`(
	`pk_id_produto` INT(6) NOT NULL AUTO_INCREMENT ,
	`nome_roupa` VARCHAR(200) NOT NULL ,
    `caracteristicas` VARCHAR(1000) NOT NULL ,
    `foto_roupa` varchar(200)	NOT NULL,
    `foto_roupa_dois` varchar(200)	NULL,
    `foto_roupa_tres` varchar(200)	NULL,
	`modo_conservacao` VARCHAR(1000) , 
    `tamanhos` CHAR(50) NOT NULL ,
	`vl_produto` VARCHAR(50) NOT NULL ,
    `genero` VARCHAR(50) NOT NULL,
    `qt_estoque` INT(5) NOT NULL,
    `disponivel` BOOLEAN NOT NULL,
    `cor` VARCHAR(50) NOT NULL,
PRIMARY KEY (`pk_id_produto`));
    
 -- tabela cesta
 -- describe `tb_cesta`;
 -- DROP TABLE `tb_cesta`;
 CREATE TABLE `loja`.`tb_cesta` (
	`pk_id_cesta` INT(6) NOT NULL AUTO_INCREMENT ,
    `dt_compra` DATETIME NOT NULL ,
    `vl_compra` FLOAT(5,2) NOT NULL ,
    `vl_desconto` FLOAT(5,2) NOT NULL ,
    `tp_pagamento` INT NOT NULL ,
    `fk_id_cliente` INT(6) NOT NULL,
    FOREIGN KEY(`fk_id_cliente`) REFERENCES `tb_cliente`(`pk_id_cliente`) on delete cascade,
    PRIMARY KEY (`pk_id_cesta`)) ENGINE = InnoDB;

-- Para criar os itens da Cesta
-- DROP TABLE `tb_itens_cesta`;
CREATE TABLE `loja`.`tb_itens_cesta` (
    `qt_produto` INT(6) NOT NULL ,
    `vl_produto` FLOAT(5,2) NOT NULL ,
    `pk_nm_ordem` INT(6) NOT NULL AUTO_INCREMENT ,
    `fk_id_cesta` INT(6) NOT NULL,
    `fk_id_produto` INT(6) NOT NULL,
    FOREIGN KEY(`fk_id_cesta`) REFERENCES `tb_cesta`(`pk_id_cesta`),
	FOREIGN KEY(`fk_id_produto`) REFERENCES `tb_roupa`(`pk_id_produto`),
    PRIMARY KEY (`pk_nm_ordem`)) ENGINE = InnoDB;
    
-- popular tabelas

-- tabela cliente
insert into tb_cliente( nome_cliente, email, senha, cpf, telefone)
    values ( 'Celso', 'celso@gmail.com', md5('1a'), '50505050505', '40028922');

insert into tb_cliente(nome_cliente, email, senha, cpf, telefone)
	values ('Jonathan Kevin', 'kevin@gmail.com', md5('123'), '60606050505', '40028933');

insert into tb_cliente(nome_cliente, email, senha, cpf, telefone) 
	values ('Alice', 'alice@gmail.com', md5('aaa'), '50503030335', '40435089');
    
-- mostrar tudo de clientes
select * from tb_cliente;
    
-- popular tabela roupas
insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Mil Jersey',
    'Vestido longo multi confeccionado em jersey.
	Possui forro longo em poliéster e elástico na cintura.
	- Sem Bojo;
	- Com elastano;',
    '../imagens_site/imagens/v1_0.jpeg',
    '../imagens_site/imagens/v1_1.jpeg',
    '../imagens_site/imagens/v1_2.jpeg',
    '- Lavagem à mão;
	- Não alvejar;
	- Não centrifugar;
	- Secagem na horizontal;
	- Não passar; 
	- Não limpar a seco; 
	- Lavagem a úmido profissional processo suave;',
	'P, M, G',
    '319,90',
    'Feminino',
    '20',
    true,
    'Tiffany');


insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Itália',
    'Vestido longo de manga confeccionado em chiffon. 
	Acinturado, possui saia fluida com fenda lateral, decote em V com detalhe em tule, drapeado no ombro e forro longo em poliéster.
	O fechamento é em zíper invisível nas costas. Acompanha cinto removível do mesmo tecido. 
    Com Bojo e Sem elastano;',
    '../imagens_site/imagens/v2_0.jpeg',
    '../imagens_site/imagens/v2_1.jpeg',
    '../imagens_site/imagens/v2_2.jpeg',
    '- Lavagem à mão;
	- Não alvejar;
	- Não centrifugar; 
	- Secagem na horizontal;
	- Não passar; Não limpar a seco; 
	- Lavagem a úmido profissional processo suave;
	Obs: Pode haver variação de tonalidade devido a incidência de luz.',
	'P, M, G, GG',
    '249,90',
    'Feminino',
    '15',
    true,
    'Serenity');

insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Mil Jersey',
    'Vestido longo multi confeccionado em jersey.
	Possui forro longo em poliéster e elástico na cintura.
	- Sem Bojo;
	- Com elastano;',
    '../imagens_site/imagens/v1_0.jpeg',
    '../imagens_site/imagens/v1_1.jpeg',
    '../imagens_site/imagens/v1_2.jpeg',
    '- Lavagem à mão;
	- Não alvejar;
	- Não centrifugar;
	- Secagem na horizontal;
	- Não passar; 
	- Não limpar a seco; 
	- Lavagem a úmido profissional processo suave;',
	'P, M, G',
    '319,90',
    'Feminino',
    '20',
    true,
    'Tiffany');

insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Maldivas',
    'Vestido longo Maldivas de crepe encorpado. 
	Decote V, decote nas costas. Saia sereia com fenda na lateral contrastante para delinear o corpo. 
	Ideal para ser usado em ocasiões diurnas e noturnas, o vestido Maldivas é delicado e sensual na medida certa.
	Use com o cabelo meio preso, maquiagem iluminada e acessória minimalista.',
	'../imagens_site/imagens/v3_0.jpeg',
    '../imagens_site/imagens/v3_1.jpeg',
    '- Lavagem à mão;
     Não alvejar;
     Não centrifugar; 
     Secagem na horizontal;
     Não passar;
     Não limpar a seco;
     Lavagem a úmido profissional processo suave;
	Obs: Pode haver variação de tonalidade devido a incidência de luz.',
	'P, M, G',
    '239,90',
    'Feminino',
    '2',
    true,
    'Branco');
    
    insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Leonor',
    'Vestido Leonor longo em tulê.
	A peça possui decote amplo em V forrado com acabamento, forro longo em malha, 
	centro das costas com zíper semi invisível e cintura franzida dando pequeno volume na saia.
	Etiqueta externa aplicada na cintura traseira.',
    '../imagens_site/imagens/v4_0.jpeg',
    '../imagens_site/imagens/v4_1.jpeg',
    '../imagens_site/imagens/v4_2.jpeg',
    'Lavagem à mão, 
	Não alvejar, 
	Não centrifugar, 
	Secagem na horizontal, 
	Não passar, 
	Não limpar a seco, 
	Lavagem a úmido profissional processo suave;
	Observação: Pode haver variação de tonalidade devido a incidência de luz.',
	'P, M, G',
    '249,90',
    'Feminino',
    '10',
    true,
    'Rosa');
    
insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Buzios',
    'Vestido longo Búzios em tule , com drapeado e fenda na lateral. 
	Decote ombro a ombro conta com estrutura na qual o vestido permanece firme no busto, 
	proporcionando segurança e conforto durante toda a festa. 
	Sugerimos acessórios minimalistas e um coque desconstruído para compor o look.',
    '../imagens_site/imagens/v5_0.jpeg',
    '../imagens_site/imagens/v5_1.jpeg',
    '../imagens_site/imagens/v5_2.jpeg',
    '- Tule;
	- Poliéster: 92%;
	- Elastano: 8%;
	- Com Bojo;
	- Comprimento (cm): PP:1,62; P:1,63; M:1,64; G:1,65.',
	'P, M, G',
    '269,90',
    'Feminino',
    '5',
    true,
    'Branca');   

insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Trindade',
	'Vestido longo Trindade Marsala, confeccionado em Cetim Premium
	com excelente caimento, modelagem sereia e alças finas que marca as curvas e ressalta o quadril.
	O vestido Longo Sereia é perfeito para ocasiões casuais ou uma grande festa. É sofisticado e nunca sai de moda.
	Vestido Longo
	Possui Bojo
	Material: Cetim Premium
	Forro: 100% Poliéster
	Não possui elastano
	Fechamento: Zíper invisível',
    '../imagens_site/imagens/v6_0.jpeg',
    '../imagens_site/imagens/v6_1.jpeg',
    '../imagens_site/imagens/v6_2.jpeg',
    'Cuidados com a peça:
	Lavagem à mão,
	Não alvejar,
	Não centrifugar,
	Secagem na horizontal,
	Não passar,
	Não limpar a seco,
	Lavagem a úmido profissional processo suave;
	Observação: Pode haver variação de tonalidade devido a incidência de luz.',
	'P, M, G, GG',
    '180,90',
    'Feminino',
    '10',
    true,
    'Marsala');   

insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Napoles',
	'Vestido feminino longo Napoles Marsala, confeccionado em Chiffon 
	com brilho que deixa o visual sofisticado e ao mesmo tempo delicado,
	possuí detalhes drapeados na lateral dando um charme extra a peça.
    Vestido Longo
	Possui bojo,
	Forro: 100% Poliéster,
	Não possui elastano
	Fechamento: Zíper invisível.',
    '../imagens_site/imagens/v7_0.jpeg',
    '../imagens_site/imagens/v7_1.jpg',
    '../imagens_site/imagens/v7_2.jpg',
    'Cuidados com a peça:
	Lavagem à mão,
	Não alvejar,
	Não centrifugar,
	Secagem na horizontal,
	Não passar,
	Não limpar a seco,
	Lavagem a úmido profissional processo suave;
	Observação: Pode haver variação de tonalidade devido a incidência de luz.',
	'P, M, G, GG',
    '188,90',
    'Feminino',
    '8',
    true,
    'Marsala');  

insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Porto Rico',
	'O Vestido Longo Porto Rico Marinho é confeccionado em lurex com brilho, 
	possui decote levemente arredondado valorizando o busto. 
	É uma peça perfeita para compor visuais de festa, aquele modelo tradicional que nunca sai de moda.
    Vestido Longo
	Possui Bojo
	Material: Lurex
	Forro: 100% Poliéster
	Fechamento: Zíper invisível',
    '../imagens_site/imagens/v8_0.jpg',
    '../imagens_site/imagens/v8_1.jpg',
    '../imagens_site/imagens/v8_2.jpg',
    'Cuidados com a peça:
	Lavagem à mão,
	Não alvejar,
	Não centrifugar,
	Secagem na horizontal,
	Não passar,
	Não limpar a seco,
	Lavagem a úmido profissional processo suave;
	Observação: Pode haver variação de tonalidade devido a incidência de luz.',
	'P, M, G, GG',
    '299,90',
    'Feminino',
    '7',
    true,
    'Marinho');  

insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Terno Social Camelo',
	'Nosso terno slim pode ser usado como:
	- Blazer para trajes Sport Fino;
	- Traje Costume para eventos mais formais;
	- Modelagem Slim Fit',
    '../imagens_site/imagens/v99_0.jpg',
    '../imagens_site/imagens/v99_3.jpg',
    '../imagens_site/imagens/v99_2.jpg',
    'A composição da poliviscose é de 2/3 ou 67% de poliéster e 1/3, ou 33% de viscose,
	sendo esses dois tecidos criados artificialmente com fios sintéticos, portanto, 
	a malha fria é feita de tecidos produzidos artificialmente. </br>
	Detalhe: lencinho no bolso. * Não acompanha o colete.',
	'P, M, G, GG',
    '699,90',
    'Masculino',
    '9',
    true,
    'Bordô'); 

insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Terno Oxford',
	'Nosso terno slim pode ser usado como:
	- Blazer para trajes Sport Fino;
	- Traje Costume para eventos mais formais;
	- Modelagem Slim Fit',
    '../imagens_site/imagens/v1010_0.jpg',
    '../imagens_site/imagens/v1010_2.jpg',
    'Nosso terno slim pode ser usado como:
	- Blazer para trajes Sport Fino;
	- Traje Costume para eventos mais formais;
	- Modelagem Slim Fit, 
	- Corte Italiano, 
	- Forro Trabalhado
    100% Poliéster, 
	Gramatura 145/158 g/m², 
	Pespontado por fora e no interior
	Dois botões reserva 
	Caseado de olho na frente do paletó já travetado
	Caseado na lapela, 
	Caseado na manga
	Dois botões no Paletó
	Quatro Botões na Manga.',
	'P, M, G, GG',
    '289,90',
    'Masculino',
    '5',
    true,
    'Vinho, Bordô'); 
    
    insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Acetinado',
	'Vestido de festa de cetim da cor azul simples',
    '../imagens_site/imagens/15.jpeg',
    'Material: cetim',
	'P, M, G, GG',
    '100,90',
    'Feminino',
    '3',
    true,
    'Azul'); 

insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Vestido Cetim Amarelo',
	'Vestido Longo de cetm amarelo
	Possui Bojo
	Fechamento: Zíper invisível',
    '../imagens_site/imagens/3.jpeg',
    'Cuidados com a peça:
	Lavagem à mão,
	Não alvejar,
	Não centrifugar,
	Secagem na horizontal,
	Não passar,
	Não limpar a seco,
	Lavagem a úmido profissional processo suave;
	Observação: Pode haver variação de tonalidade devido a incidência de luz.',
	'P, M, G, GG',
    '230,90',
    'Feminino',
    '7',
    true,
    'Amarelo');  
    
    insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Terno Super 120',
	'- Blazer para trajes Sport Fino;
	- Traje Costume para eventos mais formais;
	- Modelagem Slim Fit;
	- Corte Italiano;
    Um tecido nobre e bastante procurado, pois sua composição, feita de fibras naturais, 100% lã,
	age como um isolante térmico, dando a sensação de frescor no calor e aquecimento no inverno. 
	Muito confortável, sua qualidade está diretamente ligada à quantidade de fios: 
	quanto maior o número, mais fino o fio. É isso o que torna o tecido mais leve. * Não acompanha o colete.',
    '../imagens_site/imagens/v1111_0.jpg',
    '../imagens_site/imagens/v1111_1.jpg',
    'Lavagem à mão,
	Não alvejar,
	Não centrifugar,
	Secagem na horizontal,
	Não passar,
	Não limpar a seco,
	Lavagem a úmido profissional processo suave;',
	'P, M, G, GG',
    '1.399,00 ',
    'Masculino',
    '9',
    true,
    'Azul');  

    insert into tb_roupa(nome_roupa, caracteristicas, foto_roupa, foto_roupa_dois, foto_roupa_tres, modo_conservacao, tamanhos, vl_produto, genero, qt_estoque, disponivel, cor) 
	values ('Terno Jordhan',
	'	O terno slim tem um designer robusto e cheio de detalhes que farão você se surpreender com a qualidade e o preço justo.
	O acabamento é feito nos mínimos detalhes, como um pesponto passando por todo o paletó na parte exterior e inferior, costuramos também dois botoes reservas na parte de dentro para que se precisar, estarão sempre ali. 
	A modelagem slim se ajusta ao seu corpo, dando assim um toque de elegância ao seu dia a dia.
	Composição: 100% Poliéster, 
	Gramatura 130/145 g/m², 
	Modelagem Slim Fit 
	Pespontado por fora e no interior, 
	Dois botões reserva 
	Caseado de olho na frente do paletó já travetado
	Caseado na lapela- Caseado na manga- Corte Italiano
	Forro Trabalhado- Dois botões no Paletó',
    '../imagens_site/imagens/v1212_0.jpg',
    '../imagens_site/imagens/v1212_1.jpg',
    '../imagens_site/imagens/v1212_2.jpg',
    'Lavagem à mão,
	Não alvejar,
	Não centrifugar,
	Secagem na horizontal,
	Não passar,
	Não limpar a seco,
	Lavagem a úmido profissional processo suave;',
	'P, M, G, GG',
    '289,90',
    'Masculino',
    '3',
    true,
    'Bege');  
    
select * from tb_roupa;
select * from tb_cliente;
select * from tb_cliente where email='kevin@gmail.com';


