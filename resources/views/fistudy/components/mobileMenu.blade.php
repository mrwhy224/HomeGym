<div class="mobile-nav__wrapper">
	<div class="mobile-nav__overlay mobile-nav__toggler"></div>
	<!-- /.mobile-nav__overlay -->
	<div class="mobile-nav__content">
		<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

		<div class="logo-box">
			<a href="{{ url('home') }}" aria-label="logo image"><img src="{{ asset('assets/images/favicons/logo.png') }}" width="105" alt="" /></a>
		</div>
		<!-- /.logo-box -->
		<div class="mobile-nav__container"></div>
		<!-- /.mobile-nav__container -->

		<ul class="mobile-nav__contact list-unstyled">
			<li>
				<i class="fa fa-envelope"></i>
				<a href="mailto:springofthenewdream@gmail.com">springofthenewdream@gmail.com </a>
			</li>
			<li>
				<i class="fas fa-phone"></i>
				<a href="tel:+96894787471">+968-94787471</a>
			</li>
		</ul><!-- /.mobile-nav__contact -->
		<div class="mobile-nav__top">
			<div class="mobile-nav__social">
				<a href="https://www.instagram.com/sep.fit94" class="fab fa-instagram"></a>
			</div><!-- /.mobile-nav__social -->
		</div><!-- /.mobile-nav__top -->

	</div>
	<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<style>
	/* --- اصلاحیه برای نمایش صحیح دراپ‌داون زبان در موبایل --- */

	/* هدف قرار دادن دراپ‌داون بوت‌استرپ فقط زمانی که داخل منوی موبایل است */
	.mobile-nav__content .dropdown-menu {
		position: static !important;       /* حذف حالت شناور */
		float: none !important;
		transform: none !important;        /* حذف پوزیشن‌دهی‌های احتمالی JS */
		background-color: transparent !important; /* حذف پس‌زمینه سفید */
		border: none !important;           /* حذف بوردر */
		box-shadow: none !important;       /* حذف سایه */
		width: 100% !important;
		padding: 0 !important;
		margin: 0 !important;
		display: none;                     /* مخفی بودن پیش‌فرض تا زمانی که JS بازش کند */
		min-width: auto !important;
	}

	/* استایل آیتم‌های داخل دراپ‌داون زبان */
	.mobile-nav__content .dropdown-menu li {
		border-bottom: 1px solid rgba(255, 255, 255, 0.1);
	}

	.mobile-nav__content .dropdown-menu li:last-child {
		border-bottom: none;
	}

	/* استایل لینک‌های داخل دراپ‌داون زبان */
	.mobile-nav__content .dropdown-menu li a {
		color: #ffffff !important;         /* رنگ متن سفید */
		padding-left: 20px !important;     /* کمی فاصله از چپ برای زیرمنو بودن */
		font-size: 14px;
		display: flex;
		align-items: center;
		justify-content: space-between;    /* برای تراز کردن آیکون تیک */
	}

	.mobile-nav__content .dropdown-menu li a:hover {
		background-color: transparent !important;
		color: var(--fistudy-primary) !important; /* استفاده از رنگ اصلی قالب در هاور */
	}

	/* آیکون تیک */
	.mobile-nav__content .dropdown-menu .icon-tick-mark {
		font-size: 12px;
	}
</style>
