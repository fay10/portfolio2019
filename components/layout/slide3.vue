<template>
	<div class="about row">
		<div class="about__left column small-24 medium-24 large-14">
			<div class="about__left--text">
				<h2>About me</h2>
				<p>
					My name is Fay Schouten and I am eighteen years old. I am currently studying at the Grafisch Lyceum Utrecht, to
					become a professional webdsigner. I am in my third year, one year until graduation. I am a very ambitous student and I always say yes to challenges.
					<a href="https://www.matise.nl/">my current internship is at Matise</a>
				</p>
				<div class="flex__row">
					<div class="flex__column">
						<p>HTML</p>
					</div>
					<div class="flex__column">
						<p>SCSS</p>
					</div>
					<div class="flex__column">
						<p>JS</p>
					</div>
				</div>
				<div class="flex__row">
					<div class="flex__column">
						<p>Vue</p>
					</div>
					<div class="flex__column">
						<p>Nuxt</p>
					</div>
					<div class="flex__column">
						<p>E-commerce</p>
					</div>
				</div>
				<div class="skills">
					<h3>skills</h3>
					<div class="flex__row">
						<div class="flex__column--icon" style="margin-left: 0;">
							<img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Sketch_Logo.svg" alt="sketch" />
						</div>

						<div class="flex__column--icon">
							<img src="https://cdn.worldvectorlogo.com/logos/adobe-xd.svg" alt="xd" />
						</div>

						<div class="flex__column--icon">
							<img src="https://cdn.worldvectorlogo.com/logos/photoshop-cc.svg" alt="photoshop" />
						</div>

						<div class="flex__column--icon">
							<img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Adobe_Illustrator_CC_icon.svg" alt="illustrator" />
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="about__right column small-24 medium-0 large-10">
			<div class="koifish-photo"></div>
			<div class="koifish-second"></div>
		</div>
	</div>
</template>

<script>
export default {};
</script>

<style lang="scss">
@import '~tools';

.about {
	font-family: 'Sniglet';
	min-height: 100vh;
	h2 {
		color: #f58a1a;
		font-weight: 13;
		letter-spacing: 12px;
		line-height: 85px;
	}
	h3 {
		color: #f58a1a;
		font-weight: 13;
		letter-spacing: 12px;
	}
	&__left {
		&--text {
			width: grid(12);
			margin-top: grid(1);
			margin-left: grid(3);

			@media #{$medium-down} {
				width: grid(10);
			}
			@media #{$small-only} {
				width: grid(20);
			}
			p {
				letter-spacing: 4px;
				font-size: 14px;
				font-family: 'raleway';
				color: white;
				line-height: 35px;
				margin-bottom: 2rem;
				@media (max-width: 1440px) {
					margin-top: 1rem;
					margin-bottom: 1rem;
				}
				@media #{$small-only} {
					font-size: 12px;
				}
			}
		}
	}
	&__right {
		.koifish-photo {
			background-image: url('~static/images/fay.png'), url('~static/images/koifish-bg.png');
			width: 100%;
			height: 100%;
			background-size: cover;
			background-repeat: no-repeat;

			@media (max-width: 1440px) {
				background-position: -220px;
			}
			@media #{$medium-down} {
				display: none;
			}
		}
		.koifish-second {
			background-image: url('~static/images/koifishbg-second.png');
			width: 100%;
			height: 100%;
			min-height: 1rem;
			background-size: cover;
			background-repeat: no-repeat;
			@media #{$medium-down} {
				display: block;
			}
		}
	}
}

.flex {
	&__row {
		display: flex;
		p {
			font-size: 16px;
		}
		@media #{$medium-down} {
			display: inline-block;
		}
	}
	&__column {
		min-width: 9rem;
		max-height: 5rem;
		display: flex;
		&--icon {
			margin-left: grid(1);
			@media #{$medium-down} {
				margin-left: 0;
			}
			@media #{$small-only} {
				display: inline-grid;
				margin-left: 2rem;
			}
			img {
				margin-top: 40px;
				width: 45px;
			}
		}
		@media (max-width: 1440px) {
			height: 2rem;
		}
	}
}

.skills {
	@media (max-width: 1440px) {
		margin-top: 3rem;
	}

	@media #{$medium-down} {
		margin-top: -29rem;
		margin-left: 30rem;
	}
	@media #{$small-only} {
		margin: 0 auto;
		padding-top: 2.5rem;
	}
}
</style>
