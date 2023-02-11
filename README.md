<h1 align="center">:elephant: API PHPuro</h1>

## :dart: Status do projeto

<img src="http://img.shields.io/static/v1?label=STATUS&message=EM%20ANDAMENTO&color=GREEN&style=for-the-badge"/>

## :memo: Descrição

API criada em PHP sem a utilização de nenhum framework, hospedada em uma maquina virtual da AWS utilizando o Docker compose, para cadastro e consultas em um Banco PostgreSQL

## :wrench: Tecnologias utilizadas

- PHP;
- Docker;

## :world_map: Rotas

- `/usuarios/lista [GET]:` - Rota para listar todos os usuários.
- `/usuarios/cadastro [POST]:` - Rota para cadastrar um novo usuário.

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
      <td>Id</td>
      <td>ID do usuário. Pode ser incremental ou UUID.</td>
      <td>Automático (UUID ou AUTOINCREMENT)</td>
      <td>SIM</td>
    </tr>
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
      <td>Telefone</td>
      <td>Telefone do úsuario</td>
      <td>Não possui valor padrão</td>
      <td>NÃO</td>
    </tr>
  </tbody>
</table>

## :soon: Implementação futura

1. Rotas de PUT dos dados do usuário.
2. Rota de DELETE de usuários.
3. Respostas informativas.

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
