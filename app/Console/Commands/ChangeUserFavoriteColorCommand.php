<?php

namespace App\Console\Commands;

use App\Events\UserFavoriteColorChanged;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class ChangeUserFavoriteColorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:change-color';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change user favorite color';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            /** @var \App\Models\User */
            $user = User::first();

            $colors = [
                'Red',
                'Blue',
                'Purple',
                'Yellow',
                'Green'
            ];

            $user->update([
                'favorite_color' => Arr::random($colors)
            ]);

            UserFavoriteColorChanged::dispatch($user);

            return Command::SUCCESS;
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            throw $th;
        }
    }
}
