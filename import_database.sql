-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Maj 2022, 12:27
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ksiegarnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towar`
--

CREATE TABLE `towar` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `path_img` varchar(200) NOT NULL,
  `sell` int(6) NOT NULL,
  `kat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `towar`
--

INSERT INTO `towar` (`id`, `name`, `path_img`, `sell`, `kat`) VALUES
(1, 'Adwokat diabła', 'grafika/1/adwokat-diabla', 4856, 5),
(2, 'Antygona', 'grafika/1/antygona', 4656, 7),
(3, 'Arabiski raj', 'grafika/1/arabski-raj', 6485, 10),
(4, 'Balladyna', 'grafika/1/balladyna', 2149, 7),
(5, 'Bestia', 'grafika/1/bestia', 1258, 6),
(6, 'Bezświt', 'grafika/1/bezswit', 1206, 3),
(7, 'Bez tchu', 'grafika/1/bez-tchu', 1584, 10),
(8, 'Chłopiec z lasu', 'grafika/1/chlopiec-z-lasu', 8465, 6),
(9, 'Cierpienia młodego Wertera', 'grafika/1/cierpienia-mlodego-wertera', 1532, 7),
(10, 'Coś', 'grafika/1/cos', 1453, 5),
(11, 'Cud miód malina', 'grafika/1/cud-miod-malina', 4158, 3),
(12, 'Cyberpink 2077', 'grafika/1/cyberpunk-2077', 445, 17),
(13, 'Czas burz', 'grafika/1/czas-burz', 8456, 10),
(14, 'Doktor sen', 'grafika/1/doktor-sen', 6425, 5),
(15, 'Dolina', 'grafika/1/dolina', 1352, 18),
(16, 'Dwa dni w paryżu', 'grafika/1/dwa-dni-w-paryzu', 5423, 10),
(17, 'Dylemat', 'grafika/1/dylemat', 2112, 18),
(18, 'Gaz do dechy', 'grafika/1/gaz-do-dechy', 4562, 5),
(19, 'Gołąb i wąż', 'grafika/1/golab-i-waz', 6541, 9),
(20, 'Grube wióry', 'grafika/1/grube-wiory', 4584, 14),
(21, 'Grzeszne święta', 'grafika/1/grzeszne-swieta', 4876, 10),
(22, 'Halny', 'grafika/1/halny', 8564, 6),
(23, 'Harry Potter i czara ognia', 'grafika/1/harry-potter-i-czara-ognia', 75480, 3),
(24, 'Harry Potter i isygnia śmierci', 'grafika/1/harry-potter-i-insygnia-smierci', 78650, 3),
(25, 'Harry Potter i kamień filozofi', 'grafika/1/harry-potter-i-kamien-filozoficzny', 45788, 3),
(26, 'Harry Potter i komnata tajemni', 'grafika/1/harry-potter-i-komnata-tajemnic', 78456, 3),
(27, 'Harry Potter i książe półkrwi', 'grafika/1/harry-potter-i-ksiaze-polkrwi', 42785, 3),
(28, 'Harry Potter i więzień Azkaban', 'grafika/1/harry-potter-i-wiezien-azkabanu', 78645, 3),
(29, 'Harry Potter i zakon feniksa', 'grafika/1/harry-potter-i-zakon-feniksa', 78645, 3),
(30, 'Hobbit', 'grafika/1/hobbit', 4575, 3),
(31, 'Horyzont', 'grafika/1/horyzont', 7564, 14),
(32, 'Inni ludzie', 'grafika/1/inni-ludzie', 4567, 18),
(33, 'Instytut', 'grafika/1/instytut', 6457, 3),
(34, 'Jak umieramy', 'grafika/1/jak-umieramy', 4567, 8),
(35, 'Jan Paweł II autobiegrafia', 'grafika/1/jan-pawel-ii-autobiografia', 4568, 2),
(36, 'Kamienie na szaniec', 'grafika/1/kamienie-na-szaniec', 7657, 7),
(37, 'Kicia Kocia i Numus sprzątamy', 'grafika/1/kicia-kocia-i-nunus-sprzatamy', 5678, 1),
(38, 'Kicia Kocia u dentysty', 'grafika/1/kicia-kocia-u-dentysty', 8546, 1),
(39, 'Kicia Kocia zima', 'grafika/1/kicia-kocia-zima', 7865, 1),
(40, 'Kordian', 'grafika/1/kordian', 7865, 7),
(41, 'Królestwo', 'grafika/1/krolestwo', 4568, 6),
(42, 'Lalka', 'grafika/1/lalka', 8564, 7),
(43, 'Latarnik', 'grafika/1/latarnik', 4586, 7),
(44, 'Lśnienie', 'grafika/1/lsnienie', 7856, 5),
(45, 'Mały Książę', 'grafika/1/maly-ksiaze', 4587, 7),
(46, 'Głos Wojciech Mann', 'grafika/1/Mann_Glos', 7854, 2),
(47, 'Mein Kampf', 'grafika/1/mein-kampf', 6858, 4),
(48, 'Mikołajek', 'grafika/1/mikolajek', 6584, 1),
(49, 'Milcząca żona', 'grafika/1/milczaca-zona', 6584, 6),
(50, 'Miłość czyni dobrym', 'grafika/1/milosc-czyni-dobrym', 7854, 6),
(51, 'Mindfuck', 'grafika/1/mindfuck', 8456, 10),
(52, 'Mitologia Nordycka', 'grafika/1/mitologia-nordycka', 8458, 3),
(53, 'Mnich', 'grafika/1/mnich', 6548, 14),
(54, 'Molly', 'grafika/1/molly', 5648, 10),
(55, 'Nareszcie w Dudapeszcie', 'grafika/1/nareszcie-w-dudapeszcie', 8456, 8),
(56, 'Naruto', 'grafika/1/naruto', 8545, 12),
(57, 'Nieboszczyk sam w domu', 'grafika/1/nieboszczyk-sam-w-domu', 8452, 18),
(58, 'Nie krzycz', 'grafika/1/nie-krzycz', 4538, 6),
(59, 'Nie ma', 'grafika/1/nie-ma', 32458, 15),
(60, 'Niespokojna krew', 'grafika/1/niespokojna-krew', 4562, 6),
(61, 'Niezniszczalny', 'grafika/1/niezniszczalny', 4568, 13),
(62, 'Nie zostawie cię', 'grafika/1/nie-zostawie-cie', 4562, 10),
(63, 'Normalni ludzie', 'grafika/1/normalni-ludzie', 4865, 14),
(64, 'O psie który jeździł koleją', 'grafika/1/o-psie-ktory-jezdzil-koleja', 48556, 7),
(65, 'Pacjentka', 'grafika/1/pacjentka', 4568, 18),
(66, 'Pan Tadeusz', 'grafika/1/pan tadeusz', 4865, 7),
(67, 'Paprocany', 'grafika/1/paprocany', 4865, 6),
(68, 'Piekielny układ', 'grafika/1/piekielny-uklad', 48856, 10),
(69, 'Pieprzyć to!', 'grafika/1/pieprzyc-to', 8658, 16),
(70, 'Pokora', 'grafika/1/pokora', 7657, 14),
(71, 'Pokrzyk', 'grafika/1/pokrzyk', 7865, 6),
(72, 'Powiem tylko raz', 'grafika/1/powiem-tylko-raz', 8465, 6),
(73, 'Precedens', 'grafika/1/precedens', 7564, 6),
(74, 'Przekręt', 'grafika/1/przekret', 7845, 18),
(75, 'Psychoza', 'grafika/1/psychoza', 7846, 5),
(76, 'Rdza', 'grafika/1/rdza', 4568, 14),
(77, 'Republika smoka', 'grafika/1/republika-smoka', 4568, 3),
(78, 'Rok 1984', 'grafika/1/rok-1984', 4568, 14),
(79, 'Sapiens', 'grafika/1/sapiens', 4586, 10),
(80, 'Sekret Heleny', 'grafika/1/sekret-heleny', 7868, 10),
(81, 'Seryjni mordercy', 'grafika/1/seryjni-mordercy', 6875, 18),
(82, 'Ślepnąć od świateł', 'grafika/1/slepnac-od-swiate', 7586, 14),
(83, 'Służąca', 'grafika/1/sluzaca', 7867, 6),
(84, 'Sodoma', 'grafika/1/sodoma', 7864, 15),
(85, 'Srebrne skrzydła', 'grafika/1/srebrne-skrzydla', 7845, 18),
(86, 'Świąteczny sekret', 'grafika/1/swiateczny-sekret', 4584, 10),
(87, 'Święty mikołaj', 'grafika/1/swiety-mikolaj', 4467, 1),
(88, 'Syzyfowe prace', 'grafika/1/syzyfowe-prace', 4587, 7),
(89, 'Sztuka wojny', 'grafika/1/sztuka-wojny', 4568, 4),
(90, 'Szybki szmal', 'grafika/1/szybki-szmal', 4567, 19),
(91, 'Tatuarzysta z Auschwitz', 'grafika/1/tatuazysta-z-auschwitz', 4568, 11),
(92, 'Uwierz w mikołaja', 'grafika/1/uwierz-w-mikolaja', 4568, 10),
(93, 'W cieniu zła', 'grafika/1/w-cieniu-zla', 4578, 19),
(94, 'W głębi lasu', 'grafika/1/w-glebi-lasu', 4589, 6),
(95, 'Wiedzmin', 'grafika/1/wiedzmin', 4578, 3),
(96, 'Winda', 'grafika/1/winda', 4568, 5),
(97, 'Wizna', 'grafika/1/wizna', 4589, 3),
(98, 'Zapis zarazy', 'grafika/1/zapis-zarazy', 6987, 15),
(99, 'Za zamkniętymi drzwiami', 'grafika/1/za-zamknietymi-drzwiami', 4568, 6),
(100, 'Zbrodznie zimową porą', 'grafika/1/zbrodnie-zimowa-pora', 4546, 6),
(101, 'Złączeni miłością', 'grafika/1/zlaczeni-miloscia', 897, 10),
(102, 'Złe miejsce', 'grafika/1/zle-miejsce', 48576, 10),
(103, 'Życie i śmierć', 'grafika/1/zycie-i-smierc', 8946, 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `surname` varchar(24) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `towar`
--
ALTER TABLE `towar`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `towar`
--
ALTER TABLE `towar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
