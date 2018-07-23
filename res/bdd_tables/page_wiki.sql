-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 08 Mars 2015 à 11:18
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tip_nomenclature`
--

-- --------------------------------------------------------

--
-- Structure de la table `page_wiki`
--

CREATE TABLE IF NOT EXISTS `page_wiki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` longtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `page_wiki`
--

INSERT INTO `page_wiki` (`id`, `title`, `content`) VALUES
(1, 'Test du wiki', '<p>Ceci est un test du wiki, en avant première !</p><p><a href="{% getUrl(''wiki'', {''slug'':''page-2''}) %}">page 2</a></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat ante in accumsan blandit. Etiam eget mollis leo. Fusce quis dignissim dui. In pulvinar vehicula dignissim. Sed ut neque non tellus mollis sollicitudin porta at erat. Nulla id nulla eu nulla euismod bibendum. Ut viverra aliquam viverra. Donec id eros a ante pellentesque pharetra. Fusce lacinia nunc eu ante viverra, vitae scelerisque ex rutrum. Curabitur a libero mauris. Cras auctor diam sed ligula gravida, eu dapibus nibh euismod. Curabitur faucibus accumsan diam, ut cursus tortor egestas id. Quisque egestas risus quis ex porttitor, ullamcorper bibendum purus laoreet. Sed sit amet eros nec est efficitur sodales. Phasellus non nisi arcu.</p>\n\n<p>Aenean lectus ex, dapibus eu consequat id, egestas sit amet mauris. Donec ac tempor lacus, non vulputate mauris. Nullam augue metus, lobortis sit amet metus nec, interdum efficitur tellus. Pellentesque neque lorem, tempor elementum elementum vitae, dapibus euismod felis. Maecenas ante sapien, accumsan vel bibendum non, rutrum sed mauris. Nullam at sapien posuere, vestibulum nibh venenatis, elementum ipsum. Nam efficitur urna augue. Pellentesque blandit, nulla eget ultricies sagittis, nulla tortor egestas lectus, id dictum ex nibh nec felis. Vestibulum vestibulum ut ligula sit amet varius. Duis auctor maximus metus in rutrum. Vestibulum sed vehicula eros. Duis at bibendum magna.</p>\n\n<p>Sed quis urna sem. Nulla aliquet risus libero, et elementum sapien dapibus non. Maecenas aliquam augue vel feugiat pharetra. Mauris maximus eget nisi sed aliquam. In risus dolor, volutpat quis blandit eu, placerat dapibus sem. Donec cursus, libero at laoreet tempor, justo eros vehicula lorem, vel elementum libero purus ac elit. Proin condimentum placerat dolor et euismod. Maecenas eu consequat tortor. In hac habitasse platea dictumst. Proin sapien dui, vehicula eu eros ut, interdum cursus metus.</p>\n\n<p>Donec est lacus, fringilla feugiat tortor sit amet, fermentum tincidunt eros. Phasellus in gravida elit. Nullam et iaculis leo, in tincidunt velit. Donec aliquet mi magna, ac aliquam urna dignissim at. Cras ac lacus ultrices, facilisis nisl id, consequat arcu. Nam at lacinia lectus, sed molestie turpis. Integer viverra eros felis, in ullamcorper sapien euismod a. Praesent tortor arcu, malesuada sed arcu non, condimentum hendrerit ipsum. Suspendisse gravida porta metus id auctor. Quisque id risus orci. Sed pretium condimentum risus, in ultricies dui cursus id. Quisque at urna sed mauris maximus lobortis nec et nunc. Nullam justo lorem, rutrum sit amet tristique et, pellentesque id massa.</p>'),
(2, 'Test du wiki 2', '<p>Une autre page du wiki</p><p><a href="{% getUrl(''wiki'', {''slug'':''page-1''}) %}">page 1</a></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada, erat nec gravida molestie, sem arcu ornare enim, sit amet congue nisi turpis a nunc. Donec dictum feugiat orci ut pellentesque. Sed condimentum nunc nec elit vulputate viverra. Curabitur aliquet et velit vitae commodo. Nullam facilisis hendrerit enim vel porttitor. Ut mattis pellentesque nulla, sit amet eleifend nulla hendrerit nec. Sed non lacus tincidunt, gravida elit ac, molestie justo.</p>\n\n<p>Morbi faucibus tellus vehicula mauris ornare, nec feugiat sapien sagittis. Ut gravida mi nec lectus viverra, et cursus mi commodo. Proin ornare maximus est, sit amet mattis lorem cursus quis. Vivamus consectetur ac tellus vitae tristique. Pellentesque et feugiat sem, sit amet pellentesque ex. Nullam rutrum fringilla velit, nec sagittis orci molestie at. Cras commodo elementum blandit. In in ultricies orci. Nullam venenatis placerat tortor nec molestie. Praesent ut lorem imperdiet, bibendum est nec, egestas neque. Vivamus bibendum iaculis mattis. Nunc pulvinar eleifend urna, ut mattis massa molestie ut. In vitae euismod odio, at semper ante. Duis a velit sit amet elit venenatis tempor.<p>\n\n<p>Aenean felis tortor, commodo sit amet augue sit amet, eleifend ultrices massa. Nulla vitae nisl eget turpis finibus convallis. Sed nunc nisl, lacinia nec commodo in, imperdiet in elit. Proin sit amet ipsum elit. Cras mauris nulla, tempor et lobortis a, egestas ac eros. Duis sed molestie lectus. Integer suscipit velit ac eros auctor bibendum. Nam urna enim, tempor a scelerisque eu, laoreet non eros.</p>\n\n<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In vulputate odio erat, ut pellentesque tellus ornare sed. Donec consectetur dignissim auctor. Vestibulum aliquet arcu dolor, quis lacinia odio varius semper. Quisque vitae sagittis purus, a viverra nibh. Nunc dolor tellus, semper sed ultricies nec, tristique nec sem. Etiam blandit ac ligula non imperdiet.</p>\n\n<p>Aliquam bibendum arcu ac tempus auctor. Fusce quis nunc et ex elementum dictum non et dolor. Nullam id accumsan dolor. Cras accumsan justo massa, ut sodales urna lobortis quis. Pellentesque consequat, orci ac semper facilisis, nunc tellus sollicitudin metus, ac lobortis ante lectus eu elit. Nullam accumsan leo sem, quis suscipit elit venenatis auctor. Sed a tristique nulla, a egestas libero. Donec vitae condimentum ex, vitae ultricies risus. Ut aliquet commodo odio, eu euismod diam. Nam a lectus non nunc facilisis tempor non vel tortor. Sed placerat efficitur convallis. Mauris bibendum efficitur lectus sit amet ultricies. Nunc rhoncus ut orci sed ultricies.</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
