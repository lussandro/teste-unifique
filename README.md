# Projeto PHP 5.6 e MysQl Unifique


## Objetivo

Este projeto tem como objetivo demonstrar a habiliade para criação de um container **PHP 5.6** conectando com **Mysql/MARIADb**.

## Descrição do Projeto

Foi criando um container do PHP e do MySQL. Uma pagina simples foi adicionada apneas para exemplicar a conexão com o banco retornando se a mesma está ok ou não. 
Editando o arquivo docker-compose.yml, você pode observar os detalhes da criação dos 2 containeres e os dados de conexão do mesmo, que são utilizados no arquivo de teste de conexão em html/index.php.
O arquivo index.php fica na pasta html, que é um volume persistente criado no arquivo Dockerfile que acompanha o projeto.
Eu hospedei uma imagem pronta do container em lussandro/php-teste no dockerhub. É um repositório público e caso queira buildar a sua imagem você pode alterar a referência a ela dentro do docker-compose.yml
Ainda adicionei ao projeto o arquivo Jenkins-pipeline.groovy que é uma pipeline simples para ser usada no jenkins e automatizar o deploy.

## Requisitos Necessários

Para o bom funcionamento do Projeto, é necessário a utilização do docker em sua ultima versão, disponível em: **[Site Oficial Docker](https://www.docker.com/)**.

Será necessário ainda instalarmos o **docker-compose** que você pode encontar em: **[Docker-Compose](https://docs.docker.com/compose/install/)**.

### Rodando o Projeto

Para clonar o projeto, executar os comando abaixo:

```shell
git clone clone https://github.com/lussandro/teste-unifique.git

```

Após Clonar o o repositŕoio você deve entrar na pasta do projeto e rodar o docker-compose para subir os containeres com os seguintes comandos:

```shell
cd teste-unifique
docker-compose up -d

```
Aguarde alguns minutos para que o docker possa clonar o repositório e os contâineres ficarem up. Para ver se esta tudo ok, use commando:

```shell
docker container ls

```
Você deve obter uma saida parecida com essa:

```shell
$ docker container ls
CONTAINER ID   IMAGE                 COMMAND                  CREATED          STATUS         PORTS                                                  NAMES
550eef1aaaff   lussandro/php-teste   "docker-php-entrypoi…"   5 seconds ago    Up 4 seconds   0.0.0.0:80->80/tcp, :::80->80/tcp                      php-teste
e665cb233489   mysql:5.7             "docker-entrypoint.s…"   59 minutes ago   Up 5 seconds   33060/tcp, 0.0.0.0:3307->3306/tcp, :::3307->3306/tcp   mysql-server


```
Pronto! Agora você pode abrir o navegador de sua preferência e digitar o endereço:  http://127.0.0.1/ se tudo está ok você vai receber algo parecido com isso:

**Versão Atual do PHP: 5.6.40**

**Conectado com Sucesso!**

## Conclusão

Nesse projeto como você pode ver não abordamos as configurações de segurança do PHP nem do Apache, tendo em vista que é apenas uma demonstração de conexão para o mesmo, caso precise personalizar algo, por favor siga as instruções em:
 **[Configurando o PHP.INI](https://www.php.net/manual/pt_BR/configuration.file.php)**
