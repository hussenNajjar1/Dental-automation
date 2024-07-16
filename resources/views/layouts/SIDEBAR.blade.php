<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">ALNOR</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="/reservations">
					<i class='bx bi bi-card-checklist' ></i>
					<span class="text">{{ trans('messages.bookings') }}</span>
				</a>
			</li>
			<li>
				<a href="/posts">
			
					<i class='bx bi bi-people' ></i>
					<span class="">   {{ trans('messages.articles') }} </span>
				</a>
			</li>
		
			
			<li>
				<a href="/videoss">
					<i class='bx bi bi-camera-video' ></i>
					<span class="text">  {{ trans('messages.videos') }} </span>
				</a>
			</li>
			
			<li>
				<a href="/records">
					<i class='bx bi bi-card-checklist' ></i>
					<span class="text">    {{ trans('messages.patients') }} </span>
				</a>
			</li>
			
			<li>
				<a href="/">
					<i class='bx  bi-house-door-fill' ></i>
					<span class="text">  {{ trans('messages.home') }}</span>
				</a>
			</li>

		</ul>
		<ul class="side-menu">
			
			<li>
            <form method="POST" action="{{ route('logout') }}">
                            @csrf
				<a href="#" class="logout">
                <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit(); " >
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">{{ trans('messages.logout') }}</span>
				</a>
			</li>
            </form>

		</ul>
	</section>