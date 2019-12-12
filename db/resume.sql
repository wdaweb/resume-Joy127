-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-12 16:23:06
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bio`
--

CREATE TABLE `bio` (
  `bid` int(10) UNSIGNED NOT NULL COMMENT '主鍵/使用者流水號',
  `id` int(10) NOT NULL COMMENT '會員代號',
  `content` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '自傳內容',
  `sh` int(1) DEFAULT NULL COMMENT '資料顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- 傾印資料表的資料 `bio`
--

INSERT INTO `bio` (`bid`, `id`, `content`, `sh`) VALUES
(5, 25, '102年全國大專校院運動會\r\n「主題標語及吉祥物命名」\r\n網路票選活動\r\n一、活動期間：自10月25日起至11月4日止。\r\n二、相關訊息請上宜蘭大學首頁連結「102全大運在宜大」\r\n活動網址：http://102niag.niu.edu.tw/\r\n\r\n\r\n台灣亞洲藝術文化教育交流學會第一屆年會國際研討會\r\n活動日期：101年3月3～4日(六、日)\r\n活動主題：創造力、文化、全人教育\r\n有意參加者請至http://www.caaetaiwan.org下載報名表\r\n\r\n\r\n11月23日(星期五)將於彰化縣田尾鄉菁芳園休閒農場\r\n舉辦「高中職生涯輔導知能研習」\r\n中區學校每校至多2名\r\n以普通科、專業類科教師優先報名參加\r\n生涯規劃教師次之，參加人員公差假\r\n並核實派代課\r\n當天還有專車接送(8:35前在員林火車站集合)\r\n如此好康的機會，怎能錯過？！\r\n熱烈邀請師長們向輔導室(分機234)報名\r\n名額有限，動作要快！！\r\n報名截止日期：本周四 10月25日17:00前！', 0),
(10, 23, '公告綜合高中一年級英數補救教學時間\r\n上課日期:10/27.11/3.11/10.11/24共計四次\r\n上課時間:早上8:00~11:50半天\r\n費用:全程免費\r\n參加同學:綜合科一年級第一次段考成績需加強者\r\n已將名單送交各班及導師\r\n參加同學請帶紙筆.課本.第一次段考考卷\r\n並將家長通知單給家長\r\n若有任何疑問\r\n請洽綜合高中學程主任\r\n\r\n\r\n102年全國大專校院運動會\r\n「主題標語及吉祥物命名」\r\n網路票選活動\r\n一、活動期間：自10月25日起至11月4日止。\r\n二、相關訊息請上宜蘭大學首頁連結「102全大運在宜大」\r\n活動網址：http://102niag.niu.edu.tw/\r\n\r\n\r\n台灣亞洲藝術文化教育交流學會第一屆年會國際研討會\r\n活動日期：101年3月3～4日(六、日)\r\n活動主題：創造力、文化、全人教育\r\n有意參加者請至http://www.caaetaiwan.org下載報名表\r\n\r\n\r\n11月23日(星期五)將於彰化縣田尾鄉菁芳園休閒農場\r\n舉辦「高中職生涯輔導知能研習」\r\n中區學校每校至多2名\r\n以普通科、專業類科教師優先報名參加\r\n生涯規劃教師次之，參加人員公差假\r\n並核實派代課\r\n當天還有專車接送(8:35前在員林火車站集合)\r\n如此好康的機會，怎能錯過？！\r\n熱烈邀請師長們向輔導室(分機234)報名\r\n名額有限，動作要快！！\r\n報名截止日期：本周四 10月25日17:00前！\r\n\r\n\r\n台視百萬大明星節目辦理海選活動\r\n時間:101年10月27日下午13時\r\n地點:彰化\r\n\r\n\r\n國立故宮博物院辦理\r\n「商王武丁與后婦好 殷商盛世文化藝術特展」暨\r\n「赫赫宗周 西周文化特展」\r\n\r\n\r\n財團法人漢光教育基金會\r\n辦理2012「舊愛新歡-古典詩詞譜曲創作暨歌唱表演競賽」\r\n參賽獎金豐厚!!\r\n', 0),
(11, 23, '家庭背景\r\n我出⽣於⺠國五⼗八年，臺北市⼈。先⽗浙江省諸暨縣⼈，曾服務於台北地⽅法院看守所，公職退休後開舖營商。先慈吳⽒為臺北市⼈，曾服務於延平、龍⼭區公所(現為⼤同、萬華區)。我的⽗⺟為⼈誠正勤儉，⽣育我和兄姊七⼈，全⼼竭⼒使我等⽣活無憂，接受完整教育。我⾃幼便由庭訓中建立誠正、勤奮、合作、樂觀的⽣活態度。婚後育有⼀⼦，現年⼆⼗二歲碩一新生，外⼦屏東縣⼈，服務於⾦融業，家庭⽣活祥和。\r\n\r\n\r\n求學歷程\r\n073.09~078.06國中畢業後，就讀致理商專國際貿易科，學習商業 \r\n及貿易等相關課程。\r\n\r\n078.09~081.06專校畢業後，考入東吳⼤學夜間部經濟系，繼續加強財務、⾦融、貿易等專業知識。在⾃由開放的學風下，培養我獨立思考、⾃我督促的精神。\r\n\r\n\r\n⼯作經歷\r\n081.07~083.04立益紡織股份有限公司，分別於財務、業務部⾨擔任助理。負責銀⾏往來業務、融資貸款、還款、進⼝開狀、報關、與客⼾、⼯廠⼈員聯繫，安排出貨事宜等。\r\n\r\n083.04~084.04寶慶汽⾞股份有限公司，為聲寶公司汽⾞部⾨之轉投資事業。於財會部⾨擔任財會專員。負責銀⾏往來業務、憑證審核、登帳、⽉結、實帳⼾分析、各類所得扣繳申報、應付票據開立、營業稅申報、財務報表製作及分析等。\r\n\r\n084.04~085.12太電電訊、協通電訊股份有限公司，均為太平洋電線電纜之關係企業。太電電訊主要成立⽬的為經營⼆哥⼤電信業務；及⾄政府開放⺠間企業經營⼤哥⼤電信業務，依公司發展規劃被調⾄協通電訊(台灣⼤哥⼤成立前期)。我主要於會計部⾨負責公司籌設初期各⼦公司之設立登記相關作業、與各部⾨及協⼒廠商協調請款事宜、銀⾏往來業務及⼀般會計作業等。\r\n\r\n105.01~105.11財團法⼈國際合作發展基⾦會，會計室專員(職務代理)。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `edu`
--

CREATE TABLE `edu` (
  `eid` int(10) UNSIGNED NOT NULL COMMENT '主鍵/使用者流水號',
  `id` int(11) NOT NULL COMMENT '會員代號',
  `level` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '教育程度',
  `school` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '學校名稱',
  `dept` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '研讀科系',
  `period` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '研讀期間',
  `sh` int(1) DEFAULT 1 COMMENT '顯示資料'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- 傾印資料表的資料 `edu`
--

INSERT INTO `edu` (`eid`, `id`, `level`, `school`, `dept`, `period`, `sh`) VALUES
(11, 23, '大學', '東吳大學夜間部', '經濟系', '1989.09-1992.06', 1),
(12, 23, '專科', '致理商專', '國貿科', '1984.09-1989.06', 1),
(14, 23, '國中', '金華國中', '普通班', '1981.09-1984.06', 0),
(17, 25, 'master', '99999', '99999', '99999', 0),
(18, 25, 'doctor', '88888', '88888', '88888', 0),
(20, 1, 'aaaaaaaa', 'aaaaaaaa', 'aaaaaaaa', 'aaaaaaaa', 1),
(22, 23, '小學', '金華國小', '普通班', '1975.09-1981.06', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主鍵/使用者流水號',
  `acc` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '身分證字號',
  `pw` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '密碼',
  `name` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '姓名',
  `birthday` date NOT NULL COMMENT '出生日期',
  `email` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '電子郵件',
  `tel` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '聯絡電話',
  `addr` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '聯絡地址'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `acc`, `pw`, `name`, `birthday`, `email`, `tel`, `addr`) VALUES
(1, 'a123456789', 'aw12345', 'Joy', '2000-10-10', 'hellojoy@google.com', '999999', '999999'),
(2, 'K123456789', 'ar12345', 'Tim', '1990-11-23', 'tim@google.com', '987456', '987456'),
(3, 'c223456789', 'dr12345', 'Jen', '1961-10-25', 'jen@google.com', '123789', '123789'),
(4, 'n123456789', 'll852369', 'Tina', '1990-02-27', 'tina@google.com', '852369', '852369'),
(5, 'q223456789', 'vr12345', 'Jack', '1982-11-12', 'jack@google.com', '996633', '996633'),
(6, 'y123456789', 'cc774411', 'Andy', '1986-02-21', 'andy@google.com', '774411', '774411'),
(7, 'h223456789', 'vb456321', 'Yang', '1988-09-20', 'yang@google.com', '456321', '456321'),
(8, 'd223456789', 'fb784512', 'Mai', '1987-09-20', 'mai@google.com', '784512', '784512'),
(9, 'g223456789', 'jr12345', 'Sam', '1989-12-22', 'sam@google.com', '995511', '995511'),
(10, 'h223456789', 'ss22331', 'Chen', '1994-03-24', 'chen@google.com', '22331', '22331'),
(11, 'u223456789', 'rr456789', 'Mary', '2003-04-25', 'hello456789@google.com', '456123', '123456'),
(12, 'z223456789', 'ol12345', 'Joy12345', '1991-03-25', 'hello12345@google.com', '12345', '12345'),
(13, 'a223456789', 're12345', 'Mark', '1989-02-23', 'hello98745@google.com', '98745', '98745'),
(14, 'm223456789', 'kj12345', 'Lisa', '1990-01-25', 'hello@google.com', '123456', '123456'),
(16, 't223456789', 'tt5978', 'Ken', '2000-01-10', 'hellokenyang@google.com', '123', '123'),
(17, 'r123456789', 'td12345', 'Harry', '1994-01-16', 'helloharry@google.com', '78945', '78945'),
(18, 'p223456789', 'mm12345', 'Tina', '1999-03-23', 'hellotina@google.com', '78945', '78945'),
(19, 'd987456123', 'df1245', 'Muse', '1990-04-18', 'hellomuse@google.com', '98745', '98745'),
(20, 'w987456321', 'ar12345', 'Apple', '1984-10-17', 'helloapple@google.com', '98745', '98745'),
(21, 'p987456321', 'as12345', 'John', '1999-05-30', 'hellojohn@google.com', '778845', '778845'),
(22, 'j258794613', 'dd123456', 'mina', '1985-01-11', 'hellomina@google.com', '123987', '123987'),
(23, 'o231478956', 'yoyo99999', 'yoyo Wu', '1980-08-29', 'helloyoyowu@google.com', '123456789', '123456789'),
(25, 'w136987452', 'td23456', 'liliYang', '2000-12-18', 'helloliliyang@google.com', '12345', '12345'),
(26, 'l213456789', 'as98745', 'Tim Yang', '1987-06-30', 'hellotimyang@google.com', '78945', '78945');

-- --------------------------------------------------------

--
-- 資料表結構 `photo`
--

CREATE TABLE `photo` (
  `pid` int(10) UNSIGNED NOT NULL COMMENT '流水號/主鍵',
  `id` int(10) NOT NULL COMMENT '會員代號',
  `file` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '相片來源',
  `text` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '相片說明',
  `sh` int(1) DEFAULT NULL COMMENT '資料顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- 傾印資料表的資料 `photo`
--

INSERT INTO `photo` (`pid`, `id`, `file`, `text`, `sh`) VALUES
(10, 23, 'm1.jpg', '證件照', 0),
(11, 23, 'm2.jpg', '生活照', 1),
(12, 23, 'Mace.jpg', '工作照', 1),
(14, 23, 'm5.jpg', '證件照', 1),
(15, 23, 'm6.jpg', '生活照', 1),
(16, 23, 'm7.jpg', '生活照', 1),
(17, 23, 'm8.jpg', '工作照', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `search`
--

CREATE TABLE `search` (
  `sid` int(10) UNSIGNED NOT NULL COMMENT '主鍵/使用者流水號',
  `id` int(11) NOT NULL COMMENT '會員代號',
  `position` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '職位名稱',
  `place` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '工作地點',
  `content` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '工作內容',
  `time` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '工作時間',
  `salary` int(11) NOT NULL COMMENT '期望待遇',
  `other` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '其他條件',
  `sh` int(1) DEFAULT 1 COMMENT '顯示資料'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- 傾印資料表的資料 `search`
--

INSERT INTO `search` (`sid`, `id`, `position`, `place`, `content`, `time`, `salary`, `other`, `sh`) VALUES
(1, 25, '會計', '台北市', '帳務及稅務處理', '日班', 30000, '周休二日', 0),
(3, 23, '會計', '台北市', '帳務及稅務處理', '日班', 35000, '周休二日', 1),
(4, 23, '財務人員', '台北市', '銀行往來業務等', '日班', 30000, '周休二日', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `skid` int(10) UNSIGNED NOT NULL COMMENT '主鍵/使用者流水號',
  `id` int(10) NOT NULL COMMENT '會員代號',
  `lang` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '語文能力',
  `comp` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '電腦專長',
  `other` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '其他技能',
  `cert` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '專業證照',
  `sh` int(1) DEFAULT NULL COMMENT '顯示資料'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`skid`, `id`, `lang`, `comp`, `other`, `cert`, `sh`) VALUES
(1, 25, '英語聽說讀寫普通', '程式語言php，資料庫MySQL', '無', '中餐葷食丙級', 0),
(3, 25, '台語普通', 'WORD EXCEL', '無', '無', 0),
(4, 23, '英語聽說讀寫尚可', 'word、excel、power point ', '無', '中餐葷食丙級', 1),
(6, 23, '3333333', '3333333', '3333333', '3333333', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `workexp`
--

CREATE TABLE `workexp` (
  `wid` int(10) UNSIGNED NOT NULL COMMENT '主鍵/使用者流水號',
  `id` int(11) NOT NULL COMMENT '會員代號',
  `coname` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '公司名稱',
  `position` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '職位名稱',
  `period` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '工作期間',
  `salary` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '工作待遇',
  `content` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT '工作內容',
  `sh` int(1) DEFAULT 1 COMMENT '顯示資料'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- 傾印資料表的資料 `workexp`
--

INSERT INTO `workexp` (`wid`, `id`, `coname`, `position`, `period`, `salary`, `content`, `sh`) VALUES
(15, 23, '財團法人國際合作發展基金會', '會計助理專員', '2016.01-2016.11', '34800', '登記桌(公文收發)作業、薪資轉帳相關作業、應付款項傳票、應收利息認列\r\n作業、部門交辦事項等。', 1),
(16, 23, '協通電訊股份有限公司', '會計,會計主任', '1995.04-1996.12', '40000', '於會計部門負責公司籌設初期各子公司之設立登記相關作業、與各部門及協\r\n力廠商協調請款事宜、銀行往來業務及一般會計作業等。', 1),
(17, 23, '寶慶汽車股份有限公司', '會計', '1994.04-1995.04', '26000', '負責銀行往來業務、憑證審核、登帳、月結、實帳戶分析、各類所得扣繳申\r\n報、應付票據開立、營業稅申報、財務報表製作及分析等。', 1),
(18, 23, '立益紡織股份有限公司', '財務進口', '1992.07-1994.03', '25000', '曾分別於財務、業務部門擔任助理。負責銀行往來業務、融資貸款、還款、\r\n進口開狀、報關、與客戶、工廠人員聯繫，安排出貨事宜等。', 1),
(19, 25, 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 1),
(21, 23, '11111111', '11111111', '11111111', '11111111', '111111111111111111111111111111111111111111111111\r\n111111111111111111111111111111111111111111111111\r\n111111111111111111111111111111111111111111111111\r\n111111111111111111111111111111111111111111111111\r\n111111111111111111111111111111111111111111111111', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`bid`);

--
-- 資料表索引 `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`eid`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`pid`);

--
-- 資料表索引 `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skid`);

--
-- 資料表索引 `workexp`
--
ALTER TABLE `workexp`
  ADD PRIMARY KEY (`wid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bio`
--
ALTER TABLE `bio`
  MODIFY `bid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主鍵/使用者流水號', AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `edu`
--
ALTER TABLE `edu`
  MODIFY `eid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主鍵/使用者流水號', AUTO_INCREMENT=23;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主鍵/使用者流水號', AUTO_INCREMENT=27;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `photo`
--
ALTER TABLE `photo`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號/主鍵', AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `search`
--
ALTER TABLE `search`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主鍵/使用者流水號', AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `skid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主鍵/使用者流水號', AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `workexp`
--
ALTER TABLE `workexp`
  MODIFY `wid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主鍵/使用者流水號', AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
