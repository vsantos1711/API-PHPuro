<h1 align="center">:elephant: API PHPuro</h1>

## :dart: Status do projeto

<img src="http://img.shields.io/static/v1?label=STATUS&message=CONCLUIDO&color=GREEN&style=for-the-badge"/>

## :memo: Descrição

API criada em PHP sem a utilização de nenhum framework, utilizando o Docker compose, visando a utilização dos quatro métodos: `GET, POST, PUT, DELETE` em um Banco PostgreSQL

## :wrench: Tecnologias utilizadas

- PHP;
- Docker;

## :world_map: Rotas

- `/usuarios/lista [GET]:` - Rota para listar todos os usuários.
- `/usuarios/cadastro [POST]:` - Rota para cadastrar um novo usuário.
- `/usuarios/atualizar/id(número) [PUT]:` - Rota para atualizar informações sobre um usuário. (é necessário informar o id do usuário que você deseja alterar!)
- `/usuarios/apagar/id(número) [DELETE]:` - Rota para apagar um usuário. (é necessário informar o id do usuário que você deseja apagar!)

## :clipboard: Modelos

<h3 dir="auto">POST</h3>
<table>
  <thead>
    <tr>
      <th>Dado</th>
      <th>Descrição</th>
      <th>Valor padrão</th>
      <th>Obrigatório</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nome</td>
      <td>Nome do usuário.</td>
      <td>Não possui valor padrão.</td>
      <td>SIM</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>Email do usuário, utilizado para login.</td>
      <td>Não possui valor padrão.</td>
      <td>SIM</td>
    </tr>
    <tr>
      <td>Senha</td>
      <td>Senha do úsuario, utilizada para login.</td>
      <td>Não possui valor padrão</td>
      <td>SIM</td>
    </tr>
    <tr>
      <td>Telefone</td>
      <td>Telefone do úsuario</td>
      <td>Não possui valor padrão</td>
      <td>NÃO</td>
    </tr>
  </tbody>
</table>

<h3 dir="auto">PUT</h3>
<table>
  <thead>
    <tr>
      <th>Dado</th>
      <th>Descrição</th>
      <th>Valor padrão</th>
      <th>Obrigatório</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nome</td>
      <td>Nome do usuário.</td>
      <td>Não possui valor padrão.</td>
      <td>NÃO</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>Email do usuário.</td>
      <td>Não possui valor padrão.</td>
      <td>NÃO</td>
    </tr>
    <tr>
      <td>Senha</td>
      <td>Senha do úsuario.</td>
      <td>Não possui valor padrão.</td>
      <td>NÃO</td>
    </tr>
    <tr>
      <td>Telefone</td>
      <td>Telefone do úsuario.</td>
      <td>Não possui valor padrão.</td>
      <td>NÃO</td>
    </tr>
  </tbody>
</table>

## :rocket: Rodando o Projeto
<h3 dir="auto">DOCKER</h3>

```bash
# Renomeie exemplo.db.class.php para db.class.php
# Preencha as váriaveis com as informações referentes ao seu banco POSTGRESQL
# Salve o arquivo e rode os seguintes comandos na raiz do projeto:
$ sudo service docker start 
# ou sudo systemctl docker start (dependendo da sua dist)
$docker compose up
```


## :handshake: Colaboradores

<table>
  <tr>
    <td align="center">
      <a href="http://github.com/vsantos1711">
        <img src="https://avatars.githubusercontent.com/u/104466068?v=4" width="100px;" alt="Foto de Vini Santos no GitHub"/><br>
        <sub>
          <b>vsantos1711</b>
        </sub>
      </a>
    </td>
  </tr>
</table>
