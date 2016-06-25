<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction(){
        //TODO give an array with only featured to home products to the template
        return $this->render('EcommerceBundle:Product:products.html.twig');
    }
}
