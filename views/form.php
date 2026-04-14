<?php include 'views/partials/head.php'; ?>

<body class="bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 min-h-screen flex flex-col">

<?php include 'views/partials/nav.php'; ?>

<main class="flex-grow flex justify-center items-center py-12 px-4">

<form action="index.php?page=confirm" method="POST"
      class="backdrop-blur-xl bg-white/30 border border-white/40
             p-12 rounded-[2.5rem] shadow-2xl w-full max-w-xl transition-all">

    <!-- Title -->
    <h2 class="text-4xl font-black text-center mb-2 
               bg-clip-text text-transparent 
               bg-gradient-to-r from-blue-600 to-purple-600">
        Enter Your Information
    </h2>

    <p class="text-center text-gray-500 mb-8 font-medium">
        Fill your details to calculate your health stats
    </p>

    <!-- INPUT STYLE -->
    <?php function inputStyle() {
        return "w-full p-3 border border-gray-200 rounded-2xl 
                bg-white/70 backdrop-blur-md
                focus:outline-none focus:ring-2 focus:ring-purple-400 
                focus:shadow-md transition-all";
    } ?>

    <!-- Name -->
    <div class="mb-5">
        <label class="text-gray-700 font-semibold mb-1 block">Name</label>
        <input type="text" name="name" class="<?= inputStyle(); ?>" required>
    </div>

    <!-- Age -->
    <div class="mb-5">
        <label class="text-gray-700 font-semibold mb-1 block">Age</label>
        <input type="number" name="age" class="<?= inputStyle(); ?>" required>
    </div>

    <!-- Gender -->
    <div class="mb-5">
        <label class="text-gray-700 font-semibold mb-1 block">Gender</label>
        <select name="gender" class="<?= inputStyle(); ?>">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>

    <!-- Height -->
    <div class="mb-5">
        <label class="text-gray-700 font-semibold mb-1 block">Height (cm)</label>
        <input type="number" name="height" class="<?= inputStyle(); ?>" required>
    </div>

    <!-- Weight -->
    <div class="mb-5">
        <label class="text-gray-700 font-semibold mb-1 block">Weight (kg)</label>
        <input type="number" name="weight" class="<?= inputStyle(); ?>" required>
    </div>

    <!-- Activity -->
    <div class="mb-5">
        <label class="text-gray-700 font-semibold mb-1 block">Activity Level</label>
        <select name="activity" class="<?= inputStyle(); ?>">
            <option value="1.2">Sedentary</option>
            <option value="1.375">Lightly Active</option>
            <option value="1.55">Moderately Active</option>
            <option value="1.725">Very Active</option>
        </select>
    </div>

    <!-- Goal -->
    <div class="mb-8">
        <label class="text-gray-700 font-semibold mb-1 block">Fitness Goal</label>
        <select name="goal" class="<?= inputStyle(); ?>">
            <option value="lose">Lose Weight</option>
            <option value="maintain">Maintain Weight</option>
            <option value="gain">Gain Muscle</option>
        </select>
    </div>

    <!-- Button -->
    <button
        class="w-full bg-gradient-to-r from-blue-600 to-purple-600 
               text-white py-4 rounded-2xl shadow-xl font-bold
               hover:scale-105 hover:shadow-2xl transition-all duration-300">

        Continue →
    </button>

</form>

</main>

<?php include 'views/partials/footer.php'; ?>

</body>