-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 11:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g00388038`
--
CREATE DATABASE IF NOT EXISTS `g00388038` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `g00388038`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Title`, `Description`, `Price`) VALUES
(1, 'DW Exotic Natural Toasted Almond', 'Drum Workshop Collector Shell Set, Exotic Series, shell material: 100% North American maple wood, colour: Natural to Toasted Almond over Candy Stripe Padouk, Satin Chrome Hardware, shell set containing: 22x18 Bass Drum (VLX shell construction) 10x08 - 12x09 Tom Toms (VLT shell construction), 16x14 Stand Tom (VLX shell construction), 14x6,5 Snare Drum, True Pitch 50 tuning rods, STM Suspension Tom Mount System.', 9399),
(2, 'Roland TD-50KV2 V-Drums Kit', 'Roland TD-50KV2 V-Drum Set, Roland TD-50X Drum Module, 100 drum kits, Prismatic Sound Modelling-Technology, sampling of WAV-files from a SD-card, 14x stereo 1/4 jack trigger inputs, 3x digital trigger inputs for Roland digital drum pads with multi sensor technology, 2x XLR main outputs, 8x stereo 1/4 jack input direct outs, stereo 1/8 jack headphone output, stereo 1/8 jack input to connect mp3- or cd-players.', 7590),
(3, 'Evh Wolfgang USA EVH Signature BK', 'Electric Guitar - Body: Basswood - Archtop: Maple - 5-Ply binding - Neck: Maple - Fretboard: Ebony - 22 Vintage steel frets - Nut width: 42 mm - Scale: 648 mm - Pickups: 2x EVH humbuckers - EVH-branded Floyd Rose tremolo with EVH D-Tuna - EVH-branded machine heads - 3-Way switch (reverse style) - EVH BI Tech HPU low-friction volume control - EVH Bourns high-friction tone control - Red killswitch - Colour: Stealth (Black).', 3777),
(4, 'Bernd Hiller & Sohn Violin Guarneri del Gesu 4/4', 'Master Violin - Model after Guarneri del Gesu - 25 Years of seasoned, self-split and processed wood from Switzerland - Narrow-grain spruce - Deep flamed maple back - Hand-carved scroll - Reddish brown spirit varnish with natural resins from own production on golden-brown bottom - Fingerboard, upper and lower saddle made of ebony - Berdani swivel and tailpiece french model made of dark paper - Guarneri model chin-rest.', 9999),
(5, 'Steinway and Sons B-211', 'Steinway and Sons B-211 grand piano, year of manufacture: 1970, rebuilt by our Steinway specialists and our master piano builder. This Grand PIano is a fine example of the inherent Steinway sound in its purist form. It\'s this instrument\'s rich scale and its impressive sound that have made this model the the most sought after Grand Piano of our pianists and musicians today. Length: 211 cm, width: 148 cm, weight: 345 kg.', 52100),
(6, 'Yamaha Genos', 'Digital Workstation - 76 Velocity-sensitive keys with aftertouch - 1652 Sounds + 58 Drum / SFX Kits - 256 Voice polyphony - 550 Styles - 6 Endless rotaries - 9 Sliders - 358 Preset DSPs, up to 28 insert DSP effects - Vocal harmony & synth vocoder - Expansion Voice internal 1.8 GB - Internal multi-track recording Midi/Audio - 9 Touch screen colour display - Internal 58 GB storage - Dimensions (W x D x H): 1234 x D 456 x H 138 mm - Weight: 13 kg.', 3799),
(7, 'Yanagisawa A-WO37 PG Elite Alto Sax', 'Alto saxophones - Eb tuning - Neck, body and bell in sterling silver - Hand-engraved - High F # key - Plastic coated octave rocker - C # -Bb seesaw - BC # seesaw - Adjustable vibration-damping bar - Real mother of pearl inserts - Metal thumb rest and thumb hook - Sealed, water-repellent pads - Metal resonators - Double-arm keys - Three point bell-bow brace - Pink gold plated - Case with backpack and outer pocket - Ebonite mouthpiece.', 14290),
(8, 'B and S Metropolitan C- Trumpet', 'B and S Metropolitan C- Trumpet 0.462 bore (11,73mm), 4.783 (121,5mm) hand-hammered one-piece bell - new design, 3 top-sprung hand-lapped lightweight monel pistons, lever-style waterkey at main slide, forged (main tuning and 3rd valve slide), 2-piece valve section, new designed leadpipe / mpc receiver, harmonic balancing system (3 sets for slide pull knobs), new style/ ergonomie system, brass silver plated, incl. double case.', 3899);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
