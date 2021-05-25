<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            PackagesSeeder::class,
            AdminsSeeder::class,
            ArticleCategoriesSeeder::class,
            ArticlesSeeder::class,
            CitiesSeeder::class,
            ProductCategoriesSeeder::class,
            ProductsSeeder::class,
            TestimonialsSeeder::class,
            UserSeeder::class,
            WorkoutCategoriesSeeder::class,
            WorkoutsSeeder::class,
            WorkoutDatasSeeder::class,
            OrdersSeeder::class,
            PackageProductsSeeder::class,
            CommentsSeeder::class,
            RepliesSeeder::class,
            OrderPackagesSeeder::class,
            OrderProductsSeeder::class,
        ]);
    }
}
