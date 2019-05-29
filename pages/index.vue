<template>
	<div>
		<main>
			<section>
				<div v-swiper:mySwiper="swiperOptionsVertical" class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<slide1 />
						</div>
						<div class="swiper-slide">
							<slide2 />
						</div>
						<div class="swiper-slide">
							<slide3 />
						</div>
						<div class="swiper-slide">
							<slide4 />
						</div>
					</div>
					<div class="swiper-pagination">
						<span
							class="swiper-pagination-bullet swiper-pagination-bullet-active"
							tabindex="0"
							role="button"
							aria-label="Go to slide 1"
						></span>
						<div class="swiper-pagination__hide-nav">
							<span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
							<span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
							<span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
</template>

<script>
import slide1 from '~/components/layout/slide1';
import slide2 from '~/components/layout/slide2';
import slide3 from '~/components/layout/slide3';
import Slide4 from '~/components/layout/slide4';

export default {
	components: {
		slide1,
		slide2,
		slide3,
		Slide4
	},
	data() {
		return {
			swiperOptionsVertical: {
				pagination: {
					el: '.swiper-pagination',
					clickable: true
				},
				direction: 'vertical',
				mousewheel: true,
				preventClicks: true,
				// effect: 'fade',
				speed: 800,
				spaceBetween: 10
			},
			activeSlide: 1,
			slidesPerColumn: 1,
			slidesPerView: 'auto'
		};
	}
};
</script>

<style lang="scss">
@import '~tools';

.swiper-container {
	width: 100%;
	margin-left: auto;
	margin-right: auto;
	height: 100vh;
	overflow: hidden;
}
.swiper-slide {
	width: 100%;
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: color(blackBG);
}

.swiper-pagination {
	position: absolute;
	top: 10%;
	right: 5rem;
	z-index: 1000;
	opacity: 1;
	&__hide-nav {
		display: none;
	}
	&-bullet {
		width: 42px;
		height: 90px;
		background-image: url('~static/images/lantern.png');
		background-size: 40px;
		opacity: 0.5;
		margin-top: 20px;
		cursor: pointer;
		display: block;
		@media #{$small-only} {
			display: none;
		}

		&-active {
			background-image: url('~static/images/lantern.png');
			background-size: 40px;
			opacity: 1;
		}
	}
}
</style>
