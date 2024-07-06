<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/
    const COPYRIGHT = "
.______   ____    ____         _______. _______     ___      .__   __.    .______    __    __       _______.     _______. _______ 
|   _  \  \   \  /   /        /       ||   ____|   /   \     |  \ |  |    |   _  \  |  |  |  |     /       |    /       ||   ____|
|  |_)  |  \   \/   /        |   (----`|  |__     /  ^  \    |   \|  |    |  |_)  | |  |  |  |    |   (----`   |   (----`|  |__   
|   _  <    \_    _/          \   \    |   __|   /  /_\  \   |  . `  |    |   _  <  |  |  |  |     \   \        \   \    |   __|  
|  |_)  |     |  |        .----)   |   |  |____ /  _____  \  |  |\   |    |  |_)  | |  `--'  | .----)   |   .----)   |   |  |____ 
|______/      |__|        |_______/    |_______/__/     \__\ |__| \__|    |______/   \______/  |_______/    |_______/    |_______|
                                                                                                                                  
";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
