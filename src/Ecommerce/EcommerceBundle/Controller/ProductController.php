<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Product;

class ProductController extends Controller
{
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();

        /*
        $product = new Product();
        $product->setName('Produit de test 4');
        $product->setDescription('produit de test 1');
        $product->setDisponiility(true);
        $product->setHomefeatured(true);
        $product->setPrice(10.00);

        $em->persist($product);

        $product1 = new Product();
        $product1->setName('Produit de test 2');
        $product1->setDescription('produit de test 2');
        $product1->setDisponiility(true);
        $product1->setHomefeatured(true);
        $product1->setPrice(15.00);

        $em->persist($product1);

        $product2 = new Product();
        $product2->setName('Produit de test 2');
        $product2->setDescription('produit de test 2');
        $product2->setDisponiility(true);
        $product2->setHomefeatured(false);
        $product2->setPrice(20.00);

        $em->persist($product2);
        $em->flush();*/

        $repo = $em->getRepository('EcommerceBundle:Product');
        $productslist = $repo->findByHomefeatured(true);


        //TODO give an array with only featured to home products to the template
        return $this->render('EcommerceBundle:Product:products.html.twig',array('products'=>$productslist));
    }

    public function viewAction($pid){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('EcommerceBundle:Product');
        $product = $repo->find($pid);

        //TODO give an array with only featured to home products to the template
        return $this->render('EcommerceBundle:Product:product.html.twig',array('product'=>$product));
    }
}
