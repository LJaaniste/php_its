SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `tallinn_marathon` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nimi` varchar(8),
  `vanus` int,
  `tel` varchar(50),
  `riik` varchar(50),
  `sugu` varchar(50),
  `tsargi_suurus` varchar(50),
  `registreerimine` DATE,
  `finish` varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO tallinn_marathon (id, nimi, vanus, tel, riik, sugu, tsargi_suurus, registreerimine, finish) VALUES
(1, 'Tauno', 80, '4437481647', 'Lithuania', 'Male', '2XL', '2024-02-20', '17:29'),
(2, 'Kalju', 72, '6665086723', 'Lithuania', 'Female', 'XS', '2024-02-06', '18:27'),
(3, 'Heino', 25, NULL, 'Latvia', 'Female', 'XL', '2024-02-03', '10:33'),
(4, 'Ants', 54, NULL, 'Finland', 'Male', '2XL', '2024-01-04', '6:32'),
(5, 'Eerik', 50, '6927890394', 'Finland', 'Female', 'L', '2024-02-16', '23:21'),
(6, 'Siim', 61, NULL, 'Finland', 'Female', 'XS', '2024-02-03', '19:12');
(7, 'Leho', 51, '5646571309', 'Finland', 'Non-binary', 'XL', '1/21/2024', '18:33');
(8, 'Heino', 77, '1921407527', 'Latvia', 'Male', 'M', '1/23/2024', '15:19');
(9, 'Mihkel', 78, '2236138635', 'Lithuania', 'Male', 'XL', '1/24/2024', '18:47');
(10, 'Kaspar', 64, '8028978838', 'Finland', 'Female', 'L', '1/29/2024', '11:20');
(11, 'Kaur', 81, null, 'Latvia', 'Male', 'XL', '2/1/2024', '9:28');
(12, 'Villem', 72, null, 'Finland', 'Male', 'L', '1/22/2024', '5:29');
(13, 'Leho', 71, null, 'Finland', 'Male', 'L', '2/20/2024', '5:31');
(14, 'Viljar', 35, '7192482874', 'Finland', 'Male', '2XL', '2/13/2024', '17:15');
(15, 'Andres', 70, '1667228386', 'Lithuania', 'Female', 'M', '2/9/2024', '12:49');
(16, 'Lauri', 69, '4012998248', 'Latvia', 'Female', 'M', '1/12/2024', '11:32');
(17, 'Olev', 50, '6997706547', 'Finland', 'Male', 'M', '2/7/2024', '2:31');
(18, 'Taavi', 84, '8712412917', 'Finland', 'Male', '3XL', '2/15/2024', '18:19');
(19, 'Heino', 48, '9335975899', 'Lithuania', 'Male', 'M', '1/5/2024', '4:35');
(20, 'Tauno', 45, '8616189457', 'Latvia', 'Male', '2XL', '1/15/2024', '9:02');
(21, 'Kalju', 82, '3365950345', 'Finland', 'Male', '3XL', '1/6/2024', '13:04');
(22, 'Mihkel', 71, null, 'Finland', 'Genderfluid', '2XL', '1/5/2024', '20:06');
(23, 'Mati', 22, '3584506414', 'Estonia', 'Male', '3XL', '2/4/2024', '11:01');
(24, 'Indrek.', 74, '6972437341', 'Finland', 'Male', 'L', '2/18/2024', '17:06');
(25, 'Rain', 49, '3416375539', 'Finland', 'Female', 'XS', '2/19/2024', '13:42');
(26, 'Siim', 31, '5031090821', 'Finland', 'Male', '3XL', '1/27/2024', '22:18');
(27, 'Madis', 26, '6085464041', 'Lithuania', 'Male', 'L', '1/20/2024', '14:48');
(28, 'Arvo', 34, '6794673979', 'Estonia', 'Male', '3XL', '1/18/2024', '20:48');
(29, 'Vello', 38, '9658441609', 'Finland', 'Male', 'M', '1/16/2024', '16:03');
(30, 'Ćlo', 68, '2794850787', 'Finland', 'Female', 'L', '2/13/2024', '15:46');
(31, 'Siim', 85, '6643115058', 'Estonia', 'Female', 'S', '2/4/2024', '15:00');
(32, 'Meelis', 79, '9495258343', 'Finland', 'Female', 'S', '2/2/2024', '1:36');
(33, 'Kalju', 38, '7803097585', 'Finland', 'Female', 'S', '1/17/2024', '0:36');
(34, 'Sven', 62, '1685943058', 'Lithuania', 'Female', 'L', '1/14/2024', '16:35');
(35, 'Sven', 41, '7776852060', 'Lithuania', 'Non-binary', 'M', '1/2/2024', '10:36');
(36, 'Taavi', 47, '5567104945', 'Finland', 'Female', '3XL', '1/17/2024', '18:18');
(37, 'Sven', 58, '9906749643', 'Finland', 'Male', 'XS', '2/22/2024', '0:39');
(38, 'Eerik', 65, null, 'Finland', 'Male', 'XL', '1/14/2024', '21:00');
(39, 'Ćlo', 53, '5973411465', 'Estonia', 'Female', '2XL', '2/15/2024', '0:37');
(40, 'Jaak', 55, '4445981350', 'Latvia', 'Female', '3XL', '2/21/2024', '21:02');
(41, 'Arvo', 48, '6371389101', 'Finland', 'Male', 'XS', '2/3/2024', '17:12');
(42, 'Elmar', 46, '8105229797', 'Finland', 'Male', '2XL', '1/6/2024', '14:17');
(43, 'Olev', 62, null, 'Latvia', 'Female', 'XS', '1/31/2024', '18:33');
(44, 'Urmas', 65, '5071779418', 'Estonia', 'Female', 'XS', '1/25/2024', '10:17');
(45, 'Eerik', 30, '9661717685', 'Estonia', 'Male', 'XL', '1/1/2024', '3:44');
(46, 'Arvo', 75, null, 'Finland', 'Female', 'L', '1/14/2024', '5:23');
(47, 'Villem', 69, null, 'Lithuania', 'Male', 'M', '2/17/2024', '21:58');
(48, 'Kaur', 21, '5285256005', 'Estonia', 'Male', 'L', '1/27/2024', '1:29');
(49, 'Meelis', 55, '3423484743', 'Finland', 'Male', '3XL', '2/17/2024', '2:13');
(50, 'Vallo', 29, null, 'Lithuania', 'Male', '2XL', '1/12/2024', '4:45');
(51, 'Rasmus', 29, '1929693769', 'Estonia', 'Non-binary', '2XL', '1/15/2024', '11:16');
(52, 'Jaak', 71, '8944756279', 'Finland', 'Female', '3XL', '1/10/2024', '7:26');
(53, 'Raivo', 74, '3759358232', 'Latvia', 'Male', 'S', '1/6/2024', '11:46');
(54, 'Tarmo', 45, '3595108094', 'Lithuania', 'Male', 'M', '1/22/2024', '7:43');
(55, 'Aimar', 59, '5012583201', 'Lithuania', 'Male', 'XS', '2/20/2024', '6:08');
values (56, 'Tiit', 61, '3566577262', 'Finland', 'Female', 'L', '2/24/2024', '22:27');
(57, 'Meelis', 51, '4297240330', 'Lithuania', 'Male', 'L', '1/5/2024', '5:45');
(58, 'Olev', 39, null, 'Estonia', 'Female', 'S', '1/14/2024', '11:41');
(59, 'Tauno', 23, null, 'Finland', 'Male', '3XL', '2/12/2024', '17:18');
(60, 'Viljar', 63, '2475111871', 'Lithuania', 'Bigender', 'L', '1/31/2024', '7:17');
(61, 'Kristjan', 38, '4594540476', 'Finland', 'Male', 'M', '1/3/2024', '16:38');
(62, 'Ćlar', 77, null, 'Finland', 'Female', 'S', '2/26/2024', '2:52');
(63, 'Mart', 51, null, 'Finland', 'Polygender', 'XL', '2/7/2024', '2:49');
(64, 'TĆµnis', 67, '9942432955', 'Finland', 'Male', 'XL', '2/18/2024', '12:23');
(65, 'Oliver', 70, '1425661271', 'Finland', 'Female', 'XS', '1/31/2024', '17:05');
(66, 'Kaur', 74, '7396146134', 'Finland', 'Female', 'XL', '1/15/2024', '9:49');
(67, 'Elmar', 73, '7518777191', 'Finland', 'Male', '3XL', '1/11/2024', '7:53');
(68, 'Raivo', 54, '2517294401', 'Finland', 'Male', 'L', '1/19/2024', '9:27');
(69, 'Silver', 32, '4661063416', 'Finland', 'Female', '3XL', '2/6/2024', '3:59');
(70, 'Kaspar', 22, '4615552337', 'Estonia', 'Female', 'L', '2/16/2024', '20:16');
(71, 'Urmas', 61, '2628785735', 'Latvia', 'Male', '3XL', '2/23/2024', '20:55');
(72, 'Taavi', 50, '6019634702', 'Latvia', 'Female', 'XS', '1/2/2024', '10:20');
(73, 'Andres', 83, '3765286979', 'Latvia', 'Female', 'XS', '1/13/2024', '20:03');
(74, 'Urmas', 83, '7911659346', 'Lithuania', 'Male', 'S', '2/7/2024', '6:31');
(75, 'Madis', 77, '2343133654', 'Finland', 'Female', '2XL', '1/16/2024', '8:55');
(76, 'Siim', 54, '8365852166', 'Finland', 'Female', '3XL', '1/7/2024', '23:30');
(77, 'Indrek.', 56, '7869570887', 'Finland', 'Male', '3XL', '1/10/2024', '9:59');
(78, 'Tiit', 69, null, 'Finland', 'Male', '3XL', '2/8/2024', '20:42');
(79, 'Mati', 24, null, 'Estonia', 'Female', 'XS', '1/31/2024', '22:02');
(80, 'Villem', 83, null, 'Finland', 'Female', '2XL', '1/14/2024', '17:31');
(81, 'Kristjan', 28, null, 'Lithuania', 'Male', 'S', '1/1/2024', '5:33');
(82, 'Rasmus', 18, '2188884817', 'Finland', 'Male', 'XS', '2/2/2024', '0:08');
(83, 'Aimar', 57, null, 'Finland', 'Female', 'S', '1/3/2024', '17:37');
(84, 'Mihkel', 31, '5946323982', 'Finland', 'Female', '3XL', '1/2/2024', '18:06');
(85, 'Silver', 73, '2708697320', 'Finland', 'Female', 'XL', '1/26/2024', '12:18');
(86, 'Urmas', 83, '4561761294', 'Finland', 'Male', 'XS', '1/7/2024', '5:38');
(87, 'Ćlo', 57, '3725351578', 'Latvia', 'Female', '3XL', '1/31/2024', '19:22');
(88, 'Kaarel', 61, '4856638236', 'Lithuania', 'Male', 'M', '1/17/2024', '22:06');
(89, 'Silver', 69, '7708847273', 'Estonia', 'Male', 'XS', '1/31/2024', '13:47');
(90, 'Elmar', 28, null, 'Finland', 'Female', 'L', '1/26/2024', '5:43');
(91, 'Mart', 63, '4946846217', 'Lithuania', 'Female', 'XS', '1/8/2024', '23:28');
(92, 'Rasmus', 66, '5709693811', 'Estonia', 'Male', 'L', '2/9/2024', '16:26');
(93, 'Rain', 51, '5047387081', 'Finland', 'Female', 'XL', '1/28/2024', '10:38');
(94, 'Vello', 66, '1193396661', 'Lithuania', 'Male', 'XS', '1/1/2024', '13:39');
(95, 'TĆµnis', 22, '1941691373', 'Estonia', 'Male', '3XL', '2/16/2024', '15:43');
(96, 'Ćlar', 72, '5322377257', 'Estonia', 'Female', '2XL', '2/7/2024', '9:21');
(97, 'Vallo', 32, '1113397030', 'Finland', 'Male', '3XL', '2/18/2024', '21:30');
(98, 'Joosep', 22, '6678517580', 'Estonia', 'Female', 'XL', '2/19/2024', '2:05');
(99, 'Madis', 82, '7539778849', 'Lithuania', 'Female', 'XL', '1/4/2024', '5:31');
(100, 'Leho', 64, '9242336421', 'Finland', 'Female', 'M', '2/10/2024', '21:50');
(101, 'Peeter', 74, '7429422863', 'Finland', 'Female', 'XS', '1/20/2024', '12:06');
(102, 'TĆµnis', 74, '2486835040', 'Lithuania', 'Non-binary', 'XS', '1/8/2024', '6:45');
(103, 'Rasmus', 50, null, 'Latvia', 'Male', 'XL', '1/30/2024', '19:50');
(104, 'Arvo', 24, null, 'Finland', 'Female', 'M', '2/11/2024', '20:14');
(105, 'Siim', 32, null, 'Finland', 'Male', 'XL', '2/27/2024', '6:32');
(106, 'Tanel', 74, '1716237863', 'Lithuania', 'Female', 'S', '1/3/2024', '18:51');
(107, 'Joosep', 22, '4012162053', 'Finland', 'Agender', '2XL', '1/11/2024', '2:51');
(108, 'Meelis', 76, '6354616290', 'Finland', 'Female', 'XL', '1/6/2024', '7:56');
(109, 'Urmas', 31, '5474003902', 'Estonia', 'Male', '3XL', '1/9/2024', '8:47');
(110, 'Vello', 53, '6872921150', 'Finland', 'Female', 'S', '2/28/2024', '8:01');
(111, 'Kaarel', 70, null, 'Finland', 'Female', 'M', '1/11/2024', '19:48');
(112, 'Siim', 80, '3055964706', 'Finland', 'Male', 'S', '2/3/2024', '4:55');
(113, 'Mihkel', 62, null, 'Lithuania', 'Male', 'L', '2/8/2024', '17:15');
(114, 'Meelis', 44, '7264516267', 'Finland', 'Male', 'XL', '2/5/2024', '14:36');
(115, 'Oliver', 70, '4167939432', 'Finland', 'Male', '2XL', '2/28/2024', '14:20');
(116, 'Ćlo', 43, null, 'Lithuania', 'Male', '2XL', '2/5/2024', '22:05');
(117, 'Oliver', 72, '6903835000', 'Latvia', 'Female', 'XL', '2/15/2024', '18:03');
(118, 'Joosep', 46, '6472267398', 'Finland', 'Male', '3XL', '2/7/2024', '6:47');
(119, 'TĆµnis', 70, '7161050343', 'Lithuania', 'Male', '2XL', '1/18/2024', '23:18');
(120, 'Silver', 82, null, 'Lithuania', 'Female', '3XL', '2/23/2024', '5:29');
(121, 'Margo', 40, '2595992616', 'Latvia', 'Male', '2XL', '1/2/2024', '9:40');
(122, 'Viljar', 52, '1014854878', 'Finland', 'Male', '3XL', '1/18/2024', '11:18');
(123, 'Mati', 58, '7595201197', 'Lithuania', 'Female', 'M', '2/27/2024', '14:39');
(124, 'Kaspar', 33, '9194574874', 'Finland', 'Male', '2XL', '1/1/2024', '1:44');
(125, 'Kalju', 53, '2583348151', 'Estonia', 'Female', 'XS', '2/29/2024', '16:29');
(126, 'Tauno', 42, '1003637456', 'Latvia', 'Male', 'XS', '1/23/2024', '5:32');
(127, 'TĆµnis', 18, null, 'Finland', 'Female', '3XL', '2/6/2024', '15:38');
(128, 'Aavo', 41, null, 'Finland', 'Bigender', 'XL', '1/2/2024', '5:39');
(129, 'Kalju', 67, null, 'Finland', 'Male', 'M', '1/3/2024', '7:13');
(130, 'Margo', 44, null, 'Finland', 'Female', 'S', '1/3/2024', '2:13');
(131, 'Viljar', 41, '5461815625', 'Estonia', 'Polygender', 'M', '1/22/2024', '12:48');
(132, 'Tarmo', 37, '7714172684', 'Finland', 'Female', '2XL', '1/17/2024', '9:08');
(133, 'Kalju', 75, null, 'Estonia', 'Female', 'L', '2/14/2024', '4:39');
(134, 'Urmas', 23, '6232626288', 'Lithuania', 'Female', 'S', '2/26/2024', '16:39');
(135, 'Meelis', 62, null, 'Finland', 'Female', 'M', '1/14/2024', '20:32');
(136, 'Aimar', 57, '6194385768', 'Finland', 'Female', 'S', '1/1/2024', '18:07');
(137, 'TĆµnis', 73, '7226884329', 'Estonia', 'Female', 'S', '2/26/2024', '9:30');
(138, 'Villem', 36, '6745054677', 'Finland', 'Male', 'M', '1/9/2024', '20:43');
(139, 'Ćlo', 47, '4099280051', 'Finland', 'Male', 'S', '1/3/2024', '11:39');
(140, 'Ivar', 40, '9395110022', 'Finland', 'Female', 'XS', '2/17/2024', '7:12');
(141, 'Mart', 50, '6452525279', 'Finland', 'Male', 'XS', '1/14/2024', '19:59');
(142, 'Taavi', 75, null, 'Finland', 'Male', '3XL', '1/5/2024', '16:35');
(143, 'Heino', 52, '2851859314', 'Lithuania', 'Male', 'S', '2/4/2024', '1:24');
(144, 'Tanel', 41, '8097106391', 'Lithuania', 'Female', 'XL', '1/13/2024', '20:06');
(145, 'Aimar', 82, null, 'Estonia', 'Male', 'XL', '1/21/2024', '21:50');
(146, 'Vello', 63, null, 'Finland', 'Female', '3XL', '1/6/2024', '0:15');
(147, 'Elmar', 78, '4558212282', 'Finland', 'Male', 'M', '2/16/2024', '7:21');
(148, 'Lauri', 65, '2531179548', 'Lithuania', 'Female', 'XS', '2/11/2024', '12:50');
(149, 'Elmar', 68, null, 'Latvia', 'Male', 'XS', '1/15/2024', '7:21');
(150, 'Indrek.', 25, '7813766495', 'Lithuania', 'Female', 'L', '1/2/2024', '19:15');
(151, 'Viljar', 23, null, 'Estonia', 'Male', 'S', '2/8/2024', '5:48');
(152, 'Ćlo', 74, '1107231549', 'Latvia', 'Male', 'XS', '1/27/2024', '18:15');
(153, 'Aavo', 36, '4567888810', 'Latvia', 'Female', '3XL', '1/31/2024', '3:09');
(154, 'Tauno', 40, '2694655349', 'Finland', 'Female', '3XL', '2/21/2024', '19:48');
(155, 'Kristjan', 72, '5813076906', 'Finland', 'Male', 'XL', '2/4/2024', '14:03');
(156, 'Indrek.', 19, '6822379316', 'Finland', 'Female', '3XL', '2/18/2024', '0:52');
(157, 'Urmas', 51, '2472742408', 'Lithuania', 'Female', 'L', '1/27/2024', '2:12');
(158, 'Tiit', 74, '1212311409', 'Estonia', 'Female', 'S', '1/19/2024', '0:34');
(159, 'Viljar', 62, null, 'Latvia', 'Male', '3XL', '2/26/2024', '13:25');
(160, 'Kristjan', 75, '5734960565', 'Finland', 'Agender', '3XL', '1/22/2024', '21:14');
(161, 'Ćlar', 51, '4134823658', 'Finland', 'Female', 'M', '2/27/2024', '8:33');
(162, 'Tiit', 64, '9823606554', 'Finland', 'Polygender', 'XL', '2/1/2024', '13:30');
(163, 'Indrek.', 66, null, 'Estonia', 'Female', 'M', '2/2/2024', '7:53');
(164, 'Kaarel', 60, null, 'Latvia', 'Female', 'XS', '1/7/2024', '0:28');
(165, 'Siim', 34, '7828320931', 'Lithuania', 'Male', 'L', '2/20/2024', '7:19');
(166, 'Silver', 72, null, 'Finland', 'Male', '3XL', '1/4/2024', '5:20');
(167, 'Ants', 59, '5091607209', 'Lithuania', 'Female', 'XS', '1/23/2024', '5:27');
(168, 'Mart', 29, '7569449459', 'Lithuania', 'Female', 'XL', '2/9/2024', '16:28');
(169, 'Arvo', 46, '6609429311', 'Finland', 'Male', 'S', '1/8/2024', '4:59');
(170, 'Kalju', 56, '2373134448', 'Finland', 'Male', 'M', '2/23/2024', '5:42');
(171, 'Oliver', 61, '7734588929', 'Latvia', 'Female', 'M', '1/8/2024', '0:24');
(172, 'Tarmo', 42, null, 'Finland', 'Male', 'XL', '1/26/2024', '22:24');
(173, 'Indrek.', 25, '6937944430', 'Finland', 'Male', 'M', '2/8/2024', '23:50');
(174, 'TĆµnis', 57, null, 'Finland', 'Female', '3XL', '2/24/2024', '23:33');
(175, 'Jaak', 59, '9957510153', 'Lithuania', 'Male', 'S', '2/28/2024', '6:57');
(176, 'Madis', 61, '4543237402', 'Finland', 'Female', '2XL', '1/21/2024', '8:58');
(177, 'Sven', 24, '1722731446', 'Estonia', 'Female', 'M', '1/23/2024', '18:33');
(178, 'Villem', 77, '3612318637', 'Finland', 'Female', 'XL', '2/4/2024', '8:15');
(179, 'Meelis', 58, '9852605072', 'Estonia', 'Male', 'M', '1/24/2024', '3:31');
(180, 'Aavo', 75, null, 'Finland', 'Female', '3XL', '2/28/2024', '19:20');
(181, 'Rein', 75, '2526753014', 'Lithuania', 'Male', '2XL', '1/5/2024', '7:29');
(182, 'Indrek.', 51, null, 'Finland', 'Male', 'L', '1/7/2024', '15:01');
(183, 'Madis', 38, '1654072223', 'Finland', 'Male', '2XL', '1/4/2024', '4:26');
(184, 'Aavo', 34, '5184065439', 'Finland', 'Female', 'XL', '1/10/2024', '5:20');
(185, 'Ivar', 42, '8533030282', 'Finland', 'Female', 'S', '1/10/2024', '13:01');
(186, 'Kaspar', 36, '7224468065', 'Finland', 'Polygender', 'L', '1/22/2024', '19:23');
(187, 'Vello', 45, null, 'Finland', 'Male', 'XS', '1/10/2024', '0:06');
(188, 'Tarmo', 53, '3672354563', 'Lithuania', 'Female', 'M', '2/18/2024', '21:47');
(189, 'Kalju', 57, '9136990710', 'Finland', 'Male', 'XL', '2/18/2024', '16:41');
(190, 'Kristjan', 74, '1498024697', 'Finland', 'Female', 'L', '1/9/2024', '22:38');
(191, 'Aavo', 35, '8893009407', 'Estonia', 'Female', '2XL', '2/11/2024', '9:32');
(192, 'Raivo', 35, null, 'Latvia', 'Male', '3XL', '1/20/2024', '9:29');
(193, 'Ivar', 52, '6563047041', 'Finland', 'Male', 'S', '2/16/2024', '17:07');
(194, 'Vello', 22, '3935310703', 'Finland', 'Male', '3XL', '2/2/2024', '4:56');
(195, 'Kaspar', 26, '7268360774', 'Finland', 'Male', 'S', '1/12/2024', '7:54');
(196, 'Siim', 59, '6216432097', 'Finland', 'Male', '3XL', '2/11/2024', '4:37');
(197, 'Heino', 65, '6814248416', 'Lithuania', 'Male', 'M', '1/30/2024', '7:56');
(198, 'Siim', 71, '5104313208', 'Lithuania', 'Male', '2XL', '2/13/2024', '21:10');
(199, 'Kaur', 37, '4789152806', 'Finland', 'Female', '2XL', '1/3/2024', '21:06');
(200, 'Vello', 23, '6172700707', 'Lithuania', 'Male', 'M', '2/26/2024', '15:58');