<?php

require_once('functions.php');

function handleResult($data)
{
    $bmi = calculateBMI($data['weight'], $data['height']);

    $status = bmiStatus($bmi);

    $bmr = calculateBMR(
        $data['gender'],
        $data['weight'],
        $data['height'],
        $data['age']
    );

    $calories_by_activity = caloriesByActivity($bmr, $data['activity']);

    $calories_by_goal = adjustGoal($calories_by_activity, $data['goal']);

    return [
        "BMI Value: " => round($bmi,2),
        "Status: " => $status,
        "BMR Value: " => round($bmr) . " kcal/day",
        "Calories By Activity: " => round($calories_by_activity) . " kcal/day",
        "Calories By Goal" => round($calories_by_goal) . " kcal/day"
    ];
}
