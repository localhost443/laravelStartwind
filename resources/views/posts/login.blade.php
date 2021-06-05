@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="md:w-4/12 w-8/12 bg-white p-6 rounded-lg shadow-md">
            <h1 class=" text-center tracking-tight mb-4 text-2xl font-light">Login Form</h1>

            @if(session('status'))
                <div class="text-center">
                    <span class="text-red-400">{{session('status')}}</span>
                </div>

            @endif

            <form action="{{route('login')}}" method="post">
                @csrf

                <div class="flex mt-3">
                    <span
                        class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z">
                            </path>
                        </svg>
                    </span>
                    <label for="email-with-icon"></label> <input type="text" id="email-with-icon"
                                                                 class=" rounded-r-lg flex-1 appearance-none border border-gray-300 @error('username') border-red-300 @enderror w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                                 name="email" value="{{old('email')}}" placeholder="Your email"/>
                </div>
                @error('email')
                <div class="text-red-400">
                    {{$message}}
                </div>
                @enderror
                <div class="flex mt-3">
                    <span
                        class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                        <?xml version = "1.0" encoding = "UTF-8"?>
                        <svg width="15" height="15" version="1.1" viewBox="0 0 512 512" xml:space="preserve"
                             xmlns="http://www.w3.org/2000/svg">
		                <path
                            d="m334.97 0c-95.419 0-173.05 77.63-173.05 173.05 0 21.213 3.769 41.827 11.211 61.403l-165.46 165.48c-2.365 2.366-3.694 5.573-3.694 8.917v90.544c0 6.965 5.646 12.611 12.611 12.611h74.616c3.341 0 6.545-1.325 8.91-3.686l25.145-25.107c2.37-2.366 3.701-5.577 3.701-8.925v-30.876h30.837c6.965 0 12.611-5.646 12.611-12.611v-12.36h12.361c6.964 0 12.611-5.646 12.611-12.611v-27.136h27.136c3.344 0 6.551-1.329 8.917-3.694l40.121-40.121c19.579 7.449 40.196 11.223 61.417 11.223 95.419 0 173.05-77.63 173.05-173.05 1e-3 -95.417-77.628-173.05-173.05-173.05zm0 320.87c-20.642 0-40.606-4.169-59.339-12.393-4.844-2.126-10.299-0.956-13.871 2.525-0.039 0.037-0.077 0.067-0.115 0.106l-42.354 42.354h-34.523c-6.965 0-12.611 5.646-12.611 12.611v27.136h-12.361c-6.964 0-12.611 5.646-12.611 12.611v12.36h-30.838c-6.964 0-12.611 5.646-12.611 12.611v38.257l-17.753 17.725h-56.785v-17.821l154.14-154.14c4.433-4.433 4.433-11.619 0-16.051s-11.617-4.434-16.053 0l-138.09 138.09v-22.784l167.7-167.71c0.038-0.038 0.067-0.073 0.102-0.11 3.482-3.569 4.656-9.024 2.53-13.872-8.216-18.732-12.38-38.695-12.38-59.33 0-81.512 66.315-147.83 147.83-147.83s147.82 66.314 147.82 147.83c-2e-3 81.51-66.318 147.82-147.83 147.82z"/>
                        <path
                            d="m387.64 73.144c-26.047 0-47.237 21.19-47.237 47.237s21.19 47.237 47.237 47.237 47.237-21.19 47.237-47.237-21.189-47.237-47.237-47.237zm0 69.252c-12.139 0-22.015-9.876-22.015-22.015s9.876-22.015 22.015-22.015 22.015 9.876 22.015 22.015-9.876 22.015-22.015 22.015z"/>
                        </svg>
                    </span>
                    <label for="password"></label> <input type="text" id="email-with-icon"
                                                          class=" rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                          name="password" value="{{old('password')}}" placeholder="Your Password"/>
                </div>
                @error('password')
                <div class="text-red-400">
                    {{$message}}
                </div>
                @enderror
                <div class="text-center">
                    <button class=" mt-3 item-center bg-green-500 text-center text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit"
                    >
                        <i class="fas fa-heart"></i> Login
                    </button>
                </div>


            </form>
        </div>
    </div>

@endsection
