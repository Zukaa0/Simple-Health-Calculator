<?php
function calculateBMI($weight, $height_cm)
{
    $height = $height_cm / 100;

    return $weight / ($height * $height);
}

function bmiStatus($bmi)
{
    if ($bmi < 18.5)  return "Underweight";

    elseif ($bmi < 25) return "Normal Weight";

    elseif ($bmi < 30) return "Overweight";

    else return "Obese";
}

function calculateBMR($gender, $weight, $height, $age)
{
    if ($gender === "male")
        return 88.362 + (13.397 * $weight)
            + (4.799 * $height) - (5.677 * $age);

    else
        return 447.593 + (9.247 * $weight)
            + (3.098 * $height) - (4.330 * $age);
}

function caloriesByActivity($bmr, $activity)
{
    return $bmr * $activity;
}

function adjustGoal($calories, $goal)
{
    if ($goal === "lose") return $calories - 500;

    if ($goal === "gain") return $calories + 500;

    return $calories;
}
