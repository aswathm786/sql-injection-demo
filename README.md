# SQL Injection Educational Demo Website

This repository contains a deliberately vulnerable website created for educational purposes to demonstrate SQL injection vulnerabilities. The website is designed to help individuals learn about SQL injection attacks and understand how to prevent them.

**DISCLAIMER: This website is intentionally vulnerable and should only be used for educational purposes. Do NOT deploy this in any production environment. Use it responsibly and ethically.**

## Purpose

The primary goal of this project is to provide a practical environment for understanding SQL injection vulnerabilities by showcasing:

- A vulnerable form that accepts user input to search for products.
- Demonstrating how an unvalidated input could lead to SQL injection vulnerabilities.

## Features

- Includes a basic HTML form that takes user input for product search.
- The vulnerable PHP code behind the form directly injects user input into SQL queries.
- Displays the result of the search, potentially demonstrating SQL injection if manipulated.

## Usage

1. Clone the repository:

   ```bash
   git clone https://github.com/aswathm786/sql-injection-demo.git
