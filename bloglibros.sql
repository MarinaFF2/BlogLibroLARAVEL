-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2020 a las 13:52:31
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bloglibros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignarrol`
--

CREATE TABLE `asignarrol` (
  `idAsignarRol` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignarrol`
--

INSERT INTO `asignarrol` (`idAsignarRol`, `idRol`, `usuario`) VALUES
(1, 2, 'h@h.h'),
(2, 2, 'e@e.e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ISBN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `editorial` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anioEdiccion` int(11) NOT NULL,
  `nPag` int(11) NOT NULL,
  `foto` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpeg',
  `activa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`ISBN`, `nombre`, `autor`, `editorial`, `genero`, `descripcion`, `anioEdiccion`, `nPag`, `foto`, `activa`) VALUES
('8408194453', 'Memorias de una salvaje', 'Bebi Fernández', 'Planeta', 'Juvenil', 'K tiene 19 años y una vida un tanto peculiar. Cuando su padre es asesinado en un ajuste de cuentas, se ve obligada a compaginar sus estudios con un trabajo muy poco convencional: el de recepcionista y chica de los recados en un local de alterne clandestino. Bajo la amenaza de los proxenetas y la asfixia de la deuda, vivirá de cerca los horrores que el sistema de la trata de mujeres conlleva. La experiencia la llevará a gestar una metamorfosis que marcará su paso de la adolescencia a la edad adulta. Las mujeres que allí conoce y la violencia intrínseca al mundo criminal —que también sentirá en sus propias carnes—, hará que comience a pensar en defenderse. Para ello acudirá al club de boxeo de Ram, un chico al que la violencia de género también ha marcado la vida. Pese a las corazas que ambos portan, la curiosidad de este le llevará a interesarse y preocuparse por ella hasta hacerla pensar que quizá sí existan los hombres que aman a las mujeres. Pero un desafortunado suceso hará que las luces de neón comiencen a parpadear', 2018, 448, 'Memorias de una salvaje.jpeg', 1),
('8416689865', 'Por qué las mujeres salvarán el planeta', 'Varias Autoras', 'RAYO VERDE EDITORIAL', 'Reivindicativo', '¿El empoderamiento de las mujeres puede transformar las posibilidades de conseguir la sostenibilidad ambiental? Este libro pretende responder afirmativamente a la pregunta con ensayos y entrevistas que no sólo quieren provocar una reflexión, sino también una acción colectiva para cambiarlo todo. Reunimos voces destacadas de los movimientos feministas y ecologistas internacionales para evidenciar que la igualdad de género es imprescindible para la acción climática. Vandana Shiva, Caroline Lucas, Maria Mies y Yayo Herrero, entre otras, exponen los vínculos que hay entre ecologismo y feminismo en defensa de la justicia social. También mediante el estudio de casos específicos, analizan las formas en que mujeres interactúan en la lucha contra el cambio climático y sus consecuencias. Su voluntad transformadora es capaz de influir en el medio ambiente, pero también en la sociedad, la educación y en las relaciones de poder.', 2019, 288, 'Por qué las mujeres salvarán el planeta.jpeg', 1),
('8417001778', 'Las vidas que dibujamos', 'Óscar Alonso', 'Ediciones B', 'Ilustracion', 'Las ilustraciones de 72 Kilos han conquistado los corazones de miles de personas en las redes sociales. Temas como el amor, los sentimientos y las dudas recorren el\r\n\r\nuniverso artístico de este dibujante, que por fin publica este esperado libro con una selección de sus mejores viñetas, incluyendo material inédito.', 2019, 112, 'Las vidas que dibujamos.jpeg', 1),
('8417773363', 'Vindicación de los derechos de la mujer', 'Mary Wollstonecraft', 'MONTENA', 'Reivindicativo', 'El primer manifiesto feminista revisado por una de las voces actuales más revolucionarias: Bebi.\r\n\r\nDesde su perspectiva única, @SrtaBebi comenta el texto madre del feminismo moderno, Vindicación de los derechos de la mujer, de Mary Wollstonecraft, una relectura con una granada en una mano y un subrayador en la otra.\r\nLa sociedad en la que vivió Mary Wollstonecraft y la nuestra son obviamente diferentes. En las sociedades occidentales la situación de las mujeres ha cambiado drásticamente desde el siglo XVIII. Puede decirse que todas las peticiones de la autora se han ido conquistando una por una. Sin embargo, la lectura de su obra revela aún algo familiarmente inquietante para las mujeres del siglo XX, que buscan un modo de expresión personal y colectivo capaz de hacer saltar (no ya exteriormente, sino interiormente) los estereotipos genéricos del ser y del actuar.', 2019, 224, 'Vindicación de los derechos de la mujer.jpeg', 1),
('8417809007', 'Lo que no te dije', 'Jazmín Ducca ', 'Ediciones B', 'Ilustracion', 'Este proyecto surgió cuando me encontré con alguien de mi pasado y me di cuenta de que tenía cosas que decirle, pero las circunstancias no me lo permitían. Pensé que muchas otras personas podrían haber pasado por una situación similar y que sería bonito darles la oportunidad de que todo el mundo leyese esas palabras que nunca dijeron, para dotarlas de cierto valor y que no se perdiesen.', 2019, 112, 'Lo que no te dije.jpeg', 1),
('8417922296', 'No me cuentes cuentos', 'Varias Autoras', 'MONTENA', 'Reivindicativo', 'No me cuentes cuentos recoge las vidas únicas y fascinantes de cien mujeres españolas dignas del mejor de los cuentos.\r\n\r\nHay un montón de mujeres extraordinarias, está demostrado. Y algunas están asombrosamente cerca. Este libro recoge, en forma de cuento, las vidas extraordinarias de cien mujeres españolas.\r\n\r\nGloria Fuertes, Alaska, Carmen Balcells, Montserrat Caballé, Lola Flores, Margarita Salas, Rosalía de Castro y muchas más mujeres que cambiaron el mundo. Nuestro mundo.\r\n\r\nNo me cuentes cuentos es un proyecto colectivo liderado por Kloshletter y Prodigioso Volcán que busca contar de otra forma la historia inspiradora de cien mujeres españolas con vidas apasionantes que, en muchos casos, han pasado desapercibidas.', 2019, 288, 'No me cuentes cuentos.jpeg', 1),
('841792230X', 'Anónimo era yo', 'Varias Autoras', 'MONTENA', 'Reivindicativo', 'Ahora las voces de Margarita Hickey, Juana Inés de la Cruz, Emilia Pardo Bazán, Rosalía de Castro y Alfonsina Storni suenan más alto que nunca bajo el lápiz inflamable de Bebi.\r\n\r\nUn libro de la colección «Bebi Edita».\r\n\r\nEllas, que escribían escondiendo sus nombres; ellas, que vivían callando; ellas, todas ellas, que fueron sin poder ser y que, aun así, gritaron al mundo su poesía.\r\n\r\nEn las voces de varias poetas encontramos una y otra vez, como una canción demasiado conocida, el miedo, la culpa, la represión. Con su mirada explosiva, Bebi inflama todas las palabras que subyacen en los textos de estas mujeres que se vieron obligadas a vivir a media voz.\r\n\r\nBebi empezó incendiando las redes con miles de seguidores. Poco después inflamó libros; Indomable es un éxito de ventas. Ahora llega para editar su propia colección y seguir quemando.', 2019, 128, 'Anónimo era yo.jpeg', 1),
('8420410799', 'La Emperatriz de los Etéreos', 'Laura Gallego', 'ALFAGUARA', 'Juvenil', 'Cuentan que más allá de los Montes de Hielo, más allá de la Ciudad de Cristal, habita la Emperatriz de los Etéreos en un deslumbrante palacio. Dicen que es tan bella que nadie puede mirarla sin perder la razón. Solo los más osados intentan llegar hasta ella.\r\n\r\nPero Bipa no cree en los cuentos de hadas. No le interesa nada más allá de las cuevas donde vive su gente. En cambio, su amigo Aer, el hijo del extranjero, parece que cada vez se aleja más de la realidad y va dejándose absorber por el brillo de la estrella azul... donde dicen que vive la Emperatriz de los Etéreos. ¿Por qué quiere partir si en el exterior solo hay hielo y, al parecer, lo único que se encuentra es la muerte?\r\n\r\nCuando Aer desaparece rumbo al Palacio de la Emperatriz, Bipa se ve obligada a ir tras él para devolverle a casa. Lleva consigo el Ópalo que le ha prestado Maga, la chamana de la tribu, un colgante que la protegerá del frío y repondrá sus fuerzas. Además, enseguida se sumará a su expedición Nevado, un silencioso gólem de nieve que la ayudará a afrontar los peligros. Durante su intensa búsqueda de Aer, Bipa se afirmará en su propia identidad, la única arma que posee frente a la negación de la naturaleza, que solo conduce a la muerte.', 2017, 320, 'La Emperatriz de los Etéreos.jpeg', 1),
('8449335612', 'Come Comida Real', 'Carlos Ríos', 'Planeta', 'Autoayuda', 'En la actualidad, la mayoría de la población vive engañada con respecto a su alimentación. Utilizando la metáfora de la película Matrix, vivimos en un mundo en el que «no comemos comida real, sino productos que han puesto ante nuestros ojos». Un entorno perfectamente diseñado para el consumo de comestibles insanos: los ultraprocesados. Este entorno está controlado por el lado oscuro de la industria alimentaria, la cual mantiene a la población comprando sus productos en contra de su salud.\r\n\r\nEn este libro, Carlos Ríos nos ofrece el conocimiento científico necesario para cuestionar, indagar y profundizar en nuestra alimentación y en todo lo que la rodea. Nos explica cuáles son las bases del Realfooding, un estilo de vida que persigue desterrar de nuestra dieta los productos ultraprocesados, y nos ofrece consejos prácticos, trucos y recetas para comer saludablemente de forma fácil, rápida y rica. Matrix no se puede enseñar, has de verla con tus propios ojos. ', 2019, 320, 'Come Comida Real.jpeg', 1),
('8467550031', 'Donde los árboles cantan', 'Laura Gallego', 'EDICIONES SM', 'Juvenil', 'Viana, la única hija del duque de Rocagrís, está prometida al joven Robian de Castelmar desde que ambos eran niños. Los dos se aman y se casarán en primavera. Sin embargo, durante los festejos del solsticio de invierno, un arisco montaraz advierte al rey de Nortia y sus caballeros de la amenaza de los bárbaros de las estepas... y tanto Robian como el duque se ven obligados a marchar a la guerra. En tales circunstancias, una doncella como Viana no puede hacer otra cosa que esperar su regreso... y, tal vez, prestar atención a las leyendas que se cuentan sobre el Gran Bosque... el lugar donde los árboles cantan.', 2011, 480, 'Donde los árboles cantan.jpeg', 1),
('8494268619', 'Mi chica revolucionaria', 'Diego Ojeda Sánchez ', 'MueveTuLengua', 'Poesia', 'Amar es transformarse, transformar al otro y con ello al mundo que nos rodea. El amor es una forma de resistencia, un modo de plantar cara a las injusticias, es luchar por un mundo distinto, mejor. Y, en Mi chica revolucionaria, Diego Ojeda lucha contra todo porque está enamorado desde los dedos meñiques de los pies hasta e l revés del alma. Diego Ojeda es sentimiento desbordante, es afecto desatado. Y precisamente es ese desajuste entre la utopía del amor que vive en él y la realidad de este país sumido en crisis y expoliado por sus propios gobernantes, abonado a corruptelas, ese desfase entre su cariño sin barreras y esta desdemocracia, esta bancacracia en la que vivimos, lo que da lugar al tono irónico e incendiario de algunos de los versos de este poemario. Las chicas revolucionaias andan sueltas, vuelan sin bragas y llevan en el bolso un libro de poemas.', 2014, 116, 'Mi chica revolucionaria.jpeg', 1),
('8494567675', 'Amor y asco', 'Bebi Fernández', 'MueveTuLengua', 'Poesia', 'No necesitas ser seguidor o seguidora de @srtabebi para que te hagas con este libro siempre y cuando te guste que te hablen sin pelos en la lengua, con un lenguaje directo, librepensador y un marcado sarcasmo. Así es Bebi que con su lenguaje particular ha revolucionado las redes, y ahora también las librerías, convirtiendo a este libro en un bestseller. Así es este libro, un discurso activista en defensa de los derechos sociales, la ira con la que la autora se enfrenta a hechos injustamente cotidianos, pero sin dejar de lado sus devenires amorosos. De eso va el libro, como la vida misma: de amor y asco.', 2016, 232, 'Amor y asco.jpeg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `idNoticia` int(11) NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'defaulNot.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `usuario`, `asunto`, `fecha`, `descripcion`, `foto`) VALUES
(1, 'h@h.h', 'werwer', '2019-12-10', 'Se ha registrado un nuevo libro', 'defaulNot.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `descripcion`) VALUES
(1, 'Usuario Registrado'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'defaulUsu.jpeg',
  `activo` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`correo`, `pwd`, `nombre`, `apellido`, `foto`, `activo`) VALUES
('5amarinaflo@gmail.com', '85a96cfe07dbc80282ebaffffab73d74', 'werf', 'wer', 'defaulUsu.jpeg', 0),
('albertomartinconsuegral@gmail.com', '2ccd1a8dc77f44e83c58a73b8b42136b', 'Alberto', 'Martin', 'defaulUsu.jpeg', 0),
('amrf21999@gmail.com', '7d4430abb43508b5f5758e21883de4c7', 'Ana', 'Flores', 'defaulUsu.jpeg', 0),
('e@e.e', 'c4ca4238a0b923820dcc509a6f75849b', 'holiii', 'caracola', 'defaulUsu.jpeg', 1),
('h@h.h', 'c4ca4238a0b923820dcc509a6f75849b', 'holiiii', 'hj', 'defaulUsu.jpeg', 1),
('I@I.I', 'c4ca4238a0b923820dcc509a6f75849b', 'JYHJ', 'HGHGJH', 'defaulUsu.jpeg', 1),
('marina@h.h', 'c4ca4238a0b923820dcc509a6f75849b', 'marina', 'flores', 'defaulUsu.jpeg', NULL),
('sa@sa.sa', 'c4ca4238a0b923820dcc509a6f75849b', 'sa', 'sasa', 'defaulUsu.jpeg', NULL),
('w@w.w', 'c4ca4238a0b923820dcc509a6f75849b', 'hjbhjvj', 'hvjhvjhv', 'defaulUsu.jpeg', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignarrol`
--
ALTER TABLE `asignarrol`
  ADD PRIMARY KEY (`idAsignarRol`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignarrol`
--
ALTER TABLE `asignarrol`
  MODIFY `idAsignarRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
