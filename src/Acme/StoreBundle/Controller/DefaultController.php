<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Document\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('myname' => $name));
    }
    
    
    public function createAction()
    {
        $product = new Product();
        $product->setId('1');
        $product->setName('AAA');
        $product->setPrice('19.99');

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($product);
        $dm->flush();

        return new Response('Created product id '.$product->getId());
    }
    
    
    public function showAction()
    {
        $id = '1';
        $product = $this->get('doctrine_mongodb')
            ->getRepository('AcmeStoreBundle:Product')
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }

        // do something, like pass the $product object into a template
        
        $datos = array();
        $datos['id'] = $product->getId();
        $datos['name'] = $product->getName();
        $datos['price'] = $product->getPrice();
        
        //return $this->render('AcmeStoreBundle::show.html.php',$datos);
        return $this->render('AcmeStoreBundle::show.html.twig',array('id' => $product->getId(),'name' => $product->getName(),'price' => $product->getPrice()));
        
    }
    
    
}
