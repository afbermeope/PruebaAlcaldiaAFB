-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2024 a las 00:27:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_tecnica_afb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Sin asignar', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(2, 'qui', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(3, 'iure', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(4, 'omnis', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(5, 'in', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(6, 'sit', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(7, 'consequuntur', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(8, 'enim', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(9, 'nostrum', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(10, 'voluptatibus', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(11, 'explicabo', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(12, 'quo', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(13, 'saepe', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(14, 'voluptas', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(15, 'et', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(16, 'corporis', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(17, 'molestiae', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(18, 'laborum', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(19, 'incidunt', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(20, 'deleniti', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(21, 'voluptates', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(22, 'eos', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(23, 'quibusdam', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(24, 'quam', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(25, 'voluptatem', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(26, 'eius', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(27, 'eaque', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(28, 'ut', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(29, 'vel', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(30, 'ipsa', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(31, 'sapiente', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(32, 'quia', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(33, 'architecto', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(34, 'harum', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(35, 'ad', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(36, 'dolor', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(37, 'illum', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(38, 'tempora', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(39, 'accusamus', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(40, 'eveniet', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(41, 'iste', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(42, 'sunt', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(43, 'exercitationem', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(44, 'dolore', '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(45, 'fuga', '2024-05-23 01:51:49', '2024-05-23 01:51:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `correo`, `cedula`, `telefono`, `departamento_id`, `created_at`, `updated_at`) VALUES
(1, 'Leda Bednar DVM', 'wvon@example.com', '1362774', '+1 (520) 641-8463', 6, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(2, 'Mrs. Beverly Borer', 'rafaela.lebsack@example.com', '97970145', '+19566298169', 7, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(3, 'May Heidenreich', 'henriette33@example.com', '38086878', '+1-317-860-3792', 8, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(4, 'Mr. Mac Heaney V', 'sage26@example.com', '22472277', '520.354.4703', 9, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(5, 'Ms. Caitlyn King', 'adolphus50@example.org', '49171291', '1-908-417-1366', 10, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(6, 'Prof. Rigoberto Hamill', 'dagmar.grady@example.com', '24847628', '563.771.5695', 11, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(7, 'Dr. Marlee Gutmann DDS', 'eduardo.kirlin@example.net', '35162285', '+17242902846', 12, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(8, 'Leta Kunze PhD', 'florian.abbott@example.net', '82774030', '858-918-5273', 13, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(9, 'Mose Abshire', 'hayes.gerson@example.org', '53126268', '(458) 274-8151', 14, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(10, 'Sarina Connelly DVM', 'pagac.vicenta@example.com', '6485915', '(838) 300-5842', 15, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(11, 'Russ Carroll', 'swilliamson@example.org', '84055876', '+1-407-310-1514', 16, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(12, 'Prof. Reilly Hermann DDS', 'malika34@example.com', '36690889', '417-288-2802', 17, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(13, 'Michel Hill', 'ekirlin@example.org', '57326701', '+18282719200', 18, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(14, 'Dr. Sam Kuvalis', 'qwalsh@example.net', '81947158', '+1.540.841.6035', 19, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(15, 'Prof. Clovis Schneider IV', 'vcrooks@example.net', '21295702', '774-534-6875', 20, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(16, 'Ms. Leta Hartmann II', 'laury.cole@example.com', '25366289', '1-385-217-7307', 21, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(17, 'Marcella Simonis', 'jazlyn.hirthe@example.org', '93777832', '1-747-920-2918', 22, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(18, 'Guy Jerde', 'lauretta.johns@example.org', '5190483', '+1-507-664-1298', 23, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(19, 'Krista Gerhold', 'selmer.bailey@example.com', '30420111', '763-356-6439', 24, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(20, 'Corene Langosh DDS', 'yfunk@example.net', '36816817', '+1.530.975.5678', 25, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(21, 'Mr. Jamir Hauck V', 'deckow.carlo@example.org', '81546832', '757.578.2262', 26, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(22, 'Llewellyn Jacobs', 'dino.hessel@example.org', '4872678', '(520) 280-5247', 27, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(23, 'Dewayne Mueller', 'kmonahan@example.org', '44344410', '1-380-218-2563', 28, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(24, 'Kenny Gutmann', 'bborer@example.net', '8626094', '+17865790832', 29, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(25, 'Miss Dawn Zulauf MD', 'rmclaughlin@example.net', '96965349', '1-628-796-2940', 30, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(26, 'Candido Bradtke', 'lesly.kris@example.net', '64924508', '+1-928-364-9883', 31, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(27, 'Ms. Georgiana Langosh IV', 'webster.casper@example.org', '21880067', '640.746.0659', 32, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(28, 'Fernando Fahey Sr.', 'roger24@example.net', '54172440', '+16789489169', 33, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(29, 'Prof. Elyse Block DDS', 'eshields@example.com', '89446166', '458.979.5026', 34, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(30, 'Josianne Bernhard', 'noe65@example.net', '18092790', '(754) 462-1191', 35, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(31, 'Dameon Cassin', 'glover.casandra@example.net', '68503766', '+13513573100', 1, '2024-05-23 01:51:49', '2024-05-23 01:53:14'),
(32, 'Favian Miller', 'judson92@example.net', '42062016', '(914) 704-5844', 37, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(33, 'Miss Francisca Roberts', 'etha.veum@example.net', '2251530', '+15802727358', 38, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(34, 'Ms. Autumn Weissnat', 'alfredo81@example.org', '287252', '+14107578072', 39, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(35, 'Hilton Stracke', 'emil57@example.org', '54135209', '248-829-2103', 40, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(36, 'Grace Tremblay', 'lcrooks@example.net', '35653413', '856.572.6786', 41, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(37, 'Abagail Gorczany', 'frederick.russel@example.com', '21639891', '341.320.2549', 42, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(38, 'Pierre Pagac', 'hollie31@example.org', '67390567', '(339) 560-5197', 43, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(39, 'Mr. Arnold Marks Jr.', 'keagan72@example.org', '43014696', '+1 (737) 794-9392', 44, '2024-05-23 01:51:49', '2024-05-23 01:51:49'),
(40, 'Mrs. Viviane Trantow IV', 'osvaldo05@example.com', '56719859', '1-203-428-8043', 45, '2024-05-23 01:51:49', '2024-05-23 01:51:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2024_05_22_134423_create_departamentos_table', 2),
(14, '2024_05_22_135221_create_empleados_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'afbermeope@gmail.com', NULL, '$2y$10$iHb.uAAA82FDN0U6p7bfFu5VCLxQvsXWx3n75SNmImITF9yBUiI9i', NULL, '2024-05-22 06:38:05', '2024-05-22 21:20:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departamentos_nombre_unique` (`nombre`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empleados_correo_unique` (`correo`),
  ADD UNIQUE KEY `empleados_cedula_unique` (`cedula`),
  ADD KEY `empleados_departamento_id_foreign` (`departamento_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
