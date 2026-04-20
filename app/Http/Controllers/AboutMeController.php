<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index() {
        $heroDiv = $this->getHeroDiv();
        $infoDiv = $this->getInfoDiv();
        return $heroDiv.$infoDiv;
    }
    private function getInfoDiv() {
        return
            "<section>
                <h2>About Me</h2>
                <p>I am a software developer with experience in various programming languages and frameworks. I enjoy learning new technologies and applying them to solve real-world problems.</p>
            </section>";
    }
    private function getHeroDiv() {
        return
            "<section> 
                <h1>Hi, I'm Jyeshua Velasco</h1>
                <img src='https://blog.jakelee.co.uk/assets/images/2024/octocats/labtocat.png' alt='Avatar' style='width:200px'></img>
                <p>This is to a wonderful time to be alive!</p>
            </section>";
    }
}
