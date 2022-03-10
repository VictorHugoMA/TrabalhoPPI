CREATE TABLE agenda_Trab
(
   codigo int PRIMARY KEY auto_increment,
   dataAgenda date,
   horario date,
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