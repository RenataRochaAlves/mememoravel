<p align="center"><img src="img/logo.png" width="200"></p>

<h1 align="center">Mememorável</h1>

> Aplicação disponível no Heroku: [Mememorável](https://mememoravel.herokuapp.com/)

## Sobre o Mememorável

Apesar de os memes fazerem parte do nosso entretenimento desde a popularização da internet, ainda há uma falta de registro e centralização desse conteúdo. O que dificulta a busca por memes antigos e o acesso a dados como quais memes surgiram em determinado ano. Pensando nisso, desenvolvi o Mememorável como uma forma de arquivar memes e evitar que eles se percam com o tempo, além de levar diversão e nostalgia aos usuários que, ao navegarem pelo site, podem encontrar memes que marcaram alguma fase de sua vida mas que já nem se lembravam mais. Os usuários também podem contribuir com a comunidade ao cadastrarem novos memes e popularem o banco de dados colaborativo, que pode ser utilizado por outros desenvolvedores através do consumo da API. 

## Ferramentas utilizadas

O back-end da aplicação foi desenvolvido com o uso do framework PHP Laravel 7 através da arquitetura MVC e o banco de dados relacional foi construído em MySQL, já para o front-end, foram construídos layouts responsivos utilizando HTML5, CSS3 e JavaScript.

## Consumo da API

Foi desenvolvida uma API que é consumida internamente na própria plataforma e está disponível para outros desenvolvedores que desejarem utilizar os dados dos memes registrados. Basta enviar uma requisição para a URL abaixo para ter acesso ao arquivo JSON:

> https://mememoravel.herokuapp.com/api/memes

## Funcionamento da Plataforma

### Home

Na Home é possível encontrar todos os memes cadastrados por ordem decrescente, exibindo os memes cadastrados mais recentemente primeiro. É possível exibi-los de maneira crescente ao selecionar "Mais antigos" no canto superior direito. Também é possível filtrá-los por ano de surgimento, exibindo apenas os memes datados de determinado ano. Além disso, é possível realizar uma busca dinâmica para encontrar um meme específico na plataforma caso ele exista, caso contrário, será exibida uma mensagem ao usuário.

### Cards de memes

Nos cards de memes é possível encontrar o vídeo do meme, o nome, a data em que o vídeo foi cadastrado na plataforma e, em amarelo, o ano em que ele surgiu. Logo abaixo, estão as informações do usuário que o cadastrou, como o avatar e o username. Ao lado das informações estão dois botões de interação com aquele meme, no ícone de alerta, o usuário é redirecionado para uma página de denúncia para reportar qualquer problema com aquele conteúdo, já no ícone de coração, caso esteja logado, o usuário pode salvar aquele meme como um favorito.

### Cadastro

O usuário pode se cadastrar na plataforma fornecendo seu nome, username, e-mail e senha. A senha é salva criptografada e os únicos dados disponíveis para outros usuários são o username e o avatar. O formulário passa por uma verificação que só permite o cadastro caso o username e o e-mail não tenham sido utilizados anteriormente, a senha seja maior do que 8 caracteres e seja idêntica à confirmação de senha.

### Login e Logout

Após realizar o cadastro, o usuário pode realizar seu login fornecendo o e-mail e senha cadastrados. Quando logado, ele pode fazer o logout clicando no ícone presente no canto superior direito, na mesma posição em que o ícone de login fica disponível caso ele não esteja logado.

### Cadastro de Meme

Quando logado, o usuário pode cadastrar novos memes ao clicar no ícone de "+" presente no centro da parte inferior do site. Na página de cadastro, o usuário preenche um pequeno formulário informando o link do YouTube contendo o vídeo do meme, o nome do meme (podendo ser diferente do cadastrado no YouTube) e o ano em que aquele meme surgiu.

### Perfil

Quando logado, é possível acessar a página de perfil clicando no ícone de usuário presente no canto inferior direito. Nela estão presentes informações do usuário como avatar, nome, username e ícone de edição. Ao clicar no ícone, o usuário é redirecionado para a página de edição, na qual ele pode alterar os seus dados e escolher um novo avatar de acordo com as opções pré-definidas. Na página de perfil, é possível encontrar também todos os memes cadastrados por aquele usuário e deletá-los ao clicar no ícone de lixeira em cada card.

### Favoritos

Na página de favoritos, disponível ao clicar no ícone de coração presente no canto inferior esquerdo, o usuário logado pode encontrar todos os memes que ele favoritou na plataforma. Para remover um meme dos favoritos, basta clicar novamente no ícone de coração vermelho em cada card.

### Denúncia

Ao clicar no ícone de denúncia presente em todos os memes publicados, o usuário é redirecionado para um formulário no qual ele pode selecionar os motivos pelos quais ele acredita que aquela publicação é inadequada ou, caso o motivo não esteja listado, ele pode descrevê-lo na caixa de texto. Todas as denúncias são anônimas, mesmo quando o usuário está logado, e são enviadas diretamente para o administrador para que ele tome as providências necessárias.

### Informações

No canto superior direito, está disponível um ícone de informações que leva para uma página contendo informações sobre a plataforma, seu conteúdo e como utilizá-la, além de informações sobre mim, a desenvolvedora, e as minhas redes sociais para nos conectarmos e conversarmos sobre esse e outros projetos.


<h5 align="center">Obrigada por se interessar pelo projeto, divirta-se!</h5>


