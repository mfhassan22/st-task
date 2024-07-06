<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="flex items-center justify-center h-screen">
<div class="flex flex-col max-w-md p-6 rounded-md sm:p-10 bg-gray-50 text-gray-800">
	<div class="mb-8 text-center">
		<h1 class="my-3 text-4xl font-bold">Sign Up</h1>
		<p class="text-sm text-gray-600">Create You Account</p>
	</div>
    @if($errors->any())
    <div class="bg-red-200 p-3 rounded">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
	<form novalidate="" action="{{route('register.post')}}" method="POST" class="space-y-12">
    @csrf
		<div class="space-y-4">
		<div>
				<div class="flex justify-between mb-2">
					<label for="name" class="text-sm">Name </label>
				</div>
				<input type="text" name="name" id="name" placeholder="" class="w-full px-3 py-2 border rounded-md border-gray-300 bg-gray-50 text-gray-800">
			</div>
			<div>
				<label for="email" class="block mb-2 text-sm">Email address</label>
				<input type="email" name="email" id="email" placeholder="" class="w-full px-3 py-2 border rounded-md border-gray-300 bg-gray-50 text-gray-800">
			</div>
			<div>
				<div class="flex justify-between mb-2">
					<label for="password" class="text-sm">Password</label>
				</div>
				<input type="password" name="password" id="password" placeholder="" class="w-full px-3 py-2 border rounded-md border-gray-300 bg-gray-50 text-gray-800">
			</div>
		</div>
		<div class="space-y-2">
			<div>
				<button type="submit" class="w-full px-8 py-3 font-semibold rounded-md bg-sky-600 text-gray-50">Register</button>
			</div>
			<p class="px-6 text-sm text-center text-gray-600">Already have an account?
				<a rel="noopener noreferrer" href="{{route('login')}}" class="hover:underline text-sky-600">Sign In</a>.
			</p>
		</div>
	</form>
</div>
    </div>
</body>
</html>