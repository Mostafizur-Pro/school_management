-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 06:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `att_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `student_id`, `class_id`, `section_id`, `att_date`, `edit_date`, `attendence`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 2, '2022-02-04', '', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_edition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_isbn_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_publisher` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_rack_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_rack_row` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_rack_coloum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_post_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_title`, `book_edition`, `book_isbn_number`, `book_publisher`, `book_author`, `book_qty`, `book_rack_id`, `book_rack_row`, `book_rack_coloum`, `book_post_date`, `book_status`, `created_at`, `updated_at`) VALUES
(1, 'Human History', '2nd', '55443256', 'BCC', 'Mark Luther', '4', '2', '2', '5', '2023-04-05', 1, '2023-04-04 23:40:30', '2023-04-04 23:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `book_issues`
--

CREATE TABLE `book_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `issue_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returned` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_issues`
--

INSERT INTO `book_issues` (`id`, `student_id`, `book_id`, `issue_date`, `return_date`, `returned`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, 1, '2022-12-12', '2023-01-01', NULL, '0', '2023-04-05 00:04:43', '2023-04-05 00:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', '2023-04-03 02:34:05', '2023-04-03 02:34:05'),
(2, 'English', '2023-04-03 02:34:15', '2023-04-03 02:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `created_at`, `updated_at`) VALUES
(1, 'librarian', '2023-04-03 02:30:34', '2023-04-03 02:30:34'),
(2, 'peon', '2023-04-03 02:30:40', '2023-04-03 02:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `exam_models`
--

CREATE TABLE `exam_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_models`
--

INSERT INTO `exam_models` (`id`, `exam_name`, `exam_year`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mid Term', '2023', 1, '2023-04-04 23:14:27', '2023-04-04 23:14:27'),
(2, 'Proff Exam', '2023', 1, '2023-04-04 23:14:38', '2023-04-04 23:14:38'),
(3, 'Final Term', '2023', 1, '2023-04-04 23:14:48', '2023-04-04 23:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hostel_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL DEFAULT 0,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_members`
--

CREATE TABLE `h_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `joining_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly_fee` decimal(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `invoice_of_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_fee` decimal(8,2) DEFAULT NULL,
  `session_charge` decimal(8,2) DEFAULT NULL,
  `tution_fee` decimal(8,2) DEFAULT NULL,
  `transport_fee` decimal(8,2) DEFAULT NULL,
  `examination_fee` decimal(8,2) DEFAULT NULL,
  `re_admission_fees` decimal(8,2) DEFAULT NULL,
  `board_fees` decimal(8,2) DEFAULT NULL,
  `transfer_testimonial_fees` decimal(8,2) DEFAULT NULL,
  `excersise_fees` decimal(8,2) DEFAULT NULL,
  `previuse_due` decimal(8,2) DEFAULT NULL,
  `discount_waver` decimal(8,2) DEFAULT NULL,
  `vat` decimal(8,2) DEFAULT NULL,
  `due_amount` decimal(8,2) DEFAULT NULL,
  `total_amount` decimal(8,2) DEFAULT NULL,
  `paid_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lavels`
--

CREATE TABLE `lavels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lavel_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lavels`
--

INSERT INTO `lavels` (`id`, `lavel_name`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'Class 1', '2', '2023-04-02 22:06:20', '2023-04-02 22:06:20'),
(2, 'Class 2', '1', '2023-04-02 22:06:32', '2023-04-02 22:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `lavel_student`
--

CREATE TABLE `lavel_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lavel_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `bang_1st_cq` double DEFAULT NULL,
  `bang_1st_mcq` double DEFAULT NULL,
  `bang_1st_total` double DEFAULT NULL,
  `bang_2nd_cq` double DEFAULT NULL,
  `bang_2nd_mcq` double DEFAULT NULL,
  `bang_2nd_total` double DEFAULT NULL,
  `eng_1st_cq` double DEFAULT NULL,
  `eng_1st_mcq` double DEFAULT NULL,
  `eng_1st_total` double DEFAULT NULL,
  `eng_2nd_cq` double DEFAULT NULL,
  `eng_2nd_mcq` double DEFAULT NULL,
  `eng_2nd_total` double DEFAULT NULL,
  `math_cq` double DEFAULT NULL,
  `math_mcq` double DEFAULT NULL,
  `math_total` double DEFAULT NULL,
  `religion_cq` double DEFAULT NULL,
  `religion_mcq` double DEFAULT NULL,
  `religion_total` double DEFAULT NULL,
  `ict_cq` double DEFAULT NULL,
  `ict_mcq` double DEFAULT NULL,
  `ict_practical` double DEFAULT NULL,
  `ict_total` double DEFAULT NULL,
  `homs_cq` double DEFAULT NULL,
  `homs_mcq` double DEFAULT NULL,
  `homs_practical` double DEFAULT NULL,
  `homs_total` double DEFAULT NULL,
  `gk_cq` double DEFAULT NULL,
  `gk_mcq` double DEFAULT NULL,
  `gk_total` double DEFAULT NULL,
  `phed_cq` double DEFAULT NULL,
  `phed_mcq` double DEFAULT NULL,
  `phed_practical` double DEFAULT NULL,
  `phed_total` double DEFAULT NULL,
  `bgs_cq` double DEFAULT NULL,
  `bgs_mcq` double DEFAULT NULL,
  `bgs_total` double DEFAULT NULL,
  `science_cq` double DEFAULT NULL,
  `science_mcq` double DEFAULT NULL,
  `science_practical` double DEFAULT NULL,
  `science_total` double DEFAULT NULL,
  `acc_cq` double DEFAULT NULL,
  `acc_mcq` double DEFAULT NULL,
  `acc_total` double DEFAULT NULL,
  `bent_cq` double DEFAULT NULL,
  `bent_mcq` double DEFAULT NULL,
  `bent_total` double DEFAULT NULL,
  `fin_cq` double DEFAULT NULL,
  `fin_mcq` double DEFAULT NULL,
  `fin_total` double DEFAULT NULL,
  `bio_cq` double DEFAULT NULL,
  `bio_mcq` double DEFAULT NULL,
  `bio_practical` double DEFAULT NULL,
  `bio_total` double DEFAULT NULL,
  `hmath_cq` double DEFAULT NULL,
  `hmath_mcq` double DEFAULT NULL,
  `hmath_practical` double DEFAULT NULL,
  `hmath_total` double DEFAULT NULL,
  `chemestry_cq` double DEFAULT NULL,
  `chemestry_mcq` double DEFAULT NULL,
  `chemestry_practical` double DEFAULT NULL,
  `chemestry_total` double DEFAULT NULL,
  `phy_cq` double DEFAULT NULL,
  `phy_mcq` double DEFAULT NULL,
  `phy_practical` double DEFAULT NULL,
  `phy_total` double DEFAULT NULL,
  `total_mark` double DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `exam_id`, `class_id`, `section_id`, `student_id`, `bang_1st_cq`, `bang_1st_mcq`, `bang_1st_total`, `bang_2nd_cq`, `bang_2nd_mcq`, `bang_2nd_total`, `eng_1st_cq`, `eng_1st_mcq`, `eng_1st_total`, `eng_2nd_cq`, `eng_2nd_mcq`, `eng_2nd_total`, `math_cq`, `math_mcq`, `math_total`, `religion_cq`, `religion_mcq`, `religion_total`, `ict_cq`, `ict_mcq`, `ict_practical`, `ict_total`, `homs_cq`, `homs_mcq`, `homs_practical`, `homs_total`, `gk_cq`, `gk_mcq`, `gk_total`, `phed_cq`, `phed_mcq`, `phed_practical`, `phed_total`, `bgs_cq`, `bgs_mcq`, `bgs_total`, `science_cq`, `science_mcq`, `science_practical`, `science_total`, `acc_cq`, `acc_mcq`, `acc_total`, `bent_cq`, `bent_mcq`, `bent_total`, `fin_cq`, `fin_mcq`, `fin_total`, `bio_cq`, `bio_mcq`, `bio_practical`, `bio_total`, `hmath_cq`, `hmath_mcq`, `hmath_practical`, `hmath_total`, `chemestry_cq`, `chemestry_mcq`, `chemestry_practical`, `chemestry_total`, `phy_cq`, `phy_mcq`, `phy_practical`, `phy_total`, `total_mark`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 50, 30, 80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(2, 1, 2, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 70, 20, 25, 115, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_06_140143_create_lavels_table', 1),
(5, '2020_01_06_140311_create_sections_table', 1),
(6, '2020_01_07_050811_create_subjects_table', 1),
(7, '2020_01_07_052936_create_students_table', 1),
(8, '2020_01_07_064813_create_student_categories_table', 1),
(9, '2020_01_07_182605_create_lavel_student_table', 1),
(10, '2020_01_08_052535_create_staff_table', 1),
(11, '2020_01_08_053720_create_departments_table', 1),
(12, '2020_01_08_053740_create_designations_table', 1),
(13, '2020_01_09_071912_create_books_table', 1),
(14, '2020_01_09_090859_create_racks_table', 1),
(15, '2020_02_03_095526_create_invoices_table', 1),
(16, '2020_02_27_083259_create_attendances_table', 1),
(17, '2020_03_07_050317_create_teachers_table', 1),
(18, '2020_03_09_092906_create_exam_models_table', 1),
(19, '2020_03_11_082515_create_marks_table', 1),
(20, '2020_09_15_035559_create_roles_table', 1),
(21, '2020_09_27_094817_create_book_issues_table', 1),
(22, '2020_09_30_084039_create_hostels_table', 1),
(23, '2020_10_04_051146_create_h_members_table', 1),
(24, '2020_10_05_040016_create_transport_routes_table', 1),
(25, '2020_10_05_060702_create_vehicles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `racks`
--

CREATE TABLE `racks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rack_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `racks`
--

INSERT INTO `racks` (`id`, `rack_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mythology', 1, '2023-04-04 23:38:36', '2023-04-04 23:38:36'),
(2, 'History', 1, '2023-04-04 23:38:44', '2023-04-04 23:38:44'),
(3, 'Design & Crafting', 1, '2023-04-04 23:38:56', '2023-04-04 23:38:56'),
(4, 'Economics', 1, '2023-04-04 23:39:02', '2023-04-04 23:39:02'),
(5, 'IT & Telecommunication', 1, '2023-04-04 23:39:14', '2023-04-04 23:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `teacher_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `class_id`, `teacher_id`, `teacher_name`, `created_at`, `updated_at`) VALUES
(1, 'Section A', 1, 2, NULL, '2023-04-02 22:07:24', '2023-04-02 22:07:24'),
(2, 'Section B', 1, 2, NULL, '2023-04-02 22:07:47', '2023-04-02 22:07:47'),
(3, 'Section 1', 2, 1, NULL, '2023-04-02 22:17:29', '2023-04-02 22:17:29'),
(4, 'Section 2', 2, 1, NULL, '2023-04-02 22:17:51', '2023-04-02 22:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `staff_father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_date_of_joining` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_current_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_work_experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_basic_salary` decimal(8,2) DEFAULT NULL,
  `staff_work_shift` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_contract_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_account_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_bank_account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_bank_branch_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_social_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_social_twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_social_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_social_instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_resume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_joining_letter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_other_document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_full_name`, `designation_id`, `department_id`, `staff_father_name`, `staff_mother_name`, `staff_email_address`, `staff_mobile`, `staff_gender`, `staff_date_of_birth`, `staff_date_of_joining`, `staff_marital_status`, `staff_current_address`, `staff_permanent_address`, `staff_qualification`, `staff_work_experience`, `staff_basic_salary`, `staff_work_shift`, `staff_contract_type`, `staff_account_title`, `staff_bank_account_number`, `staff_bank_name`, `staff_bank_branch_name`, `staff_social_facebook`, `staff_social_twitter`, `staff_social_linkedin`, `staff_social_instagram`, `staff_image`, `staff_resume`, `staff_joining_letter`, `staff_other_document`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'ares', 2, 1, 'Zeus', 'Martha', 'ares@gmail.com', '01569835621', 'Male', '1995-05-01', '2023-01-01', 'Islam', 'Kafrul, Dhaka', 'Kafrul, Dhaka', 'None', 'None', '8000.00', '8am-5pm', 'Permanent', 'Personal', '1254698563', 'ABC Bank', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-04-04 22:33:56', '2023-04-04 22:33:56'),
(2, 'Posaidon', 1, 1, 'Zeus', 'Carmelia', 'posaidon@gmail.com', '01246958762', 'Male', '1985-09-09', '2021-07-08', 'Hindu', NULL, NULL, NULL, NULL, '9500.00', '10am-5pm', 'Probation', 'Private', '5454656585', 'ZZZ Bank', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-04-04 23:01:27', '2023-04-04 23:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_present_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_parmanent_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fathers_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fathers_occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothers_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothers_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothers_occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/student/default.png',
  `fathers_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/student/default.png',
  `mothers_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/student/default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll`, `class_id`, `section_id`, `group_id`, `student_name`, `student_mobile`, `student_email`, `student_gender`, `student_date_of_birth`, `student_religion`, `student_blood_group`, `student_present_address`, `student_parmanent_address`, `session`, `fathers_name`, `fathers_mobile`, `fathers_occupation`, `mothers_name`, `mothers_mobile`, `mothers_occupation`, `student_image`, `fathers_image`, `mothers_image`, `created_at`, `updated_at`) VALUES
(5, 61, 1, 1, 2, 'Fred', '01259865478', 'fred@gmail.com', 'Female', '1995-01-21', 'Islam', 'A-', 'DOHS', 'Mirpur 12', '2019', 'Yin', '01254789654', 'Cheff', 'Yan', '01478965235', 'Writter', 'C:\\xampp\\tmp\\php16CD.tmp', 'public/image/student/fathers/fred-2023-04-11-643526b6c7771.jpg', 'public/image/student/mothersfred-2023-04-11-643526b6c7bf0.jpeg', '2023-04-11 03:21:58', '2023-04-11 03:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `student_categories`
--

CREATE TABLE `student_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `teacher_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_code`, `subject_id`, `subject_type`, `class_id`, `teacher_id`, `teacher_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', '101', '1', '1', 1, 2, NULL, 1, '2023-04-02 22:18:58', '2023-04-02 22:18:58'),
(2, 'English', '102', '3', '1', 1, 2, NULL, 1, '2023-04-02 22:19:18', '2023-04-02 22:19:18'),
(3, 'Mathematics', '201', '5', '1', 2, 1, NULL, 1, '2023-04-02 22:19:35', '2023-04-02 22:19:35'),
(4, 'ICT', '202', '7', '2', 2, 1, NULL, 1, '2023-04-02 22:19:55', '2023-04-02 22:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teachers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_idcard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibility` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_date_of_joining` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_current_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_work_experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_basic_salary` decimal(8,2) DEFAULT NULL,
  `teachers_contract_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_resume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teachers_joining_letter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teachers_name`, `national_idcard`, `teachers_mobile`, `teachers_email`, `responsibility`, `teachers_gender`, `teachers_date_of_birth`, `teachers_date_of_joining`, `teachers_marital_status`, `teachers_current_address`, `teachers_permanent_address`, `teachers_qualification`, `teachers_work_experience`, `teachers_basic_salary`, `teachers_contract_type`, `account_title`, `account_number`, `bank_name`, `branch_name`, `teachers_facebook`, `teachers_twitter`, `teachers_linkedin`, `teachers_instagram`, `teachers_image`, `teachers_resume`, `teachers_joining_letter`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 'Jeams', '222555888', '01798563257', 'jeams@gmail.com', 'PT Teacher', 'Male', '1987-12-31', '2017-12-30', 'Married', 'Rajshahi', 'Cumilla', 'MSc in Biotech', '10 years', '50000.00', 'Probation', 'Personal', '333333333', 'CCC Bank', 'Bhula', NULL, NULL, NULL, NULL, 'public/image/teacher/jeams-2023-04-17.jpg', 'public/image/teacher/resume/jeams-2023-04-17.pdf', 'public/image/teacher/joiningletter/jeams-2023-04-17.pdf', 1, '2023-04-17 02:52:27', '2023-04-17 02:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `transport_routes`
--

CREATE TABLE `transport_routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `teacher_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Emon Al Mamun', 1, 'emonmamun3@gmail.com', 1, '2023-04-02 02:46:44', '$2y$10$XntZ.IxxoXdXWRtnPDpGeu/bfF89AIBDzDGvoL6DAk8wuJm84KlRK', NULL, NULL, NULL),
(4, 'alex halls', 2, 'alex@gmail.com', 3, NULL, '$2y$10$eCDcKZ7AAnD1VyjbQlw8bOA4VuCJhAKIiStuq0BzodoYBvs5RRWMm', NULL, '2023-04-16 00:31:26', '2023-04-16 00:31:26'),
(5, 'Jell', 2, 'jell@gmail.com', 4, NULL, '$2y$10$gq.kZv59YNhDHiQgG6H/9.UXO37ZvSddge0qRrYmMdzsRyUkxcYA2', NULL, '2023-04-16 01:17:36', '2023-04-16 01:17:36'),
(6, 'Jeams', 2, 'jeams@gmail.com', 5, NULL, '$2y$10$D9fZdgDnmfG9kx9sb/HznOhUX10li899v6ksHDJFynyaohRoRuQd6', NULL, '2023-04-17 02:52:27', '2023-04-17 02:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_year_made` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_license` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_book_title_unique` (`book_title`);

--
-- Indexes for table `book_issues`
--
ALTER TABLE `book_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_department_name_unique` (`department_name`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_designation_name_unique` (`designation_name`);

--
-- Indexes for table `exam_models`
--
ALTER TABLE `exam_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostels_hostel_name_unique` (`hostel_name`);

--
-- Indexes for table `h_members`
--
ALTER TABLE `h_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `h_members_student_id_unique` (`student_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lavels`
--
ALTER TABLE `lavels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lavels_lavel_name_unique` (`lavel_name`);

--
-- Indexes for table `lavel_student`
--
ALTER TABLE `lavel_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `racks`
--
ALTER TABLE `racks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `racks_rack_name_unique` (`rack_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_staff_email_address_unique` (`staff_email_address`),
  ADD UNIQUE KEY `staff_staff_mobile_unique` (`staff_mobile`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_roll_unique` (`roll`),
  ADD UNIQUE KEY `students_student_mobile_unique` (`student_mobile`);

--
-- Indexes for table `student_categories`
--
ALTER TABLE `student_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_categories_student_category_unique` (`student_category`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_national_idcard_unique` (`national_idcard`),
  ADD UNIQUE KEY `teachers_teachers_mobile_unique` (`teachers_mobile`),
  ADD UNIQUE KEY `teachers_teachers_email_unique` (`teachers_email`);

--
-- Indexes for table `transport_routes`
--
ALTER TABLE `transport_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_vehicle_number_unique` (`vehicle_number`),
  ADD UNIQUE KEY `vehicles_vehicle_model_unique` (`vehicle_model`),
  ADD UNIQUE KEY `vehicles_driver_license_unique` (`driver_license`),
  ADD UNIQUE KEY `vehicles_driver_contact_unique` (`driver_contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_issues`
--
ALTER TABLE `book_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_models`
--
ALTER TABLE `exam_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `h_members`
--
ALTER TABLE `h_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lavels`
--
ALTER TABLE `lavels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lavel_student`
--
ALTER TABLE `lavel_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `racks`
--
ALTER TABLE `racks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_categories`
--
ALTER TABLE `student_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transport_routes`
--
ALTER TABLE `transport_routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
