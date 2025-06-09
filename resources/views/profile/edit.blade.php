<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'navblue': '#056594',
                        'gray': '#C5D6DB',
                        'grayy': '#D9D9D9'
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'serif']
                    },
                },
            },
        }
    </script>
</head>
<script>
    function openModal() {
        document.getElementById('saveModal').classList.remove('hidden');
        document.getElementById('saveModal').classList.add('flex');
    }

    function closeModal() {
        document.getElementById('saveModal').classList.remove('flex');
        document.getElementById('saveModal').classList.add('hidden');
    }
</script>

<body>
<!-- Full Page Sign Up -->
@extends('pages.navbar')
<x-app-layout>
    <x-slot name="header">
        <div class="">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="h-12 w-12 bg-white/20 rounded-xl flex items-center justify-center">
                            <svg class="h-6 w-6 text-navblue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-black dark:text-white">
                            {{ __('Profile Settings') }}
                        </h1>
                        <p class="text-navblue mt-1">
                            {{ __('Manage your account settings and preferences') }}
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8 bg-gray-50 dark:bg-gray-950 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Profile Information Section -->
            <div class="mb-8">
                <div class="bg-white dark:bg-gray-900 shadow-xl rounded-2xl border border-gray-200 dark:border-gray-800 overflow-hidden">
                    <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-800">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                    <svg class="h-4 w-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ __('Profile Information') }}
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Update your account profile information and email address') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-8">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>


            </div>

            <!-- Password Section -->
            <div class="mb-8">
                <div class="bg-white dark:bg-gray-900 shadow-xl rounded-2xl border border-gray-200 dark:border-gray-800 overflow-hidden">
                    <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-800">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                                    <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ __('Update Password') }}
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Ensure your account is using a long, random password to stay secure') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-8">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="mb-8">
                <div class="bg-white dark:bg-gray-900 shadow-xl rounded-2xl border border-red-200 dark:border-red-800 overflow-hidden">
                    <div class="px-6 py-5 border-b border-red-200 dark:border-red-800 bg-red-50 dark:bg-red-950/50">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center">
                                    <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.864-.833-2.632 0L4.268 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-red-800 dark:text-red-200">
                                    {{ __('Delete Account') }}
                                </h3>
                                <p class="text-sm text-red-600 dark:text-red-300">
                                    {{ __('Permanently delete your account and all of its resources') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-8">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

{{-- 
            <div class="text-center my-8">
                <button onclick="openModal()" class="bg-navblue hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-xl transition">
                    Save Changes
                </button>
            </div> --}}
        </div>
    </div>

{{-- 

    <!-- Confirmation Modal -->
    <div id="saveModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-40">
        <div class="bg-white rounded-2xl shadow-xl max-w-md w-full p-6 text-center">
            <h2 class="text-xl font-semibold text-gray-800">Changes Saved</h2>
            <p class="text-gray-600 mt-2">Your profile settings have been successfully updated.</p>
            <button onclick="closeModal()" class="mt-4 bg-navblue text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition">
                Close
            </button>
        </div>
    </div> --}}

</x-app-layout>

</body>
</html>