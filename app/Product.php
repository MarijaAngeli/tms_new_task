<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $allProducts = [
    	[
			'name' => 'Paulaner',
			'price'	=> 5.50,
			'picture'		=> 'paulaner.jpg'
		],
		[
			'name' => 'Guinness',
			'price'	=> 15.00,
			'picture'		=> 'guinness.jpg'
		],
		[
			'name' => 'Craft Beer Dark',
			'price'	=> 4.00,
			'picture'		=> 'craft-beer-dark.jpg'
		],
		[
			'name' => 'Craft Beer',
			'price'	=> 3.50,
			'picture'		=> 'craft-beer.jpg'
		],
		[
			'name' => 'Peroni',
			'price'	=> 7.50,
			'picture'		=> 'peroni.jpg'
		],
		[
			'name' => 'Heineken',
			'price'	=> 9.00,
			'picture'		=> 'heineken.jpg'
		],
	];
	public function getProducts() {
		return $this->allProducts;
	}
    
}