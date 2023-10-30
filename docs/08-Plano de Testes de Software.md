# Plano de Testes de Software

<span style="color:red">Pré-requisitos: <a href="2-Especificação do Projeto.md"> Especificação do Projeto</a></span>, <a href="3-Projeto de Interface.md"> Projeto de Interface</a>

|Caso de Teste |CT-001 – Login do usuário |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-001 - A aplicação deve permitir que os colaboradores façam login.|
|**Entrada** | Na página inicial, digitar o e-mail de cadastro e senha nos respectivos campos e clicar em Login. |
|**Objetivo do Teste** | Validar acesso do usuário à plataforma através do login. |
|**Passos** | 1) Acessar o Navegador. <br>2) Informar endereço: XXXXXXXXXXXX. <br>3) Preencher os campos usuário e senha.<br>4) Clicar no botão Login. |
|**Critérios de Êxito** | "O usuário será direcionado à homepage e terá acesso ao Menu." |

|Caso de Teste |CT-002 – Alteração de senha |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-002 - A aplicação deve permitir que os colaboradores alterem a senha.|
|**Entrada** | Na página inicial, ao fazer login, clica no botão "esqueci minha senha". |
|**Objetivo do Teste** | Validar alteração de senha. |
|**Passos** | 1) Após clicar em "esqueci minha senha". <br>2) Escolher sua nova senha e clicar no botão salvar.
|**Critérios de Êxito** | "O usuário será direcionado para a página inicial." |

|Caso de Teste |CT-003 – Gerenciamento de Colaboradores |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-003 - A aplicação deve permitir gerenciar cadastro de colaboradores pelo administrador. (incluir/alterar/excluir ).|
|**Entrada** | ***********. |
|**Objetivo do Teste** | Incluir, alterar e cadastrar colaboradores. |
|**Passos** | 1) Clicando em cadastrar, na próxima tela, preencha os dados pessoais do colaborador e clique em salvar. <br>2) Localize o cadastro do colaborador e clique em editar, posteriormente insira os novos dados e salve. <br>3) Localize o cadastro do colaborador e clique em deletar.
|**Critérios de Êxito** | "O usuário encontrará a mensagem de confirmação da ação" |

|Caso de Teste |CT-004 – Gerenciamento de Alunas |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-004 - A aplicação deve permitir gerenciar cadastro e matricula de aluno. (incluir/alterar).|
|**Entrada** | Página de cadastro de alunas. |
|**Objetivo do Teste** | Validar a inclusão, e edição de dados de alunas.|
|**Passos** | 1) Na página de cadastro, insira todos os dados das alunas. <br>2) Clique em salvar. <br>3) Clique no botão alterar. <br>4) Clique em salvar.
|**Critérios de Êxito** | "O usuário terá confirmação da mensagem de sucesso." |

|Caso de Teste |CT-005 – Gerenciamento de Treinos |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-005 - A aplicação deve permitir gerenciar cadastro de treino do aluno.(incluir/alterar/excluir).|
|**Entrada** | A aplicação deve permitir gerenciar cadastro de treino do aluno.(incluir/alterar/excluir). |
|**Objetivo do Teste** | Validar inclusão, alteração e exclusão de treinos. |
|**Passos** | 1) ************** <br>2) ********* <br>3) ************. <br>4) Clicar em pagar. <br>5) ****************.
|**Critérios de Êxito** | "**************" |

|Caso de Teste |CT-006 – Gerenciar cadastro de mensalidade ou plano |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-006 - A aplicação deve permitir gerenciar cadastro de mensalidade ou plano.|
|**Entrada** | No cadastro da aluna vá até o campo data pagamento mensalidade. |
|**Objetivo do Teste** | Validar o cadastro e vencimento de mensalidade. |
|**Passos** | 1) No cadastro da aluna, vá até data de pagamento mensalidade. <br>2) Neste campo conterá o vencimento da mensalidade.
|**Critérios de Êxito** | "O usuário escolherá sair ou analisar algum outro dado." |

|Caso de Teste |CT-007 – Gerenciamento de contas a pagar e recebimentos |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-006 - 	A aplicação deve conter gerenciamento de contas a pagar e receber.|
|**Entrada** | *********. |
|**Objetivo do Teste** | Validar o gerencimento de débitos e créditos. |
|**Passos** | 1) ********. <br>2) ******.
|**Critérios de Êxito** | "***************" |

|Caso de Teste |CT-008 – Geração de relatório financeiro |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-006 - A aplicação deve gerar relatorio financeiro.|
|**Entrada** | **********. |
|**Objetivo do Teste** | Validar o acesso ao relatório financeiro geral. |
|**Passos** | 1) ******. <br>2) *****.
|**Critérios de Êxito** | "***********" |

|Caso de Teste |CT-009 – Pesquisa específica por aluna |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-006 - A aplicação deve possibilitar pesquisar os alunos.|
|**Entrada** | Tela de cadastro de alunas. |
|**Objetivo do Teste** | Validar a pesquisa por alunas específicas. |
|**Passos** | 1) Na tela de cadastro der alunas, insira o dado de sua busca. <br>2) Clique em pesquisar.
|**Critérios de Êxito** | "O usuário visualizará a aluna mediante pesquisa" |

|Caso de Teste |CT-010 – Data de aniversário e/ou compromissos financeiros |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-006 - A aplicação deve conter uma agenda/lembretes. (Data de aniversário, compromissos financeiros).|
|**Entrada** | *********. |
|**Objetivo do Teste** | Validar lembrete de aniversários e/ou compromissos financeiros. |
|**Passos** | 1) ****. <br>2) ****.
|**Critérios de Êxito** | "****" |

|Caso de Teste |CT-011 – Canal de informações |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-006 - O sistema deve conter um canal de postagem de informação geral.|
|**Entrada** | *****. |
|**Objetivo do Teste** | Validar inclusão de informação geral colaboradores. |
|**Passos** | 1) ****. <br>2) ****.
|**Critérios de Êxito** | "*****" |

 
## Ferramentas de Testes (Opcional)

Comente sobre as ferramentas de testes utilizadas.
 
> **Links Úteis**:
> - [IBM - Criação e Geração de Planos de Teste](https://www.ibm.com/developerworks/br/local/rational/criacao_geracao_planos_testes_software/index.html)
> - [Práticas e Técnicas de Testes Ágeis](http://assiste.serpro.gov.br/serproagil/Apresenta/slides.pdf)
> - [Teste de Software: Conceitos e tipos de testes](https://blog.onedaytesting.com.br/teste-de-software/)
> - [Criação e Geração de Planos de Teste de Software](https://www.ibm.com/developerworks/br/local/rational/criacao_geracao_planos_testes_software/index.html)
> - [UX Tools](https://uxdesign.cc/ux-user-research-and-user-testing-tools-2d339d379dc7)
