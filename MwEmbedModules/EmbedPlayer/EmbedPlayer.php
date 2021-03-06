<?php
	global $wgVideoPlayerSkinModule;
	// Register all the EmbedPlayer modules
	return array(
			"jquery.embedPlayer" => array( 'scripts' => 'resources/jquery.embedPlayer.js' ),
			"mw.EmbedPlayer.loader" => array(
				'scripts' => 'resources/mw.EmbedPlayer.loader.js',
				'dependencies' => 'jquery.embedPlayer',
				'position' => 'top',
			),
			"mw.MediaElement" => array(
				'scripts' => 'resources/mw.MediaElement.js',
				'dependencies' => array(
					'ext.tmh.OgvJsSupport',
				),
			),
			"mw.MediaPlayer" => array( 'scripts' => 'resources/mw.MediaPlayer.js' ),
			"mw.MediaPlayers" => array(
				'scripts' => 'resources/mw.MediaPlayers.js',
				'dependencies' => 'mw.MediaPlayer'
			),
			"mw.MediaSource" => array(
				'scripts' => 'resources/mw.MediaSource.js',
				'dependencies' => 'mw.MwEmbedSupport',
			),
			"mw.EmbedTypes" => array(
				'scripts' => 'resources/mw.EmbedTypes.js',
				'dependencies' =>  array(
					'mw.MediaPlayers',
					'mediawiki.Uri',
					'jquery.client',
				)
			),
			"mw.EmbedPlayer" => array(
				'scripts' => array(
					"resources/mw.processEmbedPlayers.js",
					"resources/mw.EmbedPlayer.js",
					"resources/skins/mw.PlayerControlBuilder.js",
				),
				'dependencies' => array(
					// mwEmbed support module
					'mediawiki.client',
					'mediawiki.UtilitiesTime',
					'mediawiki.Uri',
					'mediawiki.absoluteUrl',
					'mediawiki.jqueryMsg',

					// Browser fullscreen api support:
					'fullScreenApi',

					// Kinda need this
					'mw.MwEmbedSupport',

					// We always end up loading native player
					'mw.EmbedPlayerNative',

					// Sub classes:
					'mw.MediaElement',
					'mw.MediaPlayers',
					'mw.MediaSource',
					'mw.EmbedTypes',

					// jQuery dependencies:
					'jquery.client',
					'jquery.hoverIntent',
					'jquery.cookie',
					'jquery.ui.mouse',
					'jquery.debouncedresize',
					'jquery.embedMenu',
					'jquery.ui.slider',
					'jquery.ui.touchPunch',

					// Set to mw.PlayerSkinKskin or mw.PlayerSkinMvpcf in config
					$wgVideoPlayerSkinModule
				),
				'styles' => "resources/skins/EmbedPlayer.css",
				'messageDir' => 'i18n',
			),

			"mw.EmbedPlayerKplayer"	=> array( 'scripts'=> "resources/mw.EmbedPlayerKplayer.js" ),
			"mw.EmbedPlayerGeneric"	=> array( 'scripts'=> "resources/mw.EmbedPlayerGeneric.js" ),
			"mw.EmbedPlayerNative"	=> array( 'scripts'=> "resources/mw.EmbedPlayerNative.js" ),
			"mw.EmbedPlayerVLCApp"	=> array(
				'scripts'=> "resources/mw.EmbedPlayerVLCApp.js",
				'dependencies' => array( 'mediawiki.Uri' )
			),
			"mw.EmbedPlayerIEWebMPrompt" => array(
				'scripts' => 'resources/mw.EmbedPlayerIEWebMPrompt.js',
				'styles' => 'resources/mw.EmbedPlayerIEWebMPrompt.css',
			),
			"mw.EmbedPlayerOgvJs" => array(
				'scripts' => 'resources/mw.EmbedPlayerOgvJs.js',
				'dependencies' => array(
					'jquery.spinner',
					'ext.tmh.OgvJsSupport',
				),
			),
			"mw.EmbedPlayerImageOverlay" => array( 'scripts'=> "resources/mw.EmbedPlayerImageOverlay.js" ),

			"mw.EmbedPlayerVlc" => array( 'scripts'=> "resources/mw.EmbedPlayerVlc.js" ),

			"mw.PlayerSkinKskin" => array(
				'scripts' => "resources/skins/kskin/mw.PlayerSkinKskin.js",
				'styles' => "resources/skins/kskin/PlayerSkinKskin.css"
			),

			"mw.PlayerSkinMvpcf" => array(
				'scripts'=> "resources/skins/mvpcf/mw.PlayerSkinMvpcf.js",
				'styles'=> "resources/skins/mvpcf/PlayerSkinMvpcf.css"
			),
	);
?>
