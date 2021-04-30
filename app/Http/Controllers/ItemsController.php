<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
        return <<<EOF
        <html>
        <head>
        <title>Items/Index</title>
        </head>
        <body>
            <h1>Index</h1>
        </body>
        </html>
        EOF;
    }
}
