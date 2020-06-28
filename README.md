# QHelp

<!--- Exemplos de badges. Acesse https://shields.io para outras opções. Você pode querer incluir informações de dependencias, build, testes, licença, etc. --->
![GitHub repo size](https://img.shields.io/github/repo-size/hsborges/progweb-template)
![GitHub contributors](https://img.shields.io/github/contributors/hsborges/progweb-template)

Para empresas que possuem diversos setores e protocolos que necessitam de atendimento e abertura de chamados internos para auxiliar seus funcionários o QHelp é um sistema de help-desk que permite a comunicação e resolução de problemas internos por meio de um mensageiro online de modo contrário ao atendimento por telefone que normalmente ocorre nessas empresas, nosso produto permite que as mensagens trocadas sejam protocoladas e armazenadas. Além de garantir melhor usabilidade ao funcionário que pode avaliar e classificar seus problemas dentro de uma plataforma rápida e intuitiva, também proporciona a melhor fluidez e organização da equipe de atendimento para solucionar as demandas requeridas. 

Acesso o [backlog](https://docs.google.com/spreadsheets/d/1Hta1WhosgH-4h9NC0ErxVpfXV1IxrGRjrFBXKIp29I4/edit?usp=sharing) de desenvolvimento

Acesso ao [mockup](https://drive.google.com/open?id=11ibLOhiIx5Xgt8adgL6ctP-gD0vVf5Cw) do desenvolvimento

Acesso a [documentação completa do software] (https://drive.google.com/drive/u/0/folders/1XP0m03bjFlkaNHFgxQfz1HNxYKVuOpmE)

## Pré-requisitos

Antes de iniciar, certifique-se de cumprir os seguintes requisitos:
* Você deve possuir o PHP 7.0 ou versão superior;
* Você deve ter instalado o Composer;
* Você deve ter instalado o Lavrel;
* Você deve ter instalado um SGBD MySQL.

## Como executar

Para fazer o deploy da aplicação siga os seguintes passos:
OBS.: Os testes foram realizados apenas em ambiente Windows.

Windows:
 1. Realizar o clone do repositório;
 2. Abrir o terminal dentro da pasta em questão do repositório;
 3. Executar o seguinte comando:
    `composer install`   
 4. Em seguida, para iniciar a aplicação, executar o seguinte comando:
    `php artisan serve`
    
OBS.: Para  alteração das configurações do banco de dados, modificar no arquivo .env

## Usando QHelp

Para usar QHelp, siga os seguintes passos (exemplos):

* Abra o navegador e digite o seguinte endereço: `http://127.0.0.1`
* Ao abrir a aplicação você deverá, obrigatóriamente:
  * Criar um usuário em "Registrar usuário";
  * Informar Nome, e-mail e senha;
  * Todas as informações para registro são obrigatórias;
  * Conclua o cadastro e automayicamente você será logado na aplicação.

* Dentro da home, basta clicar na classificação do problema identificado e o sistema
sera direcionado para o início de um novo chat de conversa.

## Contribuidores

As seguintes pessoas contribuiram para este projeto:

* [Camila Martins Garcia](https://github.com/camzgarcia)
* [Filipe Ferreira Falco](https://github.com/FilipeFalco)
* [Kleber Meira Lima](https://github.com/KleberMeira)

## Licença de uso

Este projeto usa a seguinte licença: [GNU GPLv3](https://www.gnu.org/licenses/gpl-3.0.pt-br.html).
