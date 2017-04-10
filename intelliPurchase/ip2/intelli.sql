-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2015 at 09:49 PM
-- Server version: 5.5.42-1
-- PHP Version: 5.6.7-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `intelli`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_detail`
--

CREATE TABLE IF NOT EXISTS `book_detail` (
`book_id` int(11) NOT NULL,
  `book_title` text NOT NULL,
  `book_cat` text NOT NULL,
  `book_binding` text NOT NULL,
  `book_isbn` text NOT NULL,
  `book_image` text NOT NULL,
  `book_author` text NOT NULL,
  `book_publisher` text NOT NULL,
  `book_noofpages` text NOT NULL,
  `book_pubyear` text NOT NULL,
  `book_desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_detail`
--

INSERT INTO `book_detail` (`book_id`, `book_title`, `book_cat`, `book_binding`, `book_isbn`, `book_image`, `book_author`, `book_publisher`, `book_noofpages`, `book_pubyear`, `book_desc`) VALUES
(1, 'The Diary of a Young Girl', 'Biographies', 'Paperback', '9380914318', 'http://c398754.r54.cf1.rackcdn.com/9789380914312.jpg', 'Anne Frank', 'General Press', '288', '2014', 'The Diary of a Young Girl started two days before Anne Frank''s thirteenth birthday. In 1942, the Nazis had occupied Holland and her family left their home to go into hiding, as they were Jews. Anne Frank recorded daily events, her personal experiences and her feelings in her diary for the next two years. Cut off from the outside world, she and her family faced hunger, boredom, claustrophobia at living in confined quarters and the ever-present threat of discovery and death. One day, she and her family were betrayed and taken away to the Bergen-Belsen concentration camp, where she eventually died. It is a record of a sensitive girl''s tragic experience during one of the worst periods in human history. This diary is so powerful that it leaves a deep impact on the mind of its readers.'),
(2, 'My Experiments With Truth: The Autobiography of Mohandas Karamchand Gandhi', 'Biographies', 'Paperback', '9381688206', 'http://localhost/intelliPurchase/images/books/fiction/2.jpg', 'Mohandas Karamchand Gandhi', 'Future', '', '2012', 'My Experiments With Truth: The Autobiography of Mohandas Karamchand Gandhi (or Mahatma Gandhi) covers his life from early childhood through to 1920, and is a popular and influential book. It was initiated at the insistence of Swami Anand and other close co-workers of Gandhi, in his mother-tongue Gujarati entitled Satyana Prayogo athva Atmakatha.Mahatma Gandhi (1869 - 1948) was a charismatic leader who brought the case for Indias independence to world attention. His philosophy of nonviolence, for which he coined the term satyagraha, has influenced nonviolent resistance movements to this day. For Gandhi, Truth was the sovereign principle; inclusive of many other spiritual principles and schools of thought.'),
(3, 'Long Walk to Freedom', 'Biographies', 'Paperback', '9780349106533', 'http://c398754.r54.cf1.rackcdn.com/9780349106533.jpg', 'Nelson Mandela', 'Abacus', '784', '1995-10-12', 'Long Walk To Freedom is an articulate, touching account of Mandela''s life progressing from his childhood in rural Transkei in 1918 to his inauguration in Johannesburg as the President of South Africa on May 10, 1994. Mandela unearths his accounts of the oppression of the blacks in South Africa and his stance on his concept of armed struggle. The book also showcases his beliefs that all people, white or black, have the right to freedom. The first part of the book, talks about his education and upbringing, while the second part introduces social and political aspects of apartheid in South Africa. Mandela recollects his joining of the African National Congress in 1950. With their assistance he launched an armed struggle against the rigid apartheid government. More than third of Mandela''s memoir talks about his 27 prison sentence - an account that stands solely as a prison narrative. One of the most powerful excerpts in the book include the Robben Island prison account- It was here where Mandela read books such as War And Peace, resisted feelings of resentment and found decency even in his callous prison residents. The most moving aspect of the book though, is the effect of his commitment towards his struggle for freedom and how his family, inevitably had to pay the terrible price. Here, for the first time, Nelson Mandela narrates his extraordinary tale - an epic account of struggle, misfortune, a sense of hope and ultimately triumph. Mandela''s story is one of the most inspiring and powerful accounts of this decade. Long Walk To Freedom was published on 12th October 1995 and is available in paperback. Key Features In 1995, the book won the Alan Paton Award. Published in several languages, including Afrikaans. Long Walk To Freedom has been adapted into a film titled Mandela: Long Walk To Freedom.'),
(4, 'The Autobiography Of Benjamin Franklin', 'Biographies', 'Paperback', '8190276689', 'http://c398754.r54.cf1.rackcdn.com/9788190276689.jpg', 'Benjamin Franklin', 'General Press', '224', '2011-12-01', 'The Autobiography Of Benjamin Franklin holds details of a prominent historical figure, Benjamin Franklin. Benjamin Franklin gives a striking documentary of his life in this book. This classic literature book was published after Benjamin Franklin had passed away. It has been divided into four parts. Each part covers a certain event in this world leader’s life. The first part includes letters to Franklin’s son William in the year 1771. It has detailed information about his lineage and his stay in England. The second part was written when he was in France and his relationship with William went bad after the Revolutionary War. The third part narrates his return to America, where he details the progress in his country. He also mentions good deeds done to his country and the world. This book will make readers realise that Franklin was kind in nature and always wanted to do good. The detailed account of the good deeds he did will sway readers. The fourth part is empty and incomplete. It holds certain events that had taken place during the last year of Franklin’s life. The Autobiography Of Benjamin Franklin was published by General Press in 2011. This unabridged edition is available in paperback. Key Features: This book is considered to be of historical value in literature and is the first to be taken seriously in European literature. It has had several reprints over time. It is also known under the French title Mémoires De La Vie Privée De Benjamin Franklin.'),
(5, 'Open: An Autobiography', 'Biographies', 'Paperback', '0007416792', 'http://c398754.r54.cf1.rackcdn.com/9780007416790.jpg', 'Andre Agassi', 'Harper', '400', '2010-08-19', 'He is one of the most beloved athletes in history and one of the most gifted men ever to step onto a tennis court – but from early childhood Andre Agassi hated the game. Coaxed to swing a racket while still in the crib, forced to hit hundreds of balls a day while still in grade school, Agassi resented the constant pressure even as he drove himself to become a prodigy, an inner conflict that would define him. Now, in his beautiful, haunting autobiography, Agassi tells the story of a life framed by such conflicts. Agassi makes us feel his panic as an undersized seven-year-old in Las Vegas, practicing all day under the obsessive gaze of his violent father. We see him at thirteen, banished to a Florida tennis camp. Lonely, scared, a ninth-grade dropout, he rebels in ways that will soon make him a 1980s icon. By the time he turns pro at sixteen, his new look promises to change tennis forever, as does his lightning fast return. And yet, despite his raw talent, he struggles early on. We feel his confusion as he loses to the world''s best, his greater confusion as he starts to win. After stumbling in three Grand Slam finals, Agassi shocks the world, and himself, by capturing the 1992 Wimbledon. Overnight he becomes a fan favorite and a media target. Agassi brings a near-photographic memory to every pivotal match, and every public relationship. Alongside vivid portraits of rivals, Agassi gives unstinting accounts of his brief time with Barbra Streisand and his doomed marriage to Brooke Shields. He reveals the depression that shatters his confidence, and the mistake that nearly costs him everything. Finally, he recounts his spectacular resurrection and his march to become the oldest man ever ranked number one. In clear, taut prose, Agassi evokes his loyal brother, his wise coach, his gentle trainer, all the people who help him regain his balance and find love at last with Stefanie Graf. With its breakneck tempo and raw candor, Open will be read and cherished for years. A treat for ardent fans, it will also captivate readers who know nothing about tennis. Like Agassi''s game, it sets a new standard for grace, style, speed and power.'),
(6, 'Silent Spring', 'Fiction & Non Fiction', 'Paperback', '0618249060', 'http://c398754.r54.cf1.rackcdn.com/9780618249060.jpg', 'Rachel Carson', 'Houghton Mifflin (Trade)', '400', '2003-10-23', 'First published by Houghton Mifflin in 1962, Silent Spring alerted a large audience to the environmental and human dangers of indiscriminate use of pesticides, spurring revolutionary changes in the laws affecting our air, land, and water. \\"Silent Spring became a runaway bestseller, with international reverberations . . . [It is] well crafted, fearless and succinct . . . Even if she had not inspired a generation of activists, Carson would prevail as one of the greatest nature writers in American letters\\" (Peter Matthiessen, for Time\\"s 100 Most Influential People of the Century). This fortieth anniversary edition celebrates Rachel Carson\\"s watershed book with a new introduction by the author and activist Terry Tempest Williams and a new afterword by the acclaimed Rachel Carson biographer Linda Lear, who tells the story of Carson\\"s courageous defense of her truths in the face of ruthless assault from the chemical industry in the year following the publication of Silent Spring and before her untimely death in 1964.'),
(7, 'Your Dreams are Mine Now', 'Fiction & Non Fiction', 'Paperback', '0143423002', 'http://c398754.r54.cf1.rackcdn.com/9780143423003.jpg', 'Ravinder Singh', 'Metro Reads', '272', '2014-11-20', 'They are complete opposites! She''s a small-town girl who takes admission in Delhi University (DU). An idealist, studies are her first priority. He''s a Delhi guy, seriously into youth politics in DU. He fights to make his way. Student union elections are his first priority. But then opposites attract as well! A scandal on campus brings them together, they begin to walk the same path and somewhere along, fall in love… But their fight against evil comes at a heavy price, which becomes the ultimate test of their lives. Against the backdrop of dominant campus politics, Your Dreams Are Mine Now is an innocent love story that will tug at your heartstrings.'),
(8, 'Fifty Shades of Grey', 'Fiction & Non Fiction', 'Paperback', '0099579936', 'http://localhost/intelliPurchase/images/books/fiction/8.jpg', 'E L James', 'RHUK', '560', '2012-04-12', 'Fifty Shades of Grey is an erotic novel that tells the story of the growing relationship between Christian Grey, a young business magnate and Anastasia Steele, a college student. The unlikely couple go through a strange beginning where Christian, the control-freak, puts a non-disclosure agreement in front of Anastasia before they interact any further. The shocked but interested Anastasia takes the leap and signs the document. The book stands out from others because of its daring and descriptive erotic scenes that include a lot of bondage and discipline, dominance and submission, as well as sadism and masochism. Not for the faint-hearted, Fifty Shades of Grey gives readers vivid situations featuring extraordinary romantic scenes. The Fifty Shades of Grey trilogy has sold more than 90 million copies internationally and holds the world record for the fastest-selling paperback. It has also been translated into over 51 languages. The book won many accolades including two National Book Awards in the UK for Book of the Year and Popular Fiction Book of the Year in 2012. The book was published in 2012 and is available in paperback. Key Features: The film adaptation of Fifty Shades of Grey directed by Sam Taylor-Wood is slated for release on February 13th, 2015. Michael De Luca Productions, Trigger Street Productions, Focus Features and Universal Pictures have come together to produce the American film. The book is the first part of a trilogy and is followed by Fifty Shades Darker and Fifty Shades Freed which were published in 2012.'),
(9, 'The Jack London Reader: Various Works by Jack London', 'Fiction & Non Fiction', 'Paperback', '1508434417', 'http://localhost/intelliPurchase/images/books/fiction/9.jpg', 'Jack London', 'CreateSpace Independent Publishing Platform', '500', '2015-02-10', 'The Jack London Reader By Jack London Low Tide Press Large Print Edition Prepared for publication by C. Alan Martin'),
(10, 'Endpoint: (An Action/Adventure Thriller)', 'Action & Adventure', 'Paperback', '1927047153', 'http://localhost/intelliPurchase/images/books/fiction/10.jpg', 'Rejean Giguere', 'Rejean Giguere', '304', '2013-02-08', 'In 1989 a KGB interrogator thought he discovered a message embedded in a victim’s migraine headache. In 2012 Alexi Tambov is snatching people off the streets of New York City, still trying to solve the riddle of the message. When Gary and Chantal are mugged coming out of a support group meeting, they brush it off as “life in the city”. When the second mugging turns into a full-fledged kidnapping they are dragged into Alexi’s web. In a desperate effort to protect Chantal, Gary decides he has to solve the puzzle before Septon Research. Piecing together the clues, he realizes to solve the message he has to combine the auras. His long-term bond with Russian mobster Ivan Petrovski results in help coming from unlikely sources. Chantal and the team will join Gary on this action/adventure quest that leads them in a running battle across North America, before coming to a shocking end in the canyons of Arizona. Who will get there first? Who will believe what they find?'),
(11, 'Amberella: An Action Hero Adventure Paperback', 'Action & Adventure', 'Paperback', '1463436769', 'http://c398754.r54.cf1.rackcdn.com/9781463436766.jpg', 'Carole Wells', 'Authorhouse', '84', '2012-01-11', 'Amberella is An Action Hero Adventure story of a little princess searching to find her mother. She travels through different exotic lands experiencing frightening and funny encounters. The Queens from different enchanting lands teach her wisdom, respect and secret guide lines to prepare her for her future. She learns from different animals how to communicate and respect all living creatures. Many children have responsibilities beyond their years. Amberella is a fantasy to help children cope with adult problems by learning that the Laws of the Universe can make them stronger and more successful. Amberella demonstrates how to believe in one''s self and dare to live one''s dreams. Critics are saying that Amberella is not only for children, but a book for all ages!'),
(12, 'My Name is Abu Salem Paperback', 'Action & Adventure', 'Paperback', '0143423592', 'http://c398754.r54.cf1.rackcdn.com/9780143423591.jpg', 'S. Hussain Zaidi', 'Penguin', '288', '2014-11-16', 'Mumbai has produced many dons-but perhaps none so colourful as Abu Salem. The flamboyant ex-aide of Dawood Ibrahim is best known for his involvement in the Mumbai blasts of 1993 and for the murder of music composer Gulshan Kumar. But he became equally famous for his relationship with actress Monica Bedi and his close connection to Bollywood, leading to a number of attempted murders of the film industry''s biggest names. Now comes the ultimate telling of his life from the writer who knows the Mumbai underworld better than anyone else. Gripping, full of unknown details and first-hand accounts, My Name Is Abu Salem is another unputdownable book from S. Hussain Zaidi.');

-- --------------------------------------------------------

--
-- Table structure for table `book_prices`
--

CREATE TABLE IF NOT EXISTS `book_prices` (
`book_id` int(11) NOT NULL,
  `book_title` text NOT NULL,
  `store1_price` text NOT NULL,
  `store1_delivery` text NOT NULL,
  `store1_shipping` text NOT NULL,
  `store1_url` text NOT NULL,
  `store2_price` text NOT NULL,
  `store2_delivery` text NOT NULL,
  `store2_shipping` text NOT NULL,
  `store2_url` text NOT NULL,
  `store3_price` text NOT NULL,
  `store3_delivery` text NOT NULL,
  `store3_shipping` text NOT NULL,
  `store3_url` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_prices`
--

INSERT INTO `book_prices` (`book_id`, `book_title`, `store1_price`, `store1_delivery`, `store1_shipping`, `store1_url`, `store2_price`, `store2_delivery`, `store2_shipping`, `store2_url`, `store3_price`, `store3_delivery`, `store3_shipping`, `store3_url`) VALUES
(1, 'The Diary of a Young Girl', '116', 'Out of Stock', 'Rs 30', 'http://www.uread.com/book/diary-a-young-girl-anne/9789380914312\n', '75', '6-7 business days.', 'Rs 60', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9789380914312', '150', '7 - 10 days', 'Rs 50', 'http://www.crossword.in/books/search%3Fq=9789380914312'),
(2, 'The Story of My Experiments with Truth by Mahatma Gandhi-English (English)', '150', 'Out of Stock', 'Rs 30', 'http://www.uread.com/book/my-experiments-truth-mahatma-gandhi/9789350641026', '145', '6-7 business days.', 'Rs 70', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9789350641026', 'N/A', 'N/A', 'N/A', 'http://www.crossword.in&store=crossword'),
(3, 'Long Walk to Freedom', '517', '2-3 Business Days', 'Free', 'http://www.uread.com/book/long-walk-freedom-nelson-mandela/9780349106533', '699', '4-5 business days.', 'Free', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9780349106533', '650', '3 - 5 days', 'Free', 'http://www.crossword.in/books/search%3Fq=9780349106533'),
(4, 'The Autobiography of Benjamin Franklin', '135', 'Out of Stock', 'Rs 30', 'http://www.uread.com/book/autobiography-benjamin-franklin-benjamin-franklin/9788190276689', '79', '6-7 business days.', 'Rs 60', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9788190276689', '145', '3 - 5 days', 'Rs 50', 'http://www.crossword.in/books/search%3Fq=9788190276689'),
(5, 'Open: An Autobiography', '270', '4-6 Business Days', 'Free', 'http://www.uread.com/book/open-autobiography-andre-agassi/9780007416790', '450', '4-5 business days.', 'Free', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9780007416790', '450', '3 - 5 days', 'Rs 50', 'http://www.crossword.in/books/search%3Fq=9780007416790'),
(6, 'Silent Spring Paperback', '832', '10-14 Business Days', 'Free', 'http://www.uread.com/book/silent-spring-osborne-rachel-carson/9780618249060', '922', '15-16 business days.', 'Rs 70', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9780618249060', 'N/A', 'N/A', 'N/A', 'http://www.crossword.in'),
(7, 'Your Dreams are Mine Now', '105', '2-3 Business Days', 'Rs 40', 'http://www.uread.com/book/your-dreams-are-mine-now/9780143423003', '117', '2-3 business days.', 'Rs 40', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9780143423003', '131', '3 - 5 days', 'Rs 50', 'http://www.crossword.in/books/search%3Fq=9780143423003'),
(8, 'Fifty Shades Of Grey (Hindi)', '299', 'Out of Stock', 'Rs 30', 'http://www.uread.com/book/fifty-shades-grey-e-l/9780099579939', '320', '6-7 business days.', 'Rs 100', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9780099579939', '225', '3 - 5 days', 'Rs 50', 'http://www.crossword.in/books/search%3Fq=9780099579939'),
(9, 'Adventure Paperback', '595', '10-14 Business Days', 'Free', 'http://www.uread.com/book/adventure-jack-london/9781497486386', '569', '24-25 business days.', 'Free', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9781497486386', 'N/A', 'N/A', 'N/A', 'http://www.crossword.in'),
(10, 'Endpoint: (An Action/Adventure Thriller) Paperback', '794', '10-14 Business Days', 'Free', 'http://www.uread.com/book/endpoint-rejean-giguere/9781927047156', '673', '24-25 business days.', 'Free', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9781927047156', 'N/A', 'N/A', 'N/A', 'http://www.crossword.in'),
(11, 'Amberella: An Action Hero Adventure Paperback', '1985', '10-14 Business Days', 'Free', 'http://www.uread.com/book/amberella-carole-wells/9781463436766', '1880', '24-25 business days.', 'Free', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9781463436766', 'N/A', 'N/A', 'N/A', 'http://www.crossword.in'),
(12, 'My Name is Abu Salem Paperback', '179', 'Out of Stock', 'Rs 30', 'http://www.uread.com/book/my-name-abu-salem-hussein/9780143423591', '212', '2-3 business days.', 'Free', 'http%3A%2F%2Fwww.flipkart.com%2Fsearch%2Fa%2Fbooks%3Fquery%3D9780143423591', 'N/A', 'N/A', 'N/A', 'http://www.crossword.in');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`f_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `subject`, `query`) VALUES
(1, 'Amar Gannapuram', 'amargannapuram@gmail.com', 'Test Check', 'This is a test check to see if this function works'),
(2, 'Shehzad Shaikh', 'shaizaad.szd@gmail.com', 'Sample Request', 'Sample Test for Feedback'),
(3, 'Shaizaad Shaikh', 'anuyapatrikar@agrajtecnocrats.com', 'Test check to check the length of the words to be displayed in the short description box', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ducimus itaque nemo ut tempora vel porro error unde rerum commodi voluptatum architecto debitis aspernatur pariatur reiciendis, illo, at dolorum rem.\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ducimus itaque nemo ut tempora vel porro error unde rerum commodi voluptatum architecto debitis aspernatur pariatur reiciendis, illo, at dolorum rem.\n'),
(4, 'Shabbir Bata', 'bata_shabbir@yahoo.com', 'Test check to check the length of the words to be displayed in the short description box', 'Well this is a sample test check to display the number of words visible in the short description box.'),
(5, 'amar2', 'amar2@gmail.com', 'sample test', 'please enter a query to see if this works'),
(6, 'Shabbir Bata', 'sha@cn.com', 'ehllo', 'this is a samoke sjs sv d  '),
(7, 'Shabbir Bata', 'sample@gmail.com', 'This is a Sample Test Check', 'Test Check for a sample query'),
(8, 'Aashna Bhimani', 'aashna@gmail.com', 'Provision to purchase products online.', 'Is there a provision to purchase any item on your website?'),
(9, 'Shehzad Shaikh', 'shaizaad.szd@gmail.com', 'Test Subject', 'just to flood the table'),
(10, 'Shaz Rocks', 'shaz@gmail.com', 'Test Subject 2', '\nThis is a test subject again'),
(11, 'Er. Shehzad Shaikh', 'herocks@twitter.com', 'rocking he', 'he rocks here');

-- --------------------------------------------------------

--
-- Table structure for table `intelli_sessions`
--

CREATE TABLE IF NOT EXISTS `intelli_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intelli_sessions`
--

INSERT INTO `intelli_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('20a77b6bfb21efbd802b0b0b71ecb966', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:41.0) Gecko/20100101 Firefox/41.0', 1444753039, ''),
('7693191bf0c7d18b4ff3b5a83eb58788', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:40.0) Gecko/20100101 Firefox/40.0', 1440417851, 'a:5:{s:4:"u_id";s:1:"1";s:6:"u_name";s:15:"Shaizaad Shaikh";s:7:"u_email";s:22:"shaizaad.szd@gmail.com";s:6:"u_role";s:10:"Super User";s:12:"is_logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_details`
--

CREATE TABLE IF NOT EXISTS `mobile_details` (
`mobile_id` int(11) NOT NULL,
  `mobile_network_technology` text NOT NULL,
  `mobile_launch_announced` text NOT NULL,
  `mobile_launch_status` text NOT NULL,
  `mobile_body_dimensions` text NOT NULL,
  `mobile_body_weight` text NOT NULL,
  `mobile_body_build` text NOT NULL,
  `mobile_body_sim` text NOT NULL,
  `mobile_display_type` text NOT NULL,
  `mobile_display_size` text NOT NULL,
  `mobile_display_resolution` text NOT NULL,
  `mobile_display_multitouch` text NOT NULL,
  `mobile_display_protection` text NOT NULL,
  `mobile_platform_os` text NOT NULL,
  `mobile_platform_chipset` text NOT NULL,
  `mobile_platform_cpu` text NOT NULL,
  `mobile_memory_cardslot` text NOT NULL,
  `mobile_memory_internal` text NOT NULL,
  `mobile_camera_primary` text NOT NULL,
  `mobile_camera_features` text NOT NULL,
  `mobile_camera_video` text NOT NULL,
  `mobile_camera_secondary` text NOT NULL,
  `mobile_sound_alerttypes` text NOT NULL,
  `mobile_sound_loudspeaker` text NOT NULL,
  `mobile_sound_3.5mmjack` text NOT NULL,
  `mobile_comms_wlan` text NOT NULL,
  `mobile_comms_bluetooth` text NOT NULL,
  `mobile_comms_gps` text NOT NULL,
  `mobile_comms_nfc` text NOT NULL,
  `mobile_comms_infraredport` text NOT NULL,
  `mobile_comms_radio` text NOT NULL,
  `mobile_comms_usb` text NOT NULL,
  `mobile_features_sensors` text NOT NULL,
  `mobile_features_messaging` text NOT NULL,
  `mobile_features_browser` text NOT NULL,
  `mobile_features_java` text NOT NULL,
  `mobile_battery_standby` text NOT NULL,
  `mobile_battery_talktime` text NOT NULL,
  `mobile_misc_colors` text NOT NULL,
  `mobile_misc_sarus` text NOT NULL,
  `mobile_misc_sareu` text NOT NULL,
  `mobile_misc_pricegroup` text NOT NULL,
  `mobile_tests_performance` text NOT NULL,
  `mobile_tests_display` text NOT NULL,
  `mobile_tests_camera` text NOT NULL,
  `mobile_tests_loudspeaker` text NOT NULL,
  `mobile_tests_audioquality` text NOT NULL,
  `mobile_tests_batterylife` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobile_prices`
--

CREATE TABLE IF NOT EXISTS `mobile_prices` (
`mobile_id` int(11) NOT NULL,
  `mobile_name` text NOT NULL,
  `mobile_price` text NOT NULL,
  `mobile_delivery` text NOT NULL,
  `mobile_shipping` text NOT NULL,
  `mobile_url` text NOT NULL,
  `mobile_store` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
`poll_id` int(11) NOT NULL,
  `prod_id` text NOT NULL,
  `user_id` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`poll_id`, `prod_id`, `user_id`, `answer`) VALUES
(1, '2', '1', 'Yes'),
(2, '2', '5', 'No'),
(3, '1', '5', 'Yes'),
(4, '7', '5', 'No'),
(5, '1', '11', 'Yes'),
(6, '7', '1', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
`rev_id` int(11) NOT NULL,
  `prod_id` varchar(50) NOT NULL,
  `rev_name` text NOT NULL,
  `rev_url` text NOT NULL,
  `rev_rating` varchar(100) NOT NULL,
  `rev_subject` text NOT NULL,
  `rev_desc` text NOT NULL,
  `rev_date` text NOT NULL,
  `rev_store_url` text NOT NULL,
  `rev_helpful` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rev_id`, `prod_id`, `rev_name`, `rev_url`, `rev_rating`, `rev_subject`, `rev_desc`, `rev_date`, `rev_store_url`, `rev_helpful`) VALUES
(7, '1', 'Shaizaad Shaikh', 'http://localhost/intelliPurchase/index.php/user/index/1', '4', 'Good Book', 'Best book by Anne Frank', '2015-04-05 07:52 PM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0),
(8, '2', 'Shaizaad Shaikh', 'http://localhost/intelliPurchase/index.php/user/index/1', '5', 'Excellent Book', 'Last words of M K Gandhi written wisely', '2015-04-05 09:11 PM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0),
(9, '6', 'Shaizaad Shaikh', 'http://localhost/intelliPurchase/index.php/user/index/1', '2', 'Nice Book', 'Gud book but dont read please.', '2015-04-07 10:46 AM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0),
(10, '6', 'Shaizaad Shaikh', 'http://localhost/intelliPurchase/index.php/user/index/1', '3', 'Gud book', 'This is a good book to be purchased', '2015-04-07 10:49 AM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0),
(11, '1', 'Shaizaad Shaikh', 'http://localhost/intelliPurchase/index.php/user/index/1', '4', 'Very nice book', 'It is a good book', '2015-04-07 02:46 PM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0),
(12, '7', 'Shaizaad Shaikh', 'http://localhost/intelliPurchase/index.php/user/index/1', '4', 'Gud book', 'A must read book', '2015-04-20 02:49 PM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0),
(13, '7', 'Shaizaad Shaikh', 'http://localhost/intelliPurchase/index.php/user/index/1', '5', 'Awesome Book', 'Gud story line', '2015-04-20 02:50 PM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0),
(14, '7', 'Shaizaad Shaikh', 'http://localhost/intelliPurchase/index.php/user/index/1', '1', 'Not recommended', 'Old base story', '2015-04-20 02:50 PM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0),
(15, '7', 'Shaizaad Shaikh', 'http://localhost/intelliPurchase/index.php/user/index/1', '5', 'Worth Reading', 'Must read book for Fiction lovers', '2015-04-24 08:43 PM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0),
(16, '1', 'Mark Ruffalo', 'http://localhost/intelliPurchase/index.php/user/index/11', '4', 'Interesting Book', 'A good book to read from', '2015-05-05 11:19 AM', 'http://localhost/intelliPurchase/images/store/intellipurchase.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`u_id` int(11) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_pwd` varchar(132) NOT NULL,
  `u_dp` varchar(255) NOT NULL,
  `u_regdate` varchar(20) NOT NULL,
  `u_role` varchar(20) NOT NULL,
  `u_activestatus` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_email`, `u_name`, `u_pwd`, `u_dp`, `u_regdate`, `u_role`, `u_activestatus`) VALUES
(1, 'kunal@gmail.com', 'Kunal Agrawal', 'cd60e8601a85c55107981244579f4bb4d6d33711', 'http://localhost/intelliPurchase/images/avatars/4.jpg', '2015-10-05 08:19 PM', 'Super User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `u_id` int(11) NOT NULL,
  `u_a_email` varchar(50) NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_dob` varchar(10) NOT NULL,
  `u_prod_rated` int(11) NOT NULL,
  `u_rev_posted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`u_id`, `u_a_email`, `u_gender`, `u_dob`, `u_prod_rated`, `u_rev_posted`) VALUES
(1, 'shaz@gmail.com', 'Male', '24/12/1992', 1, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_detail`
--
ALTER TABLE `book_detail`
 ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_prices`
--
ALTER TABLE `book_prices`
 ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `intelli_sessions`
--
ALTER TABLE `intelli_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `mobile_details`
--
ALTER TABLE `mobile_details`
 ADD PRIMARY KEY (`mobile_id`);

--
-- Indexes for table `mobile_prices`
--
ALTER TABLE `mobile_prices`
 ADD PRIMARY KEY (`mobile_id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
 ADD PRIMARY KEY (`poll_id`), ADD UNIQUE KEY `poll_id` (`poll_id`), ADD KEY `poll_id_2` (`poll_id`), ADD KEY `poll_id_3` (`poll_id`), ADD KEY `poll_id_4` (`poll_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`rev_id`), ADD UNIQUE KEY `rev_id_2` (`rev_id`), ADD KEY `rev_id` (`rev_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`u_id`,`u_email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
 ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_detail`
--
ALTER TABLE `book_detail`
MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `book_prices`
--
ALTER TABLE `book_prices`
MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mobile_details`
--
ALTER TABLE `mobile_details`
MODIFY `mobile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mobile_prices`
--
ALTER TABLE `mobile_prices`
MODIFY `mobile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
