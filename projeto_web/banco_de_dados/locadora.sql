-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 14-Fev-2021 às 13:25
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `lancamento` varchar(15) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `sinopse` varchar(10000) NOT NULL,
  `preco` float NOT NULL,
  `nome_imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `autor`, `lancamento`, `genero`, `sinopse`, `preco`, `nome_imagem`) VALUES
(1, 'Piratas do Caribe: A MaldiÃ§Ã£o do PÃ©rola Negra', ' Jerry Bruckheimer', '2003', 'Aventura', 'O pirata Jack Sparrow tem seu navio saqueado e roubado pelo capitÃ£o Barbossa e sua tripulaÃ§Ã£o. Com o navio de Sparrow, Barbossa invade a cidade de Port Royal, levando consigo Elizabeth Swann, filha do governador. Para recuperar sua embarcaÃ§Ã£o, Sparrow recebe a ajuda de Will Turner, um grande amigo de Elizabeth. Eles desbravam os mares em direÃ§Ã£o Ã  misteriosa Ilha da Morte, tentando impedir que os piratas-esqueleto derramem o sangue de Elizabeth para desfazer a maldiÃ§Ã£o que os assola.', 15, '76434143fce9824a3aa361ace442839a.jpg'),
(2, 'Como treinar seu DragÃ£o', 'Chris Sanders', '2010', 'Animacao', 'SoluÃ§o Ã© um adolescente viking da ilha de Berk, onde lutar contra dragÃµes Ã© um meio de vida. Suas opiniÃµes avanÃ§adas e um senso de humor estranho o tornam um desajustado, apesar de seu pai ser o chefe do clÃ£. Jogado em uma escola de combate a dragÃµes, ele quer provar que Ã© um verdadeiro viking, mas ao fazer amizade com um dragÃ£o machucado, ele tem a chance de mudar o futuro de seu povo.', 20, 'ed30868884d7b8f4714e4c9f09d268d1.jpg'),
(3, 'Eu sou a Lenda', 'Francis Lawrence', '2008', 'Terror', 'Robert Neville Ã© um brilhante cientista e o Ãºnico sobrevivente de uma epidemia que transformou os humanos em mutantes sedentos por sangue. Andando pela cidade de Nova York, ele procura por outros possÃ­veis sobreviventes e tenta achar a cura da praga usando seu prÃ³prio sangue, que Ã© imune.', 17, '57690336239df2da2eb63b3cd4210e4e.jpg'),
(5, 'Naruto: The Last', 'Masashi Kishimoto', '2015', 'Animacao', 'Hanabi Hyuuga, a irmÃ£ mais nova de Hinata, Ã© sequestrada por Toneri Ootsutsuki. Naruto Uzumaki une forÃ§as para ajudar a irmÃ£ caÃ§ula de seu novo amor, mas suas habilidades sÃ£o postas Ã  prova quando perde sua forma mais poderosa.', 23, 'ca8d274cce61d0a81d5488bc9eef8efc.jpg'),
(6, 'One Piece: Stampede', 'Echiro Oda', '2019', 'Animacao', 'Luffy e a tripulaÃ§Ã£o ChapÃ©u de Palha sÃ£o convidados para o maior evento de piratas do mundo. O ponto alto do festival Ã© uma caÃ§a a um lendÃ¡rio e cobiÃ§ado tesouro, uma competiÃ§Ã£o que garantirÃ¡ ao vencedor o tÃ­tulo de Rei dos Piratas. PorÃ©m, o festival Ã© uma elabora armadilha para trair os piratas, e hÃ¡ perigos Ã  espreita em cada etapa do desafio. O festival Ã© um evento frenÃ©tico, repleto de piratas entusiasmados com o desafio. Quando Bullet, um antigo tripulante de Rogers aparece, comeÃ§a a destruir os seus adversÃ¡rios. No fervor da batalha, os sete senhores da guerra, incluindo o marine Smoker, juntam-se pela primeira vez para derrotar Bullet, numa batalha de proporÃ§Ãµes Ã©picas.', 21, '24e789ab6086ea0cab16a1f7cecf1924.png'),
(7, 'Pixels', ' Chris Columbus', '2015', 'Comedia', 'Uma raÃ§a alienÃ­gena cria monstros inspirados em videogames da dÃ©cada de 1980 para conquistar a Terra, e cinco especialistas em jogos da Ã©poca sÃ£o convocados para combater o plano dos extraterrestres e salvar o planeta.', 27, 'd78f4aafac00ad234aa6d2cfacaeae4d.jpg'),
(8, 'KaratÃª Kid - A Hora da Verdade', 'John G. Avildsen', '1984', 'Acao', 'O adolescente Daniel LaRusso se envolve com a ex-namorada do valentÃ£o da escola e comeÃ§a a ser atormentado por sua gangue. Para sua sorte, ele conta com os ensinamentos do senhor Miyagi, um mestre de karatÃª que o prepara para autodefesa e tambÃ©m para um importante campeonato.\r\n', 16, 'f696d286ce0511e2b38c068cc2321fbb.jpg'),
(9, 'Jumanji', 'Jake Kasdan,', '1995', 'Aventura', 'Quatro adolescentes encontram um videogame cuja aÃ§Ã£o se passa em uma floresta tropical. Empolgados com o jogo, eles escolhem seus avatares para o desafio, mas um evento inesperado faz com que eles sejam transportados para dentro do universo fictÃ­cio, transformando-os nos personagens da aventura.', 20, '8be63ccd009c8bcbad0f49da21d76a0c.jpg'),
(10, 'PremoniÃ§Ã£o', ' James Wong', '2000', 'Terror', 'Alex Browning estÃ¡ embarcando em uma viagem para Paris. Alex sofre uma premoniÃ§Ã£o, pela qual vÃª o aviÃ£o explodir momentos depois de sair do chÃ£o. Alex insiste que todo mundo saia do aviÃ£o e sete pessoas, incluindo Alex, sÃ£o obrigados a desembarcar. Todos veem quando o aviÃ£o realmente explode como uma bola de fogo. Ele e os outros sobreviventes brevemente enganam a morte, mas nÃ£o serÃ£o capazes de evitar o seu destino por muito tempo. Um a um, esses fugitivos de destino viram vÃ­timas da morte.', 16, 'd98aefd1ebd59f722bccc290bdc5a481.jpg'),
(11, 'Boneco do Mal 2', 'William Brent Bell', '2020', 'Suspense', 'Um jovem casal muda-se para a MansÃ£o Heelshire, sem nada conhecer da trÃ¡gica histÃ³ria daquele lugar. Rapidamente, o filho descobre Brahms, um boneco de porcelana, que se torna o seu novo melhor amigo... E vai aterrorizar as suas vidas.', 15, '6d8933f987cdb7c331ea253be409d411.jpg'),
(12, 'O PoÃ§o', ' Galder Gaztelu-Urrutia', '2020', 'Terror', 'Resultado de imagem para o poÃ§o sinopse\r\nSituado dentro de uma prisÃ£o vertical conhecida como O PoÃ§o, o longa Ã© protagonizado por Goreng (Ivan MassaguÃ©, brilhante no papel), um homem que faz por conta prÃ³pria a escolha de ir para o local com o intuito de parar de fumar. LÃ¡ dentro, ele conhece o velho Trimagasi (Zorion Eguileor), seu â€œcompanheiro de celaâ€', 26, '25090f6c1827d58ff239a068d42ba3a7.jpg'),
(13, 'Para Todos os Garotos que JÃ¡ Amei', 'Susan Johnson', '2018', 'Romance', 'Lara Jean Song Covey (Lana Condor) escreve cartas de amor secretas para todos os seus antigos paqueras. Um dia, essas cartas sÃ£o misteriosamente enviadas para os meninos sobre os quem ela escreve, virando sua vida de cabeÃ§a para baixo.', 28, '6912402cf3c019c31b7851712600519f.jpg'),
(14, 'A cinco passos de vocÃª', 'Justin Baldoni', '2019', 'Romance', 'Dois pacientes com fibrose cÃ­stica se apaixonam, apesar das regras do hospital afirmarem que eles devem manter 1,5 metros de distÃ¢ncia entre si.', 23, 'fbfa81bdf2764bbfee8b7ca3329bcd58.jpg'),
(15, 'Peter Pan', 'Joe Wright', '2015', 'Fantasia', 'Peter Ã© um menino travesso de 12 anos que vive em um sombrio orfanato em Londres. Em uma noite inacreditÃ¡vel, Peter Ã© levado do orfanato a um mundo fantÃ¡stico de piratas, guerreiros e fadas, chamado Terra do Nunca. LÃ¡, ele vive aventuras incrÃ­veis enquanto tenta descobrir o segredo de sua mÃ£e, que o deixou no orfanato hÃ¡ tanto tempo. Na companhia da guerreira Princesa Tigrinha e do novo amigo CapitÃ£o Gancho, Peter deve derrotar o cruel pirata Barba Negra e se tornar o herÃ³i da Terra do Nunca.', 14, '0cf1bd28daa1852de472a732855d848c.jpg'),
(16, 'O Chamado', 'Gore Verbinski', '2002', 'Terror', 'A jornalista Rachel Keller decide investigar a morte de sua sobrinha e descobre que quatro adolescentes morreram misteriosamente sete dias depois de assistir a um vÃ­deo com imagens assustadoras. Agora ela tenta solucionar o mistÃ©rio e impedir que a profecia se realize, jÃ¡ que ela e seu filho tambÃ©m assistiram ao vÃ­deo.', 20, 'd3c7e876bf615200e4d95f62eaae5f66.jpg'),
(17, 'Os Vingadores', 'Stan Lee', '2012', 'Acao', 'Loki, o irmÃ£o de Thor, ganha acesso ao poder ilimitado do cubo cÃ³smico ao roubÃ¡-lo de dentro das instalaÃ§Ãµes da S.H.I.E.L.D. Nick Fury, o diretor desta agÃªncia internacional que mantÃ©m a paz, logo reÃºne os Ãºnicos super-herÃ³is que serÃ£o capazes de defender a Terra de ameaÃ§as sem precedentes. Homem de Ferro, CapitÃ£o AmÃ©rica, Hulk, Thor, ViÃºva Negra e GaviÃ£o Arqueiro formam o time dos sonhos de Fury, mas eles precisam aprender a colocar os egos de lado e agir como um grupo em prol da humanidade.', 30, '73ae0025e8eb57cdf8f9ddcef4295889.jpg'),
(18, 'O ImpossÃ­vel', 'MarÃ­a BelÃ³n', '2012', 'Drama', 'O casal Maria e Henry estÃ¡ aproveitando as fÃ©rias de inverno na TailÃ¢ndia junto com os trÃªs filhos pequenos. Mas em uma manhÃ£, um tsunami de proporÃ§Ãµes devastadoras atinge o local, arrastando tudo o que encontra pela frente. Separados em dois grupos, a mÃ£e e o filho mais velho vÃ£o enfrentar situaÃ§Ãµes desesperadoras para se manterem vivos, enquanto, o pai e as duas crianÃ§as menores nÃ£o sabem se os outros dois ainda estÃ£o vivos.', 24, '15b823d84712cb83074b9878e2fc039f.jpg'),
(20, 'Percy Jackson e o LadrÃ£o de Raios', 'Rick Riordan', '2010', 'Fantasia', 'A vida do adolescente Percy Jackson, que estÃ¡ sempre pronto para entrar em uma confusÃ£o, torna-se bem mais complicada quando ele descobre que Ã© filho do deus grego Poseidon. Em um campo de treinamento para filhos das divindades, Percy aprende a tirar proveito de seus poderes divinos e se preparea para a maior aventura de sua vida.', 12, '31edfeebe663a7bf98a66c3d773bb0ce.jpg'),
(22, 'Minha MÃ£e Ã‰ uma PeÃ§a: O Filme', 'Paulo Gustavo', '2013', 'Comedia', 'Dona HermÃ­nia Ã© uma mulher de meia idade, divorciada do marido, que a trocou por uma mais jovem. Hiperativa, ela nÃ£o larga o pÃ© de seus filhos Marcelina e Juliano, que jÃ¡ estÃ£o bem grandinhos. Um dia, apÃ³s descobrir que eles a consideram uma chata, resolve sair de casa sem avisar ninguÃ©m, deixando todos, de alguma forma, preocupados com o que teria acontecido. Mal sabem eles que a mÃ£e foi visitar a querida tia ZÃ©lia para desabafar suas tristezas do presente e recordar os bons tempos do passado.', 19, 'a4b232dcb915321de819d47bd8a1c752.jpg'),
(23, 'Deuses do Egito', 'Alex Proyas', '2016', 'Acao', 'A sobrevivÃªncia da humanidade se vÃª ameaÃ§ada quando Set, o impiedoso deus das trevas, apodera-se do trono do Egito e transforma o prÃ³spero ImpÃ©rio em um caos. Na esperanÃ§a de salvar o mundo e resgatar seu verdadeiro amor, um mortal chamado Bek forma uma improvÃ¡vel alianÃ§a com o poderoso deus Horus. Sua batalha contra Set e seus escudeiros atravessa o alÃ©m e os cÃ©us para um confronto Ã©pico.', 15, 'caa13e0ca08677167bf2a4c1cd65b213.jpg'),
(24, 'Bob esponja: O Filme', ' Stephen Hillenburg', '2004', 'Animacao', 'Bob Esponja e seu amigo Patrick, uma estrela do mar, embarcam em uma missÃ£o para limpar o nome do Sr. Sirigueijo, o proprietÃ¡rio do restaurante Siri Cascudo, que foi acusado de roubar a coroa do rei Netuno. Saindo dos limites familiares, Bob Esponja e Patrick aventuram-se para procurar a coroa de Netuno, mas encontrarÃ£o vÃ¡rios obstÃ¡culos no caminho.', 12, 'b5a872291f8563daa9f9ed55d4ec2d3d.jpg'),
(25, 'Marley e Eu', 'John Grogan', '2008', 'Romance', 'Os recÃ©m-casados John e Jenny Grogan se mudam de Michigan para a FlÃ³rida, onde eles compram sua primeira casa e encontram trabalhos em competitivos jornais. Mais tarde, o casal adota Marley, um adorÃ¡vel filhote de labrador amarelo. Marley cresce rapidamente e se torna bastante travesso. Ainda assim, mesmo enquanto ele estÃ¡ destruindo a mobÃ­lia e nÃ£o obedece, ele sempre consegue alegrar John, Jenny e sua crescente famÃ­lia.', 25, '3fbde158fdb83abd56cfe3a64f5d9f6a.jpg'),
(26, 'IrmÃ£o Urso', ' Aaron Blaise e Robert Walker', '2003', 'Animacao', 'Kenai Ã© um bravo jovem Ã­ndio com uma aversÃ£o especial por ursos. Quando seu irmÃ£o Sitka Ã© morto por um, Kenai mata o urso, mas Ã© magicamente transformado em um deles. Para piorar a situaÃ§Ã£o, seu outro irmÃ£o, Denahi, jura matar o urso que Kenai se tornou. A Ãºnica esperanÃ§a de Kenai Ã© uma montanha mÃ¡gica, onde ele acredita que pode ser transformado de volta em um ser humano e ele pede a Koda, um verdadeiro filhote de urso, para ajudÃ¡-lo a chegar lÃ¡.', 15, 'ae000b0101c6a77d5cd78233ef32d2e6.jpg'),
(28, 'Battleship - A Batalha dos Mares', 'Peter Berg', '2012', 'Acao', '	Baseado no famoso jogo Batalha Naval, o filme acompanha a jornada de um navio que se depara com um exÃ©rcito alienÃ­gena que tenta conquistar a Terra. Para defender o planeta, a tripulaÃ§Ã£o precisa confiar em uma estratÃ©gia Ãºnica.', 10, 'e7c5338870a57db6a614ea4c5b1b0ff0.jpg'),
(29, 'O Exorcismo de Emily Rose', 'Scott Derrickson', '2005', 'Terror', 'A jovem estudante Emily Rose comeÃ§a a alucinar e ter surtos cada vez mais frequentes, que causam perda de memÃ³ria. CatÃ³lica praticante, ela aceita ser submetida a uma sessÃ£o de exorcismo. Quem a realiza Ã© o sacerdote de sua parÃ³quia, o padre Richard Moore. PorÃ©m, Emily morre durante o exorcismo, o que faz com que o padre seja acusado de assassinato. A advogada Erin Bruner aceita pegar a defesa do padre e argumenta que a condiÃ§Ã£o de Emily nÃ£o pode ser explicada somente pela ciÃªncia.', 25, 'e5ab4d45678f7e465602a0ab7d76bf29.jpg'),
(30, 'No CoraÃ§Ã£o do Mar', 'Ron Howard', '2015', 'Aventura', 'A tripulaÃ§Ã£o do barco baleeiro Essex precisa fazer o impossÃ­vel para sobreviver em uma ilha deserta apÃ³s sofrer brutal ataque de uma baleia gigantesca.', 20, '56f34d9e56176bbc563ce96d58747ade.jpg'),
(31, 'Guerra Mundial Z', 'Marc Forster', '2013', 'Terror', 'Um vÃ­rus letal se espalha rapidamente e transforma seres humanos em zumbis. O ex-agente da ONU Gerry Lane Ã© chamado para investigar a epidemia que estÃ¡ acabando com a humanidade, iniciando uma verdadeira corrida contra o tempo.', 17, '1f9675e82af526fd4afccae0079fcd86.jpg'),
(32, 'Um Sonho PossÃ­vel', 'Michael Lewis', '2009', 'Drama', 'Michael Oher Ã© um jovem negro, filho de uma mÃ£e viciada e que nÃ£o tem onde morar. Com boa vocaÃ§Ã£o para os esportes, um dia ele Ã© avistado pela famÃ­lia de Leigh Anne Tuohy, andando em direÃ§Ã£o ao estÃ¡dio da escola para dormir longe da chuva. Ao ser convidado para passar uma noite na casa dos milionÃ¡rios, Michael nÃ£o tem ideia que aquele dia mudaria para sempre a sua vida. Com a ajuda da nova famÃ­lia e de uma tutora dedicada, ele percebe seu potencial como estudante e jogador de futebol americano.', 20, '9c531cd8a3032a7a2464f93ce26da28d.jpg'),
(33, 'Bad Boys', 'Michael Bay', '1995', 'Acao', 'Em Miami, os detetives Mike Lowrey e Marcus Burnett trocam de identidade enquanto investigam assassinatos ligados ao roubo de uma carga de 100 milhÃµes de dÃ³lares em heroÃ­na, que recentemente confiscaram.', 25, 'f4d9d1c9571d0b62c38beffc27618ae6.jpg'),
(34, 'Anjos da Lei', 'Phil Lord', '2012', 'Comedia', 'Jenko e Schmidt estudaram juntos, mas nunca foram amigos. Anos depois, os dois se reencontram na academia de polÃ­cia e passam a se ajudar. JÃ¡ formados, a dupla se envolve em uma confusÃ£o ao tentar prender um traficante. Por causa de seu desempenho catastrÃ³fico, eles sÃ£o remanejados para trabalhar infiltrados como alunos de ensino mÃ©dio. Eles devem desvendar quem Ã© o fornecedor de uma nova droga em uma escola, enquanto tentam manter seu disfarce de estudantes.', 15, '8a50fc424a805514db3ace76656e1d06.jpg'),
(35, 'Fragmentado', 'M. Night Shyamalan', '2017', 'Suspense', 'Kevin possui 23 personalidades distintas e consegue alternÃ¡-las quimicamente em seu organismo apenas com a forÃ§a do pensamento. Um dia, ele sequestra trÃªs adolescentes que encontra em um estacionamento. Vivendo em cativeiro, elas passam a conhecer as diferentes facetas de Kevin e precisam encontrar algum meio de escapar.', 21, 'e8b64a10879a170deda3e2efb729db83.jpg'),
(37, 'One Piece: Episode of Nami', 'Echiro Oda', '2012', 'Animacao', 'Quando Luffy descobre, ele e a derrota tripulaÃ§Ã£o de Arlong, provando que Nami pertence a eles, e eles devem zarpar para explorar o resto do mar. No final da especial, Ã© revelado que a recontagem foi realmente Nami-se relembrando pÃ³s-timeskip enquanto a tripulaÃ§Ã£o se dirigia para a Ilha dos Homens-Peixe.', 30, '15a963dc47c7d41f8ef0eeae14fb5dff.jpg'),
(39, 'Sword Art Online: Ordinal Scale', 'Tomohiko ItÅ', '2017', 'Animacao', 'â€œOrdinal Scaleâ€ Ã© um novo jogo que usa um dispositivo de realidade virtual chamado â€œAugmaâ€, que parece um conjunto de Headphones. Diferente dos outros dispositivos de realidade virtal, ele Ã© portÃ¡vel, mas nÃ£o oferece o â€œfull diveâ€, imersÃ£o do Amusphere (â€œnÃ£o te coloca em comaâ€).', 15, 'e0577b940781d17be1347426aade44f8.jpg'),
(40, 'Zootopia', ' Byron Howard', '2018', 'Fantasia', ' Em uma cidade de animais, uma raposa falante se torna uma fugitiva ao ser acusada de um crime que nÃ£o cometeu. O principal policial do local, o incontestÃ¡vel coelho, sai em sua busca.', 30, '537bbdb12449663433378ee54ede0978.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'admin', 'admin@gmail.com', 123, 1),
(2, 'Milena TacÃ£o', 'mii@gmail.com', 1234, 0),
(3, 'Klayane Silva', 'klay@yahoo.com', 321, 0),
(4, 'Tainara Mendes', 'tata@hotmail.com', 147, 0),
(5, 'mario', 'tacao.mario@gmail.com', 123456, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
