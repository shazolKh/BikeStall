<footer class="footer">
	<div class="cont footer-top">

		<!-- Footer Menu -->
		<div class="footer-menu">
			<p>Company</p>
			<ul>
				<li><a href="{{url('contact/')}}">Contact</a></li>
				<li><a href="{{url('about/')}}">About us</a></li>
                <li>
                    <a href="{{route('ph.gallery')}}">Gallery</a>
                </li>
			</ul>
		</div>
		<div class="footer-menu">
			{{--<p>News And Reviews</p>
			<ul>
				<li><a href="{{route('all.showroom')}}">Showroom</a></li>
				--}}{{--<li><a href="{{url('reviews/')}}">Review</a></li>--}}{{--
				<li>
					<a href="{{url('photo-gallery/')}}">Gallery</a>
				</li>
			</ul>--}}
		</div>

		<div class="footer-info">
			<p class="footer-msg">Social Media Contact </p>
			<ul class="footer-social">
				<li>
					<a rel="nofollow" target="_blank" href="{{$about->fb}}">
						<i class="fa fa-facebook"></i>
					</a>
				</li>

				<li>
					<a rel="nofollow" target="_blank" href="{{$about->yt}}">
						<i class="fa fa-youtube-play"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="{{$about->twitter}}">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="{{$about->linkedin}}">
						<i class="fa fa-linkedin"></i>
					</a>
				</li>
			</ul>
		</div>

	</div>
	<div class="copyright">
		<p class="cont" style="color: #868ca7">© Technology Partner SKODER LTD 2020</p>
	</div>
</footer>
