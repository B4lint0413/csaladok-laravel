<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class FamilyController extends Controller
{
    public function index(){
        return view("family.index", ["title" => "Családok", "families"=>$this->loadFamilies()]);
    }

    public function table(){
        return view("family.table", ["title"=>"Karakterek", "characters"=>$this->loadCharacters()]);
    }

    public function show(string $slug, int $id){
        $character = $this->loadCharacters()[$slug][$id];
        return view("family.show", ["title"=>"Karakter", "character"=>$character, "slug"=>$slug]);
    }

    public function list(string $slug){
        return view("family.list", ["title"=>$this->loadFamilies()[$slug], "slug"=>$slug, "family"=>$this->loadCharacters()[$slug]]);
    }

    public function loadCharacters():Collection{
        return collect([
            "simpson" => [
                [
                    "family"=> "A Simpson család",
                    "year"=> 1987,
                    "character"=> "Homer Simpson",                        
                    "image"=> "homer.png",
                    "color"=> "#ffef00"
                ],
                [
                    "family"=> "A Simpson család",
                    "year"=> 1987,
                    "character"=> "Bart Simpson",                        
                    "image"=> "bart.png",                        
                    "color"=> "#ffef00"
                ],
                [
                    "family"=> "A Simpson család",
                    "year"=> 1987,
                    "character"=> "Marge Simpson",                        
                    "image"=> "marge.png",                        
                    "color"=> "#ffef00"
                ],
                [
                    "family"=> "A Simpson család",
                    "year"=> 1987,
                    "character"=> "Lisa Simpson",
                    "image"=> "lisa.png",                 
                    "color"=> "#ffef00"
                ],
            ],
            "mezga" => [
                [
                    "family"=> "A Mézga család",
                    "year"=> 1968,
                    "character"=> "Mézga Géza",                        
                    "image"=> "mezgageza.jpg",                        
                   "color"=> "#bd7481"
                ],
                [
                    "family"=> "A Mézga család",
                    "year"=> 1968,
                    "character"=> "Mézga Paula",                        
                    "image"=> "mezgapaula.jpg",                        
                   "color"=> "#bd7481"
                ],
                [
                    "family"=> "A Mézga család",
                    "year"=> 1968,
                    "character"=> "Mézga Kriszta",                        
                    "image"=> "mezgakriszta.jpg",                        
                   "color"=> "#bd7481"
                ],
                [
                    "family"=> "A Mézga család",
                    "year"=> 1968,
                    "character"=> "Mézga Aladár",                        
                    "image"=> "mezgaaladar.jpg",                        
                   "color"=> "#bd7481"
                ],
                [
                    "family"=> "A Mézga család",
                    "year"=> 1968,
                    "character"=> "MZ/X",
                    "image"=> "mzx.jpg",
                   "color"=> "#bd7481"
                ],
            ],
            "familyguy"=> [
                [
                    "family"=> "Family Guy",
                    "year"=> 1999,
                    "character"=> "Peter Griffin",                        
                    "image"=> "petergriffin.png",                        
                    "color"=> "#9dc4ea"
                ],
                [
                    "family"=> "Family Guy",
                    "year"=> 1999,
                    "character"=> "Lois Griffin",                        
                    "image"=> "loisgriffin.png",                        
                    "color"=> "#9dc4ea"
                ],
                [
                    "family"=> "Family Guy",
                    "year"=> 1999,
                    "character"=> "Chris Griffin",                        
                    "image"=> "chrisgriffin.png",                        
                    "color"=> "#9dc4ea"
                ],
                [
                    "family"=> "Family Guy",
                    "year"=> 1999,
                    "character"=> "Meg Griffin",                        
                    "image"=> "meggriffin.png",                        
                    "color"=> "#9dc4ea"
                ],
                [
                    "family"=> "Family Guy",
                    "year"=> 1999,
                    "character"=> "Stewie Griffin",
                    "image"=> "stewiegriffin.png",
                    "color"=> "#9dc4ea"
                ],
            ]
        ]);
    }

    public function loadFamilies(){
        return [
            "simpson" => "A Simpson család",
            "mezga" => "A Mézga család",
            "familyguy" => "Family Guy"
        ];
    }
}
