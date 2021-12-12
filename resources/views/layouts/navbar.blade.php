<div class="px-7 bg-white shadow-lg rounded-b-2xl md:hidden">
	<div class="flex justify-between">
		
		@if (Auth::check()) 

			<x-navbar.mobile-item url="#" icon="fas fa-home">Home</x-navbar.mobile-item>
			
			<x-navbar.mobile-item url="#" icon="far fa-compass">Explore</x-navbar.mobile-item>
			
		@else
			<x-navbar.mobile-item url="#" icon="fas fa-home">Home</x-navbar.mobile-item>

			<x-navbar.mobile-item url="/login" icon="fas fa-sign-in-alt">Login</x-navbar.mobile-item>

			<x-navbar.mobile-item url="/register" icon="fas fa-user-plus">Register</x-navbar.mobile-item>

			<x-navbar.mobile-item url="#" icon="far fa-compass">Explore</x-navbar.mobile-item>
		@endif
	</div>
</div>