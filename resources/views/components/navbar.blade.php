<div
    class="flex w-full flex-col items-center justify-between md:flex-row"
>
    <div class="flex w-full flex-row justify-between md:w-1/4">
        <img src="{{asset('file/image/logo/svg/logo.svg')}}" class="size-10" alt="">
    </div>

    <div
        class="mt-4 w-full rounded-t-md bg-white md:mt-0 md:w-auto md:bg-neutral-100"
    >
        <nav id="nav" class="hidden w-full px-4 py-4 md:flex">
            <ul
                class="flex flex-col space-y-1 text-base font-medium text-gray-900 md:flex-row md:space-x-2 md:space-y-0"
            >
                <li><a class="hover:text-gray-500" href="https://github.com/yahannes/FinTrack">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg></a></li>
            </ul>
        </nav>
    </div>
    <div
        id="buttons"
        class="hidden w-full flex-col justify-end space-y-2 space-x-0 rounded-b-md bg-white px-3 pb-4 md:flex md:w-1/4 md:flex-row md:space-y-0 md:space-x-4 md:bg-neutral-100 md:px-0 md:pb-0"
    >
        <a
            class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-base font-medium hover:text-gray-500 md:w-auto"
            href="{{route('filament.dashboard.auth.login')}}"
        >
            Log In
        </a>
        <a
            class="w-full rounded-md bg-black px-3 py-1.5 text-base font-medium text-white hover:bg-gray-800 md:w-auto"
            href="{{route('filament.dashboard.auth.register')}}"

        >
            Sign up
        </a>
    </div>
</div>
