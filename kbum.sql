-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2017 a las 20:59:59
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kbum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empredirector`
--

CREATE TABLE IF NOT EXISTS `empredirector` (
  `id` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empredirector`
--

INSERT INTO `empredirector` (`id`, `idempresa`, `idusuario`) VALUES
(3, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL,
  `folio` varchar(45) DEFAULT NULL,
  `nombre` varchar(200) NOT NULL,
  `empleados` int(11) NOT NULL,
  `giro` varchar(200) NOT NULL,
  `razon` varchar(200) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `email` varchar(45) NOT NULL,
  `sitioweb` varchar(45) NOT NULL,
  `acteconomica` varchar(200) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `njefe` varchar(200) NOT NULL,
  `emailjefe` varchar(100) NOT NULL,
  `anios` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `folio`, `nombre`, `empleados`, `giro`, `razon`, `ubicacion`, `email`, `sitioweb`, `acteconomica`, `telefono`, `njefe`, `emailjefe`, `anios`) VALUES
(5, 'sabnEN5ZgLHyA', 'Telcel', 3000, 'telefonia', 'fisico', 'nose', 'chico_genio_.17@hotmail.com', 'https://www.facebook.com', 'nula', '987979897', 'sllim', 'chico_genio_.17@hotmail.com', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe`
--

CREATE TABLE IF NOT EXISTS `informe` (
  `id` int(11) NOT NULL,
  `informe` longblob,
  `idempresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(200) NOT NULL,
  `respuesta` longblob,
  `tpre` varchar(45) NOT NULL,
  `ttest` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `respuesta`, `tpre`, `ttest`) VALUES
(5, '¿Se encuentra legalmente constituido?', 0x5369206e6f20736520656e6375656e747261206c6567616c6d656e746520636f6e737469747569646f206578697374656e206469666572656e746573206173706563746f73206a7572c3ad6469636f733a2020492e09536f63696564616420416ec3b36e696d61202049492e09526573706f6e736162696c69646164206c696d6974616461204949492e09536f63696564616420436976696c202049562e09536f6369616c204d657263616e74696c2020562e09506572736f6e6120466973696361202056492e09506572736f6e61204d6f72616c20, 'Test Directivo', 'Test Legal'),
(6, '¿Tiene alguna marca, patente o cuenta con la protección industrial necesaria para su negocio?', 0x4578697374656e20696e7374616e6369617320636f6d6f20656c20494d50492c20207175652064612070726f7465636369c3b36e20656e206c6173206469666572656e74657320c3a1726561732e, 'Test Directivo', 'Test Legal'),
(7, '¿Se encuentra al día con el pago de la obligación tributaria?', 0x457320756e61206f626c6967616369c3b36e2061637564697220616e746520656c2053415420792064656dc3a17320646570656e64656e63696173207061726120636f6c61626f72617220636f6e20656c207061676f20636f72726573706f6e6469656e74652061206c6f7320706572696f646f73206c61626f7261646f7320636f6d6f20656d70726573612079612071756520636f6e666f726d652061206c61206c6579206c6f206d61726361206578697374656e206f626c69676163696f6e65732066697363616c65732e204c61206375616c206e6f73207065726d697465206c61626f7261722073696e206e696e67c3ba6e20696e636f6e76656e69656e7465206120717565206e75657374726120656d7072657361207365612073616e63696f6e6164612e, 'Test Directivo', 'Test Legal'),
(8, '¿La empresa posee algún tipo de certificación relativa a estándares de calidad, cumplimiento o seguridad en relación con el ejercicio de sus actividades?', 0x4578697374656e206469666572656e746573206e6f726d6174697669646164657320646570656e6469656e646f20656c20727562726f206f206769726f20646520737520656d7072657361207175652073652070756564656e20656e636f6e7472617220656e206c61733a20204c6173204e6f726d6173204f66696369616c6573204d65786963616e617320284e4f4d2773292c20656e206375616e746f20612053656775726964616420652048696769656e652064656e74726f206465206c6120656d707265736120736520656e6375656e7472616e206c6173204e6f726d6173207175652065787469656e64656e206c6120536563726574617269612064652054726162616a6f20792050726576656e6369c3b36e20536f6369616c202853545053292020792074616d6269c3a96e206c6173204e6f726d617320496e7465726e6163696f6e616c6573202849534f292e, 'Test Directivo', 'Test Legal'),
(9, '¿Conoces todas las normativas aplicables a tu empresa?', 0x4578697374656e206469666572656e746573206e6f726d6174697669646164657320646570656e6469656e646f20656c20727562726f206f206769726f20646520737520656d7072657361207175652073652070756564656e20656e636f6e7472617220656e206c61733a20204c6173204e6f726d6173204f66696369616c6573204d65786963616e617320284e4f4d2773292c20656e206375616e746f20612053656775726964616420652048696769656e652064656e74726f206465206c6120656d707265736120736520656e6375656e7472616e206c6173204e6f726d6173207175652065787469656e64656e206c6120536563726574617269612064652054726162616a6f20792050726576656e6369c3b36e20536f6369616c202853545053292020792074616d6269c3a96e206c6173204e6f726d617320496e7465726e6163696f6e616c6573202849534f292e, 'Test Directivo', 'Test Legal'),
(10, '¿Aplicas las normatividades?', 0x4578697374656e206469666572656e746573206e6f726d6174697669646164657320646570656e6469656e646f20656c20727562726f206f206769726f20646520737520656d7072657361207175652073652070756564656e20656e636f6e7472617220656e206c61733a20204c6173204e6f726d6173204f66696369616c6573204d65786963616e617320284e4f4d2773292c20656e206375616e746f20612053656775726964616420652048696769656e652064656e74726f206465206c6120656d707265736120736520656e6375656e7472616e206c6173204e6f726d6173207175652065787469656e64656e206c6120536563726574617269612064652054726162616a6f20792050726576656e6369c3b36e20536f6369616c202853545053292020792074616d6269c3a96e206c6173204e6f726d617320496e7465726e6163696f6e616c6573202849534f292e, 'Test Directivo', 'Test Legal'),
(11, '¿Dispones y mantienes actualizado los permisos o autorizaciones requerida para la ejecución de actividades comerciales?', 0x4578697374656e207065726d69736f732061206e6976656c204c6f63616c2c204573746174616c2079204665646572616c207061726120656c206d616e74656e696d69656e746f207920656c20656a6572636572206c61626f7220656e20756e6120656d70726573612e, 'Test Directivo', 'Test Legal'),
(12, '¿Has generado un Aviso de privacidad, para cumplir con la Ley de Protección de Datos personales y lo tienes disponibles para tus usuarios y clientes?', 0x4573206e656365736172696f207265616c697a617220656c20617669736f20646520707269766163696461642c206dc3a173207369206375656e74617320636f6e206461746f7320706572736f6e616c6573206465202074757320636c69656e746573206f207573756172696f7320636f6e666f726d6520616c20417274c3ad63756c6f20313620636f6e737469747563696f6e616c2e, 'Test Directivo', 'Test Legal'),
(13, '¿Tienes información tuya o de terceros con los que contratas, respecto de la empresa que te interese proteger su confidencialidad?', 0x4573206e656365736172696f207265616c697a617220656c20617669736f20646520707269766163696461642c206dc3a173207369206375656e74617320636f6e206461746f7320706572736f6e616c6573206465202074757320636c69656e746573206f207573756172696f7320636f6e666f726d6520616c20417274c3ad63756c6f20313620636f6e737469747563696f6e616c2e, 'Test Directivo', 'Test Legal'),
(14, '¿Tienes contratos o convenios firmados con tus proveedores?', 0x4573206e656365736172696f2065737461626c6563657220636c617573756c617320657370656369666963617320646f6e64652062656e6566696369616e20616d626173207061727465732079206576697461722070726f626c656d6173206c6567616c65732e20204173c3ad206d616e74656e6472c3a173206275656e612072656c616369c3b36e20636f6e207475732070726f766565646f7265732e, 'Test Directivo', 'Test Legal'),
(15, '¿Tienes empleados?', 0x506572666563746f, 'Test Directivo', 'Test Legal'),
(16, '¿Existen por escrito los contratos con empleados?', 0x5265637565726461206669726d617220706f72206573637269746f20636f6e747261746f7320636f6e2074757320656d706c6561646f7320636f6e666f726d6520616c20417274c3ad63756c6f31323320436f6e737469747563696f6e616c20792062616a6f206c61204c6579204665646572616c2064652054726162616a6f2e, 'Test Directivo', 'Test Legal'),
(17, '¿Brindas las prestaciones a tus empleados (Seguro médico, prestaciones crediticias y demás?', 0x5265637565726461206669726d617220706f72206573637269746f20636f6e747261746f7320636f6e2074757320656d706c6561646f7320636f6e666f726d6520616c20417274c3ad63756c6f31323320436f6e737469747563696f6e616c20792062616a6f206c61204c6579204665646572616c2064652054726162616a6f2e, 'Test Directivo', 'Test Legal'),
(18, '¿Sabes cuáles son tus derechos y obligaciones como Jefe?', 0x5265637565726461206669726d617220706f72206573637269746f20636f6e747261746f7320636f6e2074757320656d706c6561646f7320636f6e666f726d6520616c20417274c3ad63756c6f31323320436f6e737469747563696f6e616c20792062616a6f206c61204c6579204665646572616c2064652054726162616a6f2e, 'Test Directivo', 'Test Legal'),
(19, '¿Sabes cuáles son los derechos y obligaciones para tu empleado?', 0x5265637565726461206669726d617220706f72206573637269746f20636f6e747261746f7320636f6e2074757320656d706c6561646f7320636f6e666f726d6520616c20417274c3ad63756c6f31323320436f6e737469747563696f6e616c20792062616a6f206c61204c6579204665646572616c2064652054726162616a6f2e, 'Test Directivo', 'Test Legal'),
(20, '¿La empresa garantiza condiciones justas y favorables en la composición de remuneración, liquidaciones y despidos?', 0x4465626573206f6273657276617220717565206c6120656d707265736120676172616e7469636520717565206c617320636f6e646963696f6e6573207365616e206a75737461732079206661766f7261626c657320636f6e666f726d652061206465726563686f2e, 'Test Empleado', 'Test Legal'),
(21, '¿La empresa ha firmado contrato físico contigo?', 0x517565206d616c20706c616e, 'Test Empleado', 'Test Legal'),
(22, '¿Considera discriminación en su empresa en algún rubro?', 0x446562657320636f6e73696465726172207175652074757320656d706c6561646f73207365207369656e74616e20656e20756e20616d6269656e74652073696e206469736372696d696e616369c3b36e2e, 'Test Empleado', 'Test Legal'),
(23, '¿La empresa conoce, respeta y apoya la protección de derechos humanos en su ámbito de trabajo?', 0x446562657320706f6e657220756e20706c616e20656e206d617263686120706172612068616365722076616c6572206c612070726f7465636369c3b36e2064652074757320656d706c6561646f732e, 'Test Empleado', 'Test Legal'),
(24, '¿La empresa garantiza la honradez, legalidad y claridad en todas sus transacciones o procesos de comercializaciones?', 0x4465626573206d616e74656e657220656e206f7264656e206c6f732070726f6365736f7320646520747520696e746572696f722070617261207175652074757320656d706c6561646f73207665616e20636f6e20686f6e726164657a2c206c6567616c6964616420792073656775726964616420746f646f206c6f20717565207265616c697a61732e, 'Test Empleado', 'Test Legal'),
(25, '¿Considera que su empresa trabaja bajo ética profesional?', 0x466f6d656e746120636f6e7374616e74656d656e7465206c6120696d706f7274616e63696120717565207469656e65206c6120c3a9746963612c206d6f7469766120792072656375657264612020612074757320656d706c6561646f73206c6120696d706f7274616e636961206465206c6f732076616c6f72657320636f6e206c6f7320717565206375656e746120747520656d70726573612e, 'Test Empleado', 'Test Legal'),
(26, '¿Sabes cuáles son tus derechos y obligaciones como empleado?', 0x446562657320706f6e657220616c2074616e746f20612074757320656d706c6561646f73206465206c6f73206465726563686f732079206f626c69676163696f6e657320636f6e206c617320717565206375656e74616e206465206163756572646f20636f6e206c61204c6579204665646572616c2064652054726162616a6f2e2028417274c3ad63756c6f203133342d2031333529, 'Test Empleado', 'Test Legal'),
(27, '¿Sabes cuáles son los derechos y obligaciones de tu Jefe?', 0x446562657320706f6e657220616c2074616e746f20612074757320656d706c6561646f73206465206c6f73206465726563686f732079206f626c69676163696f6e657320636f6e206c617320717565206375656e74616e206465206163756572646f20636f6e206c61204c6579204665646572616c2064652054726162616a6f2e2028417274c3ad63756c6f2031333220792031333329, 'Test Empleado', 'Test Legal'),
(28, '¿Los procesos y sistemas de la empresa han sido documentados y es información accesible?', 0x446172206120636f6e6f6365722061206c6f7320656d706c6561646f73206c6f732070726f6365736f7320792073697374656d617320717565206d616e656a61206c6120656d70726573612e, 'Test Empleado', 'Test Legal'),
(29, '¿Te sientes protegido y has tenido apoyo de tu jefe ante alguna circunstancia?', 0x4272696e6461722061706f796f20612074757320656d706c6561646f73206d6f737472616e646f20656d706174c3ad6120686163696120656c6c6f73207920636f6e7369646572c3a16e646f6c6f7320636f6d6f20656e74657320696d706f7274616e7465732064656e74726f206465206c6120656d70726573612e, 'Test Empleado', 'Test Legal'),
(30, '¿Te brindan el equipo de protección y seguridad para desempeñar tus labores?', 0x4465206163756572646f2061206c61205365637265746172c3ad612064652054726162616a6f20792050726576656e6369c3b36e20536f6369616c202853545053292064656265732061706c69636172206c6173204e6f726d61732064652053656775726964616420652048696769656e652064656e74726f20646520747520656d70726573612e204e4f4d2d3031372d535450532d323030382045717569706f2064652050726f7465636369c3b36e20506572736f6e616c2e, 'Test Empleado', 'Test Legal'),
(31, '¿Consideras que tu empresa cuenta con las normativas necesarias?', 0x4465206163756572646f2061206c61205365637265746172c3ad612064652054726162616a6f20792050726576656e6369c3b36e20536f6369616c202853545053292064656265732061706c69636172206c6173204e6f726d61732064652053656775726964616420652048696769656e652064656e74726f20646520747520656d70726573612c206173c3ad20636f6d6f206c612049534f2d39303031206c61206375616c20657374c3a120656e666f6361646120656e206c61206f7267616e697a616369c3b36e2070617261206272696e6461722063616c696461642064656e74726f20646520756e6120656d70726573612c2049534f2d3331303030204e6f726d6120496e7465726e6163696f6e616c206465206c61204765737469c3b36e2064656c2052696573676f2e, 'Test Empleado', 'Test Legal'),
(32, '¿Aplican normativas en tu empresa?', 0x4465206163756572646f2061206c61205365637265746172c3ad612064652054726162616a6f20792050726576656e6369c3b36e20536f6369616c202853545053292064656265732061706c69636172206c6173204e6f726d61732064652053656775726964616420652048696769656e652064656e74726f20646520747520656d70726573612c206173c3ad20636f6d6f206c612049534f2d39303031206c61206375616c20657374c3a120656e666f6361646120656e206c61206f7267616e697a616369c3b36e2070617261206272696e6461722063616c696461642064656e74726f20646520756e6120656d70726573612c202049534f2d3331303030204e6f726d6120496e7465726e6163696f6e616c206465206c61204765737469c3b36e2064656c2052696573676f2e, 'Test Empleado', 'Test Legal'),
(33, '¿Realizan auditoria constante en tu empresa?', 0x4465626573206c6c6576617220756e20636f6e74726f6c206465206c6f732070726f6365736f7320717565207365206c6c6576616e2061206361626f2064656e74726f20646520747520656d70726573612070617261206c61206576616c75616369c3b36e2079206d656a6f72616d69656e746f20646520656c6c61732e202849534f2d31393031312044697265637472696365732070617261206c612041756469746f726961206465206c6f732053697374656d6173206465204765737469c3b36e292e, 'Test Empleado', 'Test Legal'),
(34, '¿Consideras que es un lugar ético y legal para trabajar?', 0x4465626573206d616e74656e657220656e206f7264656e206c6f732070726f6365736f7320646520747520696e746572696f722070617261207175652074757320656d706c6561646f73207665616e20636f6e20686f6e726164657a2c206c6567616c6964616420792073656775726964616420746f646f206c6f20717565207265616c697a61732e, 'Test Empleado', 'Test Legal'),
(35, '¿Tienes clara tu misión, visión y valores? ', '', 'Test Directivo', 'Test Organizacional'),
(36, '¿Soy honesto con mis empleados?', NULL, 'Test Directivo', 'Test Organizacional'),
(37, '¿Pido Feedback y lo aplico con mis empleados?', NULL, 'Test Directivo', 'Test Organizacional'),
(38, '¿Reconoces y motivas a tu empleado cuando hace bien su trabajo?', NULL, 'Test Directivo', 'Test Organizacional'),
(39, '¿Constantemente procuro ser un mejor propietario y líder, proporciono dirección y superviso a mis empleados para que lo lleven a cabo?', NULL, 'Test Directivo', 'Test Organizacional'),
(40, '¿Recibes constantes quejas de tus empleados?', NULL, 'Test Directivo', 'Test Organizacional'),
(41, '¿Inviertes en la formación de tus empleados?', NULL, 'Test Directivo', 'Test Organizacional'),
(42, '¿Existe rotación de funciones entre el personal?', NULL, 'Test Directivo', 'Test Organizacional'),
(43, '¿La estructura interna es conocida por todos los empleados de la empresa?', NULL, 'Test Directivo', 'Test Organizacional'),
(44, '¿Aplicas proceso de selección del personal?', NULL, 'Test Directivo', 'Test Organizacional'),
(45, '¿Sigues tu instinto en la toma de decisiones?', NULL, 'Test Directivo', 'Test Organizacional'),
(46, '¿Realizas evaluaciones periódicas del desempeño de los empleados?', NULL, 'Test Directivo', 'Test Organizacional'),
(47, '¿Consideras que existe un buen clima laboral en tu empresa?', NULL, 'Test Directivo', 'Test Organizacional'),
(48, '¿Existe una comunicación efectiva con tus empleados?', NULL, 'Test Directivo', 'Test Organizacional'),
(49, '¿Existe mucha inasistencia de tus trabajadores?', NULL, 'Test Directivo', 'Test Organizacional'),
(50, '¿Recibes regularmente capacitaciones?', NULL, 'Test Empleado', 'Test Organizacional'),
(51, '¿Si haces un buen trabajo, el jefe lo reconoce y te da algún incentivo?', NULL, 'Test Empleado', 'Test Organizacional'),
(52, '¿Te hace sentir tu jefe y compañeros a gusto en tu trabajo?', NULL, 'Test Empleado', 'Test Organizacional'),
(53, '¿Sufres de discriminación?', NULL, 'Test Empleado', 'Test Organizacional'),
(54, '¿Sabes claramente los objetivos, misión y visión de la empresa?', NULL, 'Test Empleado', 'Test Organizacional'),
(55, '¿Te sientes escuchado por tu jefe?', NULL, 'Test Empleado', 'Test Organizacional'),
(56, '¿Tus opiniones son consideradas a la hora de la toma de decisión del jefe?', NULL, 'Test Empleado', 'Test Organizacional'),
(57, '¿Tienes acceso a la información institucional y operacional de la empresa?¿Tus opiniones son consideradas a la hora de la toma de decisión del jefe?', NULL, 'Test Empleado', 'Test Organizacional'),
(58, '¿Te sientes seguro en el desarrollo de tus actividades?', NULL, 'Test Empleado', 'Test Organizacional'),
(59, '¿Respetan tu horario de trabajo?', NULL, 'Test Empleado', 'Test Organizacional'),
(60, '¿La empresa tiene establecido programas anuales de inducción y capacitación?', NULL, 'Test Empleado', 'Test Organizacional'),
(61, '¿Existe una comunicación efectiva entre tus compañeros?', NULL, 'Test Empleado', 'Test Organizacional'),
(62, '¿Estoy orientado a solucionar problemas?', NULL, 'Test Empleado', 'Test Organizacional'),
(63, '¿Te brindad seguridad en la realización de tus actividades?', NULL, 'Test Empleado', 'Test Organizacional'),
(64, '¿Consideras que tu empresa tiene un orden adecuado en el procedimiento de sus actividades?', NULL, 'Test Empleado', 'Test Organizacional'),
(65, '¿Mantiene actualizados sus estados financieros?', NULL, 'Test Directivo', 'Test Finanzas'),
(66, '¿Tiene una adecuada calificación crediticia?', NULL, 'Test Directivo', 'Test Finanzas'),
(67, '¿Mantiene un adecuado cumplimiento y capacidad de pago de sus compromisos adquiridos y dispone de los bienes y recursos para cumplir con tus obligaciones?', NULL, 'Test Directivo', 'Test Finanzas'),
(68, '¿Conoces tu margen de beneficios?', NULL, 'Test Directivo', 'Test Finanzas'),
(69, '¿Estableces presupuesto para distintas acciones/ áreas en la empresa?', NULL, 'Test Directivo', 'Test Finanzas'),
(70, '¿Conoces la rentabilidad de cada una de sus fuentes?', NULL, 'Test Directivo', 'Test Finanzas'),
(71, '¿Tomas en cuenta tu información financiera en la toma de decisiones?', NULL, 'Test Directivo', 'Test Finanzas'),
(72, '¿Tienes un orden en tu registro contable?', NULL, 'Test Directivo', 'Test Finanzas'),
(73, '¿Identificas cuando tienes pérdidas o ganancias?', NULL, 'Test Directivo', 'Test Finanzas'),
(74, '¿Tienes liquidez para cubrir tus cuentas a pagar?', NULL, 'Test Directivo', 'Test Finanzas'),
(75, '¿Tienes un asesor contable?', NULL, 'Test Directivo', 'Test Finanzas'),
(76, '¿Cuenta con efectivo para cubrir sus obligaciones en el corto plaza?', NULL, 'Test Directivo', 'Test Finanzas'),
(77, '¿Conoces cuáles serán los ingresos y egresos que se presentaran en un periodo determinado?', NULL, 'Test Directivo', 'Test Finanzas'),
(78, '¿Consideras que tienes más egresos que ingresos?', NULL, 'Test Directivo', 'Test Finanzas'),
(79, '¿Consideras que llevas finanzas sanas?', NULL, 'Test Directivo', 'Test Finanzas'),
(80, '¿Te pagan en tiempo y forma?', NULL, 'Test Empleado', 'Test Finanzas'),
(81, '¿Consideras que la empresa lleva de forma desordenada sus finanzas?', NULL, 'Test Empleado', 'Test Finanzas'),
(82, '¿Se tienen las cuentas al día y se revisa cada mes?', NULL, 'Test Empleado', 'Test Finanzas'),
(83, '¿Establecen presupuestos para las diferentes áreas de su empresa y se cumplen?', NULL, 'Test Empleado', 'Test Finanzas'),
(84, ' ¿Las empresa les comparte como están las finanzas?', NULL, 'Test Empleado', 'Test Finanzas'),
(85, '¿Han habido despidos frecuentemente?', NULL, 'Test Empleado', 'Test Finanzas'),
(86, '¿Llevan un control adecuado de su inventario?', NULL, 'Test Empleado', 'Test Finanzas'),
(87, '¿Se tienen múltiples cuentas de ingreso?', NULL, 'Test Empleado', 'Test Finanzas'),
(88, '¿Consideras que sus recursos están correctamente administrados?', NULL, 'Test Empleado', 'Test Finanzas'),
(89, '¿Consideras que la empresa tiene solvencia?', NULL, 'Test Empleado', 'Test Finanzas'),
(90, '¿Consideras que tu empresa es estable?', NULL, 'Test Empleado', 'Test Finanzas'),
(91, '¿La empresa cumple con el reparto de utilidades?', NULL, 'Test Empleado', 'Test Finanzas'),
(92, '¿Tu empresa cumple en tiempo y forma con sus obligaciones fiscales?', NULL, 'Test Empleado', 'Test Finanzas'),
(93, '¿Si tienes algún problema económico la empresa es accesible al prestarte?', NULL, 'Test Empleado', 'Test Finanzas'),
(94, '¿Consideras que sus objetivos van de acuerdo con su presupuesto asignado?', NULL, 'Test Empleado', 'Test Finanzas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE IF NOT EXISTS `puesto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tusuario` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`id`, `nombre`, `tusuario`, `idempresa`, `idusuario`) VALUES
(4, 'Director', 0, 5, 5),
(5, 'Jefe', 1, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`id`, `idempresa`, `idusuario`, `estado`) VALUES
(1, 5, 5, 0),
(2, 5, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testpre`
--

CREATE TABLE IF NOT EXISTS `testpre` (
  `id` int(11) NOT NULL,
  `idpre` int(11) NOT NULL,
  `idtest` int(11) NOT NULL,
  `ttest` int(11) NOT NULL,
  `respuesta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(45) NOT NULL,
  `puesto` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `roles` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `puesto`, `password`, `status`, `roles`) VALUES
(4, 'LUIS ALFREDO HERNÁNDEZ MENDOZA', 'chico_genio_.17@hotmail.com', 'Administrador', '879bd6588c29ec4823571d2b7ecd2fb7', 1, 'admin'),
(5, 'JOSE LUIS PEREZ MENDOZA', 'chic_genio_.17@hotmail.com', 'Director', '879bd6588c29ec4823571d2b7ecd2fb7', 0, 'direct');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empredirector`
--
ALTER TABLE `empredirector`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empredirect_idx` (`idempresa`),
  ADD KEY `usudirect_idx` (`idusuario`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informe`
--
ALTER TABLE `informe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inforempresa_idx` (`idempresa`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `puestousuario_idx` (`idusuario`),
  ADD KEY `puestoempresa_idx` (`idempresa`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testempresa_idx` (`idempresa`),
  ADD KEY `testusuario_idx` (`idusuario`);

--
-- Indices de la tabla `testpre`
--
ALTER TABLE `testpre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pretestpre_idx` (`idpre`),
  ADD KEY `testtestpre_idx` (`idtest`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empredirector`
--
ALTER TABLE `empredirector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `informe`
--
ALTER TABLE `informe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `testpre`
--
ALTER TABLE `testpre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empredirector`
--
ALTER TABLE `empredirector`
  ADD CONSTRAINT `empredirect` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usudirect` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `informe`
--
ALTER TABLE `informe`
  ADD CONSTRAINT `inforempresa` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD CONSTRAINT `puestEmpresa` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `puestUsuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `testempresa` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `testusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `testpre`
--
ALTER TABLE `testpre`
  ADD CONSTRAINT `pretestpre` FOREIGN KEY (`idpre`) REFERENCES `preguntas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `testtestpre` FOREIGN KEY (`idtest`) REFERENCES `test` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
