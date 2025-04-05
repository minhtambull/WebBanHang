<?php
session_start();
require_once 'app/config/database.php';
require_once 'app/helpers/SessionHelper.php';
require_once 'app/controllers/ProductApiController.php';
require_once 'app/controllers/CategoryApiController.php';

// Lấy URL request
$url = $_GET['url'] ?? '';
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

// Xác định controller
$controllerName = isset($url[0]) && $url[0] != '' ? ucfirst($url[0]) . 'Controller' : 'ProductController';
$action = isset($url[1]) && $url[1] != '' ? $url[1] : 'index';

// Định tuyến API
if (strpos($controllerName, 'ApiController') !== false && isset($url[1])) {
    $apiControllerName = ucfirst($url[1]) . 'ApiController';
    $controllerPath = 'app/controllers/' . $apiControllerName . '.php';
    
    if (file_exists($controllerPath)) {
        require_once $controllerPath;
        
        if (class_exists($apiControllerName)) {
            $controller = new $apiControllerName();
            $method = $_SERVER['REQUEST_METHOD'];
            $id = $url[2] ?? null;
            
            switch ($method) {
                case 'GET':
                    $action = $id ? 'show' : 'index';
                    break;
                case 'POST':
                    $action = 'store';
                    break;
                case 'PUT':
                    $action = $id ? 'update' : ''; // Không có id thì không thể update
                    break;
                case 'DELETE':
                    $action = $id ? 'destroy' : ''; // Không có id thì không thể xóa
                    break;
                default:
                    http_response_code(405);
                    echo json_encode(['message' => 'Method Not Allowed']);
                    exit;
            }
            
            if (method_exists($controller, $action)) {
                $id ? call_user_func([$controller, $action], $id) : call_user_func([$controller, $action]);
            } else {
                http_response_code(404);
                echo json_encode(['message' => 'Action not found']);
            }
            exit;
        }
    }
    
    http_response_code(404);
    echo json_encode(['message' => 'Controller not found']);
    exit;
}

// Xử lý controller thông thường
$controllerPath = 'app/controllers/' . $controllerName . '.php';
if (file_exists($controllerPath)) {
    require_once $controllerPath;
    
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        
        if (method_exists($controller, $action)) {
            call_user_func_array([$controller, $action], array_slice($url, 2));
        } else {
            die('Action not found');
        }
    } else {
        die('Controller class not found');
    }
} else {
    die('Controller file not found');
}
