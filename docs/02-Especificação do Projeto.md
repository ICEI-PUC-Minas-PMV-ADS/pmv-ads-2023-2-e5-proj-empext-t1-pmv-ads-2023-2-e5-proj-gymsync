# Especificações do Projeto

## Arquitetura e Tecnologias

O projeto adotará uma arquitetura moderna e escalável para atender às necessidades do Studio Feminino. A solução será desenvolvida utilizando as seguintes tecnologias:

- Frontend: A interface do usuário será desenvolvida utilizando HTML, CSS e JavaScript.
- Backend: A lógica de negócio será desenvolvida utilizando PHP e MySQL.

As tecnologias escolhidas foram as mais adequadas para atender aos requisitos do projeto, que são:
- Fácil de usar: HTML, CSS e JavaScript são tecnologias de fácil aprendizado e uso, o que facilita o desenvolvimento da interface do usuário.
- Acessível: O PHP é uma linguagem de programação amplamente utilizada e que está disponível em uma variedade de plataformas, o que garante que a solução será acessível a um grande público.
- Eficiente: O MySQL é um banco de dados relacional de alto desempenho, o que garante que a solução será eficiente no armazenamento e recuperação de dados.

## Project Model Canvas

![](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e5-proj-empext-t1-pmv-ads-2023-2-e5-proj-gymsync/blob/main/docs/img/Project%20Model%20Canvas.png)

## Requisitos

As tabelas que se seguem apresentam os requisitos funcionais e não funcionais que detalham o escopo do projeto. Para determinar a prioridade de requisitos, aplicar uma técnica de priorização de requisitos e detalhar como a técnica foi aplicada.

### Requisitos Funcionais

|ID    | Descrição do Requisito  | Prioridade |
|------|-----------------------------------------|----|
|RF-001| A aplicação deve permitir que os colaboradores façam login. | ALTA |
|RF-002| A aplicação deve permitir que os colaboradores alterem a senha. | ALTA |
|RF-003| A aplicação deve permitir gerenciar cadastro de colaboradores pelo administrador. (incluir/alterar/excluir ) | ALTA |
|RF-004| A aplicação deve permitir gerenciar cadastro e matricula de aluno. (incluir/alterar/excluir) | ALTA |
|RF-005| A aplicação deve permitir gerenciar cadastro de treino do aluno.(incluir/alterar/excluir) | ALTA |
|RF-006| A aplicação deve permitir gerenciar cadastro de mensalidade e plano. | ALTA |
|RF-007| A aplicação deve conter gerenciamento de contas a pagar e receber. | ALTA |
|RF-008| A aplicação deve gerar relatorio financeiror. | MEDIO |
|RF-009| A aplicação deve possibilitar pesquisar os alunos. | MEDIO |
|RF-010| A aplicação deve conter uma agenda/lembretes. (Data de aniversário, compromissos financeiros) | ALTA |
|RF-011| O sistema deve conter um canal de postagem de informação geral. | ALTA |


### Requisitos não Funcionais

|ID     | Descrição do Requisito  |Prioridade |
|-------|-------------------------|----|
|RNF-001| A aplicação será publicado em um ambiente na Internet. (Azure) | ALTA | 
|RNF-002| A aplicação será compatível com os principais navegadores do mercado. |  ALTA | 
|RNF-003| A aplicação deve ser confiável, deve atender às suas especificações. |  MÉDIA | 
|RNF-004| A aplicação deve tratar acessos não autorizados, garantindo um alto grau de segurança. |  MÉDIA | 
|RNF-005| A interface da aplicação terá uma UI simples e limpa buscando rápido aprendizado de usabilidade, sendo alcançado com um tempo máximo de 2 horas. |  BAIXA | 

## Restrições

O projeto está restrito pelos itens apresentados na tabela a seguir.

|ID| Restrição                                             |
|--|-------------------------------------------------------|
|01| A aplicação deverá ser entregue no final do semestre letivo. |
|02| A aplicação deve se restringir às tecnologias básicas da Web de FrontEnd e Backend        |
|03| A equipe não pode subcontratar terceiros para o desenvolvimento do trabalho        |
|04| A aplicação não pode ser feito por um único integrante do grupo        |
|05| As decisões pertinentes ao projeto devem ser tomadas por meio democrático de votação        |
|06| A aplicação deve estar em conformidade com as leis e normas vigentes        |

## Diagrama de Casos de Uso

![](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e5-proj-empext-t1-pmv-ads-2023-2-e5-proj-gymsync/blob/main/docs/img/Diagrama%20de%20Casos%20de%20Uso%20(GymSync).png)

## Modelo ER (Projeto Conceitual)

![](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e5-proj-empext-t1-pmv-ads-2023-2-e5-proj-gymsync/blob/main/docs/img/Modelo%20ER%201.png)

## Projeto da Base de Dados

![](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e5-proj-empext-t1-pmv-ads-2023-2-e5-proj-gymsync/blob/main/docs/img/Diagrama%20ER%20de%20banco%20de%20dados.png)
