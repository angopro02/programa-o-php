
mysql -u root

create database projeto1;

use projeto1;

create table contato(
    idcontato int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    telefone varchar(14) not null,
    mensagem text
);
#inserir registro na tabela pra testar
insert into contato values
(null,'testnome','teste@gmail', '1111-2222','testemensagem');

select * from contato;
