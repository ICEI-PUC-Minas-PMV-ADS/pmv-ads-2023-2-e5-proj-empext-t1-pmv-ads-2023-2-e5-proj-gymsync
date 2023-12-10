# Plano de Testes de Software

<span style="color:red">Pré-requisitos: <a href="2-Especificação do Projeto.md"> Especificação do Projeto</a></span>, <a href="3-Projeto de Interface.md"> Projeto de Interface</a>

|Caso de Teste |CT-001 – Login do usuário |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-001 - A aplicação deve permitir que o administrador faça login.|
|**Entrada** | Na página inicial, digitar o e-mail de cadastro e senha nos respectivos campos e clicar em Login. |
|**Objetivo do Teste** | Validar acesso do usuário à plataforma através do login. |
|**Passos** | 1) Acessar o Navegador. <br>2) Informar endereço: (https://studiopersonal.expertsuite.com.br/). <br>3) Preencher os campos usuário e senha.<br>4) Clicar no botão Login. |
|**Critérios de Êxito** | "O usuário será direcionado à homepage e terá acesso ao Menu." |

|Caso de Teste |CT-002 – Alteração de senha |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-002 - A aplicação deve permitir que o administrador altere a senha.|
|**Entrada** | Na página inicial, ao fazer login, clicar no botão "recuperar senha". |
|**Objetivo do Teste** | Validar alteração de senha. |
|**Passos** | 1) Após clicar em "recuperar senha". <br>2) Insira sua nova senha e clique no botão salvar.
|**Critérios de Êxito** | "O usuário será direcionado para a página inicial." |

|Caso de Teste |CT-003 – Gerenciamento de Colaboradores |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-003 - A aplicação deve permitir gerenciar cadastro de colaboradores pelo administrador. (incluir/alterar/excluir ).|
|**Entrada** | ***********. |
|**Objetivo do Teste** | Incluir, alterar e cadastrar colaboradores. |
|**Passos** | 1) Ao realizar login, no menu esquerdo superior, clique em "pessoas" depois em "funcionarios". <br>2) Localize o cadastro do colaborador desejado na coluna "ações" e solecione a opção desejada (editar, excluir ou desativatar usuário).
|**Critérios de Êxito** | "O usuário confimará a ação no botão salvar" |

|Caso de Teste |CT-004 – Gerenciamento de Cadastro de Clientes |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-004 - A aplicação deve permitir gerenciar cadastro de clientes. (incluir/alterar/excluir).|
|**Entrada** | Página de cadastro de alunas. |
|**Objetivo do Teste** | Validar a inclusão, e edição de dados de alunas.|
|**Passos** | 1) Ao fazer login na aplicação, no menu lateral esquerdo cliente em pessoas, após, clique em clientes. <br>2) Para excluir ou editar, na coluna ações localizada no final dos dados cadastrais do cliente, selecione o icone da lixeira para exclusão ou o icone de lápis para a edição. <br>3) Ao escolher o icone da lixeira(exclusão), confime clicando em sim. <br>4) Ao escolher o icone do lápis(edição), altere os dados desejados e confime clicando em salvar.
|**Critérios de Êxito** | "O usuário será redirecionado para a tela de clientes" |

|Caso de Teste |CT-005 – Gerenciamento de contas a pagar e recebimentos |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-006 - 	A aplicação deve conter gerenciamento de contas a pagar e receber.|
|**Entrada** | *********. |
|**Objetivo do Teste** | Validar o gerencimento de débitos e créditos. |
|**Passos** | 1) ********. <br>2) ******.
|**Critérios de Êxito** | "***************" |

|Caso de Teste |CT-006 – Gerenciamento de contas a receber e despesas |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-006 - 	A aplicação deve conter gerenciamento de contas a receber e despesas.|
|**Entrada** | Tela de Financeiro |
|**Objetivo do Teste** | Gerenciar contas a receber e despesas. |
|**Passos** | 1) Ao realizar login, no menu superior esquerdo clique em financeiro e clique em contas a receber. Ao obter acesso as contas, clique no botão "+Receber", que se encontra no canto superior esquerdo. Logo em seguida insira os dados solicitados e clique em salvar. <br>2) Para excluir ou editar, na coluna ações localizada no final dos dados de contas a receber e despesas, selecione o icone da lixeira para exclusão ou o icone de lápis para a edição. <br>3) Ao escolher o icone da lixeira(exclusão), confime clicando em sim. <br>4) Ao escolher o icone do lápis(edição), altere os dados desejados e confime clicando em salvar.
|**Critérios de Êxito** | "O usuário será redirecionado para a tela de financeiro" |

|Caso de Teste |CT-007 – Pesquisa específica por cliente |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-007 - A aplicação deve possibilitar pesquisar cliente.|
|**Entrada** | Tela de pessoas na aba de clientes. |
|**Objetivo do Teste** | Validar a pesquisa por cliente específico. |
|**Passos** | 1) Ao realizar login, no menu superior esquerdo, clique em pessoas e clique em clientes. Ao obter acesso a lista de clientes, clique na caixa de pesquisa, localizada no canto superior direito(buscar). Logo em seguida realize a pesquisa de acordo com o cliente desejado.
|**Critérios de Êxito** | "O usuário visualizará o cliente desejado mediante pesquisa" |
