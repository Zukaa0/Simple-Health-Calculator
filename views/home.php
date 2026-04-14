<?php include 'views/partials/head.php'; ?>

<body class="bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 min-h-screen flex flex-col font-sans">

    <?php include 'views/partials/nav.php'; ?>

    <main class="flex-grow flex justify-center items-center py-10">

        <div class="backdrop-blur-lg bg-white/40 border border-white/50 
                    p-12 rounded-[2.5rem] shadow-2xl text-center w-[28rem] transition-all">

            <h2 class="text-4xl font-black bg-clip-text text-transparent bg-gradient-to-r from-slate-800 to-slate-600 mb-4 tracking-tight">
                Start Your Health Journey
            </h2>

            <p class="text-gray-500 font-medium mb-8">
                Calculate your BMI & Calories in seconds
            </p>

            <a href="index.php?page=form"
               class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 
                      text-white px-10 py-4 rounded-2xl shadow-xl font-bold
                      hover:scale-105 hover:shadow-2xl transition-all duration-300">
                🚀 Start Now
            </a>

        </div>

    </main>

    <?php include 'views/partials/footer.php'; ?>

</body>