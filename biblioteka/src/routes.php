<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/index/categories', function (Request $request, Response $response, array $args) {
    // Sample log message
    $arr = [
        [
            "id"=> 1,
            "name"=> 'Web development'
            ],
        [
            "id"=> 2,
            "name"=> 'Programming'
            ],
        [
            "id"=> 3,
            "name"=> 'Game Programming'
            ],
        [
            "id"=> 4,
            "name"=> 'Operating Systems'
            ],
        [
            "id"=> 5,
            "name"=> 'Database'
            ],
        [
            "id"=> 6,
            "name"=> 'Graphics & Design'
            ],
        [
            "id"=> 7,
            "name"=> 'Administration'
            ],
        [
            "id"=> 8,
            "name"=> 'Enterprise'
            ],
            
    ];
    
    $response->getBody()->write(json_encode($arr,true));

    // Render index view
    return $response->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});



$app->get('/index', function (Request $request, Response $response, array $args) {
    // Sample log message
    $arr = [
        [  
            "id"=> 1,
            "pic"=> 'img/Nim-in-Action.jpg',
            "title"=> 'Nim in Action',
            "author"=> 'By: Dominik Picheta',
            "description"=> 'Nim is a multi-paradigm language that offers powerful customization options with the ability to compile to everything from C to JavaScript. In Nim in Action you’ll learn how Nim compares to other languages in style and performance, master its structure and syntax, and discover unique features.',
            "price"=> 35.59
            ],
        [
            "id"=> 2,
            "pic"=> 'img/31-Days-Before-Your-CCNA-Routing-Switching-Exam.jpg',
            "title"=> '31 Days Before Your CCNA Routing & Switching Exam',
            "author"=> 'By: Allan Johnson',
            "description"=> '31 Days Before Your CCNA Routing & Switching Exam  offers a friendly, practical way to understand the CCNA Routing & Switching certification process, commit to taking the ICND1 (100-105) and ICND2 (200-105) exams or the CCNA (200-125) exam, and finish your preparation using a variety of Primary and…',
            "price"=> 20
            ],
        [
            "id"=> 3,
            "pic"=> 'img/The-Python-3-Standard-Library-by-Example.jpg',
            "title"=> 'The Python 3 Standard Library by Example',
            "author"=> 'By: Doug Hellmann',
            "description"=> 'Master the Powerful Python 3 Standard Library through Real Code Examples The Python 3 Standard Library contains hundreds of modules for interacting with the operating system, interpreter, and Internet–all extensively tested and ready to jump-start application development. Now, Python expert Doug Hellmann introduces every major area of the…',
            "price"=> 45.50
        ],
        [
            "id" => 4, 
            "pic"=>'img/Visual-Basic-2012-Programmers-Reference.jpg',
            "title"=> 'Visual Basic 2012 Programmer’s Reference',
            "author"=> 'By: Rod Stephens',
            "description"=> 'The comprehensive guide to Visual Basic 2012 Microsoft Visual Basic (VB) is the most popular programming language in the world, with millions of lines of code used in businesses and applications of all types and sizes. In this edition of the bestselling Wrox guide, Visual Basic expert Rod…',
            "price"=> 10.8
        
        ],
        [
            "id" => 5,
            "pic"=> 'img/Windows-10-For-Dummies-3rd-Edition.jpg',
            "title"=> 'Windows 10 For Dummies, 3rd Edition',
            "author"=>'By: Andy Rathbone',
            "description"=> 'The #1 source for Windows 10 help Millions of Windows users have turned to Windows For Dummies for quick, friendly, and easy-to-understand help with their computers. Windows 10 For Dummies, 3rd Edition continues this tradition as it helps you navigate the twists and turns of Windows. Start at the beginning to discover the…',
            "price"=> 20
       
        ],
        
    ];
    
    $response->getBody()->write(json_encode($arr,true));

    // Render index view
    return $response->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

$app->get('/index/1', function (Request $request, Response $response, array $args) {
    // Sample log message
    $arr = [
            "id"=> 1,
            "pic"=> 'img/Nim-in-Action.jpg',
            "title"=> 'Nim in Action',
            "author"=> 'By: Dominik Picheta',
            "description"=> 'Nim is a multi-paradigm language that offers powerful customization options with the ability to compile to everything from C to JavaScript. In Nim in Action you’ll learn how Nim compares to other languages in style and performance, master its structure and syntax, and discover unique features.',
            "price"=> 35.59
    ];
    
    $response->getBody()->write(json_encode($arr,true));

    // Render index view
    return $response->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

$app->get('/index/2', function (Request $request, Response $response, array $args) {
    // Sample log message
    $arr = [
            "id"=> 2,
            "pic"=> 'img/31-Days-Before-Your-CCNA-Routing-Switching-Exam.jpg',
            "title"=> '31 Days Before Your CCNA Routing & Switching Exam',
            "author"=> 'By: Allan Johnson',
            "description"=> '31 Days Before Your CCNA Routing & Switching Exam  offers a friendly, practical way to understand the CCNA Routing & Switching certification process, commit to taking the ICND1 (100-105) and ICND2 (200-105) exams or the CCNA (200-125) exam, and finish your preparation using a variety of Primary and…',
            "price"=> 20
            
    ];
    
    $response->getBody()->write(json_encode($arr,true));

    // Render index view
    return $response->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});
$app->get('/index/3', function (Request $request, Response $response, array $args) {
    // Sample log message
    $arr = [
            "id"=> 3,
            "pic"=> 'img/The-Python-3-Standard-Library-by-Example.jpg',
            "title"=> 'The Python 3 Standard Library by Example',
            "author"=> 'By: Doug Hellmann',
            "description"=> 'Master the Powerful Python 3 Standard Library through Real Code Examples The Python 3 Standard Library contains hundreds of modules for interacting with the operating system, interpreter, and Internet–all extensively tested and ready to jump-start application development. Now, Python expert Doug Hellmann introduces every major area of the…',
            "price"=> 45.50
            
    ];
    
    $response->getBody()->write(json_encode($arr,true));

    // Render index view
    return $response->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});
