<div class="border-y my-1 py-1">
    <div x-data="{
        theme: '',
        init: function() {
            this.theme = localStorage.getItem('theme') || 'system'
    
            $watch('theme', (value) => {
                this.theme = value
                localStorage.setItem('theme', value);
    
                if (value === 'dark' || value === 'system') {
                    document.querySelector('html').classList.add('dark');
                } else {
                    document.querySelector('html').classList.remove('dark');
                }
            })
        },
    
    
    }" class="grid grid-flow-col gap-x-1">
        <button aria-label="Enable light theme" type="button"
            x-bind:class="theme === 'light' ?
                'bg-neutral-100 text-primary-600 dark:bg-white/5 dark:text-primary-400' :
                'text-neutral-400 hover:text-neutral-500 focus-visible:text-neutral-500 dark:text-neutral-500 dark:hover:text-neutral-400 dark:focus-visible:text-neutral-400'"
            x-on:click="(theme = 'light');"
            class="flex justify-center rounded-lg p-2 outline-none transition duration-75 ">
            <x-heroicon-s-sun class="h-5 w-5" />
        </button>

        <button aria-label="Enable dark theme" type="button"
            x-bind:class="theme === 'dark' ?
                'bg-neutral-100 text-primary-600 dark:bg-white/5 dark:text-primary-400' :
                'text-neutral-400 hover:text-neutral-500 focus-visible:text-neutral-500 dark:text-neutral-500 dark:hover:text-neutral-400 dark:focus-visible:text-neutral-400'"
            x-on:click="(theme = 'dark');"
            class="flex justify-center rounded-lg p-2 outline-none transition duration-75 ">

            <x-heroicon-s-moon class="h-5 w-5" />
        </button>

        <button aria-label="Enable system theme" type="button"
            x-bind:class="theme === 'system' ?
                'bg-neutral-100 text-primary-600 dark:bg-white/5 dark:text-primary-400' :
                'text-neutral-400 hover:text-neutral-500 focus-visible:text-neutral-500 dark:text-neutral-500 dark:hover:text-neutral-400 dark:focus-visible:text-neutral-400'"
            x-on:click="(theme = 'system');"
            class="flex justify-center rounded-lg p-2 outline-none transition duration-75 ">
            <x-heroicon-s-computer-desktop class="h-5 w-5" />
        </button>
    </div>
</div>
