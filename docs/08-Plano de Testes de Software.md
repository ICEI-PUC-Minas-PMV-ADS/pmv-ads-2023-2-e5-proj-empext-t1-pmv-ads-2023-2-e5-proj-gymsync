# Plano de Testes de Software

<span style="color:red">Pré-requisitos: <a href="2-Especificação do Projeto.md"> Especificação do Projeto</a></span>, <a href="3-Projeto de Interface.md"> Projeto de Interface</a>

|Caso de Teste |CT-001 – Login do usuário |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-001 - A aplicação deve permitir que os usuários se cadastrem, façam login e alterem sua senha.|
|**Entrada** | Na página inicial, digitar o e-mail de cadastro e senha nos respectivos campos e clicar em Login. |
|**Objetivo do Teste** | Validar acesso do usuário à plataforma através do login. |
|**Passos** | 1) Acessar o Navegador. <br>2) Informar endereço: XXXXXXXXXXXX. <br>3) Preencher os campos e-mail e senha.<br>4) Clicar no botão Login. |
|**Critérios de Êxito** | "O usuário será direcionado à homepage e terá acesso ao Menu pessoal." |

|Caso de Teste |CT-002 – Acesso ao Feed de Produtos |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-002 - Acesso ao Feed com produtos.|
|**Entrada** | Na página inicial, acessar a barra de pesquisa localizada centro superior da tela. |
|**Objetivo do Teste** | Validar a pesquisa de itens na aplicação. |
|**Passos** | 1) Após efetuar login, clique na barra de pesquisa e digite a palavra chave de interesse. <br>2) Clique em buscar ou aperte enter para prosseguir com sua pesquisa <br>3) Selecionar o item desejado.
|**Critérios de Êxito** | "O usuário será direcionado para o feed de produtos." |

|Caso de Teste |CT-003 – Correspondência por Região |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-003 - Filtro por região.|
|**Entrada** | Na página inicial, acessar dados pessoais e preencher os dados de localidade. |
|**Objetivo do Teste** | Validar a pesquisa por itens anunciados na mesma região. |
|**Passos** | 1) Após efetuar login, clique em dados pessoais. <br>2) Clique em cidade e estado e insira os dados de sua região.
|**Critérios de Êxito** | "O usuário encontrará itens correspondentes à sua localidade." |

|Caso de Teste |CT-004 – Canal de Interação |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-004 - Canal de interação para negociação.|
|**Entrada** | Após localizado o item desejado, clique sobre o item e selecione o botão "Chat". |
|**Objetivo do Teste** | Validar a interação via chat. |
|**Passos** | 1) Após efetuar login, clique na barra de pesquisa e digite a palavra chave de interesse. <br>2) Clique em buscar ou aperte enter para prosseguir com sua pesquisa <br>3) Selecionar o item desejado. <br>4) Clique no botão chat. <br>5) Envie uma mensagem sinalizando o interesse e negocie junto ao usuário vendedor.
|**Critérios de Êxito** | "O usuário irá enviar e receber solicitações de interesse." |

|Caso de Teste |CT-005 – Realizar pagamento in-app |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-005 - Realizar pagamento in-app.|
|**Entrada** | Após localizado o item desejado, clique sobre o item e selecione a opção pagar. |
|**Objetivo do Teste** | Validar pagamentos através da aplicação. |
|**Passos** | 1) Após efetuar login, clique na barra de pesquisa e digite a palavra chave de interesse. <br>2) Clique em buscar ou aperte enter para prosseguir com sua pesquisa <br>3) Selecionar o item desejado. <br>4) Clicar em pagar. <br>5) Selecione sua forma de pagamento.
|**Critérios de Êxito** | "O usuário irá ser direcionado para conclusão do pagamento." |

|Caso de Teste |CT-006 – Visualização de notificações push |
|--------------------|-----------------------------------------------------------------------------------------------------------------------|
|**Requisitos Associados** | RF-006 - Notificações push.|
|**Entrada** | Na barra de notificações do disposito móvel clique sobre o pop-up para visualizar a notificação. |
|**Objetivo do Teste** | Validar o acesso às notificações do aplicativo móvel. |
|**Passos** | 1) Na barra de notificações, clique sobre o pop-up. <br>2) Ao ser direcionado ao App visualize a notificação.
|**Critérios de Êxito** | "O usuário será direcionado para a notificação recebida." |

 
## Ferramentas de Testes (Opcional)

Comente sobre as ferramentas de testes utilizadas.
 
> **Links Úteis**:
> - [IBM - Criação e Geração de Planos de Teste](https://www.ibm.com/developerworks/br/local/rational/criacao_geracao_planos_testes_software/index.html)
> - [Práticas e Técnicas de Testes Ágeis](http://assiste.serpro.gov.br/serproagil/Apresenta/slides.pdf)
> -  [Teste de Software: Conceitos e tipos de testes](https://blog.onedaytesting.com.br/teste-de-software/)
> - [Criação e Geração de Planos de Teste de Software](https://www.ibm.com/developerworks/br/local/rational/criacao_geracao_planos_testes_software/index.html)
> - [Ferramentas de Test para Java Script](https://geekflare.com/javascript-unit-testing/)
> - [UX Tools](https://uxdesign.cc/ux-user-research-and-user-testing-tools-2d339d379dc7)
