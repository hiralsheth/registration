SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `reg` (
  `id` int(100) NOT NULL,
  `namef` varchar(26) NOT NULL,
  `namel` varchar(35) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `reg` (`id`, `namef`, `namel`, `mobile`, `email`) VALUES
('', '', '', '');



ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

