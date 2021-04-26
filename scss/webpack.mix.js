let mix = require('laravel-mix');

mix
	.sass('src/main.scss','css/')
	.setPublicPath('../')
	.disableSuccessNotifications();
	// .js('src/main.js','js/')
