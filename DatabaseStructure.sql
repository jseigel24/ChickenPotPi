-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2013 at 07:54 PM
-- Server version: 5.5.30
-- PHP Version: 5.4.4-14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bird`
--

CREATE TABLE IF NOT EXISTS `bird` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `stage` varchar(16) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `hatchdate` datetime DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `purchasedate` datetime DEFAULT NULL,
  `breed` varchar(64) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `egg`
--

CREATE TABLE IF NOT EXISTS `egg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `laydate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fertilized` tinyint(1) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `egg`
--

INSERT INTO `egg` (`id`, `laydate`, `fertilized`, `number`) VALUES
(2, '0000-00-00 00:00:00', 45, -1),
(6, '0000-00-00 00:00:00', 0, 0),
(7, '2013-04-21 13:03:54', 0, 0),
(8, '2013-04-21 13:04:06', 88, 44),
(9, '2013-04-21 17:55:35', 44, 44),
(10, '2013-04-21 17:57:18', 0, 543),
(11, '2013-04-21 18:15:10', 44, 44);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(16) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `recurring` tinyint(1) DEFAULT NULL,
  `recurdate` datetime DEFAULT NULL,
  `category` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  `lastfed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

CREATE TABLE IF NOT EXISTS `weather` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weather_json` text NOT NULL,
  `timegotten` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`id`, `weather_json`, `timegotten`) VALUES
(1, '\n{\n	"response": {\n		"version": "0.1"\n		,"termsofService": "http://www.wunderground.com/weather/api/d/terms.html"\n		,"features": {\n		"conditions": 1\n		}\n	}\n		,	"current_observation": {\n		"image": {\n		"url":"http://icons-ak.wxug.com/graphics/wu2/logo_130x80.png",\n		"title":"Weather Underground",\n		"link":"http://www.wunderground.com"\n		},\n		"display_location": {\n		"full":"Tallahassee, FL",\n		"city":"Tallahassee",\n		"state":"FL",\n		"state_name":"Florida",\n		"country":"US",\n		"country_iso3166":"US",\n		"zip":"32301",\n		"latitude":"30.42930031",\n		"longitude":"-84.25710297",\n		"elevation":"59.00000000"\n		},\n		"observation_location": {\n		"full":"Betton Hills, Tallahassee, Florida",\n		"city":"Betton Hills, Tallahassee",\n		"state":"Florida",\n		"country":"US",\n		"country_iso3166":"US",\n		"latitude":"30.465418",\n		"longitude":"-84.260811",\n		"elevation":"226 ft"\n		},\n		"estimated": {\n		},\n		"station_id":"KFLTALLA48",\n		"observation_time":"Last Updated on April 21, 1:52 PM EDT",\n		"observation_time_rfc822":"Sun, 21 Apr 2013 13:52:33 -0400",\n		"observation_epoch":"1366566753",\n		"local_time_rfc822":"Sun, 21 Apr 2013 14:06:23 -0400",\n		"local_epoch":"1366567583",\n		"local_tz_short":"EDT",\n		"local_tz_long":"America/New_York",\n		"local_tz_offset":"-0400",\n		"weather":"Partly Cloudy",\n		"temperature_string":"73.6 F (23.1 C)",\n		"temp_f":73.6,\n		"temp_c":23.1,\n		"relative_humidity":"53%",\n		"wind_string":"From the SE at 4.0 MPH Gusting to 6.0 MPH",\n		"wind_dir":"SE",\n		"wind_degrees":127,\n		"wind_mph":4.0,\n		"wind_gust_mph":"6.0",\n		"wind_kph":6.4,\n		"wind_gust_kph":"9.7",\n		"pressure_mb":"1021",\n		"pressure_in":"30.16",\n		"pressure_trend":"-",\n		"dewpoint_string":"55 F (13 C)",\n		"dewpoint_f":55,\n		"dewpoint_c":13,\n		"heat_index_string":"NA",\n		"heat_index_f":"NA",\n		"heat_index_c":"NA",\n		"windchill_string":"NA",\n		"windchill_f":"NA",\n		"windchill_c":"NA",\n		"feelslike_string":"73.6 F (23.1 C)",\n		"feelslike_f":"73.6",\n		"feelslike_c":"23.1",\n		"visibility_mi":"10.0",\n		"visibility_km":"16.1",\n		"solarradiation":"",\n		"UV":"12",\n		"precip_1hr_string":"0.00 in ( 0 mm)",\n		"precip_1hr_in":"0.00",\n		"precip_1hr_metric":" 0",\n		"precip_today_string":"0.00 in (0 mm)",\n		"precip_today_in":"0.00",\n		"precip_today_metric":"0",\n		"icon":"partlycloudy",\n		"icon_url":"http://icons-ak.wxug.com/i/c/k/partlycloudy.gif",\n		"forecast_url":"http://www.wunderground.com/US/FL/Tallahassee.html",\n		"history_url":"http://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=KFLTALLA48",\n		"ob_url":"http://www.wunderground.com/cgi-bin/findweather/getForecast?query=30.465418,-84.260811"\n	}\n}\n', 1366567583);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
