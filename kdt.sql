-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- 호스트: 127.0.0.1
-- 생성 시간: 25-04-23 04:58
-- 서버 버전: 10.4.32-MariaDB
-- PHP 버전: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kdt`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `project_booking`
--

CREATE TABLE `project_booking` (
  `s_code` varchar(20) NOT NULL,
  `p_code` varchar(10) NOT NULL,
  `b_name` varchar(10) NOT NULL,
  `b_phone` varchar(11) NOT NULL,
  `b_gender` varchar(2) NOT NULL,
  `b_email` varchar(50) NOT NULL,
  `b_adult` int(10) NOT NULL,
  `b_child` int(10) NOT NULL,
  `b_baby` int(10) NOT NULL,
  `b_request` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `project_location`
--

CREATE TABLE `project_location` (
  `l_dep` varchar(10) NOT NULL,
  `l_loca1` varchar(10) NOT NULL,
  `l_loca2` varchar(10) NOT NULL,
  `l_loca3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `project_member`
--

CREATE TABLE `project_member` (
  `m_no` int(10) NOT NULL,
  `m_id` varchar(20) NOT NULL,
  `m_name` varchar(10) NOT NULL,
  `m_birth` date NOT NULL,
  `m_phone` varchar(13) NOT NULL,
  `m_pwd` varchar(255) NOT NULL,
  `m_gender` varchar(2) DEFAULT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_postnum` varchar(10) DEFAULT NULL,
  `m_address1` varchar(50) DEFAULT NULL,
  `m_address2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `project_member`
--

INSERT INTO `project_member` (`m_no`, `m_id`, `m_name`, `m_birth`, `m_phone`, `m_pwd`, `m_gender`, `m_email`, `m_postnum`, `m_address1`, `m_address2`) VALUES
(1, 'admin', '관리자', '0000-00-00', '010-0000-0000', '$2y$10$NDHcr22F5hpVDORN4L1TB.9.A2QuTYbfS04AZKXAarPy4C7H.6Lm2', 'M', 'admin@admin', '', '', ''),
(2, 'test', '테스트', '1985-06-02', '010-1548-4618', '$2y$10$gZYYXBFVPmXl9ba9fIrJ0.3118rGEYjPgNsLsHgB5LkhPonykxKva', '', 'test@test', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `project_product`
--

CREATE TABLE `project_product` (
  `p_code` varchar(10) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_stay` int(2) NOT NULL,
  `p_term` int(2) NOT NULL,
  `p_minnum` int(3) NOT NULL,
  `p_subtitle` varchar(1000) DEFAULT NULL,
  `p_plan` varchar(255) DEFAULT NULL,
  `p_in` varchar(255) DEFAULT NULL,
  `p_notin` varchar(255) DEFAULT NULL,
  `p_expense` varchar(20) DEFAULT NULL,
  `p_slide1` varchar(20) DEFAULT NULL,
  `p_slide2` varchar(20) DEFAULT NULL,
  `p_slide3` varchar(20) DEFAULT NULL,
  `p_image` varchar(20) NOT NULL,
  `p_dep` varchar(10) NOT NULL,
  `p_des` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `project_product`
--

INSERT INTO `project_product` (`p_code`, `p_title`, `p_stay`, `p_term`, `p_minnum`, `p_subtitle`, `p_plan`, `p_in`, `p_notin`, `p_expense`, `p_slide1`, `p_slide2`, `p_slide3`, `p_image`, `p_dep`, `p_des`) VALUES
('APP4333', '[4성 돌핀베이 리조트] 보홀 4일 #자유시간 #슬림패키지', 3, 4, 2, '2023 신규오픈! 4성급 돌핀베이 리조트<br />\r\n여유로운 자유일정 포함<br />\r\n특식 1회 제공 (삼겹살 정식 또는 샤브샤브 정식)<br />\r\n팡라오 시내관광', '인천-보홀(3)-인천', '1. 왕복항공요금 및 제세공과금<br />\r\n2. 유류할증료(매월 마지막 화요일 기준)<br />\r\n3. 일정상 표기된 식사 및 관광지 입장료<br />\r\n4. 호텔 숙박료(2인1실)<br />\r\n5. 최대 1억 원 해외여행자 보험<br />\r\n※ 참고사항 ->여행자보험 설명 참조', '1. 가이드/기사경비 : USD40/인 (성인/아동 동일)<br />\r\n2. 선택관광 및 개인비용, 매너 팁<br />\r\n3. 유류할증료 변동에 따른 증감분<br />\r\n(매월 변동/출발일 기준 적용)<br />\r\n4. 일정 중 불포함 식사 (중식1회,석식2회)<br />\r\n5. 현지공항세 560페소', '40 USD 현지에서 지불', 'APP4333_slide1.jpg', 'APP4333_slide2.jpg', 'APP4333_slide3.jpg', 'APP4333_image.png', '인천', '타그빌라란'),
('EPP2210', '[두바이 직항/전 일정 월드체인호텔] 두바이/아부다비 일주 6일 #요트투어,노쇼핑,미슐랭', 3, 6, 15, '에미레이트 항공 직항<br />\r\n전 일정 월드체인 호텔<br />\r\n두바이 럭셔리 요트 탑승<br />\r\nNO쇼핑 상품<br />\r\n미슐랭 특식', '인천-두바이(3)-인천', '1. 왕복항공권 (인천공항세, 관광진흥기금 포함)<br />\r\n2. 전 일정 월드체인 4성급 호텔 숙박<br />\r\n3. 아름다운 마리나를 감상할 수 있는 럭셔리 요트 투어<br />\r\n4. 전 일정 식사(자유 일정 중,석식 제외)<br />\r\n5. 미슐랭 특식<br />\r\n6. 두바이 전통 시장을 가로지르는 수상택시 아브라 탑승<br />\r\n7. 화려한 조명과 음악이 함께 어울러지는 두바이 분수쇼<br />\r\n8. 세계 최대 규모의 인공섬을 가로지르는', '1. 1인당 $60 가이드/기사경비 현지 지불<br />\r\n2. 룸/1박당 $5 투어리즘 텍스 현지 지불<br />\r\n3. 자유 일정 중 중식,석식<br />\r\n4. 선택관광 및 개인비용, 각종 매너 팁<br />\r\n5. 국외여행 표준 약관 제11조 여행요금의 변경 참고 - 국외여행을 실시함에 있어 이용운송, 숙박기관에 지급 해야 할 요금이 계약시보다 5%이상 증감하거나, 여행요금에 적용된 환율이 계약체결 시 일정표에 기재된 상품의 기준환율 보다 2% ', '60 USD 현지에서 지불', 'EPP2210_slide1.jpg', 'EPP2210_slide2.jpg', 'EPP2210_slide3.jpg', 'EPP2210_image.jpg', '인천', '두바이'),
('UPP458', '[실시간항공/로키 기차 탑승] 캐나다 완전일주 12일!', 10, 12, 10, '* 참좋은여행 차별화! 로키 기차 탑승 (벨마운트-재스퍼 구간)<br />\r\n* 로키 2大 국립공원+4大 호수 관광<br />\r\n* 꼭 보아야 하는 일정은 선택관광이 아닌 포함으로! (C$450 상당)<br />\r\n* 빅토리아 숙박으로 야경 감상 가능<br />\r\n* 나이아가라 폭포뷰 전망 특급 호텔 숙박', '인천-밴쿠버-빅토리아(1)-밴쿠버(1)-메릿-벨마운트(1)-재스퍼-힌튼(1)-아이스필드-밴프(1)-캔모어-캘거리(1)-몬트리올(1)-퀘벡-몬트리올(1)-킹스턴-나이아가라(1)-토론토(1)-인천', '1. 왕복항공료<br />\r\n2. 유류할증료, 제세공과금<br />\r\n3. 호텔 숙박료 (2인1실)<br />\r\n4. 일정상 표기된 식사<br />\r\n5. 1억원 여행자보험', '1. 가이드,기사경비 현지지불<br />\r\n305$/인 (성인,아동 동일)<br />\r\n2. 비자비용 (대행료 25,000원)<br />\r\n3. 선택관광 및 개인비용, 매너팁<br />\r\n4. 일정상 미표기된 식사<br />\r\n5. 캐나다 국내선 위탁수화물 비용<br />\r\n개당 약 $65 (무게에 따라 상이)', '305 CAD 현지에서 지불', 'UPP458_slide1.jpg', 'UPP458_slide2.jpg', 'UPP458_slide3.jpg', 'UPP458_image.jpg', '인천', '밴쿠버');

-- --------------------------------------------------------

--
-- 테이블 구조 `project_schedule`
--

CREATE TABLE `project_schedule` (
  `s_code` varchar(20) NOT NULL,
  `p_code` varchar(10) NOT NULL,
  `s_airline` varchar(10) NOT NULL,
  `s_dep_time1` datetime NOT NULL,
  `s_dep_time2` datetime NOT NULL,
  `s_dep_code` varchar(10) NOT NULL,
  `s_des_time1` datetime NOT NULL,
  `s_des_time2` datetime NOT NULL,
  `s_des_code` varchar(10) NOT NULL,
  `s_meeting` varchar(100) NOT NULL,
  `s_price_adult` int(10) NOT NULL,
  `s_price_child` int(10) NOT NULL,
  `s_price_baby` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `project_schedule`
--

INSERT INTO `project_schedule` (`s_code`, `p_code`, `s_airline`, `s_dep_time1`, `s_dep_time2`, `s_dep_code`, `s_des_time1`, `s_des_time2`, `s_des_code`, `s_meeting`, `s_price_adult`, `s_price_child`, `s_price_baby`) VALUES
('APP4333-250415', 'APP4333', '아시아나항공', '2025-04-15 10:10:00', '2025-04-15 18:50:00', 'KE075', '2025-04-19 20:20:00', '2025-04-20 02:46:00', 'KE075', '인천국제공항', 1800000, 1800000, 900000),
('APP4333-250420', 'APP4333', '대한항공', '2025-04-20 20:20:00', '2025-04-21 02:10:00', 'KE098', '2025-04-23 18:00:00', '2025-04-23 23:55:00', 'KE098', '인천국제공항 1번 출입구', 3000000, 3000000, 1500000),
('EPP2210-250403', 'EPP2210', '델타', '2025-04-03 22:45:00', '2025-04-03 03:15:00', 'DE153', '2025-04-08 05:30:00', '2025-04-08 18:50:00', 'DE152', '인천국제공항 제1터미널 3층 1번 출입구 A카운터', 899000, 899000, 650000),
('UPP458-250426', 'UPP458', '델타항공', '2025-04-26 18:50:00', '2025-04-26 12:40:00', 'KE071', '2025-05-06 12:55:00', '2025-05-07 16:30:00', 'KE074', '인천국제공항 제2터미널 3층 1번 출입구 17,18번 카운터', 7390000, 5947600, 5947600);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `project_booking`
--
ALTER TABLE `project_booking`
  ADD PRIMARY KEY (`s_code`,`p_code`),
  ADD KEY `FK_project_schedule_TO_project_booking_2` (`p_code`);

--
-- 테이블의 인덱스 `project_member`
--
ALTER TABLE `project_member`
  ADD PRIMARY KEY (`m_no`);

--
-- 테이블의 인덱스 `project_product`
--
ALTER TABLE `project_product`
  ADD PRIMARY KEY (`p_code`);

--
-- 테이블의 인덱스 `project_schedule`
--
ALTER TABLE `project_schedule`
  ADD PRIMARY KEY (`s_code`,`p_code`),
  ADD KEY `FK_project_product_TO_project_schedule_1` (`p_code`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `project_member`
--
ALTER TABLE `project_member`
  MODIFY `m_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `project_booking`
--
ALTER TABLE `project_booking`
  ADD CONSTRAINT `FK_project_schedule_TO_project_booking_1` FOREIGN KEY (`s_code`) REFERENCES `project_schedule` (`s_code`),
  ADD CONSTRAINT `FK_project_schedule_TO_project_booking_2` FOREIGN KEY (`p_code`) REFERENCES `project_schedule` (`p_code`);

--
-- 테이블의 제약사항 `project_schedule`
--
ALTER TABLE `project_schedule`
  ADD CONSTRAINT `FK_project_product_TO_project_schedule_1` FOREIGN KEY (`p_code`) REFERENCES `project_product` (`p_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
