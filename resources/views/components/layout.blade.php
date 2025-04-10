<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo" />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/jobs">Jobs</a>
                <a href="/career">Careers</a>
                <a href="/salary">Salaries</a>
                <a href="/company">Companies</a>
            </div>
           
          
                @auth
                <div class="flex space-x-6 font-bold">
                    <a href="/jobs/create">Post a job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                       <button type="submit">Logout</button>
                    </form>
                </div>

                {{-- <form action="/logout" method="DELETE" class="inline-block">
                    @csrf
                    <button type="submit" class="text-white/70 hover:text-white">Logout</button>
                </form> --}}
    
                @endauth

                @guest
                   <div class="space-x-6 font-bold">
                    <a href="/login">Login</a>
                    <a href="/register">Sign Up</a>
                   </div>
                @endguest
           
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
