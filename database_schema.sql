-- Database Schema for Infinity SoftHub Technologies
-- This file contains SQL queries to create the necessary tables for saving leads and contact forms.
-- You can import this file directly into your MySQL Database using phpMyAdmin or the mysql CLI.

CREATE DATABASE IF NOT EXISTS `infinitysofthub` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `infinitysofthub`;

-- 1. Table for Chatbot Leads
CREATE TABLE IF NOT EXISTS `chatbot_leads` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `mobile` VARCHAR(50) NOT NULL,
    `message` TEXT DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `status` ENUM('new', 'contacted', 'converted') DEFAULT 'new',
    INDEX `idx_email` (`email`),
    INDEX `idx_created` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 2. Table for Contact Us Messages
CREATE TABLE IF NOT EXISTS `contact_messages` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(50) DEFAULT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `message` TEXT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `status` ENUM('new', 'read', 'replied') DEFAULT 'new',
    INDEX `idx_email` (`email`),
    INDEX `idx_created` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
