--Criando o banco de dados
CREATE DATABASE marquinhosveiculos;

--Criando tabela usuários
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(60),
    email VARCHAR(100),
    senha VARCHAR(32),
    chave VARCHAR(20),
    admin INT,
    ativo INT
);

--Removendo tabela veículos.
DROP TABLE veiculo;

--Criando tabela cor
CREATE TABLE tipo_produto (
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	nome_tipo VARCHAR(30)
);

--Criando tabela veículo
CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    nome VARCHAR(30),
    perecivel INT, --Nao sei se esta correto
    valor DECIMAL(10, 2) ,
    tipo_produto INT
);

--Criando relacionamento
ALTER TABLE produto
	ADD CONSTRAINT fk_produto_tipo
	FOREIGN KEY (tipo_produto)
	REFERENCES tipo_produto(nome_tipo);

--Adicionando cores
INSERT INTO cor
( cor )
VALUES
( 'Amarelo' ),
( 'Vermelho' ),
( 'Azul' ),
( 'Prata' ),
( 'Preto' ),
( 'Verde' );

--Senha 123
15fe23bb629ca88e5b53c5213a5b3cfb
fulana@gmai.com

SELECT P.*, T.nome_tipo AS tipo_prod
 FROM PRODUTO AS P
 INNER JOIN TIPO_PRODUTO AS T
ON T.id = P.tipo;