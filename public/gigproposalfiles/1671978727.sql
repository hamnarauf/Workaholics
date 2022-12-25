-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2022 at 11:25 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workaholics`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

use workaholics;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'Graphics and Design'),
(2, NULL, NULL, 'Digital Marketing'),
(3, NULL, NULL, 'Writing & Translation'),
(4, NULL, NULL, 'Programming and Tech');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

DROP TABLE IF EXISTS `gigs`;
CREATE TABLE IF NOT EXISTS `gigs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `budget` int(11) NOT NULL,
  `required_days` date NOT NULL,
  `skills` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gigs_created_by_foreign` (`created_by`),
  KEY `gigs_category_foreign` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`id`, `created_at`, `updated_at`, `name`, `description`, `category`, `budget`, `required_days`, `skills`, `created_by`) VALUES
(1, NULL, NULL, 'I will design modern 3d business or signature logo', 'If you are looking for a unique and elegant Signature logo design you are at right Place. I am a Professional, Versatile Graphic Designer working for Signature, Hand Drawn, Feminine, Brand kits, Watermark, Monogram, initials and much more styles which you like.', 1, 50, '2022-02-02', 'Logo Designing', 5),
(2, NULL, NULL, 'I will create luxury handwritten, signature logo for you', 'Hello Great people, Welcome to my GIG, i will create a Luxury Handwritten, Signature Branding Kit within 12 Hours for your Personal use, Company, Product, Website, or Brand. A simple and clean design can have a huge impact than a logo that has a lot going on.\r\nA signature logo can be easier for your customer to remember too.', 1, 100, '2022-11-13', 'Logo Designing', 7),
(3, NULL, NULL, 'I will translate german to italian and italian to german', 'I have a Master\'s degree in Interpreting and Translation cum laude. However, I believe in life-long learning and always want to stay up to date with the latest developments in the field of translation, that\'s why I always attend new courses.\r\nI have experience in translating: books, articles, apps, guidelines, manuals, ads, medical texts and technical texts.', 3, 75, '2022-11-20', 'German Translation', 8),
(4, NULL, NULL, 'I will develop game 2d and 3d for mobile and PC in unity game development', 'Hello. I\'m a professional Unity Game Developer with experience of 5+ years & 4+ year of freelancing. I do own a team that specializes in Game Design & Game Development.\r\nWe develop unity multiplayer game in unity 3d. we have best Graphic Designer team for UI/UX and 3d modeling team for 3d assets to be used for unity game development.', 4, 500, '2022-11-29', 'Game Development', 9);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employer` bigint(20) UNSIGNED NOT NULL,
  `employee` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_employer_foreign` (`employer`),
  KEY `jobs_employee_foreign` (`employee`),
  KEY `jobs_project_id_foreign` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `created_at`, `updated_at`, `employer`, `employee`, `project_id`) VALUES
(1, NULL, NULL, 8, 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_13_163327_create_categories_table', 1),
(6, '2022_12_13_163525_create_projects_table', 1),
(7, '2022_12_13_171104_create_proposals_table', 1),
(8, '2022_12_13_171506_create_jobs_table', 1),
(9, '2022_12_13_173304_create_milestones_table', 1),
(10, '2022_12_13_174349_create_gigs_table', 1),
(11, '2022_12_13_175734_create_reviews_table', 1),
(12, '2022_12_13_180036_create_payment_options_table', 1),
(13, '2022_12_13_180811_create_transactions_table', 1),
(14, '2014_10_28_175635_create_threads_table', 2),
(15, '2014_10_28_175710_create_messages_table', 2),
(16, '2014_10_28_180224_create_participants_table', 2),
(17, '2014_11_03_154831_add_soft_deletes_to_participants_table', 2),
(18, '2014_12_04_124531_add_softdeletes_to_threads_table', 2),
(19, '2017_03_30_152742_add_soft_deletes_to_messages_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

DROP TABLE IF EXISTS `milestones`;
CREATE TABLE IF NOT EXISTS `milestones` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` int(11) NOT NULL,
  `expected_by` date NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `milestones_job_id_foreign` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milestones`
--

INSERT INTO `milestones` (`id`, `created_at`, `updated_at`, `job_id`, `name`, `description`, `budget`, `expected_by`, `filename`, `file_path`) VALUES
(1, NULL, NULL, 1, 'Quarter Work Submission', 'Translate 1/4th of the Document and Submit', 100, '2022-12-20', '1/4th Translation Submission', 'file/1-4Translation.txt'),
(2, NULL, NULL, 1, 'Half Work Submission', 'Translate 2/4th of the Document and Submit', 100, '2022-12-24', NULL, NULL),
(3, NULL, NULL, 1, 'Full Work Submission', 'Submit the fully Translated Document', 300, '2022-12-28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments_made`
--

DROP TABLE IF EXISTS `payments_made`;
CREATE TABLE IF NOT EXISTS `payments_made` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('credit card','debit card','direct payment') COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` int(11) NOT NULL,
  `milstone_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `payment_options_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments_made`
--

INSERT INTO `payments_made` (`id`, `created_at`, `updated_at`, `user_id`, `type`, `account_name`, `account_number`, `Amount`, `milstone_id`) VALUES
(1, NULL, NULL, 8, 'credit card', 'Myra Mathews', '1378436128032', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `budget` int(11) NOT NULL,
  `expected_by` date NOT NULL,
  `skills` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_created_by_foreign` (`created_by`),
  KEY `projects_category_foreign` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `created_at`, `updated_at`, `name`, `description`, `category`, `budget`, `expected_by`, `skills`, `created_by`) VALUES
(1, NULL, NULL, 'Software Quality Control Engineer', 'We are looking to hire a Software Quality Control Engineer to join us in our mission to educate the world. The successful candidate shall be responsible for conducting testing activities including analysis, design, implementation, and reporting for in-house software.\r\n\r\nResponsibilities:\r\n\r\n-Design, execute, and maintain test cases.\r\n-Report issues through bug-tracking systems.\r\n-Investigate reported issues and follow up until they are resolved.\r\n-Provide automation scripts for assigned tickets/tasks.\r\n-Contribute to quality and functionality improvement of software.\r\n\r\nQualifications & Work Experience:\r\n\r\n-1+ years of experience in software testing.\r\n-Good knowledge of software QA methodologies, testing types, tools, and processes.\r\n-Hands-on experience in GitLab, CI and CD tools, and Agile Scrum.\r\n-Experience in writing clear, concise, and comprehensive test plans and test cases.\r\n-Knowledge of one or more of the following areas of testing regardless of tools: automation, security, performance.\r\n-Selenium, Java, and Cucumber knowledge is a plus.\r\n-ISTQB certification is a plus.\r\n-Excellent command of the English language.', 4, 1000, '2022-01-01', 'Automated Testing', 11),
(2, NULL, NULL, 'Middle Fullstack Developer (Audio domain)', 'Required skills\r\n\r\n— 2+ years of full-stack development\r\n— Must have React, Node.js Express.js, Mongoose/ Mongo Docker, Docker-compose.\r\n— Proven experience in a similar position\r\n— Keen interest in new and emerging technologies\r\n— Planning and organizational skills\r\n— Ability to work independently\r\n— Level of English: Upper-Intermediate\r\n\r\nNice to have\r\n\r\n— AWS EC2, AWS CloudWatch\r\n— RabbitMQ\r\n— Elasticsearch\r\n— Experience with distributed systems\r\n\r\nResponsibilities\r\n\r\n— We are looking for a resourceful, action-driven and talented coder to help us with the evolution, maintenance and development that a system of this magnitude requires.\r\n— As part of the CMS team, you will work side by side with the operations team in order to offer the best user experience to our clients and develop creative solutions to satisfy their business needs.\r\n\r\nWe offer\r\n\r\n— High compensation according to your technical skills\r\n— Long-term projects (12m+) with great Customers\r\n— 5-day working week, 8-hour working day, flexible schedule\r\n— Democratic management style & friendly environment\r\n— WFH option (Possibility to work from home)\r\n— Annual Paid vacation — 15 b/days + unpaid vacation\r\n— Paid sick leaves — 6 b/days per year\r\n— Ukrainian official holidays\r\n— Corporate Perks (external training, English courses, corporate events/team buildings)\r\n— Cozy office in the center of the city\r\n— Coffee, cookies and other goodies\r\n— Professional and personal growth\r\n\r\nProject description\r\nClient is a technology company that designs and develops digital music products and services and a world leader in music usage monitoring currently working with 30% of all world Copyright Collecting Societies.\r\n\r\nThe platform monitors uninterruptedly more than 5,500 sources of music including radios, TVs, streams and venues around the world and compares against 50M unique songs to serve their clients from all around the world. Today their monitoring platform delivers 26 million identifications monthly and overviews 1 trillion digital transactions yearly.\r\n\r\nСompany description\r\nKitRUM is a one-stop custom software development company headquartered in sunny Florida with development centers in Ukraine and Poland.\r\nWith a pool of 300+ top-notch engineering resources, we help CxOs of VC-backed startups and fast-growing tech companies in the US, EU and Australia to custom build software engineering teams packed with top-tier talent.\r\n\r\nWhy us?\r\nWe realize that one of the most crucial things for developers — adequate client and fascinating projects. So we qualify our clients to make sure that they:\r\nhave an idea that they believe will make the world a better place;\r\nthink long-term and looking for a trusted-tech partner;\r\nwant to rely on and avoid micromanaging;\r\nare not f$%$ing jackasses :-)\r\nFollow our team on Instagram to know more about our daily life :)\r\nWe adore making new friends on the board!\r\n\r\nTo share your CV or get more information about the company and the project, write⬇️\r\nTelegram: @SofiaKITRUM\r\nEmail: career@kitrum.com', 4, 1800, '2022-12-31', 'Docker', 10),
(3, NULL, NULL, 'German - Italian Corpus Translation/QA project [General Contents', 'We have a large scale German - Italian Translation and QA project that will continue until 2025\r\n\r\n*For German to Italian: Native Italian linguists or completely bilingual German / Italian speakers are required.\r\n\r\nCharacteristics of Translation Project:\r\n* Corpus Parallel Translation\r\n* General contents such as news articles, SNS posts, etc.\r\n* First-come-first-served\r\n* All-You-Can-Translate\r\n* Flexible (customized to your available) Schedule\r\n* Starting date: ASAP (we\'re already proceeding with the translation at the time of this posting)\r\n\r\n**IMPORTANT**\r\n\r\n1. Human Translation / MTPE\r\n\r\nThe purpose of this translation project is to improve an existing machine translation engine and offer human translation. Therefore, it is most important to provide \"Human Translation\"\r\n\r\nYou cannot use (or even refer to) any machine translations (Google Translation, Microsoft Translation, Yandex, etc.)\r\n\r\nAccuracy, grammar, naturalness, punctuation, etc. are all important factors in this project. The quality must be good so that your translated data can actually \"improve\" an already existing machine engine.\r\n\r\n2. Others\r\n* The most \"exciting advantage\" of this project is that the volume is so large that we allow you to \"translate as much as you want\". Plus, it will be continuing until 2025, so if your qualification meets the client\'s standard, you will \"always\" have work to do which you can \"freely select, when and how much to work on\".\r\n* We\'re operating with multiple translators as we speak.\r\n* If you\'d like to apply, please try out the certification test on the working platform. We will review, and if you pass we will invite you on board ASAP.\r\n\r\n\r\nRates: Fixed Rate based on per project $2,000(source word count). On average, our linguists are earning about $1,000- $2,000 per project according to the volume he/she is willing to work on.', 3, 300, '2022-12-29', 'German Translation', 8),
(4, NULL, NULL, 'Mystery Shopper', 'Help a large Social Media platform evaluate the e-commerce shopping experience by purchasing items and completing surveys related to the experience. Join us now!  \r\n\r\nRequirements:   \r\n• Should have some disposable income to make purchases upfront.  \r\n• Should be able to complete purchases with a short 1-week timeline.  \r\n• Attention to detail and strong reading comprehension is a must.  \r\n\r\nWhat’s in it for you?  \r\n• Mystery Shoppers keep their purchases.  \r\n• Mystery Shoppers are reimbursed for their purchases.  \r\n\r\nVisit the Appen website by clicking the link below:\r\nhttps://connect.appen.com/qrp/public/jobs?sref=f7bfa2ac05386a10eaa7a7a6bc5f43c5\r\n  \r\nA diverse, inclusive culture is vital to our mission of helping build better AI. We offer opportunities for individuals of all abilities and backgrounds', 2, 100, '2023-01-31', 'Marketing ', 9);

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

DROP TABLE IF EXISTS `proposals`;
CREATE TABLE IF NOT EXISTS `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `proposal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_by` date NOT NULL,
  `bid` int(11) NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `proposals_created_by_foreign` (`created_by`),
  KEY `proposals_project_id_foreign` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `created_at`, `updated_at`, `project_id`, `proposal`, `expected_by`, `bid`, `created_by`) VALUES
(1, NULL, NULL, 3, 'My first language is English and I have a Masters in German Language from University of Haifa, International School.\r\nI have written and translated 10 papers with 4+ rating. ', '2022-12-29', 700, 16),
(2, NULL, NULL, 3, 'I am Germany born, fluent in both English and Germany. Have a good command on both Languages.', '2022-12-29', 300, 15),
(3, NULL, NULL, 4, 'I am a youtuber and Influencer. I have worked for A lot of brands by promoting them on my social media platforms. I have business level Marketing Strategies. I do hawls from various websites as well.\r\nInstagram: @IamHarmoineHarton\r\nYoutube: HarmoineHartonYt', '2023-01-31', 700, 14),
(4, NULL, NULL, 4, 'I am a rising Youtuber and have a Product reviews dedicated channel.\r\nYoutube: ReviewWithBernard ', '2023-01-31', 200, 13);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_job_id_foreign` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

DROP TABLE IF EXISTS `threads`;
CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `milestone_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_milestone_id_foreign` (`milestone_id`),
  KEY `transactions_sender_id_foreign` (`sender_id`),
  KEY `transactions_receiver_id_foreign` (`receiver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `created_at`, `updated_at`, `milestone_id`, `sender_id`, `receiver_id`, `amount`) VALUES
(1, NULL, NULL, 1, 11, 2, 700),
(2, NULL, NULL, 2, 10, 3, 15),
(3, NULL, NULL, 3, 9, 4, 100),
(4, NULL, NULL, 4, 8, 5, 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet` bigint(20) NOT NULL DEFAULT '0',
  `skills` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `city`, `town`, `zip`, `state`, `country`, `wallet`, `skills`, `company`, `mobileNo`) VALUES
(1, 'user/default.png', 'Tanzeel Ur Rehman', 'khawajatn1@gmail.com', NULL, '$2y$10$8g41eBw95SblNxHYz90bl.WVgpjxm.lB30PGpHTrVlEvysRJfBQwe', NULL, '2022-12-16 10:59:54', '2022-12-16 10:59:54', 'Sargodha', NULL, NULL, NULL, 'Pakistan', 0, NULL, NULL, NULL),
(2, 'user/Rebecca.jpeg', 'Rebecca Pitts', 'porttitor@icloud.edu', NULL, 'HPW00LOZ4QN', NULL, NULL, NULL, '613-2042 Est Avenue', NULL, '65-570', 'Vestland', 'India', 350, 'Technical Writing', 'Writers.Co', '(475) 772-1224'),
(3, 'user/Zelda.jpeg', 'Zelda Gregory', 'inceptos@protonmail.net', NULL, 'OCV28INK1JF', NULL, NULL, NULL, 'P.O. Box 745, 6082 Magna. Road', NULL, '82912', 'South Sumatra', 'Australia', 10, 'Web Development', 'TechSolutionsPro', '1-441-485-1711'),
(4, 'user/ahmed.jpeg', 'Ahmed Morales', 'congue.in@aol.ca', NULL, 'SGN75TQH3EL', NULL, NULL, NULL, '875-2219 Tellus. St.', NULL, '76442', 'Limón', 'Vietnam', 1000, 'Database administration', 'Bestway Consultancy Services', '(273) 484-6761'),
(5, 'user/Prescott.jpeg', 'Prescott Kelley', 'consequat.auctor@hotmail.edu', NULL, 'BOU50NSW1HU', NULL, NULL, NULL, 'Ap #413-2967 Non, Avenue', NULL, 'T4W 7S7', 'South Gyeongsang', 'Costa Rica', 70, 'Logo Designing', NULL, '1-356-738-4340'),
(6, 'user/Kennan.jpeg', 'Kennan Fernandez', 'sed.orci@yahoo.ca', NULL, 'MKD45OGI5IP', NULL, NULL, NULL, 'P.O. Box 646, 7729 Eget, Av.', NULL, '814547', 'Leinster', 'Costa Rica', 570, 'Interactive Media', NULL, '(222) 457-1926'),
(7, 'user/default.png', 'Brielle Bender', 'rutrum@aol.com', NULL, 'CXO21EGH1WY', NULL, NULL, NULL, '362-7709 Congue. St.', NULL, '6451', 'Östergötlands län', 'Singapore', 0, 'Logo Designing', NULL, '1-323-787-8771'),
(8, 'user/default.png', 'Myra Mathews', 'felis@aol.org', NULL, 'IIJ88MBP4KR', NULL, NULL, NULL, '437-4550 Eleifend, Ave', NULL, '2129', 'Şanlıurfa', 'South Korea', 0, 'German Translation', NULL, '1-237-366-1656'),
(9, 'user/default.png', 'Iris Vang', 'curae.phasellus@hotmail.net', NULL, 'GUC67JKM4EM', NULL, NULL, NULL, '6599 Nulla Road', NULL, '346830', 'Mazowieckie', 'Chile', 90, 'Game Development', NULL, '(585) 979-7247'),
(10, 'user/default.png', 'Acton Wilder', 'hendrerit@hotmail.ca', NULL, 'IFG21OAA9HE', NULL, NULL, NULL, 'P.O. Box 154, 2332 Sed Street', NULL, '418184', 'Jönköpings län', 'Peru', 0, NULL, NULL, '1-320-117-7111'),
(11, 'user/default.png', 'Rebecca Moses', 'euismod@google.ca', NULL, 'LGT41NMW8LM', NULL, NULL, NULL, 'Ap #476-5821 Nulla. Road', NULL, '1297', 'Araucanía', 'United Kingdom', 0, NULL, NULL, '(631) 723-3263'),
(12, 'user/default.png', 'Ezekiel Hines', 'a@yahoo.couk', NULL, 'IKB33KBW8XH', NULL, NULL, NULL, '1847 Lorem. St.', NULL, '837675', 'Cajamarca', 'Belgium', 50, NULL, NULL, '(373) 718-3202'),
(13, 'user/default.png', 'Bernard Kirkland', 'ipsum@icloud.couk', NULL, 'XRY70PZZ4JJ', NULL, NULL, NULL, '207-9136 Vehicula Avenue', NULL, '5966-3163', 'Aisén', 'Mexico', 0, 'Sales and Marketing', NULL, '1-268-341-0296'),
(14, 'user/default.png', 'Hermione Horton', 'est.arcu@protonmail.edu', NULL, 'IBP13CRB9XR', NULL, NULL, NULL, '579-9264 Nunc, Av.', NULL, '354418', 'Burgenland', 'Colombia', 0, NULL, NULL, '(468) 717-8538'),
(15, 'user/default.png', 'Benedict Barber', 'rutrum.lorem.ac@aol.org', NULL, 'LHP42MSI3NF', NULL, NULL, NULL, '419-9337 Arcu Avenue', NULL, '32035-51853', 'Konya', 'Germany', 0, 'German Translation', NULL, '(846) 252-0726'),
(16, 'user/Marshall.jpeg', 'Marshall Brennan', 'sit.amet@outlook.org', NULL, 'LAQ34XCT3YI', NULL, NULL, NULL, '959-2161 Nulla Av.', NULL, '3403 HN', 'Nordrhein-Westphalen', 'Russian Federation', 0, 'German Translation', NULL, '1-423-634-2695');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
