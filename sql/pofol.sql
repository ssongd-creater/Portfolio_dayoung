-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-08-15 15:52
-- 서버 버전: 10.4.19-MariaDB
-- PHP 버전: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `pofol`
--

CREATE TABLE `pofol` (
  `Pofol_comm_idx` int(11) NOT NULL COMMENT '고유번호',
  `Pofol_comm_name` text CHARACTER SET utf8 NOT NULL COMMENT '이름',
  `Pofol_comm_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `Pofol_comm_con` text CHARACTER SET utf8 NOT NULL COMMENT '내용'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `pofol`
--
ALTER TABLE `pofol`
  ADD PRIMARY KEY (`Pofol_comm_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `pofol`
--
ALTER TABLE `pofol`
  MODIFY `Pofol_comm_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
