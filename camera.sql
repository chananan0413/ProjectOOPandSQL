SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL, 
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
  /*ไม่มี product_id */
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL, /* แก้payment method ให้จ่ายปลายทางได้อย่างเดียว */
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL, 
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `information` varchar(1000) NOT NULL, /*เพิ่มเข้ามา*/
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
  /* product type ยังไม่มี */
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user' /* อาจจะต้องเอาออก แยกเป็นส่วน user กับ admin */
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;