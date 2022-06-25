-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 04:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `category` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `img`, `price`, `category`, `author`) VALUES
(1, 'Rabies', 'A biological catastrophe, on a scale unknown to modern history, hits London Heathrow Airport in the height of the summer season. Due to a mutation in the rabies virus in a science lab, the pidemic is spreading at an alarming rate because no vaccine is working. In quarantine, which includes a huge complex, tens of thousands of passengers and airport employees were found ...', './public/theme/img/besnilo-borislav_pekic_v.jpg', 18, 'Horror', 'Borislav Pekic'),
(2, 'The Master and Margarita', 'In the thirties of the last century, the devil came to Moscow. Shortly after arriving, this unexpected visitor with his helpers, including a talking cat and a beautiful witch, confuses Muscovites who refuse to believe in both God and the devil... Meanwhile, the Master, the author of an unpublished manuscript about Jesus Christ and Pontius Pilate, is desperately lying in a psychiatric hospital.', './public/theme/img/majstor-i-margarita.jpg', 15, 'Classic', 'Mikhail Bulgakov'),
(3, 'The Bridge on the Drina', 'A stone bridge from the 16th century, an endowment of Mehmed-pasha Sokolovic, like a mute witness remembers the seeming harmony of different cultures, religions and peoples whereas deep antagonism exists between them. The difference between two civilisations, Eastern and Western, is the most obvious. In the period from its construction until its partial distruction at the beginning of the 20th century.', './public/theme/img/the_bridge_on_the_drina_vv.jpg', 15, 'Classic', 'Ivo Andric'),
(4, 'When I Was Joe', 'When Ty witnesses a stabbing, his own life is in danger from the criminals he\'s named, and he and his mum have to go into police protection. Ty has a new name, a new look and a cool new image - life as Joe is good, especially when he gets talent spotted as a potential athletics star, special training from an attractive local celebrity and a lot of female attention.', './public/theme/img/When-I-Was-A-Joe.jpg', 8, 'Crime', 'Keren David'),
(5, 'The Giving Tree', 'Once there was a tree...and she loved a little boy. So begins a story of unforgettable perception, beautifully written and illustrated by the gifted and versatile Shel Silverstein. This moving parable for all ages offers a touching interpretation of the gift of giving and a serene acceptance of another\'s capacity to love in return. Every day the boy would come to the tree to eat her apples, swing from her branches, or slide down her trunk...and the tree was happy.\r\n', './public/theme/img/The_Giving_Tree.jpg', 14, 'Kids', 'Shel Silverstein'),
(8, 'Crime and Punishment', 'Raskolnikov, a destitute and desperate former student,wanders through the slums of St Petersburg and commits a random murder without remorse or regret. He imagines himself to be a great man, a Napoleon: acting for a higher purpose beyond conventional moral law.', './public/theme/img/7144.jpg', 15, 'Classic', 'Fyodor Dostoevsky'),
(9, 'Matilda', 'Matilda is a little girl who is far too good to be true.At age five-and-a-half she\'s knocking off double-digit multiplication problems and blitz-reading Dickens. Even more remarkably, her classmates love her even though she\'s a super-nerd and the teacher\'s pet.But everything is not perfect in Matilda\'s world...', './public/theme/img/297602.jpg', 10, 'Kids', 'Roald Dahl'),
(10, 'The Missing Piece', '\"It was missing a piece. And it was not happy. What it finds on its search for the missing piece is simply and touchingly told. This inventive and heartwarming book can be read on many levels, and Silverstein’s iconic drawings and humor are sure to delight fans of all ages. So it set off in searchof its missing piece.', './public/theme/img/61OK4q0nskL.jpg', 13, 'Kids', 'Shel Silverstein'),
(14, 'Peter Pan', 'The mischievous boy who refuses to grow up, lands in the Darling\'s proper middle-class home to look for his shadow. He befriends Wendy, John and Michael and teaches them to fly (with a little help from fairy dust). He and Tinker Bell whisk them off to Never-land where they encounter the Red Indians, the Little Lost Boys,  pirates and the dastardly Captain Hook.', './public/theme/img/915YbWIek4L.jpg', 14, 'Kids', 'J.M. Barrie'),
(15, 'Predictably Irrational', 'In this newly revised and expanded edition of the groundbreaking New York Times bestseller, Dan Ariely refutes the common assumption that we behave in fundamentally rational ways.  From drinking coffee to losing weight, from buying a car to choosing a romantic partner, we consistently overpay, underestimate, and procrastinate. Yet these misguided behaviors are neither random nor senseless.', 'public/theme/img/51azXiFqujL.jpg', 11, 'Psychology', 'Dr. Dan Ariely'),
(28, 'And Then There Were None', 'Ten people, each with something to hide and something to fear,  are invited to an isolated mansion on Indian Island by a host who, surprisingly, fails to appear. On the island they are cut off from everythingbut each other and the inescapable shadows of their own past lives.  One by one, the guests share the darkest secrets of their wicked pasts. And one by one, they die…', 'storage/uploads/81B9LhCS2AL.jpg', 15, 'Mysterie', 'Agatha Christie'),
(29, 'ESTORIL A WARTIME NOVEL', 'It is strange to find a crossroads at the very edge of civilization.The little coastal town of Estoril outside Lisbon became exactly that on the eve of World War II.Since Portugal was neutral in the war, it became the point of departure for refugees fleeing war-torn Europe, heading for America.', 'storage/uploads/61pUH9ICsNL.jpg', 12, 'Drama', 'Dejan Tiago Stanković'),
(30, 'Don Quixote', 'Don Quixote has become so entranced reading tales of chivalry that he decides to turn knight errant himself.In the company of his faithful squire, Sancho Panza,  these exploits blossom in all sorts of wonderful ways. While Quixote\'s fancy often leads him astray—he tilts at windmills, imagining them to be giants—Sancho acquires cunning and a certain sagacity.', 'storage/uploads/don-quixote.jpg', 16, 'Classic', 'Miguel de Cervantes');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(1, 'Nemanja', 'nemanja@gmail.com', 'Ovo je prva poruka!'),
(6, 'Nemanja', 'nemanjakovi@gmail.com', '11111111111111111111');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `ages` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `ages`, `gender`, `email`, `password`, `image`) VALUES
(31, 'Nemnaja', 'Markovic', 32, 'Male', 'nemanja@gmail.com', '$2y$10$amL9H6nnmo.8qMXfugQbLe/hNISwXgvwRAEQG9f1K8nahDSegIQNa', 'storage/uploads/visionary.jpg'),
(33, 'Nemanja', 'Markovic', 32, 'Male', 'nemanjakovi90@gmail.com', '$2y$10$Et6bG87rxrpr8bDA9i.ea.bYZAJF5HNc7E8wjHap5H1HrT8/N/FG.', 'storage/uploads/visionary.jpg'),
(34, 'Nemanja', 'Markovic', 32, 'Male', 'nemanjakovi@gmail.com', '$2y$10$QwRb1/7wdjJdm7r11gyl2.YaDwC3JS85nJUxrgSKXnTiBXnDR.oZO', 'storage/uploads/visionary.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
