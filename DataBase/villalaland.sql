-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2022 pada 17.35
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villalaland`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `email`, `password`) VALUES
(1, 'mel', 'mel', 'mel@mel', '123'),
(2, '', 'root', 'asma@asma', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `text_blog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `id_user`, `judul`, `text_blog`) VALUES
(1, 2, 'Halo!', 'Selamat pagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contactno` int(12) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guest`
--

INSERT INTO `guest` (`guest_id`, `id_user`, `first_name`, `last_name`, `contactno`, `email`) VALUES
(2, 1, 'aldy', 'lalalallalala', 12231312, 'aldy@aldy'),
(3, 1, 'aldy', 'lalalallalala', 12231312, 'aldy@aldy'),
(4, 1, 'aldy', 'lalalallalala', 12231312, 'aldy@aldy'),
(5, 1, 'aldy', 'lalalallalala', 123, 'aldy@aldy'),
(6, 1, 'atha', 'lalala', 123, 'dimas@dimas'),
(7, 1, 'atha', 'lalala', 123, 'dimas@dimas'),
(8, 1, 'atha', 'lalala123', 123, 'dimas@dimas'),
(9, 1, 'ikyooo', 'lalalal', 1231, 'dimas@dimas'),
(10, 2, 'Iky Ganteng', 'Atha', 812222, 'iky@iky'),
(11, 2, 'iky', 'lalala', 321, 'iky@iky'),
(12, 2, 'iky', 'asfbdaisufb', 23131, 'iky@iky'),
(13, 2, 'iky', 'lksasa', 123, 'aldy@aldy'),
(14, 2, 'iky', 'adawd', 213, 'iky@iky'),
(15, 2, 'iky', 'lalalallalala', 2321, 'iky@iky'),
(16, 2, 'atha', 'lalala', 123123, 'maldyfaturrohman03@gmail.com'),
(17, 2, 'iky', 'lalalallalala', 12231312, 'iky@iky'),
(18, 2, 'iky', 'lalala', 12231312, 'iky@iky'),
(19, 2, 'iky', 'lalalallalala', 12231312, 'iky@iky');

-- --------------------------------------------------------

--
-- Struktur dari tabel `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_place` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(12) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `bathroom` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `pool` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_place`, `description`, `price`, `photo`, `bedroom`, `bathroom`, `wifi`, `pool`) VALUES
(1, 'Villa Waterlily', 'Seminyak', 'This sweet three bedroom private Villa can also be enjoyed as a two bedroom rental outside of peak season. With charming interiors and tropical vibes it is a popular choice for many. Rarely do we find a Villa as well priced as this so close to the buzz of Seminyak shopping and beach clubs!', 120000, 'assets/villa-1.jpg', '3 Bedrooms', '2 Bathrooms', 'WiFi', 'Swimming Pool'),
(2, 'Villa Sea Shanty', 'Jimbaran Bay', 'This charming Villa is an intelligently designed, four bedroom luxury property. Every aspect of the villa has been designed with family entertainment, relaxation and safety in mind. The warm, friendly live-in staff are always there to ensure your holiday is enjoyable and relaxing. The property is located in Jimbaran only 100 meters from one of Bali’s best beaches. Right on the doorstep is a variety of shopping, dining and activities for all budgets and tastes. There are four bedrooms, indoor and outdoor tropical living zones, a beautiful pool and deck and spacious garden. The Villa is one of the best family villas we have seen, with a great layout for groups and a relaxed and informal flow about it', 9000000, 'assets/villa-2.jpg', '4 Bedrooms', '1 Bathrooms', 'Wifi', 'Poolside Bale'),
(3, 'Villa Escape', 'Nusa Lembongan Island', 'This is a gorgeous Nusa Lembongan rental villa, located in Sandy Bay – one of the island\'s hippest spots! With fantastic food, the ocean and cocktail choices nearby you will be well indulged. Walk to Dream Beach to enjoy the white sand haven or relax by your own private pool. The Sandy Bay Beach club is a great place to watch the sun set and the Villa itself very comfortable.', 100000, 'assets/villa-3.jpg', '2 Bedrooms', '1 Bathrooms', 'WiFi', 'Swimming pool'),
(4, 'Villa The Beach Shack', 'Nusa Lembongan Island', 'The Beach Shack is the ultimate tropical island escape! Its Nusa Lembongan beach front location and beach chic décor will immediately make you feel relaxed, at home and like you’re a million miles away from your busy day to day life. Designed by the owners as a family home, it is the perfect place to reconnect with your loved ones. With Sandy Bay Beach Club, Glo Spa and The Walking Tree boutique and deli right next to you, you won’t need to venture far away from your holiday home away from home for all your needs. White and blue hues run through the bright and airy living spaces, and a dazzling 13-meter pool reaches out towards the blue ocean. A thatched balé, perfect for massages, and a beachside semi-circular dining alcove set the tone for an idyllic tropical escape.', 100000, 'assets/villa-4.jpg', '4 Bedrooms', '2 Bathrooms', 'WiFi', 'Private Pool');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contactno` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hari_menginap` int(11) NOT NULL,
  `hargaKamar` int(255) NOT NULL,
  `hargaTotal` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `id_user`, `room_id`, `checkin`, `checkout`, `first_name`, `last_name`, `contactno`, `email`, `hari_menginap`, `hargaKamar`, `hargaTotal`, `status`) VALUES
(1, 2, 1, 4, '2022-12-23', '2022-12-24', 'aldy', 'lalalallalala', 12231312, 'aldy@aldy', 1, 100000, 105000, ''),
(2, 2, 1, 1, '2022-12-23', '2022-12-26', 'aldy', 'lalalallalala', 12231312, 'aldy@aldy', 3, 360000, 0, ''),
(3, 5, 1, 1, '2022-12-24', '2022-12-26', 'aldy', 'lalalallalala', 123, 'aldy@aldy', 2, 240000, 252000, ''),
(4, 6, 1, 1, '2022-12-24', '2022-12-27', 'atha', 'lalala', 123, 'dimas@dimas', 3, 360000, 378000, ''),
(5, 8, 1, 1, '2022-12-25', '2022-12-30', 'atha', 'lalala123', 123, 'dimas@dimas', 5, 600000, 630000, ''),
(6, 9, 1, 1, '2022-12-30', '2023-01-02', 'ikyooo', 'lalalal', 1231, 'dimas@dimas', 3, 360000, 378000, ''),
(7, 10, 2, 1, '2022-12-25', '2022-12-28', 'Iky Ganteng', 'Atha', 812222, 'iky@iky', 3, 360000, 378000, ''),
(8, 11, 2, 1, '2022-12-25', '2022-12-27', 'iky', 'lalala', 321, 'iky@iky', 2, 240000, 252000, 'PENDING'),
(9, 12, 2, 4, '2022-12-25', '2023-01-06', 'iky', 'asfbdaisufb', 23131, 'iky@iky', 12, 1200000, 1260000, 'COMPLETE'),
(10, 13, 2, 3, '2022-12-25', '2023-01-03', 'iky', 'lksasa', 123, 'aldy@aldy', 9, 900000, 945000, 'COMPLETE'),
(11, 15, 2, 4, '2022-12-27', '2022-12-29', 'iky', 'lalalallalala', 2321, 'iky@iky', 2, 200000, 210000, 'COMPLETE'),
(12, 18, 2, 4, '2022-12-27', '2023-01-03', 'iky', 'lalala', 12231312, 'iky@iky', 7, 700000, 735000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth` date DEFAULT NULL,
  `pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `kota`, `email`, `password`, `phone`, `gender`, `birth`, `pp`) VALUES
(1, 'aldy', 'Bekasi', 'aldy@aldy', '202cb962ac59075b964b07152d234b70', 0, '', NULL, ''),
(2, 'Iky', 'Tangerang', 'iky@iky', '202cb962ac59075b964b07152d234b70', 123434, 'Man', '2022-12-01', ''),
(4, 'josa', 'Jakarta', 'josa@josa', '123', 123321, 'Man', '2022-12-09', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `guest_id` (`guest_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `guest_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`guest_id`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
