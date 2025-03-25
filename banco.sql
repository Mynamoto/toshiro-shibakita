-- Tabela 'dados': Armazena informações de alunos e hosts de conexão
-- Utilizada pelo aplicativo PHP para registro de acessos
CREATE TABLE dados (
    AlunoID int,               -- ID numérico do aluno (gerado aleatoriamente)
    Nome varchar(50),          -- Primeiro nome (preenchido com string aleatória)
    Sobrenome varchar(50),     -- Sobrenome (mesmo valor aleatório do nome)
    Endereco varchar(150),     -- Endereço (string aleatória)
    Cidade varchar(50),        -- Cidade (string aleatória)
    Host varchar(50)           -- Nome do host onde o registro foi criado
);
