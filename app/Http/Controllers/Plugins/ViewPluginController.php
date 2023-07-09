<?php

namespace App\Http\Controllers\Plugins;

use App\Http\Controllers\Controller;
use App\Models\Plugin;
use App\Models\User;
use Illuminate\Support\Facades\RateLimiter;

class ViewPluginController extends Controller
{
    public function __invoke()
    {
        return view('plugins.view-plugin', [
            'plugin' => [
                'id' => 1,
                'name' => 'Media Library Manager',
                'price' => '€49,00',
                'buy_link' => 'https://checkout.anystack.sh/filament-media-library-pro?via=arf178',
                'github_stars' => 483,
                'view_count' => 20303,
                'thumbnail' => '',
                'discord_link' => 'https://discord.com/channels/883083792112300104/961393209639067698',
                'github_link' => null,
                'description' => 'Give your users a beautiful way to upload, manage and select media and images in Filament Admin. Integrates with Spatie MediaLibrary.',
                'author' => [
                    'name' => 'Ralph J. Smit',
                    'avatar' => 'https://avatars.githubusercontent.com/u/59207045?v=4',
                    'twitter' => 'https://twitter.com/ralphjsmit',
                    'github' => 'https://github.com/ralphjsmit',
                    'stats' => [
                        'plugins' => 3,
                        'views' => 20303,
                        'stars' => 579,
                    ]
                ],
                'features' => [
                    'dark_mode' => true,
                    'multi_language' => true,
                ],
                'categories' => ['Admin Panel', 'Field', 'Kit', 'Spatie', 'Form Builder'],
                'supported_versions' => ['2', '3'],
                'is_compatible_with_latest_version' => true,
                'latest_activity' => '2 days ago',
                'is_actively_maintained' => true,
            ],
            'more_from_this_creator' => [
                [
                    'name' => 'Onboarding Manager Pro',
                    'thumbnail' => '',
                    'description' => 'Beautiful onboarding experiences for Filament Admin.',
                    'github_stars' => 513,
                    'view_count' => 10053,
                ],
                [
                    'name' => 'Notifications Pro',
                    'thumbnail' => '',
                    'description' => 'Seamlessly integrate Laravel database notifications with Filament.',
                    'github_stars' => 791,
                    'view_count' => 7512,
                ],
                [
                    'name' => 'TALL Interactive',
                    'thumbnail' => '',
                    'description' => 'This package allows you to create beautiful forms, modals and slide-overs with ease.',
                    'github_stars' => 111,
                    'view_count' => 7772,
                ],
            ]
        ]);
    }
}
