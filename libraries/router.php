<?php

function prepareUri($uri, $prefix = '') {
    // Strip query string (?foo=bar)
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
	}

    // Decode URI
    $uri = rawurldecode($uri);
    // Strip prefix
    if ($prefix !== '' && strpos($uri, $prefix) === 0) {
        $uri = substr($uri, strlen($prefix));
    }

    return $uri;
}

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {

    $r->addRoute(['GET','POST'], '[/[&page={page:\d+}]]', function ($params) {
        $_GET['com'] == 'index';
        if ($params['page']) {
            $_GET['page'] = $params['page'];
        }

    });

    $r->addRoute(['GET','POST'], '/index.php', function ($params) {
        global $config, $config_url_f;
        $_GET['com'] == 'index';

        if ($config['index']==1) {
            redirect_router($config_url_f);
        }
    });

    $r->addRoute(['GET','POST'], '/trang-chu.html', function ($params) {
        global $config_url_f;
        redirect_router($config_url_f);
    });

    $r->addRoute(['GET','POST'], '/index.html', function ($params) {
        global $config_url_f;
        redirect_router($config_url_f);
    });

    $r->addRoute(['GET','POST'], '/admin[/]', function ($params) {
        global $config_url_f;
        redirect_router($config_url_f . '/admin/index.php');
    });

    $r->addRoute(['GET','POST'], '/tags/{tenkhongdau:[a-zA-Z0-9_-]+}-{id:\d+}[&page={page:\d+}]', function ($params) {
        global $config_url_f;
        foreach ($params as $key => $item) {
            $_GET[$key] = $item;
        }
        $_GET['com'] = 'tags';
    });

    // chuyển tất cả link có "/" ở cuối về link không "/"
    $r->addRoute(['GET','POST'], "/{com:[a-zA-Z0-9_-]+}/", function ($params) {
        global $config_url_f;
        $uri_page = $_SERVER['REQUEST_URI'];
        $uri_page_trim = rtrim($uri_page, '/');
        redirect_router($uri_page_trim);
    });

    // router com và page
    $r->addRoute(['GET','POST'], '/{com:[a-zA-Z0-9_-]+}[&page={page:\d+}]', function ($params) {
        foreach ($params as $key => $item) {
            $_GET[$key] = $item;
        }
    });


    // router user
    $r->addRoute(['GET','POST'], '/{com:[a-zA-Z0-9_-]+}/{user:[a-zA-Z0-9_-]+}', function ($params) {
        foreach ($params as $key => $item) {
            $_GET[$key] = $item;
        }
    });

    // router lang
    $r->addRoute(['GET','POST'], '/{com:[a-zA-Z0-9_-]+}/{lang:[a-zA-Z0-9_-]+}.htm', function ($params) {
        foreach ($params as $key => $item) {
            $_GET[$key] = $item;
        }
    });

    // router sitemap
    $r->addRoute(['GET','POST'], '/sitemap.xml', "sitemap.php");

    // router timthumb
    $r->addRoute(['GET','POST'], '/thumb/{w:\d+}x{h:\d+}/{zc:\d+}/{src:.+}', function ($params) {
        global $config_url_f;
        foreach ($params as $key => $item) {
            $_GET[$key] = $item;
        }

        // do timthumb sài QUERY_STRING để tạo tên cho file cache nên phải khởi tạo QUERY_STRING
        $_SERVER['QUERY_STRING'] = http_build_query($_GET);

        if ($config_url_f) {
            $_GET['src'] =  $config_url_f . '/' . $_GET['src'];
        }
        include "timthumb.php";
    });
});

// Kiểm tra các router đã lưu và thực thi

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$uri = prepareUri($uri, $config_url_f);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);


switch ($routeInfo[0]) {
	case FastRoute\Dispatcher::NOT_FOUND:
	header( "HTTP/1.1 404 Not Found" );
	include_once "admin/page_404.php";
	exit();
	break;
	case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
	$allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
	break;
	case FastRoute\Dispatcher::FOUND:
	$handler = $routeInfo[1];
	$var_router = $routeInfo[2];
	if (is_callable($handler)) {
        $handler($var_router);
	}
	elseif(is_file($handler)) {
        include $handler;
        exit();
	}
	else {
		header( "HTTP/1.1 404 Not Found" );
		include_once "admin/page_404.php";
		exit();
	}

        // ... call $handler with $vars
	break;
}


