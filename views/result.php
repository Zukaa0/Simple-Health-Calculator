<?php include 'views/partials/head.php'; ?>

<body class="bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 min-h-screen flex flex-col font-sans">

<?php include 'views/partials/nav.php'; ?>

<?php

$name = htmlspecialchars($_POST['name'] ?? 'User');
$bmi = $result["BMI Value: "];
$status = $result["Status: "];
$bmr = $result["BMR Value: "];
$activityCalories = $result["Calories By Activity: "];
$goalCalories = $result["Calories By Goal"];
?>

<main class="flex-grow flex justify-center items-center py-12 px-4">

    <div class="backdrop-blur-xl bg-white/30 border border-white/40
                p-10 rounded-[2.5rem] shadow-2xl w-full max-w-2xl">

        <!-- TITLE -->
        <h2 class="text-4xl font-black text-center mb-2 
                   bg-clip-text text-transparent 
                   bg-gradient-to-r from-purple-600 to-blue-600">
            Your Health Results
        </h2>

        <p class="text-center text-gray-600 mb-8 font-medium">
            Personalized calculation based on your data
        </p>

        <!-- NAME GREETING -->
        <div class="text-center mb-6 text-gray-700 font-semibold">
            Hello, <?= $name ?> 👋
        </div>

        <!-- RESULTS CARD -->
        <div class="space-y-4 bg-white/40 p-6 rounded-2xl border border-white/40 shadow-inner">

            <div class="flex justify-between">
                <span class="font-semibold">BMI</span>
                <span><?= $bmi ?></span>
            </div>

            <div class="flex justify-between">
                <span class="font-semibold">Status</span>
                <span><?= $status ?></span>
            </div>

            <div class="flex justify-between">
                <span class="font-semibold">BMR</span>
                <span><?= $bmr ?></span>
            </div>

            <div class="flex justify-between">
                <span class="font-semibold">Calories (Activity)</span>
                <span><?= $activityCalories ?></span>
            </div>

            <div class="flex justify-between font-bold text-blue-700">
                <span>Calories (Goal)</span>
                <span><?= $goalCalories ?></span>
            </div>

        </div>

        <!-- MOTIVATIONAL MESSAGE -->
        <div class="mt-8 text-center text-gray-700 font-medium leading-relaxed">

            <?php
            $message = match(true) {
                $status === "Underweight" => "Consistency builds strength. Every step forward brings you closer to balance.",
                $status === "Normal Weight" => "Excellent balance. Maintain your rhythm and stay consistent.",
                $status === "Overweight" => "Progress is built daily. Small improvements lead to big changes.",
                default => "Every journey starts with a decision. Yours is already in motion."
            };
            ?>

            <?= $message ?>

        </div>

        <!-- BUTTON -->
        <div class="mt-8 text-center">
            <a href="index.php?page=form"
               class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 
                      text-white px-10 py-4 rounded-2xl shadow-xl font-bold
                      hover:scale-105 hover:shadow-2xl transition-all duration-300">
                Calculate Again →
            </a>
        </div>

    </div>

</main>

<?php include 'views/partials/footer.php'; ?>

</body>