<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{   public $burgers = [
    [
        'id' => 1,
        'name' => 'Classic Burger',
        'ingredients' => 'Manzo 180g, cheddar, lattuga, pomodoro, salsa burger artigianale',
        'price' => '11.00€',
        'img' => 'https://thespiceway.com/cdn/shop/files/Signature_Savory_Classic_Burger.jpg?v=1712161801',
        'description' => 'Un grande classico preparato con ingredienti selezionati e sapori equilibrati.
        La carne di manzo, succosa e cotta al momento, si unisce al cheddar fuso e alla freschezza di lattuga e pomodoro, per un hamburger semplice ma intramontabile.',
    ],
    [
        'id' => 2,
        'name' => 'Gourmet Bacon',
        'ingredients' => 'Manzo selezionato, bacon croccante, cheddar stagionato, cipolla caramellata, salsa BBQ',
        'price' => '13.50€',
        'img' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiMPmyIpZAOTxtnCKitvVfugdHwT52D3GNk9rubUy5IIBOWx9mvOYcNEmkSloFO53zuvRcQb7okNMaTQJupAhEY_pUBX-Bs8xFUWUB1cY7Jmek-LQOKFoMwlJFwVKzMevj90ZcPHsJDg6I/s1600-rw/bacon-jam-burger-1839x600.jpg',
        'description' => 'Un hamburger dal carattere deciso, pensato per chi ama i sapori intensi.
        Manzo selezionato, bacon croccante e cheddar stagionato incontrano la dolcezza della cipolla caramellata e la nostra salsa BBQ, per un’esperienza ricca e avvolgente.',

    ],
    [
        'id' => 3,
        'name' => 'Veg Deluxe',
        'ingredients' => 'Burger vegetale, insalata croccante, pomodoro, avocado, maionese veg',
        'price' => '12.00€',
        'img' => 'https://www.shutterstock.com/image-photo/side-view-premium-looking-veg-600nw-2542688403.jpg',
        'description' => 'Una proposta vegetariana che non rinuncia al gusto.
        Il burger vegetale si accompagna a ingredienti freschi e croccanti, con l’avocado che dona cremosità e la maionese veg che completa un equilibrio perfetto.'
    ]
];

    public function menu() {
        return view('menu', ['burgers' => $this->burgers]);
    }

    public function detail($id){
        foreach($this->burgers as $burger){
            if($burger['id'] == $id){
                return view('dettaglio', ['burger' => $burger]);
            }
        }
    }
}
    