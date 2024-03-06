<div>
    <div x-data="{
        show: false,
        title: '',
        subtitle: '',
        remove() {
            // this.title = ''
            show = false
        },
    }"
        @toast.window="
        show=true
		title = $event.detail.title;
		subtitle = $event.detail.subtitle;
		setTimeout(() => { remove() }, 2500)
    ">
        <div class="fixed top-6 right-6 z-50 max-w-sm w-full" x-cloak x-show="show" x-transition.duration.500ms>
            <div id="toast-success"
                class="w-full p-4 text-gray-700 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 "
                role="alert">
                <div class="flex items-start">
                    <div>
                        <x-heroicon-o-check-circle class="h-6 w-6 text-green-400" />
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="pt-0.5 ml-3 grow text-sm">
                        <div class="font-medium text-gray-900" x-text="title"></div>
                        <div x-show="subtitle" class="text-gray-500 font-normal mt-1" x-html="subtitle"
                            x-show="subtitle">
                        </div>
                    </div>
                    <button type="button" x-on:click="show = false" aria-label="Close">
                        <x-heroicon-m-x-mark class="h-5 w-5 text-gray-400 focus:outline-none" />
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
