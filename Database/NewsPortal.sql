-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2022 at 02:38 PM
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
-- Database: `newsportal`
--
CREATE DATABASE IF NOT EXISTS `abhishek_newsportal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `abhishek_newsportal`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(3, 'Politics', 'News of National and International Politics.', '261981653549594.jpg'),
(4, 'Entertainment', 'News Regarding Actors/Actress, Singers, Influencer, Movies, Music Videos, etc.', ''),
(5, 'Sports', 'All info regarding sports like ongoing matches, Scores, Players etc.', ''),
(6, 'Society', 'News regarding trending topics on the society and whats going in the society', '123.png'),
(18, 'Tech', 'All info about what\'s new and what has happened in the tech related field.', '487341653549606.webp');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `published` varchar(255) NOT NULL DEFAULT 'Yes',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `published_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `image`, `published`, `created_on`, `published_on`) VALUES
(1, 'Privacy Policy', '<p>At E-Samachar, accessible from www.esamachar.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by E-Samachar and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in E-Samachar. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href=\"https://www.generateprivacypolicy.com/\">Free Privacy Policy Generator</a>.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n\r\n<h2>Information we collect</h2>\r\n\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n\r\n<h2>How we use your information</h2>\r\n\r\n<p>We use the information we collect in various ways, including to:</p>\r\n\r\n<ul>\r\n<li>Provide, operate, and maintain our website</li>\r\n<li>Improve, personalize, and expand our website</li>\r\n<li>Understand and analyze how you use our website</li>\r\n<li>Develop new products, services, features, and functionality</li>\r\n<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n<li>Send you emails</li>\r\n<li>Find and prevent fraud</li>\r\n</ul>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>E-Samachar follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\' movement on the website, and gathering demographic information.</p>\r\n\r\n<h2>Cookies and Web Beacons</h2>\r\n\r\n<p>Like any other website, E-Samachar uses \'cookies\'. These cookies are used to store information including visitors\' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users\' experience by customizing our web page content based on visitors\' browser type and/or other information.</p>\r\n\r\n<p>For more general information on cookies, please read <a href=\"https://www.generateprivacypolicy.com/#cookies\">the Cookies article on Generate Privacy Policy website</a>.</p>\r\n\r\n\r\n\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n\r\n<P>You may consult this list to find the Privacy Policy for each of the advertising partners of E-Samachar.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on E-Samachar, which are sent directly to users\' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that E-Samachar has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>E-Samachar\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers\' respective websites.</p>\r\n\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n<p>Request that a business that collects a consumer\'s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n<p>Request that a business that sells a consumer\'s personal data, not sell the consumer\'s personal data.</p>\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>GDPR Data Protection Rights</h2>\r\n\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>\r\n<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>Children\'s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>E-Samachar does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>                                                            ', '', 'Yes', '2022-05-24 15:42:30', '2022-05-25 00:40:13'),
(2, 'Terms and Condition', '<p>Welcome to E-Samachar!</p>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of E-Samachar\'s Website, located at www.esamachar.com.</p>\r\n\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use E-Samachar if you do not agree to take all of the terms and conditions stated on this page.</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: \"Client\", \"You\" and \"Your\" refers to you, the person log on this website and compliant to the Company’s terms and conditions. \"The Company\", \"Ourselves\", \"We\", \"Our\" and \"Us\", refers to our Company. \"Party\", \"Parties\", or \"Us\", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n\r\n<h3><strong>Cookies</strong></h3>\r\n\r\n<p>We employ the use of cookies. By accessing E-Samachar, you agreed to use cookies in agreement with the E-Samachar\'s Privacy Policy. </p>\r\n\r\n<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n\r\n<h3><strong>License</strong></h3>\r\n\r\n<p>Unless otherwise stated, E-Samachar and/or its licensors own the intellectual property rights for all material on E-Samachar. All intellectual property rights are reserved. You may access this from E-Samachar for your own personal use subjected to restrictions set in these terms and conditions.</p>\r\n\r\n<p>You must not:</p>\r\n<ul>\r\n    <li>Republish material from E-Samachar</li>\r\n    <li>Sell, rent or sub-license material from E-Samachar</li>\r\n    <li>Reproduce, duplicate or copy material from E-Samachar</li>\r\n    <li>Redistribute content from E-Samachar</li>\r\n</ul>\r\n\r\n<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href=\"https://www.privacypolicies.com/blog/sample-terms-conditions-template/\">Terms And Conditions Template</a>.</p>\r\n\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. E-Samachar does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of E-Samachar,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, E-Samachar shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n\r\n<p>E-Samachar reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n\r\n<p>You warrant and represent that:</p>\r\n\r\n<ul>\r\n    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\r\n    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\r\n    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>\r\n    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\r\n</ul>\r\n\r\n<p>You hereby grant E-Samachar a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n\r\n<h3><strong>Hyperlinking to our Content</strong></h3>\r\n\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n\r\n<ul>\r\n    <li>Government agencies;</li>\r\n    <li>Search engines;</li>\r\n    <li>News organizations;</li>\r\n    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\r\n    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\r\n</ul>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>\r\n\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n\r\n<ul>\r\n    <li>commonly-known consumer and/or business information sources;</li>\r\n    <li>dot.com community sites;</li>\r\n    <li>associations or other groups representing charities;</li>\r\n    <li>online directory distributors;</li>\r\n    <li>internet portals;</li>\r\n    <li>accounting, law and consulting firms; and</li>\r\n    <li>educational institutions and trade associations.</li>\r\n</ul>\r\n\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of E-Samachar; and (d) the link is in the context of general resource information.</p>\r\n\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>\r\n\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to E-Samachar. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n\r\n<ul>\r\n    <li>By use of our corporate name; or</li>\r\n    <li>By use of the uniform resource locator being linked to; or</li>\r\n    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>\r\n</ul>\r\n\r\n<p>No use of E-Samachar\'s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n\r\n<h3><strong>iFrames</strong></h3>\r\n\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n\r\n<h3><strong>Content Liability</strong></h3>\r\n\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\r\n\r\n<h3><strong>Your Privacy</strong></h3>\r\n\r\n<p>Please read Privacy Policy</p>\r\n\r\n<h3><strong>Reservation of Rights</strong></h3>\r\n\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n\r\n<h3><strong>Removal of links from our website</strong></h3>\r\n\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\r\n\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\r\n\r\n<h3><strong>Disclaimer</strong></h3>\r\n\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n\r\n<ul>\r\n    <li>limit or exclude our or your liability for death or personal injury;</li>\r\n    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\r\n    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\r\n    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\r\n</ul>\r\n\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>\r\n                    ', '', 'Yes', '2022-05-24 15:49:33', '2022-05-24 16:40:43'),
(3, 'About', '<p>Today, the entire globe is online; hence news cannot be left behind. Internet news portals currently serve an important role in teaching and enlightening people regarding current events throughout the world. In summary, the job of an online news portal is critical in today’s fast-paced world, where nobody has sufficient opportunity to rest in front of the screen to keep up with what’s going on across the world. A well-designed news site can provide you with the most up-to-date information on political stories, share market news, business publications, celebrity news, sports news, foreign news, as well as many other topics. Furthermore, internet advertising of your media siteHandleskontor expands your reach across various social media channels, allowing you to reach consumers effortlessly.</p>\r\n<h2>The significance of a news portal</h2>\r\n<p>Watching the headlines online helps you save time while providing you with the most up-to-date information. It also spares you money that you would have spent on a newspaper package. You may also want to watch television or listen to the media; you may also want to browse the news website and gain information while at work. An internet news portal serves a number of functions</p>                    ', '', 'Yes', '2022-05-24 15:49:38', '2022-05-24 16:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`) VALUES
(3, 'admin'),
(2, 'reporter');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `postby` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `published` varchar(255) NOT NULL DEFAULT 'Yes',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `published_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `postby`, `category`, `content`, `image`, `published`, `created_on`, `published_on`) VALUES
(29, 'PlayStation accessories and games are discounted for Sony’s Days of Play', 'admin', 'Tech', '<p>Sony’s annual Days of Play promotion has kicked off once again, offering many quality discounts on PlayStation games and accessories. In the past, this event has even seen the launch of limited edition consoles, but that feels like a distant memory now — much like easily buying a console without an online queue. The good news is that you can save on some recent releases, like Lego Star Wars: The Skywalker Saga, as well as Sony’s first discount across the full line of colorful DualSense controllers. These deals run through June 8th, with some accessory discounts lasting through June 11th or once they sell out. Here are some notable ones most worthy of your money.</p><p>&nbsp;</p><h3>ACCESSORIES</h3><p>First up, a product we don’t often see on sale is the Sony Pulse 3D wireless headset for PS5 and PS4. This is the latest offering of a first-party gaming headset from Sony, and you can pick it up for $89.99 at Sony, Best Buy, or Amazon in either black or the original white. That’s $10 off from its usual pricing of $99.99. While there are many great headsets to choose from, this is the most cost-effective way to use Sony’s 3D audio feature for the PlayStation 5.</p><h3>&nbsp;</h3><h3>Games</h3><p>There are many digital titles on sizable discounts across the PlayStation Store. While there are too many to list, there are some key standouts like Lego Star Wars: The Skywalker Saga for $47.99 ($12 off), MLB The Show 22 for $39.59 on PS4 or $49.59 on PS5 (about $20 off each), Dying Light 2 Stay Human for $47.99 ($12 off), and Ratchet and Clank: Rift Apart for $39.89 (about $30 off).</p><p>Some retailers are also offering similar discounts on physical copies if you prefer a disc. That includes Uncharted: Legacy of Thieves Collection for $29.99 ($20 off) at Best Buy and Amazon, Sackboy: A Big Adventure for $29.99 ($30 off) at Best Buy and Amazon, and The Nioh Collection for $39.99 ($30 off) at Amazon and directly from Sony.</p><p>With this sale running for two weeks, we may see even more gaming discounts pop up around it to take advantage of the buzz. For example, even Elden Ring is $50.99 ($9 off) right now for the PS5 version at Best Buy. So it’s a good time to save on all kinds of games.</p>', '326361653525590.webp', 'Yes', '2022-05-26 00:38:41', '2022-06-27 19:21:45'),
(30, 'Another live-action Speed Racer is coming to Apple TV Plus with J.J. Abrams behind the wheel', 'admin', 'Tech', '<p>Though it’s only been 14 years since the last live-action adaptation of Speed Racer from a Western production studio, Apple and J. J. Abrams are stepping up to the plate to make another. Variety reports that Apple and Warner Bros. Television Studios are teaming up to produce a new Speed Racer with J. J. Abrams executive producing and Ron Fitzgerald (Westworld) and Hiram Martinez (Snowfall) attached to co-showrun.</p>\r\n<p>Like the 2008 film, the ‘60s anime series, and the original Mach Go Go Go manga they’re all based on, the new Apple TV Plus series will tell the story of Speed, a young race car driver living in the shadow of his (presumably) long-lost brother. While the new Speed Racer has reportedly been in development for some time, there are currently no details about how closely it will cling to the source material, who the cast will consist of, or when the series might debut.</p>                    ', '701471653526499.webp', 'Yes', '2022-05-26 00:54:59', '2022-06-27 18:54:51'),
(31, 'Apple VP discourages retail workers from joining a union in leaked video', 'admin', 'Tech', '<p>Apple vice president of people and retail Deirdre O’Brien is explicitly dissuading employees from joining a union in an internal video leaked to The Verge. “I worry about what it would mean to put another organization in the middle of our relationship,” she says. “An organization that does not have a deep understanding of Apple or our business. And most importantly one that I do not believe shares our commitment to you.”</p>\r\n<p>This message comes amid union drives at three of Apple’s retail stores — one in New York, one in Maryland, and one in Georgia. The latter two have set dates to hold elections, which they agreed to with Apple. Workers at the Cumberland Mall Apple store will vote on whether to unionize starting June 2nd, and employees at Apple’s Towson Town Center store in Maryland do the same starting June 15th.</p>\r\n<p>In the video, O’Brien shares common anti-union talking points, including that a union would slow the company’s ability to respond to employee concerns. “Apple moves incredibly fast,” she said. “It’s one thing I love about our work in retail. It means that we need to be able to move fast too. And I worry that because the union will bring its own legally mandated rules that would determine how we work through issues it could make it harder for us to act swiftly to address things that you raise. I’m committed to and proud of our ability to act fast to support our teams, to support you. But I don’t know that we could have moved as quickly under a collective bargaining agreement, as it could limit our ability to make immediate widespread changes to improve your experience. And I think that’s what really is at stake here.”</p>\r\n<p>One of the primary issues Apple retail workers are organizing around is pay. In the United States, unionized workers make about 13.2 percent more than their non-unionized peers in the same sector, according to the Economic Policy Institute.</p>\r\n<p>The executive has been visiting Apple retail stores in person over the past few weeks, a move many employees say seems designed to placate workers who are trying to organize.</p>\r\n<p>Apple’s actions have shown that it’s not keen on its employees organizing; it’s hired anti-union lawyers, given managers scripts to read to employees about why unions are bad, and held captive audience meetings. Apple’s messages were largely similar to what O’Brien said in the video: the company has told its workers that unions don’t understand its culture. However, the existing union drives are helmed by coalitions of Apple workers who have cited explicit critiques about Apple management’s relationship with employees. While these organizations are working with large, established unions, the efforts are led by Apple workers.</p>\r\n<p>The company has also been accused of union busting in other ways twice by allegedly preventing employees from posting pro-union posters and interrogating employees about union activity.</p>\r\n<p>Despite all this, the company’s executives haven’t explicitly come out with an anti-union stance until now. While Apple’s actions have been clear, its words have been relatively silent apart from individual store leads holding meetings. Now, its message is clear — and straight from the top.</p>                    ', '566471653527093.webp', 'Yes', '2022-05-26 01:02:37', '2022-06-27 19:21:49'),
(32, 'Jose Mourinho : \'A serial winner who has brought Roma to life\'', 'admin', 'Sports', '<p>Europe\'s third-tier club competition has been derided in some quarters, but for Mourinho the win over Feyenoord was every bit as important as his two Champions Leagues triumphs with Porto in 2004 and Inter Milan in 2010.</p>\r\n\r\n<p>Mourinho becomes the first manager to win all three major European competitions after making it five wins in five European finals.</p>\r\n\r\n<p>\"Football is about winning and Mourinho wins,\" said former Manchester United midfielder Owen Hargreaves on BT Sport.</p>\r\n\r\n<p>\"He\'s a serial winner and he has brought this Roma team to life.\"</p>\r\n\r\n<h3>Box office Mourinho delivers again</h3>\r\n<p>This was the 26th trophy of Mourinho\'s managerial career - 19 years after he masterminded Porto\'s Uefa Cup win in 2003.</p>\r\n\r\n<p>He was announced as Roma boss last May and was tasked with building the club up after a disappointing seventh-placed finish in Serie A in 2020-21.</p>\r\n\r\n<p>\"Mourinho said it wasn\'t part of the plan [to win the trophy]. The plan was to build this team, it was the start of the project,\" Joe Cole, who played under Mourinho at Chelsea, told BT Sport.</p>\r\n\r\n<p>Roma\'s run to the final was not all smooth, with the Portuguese coming under fire after an embarrassing 6-1 defeat by Bodo/Glimt in the group stage last October.</p>\r\n\r\n<p>\"The great thing about my career is that, aside from the Europa League with Manchester United, doing it with Porto, Inter and Roma is very, very, very special,\" Mourinho said.</p>\r\n\r\n<p>\"It is one thing to win when everyone expects it, when you made the investments to win, but it\'s quite another to win when something feels immortal, that feels truly special.</p>\r\n\r\n<p>\"This remains in the history of Roma, but also mine. I was told only I, Sir Alex [Ferguson] and Giovanni Trapattoni won trophies in three different decades. It makes me feel a little old, but it\'s nice for my career.\"</p>                                        ', '514881653528142.jpg', 'Yes', '2022-05-26 01:22:22', '2022-06-27 18:54:59'),
(33, 'Germany v England: Security concerns over Nations League game in Munich', 'admin', 'Sports', '<p>The FA is conscious it is on a \'yellow card\' with European governing body Uefa after a number of incidents at the Euro 2020 final between England and Italy at Wembley last July.\r\n\r\n<p>There are concerns further trouble could impact the joint UK and Ireland bid to host Euro 2028.\r\n\r\n<p>Following a spate of pitch invasions domestically, the spotlight will be on fans travelling to the game next month.\r\n\r\n<p>England supporters have been allocated 3,466 tickets in the away end, but many travelling fans have bought seats in the home section of Bayern Munich\'s Allianz Arena. The FA also expects some to travel without tickets.\r\n\r\n<p>However 880 England fans subject to football banning orders will have to hand in their passports before the game.\r\nWith their game in Budapest against Hungary on 4 June to be played behind closed doors after trouble at Puskas Arena during the European Championships, the trip to Germany three days later will be the first time England are accompanied by significant away support since the initial coronavirus lockdown in March 2020.\r\n\r\n<p>Precautionary measures are being taken that will see police travelling from the UK, including spotters and intelligence officers. Additionally, no alcohol will be sold to any fans at the stadium.\r\n\r\n<p>England\'s Nations League game at Molineux against Italy on 11 June will be played without spectators after the FA was ordered to play one match behind closed doors as a punishment for the unrest at Wembley Stadium during the Euro 2020 final.\r\n\r\n<p>The FA was fined £84,560 for \"the lack of order and discipline\" and threatened with playing a second game behind closed doors if there is a repeat of similar behaviour by England fans over the next two years.\r\n\r\n<p>Speaking after announcing his latest squad on Tuesday, England boss Gareth Southgate said everyone travelling abroad should be \"good ambassadors for our country\" and \"leave a good impression\".\r\n\r\n<p>But asked if there would be any specific plea for good behaviour before the match, Southgate added: \"I doubt they would listen to it really.\r\n\r\n<p>\"If people are going to cause trouble, it is not going to make a jot of difference what I say.\"\r\n\r\n<p>The entire allocation for away fans will be designated to registered members of the England Supporters Travel Club (ESTC), whose details are on record, while home tickets can be bought by anyone who is unattached and can provide a German address. Some England fans have been submitting their hotel addresses as their own.\r\n\r\n<p>CJ Joiner, an ESTC member of nine years, says the authorities could find it difficult to prevent English fans from sitting in the German section.\r\n\r\n<p>\"I think it\'s just a case of going on to the German FA\'s website and buying a ticket,\" Joiner told BBC Sport. \"You might have to put a German address down but the tickets are downloadable so they are not sent to that address.\r\n\r\n<p>\"I don\'t know if there is any way of an English person being stopped from buying a ticket. I would just hope that everybody that does get in the home end behaves respectably and there is no trouble.\"\r\n\r\n<h3>\'Both sets of supporters were exemplary\'</h3>\r\n<p>England\'s game in Munich comes a day after the 78th anniversary of the D-Day landings in World War Two, but Joiner says the rivalry between the two sets of fans is \"not as bad\" as some think.\r\n\r\n<p>\"There is a bit of banter and there is some animosity, but there always is going to be when two sets of supporters get together,\" he added.\r\n\r\n<p>\"Generally speaking, fans will be able to stand there side by side in the pub or in the ground and you won\'t see any problems.\"\r\n\r\n<p>England ended a 55-year wait for a knockout win over Germany in their last-16 tie at Euro 2020 but Joiner - one of the 42,000 fans in attendance at Wembley - says the behaviour of both sets of fans was \"exemplary\".\r\n\r\n<p>Asked if he experienced any disorder in or around the stadium, he said: \"Absolutely nothing.\r\n\r\n<p>\"We had the issues in the final [against Italy] and similar scenes at the start of the semi-final [against Denmark], but in that game both sets of supporters were very well behaved.\r\n\r\n<p>\"They were drinking together outside and there were plenty of German fans outside of their [seated] section. They sang their national anthem and there were no problems whatsoever. I was proud to be a football fan and to be English on that day.\"\r\n\r\n<h3>Germany out for revenge in fans\' match</h3>\r\n\r\n<p>While the spotlight may be on some fans for the wrong reasons, there will also be lots of good-natured activity in Germany.\r\n\r\n<p>England Fans FC will be facing their German counterparts in a friendly, as they did when the two sides met in the Euros.\r\n\r\n<p>Around 200 spectators watched England win on penalties that day and centre-back Paul Robinson from Swindon says the players do not shirk a tackle but enjoy sharing a drink together after the game.\r\n\r\n<p>\"It was competitive and both teams wanted to win,\" Robinson told BBC Sport. \"It was a really good game and it is always good to win, especially in a penalty shootout, with the history between England and Germany.\r\n\r\n<p>\"It can get a bit heated and you may get the odd bad tackle, as in any game, but you get on and all mix together afterwards. We have a photo together and share a drink so it is a really good day.\"', '242051653549913.jpg', 'Yes', '2022-05-26 07:25:13', '2022-05-26 07:25:13'),
(36, 'Germany v England: Security concerns over Nations League game in Munich 2', 'admin', 'Sports', '<p>The FA is conscious it is on a \'yellow card\' with European governing body Uefa after a number of incidents at the Euro 2020 final between England and Italy at Wembley last July.\r\n\r\n<p>There are concerns further trouble could impact the joint UK and Ireland bid to host Euro 2028.\r\n\r\n<p>Following a spate of pitch invasions domestically, the spotlight will be on fans travelling to the game next month.\r\n\r\n<p>England supporters have been allocated 3,466 tickets in the away end, but many travelling fans have bought seats in the home section of Bayern Munich\'s Allianz Arena. The FA also expects some to travel without tickets.\r\n\r\n<p>However 880 England fans subject to football banning orders will have to hand in their passports before the game.\r\nWith their game in Budapest against Hungary on 4 June to be played behind closed doors after trouble at Puskas Arena during the European Championships, the trip to Germany three days later will be the first time England are accompanied by significant away support since the initial coronavirus lockdown in March 2020.\r\n\r\n<p>Precautionary measures are being taken that will see police travelling from the UK, including spotters and intelligence officers. Additionally, no alcohol will be sold to any fans at the stadium.\r\n\r\n<p>England\'s Nations League game at Molineux against Italy on 11 June will be played without spectators after the FA was ordered to play one match behind closed doors as a punishment for the unrest at Wembley Stadium during the Euro 2020 final.\r\n\r\n<p>The FA was fined £84,560 for \"the lack of order and discipline\" and threatened with playing a second game behind closed doors if there is a repeat of similar behaviour by England fans over the next two years.\r\n\r\n<p>Speaking after announcing his latest squad on Tuesday, England boss Gareth Southgate said everyone travelling abroad should be \"good ambassadors for our country\" and \"leave a good impression\".\r\n\r\n<p>But asked if there would be any specific plea for good behaviour before the match, Southgate added: \"I doubt they would listen to it really.\r\n\r\n<p>\"If people are going to cause trouble, it is not going to make a jot of difference what I say.\"\r\n\r\n<p>The entire allocation for away fans will be designated to registered members of the England Supporters Travel Club (ESTC), whose details are on record, while home tickets can be bought by anyone who is unattached and can provide a German address. Some England fans have been submitting their hotel addresses as their own.\r\n\r\n<p>CJ Joiner, an ESTC member of nine years, says the authorities could find it difficult to prevent English fans from sitting in the German section.\r\n\r\n<p>\"I think it\'s just a case of going on to the German FA\'s website and buying a ticket,\" Joiner told BBC Sport. \"You might have to put a German address down but the tickets are downloadable so they are not sent to that address.\r\n\r\n<p>\"I don\'t know if there is any way of an English person being stopped from buying a ticket. I would just hope that everybody that does get in the home end behaves respectably and there is no trouble.\"\r\n\r\n<h3>\'Both sets of supporters were exemplary\'</h3>\r\n<p>England\'s game in Munich comes a day after the 78th anniversary of the D-Day landings in World War Two, but Joiner says the rivalry between the two sets of fans is \"not as bad\" as some think.\r\n\r\n<p>\"There is a bit of banter and there is some animosity, but there always is going to be when two sets of supporters get together,\" he added.\r\n\r\n<p>\"Generally speaking, fans will be able to stand there side by side in the pub or in the ground and you won\'t see any problems.\"\r\n\r\n<p>England ended a 55-year wait for a knockout win over Germany in their last-16 tie at Euro 2020 but Joiner - one of the 42,000 fans in attendance at Wembley - says the behaviour of both sets of fans was \"exemplary\".\r\n\r\n<p>Asked if he experienced any disorder in or around the stadium, he said: \"Absolutely nothing.\r\n\r\n<p>\"We had the issues in the final [against Italy] and similar scenes at the start of the semi-final [against Denmark], but in that game both sets of supporters were very well behaved.\r\n\r\n<p>\"They were drinking together outside and there were plenty of German fans outside of their [seated] section. They sang their national anthem and there were no problems whatsoever. I was proud to be a football fan and to be English on that day.\"\r\n\r\n<h3>Germany out for revenge in fans\' match</h3>\r\n\r\n<p>While the spotlight may be on some fans for the wrong reasons, there will also be lots of good-natured activity in Germany.\r\n\r\n<p>England Fans FC will be facing their German counterparts in a friendly, as they did when the two sides met in the Euros.\r\n\r\n<p>Around 200 spectators watched England win on penalties that day and centre-back Paul Robinson from Swindon says the players do not shirk a tackle but enjoy sharing a drink together after the game.\r\n\r\n<p>\"It was competitive and both teams wanted to win,\" Robinson told BBC Sport. \"It was a really good game and it is always good to win, especially in a penalty shootout, with the history between England and Germany.\r\n\r\n<p>\"It can get a bit heated and you may get the odd bad tackle, as in any game, but you get on and all mix together afterwards. We have a photo together and share a drink so it is a really good day.\"', '242051653549913.jpg', 'Yes', '2022-05-26 07:25:13', '2022-06-27 19:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `site_title` varchar(255) NOT NULL DEFAULT 'Mero Blog',
  `site_description` varchar(255) NOT NULL,
  `font` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `mail_address` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `github_link` varchar(255) DEFAULT NULL,
  `comp_address` varchar(255) DEFAULT NULL,
  `comp_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`site_title`, `site_description`, `font`, `logo`, `favicon`, `facebook_link`, `twitter_link`, `mail_address`, `instagram_link`, `linkedin_link`, `github_link`, `comp_address`, `comp_phone`) VALUES
('E-Samachar', 'E-Samachar is a PHP News Portal Script made for News Media to convert their traditional news distribution method i.e. Hard Copy (Newspaper) to modern solution i.e. to make it Online for today\'s modern era.', 'Baloo 2', '', '', 'https://www.facebook.com/avhishek.dahal', '#', 'abhishekdahal9865@gmail.com;abhishekdahalofficial.com', 'https://www.instagram.com/avhishek.dahal', '#', 'https://github.com/iamavhishek', 'Hetauda-5, Piple', '+977-9865518952;+977-9865102989');

-- --------------------------------------------------------

--
-- Table structure for table `socialmediaurl`
--

CREATE TABLE `socialmediaurl` (
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `mail_address` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `github_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usercontact`
--

CREATE TABLE `usercontact` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_no` bigint(20) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `submitted_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercontact`
--

INSERT INTO `usercontact` (`id`, `fname`, `mname`, `lname`, `email`, `phone_no`, `message`, `submitted_on`) VALUES
(1, 'Abhishek', '', 'Dahal', 'abhishekdahal9865@gmail.com', 10, 'test\r\n', '2022-05-25 20:19:23'),
(2, 'Abhishek', '', 'Dahal', 'abhishekdahal9865@gmail.com', 10, 'test\r\n', '2022-05-25 20:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `passwordd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'prefer not to say',
  `description` varchar(255) NOT NULL,
  `tiktokURL` varchar(255) DEFAULT NULL,
  `facebookURL` varchar(255) DEFAULT NULL,
  `twitterURL` varchar(255) DEFAULT NULL,
  `instagramURL` varchar(255) DEFAULT NULL,
  `linkedinURL` varchar(255) DEFAULT NULL,
  `youtubeURL` varchar(255) DEFAULT NULL,
  `positionn` varchar(255) NOT NULL DEFAULT 'user',
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `passwordd`, `email`, `username`, `phone`, `address`, `gender`, `description`, `tiktokURL`, `facebookURL`, `twitterURL`, `instagramURL`, `linkedinURL`, `youtubeURL`, `positionn`, `image`) VALUES
(1, 'Abhishek', '', 'Dahal', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'admin', 9865518952, 'Hetauda-5, Piple', 'Male', 'An IT Student', 'https://tiktok.com/dummy5', 'https://facebook.com/dummy1', 'https://twitter.com/dummy2', 'https://instagram.com/dummy3', 'https://linkedin.com/dummy4', 'https://youtube.com/dummy6', 'admin', '585931653499054.jpg'),
(4, 'demo', '', 'demo', 'd41d8cd98f00b204e9800998ecf8427e', 'reporter@admin.com', 'reporter', 29, NULL, 'Female', '', NULL, NULL, NULL, NULL, NULL, '', 'reporter', '280661653508515.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `postby` (`postby`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `usercontact`
--
ALTER TABLE `usercontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `positionn` (`positionn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `usercontact`
--
ALTER TABLE `usercontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`postby`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category`) REFERENCES `categories` (`name`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`positionn`) REFERENCES `positions` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
