-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jan 17, 2013 as 10:55 AM
-- Versão do Servidor: 5.5.9
-- Versão do PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `webpraca_inscricao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comunicacao_tipos`
--

CREATE TABLE `comunicacao_tipos` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `int` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `curso` varchar(60) CHARACTER SET utf8 NOT NULL,
  `sigla` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolaridade_niveis`
--

CREATE TABLE `escolaridade_niveis` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `cod` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `int` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao2013`
--

CREATE TABLE `inscricao2013` (
  `curso1` varchar(60) NOT NULL,
  `curso1_turno` varchar(60) NOT NULL,
  `curso2` varchar(60) NOT NULL,
  `curso2_turno` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `nasc` varchar(60) NOT NULL,
  `responsavel` varchar(60) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `estado_civil` varchar(40) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `comunidade` varchar(20) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `tel_fixo` int(8) DEFAULT NULL,
  `tel_cel` int(8) DEFAULT NULL,
  `tel_recado` varchar(20) DEFAULT NULL,
  `escolaridade_nivel` varchar(50) NOT NULL,
  `instituicao_nome` varchar(50) DEFAULT NULL,
  `aulas_horarios` varchar(50) DEFAULT NULL,
  `comunicacao` varchar(40) NOT NULL,
  `comunicacao_outro` varchar(100) DEFAULT NULL,
  `motivacao` varchar(40) NOT NULL,
  `internet` varchar(6) NOT NULL,
  `internet_acesso` varchar(60) DEFAULT NULL,
  `internet_acesso_outro` varchar(60) DEFAULT NULL,
  `internet_acesso_nao_motivo` varchar(100) DEFAULT NULL,
  `conhecimentos_info` varchar(60) DEFAULT NULL,
  `conhecimentos_info_outro` varchar(100) DEFAULT NULL,
  `atividade_social` varchar(60) DEFAULT NULL,
  `atividade_social_nome` varchar(100) DEFAULT NULL,
  `expectativa` varchar(200) DEFAULT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `motivos`
--

CREATE TABLE `motivos` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turnos`
--

CREATE TABLE `turnos` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `turno` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Restrições para as tabelas dumpadas
--

--