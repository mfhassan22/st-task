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
		<h1 class="my-3 text-4xl font-bold">Sign in</h1>
		<p class="text-sm text-gray-600">Sign in to access your account</p>
	</div>
	@if(Session::has('message'))
	<div class="bg-green-200 p-3 rounded">
        <ul>
            <li>{{Session::get('message')}}</li>
        </ul>
    </div>
	@endif

    @if($errors->any())
    <div class="bg-red-200 p-3 rounded">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
	<form novalidate="" action="{{route('login.post')}}" method="POST" class="space-y-12">
    @csrf
		<div class="space-y-4">
			<div>
				<label for="email" class="block mb-2 text-sm">Email address (test@example.com)</label>
				<input type="email" name="email" id="email" placeholder="test@example.com" class="w-full px-3 py-2 border rounded-md border-gray-300 bg-gray-50 text-gray-800">
			</div>
			<div>
				<div class="flex justify-between mb-2">
					<label for="password" class="text-sm">Password (password)</label>
					<!-- <a rel="noopener noreferrer" href="#" class="text-xs hover:underline text-gray-600">Forgot password?</a> -->
				</div>
				<input type="password" name="password" id="password" placeholder="*****" class="w-full px-3 py-2 border rounded-md border-gray-300 bg-gray-50 text-gray-800">
			</div>
		</div>
		<div class="space-y-2">
			<div>
				<button type="submit" class="w-full px-8 py-3 font-semibold rounded-md bg-sky-600 text-gray-50">Sign in</button>
			</div>
			<p class="px-6 text-sm text-center text-gray-600">Don't have an account yet?
				<a rel="noopener noreferrer" href="{{route('register')}}" class="hover:underline text-sky-600">Sign up</a>.
			</p>
		</div>
	</form>
</div>
    </div>
</body>
</html>