<template>
    <div id="body-login" class="min-h-screen flex sm:justify-center items-center pt-6 sm:pt-0 bg-red-400">
        <div class="w-2/4"></div>
        <div class="w-2/4">
            <div>
                <slot name="logo" />
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <slot />
            </div>
        </div>
    </div>
</template>
