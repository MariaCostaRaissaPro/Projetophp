create database sistema;
use sistema;
create table produto(id int key, nome varchar(50), preco float, descricao varchar(50), nome_arq varchar(100), ext_arq varchar(5)); 

insert into produto values (1,"batata", 17.10, "Tubérculo delicia", "batata_frita", "jpg");