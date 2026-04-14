🧮 Simple Health Calculator

A modern and interactive PHP web application that calculates BMI, BMR, and daily calorie needs based on user input.
Designed with a clean UI and smooth user experience using a multi-step form flow.

---

🚀 Project Overview

This application allows users to:

- Enter personal health data
- Review their inputs before submission
- Receive calculated health metrics instantly

The system follows a simple MVC-like structure using PHP and provides a visually appealing interface.

---

✨ Features

- 🔹 Multi-step form (Input → Confirm → Result)
- 🔹 BMI calculation with health status classification
- 🔹 BMR (Basal Metabolic Rate) calculation
- 🔹 Daily calories based on activity level
- 🔹 Goal-based calorie adjustment (lose / maintain / gain)
- 🔹 Clean UI with gradient design and glassmorphism effects
- 🔹 Input validation and sanitization
- 🔹 Reusable components (partials)

---

🧠 How It Works

1. Routing ("index.php")

The app uses a simple routing system based on the "page" query parameter:

- "home" → Landing page
- "form" → User input form
- "confirm" → Data review page
- "result" → Final results

---

2. Flow of Data

Home → Form → Confirm → Result

---

🗂️ Project Structure

project/
│
├── index.php
├── functions.php
├── controllers/
│   └── MainController.php
│
├── views/
│   ├── home.php
│   ├── form.php
│   ├── confirm.php
│   ├── result.php
│   │
│   └── partials/
│       ├── head.php
│       ├── nav.php
│       ├── banner.php
│       └── footer.php

---

📈 Example Calculations

- BMI = weight / (height²)
- BMR = based on gender-specific formula
- Calories = BMR × activity level
- Goal Calories:
  - Lose weight → -500 kcal
  - Gain weight → +500 kcal

---

👨‍💻 Author

Developed as a practical PHP project to demonstrate:

- MVC structure basics
- Form handling
- Data processing
- UI/UX design
