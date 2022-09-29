--
-- Database: `interest_rate_watcher`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_relating_to_interest_rates_and_central_banks`
--

CREATE TABLE `data_relating_to_interest_rates_and_central_banks` (
  `unique_id_of_data_relating_to_interest_rate` int(10) UNSIGNED DEFAULT NULL COMMENT 'This is the unique ID associated with the data relating to the interest rate and central bank.',
  `id_of_central_bank` tinyint(2) UNSIGNED DEFAULT NULL COMMENT 'This is the name of the central bank (in English). It references the table list_of_central_banks.',
  `interest_rate_set_by_central_bank` decimal(6,2) DEFAULT NULL COMMENT 'This is the interest rate set by the central bank in question. It can be either positive or negative. ',
  `date_and_time_of_interest_rate_change` datetime NOT NULL COMMENT 'This is the date and time in which the interest rate was set by the central bank. '
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table relates to the various interest rates set by CB.';

-- --------------------------------------------------------

--
-- Table structure for table `list_of_central_banks`
--

CREATE TABLE `list_of_central_banks` (
  `id_of_central_bank_to_be_referenced` tinyint(2) UNSIGNED NOT NULL COMMENT 'This is the ID of the central bank in question. ',
  `name_of_central_bank_in_english` varchar(255) DEFAULT NULL COMMENT 'This is the name of the central bank (in English). '
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This is a list of the names of central banks.';

--
-- Dumping data for table `list_of_central_banks`
--

INSERT INTO `list_of_central_banks` (`id_of_central_bank_to_be_referenced`, `name_of_central_bank_in_english`) VALUES
(1, 'Federal Reserve'),
(2, 'Bank of England'),
(3, 'European Central Bank'),
(4, 'Reserve Bank of Australia'),
(5, 'Central Bank of Chile'),
(6, 'Bank of Korea'),
(7, 'Central Bank of Brazil'),
(8, 'Bank of Canada'),
(9, 'People\'s Bank of China'),
(10, 'Czech National Bank'),
(11, 'Danmarks Nationalbank'),
(12, 'Hungarian National Bank'),
(13, 'Central Bank of India'),
(14, 'Bank Indonesia'),
(15, 'Bank of Israel'),
(16, 'Bank of Japan'),
(17, 'Bank of Mexico'),
(18, 'Reserve Bank of New Zealand'),
(19, 'Norges Bank'),
(20, 'National Bank of Poland'),
(21, 'Central Bank of Russia'),
(22, 'Saudi Central Bank'),
(23, 'South African Reserve Bank'),
(24, 'Sveriges Riksbank'),
(25, 'Swiss National Bank'),
(26, 'Central Republic Bank of Turkey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_relating_to_interest_rates_and_central_banks`
--
ALTER TABLE `data_relating_to_interest_rates_and_central_banks`
  ADD KEY `id_of_central_bank` (`id_of_central_bank`);

--
-- Indexes for table `list_of_central_banks`
--
ALTER TABLE `list_of_central_banks`
  ADD PRIMARY KEY (`id_of_central_bank_to_be_referenced`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_of_central_banks`
--
ALTER TABLE `list_of_central_banks`
  MODIFY `id_of_central_bank_to_be_referenced` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'This is the ID of the central bank in question. ', AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_relating_to_interest_rates_and_central_banks`
--
ALTER TABLE `data_relating_to_interest_rates_and_central_banks`
  ADD CONSTRAINT `data_relating_to_interest_rates_and_central_banks_ibfk_1` FOREIGN KEY (`id_of_central_bank`) REFERENCES `list_of_central_banks` (`id_of_central_bank_to_be_referenced`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
