<?php get_header(); ?>

<main class="bg-gray-100 min-h-screen py-12">
    <div class="container mx-auto px-4">

        <!-- Portfolio Title and FontAwesome Icon -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-5xl font-bold text-gray-800">My Portfolio</h1>
            <i class="fas fa-briefcase text-gray-700 text-3xl"></i>
        </div>

        <!-- Portfolio Items Loop -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- Fake hardcoded project 1 -->
            <article class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <a href="#" class="block mb-4">
                    <img src="https://via.placeholder.com/300" alt="Project 1" class="w-full h-52 object-cover rounded-t-lg">
                </a>
                <h2 class="text-2xl mb-4 font-semibold">
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-300">
                        Amazing Project 1
                    </a>
                </h2>
                <p class="text-gray-600 mb-4">
                    This is a brief description of the first amazing project.
                </p>
                <a href="#" class="text-blue-500 hover:text-blue-700 flex items-center transition-colors duration-300">
                    View Details 
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>

            <!-- Fake hardcoded project 2 -->
            <article class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <a href="#" class="block mb-4">
                    <img src="https://via.placeholder.com/300" alt="Project 2" class="w-full h-52 object-cover rounded-t-lg">
                </a>
                <h2 class="text-2xl mb-4 font-semibold">
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-300">
                        Incredible Project 2
                    </a>
                </h2>
                <p class="text-gray-600 mb-4">
                    Overview of the second incredible project. Unique and outstanding!
                </p>
                <a href="#" class="text-blue-500 hover:text-blue-700 flex items-center transition-colors duration-300">
                    View Details 
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>

            <!-- Fake hardcoded project 3 -->
            <article class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <a href="#" class="block mb-4">
                    <img src="https://via.placeholder.com/300" alt="Project 3" class="w-full h-52 object-cover rounded-t-lg">
                </a>
                <h2 class="text-2xl mb-4 font-semibold">
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-300">
                        Stunning Project 3
                    </a>
                </h2>
                <p class="text-gray-600 mb-4">
                    A quick summary of the third stunning project. Simply breathtaking.
                </p>
                <a href="#" class="text-blue-500 hover:text-blue-700 flex items-center transition-colors duration-300">
                    View Details 
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>

        </div>

    </div>
</main>

<?php get_footer(); ?>
