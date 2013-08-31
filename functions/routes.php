<?php

	$routes = [

		# default route
		"/" => "home",
		"/news" => "news",
		"/faves" => "faves",
		"/songs" => "songs",
		"/stats" => "stats/graph",
		"/help" => "help",

		# Errors
		"@404" => "errors/404",
		"@403" => "errors/403",

		# routes with args
		"/news/(\d+)" => "news/single/$1",
		"/fave/(.*)" => "faves/single/$1",
		"/stats/(.*)" => "stats/$1",
		"/songs/(.*)" => "songs/$1"

		# admin routes
		"/admin" => ["admin", "check_admin"],
		"/admin/login" => "admin/users/login",
		"/admin/logout" => "admin/users/logout",

		# admin wildcard
		"/admin(/.*)" => ["admin$1", "has_admin"],

		# developers have access to full wildcard routes
		"/([^/]+)(/.*)" => ["$1$2", "has_dev"]
	];
