<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<header class="p-4 bg-gray-100 text-gray-800">
	<div class="container flex justify-between h-16 mx-auto">
		<a rel="noopener noreferrer" href="#" aria-label="Back to homepage" class="flex items-center p-2 font-bold">
			Logo
		</a>
		<ul class="items-stretch hidden space-x-3 lg:flex">
			<li class="flex">
				<a rel="noopener noreferrer" href="#" class="flex items-center px-4 -mb-1 border-b-2 border-transparent text-sky-600 border-sky-600">Home</a>
			</li>
			<li class="flex">
				<a rel="noopener noreferrer" href="#" class="flex items-center px-4 -mb-1 border-b-2 border-transparent">About</a>
			</li>
			<li class="flex">
				<a rel="noopener noreferrer" href="#" class="flex items-center px-4 -mb-1 border-b-2 border-transparent">
                    Contact
                </a>
			</li>
		</ul>
		<div class="items-center flex-shrink-0 hidden lg:flex">
			<a href="{{route('login')}}" class="self-center px-8 py-3 hover:font-bold rounded-l-lg bg-sky-600 text-gray-50" >Sign in</a>
			<button class="self-center px-8 py-3 hover:font-bold border-l-2 border-l-white rounded-r-lg bg-sky-600 text-gray-50">Sign up</button>
		</div>
		<button class="p-4 lg:hidden">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-800">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
			</svg>
		</button>
	</div>
</header>
</body>
</html>