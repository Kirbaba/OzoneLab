﻿<!DOCTYPE html>
<html>
<head lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <!-- <svg version="1.1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="841.89px"
	 height="595.28px" viewBox="0 0 841.89 595.28" enable-background="new 0 0 841.89 595.28" xml:space="preserve">
	<switch> -->
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
	<header class="header">
		<div class="contain">
			<div class="header--logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="534.1" height="357" viewBox="0 0 534.1 357" enable-background="new 0 0 534.1 357" class="header--logo--img">
				 	<path fill-rule="evenodd" d="M66.4 37.2c-12-2.6-24.3 4.3-28.8-9.3 10.2 9.6 17.1 4 26.8 7.5-2.9-7.7-12.1-15.3-21.7-11 3.7.4 9.8.6 18 8.9-9.2-6.4-17.9-7.3-24-6.9 10.1-12.6 25.2-6 29.7 10.8" clip-rule="evenodd"/>
					<path d="M54.9 304.8c0 .4-.1.8-.4 1.4s-.6 1.1-1 1.5c-.1.1-.3.3-.6.7-.3.3-.6.7-1.1 1.2-.4.5-.9 1.1-1.4 1.7-.5.6-1.1 1.3-1.7 2 1.4.1 2.3.3 2.8.4.1.1.1.2.1.3 0 .2-.1.3-.3.3-.2-.1-.6-.1-1.2-.2-.6 0-1.3-.1-2.1-.1-.9 1.1-1.8 2.2-2.7 3.4-.9 1.1-1.6 2.2-2.3 3.1-.4.5-.7 1-1 1.6l-.9 1.5c-.3.5-.5.8-.7 1.2-.2.3-.3.5-.3.6l.1.1.6-.6c.3-.3.7-.6 1-.9.4-.3.7-.6 1.1-.9.3-.3.6-.5.8-.7.3 0 .5.2.5.5-.2.2-.5.4-.9.9-.4.4-.9.9-1.4 1.5-.5.5-1 1.1-1.4 1.6-.5.5-.8 1-1.1 1.4-.2.2-.4.5-.7.9-.3.3-.6.5-.9.5-.2 0-.5-.1-.7-.3-.3-.2-.4-.5-.4-.9 0-.5.2-1.1.6-2 .4-.9.9-1.9 1.6-3.1.7-1.2 1.5-2.4 2.4-3.8.9-1.4 1.9-2.8 3-4.3l1-1.4h-2c-1.7 0-3.5.1-5.2.4-1.8.3-3.5.6-5.2 1-.7 1-1.4 1.9-2.1 2.7-.6.8-1.2 1.5-1.6 2.2-.4.6-.9 1.3-1.6 2.1-.6.8-1.3 1.7-1.9 2.5-.7.9-1.3 1.8-2 2.6-.7.9-1.3 1.7-1.8 2.4s-1 1.3-1.3 1.7c-.3.5-.5.7-.5.8 0 .2 0 .4.1.6.1.2.1.5.1.7 0 .2-.3.5-.9 1.1-.6.6-1.2 1.2-2 1.9l-2.1 1.8c-.7.5-1.1.8-1.3.8-.5 0-.8-.2-1.2-.5-.3-.3-.5-.7-.5-1 0-.3.1-.5.4-.7.3-.2.5-.4.8-.8.1-.1.6-.7 1.5-1.9s2.1-2.7 3.6-4.6c1.4-1.9 3-3.9 4.8-6.2 1.7-2.3 3.4-4.6 5.1-7-1.9.5-3.6 1-5.1 1.4-1.4.4-2.5.6-3.2.6-.7 0-1.2-.1-1.5-.2-.3-.2-.4-.3-.4-.6 0-.5.3-.7 1-.7.3 0 .6 0 .8.1.2.1.5.1.9.1.1 0 .4-.1.9-.2s1.1-.3 1.9-.5c.8-.2 1.6-.4 2.6-.7 1-.3 2-.5 3.1-.8 1.1-1.5 2.1-3 3.1-4.5s1.8-2.8 2.5-4.1c.7-1.2 1.3-2.3 1.7-3.3.4-1 .6-1.7.6-2.2 0-.5-.2-.9-.7-1.1-.5-.2-1-.3-1.8-.3s-1.7.1-2.7.4c-1 .3-2 .6-3 1l-3 1.2c-1 .4-1.8.9-2.6 1.2-.8.4-1.4.7-1.8 1-.5.3-.7.4-.7.5v.6c0 .3-.1.5-.2.7-.1.1-.3.3-.8.7-.5.4-1 .7-1.6 1.2-.6.4-1.2.8-1.7 1.1-.5.3-.9.5-1 .5-.2 0-.3-.1-.5-.2s-.4-.3-.5-.5c-.2-.2-.3-.4-.5-.6-.1-.2-.2-.4-.2-.5 0-.2.3-.5 1-1.1.6-.5 1.5-1.2 2.6-1.9s2.3-1.5 3.7-2.3c1.4-.8 2.8-1.5 4.3-2.2 1.5-.6 3-1.2 4.4-1.6 1.4-.4 2.8-.7 4-.7 1.6 0 2.8.5 3.5 1.4.7.9 1.1 2.1 1.1 3.5 0 .8-.2 1.6-.5 2.5-.3.9-.7 1.8-1.2 2.8-.5 1-1 1.9-1.7 2.9-.6 1-1.2 1.9-1.9 2.9 1.5-.3 3-.6 4.5-.7 1.5-.2 2.9-.3 4.2-.3h1.8c.6 0 1.1 0 1.6.1.9-1.3 1.8-2.5 2.7-3.6.9-1.1 1.7-2.2 2.4-3.1.7-.9 1.3-1.6 1.9-2.1.5-.5.8-.8 1-.8.2 0 .4.1.6.4.7.2.8.5.8.9zm12.6 15.8c-.1.1-.3.3-.6.7-.3.4-.7.8-1.2 1.3-.4.5-.9.9-1.3 1.4l-1.1 1.1c-.3.3-.7.6-1.2 1-.4.4-.9.8-1.4 1.1-.5.4-.9.7-1.4.9-.5.3-.9.4-1.3.4-.5 0-.9-.3-1.2-.8-.2-.5-.4-1.2-.4-2 0-.4.1-.9.2-1.4.1-.6.2-.9.2-1v-.2c0-.1-.1-.1-.2-.1 0 0-.2.1-.5.4-.3.2-.6.5-1 .9-.4.3-.8.7-1.3 1.1-.5.4-.9.8-1.3 1.2-.4.4-.9.8-1.4 1.3-.6.5-1.1 1-1.7 1.4-.5.4-1 .8-1.5 1.1-.5.3-.8.5-1 .5-.3 0-.6-.2-.7-.5-.2-.4-.3-.8-.3-1.2 0-.8.2-1.6.5-2.6.4-1 .8-2 1.4-3.1s1.3-2.1 2-3.1c.8-1 1.6-1.9 2.4-2.7.8-.8 1.7-1.4 2.5-1.9s1.6-.7 2.4-.7c.6 0 1.1.2 1.5.5.4.3.6.8.6 1.5 0 .2-.1.4-.2.7-.1.3-.2.7-.4 1L58 320c-.2.4-.4.7-.6 1 .3-.1.5-.2.7-.2.4 0 .7.1.9.3.2.2.3.5.3.9 0 .3-.1.6-.2 1s-.3.8-.4 1.2c-.2.4-.3.8-.4 1.2-.1.4-.2.7-.2 1 0 .2 0 .5.1.6.1.2.2.3.5.3s.9-.3 1.6-.9c.8-.6 1.6-1.3 2.4-2.1l1.4-1.4 1.3-1.3 1-1c.3-.3.5-.5.6-.7.1 0 .2.1.3.2.4 0 .4.2.2.5zm-9-3.8c0-.3-.1-.4-.4-.4-.3 0-.8.2-1.4.6-.6.4-1.3 1-2 1.7-.8.7-1.5 1.5-2.3 2.3-.8.9-1.5 1.8-2.2 2.6-.9 1.1-1.6 2.2-2 3.1-.5.9-.7 1.6-.7 2.1 0 .3 0 .5.1.5s.4-.2.8-.5 1-.7 1.5-1.2l1.8-1.5c.6-.6 1.2-1.1 1.7-1.5.5-.5 1.1-1 1.6-1.4.5-.5 1-.9 1.4-1.3-.2-.1-.4-.1-.5-.2-.2-.1-.2-.2-.2-.2 0-.1.1-.1.2-.2l.4-.4c.1-.1.2-.3.5-.7.2-.4.5-.8.7-1.2.3-.4.5-.9.7-1.2.2-.6.3-.9.3-1z"/>
					<path d="M79.4 320.5c-.5.6-1.2 1.4-2.1 2.4-.9.9-1.8 1.9-2.9 2.9-.7.6-1.3 1.2-2 1.8-.7.6-1.4 1.1-2 1.5-.7.4-1.3.8-1.9 1-.6.3-1.2.4-1.7.4-1.1 0-2-.3-2.7-1-.7-.6-1-1.6-1-2.8 0-1.4.3-2.8 1-4.2.7-1.4 1.5-2.6 2.5-3.7s1.9-2 2.9-2.7c1-.7 1.8-1 2.4-1 .2 0 .5.1.8.3.3.2.6.5.8.8l.6.9c.2.3.2.6.2.7 0 .6-.2 1-.5 1.3-.4.3-.7.4-.9.4-.1 0-.1-.1-.1-.3 0-.1 0-.3.1-.5s.1-.4.1-.6v-.5c0-.1-.1-.2-.4-.2-.5 0-1.2.3-2 .9-.8.6-1.6 1.4-2.4 2.4-.8 1-1.4 2-2 3.2-.5 1.2-.8 2.3-.8 3.4 0 .6.1 1.1.4 1.4.3.3.7.5 1.2.5.4 0 .9-.1 1.4-.4.5-.2 1.1-.6 1.7-1s1.2-.9 1.9-1.4c.6-.5 1.3-1.1 1.9-1.7 1.1-1 2.1-2 3-3 .9-1 1.6-1.8 2-2.4.3 0 .4.1.5.4.2.4.2.6 0 .8z"/>
					<path d="M99.1 321.7c0 .5-.1 1.2-.2 2l-.6 2.4c-.2.8-.4 1.5-.6 2.1-.2.6-.2.9-.2.9 0 .2 0 .3.1.3s.2-.1.4-.2c.2-.2.4-.2.5-.2.1 0 .2.1.2.2v.3c0 .2-.1.4-.4.6-.3.2-.6.4-1 .6-.4.2-.8.4-1.2.5-.4.2-.7.2-.9.2-.6 0-.9-.5-.9-1.6 0-.5.1-1.2.3-1.9.2-.7.5-1.5.7-2.2.3-.7.5-1.5.7-2.2.2-.7.3-1.4.3-2 0-.4-.2-.6-.5-.6-.5 0-1.1.4-2.1 1.1-.9.8-1.9 1.7-2.9 2.7-.9.9-1.7 1.8-2.5 2.8-.8 1-1.4 1.9-1.8 2.7-.1.2-.3.2-.5.1s-.5-.2-.7-.4l-.6-.6c-.2-.2-.2-.5-.1-.6.1-.3.3-.7.7-1.3.3-.6.7-1.2 1-1.9l1.2-2.1c.4-.7.8-1.4 1.1-2 .3-.6.6-1.2.8-1.7.2-.5.3-.8.3-1 0-.4-.2-.6-.6-.6-.6 0-1.4.3-2.3.9-1 .6-2 1.4-3 2.2-1.1.9-2.2 1.9-3.2 2.9-1.1 1-2.1 2-2.9 2.9l-2.2 2.2c-.6.6-.9.9-1 .9-.1 0-.2 0-.3-.1-.2-.1-.3-.2-.5-.3-.2-.1-.4-.3-.5-.4-.2-.2-.2-.3-.2-.4s.1-.4.4-1c.3-.5.6-1.2 1.1-1.9.4-.8.9-1.5 1.4-2.4.5-.8 1-1.6 1.5-2.3.5-.7.9-1.3 1.3-1.7.4-.5.6-.7.8-.7.4 0 .8.1 1.2.2.4.1.6.3.6.5 0 .1-.1.2-.3.6-.2.3-.4.7-.7 1.2-.3.5-.6 1-1 1.5-.4.6-.7 1.1-1.1 1.6.8-.7 1.7-1.4 2.7-2.3 1-.8 2-1.6 3.1-2.4 1.1-.8 2.1-1.4 3.1-1.9s1.9-.8 2.7-.8c.5 0 1 .2 1.5.5s.7.8.7 1.4c0 .3-.1.8-.4 1.4-.2.6-.5 1.2-.8 1.9-.3.6-.6 1.3-1 1.8-.3.6-.6 1-.7 1.2.2-.2.6-.7 1.2-1.3.6-.6 1.3-1.3 2.1-2s1.6-1.3 2.5-1.8c.9-.5 1.7-.8 2.4-.8s1.1.2 1.4.5c.2.5.4 1 .4 1.8zm15.8-.7c.2.3.1.4-.2.4-.1 0-.2 0-.4.1-.2 0-.4.1-.6.1-.5.8-1.1 1.7-1.8 2.6-.8 1-1.6 1.8-2.5 2.6-.9.8-1.9 1.5-2.9 2.1-1 .6-2 .8-2.9.8-1 0-1.8-.2-2.4-.7-.6-.5-1-1.2-1-2.2 0-.6.2-1.2.5-2s.7-1.5 1.2-2.3c.5-.8 1.1-1.6 1.7-2.3.6-.8 1.2-1.4 1.9-2 .6-.6 1.2-1.1 1.8-1.4.6-.4 1.1-.5 1.5-.5.2 0 .3.1.4.2.1.1.2.2.3.4.1.1.2.3.2.4l.2.2c.2 0 .6-.1 1-.2.5-.1.9-.2 1.3-.2.6 0 1.1.2 1.5.7.5.4.7 1.2.7 2.2v.3c.1.2.2.5.2.7s.2-.1.3 0zm-2.1-2.9c0-.1-.2-.2-.5-.2-.6 0-1.3.2-2.1.5s-1.5.8-2.2 1.3c-.7.5-1.5 1.1-2.2 1.8s-1.3 1.4-1.9 2.1c-.5.7-1 1.4-1.3 2-.3.7-.5 1.2-.5 1.7 0 .8.4 1.3 1.3 1.3.4 0 .9-.2 1.5-.5s1.2-.7 1.9-1.2c.6-.5 1.3-1 1.9-1.6l1.8-1.8c.5-.6 1-1.1 1.3-1.6.3-.5.5-.8.5-1.1-.1-.1-.1-.2-.2-.3-.1-.1-.2-.4-.2-.8 0-.5.1-.9.4-1.2.3-.1.5-.3.5-.4zm14.7 4.4c-.5.2-1 .4-1.5.5-.3.4-.7.9-1 1.4-.7.9-1.5 1.8-2.4 2.6-.9.8-1.9 1.6-3.1 2.2-1.2.6-2.5 1-4.1 1.1-.8 0-1.4-.3-1.8-.8-.4-.5-.5-1.1-.5-1.8 0-.6.2-1.3.7-1.8.4-.6 1-.9 1.7-.9.2-.1.5 0 .7 0 .2.1.3.3.4.8v.2c-.3 1.1-.3 1.8-.2 2.1.1.3.4.5.7.4.8-.1 1.7-.3 2.6-.8.9-.5 1.8-1.1 2.6-1.8s1.6-1.5 2.3-2.4l.3-.4c-.8 0-1.4 0-2-.2-.6-.2-1.2-.5-1.6-1-.4-.5-.7-1-.8-1.6-.2-1.3 0-2.3.6-3.2.6-.9 1.3-1.5 2.2-1.9.9-.4 1.8-.6 2.7-.6.9 0 1.7.3 2.2.9.5.5.8 1.4.7 2.4-.1 1.1-.7 2.4-1.8 4 .3-.1.7-.3 1.1-.5.9-.5 1.5-.8 1.9-.8.4-.1.5.2.4.8-.3.4-.6.8-1.1 1.4-.4.6-.8 1.2-1.2 1.9-.4.7-.6 1.3-.8 1.9-.2.6-.1 1.2.2 1.6.4-.1 1-.5 1.7-1 .7-.6 1.5-1.2 2.2-1.9.8-.7 1.5-1.3 2.1-2 .7-.6 1.1-1.1 1.4-1.4h.3c.1.1.1.3 0 .6-.5.5-1.2 1.2-1.9 2s-1.5 1.6-2.3 2.3c-.8.8-1.6 1.4-2.4 2-.8.6-1.6 1-2.4 1.2-.6.2-1 .2-1.3 0-.3-.2-.4-.5-.5-1 0-.4.1-1 .2-1.6s.4-1.2.7-1.9c.3-.6.6-1.2 1-1.8s.8-.8 1.1-1.2zm-3.6-.8c.5.3 1 .4 1.7.5.3-.4.5-.8.7-1.2.5-.9.8-1.8 1-2.6.2-.8.1-1.5-.1-2.1-.7-.8-1.4-1.1-2-1.1-.6 0-1.2.3-1.6.8-.5.5-.8 1-1 1.7-.2.7-.3 1.3-.2 1.7.1.3.3.7.5 1.2s.5.8 1 1.1z"/>
					<path d="M155.2 328.4c0 .1.1.2.1.4.1.1.2.2.3.2.3 0 .6-.1.9-.3.3-.2.7-.5 1.2-1 .3-.2.5-.3.5-.3h.2l.2-.2c.3.3.4.7.3 1.4-.1.6-.5 1.6-1.1 2.8h1.4c.2 0 .2.1.3.1.4 0 .6.2.6.5s-.3.4-.8.4c-.1 0-.2-.1-.3-.1-.2 0-.4 0-.6-.1-.2 0-.4-.1-.6-.1h-.4c-.5 1.2-1.1 2.2-1.9 3.2-.7 1-1.5 1.8-2.3 2.5-.8.7-1.6 1.2-2.4 1.7-.8.4-1.5.7-2.1.7-.5.1-1-.1-1.5-.3-.4-.3-.7-.8-.7-1.6-.1-.9.2-1.8.7-2.6.5-.8 1.2-1.5 2.1-2.1.9-.6 1.9-1.1 3.1-1.4 1.1-.4 2.3-.6 3.5-.7.3-.6.5-1 .7-1.3.1-.3.3-.7.5-1.2-.5.3-.9.6-1.4 1-.5.4-1 .5-1.6.5-.4 0-.7-.1-1-.4-.3-.2-.5-.7-.5-1.4 0-.5 0-.9.1-1.5.1-.5.1-1 .2-1.5s.2-.9.2-1.3c.1-.4.2-.6.2-.7l-.1-.1-.7.7-1.4 1.4c-.6.5-1.2 1.1-1.9 1.7-.7.6-1.3 1.2-2 1.7-.6.5-1.3.9-1.8 1.3-.6.3-1 .5-1.4.5-.2 0-.5-.1-.8-.2-.3-.1-.6-.3-.8-.5l-.6-.6c-.2-.2-.2-.5-.2-.7 0-.7.1-1.5.4-2.3.3-.9.7-1.9 1.2-3-.1.1-.3.3-.6.7-.4.4-.8.8-1.3 1.4l-1.7 1.7c-.6.6-1.3 1.2-1.9 1.7-.6.5-1.2.9-1.7 1.3-.5.3-1 .5-1.3.5-.2 0-.5-.1-.8-.2-.3-.1-.6-.3-.8-.5l-.6-.6c-.2-.2-.2-.5-.2-.7 0-.7.2-1.6.6-2.8.4-1.2.8-2.3 1.3-3.5.3-.6.6-1.2 1-1.8.3-.6.7-1.1 1-1.5s.6-.8.9-1c.3-.3.6-.4.8-.4.1 0 .2.1.3.2.1.1.3.2.4.4.1.2.2.3.3.5.1.2.1.3.1.4v.2c-.2.3-.6.9-1 1.6-.4.7-.8 1.5-1.2 2.3-.4.8-.8 1.6-1.1 2.4-.3.8-.5 1.4-.5 1.8 0 .2 0 .4.1.7.1.2.2.3.5.3.2 0 .4-.1.8-.3.3-.2.7-.4 1.2-.7.4-.3.9-.7 1.4-1.1.5-.4 1-.9 1.5-1.3l2.2-2.2c.6-.7 1.2-1.4 1.6-1.9.6-1.3 1.1-2.1 1.5-2.5.4-.4.8-.6 1.3-.6.1 0 .2.1.3.2.1.1.3.2.4.4.1.2.2.3.3.5.1.2.1.3.1.4v.2c-.2.3-.6.9-1 1.6-.4.7-.8 1.5-1.2 2.3-.4.8-.8 1.6-1.1 2.4-.3.8-.5 1.4-.5 1.8 0 .2 0 .4.1.7.1.2.2.3.5.3.2 0 .4-.1.8-.3.3-.2.7-.4 1.2-.7.4-.3.9-.7 1.4-1.1s1-.9 1.5-1.3c.8-.8 1.5-1.5 2.2-2.3.6-.8 1.2-1.4 1.6-1.8.2-.2.3-.3.5-.4.1-.1.2-.2.3-.2.4 0 .7.2 1 .7.3.5.4 1 .4 1.4 0 .4-.1.8-.2 1.2-.2.4-.3.9-.5 1.4-.2.5-.3 1-.4 1.5.2.5.2.9.2 1.4zm.6 4c-.9.1-1.9.4-2.8.9-.9.4-1.8 1-2.5 1.6-.7.6-1.3 1.3-1.7 1.9-.4.7-.5 1.4-.4 2 0 .2.1.3.2.4.1.1.3.2.6.1.3 0 .8-.2 1.3-.6.5-.4 1.1-.9 1.6-1.4.6-.6 1.1-1.3 1.7-2 .6-.7 1.1-1.5 1.5-2.3.1-.2.1-.3.2-.3s.2-.2.3-.3zm25.9-11.8c-.1.1-.3.3-.6.7-.3.4-.7.8-1.2 1.3-.4.5-.9.9-1.3 1.4l-1.1 1.1c-.3.3-.7.6-1.2 1-.4.4-.9.8-1.4 1.1-.5.4-.9.7-1.4.9-.5.3-.9.4-1.3.4-.5 0-.9-.3-1.2-.8-.2-.5-.4-1.2-.4-2 0-.4.1-.9.2-1.4.1-.6.2-.9.2-1v-.2c0-.1-.1-.1-.2-.1 0 0-.2.1-.5.4-.3.2-.6.5-1 .9-.4.3-.8.7-1.3 1.1-.5.4-.9.8-1.3 1.2-.4.4-.9.8-1.4 1.3-.6.5-1.1 1-1.7 1.4-.5.4-1 .8-1.5 1.1-.5.3-.8.5-1 .5-.3 0-.6-.2-.7-.5-.2-.4-.3-.8-.3-1.2 0-.8.2-1.6.5-2.6.4-1 .8-2 1.4-3.1s1.3-2.1 2-3.1c.8-1 1.6-1.9 2.4-2.7.8-.8 1.7-1.4 2.5-1.9s1.6-.7 2.4-.7c.6 0 1.1.2 1.5.5.4.3.6.8.6 1.5 0 .2-.1.4-.2.7-.1.3-.2.7-.4 1l-.6 1.2c-.2.4-.4.7-.6 1 .3-.1.5-.2.7-.2.4 0 .7.1.9.3.2.2.3.5.3.9 0 .3-.1.6-.2 1s-.3.8-.4 1.2-.3.8-.4 1.2c-.1.4-.2.7-.2 1 0 .2 0 .5.1.6.1.2.2.3.5.3s.9-.3 1.6-.9c.8-.6 1.6-1.3 2.4-2.1l1.4-1.4 1.3-1.3 1-1c.3-.3.5-.5.6-.7.1 0 .2.1.3.2.4 0 .3.2.2.5zm-9-3.8c0-.3-.1-.4-.4-.4-.3 0-.8.2-1.4.6-.6.4-1.3 1-2 1.7-.8.7-1.5 1.5-2.3 2.3-.8.9-1.5 1.8-2.2 2.6-.9 1.1-1.6 2.2-2 3.1-.5.9-.7 1.6-.7 2.1 0 .3 0 .5.1.5s.4-.2.8-.5 1-.7 1.5-1.2l1.8-1.5c.6-.6 1.2-1.1 1.7-1.5.5-.5 1.1-1 1.6-1.4.5-.5 1-.9 1.4-1.3-.2-.1-.4-.1-.5-.2-.2-.1-.2-.2-.2-.2 0-.1.1-.1.2-.2l.4-.4c.1-.1.2-.3.5-.7.2-.4.5-.8.7-1.2.3-.4.5-.9.7-1.2.2-.6.3-.9.3-1z"/>
					<path d="M190.5 322.5c-.5.2-1 .4-1.5.5-.3.4-.7.9-1 1.4-.7.9-1.5 1.8-2.4 2.6-.9.8-1.9 1.6-3.1 2.2-1.2.6-2.5 1-4.1 1.1-.8 0-1.4-.3-1.8-.8-.4-.5-.5-1.1-.5-1.8 0-.6.2-1.3.7-1.8.4-.6 1-.9 1.7-.9.2-.1.5 0 .7 0 .2.1.3.3.4.8v.2c-.3 1.1-.3 1.8-.2 2.1.1.3.4.5.7.4.8-.1 1.7-.3 2.6-.8.9-.5 1.8-1.1 2.6-1.8s1.6-1.5 2.3-2.4l.3-.4c-.8 0-1.4 0-2-.2-.6-.2-1.2-.5-1.6-1-.4-.5-.7-1-.8-1.6-.2-1.3 0-2.3.6-3.2.6-.9 1.3-1.5 2.2-1.9.9-.4 1.8-.6 2.7-.6.9 0 1.7.3 2.2.9.5.5.8 1.4.7 2.4-.1 1.1-.7 2.4-1.8 4 .3-.1.7-.3 1.1-.5.9-.5 1.5-.8 1.9-.8s.5.2.4.8c-.3.4-.6.8-1.1 1.4-.4.6-.8 1.2-1.2 1.9-.4.7-.6 1.3-.8 1.9-.2.6-.1 1.2.2 1.6.4-.1 1-.5 1.7-1 .7-.6 1.5-1.2 2.2-1.9s1.5-1.3 2.1-2c.7-.6 1.1-1.1 1.4-1.4h.3c.1.1.1.3 0 .6-.5.5-1.2 1.2-1.9 2s-1.5 1.6-2.3 2.3c-.8.8-1.6 1.4-2.4 2-.8.6-1.6 1-2.4 1.2-.6.2-1 .2-1.3 0-.3-.2-.4-.5-.5-1 0-.4.1-1 .2-1.6.2-.6.4-1.2.7-1.9.3-.6.6-1.2 1-1.8s.7-.8 1.1-1.2zm-3.7-.8c.5.3 1 .4 1.7.5.3-.4.5-.8.7-1.2.5-.9.8-1.8 1-2.6.2-.8.1-1.5-.1-2.1-.7-.8-1.4-1.1-2-1.1-.6 0-1.2.3-1.6.8-.5.5-.8 1-1 1.7-.2.7-.3 1.3-.2 1.7.1.3.3.7.5 1.2s.6.8 1 1.1zm50.3-24.5c0 1.1-.3 2.1-.8 3.1s-1.2 2-1.9 3c-.8.9-1.6 1.8-2.5 2.7-.9.8-1.7 1.5-2.4 2.2-1.9 1.6-4 3-6.2 4.1s-4.5 2.2-6.7 3.2c-.7.9-1.4 1.9-2 2.8-.7.9-1.3 1.9-2 2.8.3-.3.8-.7 1.5-1.3.7-.6 1.5-1.1 2.4-1.7.9-.5 1.8-1 2.6-1.4.9-.4 1.7-.6 2.3-.6.4 0 .7.1 1 .4.3.2.6.5.9.9.2.4.4.7.6 1.1.1.4.2.7.2 1 0 .5-.3 1-.8 1.4-.5.5-1.2.9-2 1.3s-1.8.8-2.9 1.1c-1.1.3-2.2.6-3.3.8.1.1.2.2.3.2.5.3.8.7 1.1 1.3.3.5.6 1.1 1 1.6s.8 1 1.3 1.4c.5.4 1.3.6 2.2.6.2 0 .4-.1.7-.2.3-.1.5-.2.7-.4.2-.2.5-.3.7-.5l.5-.5c.2.1.2.2.2.3v.2c-.2.2-.5.5-.8.9l-1 1c-.4.3-.8.6-1.2.8-.4.2-.9.3-1.3.3-.8 0-1.4-.2-1.8-.7-.4-.5-.8-1-1.1-1.7-.3-.6-.6-1.3-.9-2-.3-.7-.7-1.3-1.2-1.8-.2-.2-.5-.3-.9-.5-.6.1-1.3.2-1.9.2-.6.1-1.2.1-1.7.1-.7 1.1-1.4 2.1-2.1 3.2-.7 1.1-1.3 2.2-1.9 3.3-.3 0-.5-.1-.6-.3-.2-.2-.2-.4-.2-.7 0-.3.2-.7.5-1.4s.6-1.4 1-2.1l1.2-2.1c.4-.7.6-1.1.8-1.4.5-.8 1.1-1.8 1.9-3.1.8-1.3 1.7-2.6 2.7-4.1s2.1-3 3.2-4.7l3.6-4.8c1.3-1.6 2.5-3.1 3.8-4.5 1.3-1.4 2.6-2.7 3.9-3.7 1.3-1.1 2.5-1.9 3.7-2.6 1.2-.6 2.3-.9 3.3-.9.2 0 .5.1.7.2.3.1.5.3.7.6.2.2.4.5.6.8.2.3.3.6.3.8zm-14.9 22.6c0-.8-.5-1.3-1.4-1.3-.4 0-1.1.2-2.1.6-1 .4-1.9.9-3 1.5-1 .6-2 1.1-2.9 1.6-.9.5-1.5.9-1.8 1.1.7 0 1.7-.1 3-.4 1.3-.2 2.5-.5 3.7-.9 1.2-.4 2.2-.7 3.1-1.2s1.4-.6 1.4-1zm-10.2 4.1h-.6.6zm23.7-26c0-.5-.3-.8-.8-.8s-1.2.2-1.9.6c-.7.4-1.5.9-2.4 1.6-.8.7-1.7 1.4-2.6 2.3s-1.8 1.8-2.6 2.7L223 307c-.8.9-1.5 1.8-2.2 2.6-.7.8-1.3 1.6-1.8 2.3-.5.7-1 1.3-1.3 1.8 2.1-.9 4-1.9 6-2.9 1.9-1.1 3.7-2.4 5.5-3.8.5-.5 1.2-1 2-1.8.8-.7 1.5-1.5 2.2-2.3.7-.8 1.3-1.7 1.8-2.6.3-.9.5-1.7.5-2.4z"/>
					<path d="M235.9 318.5c.5-.8.9-1.3 1.3-1.7.4-.4.8-.7 1.1-.8.3-.1.7-.2 1-.2.3 0 .7 0 1.1.1.3 0 .5.1.7.3.2.1.1.4 0 .9-.2.6-.6 1.3-1.2 2.1s-1.3 1.7-2.1 2.7c-.7 1-1.4 2-2 3.1-.6 1.1-1 2.2-1 3.3-.1.3.1.5.5.6.3-.1.8-.4 1.4-.8l1.8-1.5c.6-.5 1.1-1.1 1.7-1.6l1.1-1.1h.3s.1.2 0 .5c-.4.5-.9 1-1.5 1.6l-1.8 1.8s-1.3 1.1-1.9 1.6c-.7.5-1.3.8-1.9 1-.5.2-.9.1-1.2-.1-.3-.2-.4-.7-.4-1.4-.1-.8.1-1.7.4-2.7.3-1 .7-1.9 1.1-2.8.4-.9.8-1.6 1.2-2.3.4-.7.6-1.1.7-1.2-.3.3-.7.8-1.1 1.4-.4.6-.8 1.3-1.3 2.1s-1 1.5-1.6 2.4c-.6.8-1.2 1.6-1.9 2.2-.7.7-1.4 1.3-2.2 1.7-.8.5-1.6.7-2.5.8-.8 0-1.3-.2-1.7-.6-.4-.4-.6-.9-.6-1.4s.1-1 .4-1.4c.3-.5.7-.7 1.4-.7.2 0 .4 0 .6.1.2.1.4.3.5.6v.2c-.2.8-.1 1.4.1 1.6.2.2.5.4.8.4.8 0 1.5-.4 2.3-1 .8-.7 1.5-1.5 2.3-2.6.8-1 1.5-2.2 2.3-3.4s1.1-2.7 1.8-3.8z"/>
					<path d="M258.7 320.5c-.4.4-1 1.1-1.8 2-.8.9-1.9 2-3.3 3.2l-2.1 1.8c-.7.6-1.4 1.1-2.2 1.5-.7.4-1.4.8-2.2 1-.7.3-1.4.4-2 .4-1.1 0-2-.3-2.7-1-.7-.6-1-1.6-1-2.8 0-1.4.3-2.8 1-4.2.7-1.4 1.5-2.6 2.5-3.7s1.9-2 2.9-2.7c1-.7 1.8-1 2.4-1 .4 0 .8.1 1.1.4.3.3.6.5.8.7.3.2.6.4 1 .6.4.2.6.6.6 1 0 .5-.3 1.1-1 1.7-.7.6-1.5 1.2-2.4 1.7-.9.5-1.9 1-2.9 1.4-1 .4-1.9.7-2.6.9-.3.6-.6 1.3-.8 1.9-.2.6-.3 1.2-.3 1.8 0 .6.1 1.1.4 1.4.3.3.7.5 1.2.5s1-.1 1.6-.3c.6-.2 1.2-.5 1.8-.9.6-.4 1.3-.8 1.9-1.3.6-.5 1.3-1 1.9-1.5 1.2-1 2.3-2.1 3.3-3.1 1-1.1 1.8-1.9 2.3-2.6.3 0 .4.1.5.4.3.4.3.6.1.8zm-6.5-2.4c0-.2-.1-.4-.2-.5-.1-.1-.4-.2-.9-.2-.3 0-.6.1-1 .3s-.8.5-1.2.9c-.4.4-.9.8-1.3 1.3s-.9 1.1-1.2 1.6c.6-.1 1.2-.3 1.9-.7.7-.3 1.3-.7 1.9-1 .6-.4 1.1-.7 1.5-1 .3-.3.5-.5.5-.7z"/>
					<path d="M278.4 321.7c0 .5-.1 1.2-.3 2l-.6 2.4c-.2.8-.4 1.5-.6 2.1-.2.6-.2.9-.2.9 0 .2 0 .3.1.3s.2-.1.4-.2c.2-.2.4-.2.5-.2.1 0 .2.1.2.2v.3c0 .2-.1.4-.4.6-.3.2-.6.4-1 .6-.4.2-.8.4-1.2.5-.4.2-.7.2-.9.2-.6 0-.9-.5-.9-1.6 0-.5.1-1.2.3-1.9.2-.7.5-1.5.7-2.2.3-.7.5-1.5.7-2.2.2-.7.3-1.4.3-2 0-.4-.2-.6-.5-.6-.5 0-1.1.4-2.1 1.1-.9.8-1.9 1.7-2.9 2.7-.9.9-1.7 1.8-2.5 2.8-.8 1-1.4 1.9-1.8 2.7-.1.2-.3.2-.5.1s-.5-.2-.7-.4l-.6-.6c-.2-.2-.2-.5-.1-.6.1-.3.3-.7.7-1.3.3-.6.7-1.2 1-1.9l1.2-2.1c.4-.7.8-1.4 1.1-2 .3-.6.6-1.2.8-1.7.2-.5.3-.8.3-1 0-.4-.2-.6-.6-.6-.6 0-1.4.3-2.3.9-1 .6-2 1.4-3 2.2-1.1.9-2.2 1.9-3.2 2.9-1.1 1-2.1 2-2.9 2.9l-2.2 2.2c-.6.6-.9.9-1 .9-.1 0-.2 0-.3-.1-.2-.1-.3-.2-.5-.3-.2-.1-.4-.3-.5-.4-.2-.2-.2-.3-.2-.4s.1-.4.4-1c.3-.5.6-1.2 1.1-1.9.4-.8.9-1.5 1.4-2.4.5-.8 1-1.6 1.5-2.3.5-.7.9-1.3 1.3-1.7.4-.5.6-.7.8-.7.4 0 .8.1 1.2.2.4.1.6.3.6.5 0 .1-.1.2-.3.6-.2.3-.4.7-.7 1.2-.3.5-.6 1-1 1.5-.4.6-.7 1.1-1.1 1.6.8-.7 1.7-1.4 2.7-2.3 1-.8 2-1.6 3.1-2.4 1.1-.8 2.1-1.4 3.1-1.9s1.9-.8 2.7-.8c.5 0 1 .2 1.5.5s.7.8.7 1.4c0 .3-.1.8-.4 1.4-.2.6-.5 1.2-.8 1.9-.3.6-.6 1.3-1 1.8s-.6 1-.7 1.2c.2-.2.6-.7 1.2-1.3.6-.6 1.3-1.3 2.1-2s1.6-1.3 2.5-1.8c.9-.5 1.7-.8 2.4-.8s1.1.2 1.4.5c.4.5.5 1 .5 1.8zm15.8-.7c.2.3.1.4-.2.4-.1 0-.2 0-.4.1-.2 0-.4.1-.6.1-.5.8-1.1 1.7-1.8 2.6-.8 1-1.6 1.8-2.5 2.6-.9.8-1.9 1.5-2.9 2.1-1 .6-2 .8-2.9.8-1 0-1.8-.2-2.4-.7-.6-.5-1-1.2-1-2.2 0-.6.2-1.2.5-2s.7-1.5 1.2-2.3c.5-.8 1.1-1.6 1.7-2.3.6-.8 1.2-1.4 1.9-2 .6-.6 1.2-1.1 1.8-1.4.6-.4 1.1-.5 1.5-.5.2 0 .3.1.4.2.1.1.2.2.3.4.1.1.2.3.3.4l.2.2c.2 0 .6-.1 1-.2.5-.1.9-.2 1.3-.2.6 0 1.1.2 1.5.7.5.4.7 1.2.7 2.2v.3c.1.2.2.5.3.7 0-.2 0-.1.1 0zm-2.1-2.9c0-.1-.2-.2-.5-.2-.6 0-1.3.2-2.1.5s-1.5.8-2.2 1.3c-.7.5-1.5 1.1-2.2 1.8-.7.7-1.3 1.4-1.9 2.1-.5.7-1 1.4-1.3 2-.3.7-.5 1.2-.5 1.7 0 .8.4 1.3 1.3 1.3.4 0 .9-.2 1.5-.5s1.2-.7 1.9-1.2c.6-.5 1.3-1 1.9-1.6l1.8-1.8c.5-.6.9-1.1 1.3-1.6.3-.5.5-.8.5-1.1-.1-.1-.1-.2-.3-.3-.1-.1-.2-.4-.2-.8 0-.5.1-.9.4-1.2.5-.1.6-.3.6-.4zm16.3 5.8c-.1.2-.5.6-1.1 1.3-.7.7-1.6 1.6-2.7 2.5-.8.7-1.7 1.4-2.7 1.9-.9.5-1.8.8-2.6.8-.5 0-1-.2-1.4-.5-.4-.3-.7-.9-.7-1.6 0-.6.3-1.2.7-2 .5-.8 1-1.5 1.6-2.2.6-.7 1.1-1.4 1.6-2 .5-.6.7-1.1.7-1.4 0-.2-.2-.3-.7-.3-.4 0-.8 0-1.3.1s-1 .1-1.7.1-1.2-.1-1.6-.4c-.4-.3-.6-.7-.6-1.2 0-.3.2-.8.6-1.4.4-.6.8-1.2 1.4-1.7.5-.6 1.1-1 1.7-1.5.6-.4 1.1-.6 1.6-.6.9 0 1.4.3 1.4.8 0 .2-.2.5-.5 1s-.7 1-1.2 1.5c-.4.5-.8.9-1.1 1.3-.3.4-.5.6-.5.7 0 .1.2.2.5.3h1.3c.8 0 1.6.2 2.1.5.6.3.9.9.9 1.7 0 .5-.2 1-.7 1.7-.5.7-1 1.4-1.6 2.1-.6.7-1.1 1.3-1.6 1.9-.5.6-.7 1-.7 1.3 0 .4.2.6.5.6.4 0 .9-.2 1.7-.5.7-.4 1.5-.9 2.4-1.6.5-.4.9-.8 1.4-1.2.5-.4.9-.8 1.3-1.2.4-.4.8-.7 1-1l.6-.6c.2 0 .2.1.2.3-.1.2-.1.3-.2.5z"/>
					<path d="M322.4 326.1l-.8.8c-.3.3-.6.5-1 .8-.3.3-.6.5-.9.6-.5.3-1.1.6-1.7 1-.7.4-1.4.6-2.1.6-.5 0-.9-.1-1.2-.4-.4-.2-.6-.7-.7-1.4-.1-.6 0-1.3.3-2.1l.9-2.4.1-.2c-.2 0-.4-.1-.6-.1-.6-.1-1.2-.1-1.9-.1h-2.7c-.5.8-1 1.6-1.4 2.4-.7 1.1-1.2 2.1-1.7 2.9-.5.8-.8 1.4-1 1.8-.1 0-.2 0-.4-.1l-.6-.3c-.2-.1-.4-.3-.6-.4-.2-.2-.3-.3-.3-.4 0-.1.2-.5.6-1.3.4-.8 1-1.7 1.6-2.7.3-.5.6-.9.9-1.4h-.2c-.7.1-1.1.1-1.4 0-.6-.2-.9-.5-.8-1 0-.5.2-.7.5-.5.2.1.3.1.4.2.1.1.2.2.4.2.1.1.5 0 1.3-.1.3-.1.6-.1.9-.1.2-.3.3-.5.5-.8.8-1.2 1.6-2.3 2.3-3.4.7-1 1.4-1.9 1.9-2.6.5-.7.9-1 1-1 .2 0 .5.1.7.3.2.2.3.4.4.6 0 0-.2.4-.6 1-.4.6-.9 1.5-1.5 2.5l-1.9 3h2.2c.6 0 1.1.1 1.6.1.5.1.8.1 1.1.2.2-.3.4-.6.5-1 .3-.6.5-.9.6-1 .3-.3.4-.7.3-1 0-.1 0-.3.1-.6.1-.2.2-.5.4-.7l.6-.6c.2-.2.5-.2.8-.2.4 0 .7.1 1 .3.3.2.4.4.5.6v1.1c0 .5-.1.8-.3 1-.1.1-.3.3-.5.6s-.5.7-.8 1.1l-.9 1.2c-.3.4-.5.8-.7 1-.4.6-.8 1.2-1.1 1.8-.3.6-.5 1.1-.4 1.5 0 .1.1.2.2.4.1.1.2.2.4.2.4 0 .9-.1 1.5-.4.6-.3 1.2-.6 1.8-1 .6-.4 1.1-.8 1.6-1.2.5-.4.9-.7 1.1-.9.2 0 .4.2.5.5l-.8 1.1z"/>
					<path d="M342.9 320.6c-.1.1-.3.3-.6.7-.3.4-.7.8-1.2 1.3-.4.5-.9.9-1.3 1.4l-1.1 1.1c-.3.3-.7.6-1.2 1-.4.4-.9.8-1.4 1.1-.5.4-.9.7-1.4.9-.5.3-.9.4-1.3.4-.5 0-.9-.3-1.2-.8s-.4-1.2-.4-2c0-.4 0-.9.2-1.4.1-.6.2-.9.3-1v-.2c0-.1-.1-.1-.2-.1 0 0-.2.1-.5.4-.3.2-.6.5-1 .9-.4.3-.8.7-1.3 1.1-.5.4-.9.8-1.3 1.2-.4.4-.9.8-1.4 1.3-.6.5-1.1 1-1.7 1.4-.5.4-1 .8-1.5 1.1-.5.3-.8.5-1 .5-.3 0-.5-.2-.7-.5-.2-.4-.3-.8-.3-1.2 0-.8.2-1.6.5-2.6.4-1 .8-2 1.4-3.1s1.3-2.1 2-3.1c.8-1 1.6-1.9 2.4-2.7.8-.8 1.7-1.4 2.5-1.9s1.6-.7 2.4-.7c.6 0 1.1.2 1.5.5.4.3.6.8.6 1.5 0 .2-.1.4-.2.7-.1.3-.2.7-.4 1l-.6 1.2c-.2.4-.4.7-.6 1 .3-.1.5-.2.7-.2.4 0 .7.1.9.3.2.2.3.5.3.9 0 .3-.1.6-.2 1s-.3.8-.4 1.2c-.2.4-.3.8-.4 1.2-.1.4-.2.7-.2 1 0 .2 0 .5.1.6.1.2.2.3.5.3s.9-.3 1.6-.9c.8-.6 1.6-1.3 2.4-2.1l1.4-1.4 1.3-1.3 1-1c.3-.3.5-.5.6-.7.1 0 .2.1.3.2.3 0 .3.2.1.5zm-9-3.8c0-.3-.1-.4-.4-.4-.3 0-.8.2-1.4.6-.6.4-1.3 1-2 1.7l-2.3 2.3c-.8.9-1.5 1.8-2.2 2.6-.9 1.1-1.6 2.2-2 3.1-.5.9-.7 1.6-.7 2.1 0 .3 0 .5.1.5s.4-.2.8-.5 1-.7 1.5-1.2l1.8-1.5c.6-.6 1.2-1.1 1.7-1.5.5-.5 1.1-1 1.6-1.4.5-.5 1-.9 1.4-1.3-.2-.1-.4-.1-.5-.2-.2-.1-.2-.2-.2-.2 0-.1.1-.1.2-.2l.4-.4c.1-.1.2-.3.5-.7.2-.4.5-.8.7-1.2.3-.4.5-.9.7-1.2.2-.6.3-.9.3-1z"/>
					<path d="M351.7 322.5c-.5.2-1 .4-1.5.5-.3.4-.7.9-1 1.4-.7.9-1.5 1.8-2.4 2.6-.9.8-1.9 1.6-3.1 2.2-1.2.6-2.5 1-4.1 1.1-.8 0-1.4-.3-1.8-.8-.4-.5-.5-1.1-.5-1.8 0-.6.2-1.3.7-1.8.4-.6 1-.9 1.7-.9.2-.1.5 0 .7 0 .2.1.3.3.4.8v.2c-.3 1.1-.3 1.8-.2 2.1.1.3.4.5.7.4.8-.1 1.7-.3 2.6-.8.9-.5 1.8-1.1 2.6-1.8s1.6-1.5 2.3-2.4l.3-.4c-.8 0-1.4 0-2-.2-.6-.2-1.2-.5-1.6-1-.4-.5-.7-1-.8-1.6-.2-1.3 0-2.3.6-3.2s1.3-1.5 2.2-1.9c.9-.4 1.8-.6 2.7-.6.9 0 1.7.3 2.2.9s.8 1.4.7 2.4c-.1 1.1-.7 2.4-1.8 4 .3-.1.7-.3 1.1-.5.9-.5 1.5-.8 1.9-.8.4-.1.5.2.4.8-.3.4-.6.8-1.1 1.4-.4.6-.8 1.2-1.2 1.9-.4.7-.6 1.3-.8 1.9-.2.6-.1 1.2.2 1.6.4-.1 1-.5 1.7-1 .7-.6 1.5-1.2 2.2-1.9.8-.7 1.5-1.3 2.1-2 .7-.6 1.1-1.1 1.4-1.4h.3c.1.1.1.3 0 .6-.5.5-1.2 1.2-1.9 2s-1.5 1.6-2.3 2.3c-.8.8-1.6 1.4-2.4 2-.8.6-1.6 1-2.4 1.2-.6.2-1 .2-1.3 0-.3-.2-.4-.5-.5-1 0-.4 0-1 .2-1.6s.4-1.2.7-1.9c.3-.6.6-1.2 1-1.8.4-.3.8-.8 1.1-1.2zm-3.6-.8c.5.3 1 .4 1.7.5.3-.4.5-.8.7-1.2.5-.9.8-1.8 1-2.6.2-.8.1-1.5-.1-2.1-.7-.8-1.4-1.1-2-1.1-.6 0-1.2.3-1.6.8s-.8 1-1 1.7c-.2.7-.3 1.3-.2 1.7.1.3.3.7.5 1.2s.5.8 1 1.1zm50.2-24.5c0 1.1-.3 2.1-.8 3.1s-1.2 2-1.9 3c-.8.9-1.6 1.8-2.5 2.7-.9.8-1.7 1.5-2.4 2.2-1.9 1.6-4 3-6.2 4.1s-4.5 2.2-6.7 3.2c-.7.9-1.4 1.9-2 2.8-.7.9-1.3 1.9-2 2.8.3-.3.8-.7 1.5-1.3.7-.6 1.5-1.1 2.4-1.7.9-.5 1.8-1 2.6-1.4s1.7-.6 2.3-.6c.4 0 .7.1 1 .4.3.2.6.5.9.9.2.4.4.7.6 1.1.1.4.2.7.2 1 0 .5-.3 1-.8 1.4-.5.5-1.2.9-2 1.3s-1.8.8-2.9 1.1c-1.1.3-2.2.6-3.3.8.1.1.2.2.3.2.5.3.8.7 1.1 1.3.3.5.6 1.1.9 1.6.4.5.8 1 1.3 1.4.5.4 1.3.6 2.2.6.2 0 .4-.1.7-.2.3-.1.5-.2.7-.4.2-.2.5-.3.7-.5l.5-.5c.1.1.2.2.2.3v.2c-.2.2-.5.5-.8.9l-1 1c-.4.3-.8.6-1.2.8-.4.2-.9.3-1.3.3-.8 0-1.4-.2-1.8-.7-.4-.5-.8-1-1.1-1.7-.3-.6-.6-1.3-.9-2-.3-.7-.7-1.3-1.2-1.8-.2-.2-.5-.3-.9-.5-.6.1-1.3.2-1.9.2-.6.1-1.2.1-1.7.1-.7 1.1-1.4 2.1-2.1 3.2-.7 1.1-1.3 2.2-1.9 3.3-.3 0-.5-.1-.6-.3-.1-.2-.2-.4-.2-.7 0-.3.1-.7.5-1.4.3-.7.6-1.4 1-2.1l1.2-2.1c.4-.7.6-1.1.8-1.4.5-.8 1.1-1.8 1.9-3.1.8-1.3 1.7-2.6 2.7-4.1 1-1.5 2.1-3 3.2-4.7l3.6-4.8s2.5-3.1 3.8-4.5c1.3-1.4 2.6-2.7 3.9-3.7 1.3-1.1 2.5-1.9 3.7-2.6 1.2-.6 2.3-.9 3.3-.9.2 0 .5.1.7.2.3.1.5.3.7.6.2.2.4.5.6.8.3.3.4.6.4.8zm-14.9 22.6c0-.8-.5-1.3-1.4-1.3-.4 0-1.1.2-2.1.6-1 .4-1.9.9-3 1.5-1 .6-2 1.1-2.9 1.6-.9.5-1.5.9-1.8 1.1.7 0 1.7-.1 3-.4 1.3-.2 2.5-.5 3.7-.9 1.2-.4 2.2-.7 3.1-1.2.9-.2 1.4-.6 1.4-1zm-10.2 4.1h-.6.6zm23.7-26c0-.5-.3-.8-.8-.8s-1.2.2-1.9.6c-.7.4-1.5.9-2.4 1.6-.8.7-1.7 1.4-2.6 2.3-.9.9-1.8 1.8-2.6 2.7l-2.4 2.7c-.8.9-1.5 1.8-2.2 2.6-.7.8-1.3 1.6-1.8 2.3-.5.7-1 1.3-1.3 1.8 2.1-.9 4-1.9 6-2.9 1.9-1.1 3.7-2.4 5.5-3.8.5-.5 1.2-1 2-1.8.8-.7 1.5-1.5 2.2-2.3.7-.8 1.3-1.7 1.8-2.6.3-.9.5-1.7.5-2.4z"/>
					<path d="M399.5 321c.2.3.1.4-.2.4-.1 0-.2 0-.4.1-.2 0-.4.1-.6.1-.5.8-1.1 1.7-1.8 2.6-.8 1-1.6 1.8-2.5 2.6-.9.8-1.9 1.5-2.9 2.1-1 .6-2 .8-2.9.8-1 0-1.8-.2-2.4-.7-.6-.5-1-1.2-1-2.2 0-.6.2-1.2.5-2s.7-1.5 1.2-2.3c.5-.8 1.1-1.6 1.7-2.3.6-.8 1.2-1.4 1.9-2 .6-.6 1.2-1.1 1.8-1.4s1.1-.5 1.5-.5c.2 0 .3.1.4.2.1.1.2.2.3.4.1.1.2.3.3.4l.2.2c.2 0 .6-.1 1-.2.5-.1.9-.2 1.3-.2.6 0 1.1.2 1.5.7.5.4.7 1.2.7 2.2v.3c.1.2.2.5.3.7 0-.2.1-.1.1 0zm-2-2.9c0-.1-.2-.2-.5-.2-.6 0-1.3.2-2.1.5s-1.5.8-2.2 1.3c-.7.5-1.5 1.1-2.2 1.8-.7.7-1.3 1.4-1.9 2.1-.5.7-1 1.4-1.3 2-.3.7-.5 1.2-.5 1.7 0 .8.4 1.3 1.3 1.3.4 0 .9-.2 1.5-.5s1.2-.7 1.9-1.2c.6-.5 1.3-1 1.9-1.6l1.8-1.8c.5-.6 1-1.1 1.3-1.6.3-.5.5-.8.5-1.1-.1-.1-.1-.2-.3-.3-.1-.1-.2-.4-.2-.8 0-.5.1-.9.4-1.2.4-.1.6-.3.6-.4zm17.8 2.4c-.5.6-1.2 1.4-2.1 2.4-.9.9-1.8 1.9-2.9 2.9-.7.6-1.3 1.2-2 1.8-.7.6-1.4 1.1-2 1.5-.7.4-1.3.8-1.9 1-.6.3-1.2.4-1.7.4-1.1 0-2-.3-2.7-1-.7-.6-1-1.6-1-2.8 0-1.4.3-2.8 1-4.2.7-1.4 1.5-2.6 2.5-3.7s1.9-2 2.9-2.7c1-.7 1.8-1 2.4-1 .2 0 .5.1.8.3.3.2.5.5.8.8l.6.9c.2.3.2.6.2.7 0 .6-.2 1-.5 1.3-.4.3-.7.4-.9.4-.1 0-.1-.1-.1-.3 0-.1 0-.3.1-.5s.1-.4.1-.6v-.5c0-.1-.1-.2-.4-.2-.5 0-1.2.3-2 .9-.8.6-1.6 1.4-2.4 2.4-.8 1-1.4 2-2 3.2-.5 1.2-.8 2.3-.8 3.4 0 .6.1 1.1.4 1.4.3.3.7.5 1.2.5.4 0 .9-.1 1.4-.4.5-.2 1.1-.6 1.7-1 .6-.4 1.2-.9 1.9-1.4s1.3-1.1 1.9-1.7c1.1-1 2.1-2 3-3 .9-1 1.6-1.8 2-2.4.3 0 .4.1.5.4.1.4.1.6 0 .8zm7.8-3.5c-.4.6-.6 1.4-.8 2.4s-.2 2-.3 3.1-.2 2.1-.3 3.1v.3c1.4-1.4 2.5-2.7 3.4-3.8 1.1-1.4 1.9-2.6 2.6-3.5.7-1 1.3-1.7 1.8-2.2.5-.5 1.1-.7 1.8-.6.3 0 .6.1.8.3.2.1.3.4.1.8-.2.5-.6 1.2-1.2 2.1-.6.8-1.2 1.8-1.9 2.8-.7 1-1.3 2-1.9 3.1s-.9 2.2-1 3.2c-.1.2-.1.3 0 .4.1.1.3.2.5.2.3-.1.8-.4 1.4-.9l1.8-1.5c.6-.6 1.2-1.1 1.8-1.6.6-.5 1-.9 1.2-1.1h.3c.1.1.1.2 0 .5l-1.6 1.6-1.9 1.9c-.7.6-1.3 1.2-2 1.7s-1.4.9-2 1.1c-.5.2-.9.1-1.2 0-.3-.2-.4-.6-.3-1.4 0-.5.1-1.1.3-1.7.2-.6.4-1.3.7-2 .3-.7.6-1.3.9-1.9l.8-1.6c.2-.3.3-.6.4-.8-.4.6-.8 1.2-1.4 1.8-.7.8-1.3 1.5-2 2.3-.7.7-1.3 1.4-1.9 2-.3.3-.5.6-.7.8l-.2.4c-.2.5-.4.7-.7.5-.2-.1-.3-.3-.1-.7.2-1.1.2-2.2.1-3.1-.1-.8-.2-1.5-.3-2.2-.1.1-.1.2-.2.3-.4.8-.9 1.7-1.5 2.5-.6.9-1.2 1.7-1.9 2.4s-1.4 1.4-2.2 1.9c-.8.5-1.6.8-2.5.9-.8.1-1.4-.1-1.7-.5-.3-.5-.5-1-.5-1.6s.2-1.2.5-1.7.7-.8 1.3-.9h.6c.2 0 .3.2.4.6v.2c-.1.4-.2.8-.1 1.1 0 .3.1.5.2.7s.3.3.4.4c.2.1.3.1.5.1.7-.1 1.4-.4 2-.9.6-.5 1.2-1.2 1.9-2.1.6-.9 1.3-2 1.9-3.2.2-.4.5-.9.7-1.4-.1-.5-.2-1-.2-1.5-.1-.8-.1-1.5 0-2.1.2-1 .5-1.6.8-1.9.3-.3.8-.5 1.4-.4.2 0 .3 0 .5.1s.4.2.5.4c.1.2.2.3.3.5.1-.1.1.1-.1.3zm27.2 3.5c-.4.4-.9 1.1-1.8 2-.8.9-1.9 2-3.3 3.2l-2.1 1.8c-.7.6-1.4 1.1-2.2 1.5-.7.4-1.4.8-2.2 1-.7.3-1.4.4-2 .4-1.1 0-2-.3-2.7-1s-1-1.6-1-2.8c0-1.4.3-2.8 1-4.2.7-1.4 1.5-2.6 2.5-3.7s1.9-2 2.9-2.7c1-.7 1.8-1 2.4-1 .4 0 .8.1 1.1.4.3.3.6.5.8.7.3.2.6.4 1 .6.4.2.6.6.6 1 0 .5-.3 1.1-1 1.7-.7.6-1.5 1.2-2.4 1.7s-1.9 1-2.9 1.4-1.9.7-2.6.9c-.3.6-.6 1.3-.8 1.9-.2.6-.3 1.2-.3 1.8 0 .6.1 1.1.4 1.4.3.3.7.5 1.2.5s1-.1 1.6-.3c.6-.2 1.2-.5 1.8-.9.6-.4 1.3-.8 1.9-1.3.6-.5 1.3-1 1.9-1.5 1.2-1 2.3-2.1 3.3-3.1 1-1.1 1.8-1.9 2.3-2.6.3 0 .4.1.5.4.2.4.2.6.1.8zm-6.6-2.4c0-.2-.1-.4-.2-.5-.1-.1-.4-.2-.9-.2-.3 0-.6.1-1 .3-.4.2-.8.5-1.2.9-.4.4-.9.8-1.3 1.3s-.9 1.1-1.2 1.6c.6-.1 1.2-.3 1.9-.7.7-.3 1.3-.7 1.9-1 .6-.4 1.1-.7 1.5-1 .3-.3.5-.5.5-.7z"/>
					<path d="M469.9 321.7c0 .5-.1 1.2-.3 2l-.6 2.4c-.2.8-.4 1.5-.6 2.1-.2.6-.2.9-.2.9 0 .2 0 .3.1.3s.2-.1.4-.2c.2-.2.4-.2.5-.2.1 0 .2.1.2.2v.3c0 .2-.1.4-.4.6-.3.2-.6.4-1 .6-.4.2-.8.4-1.2.5-.4.2-.7.2-.9.2-.6 0-.9-.5-.9-1.6 0-.5.1-1.2.3-1.9.2-.7.5-1.5.7-2.2.3-.7.5-1.5.7-2.2.2-.7.3-1.4.3-2 0-.4-.2-.6-.5-.6-.5 0-1.1.4-2.1 1.1-.9.8-1.9 1.7-2.9 2.7-.9.9-1.7 1.8-2.5 2.8-.8 1-1.4 1.9-1.8 2.7-.1.2-.3.2-.5.1s-.5-.2-.7-.4l-.6-.6c-.2-.2-.2-.5-.1-.6.1-.3.3-.7.7-1.3.3-.6.7-1.2 1-1.9l1.2-2.1c.4-.7.8-1.4 1.1-2 .3-.6.6-1.2.8-1.7s.3-.8.3-1c0-.4-.2-.6-.6-.6-.6 0-1.4.3-2.3.9-1 .6-2 1.4-3 2.2-1.1.9-2.2 1.9-3.2 2.9-1.1 1-2.1 2-2.9 2.9l-2.2 2.2-.9.9s-.2 0-.3-.1c-.2-.1-.3-.2-.5-.3-.2-.1-.4-.3-.5-.4-.1-.2-.2-.3-.2-.4s.1-.4.4-1c.3-.5.6-1.2 1.1-1.9.4-.8.9-1.5 1.4-2.4.5-.8 1-1.6 1.5-2.3.5-.7.9-1.3 1.3-1.7.4-.5.6-.7.8-.7.4 0 .8.1 1.2.2.4.1.6.3.6.5 0 .1-.1.2-.3.6-.2.3-.4.7-.7 1.2-.3.5-.6 1-1 1.5-.4.6-.7 1.1-1.1 1.6.8-.7 1.7-1.4 2.7-2.3 1-.8 2-1.6 3.1-2.4 1.1-.8 2.1-1.4 3.1-1.9s1.9-.8 2.7-.8c.5 0 1 .2 1.5.5s.7.8.7 1.4c0 .3-.1.8-.4 1.4-.2.6-.5 1.2-.8 1.9-.3.6-.6 1.3-1 1.8-.3.6-.6 1-.7 1.2.2-.2.6-.7 1.2-1.3.6-.6 1.3-1.3 2.1-2s1.6-1.3 2.5-1.8c.9-.5 1.7-.8 2.4-.8s1.1.2 1.4.5c.3.5.4 1 .4 1.8zm17 6s-.1.2-.4.4c-.1.1-.2.2-.3.4-.2.2-.3.5-.5.7l-.6.6c-.2.2-.4.3-.6.3-.5 0-1-.3-1.4-.9-.4-.6-.6-1.3-.6-2.2 0-.9.1-1.6.3-2.1.2-.5.4-.9.5-1.1l-.1-.1-.7.7-1.4 1.4c-.6.5-1.2 1.1-1.9 1.7-.7.6-1.3 1.2-2 1.7-.6.5-1.3.9-1.8 1.3-.6.3-1 .5-1.4.5-.2 0-.5-.1-.8-.2-.3-.1-.5-.3-.8-.5l-.6-.6c-.2-.2-.2-.5-.2-.7 0-.7.2-1.6.6-2.8.4-1.2.8-2.3 1.3-3.5.3-.6.6-1.2 1-1.8.3-.6.7-1.1 1-1.5.3-.4.6-.8.9-1 .3-.3.6-.4.8-.4.2 0 .5.2.7.6.3.4.4.7.4.9v.2c-.2.3-.6.9-1 1.6-.4.7-.8 1.5-1.2 2.3-.4.8-.8 1.6-1.1 2.4-.3.8-.5 1.4-.5 1.8 0 .2 0 .4.1.7.1.2.2.3.5.3.2 0 .4-.1.8-.3.3-.2.7-.4 1.2-.7.4-.3.9-.7 1.4-1.1.5-.4 1-.9 1.5-1.3.8-.8 1.5-1.5 2.2-2.3.6-.8 1.2-1.4 1.6-1.8.2-.2.3-.3.5-.4.1-.1.2-.2.3-.2.4 0 .7.2 1 .7.3.5.4 1 .4 1.4 0 .7-.1 1.4-.4 2-.3.6-.4 1.3-.4 2 0 .4.2.6.6.7.4.1.7.1.9.1.2 0 .2 0 .2.1zm31.2-30.5c0 1.1-.3 2.1-.8 3.1s-1.2 2-1.9 3c-.8.9-1.6 1.8-2.5 2.7-.9.8-1.7 1.5-2.4 2.2-1.9 1.6-4 3-6.2 4.1s-4.5 2.2-6.7 3.2c-.7.9-1.4 1.9-2 2.8-.7.9-1.3 1.9-2 2.8.3-.3.8-.7 1.5-1.3.7-.6 1.5-1.1 2.4-1.7.9-.5 1.8-1 2.6-1.4.9-.4 1.7-.6 2.3-.6.4 0 .7.1 1 .4.3.2.6.5.9.9.2.4.4.7.6 1.1.1.4.2.7.2 1 0 .5-.3 1-.8 1.4-.5.5-1.2.9-2 1.3s-1.8.8-2.9 1.1c-1.1.3-2.2.6-3.3.8.1.1.2.2.3.2.5.3.8.7 1.1 1.3.3.5.6 1.1 1 1.6s.8 1 1.3 1.4c.5.4 1.3.6 2.2.6.2 0 .4-.1.7-.2.3-.1.5-.2.7-.4.2-.2.5-.3.7-.5l.5-.5c.2.1.2.2.2.3v.2c-.2.2-.5.5-.8.9l-1 1c-.4.3-.8.6-1.2.8-.4.2-.9.3-1.3.3-.8 0-1.4-.2-1.8-.7-.4-.5-.8-1-1.1-1.7-.3-.6-.6-1.3-.9-2-.3-.7-.7-1.3-1.2-1.8-.2-.2-.5-.3-.9-.5-.6.1-1.3.2-1.9.2-.6.1-1.2.1-1.7.1-.7 1.1-1.4 2.1-2.1 3.2-.7 1.1-1.3 2.2-1.9 3.3-.3 0-.5-.1-.6-.3-.2-.2-.2-.4-.2-.7 0-.3.1-.7.5-1.4.3-.7.6-1.4 1-2.1l1.2-2.1c.4-.7.6-1.1.8-1.4.5-.8 1.1-1.8 1.9-3.1.8-1.3 1.7-2.6 2.7-4.1s2.1-3 3.2-4.7 2.4-3.2 3.6-4.8 2.5-3.1 3.8-4.5c1.3-1.4 2.6-2.7 3.9-3.7 1.3-1.1 2.5-1.9 3.7-2.6s2.3-.9 3.3-.9c.2 0 .5.1.7.2.3.1.5.3.7.6.2.2.4.5.6.8.2.3.3.6.3.8zm-14.9 22.6c0-.8-.5-1.3-1.4-1.3-.4 0-1.1.2-2.1.6-1 .4-1.9.9-3 1.5-1 .6-2 1.1-2.9 1.6-.9.5-1.5.9-1.8 1.1.7 0 1.7-.1 3-.4 1.3-.2 2.5-.5 3.7-.9 1.2-.4 2.2-.7 3.1-1.2 1-.2 1.4-.6 1.4-1zm-10.1 4.1h-.6.6zm23.7-26c0-.5-.3-.8-.8-.8s-1.2.2-1.9.6c-.7.4-1.5.9-2.4 1.6-.8.7-1.7 1.4-2.6 2.3-.9.9-1.8 1.8-2.6 2.7l-2.4 2.7c-.8.9-1.5 1.8-2.2 2.6-.7.8-1.3 1.6-1.8 2.3-.5.7-1 1.3-1.3 1.8 2.1-.9 4-1.9 6-2.9 1.9-1.1 3.7-2.4 5.5-3.8.5-.5 1.2-1 2-1.8.8-.7 1.5-1.5 2.2-2.3.7-.8 1.3-1.7 1.8-2.6.2-.9.5-1.7.5-2.4z"/>
					<path d="M522.1 323.3l-.8.8c-.8.8-1.6 1.5-2.4 2.1-.8.6-1.3.9-1.6.9-.2 0-.4-.1-.5-.3-.1-.2-.1-.4-.1-.6 0-.3.1-.6.2-1s.3-.8.4-1.2c.2-.4.3-.8.4-1.2.1-.4.2-.7.2-1 0-.4-.1-.7-.3-.9-.2-.2-.5-.3-.9-.3-.2 0-.4.1-.7.2.2-.3.4-.6.6-1l.6-1.2c.2-.4.3-.7.4-1 .1-.3.2-.6.2-.7 0-.7-.2-1.2-.6-1.5-.4-.3-.9-.5-1.5-.5-.7 0-1.5.3-2.4.7-.8.5-1.7 1.1-2.5 1.9-.8.8-1.6 1.7-2.4 2.7-.8 1-1.4 2-2 3.1-.6 1.1-1.1 2.1-1.4 3.1-.4 1-.5 1.9-.5 2.6 0 .5.1.9.3 1.2.2.4.4.5.7.5.2 0 .5-.2 1-.5s1-.7 1.5-1.1c.5-.4 1.1-.9 1.7-1.4.6-.5 1-.9 1.4-1.3.4-.4.8-.7 1.3-1.2.5-.4.9-.8 1.3-1.1.4-.3.8-.6 1-.9.3-.2.4-.4.5-.4.1 0 .1 0 .2.1 0 .1.1.1 0 .2s-.1.5-.3 1c-.1.6-.2 1.1-.2 1.4 0 .8.1 1.4.4 2 .2.5.6.8 1.2.8.4 0 .8-.1 1.3-.4.5-.3 1-.6 1.4-.9.5-.4.9-.7 1.4-1.1.4-.4.8-.7 1.2-1l.8-.8c-.3-.1-.4-.4-.5-.8zM515 320c-.2.4-.4.6-.5.7-.1.2-.2.3-.4.4l-.2.2c0 .1.1.1.2.2.2.1.3.2.5.2-.5.4-.9.8-1.4 1.3-.5.5-1 1-1.6 1.4-.5.5-1.1 1-1.7 1.5-.6.6-1.2 1.1-1.8 1.5-.6.5-1.1.9-1.5 1.2-.4.3-.7.5-.8.5-.1 0-.1-.1-.1-.5 0-.5.2-1.2.7-2.1.5-.9 1.2-1.9 2-3.1.7-.9 1.4-1.8 2.2-2.6.8-.9 1.6-1.7 2.3-2.3.8-.7 1.4-1.2 2-1.7.6-.4 1.1-.6 1.4-.6.3 0 .4.1.4.4 0 .1-.1.4-.3.8-.2.4-.4.8-.7 1.2-.2.6-.5 1.1-.7 1.4zM55.9 40.7c.8 2.8 1.2 5.8 1.2 9.1 0 6.4-1.5 11.7-4.5 16-3.4 4.9-8.1 7.3-14.3 7.3-6 0-10.8-2.5-14.2-7.4-3-4.3-4.5-9.6-4.5-15.9 0-6.3 1.5-11.7 4.5-16 3.4-4.9 8.2-7.5 14.3-7.5 0 0 2.9-1.1 4-1.8-.8-.1-2-1-4.1-1-8.4 0-15 3-19.9 9.1-4.1 5.1-6.2 10.8-6.2 17.1 0 6.3 2.1 12 6.2 17.1 5 6.2 11.6 9.2 20 9.2s15.1-3 20-9.1c4.1-5.1 6.2-10.8 6.2-17.1 0-3.1-.5-6.1-1.5-8.9-1.2-.7-4.1-2.4-7.2-.2zm14.8 12.5v-6.1h22.6v1.5L76.4 73.1h9.3c2.6 0 4.5-.3 5.4-1 .4-.3.9-1.1 1.3-2.1l.4-1h1.9v6.5H69.3v-2l16.3-24h-7c-3.9 0-5.9 1.2-6 3.7h-1.9zm41.2-6.6c3.1 0 6 1 8.7 2.9 3.8 2.7 5.7 6.7 5.7 11.8 0 4.2-1.3 7.7-4 10.5S116.2 76 112 76c-4.3 0-7.7-1.4-10.4-4.2-2.6-2.8-4-6.3-4-10.5 0-5.1 1.9-9 5.7-11.8 2.6-1.9 5.5-2.9 8.6-2.9zm0 27.1c5.1 0 7.7-4.1 7.7-12.3S117 49 111.9 49s-7.7 4.1-7.7 12.3 2.5 12.4 7.7 12.4zm26.7-26.6v3.7c2.9-2.8 6.2-4.2 9.8-4.2 5 0 7.6 3 7.6 9.1v13.9c0 1 .3 1.9 1 2.5.6.8 1.3 1.2 2.3 1.2v2.1h-11.8v-2.1c2.2-.1 3.2-1.4 3.2-3.7v-14c0-4-1.5-6-4.6-6-1.4 0-2.9.6-4.3 1.7-1.3 1-2.3 2.2-3 3.6v14.6c0 1 .3 1.9 1 2.5.6.8 1.3 1.2 2.3 1.2v2.1H130v-2.1c2.2-.1 3.2-1.4 3.2-3.7v-15c0-1.7-.1-2.8-.4-3.5-.4-.9-1.4-1.5-2.8-1.8v-2.1h8.6zm48 21.5l1.4 1.2c-3.2 4.1-7 6.2-11.4 6.2-4.3 0-7.6-1.2-10-3.7-2.4-2.4-3.6-5.8-3.6-10.1 0-4.4 1.1-8 3.3-10.9 2.4-3.2 5.8-4.8 10.1-4.8 3.3 0 6 1.3 8.1 3.9 1.9 2.4 2.8 5.2 2.8 8.7h-17.6c0 4.2.3 7.3 1 9.1 1.2 3.2 3.5 4.8 6.9 4.8 1.9 0 3.5-.4 4.9-1.2 1-.5 2.4-1.6 4.1-3.2zm-16.9-11.8h11.8c0-5.2-1.8-7.9-5.4-7.9-2.2 0-3.9.9-5 2.7-1 1.5-1.4 3.2-1.4 5.2zM65.5 94.9l-.3 8.8c-10.2 1-15.3 8-15.3 20.9v140.7h66.7c9.7 0 18-3.1 24.9-9.2 6.9-6.1 11.2-14 12.7-23.6h8.8v43.1H12.3v-8.8c10.2 0 15.3-7 15.3-20.9V124.6c0-13.9-5.1-20.9-15.3-20.9v-8.8h53.2zm183.1 15.5v-6.2c8.8-2.6 15.7-6.3 20.5-11.1h3.1l76.4 160.1c4.5 9.1 10.3 13.7 17.4 13.7v8.8h-52.5v-8.8c6.6-.9 9.9-4.2 9.9-10.1 0-1.7-.8-4.2-2.3-7.5l-11.2-23.2h-94.8l-10.4 21.7c-.3.9-1 2.8-2.1 5.7-.7 2.1-1 4.2-1 6.5 0 2.1 1.2 3.7 3.6 5 2.4 1.3 4.8 1.9 7 1.9v8.8h-42.3v-8.8c9.5-2.4 16.7-8.5 21.6-18.3l61.3-125.5c1.7-3.6 2.6-6.1 2.6-7.5 0-3.4-1.9-5.2-5.7-5.2h-1.1zm14.5 17.6L220 215.8h85L263.1 128zm116.4-33.1h70.6c24.4 0 41.9 5.6 52.5 16.8 7.1 7.4 10.6 16.9 10.6 28.4 0 11-4 20.5-11.9 28.5-8 8-17.6 12.6-28.8 13.8 14.7 1.5 26.4 5.9 35.1 12.9 9.7 7.9 14.5 18.8 14.5 32.5 0 18.4-7.9 31.7-23.6 39.8-10.4 5.3-22.2 8-35.3 8h-83.6v-8.8c10.2-.9 15.3-7.8 15.3-20.9V124.6c0-12.9-5.1-19.9-15.3-20.9v-8.8zm37.6 83.9h29.6c27.2 0 40.8-12.8 40.8-38.3 0-23.5-14.8-35.2-44.4-35.2h-26v73.5zm0 86.5h34.8c29.3 0 43.9-12.6 43.9-37.7 0-13.1-4.5-23-13.5-29.7-8-5.8-18.7-8.8-32.2-8.8h-33v76.2z"/>
				</svg>
			</div>
			<div class="header--numb">
				<h4><?php echo get_theme_mod('phone_textbox'); ?></h4>
				<p><?php echo get_theme_mod('address_textbox'); ?></p>
			</div>
			<div class="header--callbut">
				<a href="#nowhere">заказать звонок</a>
			</div>
		</div>		
	</header>
	<section class="title">
		<div class="contain">
			<h2><span class="black">OzoneBox – революция в мире косметики!</span></h2>
			<h2><span class="red">Новинка 2015 года!</span></h2>
			<div class="title__form">
				<div class="title__form--head">
					<p>Оставьте заявку прямо сейчас 
					и получите озонированное 
					масло в подарок!</p>
				</div>	
				<input type="text" class="title__form--input" name="header-feedback-name" placeholder="Имя">
				<input type="email" class="title__form--input" name="header-feedback-mail"placeholder="E-mail">
				<input type="phone" class="title__form--input" name="header-feedback-phone" placeholder="Телефон">
				<input type="submit" class="title__form--sub" value="Заказать">
			</div>
			<div class="title--boxesimg">
				<img src="<?php bloginfo('template_directory'); ?>/img/boxes.png" alt="">
			</div>
		</div>
		<div class="title--whiteline"></div>
	</section>

	<section class="boxes">
		<h1 class="block_title black">Наши OzoneBox</h1>
		<div class="contain">

			<div class="boxes__item">
				<div class="boxes__item--img">
					<img src="<?php bloginfo('template_directory'); ?>/img/6ctXGVc9hoE.jpg" alt="">
				</div>
				<div class="boxes__item--desc">
						<h4>Полное восстановление волос</h4>
						<ul>
							<li>Маска для роста и против 
				выпадения волос </li>
							<li>Мега-питательная маска для 
				восстановления структуры волос</li>
						</ul>
						<h4>цена <span>1990</span>руб</h4>
						<a href="#" class="boxes__item--desc--but">Заказать</a>
				</div>
				<div class="boxes__item--desc--more">
					<a href="#">Подробнее</a>
				</div>
			</div>
			<div class="boxes__item">
				<div class="boxes__item--img">
					<img src="<?php bloginfo('template_directory'); ?>/img/12095120_923851697662532_623430102895407746_o.jpg" alt="">
				</div>
				<div class="boxes__item--desc">
						<h4>Безупречно чистая<br>кожа</h4>
						<ul>
							<li>Дневной крем</li>
							<li>Ночной крем</li>
							<li>Озонированное масло 6000</li>	
						</ul>
						<h4>цена <span>2990</span>руб</h4>
						<a href="#" class="boxes__item--desc--but">Заказать</a>
				</div>
				<div class="boxes__item--desc--more">
					<a href="#">Подробнее</a>
				</div>
			</div>
			<div class="boxes__item">
				<div class="boxes__item--img">
					<img src="<?php bloginfo('template_directory'); ?>/img/rSce_pTQ_24.jpg" alt="">
				</div>
				<div class="boxes__item--desc">
					<h4>Идеальное<br>тело</h4>
						<ul>
							<li>Антицеллюлитный крем</li>							
							<li>Крем для борьбы с растяжками</li>	
							<li>Озонированное масло</li>
						</ul>
						<h4>цена <span>2990</span>руб</h4>
						<a href="#" class="boxes__item--desc--but">Заказать</a>
				</div>
				<div class="boxes__item--desc--more">
					<a href="#">Подробнее</a>
				</div>
			</div>
		</div>
	</section>

	<section class="infographics">
		<h1 class="block_title red">OzoneBox - это...</h1>
		<div class="contain">
			<div class="infographics__box">
				<div class="infographics__item-1">
					<p>2-3 полноразмерных продукта из нашей линейки 100% натуральной озоновой косметики для красоты волос и молодости кожи в каждом боксе </p>				</div>
				<div class="infographics__item-2">
					<p>Роскошная<br>коробочка  </p>
				</div>
				<div class="infographics__item-3">
					<p>Доставка по<br>всему миру </p>
				</div>
				<div class="infographics__item-4">					
					<p>Приятные сюрпризы <br>от команды OzoneLab </p>
				</div>
			</div>
		</div>
	</section>

	<section class="reasons">
		<h1 class="block_title black">5 причин заказать OzoneBox:</h1>
		<div class="contain">
			<ul>
				<li>
					<h4>Уникальный состав </h4>
					<p>Косметика лаборатории "OzoneLab" является эксклюзивной и не имеет аналогов. «OzoneLab» -
единственная в мире лаборатория, ученым которой удалось овладеть технологиями создания 
озоновой косметики. Эффективность достигается за счет высокой концентрации активных 
компонентов (озонидов), которые на 100 % совместимы с элементами нашей кожи. </p>
				</li>
				<li>
					<h4>Натуральные компоненты</h4>
					<p>Косметика лаборатории "OzoneLab" НЕ содержит продуктов нефтехимии, SLS и SLES, силиконов, 
парабенов,синтетических отдушек и красителей, способных нанести вред вашей коже и волосам, 
а также здоровью. </p>
				</li>
				<li>
					<h4>БЕЗОПАСНОСТЬ</h4>
					<p>Наличие гарантийного паспорта подтверждает, что косметика лаборатории "OzoneLab"прошла 
тесты в клинических условиях, а потому абсолютно безопасна. Она не вызывает привыкания, 
побочных эффектов или аллергии, поскольку не содержит гормонов. Благодаря высокой 
эффективности, наша технология получила признание не только в России, но еще и в 42 
странах мира. </p>
				</li>
				<li>
					<h4>Высокое качество</h4>
					<p>Наша лаборатория находится в Нижнем Новгороде и ведет свою деятельность с 2006 года. 
Лаборатория работает только на оборудовании компании " Medozons ", которая признана 
лидером по производству оборудования для озонотерапии. </p>
				</li>
				<li>
					<h4>Результат за 21 день</h4>
					<p>Наша лаборатория разработала несколько программ: «Полное восстановление волос», 
«Безупречно чистая кожа» и «Идеальное тело» всего за 21 день. Результат и эффективность 
косметики «OzoneLab» подтверждают клинические испытания и многолетний опыт их 
практического применения.</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="want black">
		<div class="contain">
			<h4>Хочу OzoneBox:</h4>
			<input type="text" class="want--input" placeholder="Имя">
			<input type="email" class="want--input" placeholder="E-mail">
			<input type="phone" class="want--input" placeholder="Телефон">
			<input type="submit" class="want--sub" value="Заказать">
			<div class="want--description">
				<p>Оставьте заявку прямо сейчас и получите озонированное масло в подарок!</p>
			</div>
		</div>
	</section>

<body>
<script type="text/javascript">
	addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
	var ajaxurl = '/wp-admin/admin-ajax.php',
		pagenow = 'toplevel_page_mainpage',
		typenow = '',
		adminpage = 'toplevel_page_mainpage',
		thousandsSeparator = ' ',
		decimalPoint = ',',
		isRtl = 0;
</script>
<?php wp_footer(); ?>
</body>
</html>