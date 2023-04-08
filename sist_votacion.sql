SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `tbl_alumnos` (
  `dni_almn` int(8) NOT NULL,
  `nombre_almn` varchar(25) NOT NULL,
  `apellido_almn` varchar(25) NOT NULL,
  `id_curso` varchar(11) NOT NULL,
  `grupo_almn` int(3) NOT NULL,
  `password_almn` varchar(25) NOT NULL,
  `postulante` int(1) NOT NULL,
  `voto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_curso` (
  `id_curso` int(11) NOT NULL,
  `ano_curso` int(1) NOT NULL,
  `division_curso` varchar(25) NOT NULL,
  `grupo1_curso` int(3) NOT NULL,
  `grupo2_curso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_curso` (`id_curso`, `ano_curso`, `division_curso`, `grupo1_curso`, `grupo2_curso`) VALUES
(1, 5, 'C', 510, 511),
(9, 7, 'C', 710, 709);

CREATE TABLE `tbl_fases` (
  `id_curso` int(11) NOT NULL,
  `fase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_postulantes` (
  `id_postul` int(11) NOT NULL,
  `dni_almn` int(8) NOT NULL,
  `contadorVotos_postul` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `tbl_alumnos`
  ADD PRIMARY KEY (`dni_almn`),
  ADD KEY `postulante` (`postulante`),
  ADD KEY `id_curso` (`id_curso`);

ALTER TABLE `tbl_curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `division` (`division_curso`);

ALTER TABLE `tbl_postulantes`
  ADD PRIMARY KEY (`id_postul`);


ALTER TABLE `tbl_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE `tbl_postulantes`
  MODIFY `id_postul` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
