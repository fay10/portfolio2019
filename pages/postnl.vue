<template>
	<section class="portfolio-item">
		<div class="portfolio-item-container">
			<h3 class="portfolio-item-header">
				Portfolio Item Header
			</h3>
			<div class="portfolio-item-img">
				<img src="https://via.placeholder.com/800x566" />
			</div>
			<div class="portfolio-item-copy-container">
				<p class="portfolio-item-copy">
					Philosphy is considered a science but it is difficult to say, when one has to compare with an ordinary science, for
					example biology, or chemistry. This is a question that turns into a burning problem.
				</p>
				<a class="portfolio-item-link" href="#">Check it out</a>
			</div>
			<div class="portfolio-item-border"></div>
		</div>
	</section>
</template>

<script>
export default {};
</script>

<style lang="scss">
@import '~tools';

img {
	max-width: 100%;
	height: auto;
}

ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

/* Portfolio */

.portfolio-item {
	position: relative;
	overflow: hidden;
}

.portfolio-item-container {
	background-color: red;
	max-width: 1410px;
	margin: 0 auto;
}

.portfolio-item-copy-container {
	max-width: 403px;
}

.portfolio-item-img img {

	@media only screen and (min-width: 1224px) {
		max-width: 100%;
		width: 100%;
	}
}

/* Grid Layout Styles */
.portfolio-item-container {
	display: grid;
	grid-template-rows: 4.375em auto 2.5em auto 2.5em auto 5em; /* 70px auto 40px auto 40px auto 80px */
	grid-template-columns: 5% auto 4% 5%;

	@media only screen and (min-width: 768px) {
		grid-template-rows: 5.812em auto 2.375em auto 5em; /* 93px auto 38px auto 80px */
		grid-template-columns: 9.8% auto 5.2% auto 5%; /* 76px auto 40px auto 5vw; */
	}
	@media only screen and (min-width: 1224px) {
		grid-template-rows: 5.812em auto 2.375em auto 5em; /* 93px auto 38px auto 80px */
		grid-template-columns: 9.8% auto 5.2% auto 5%; /* 76px auto 40px auto 5vw; */
	}
}

.portfolio-item-header {
	grid-row: 2 / 3;
	grid-column: 2 / 3;

	@media only screen and (min-width: 768px) {
		grid-row: 2 / 3;
		grid-column: 2 / 3;
	}
	@media only screen and (min-width: 1224px) {
		grid-row: 2 / 3;
		grid-column: 2 / 3;
	}
}

.portfolio-item-img {
	grid-row: 4 / 5;
	grid-column: 2 / span 3;
	order: 2;

	@media only screen and (min-width: 768px) {
		grid-row: 2 / span 3;
		grid-column: 4 / span 2;
		order: 2;
	}
	@media only screen and (min-width: 1224px) {
		grid-row: 2 / span 3;
		grid-column: 4 / span 2;
		order: 2;
	}
}

.portfolio-item-copy-container {
	grid-row: 6 / 7;
	grid-column: 2 / 3;

	@media only screen and (min-width: 768px) {
		grid-row: 4 / 5;
		grid-column: 2 / 3;
	}
	@media only screen and (min-width: 1224px) {
		grid-row: 4 / 5;
		grid-column: 2 / 3;
	}
}

.portfolio-item-border {
	grid-row: 1 / -1;
	grid-column: 4 / -1;

	@media only screen and (min-width: 768px) {
		grid-row: 1 / -1;
		grid-column: 5 / -1;
	}
	@media only screen and (min-width: 1224px) {
		grid-row: 1 / -1;
		grid-column: 5 / -1;
	}
}
</style>
