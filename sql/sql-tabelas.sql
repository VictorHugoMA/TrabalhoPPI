CREATE TABLE agenda_Trab
(
   codigo int PRIMARY KEY auto_increment,
   dataAgenda date,
   horario datetime,
   nome varchar(50),
   sexo varchar(50),
   email varchar(50),
   codigo_medico int,
   FOREIGN KEY (codigo_medico) REFERENCES medico_Trab(codigo) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE pessoa_Trab
(
   codigo int PRIMARY KEY auto_increment,
   nome varchar(50),
   sexo varchar(50),
   email varchar(50) UNIQUE,
   telefone varchar(50),
   cep char(10),
   logradouro varchar(100),
   cidade varchar(50),
   estado varchar(10)
) ENGINE=InnoDB;

CREATE TABLE paciente_Trab
(
   codigo int PRIMARY KEY,
   peso float,
   altura int,
   tipoSanguineo varchar(10),
   FOREIGN KEY (codigo) REFERENCES pessoa_Trab(codigo) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE funcionario_Trab
(
   codigo int PRIMARY KEY,
   dataContrato date,
   salario float,
   senhaHash varchar(255),
   FOREIGN KEY (codigo) REFERENCES pessoa_Trab(codigo) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE medico_Trab
(
   codigo int PRIMARY KEY,
   especialidade char(50),
   crm varchar(50),
   FOREIGN KEY (codigo) REFERENCES funcionario_Trab(codigo) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE enderecoAjax_Trab
(
   codigo int PRIMARY KEY auto_increment,
   cep char(10),
   logradouro varchar(100),
   cidade varchar(50),
   estado varchar(10)
) ENGINE=InnoDB;


INSERT INTO pessoa_Trab(nome, email, cep, logradouro, cidade, estado) VALUES ('admin', 'adm@adm.com','38400-100', 'Av Floriano Peixoto', 'Uberlândia', 'MG');
INSERT INTO pessoa_Trab(nome, email, cep, logradouro, cidade, estado) VALUES ('Victor', 'teste@teste.com','38408-100', 'Av João Naves', 'Uberlândia', 'MG');
INSERT INTO pessoa_Trab(nome, email, cep, logradouro, cidade, estado) VALUES ('João', 'joao@teste.com','38400-698', 'Av Cesário Alvim', 'Uberlândia', 'MG');

INSERT INTO funcionario_Trab(codigo, senhaHash) VALUES (1, '$2y$10$4uV5xfcs180U96o5E8yZXeDn91vtNdoJY7/jJ/kqXcfkMo6s3F8ui');
INSERT INTO funcionario_Trab(codigo, senhaHash) VALUES (3, '$2y$10$4uV5xfcs180U96o5E8yZXeDn91vtNdoJY7/jJ/kqXcfkMo6s3F8ui');

INSERT INTO medico_Trab(codigo, especialidade, crm) VALUES (3, 'cardiologia', '156734');

INSERT INTO paciente_Trab(codigo, peso, altura, tipoSanguineo) VALUES (2, 70, 184, 'A');

INSERT INTO agenda_Trab(dataAgenda, nome, email, codigo_medico) VALUES ('2022-03-10', 'Carlos', 'carlos@mail.com', 3);
