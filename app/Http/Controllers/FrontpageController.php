<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\Product;
use App\Gallery;

class FrontpageController extends Controller
{
    /**
     * Show the main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        $company = Company::firstOrFail();
        $products = Product::all();

        return view('main')
            ->with('company', $company)
            ->with('products', $products);
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        $company = Company::firstOrFail();

        return view('contact')
            ->with('company', $company);
    }

    /**
     * Show the products page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function products()
    {
        $company = Company::firstOrFail();
        $products = Product::all();

        return view('products')
            ->with('company', $company)
            ->with('products', $products);
    }

    public function gallery()
    {
        $company = Company::firstOrFail();
        $galleries = Gallery::all();

        return view('gallery')
            ->with('company', $company)
            ->with('galleries', $galleries);
    }
}
