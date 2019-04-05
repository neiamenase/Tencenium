CREATE TABLE `buddy` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `groupId` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `event` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `isDrawEvent` tinyint(1) DEFAULT NULL,
  `date` date NOT NULL,
  `year` int(11) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `location` varchar(1000) DEFAULT NULL,
  `groupId` mediumint(9) NOT NULL,
  `createBy` varchar(50) NOT NULL,
  `modifyBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `group` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tree` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `history` (
  `id` mediumint(9) NOT NULL,
  `fromBuddy` mediumint(9) NOT NULL,
  `toBuddy` mediumint(9) NOT NULL,
  `eventId` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `participant` (
  `id` mediumint(9) NOT NULL,
  `eventId` mediumint(9) NOT NULL,
  `buddyId` mediumint(9) NOT NULL,
  `remark` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `buddy`
--
ALTER TABLE `buddy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buddy`
--
ALTER TABLE `buddy`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;