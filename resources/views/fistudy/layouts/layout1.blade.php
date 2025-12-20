<!DOCTYPE html>
<html lang="en">

<x-head css='{!! isset($css) ? $css : "" !!}'/>

<body <?php echo (isset($bodyClass) ? 'class="' . $bodyClass . ' custom-cursor"' : 'class="custom-cursor"'); ?>>
<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<div class="page-wrapper">
	<header class="main-header">
		<div class="main-menu__top">
			<div class="container">
				{{-- Content omitted --}}
			</div>
		</div>
		<x-menuList/>
	</header>

	@yield('content')


	<x-loader/>
	<x-scripts/>

	{{-- =========================================================== --}}
	{{-- LANGUAGE/COOKIE BANNER START --}}
	{{-- =========================================================== --}}
	<div id="cookie-consent-banner" class="cookie-banner">
		<div class="cookie-banner__content">
			<div class="cookie-banner__icon mx-2">
				{{-- تغییر آیکون به کره زمین برای تناسب با انتخاب زبان --}}
				<i class="fas fa-globe"></i>
			</div> <div class="cookie-banner__info">
				<h4>{{ __('layout.cookie.title') }}</h4>
				<p>
					{{ __('layout.cookie.message') }}
					<a href="{{ url('/privacy-policy') }}">{{ __('layout.cookie.policy_link') }}</a>.
				</p>
			</div>
		</div>

		{{-- بخش انتخاب زبان (جایگزین دکمه‌های قبلی) --}}
		<div class="cookie-banner__actions">
			@php
				$languages = [
					'en' => 'English',
					'fa' => 'فارسی',
					'ar' => 'العربية'
				];
			@endphp

			@foreach ($activeLocales as $name => $code)
				{{-- دکمه زبان --}}
				<a href="{{ route('index', $code) }}" class="btn thm-btn lang-select-btn {{ app()->getLocale() == $code ? 'active' : '' }}" data-lang="{{ $code }}">
					{{ $name }}
				</a>
			@endforeach
		</div>
	</div>

	<style>
		/* استایل‌های اختصاصی بنر */
		.cookie-banner {
			position: fixed;
			bottom: 30px;
			left: 30px;
			max-width: 500px; /* عرض کمی بیشتر برای دکمه‌های زبان */
			width: 90%;
			background-color: #ffffff;
			padding: 25px;
			border-radius: 15px;
			box-shadow: 0 10px 40px rgba(0,0,0,0.15);
			z-index: 999999;
			display: none;
			border-left: 5px solid var(--thm-primary, #d6d6d6);
			font-family: inherit;
			animation: cookieSlideIn 0.6s cubic-bezier(0.23, 1, 0.32, 1) forwards;
		}

		html[dir="rtl"] .cookie-banner {
			left: auto;
			right: 30px;
			border-left: none;
			border-right: 5px solid var(--thm-primary, #d6d6d6);
		}

		.cookie-banner__content {
			display: flex;
			align-items: flex-start;
			margin-bottom: 20px;
		}

		.cookie-banner__icon {
			font-size: 30px;
			color: var(--thm-primary, #d6d6d6);
			margin-right: 15px;
			flex-shrink: 0;
		}

		html[dir="rtl"] .cookie-banner__icon {
			margin-right: 0;
			margin-left: 15px;
		}

		.cookie-banner__info h4 {
			font-size: 18px;
			font-weight: 700;
			margin-bottom: 8px;
			color: #1f2230;
		}

		.cookie-banner__info p {
			font-size: 14px;
			color: #666;
			margin: 0;
			line-height: 1.6;
		}

		.cookie-banner__info a {
			color: var(--thm-primary, #d6d6d6);
			text-decoration: underline;
			font-weight: 600;
		}

		/* استایل بخش دکمه‌های زبان */
		.cookie-banner__actions {
			display: flex;
			gap: 10px;
			justify-content: flex-end;
			flex-wrap: wrap; /* برای موبایل */
		}

		.cookie-banner .thm-btn {
			padding: 8px 20px;
			font-size: 14px;
			border-radius: 8px;
			cursor: pointer;
			text-transform: uppercase;
			text-decoration: none;
			min-width: 80px;
			text-align: center;
		}

		/* استایل دکمه زبان غیرفعال (کمرنگ‌تر) */
		.cookie-banner .thm-btn:not(.active) {
			background-color: #f5f5f5;
			color: #333;
		}

		.cookie-banner .thm-btn:not(.active):hover {
			background-color: var(--thm-primary, #d6d6d6);
			color: #fff;
		}

		.cookie-banner .thm-btn:not(.active):before {
			display: none;
		}

		/* استایل دکمه زبان فعال */
		.cookie-banner .thm-btn.active {
			background-color: var(--thm-primary, #d6d6d6);
			color: #fff;
			cursor: default;
			opacity: 0.8;
		}

		/* --- اصلاحیه موبایل --- */
		@media (max-width: 576px) {
			.cookie-banner {
				left: 20px !important;
				right: 20px !important;
				width: auto !important; /* Unset width */
				transform: none !important; /* حذف وسط‌چین قبلی */
				bottom: 20px;
				padding: 20px;
				max-width: none; /* حذف محدودیت عرض برای پر کردن فضا */
			}

			/* بازنویسی استایل راست‌چین در موبایل */
			html[dir="rtl"] .cookie-banner {
				left: 20px !important;
				right: 20px !important;
				transform: none !important;
			}

			.cookie-banner__actions {
				justify-content: center; /* وسط‌چین در موبایل */
			}
			.cookie-banner .thm-btn {
				flex: 1; /* دکمه‌ها هم‌اندازه در موبایل */
			}
		}

		@keyframes cookieSlideIn {
			from {
				transform: translateY(100px);
				opacity: 0;
			}
			to {
				transform: translateY(0);
				opacity: 1;
			}
		}
	</style>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const cookieBanner = document.getElementById('cookie-consent-banner');
			const langButtons = document.querySelectorAll('.lang-select-btn');
			const localStorageKey = 'sepfit_cookie_consent';

			// بررسی اینکه آیا کاربر قبلاً پیامی را تایید کرده است یا خیر
			if (!localStorage.getItem(localStorageKey)) {
				setTimeout(() => {
					cookieBanner.style.display = 'block';
				}, 2000);
			}

			// با کلیک روی هر زبان، کوکی "تایید" ست می‌شود و صفحه ریلود می‌شود (توسط لینک)
			langButtons.forEach(btn => {
				btn.addEventListener('click', function() {
					localStorage.setItem(localStorageKey, 'accepted');
					// بنر محو می‌شود (گرچه صفحه رفرش خواهد شد)
					cookieBanner.style.opacity = '0';
				});
			});
		});
	</script>
{{-- =========================================================== --}}
{{-- LANGUAGE/COOKIE BANNER END --}}
{{-- =========================================================== --}}

</body>

</html>
