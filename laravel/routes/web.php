<?php

use Illuminate\Support\Facades\Route;

require_once 'includes/router.php';
 
$router = new Router();
 
// Register all routes
$router->get('/', 'routes/home.php');
$router->get('/about', 'routes/about.php');
$router->get('/projects', 'routes/projects.php');
$router->get('/projects/{slug}', 'routes/project-single.php');
$router->get('/skills', 'routes/skills.php');
$router->get('/experience', 'routes/experience.php');
$router->get('/blog', 'routes/blog.php');
$router->get('/blog/{slug}', 'routes/blog-single.php');
$router->get('/contact', 'routes/contact.php');
$router->post('/contact', 'routes/contact-handle.php');
$router->get('/resume', 'routes/resume.php');
$router->get('/uses', 'routes/uses.php');
 
$router->dispatch();
 