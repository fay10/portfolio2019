<template>
	<div class="slider">
		<div class="typewriter">
			<h1>Chinese Hutton Garden</h1>
		</div>
		<h2 class="title">projects</h2>
		<input id="item1" type="radio" name="items" checked />
		<input id="item2" type="radio" name="items" />
		<input id="item3" type="radio" name="items" />
		<input id="item4" type="radio" name="items" />
		<input id="item5" type="radio" name="items" />

		<label for="item1"></label>
		<label for="item2"></label>
		<label for="item3"></label>
		<label for="item4"></label>
		<label for="item5"></label>

		<span class="item item_1">
			<a href="#" rel="noopener" target="blank">
				<p class="link">hello</p>
			</a>
		</span>

		<span class="item item_2">
			<a href="https://mail.matise.design/" rel="noopener" target="blank">
				<p class="link">hello</p>
			</a>
		</span>

		<span class="item item_3">
			<a href="https://fayschouten.myportfolio.com/my-work" rel="noopener" target="blank">
				<p class="link">hello</p>
			</a>
		</span>

		<span class="item item_4">
			<a href="https://fayschouten.myportfolio.com/worktwee" rel="noopener" target="blank">
				<p class="link">hello</p>
			</a>
		</span>

		<span class="item item_5">
			<a href="https://werkenbijkindergarden.nl/" rel="noopener" target="blank">
				<p class="link">hello</p>
			</a>
		</span>
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

.title {
	transform: rotate(90deg);
	font-size: 20px;
	color: white;
	letter-spacing: 50px;
	margin-left: -18rem;
}

.typewriter {
	margin-left: -22rem;
	@media #{$small-only} {
		display: none;
	}
	h1 {
		transform: rotate(90deg);
		font-size: 20px;
		color: #744949;
		font-family: monospace;
		overflow: hidden; /* Ensures the content is not revealed until the animation */
		white-space: nowrap; /* Keeps the content on a single line */
		margin: 0 auto; /* Gives that scrolling effect as the typing happens */
		letter-spacing: 0.15em; /* Adjust as needed */
		animation: typing 3.5s steps(30, end), blink-caret 0.5s step-end infinite;
	}
}

@keyframes typing {
	from {
		width: 0;
	}
	to {
		width: 100%;
	}
}

.animateSecond {
	-webkit-animation-duration: 12s;
	animation-duration: 12s;
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

.slider {
	display: flex;
	align-items: center;
	width: 500px;
	height: 300px;
}
.item {
	@media #{$small-only} {
		height: 400px !important; 
	}
	a{
		z-index: 99;
		position: absolute;
	}
	.link {
		width: 100%;
		min-width: 590px;
		height: 500px;
		border-radius: 540px;
		opacity: 0.1;
		@media #{$small-only} {
			width: 300px;
			height: 350px;
		}
	}
	width: 100%;
	max-width: 480px;
	height: 480px;
	border-radius: 480px;
	position: absolute;
	opacity: 0;
	background-size: cover;
	background-repeat: no-repeat;
	@media #{$small-only} {
		height: 500px;
	}
}
.item_1 {
	background-image: url('~static/images/portfolioprojects.png');
	background-size: contain;
	cursor: pointer;
}
.item_2 {
	background-image: url('~static/images/projects2.png');
	cursor: pointer;
	@media #{$small-only} {
		background-size: contain;
	}
}
.item_3 {
	background-image: url('~static/images/postnl.jpg');
	cursor: pointer;
}
.item_4 {
	background-image: url('~static/images/groepsfoto.jpg');
	background-size: cover;
	background-position: center;
	cursor: pointer;
}

.item_5 {
	background-image: url('~static/images/kindergarden.png');
	background-size: cover;
	cursor: pointer;
}

input[type='radio'],
label {
	position: relative;
	top: 18rem;
	left: 2.5rem;
}
input[type='radio'] {
	display: none;
}
label {
	display: inline-block;
	width: 12px;
	height: 12px;
	border-radius: 50%;
	margin-right: 20px;
	background: white;
	cursor: pointer;
	@media #{$small-only} {
		top: 14rem;
		left: -5rem;
		width: 8px;
		height: 8px;
		width: 15px;
		height: 15px;
	}
}
label:hover {
	background: #fcdcb1;
}

#item1:checked ~ .item_1,
#item2:checked ~ .item_2,
#item3:checked ~ .item_3,
#item4:checked ~ .item_4,
#item5:checked ~ .item_5 {
	/*   display: block; */
	opacity: 1;
}
</style>
