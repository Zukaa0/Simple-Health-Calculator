<?php include 'views/partials/head.php'; ?>

<body class="bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 min-h-screen flex flex-col font-sans">

<?php include 'views/partials/nav.php'; ?>

<main class="flex-grow flex justify-center items-center py-12 px-4">

    <div class="backdrop-blur-xl bg-white/30 border border-white/40
                p-10 rounded-[2.5rem] shadow-2xl w-full max-w-xl">

        <h2 class="text-4xl font-black text-center mb-6 
                   bg-clip-text text-transparent 
                   bg-gradient-to-r from-green-600 to-blue-600">
            Confirm Your Data
        </h2>

        <p class="text-center text-gray-600 mb-8 font-medium">
            Please review your information before continuing
        </p>

        <!-- SUMMARY BOX -->
        <div class="space-y-3 text-gray-700 bg-white/40 p-6 rounded-2xl border border-white/40 shadow-inner">

            <div><span class="font-semibold">Name:</span> <?= htmlspecialchars($_POST['name']) ?></div>
            <div><span class="font-semibold">Age:</span> <?= htmlspecialchars($_POST['age']) ?></div>
            <div><span class="font-semibold">Gender:</span> <?= htmlspecialchars($_POST['gender']) ?></div>
            <div><span class="font-semibold">Height:</span> <?= htmlspecialchars($_POST['height']) ?> cm</div>
            <div><span class="font-semibold">Weight:</span> <?= htmlspecialchars($_POST['weight']) ?> kg</div>
            <div><span class="font-semibold">Activity:</span> <?= htmlspecialchars($_POST['activity']) ?></div>
            <div><span class="font-semibold">Goal:</span> <?= htmlspecialchars($_POST['goal']) ?></div>

        </div>

        <!-- FORM TO FINAL SUBMIT -->
        <form action="index.php?page=result" method="POST" class="mt-8 space-y-4">

            <!-- hidden fields -->
            <input type="hidden" name="name" value="<?= htmlspecialchars($_POST['name']) ?>">
            <input type="hidden" name="age" value="<?= htmlspecialchars($_POST['age']) ?>">
            <input type="hidden" name="gender" value="<?= htmlspecialchars($_POST['gender']) ?>">
            <input type="hidden" name="height" value="<?= htmlspecialchars($_POST['height']) ?>">
            <input type="hidden" name="weight" value="<?= htmlspecialchars($_POST['weight']) ?>">
            <input type="hidden" name="activity" value="<?= htmlspecialchars($_POST['activity']) ?>">
            <input type="hidden" name="goal" value="<?= htmlspecialchars($_POST['goal']) ?>">

            <!-- BUTTONS -->
            <div class="flex gap-4">

                <a href="index.php?page=form"
                   class="w-1/2 text-center py-4 rounded-2xl 
                          bg-gradient-to-r from-gray-500 to-gray-700 
                          text-white font-bold shadow-xl
                          hover:scale-105 hover:shadow-2xl 
                          transition-all duration-300">
                    ← Back
                </a>

                <button type="submit"
                        class="w-1/2 bg-gradient-to-r from-green-500 to-blue-600 
                               text-white py-4 rounded-2xl shadow-xl font-bold
                               hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    Confirm →
                </button>

            </div>

        </form>

    </div>

</main>

<?php include 'views/partials/footer.php'; ?>

</body>