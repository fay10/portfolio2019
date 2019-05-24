<template>
	<div>
		<div class="animate fadeIn container-slide1">
			<div class="container-slide1__homebg"></div>
			<h5>Portfolio</h5>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {};
	}
};
</script>

<style lang="scss">
@import '~tools';

.container-slide1 {
	font-family: 'Sniglet';
	h5 {
		color: white;
		letter-spacing: 28px;
		font-weight: 100;
		margin: -5rem 5rem 0 5.6rem;
		@media #{$large-down} {
			font-size: 22px;
		}
		@media (max-width: 1440px) {
			letter-spacing: 32px;
		}
		@media #{$small-only} {
			text-align: center;
			margin-top: -32px;
			letter-spacing: 24px;
		}
	}

	&__homebg {
		width: 42rem;
		height: 45rem;
		background-image: url('~static/images/portfoliohome.png');
		background-size: contain;
		justify-content: center;
		background-repeat: no-repeat;
		@media (max-width: 470px) {
			background-size: cover;
			width: auto;
			height: 548px;
		}
	}
}

.animate {
	-webkit-animation-duration: 6s;
	animation-duration: 6s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}

@-webkit-keyframes fadeIn {
	from {
		opacity: 0;
	}

	to {
		opacity: 1;
	}
}
@keyframes fadeIn {
	from {
		opacity: 0;
	}

	to {
		opacity: 1;
	}
}

.fadeIn {
	-webkit-animation-name: fadeIn;
	animation-name: fadeIn;
}
</style>
