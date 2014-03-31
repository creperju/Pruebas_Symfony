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
    
    
    public function createAction($id)
    {
        $c = (string)$id;
        $c2 = (string)$id+1;
        
        $product = new Product();
        $product->setProduct($c);
        $product->setName('AAA');
        $product->setPrice('19.99');
        
        $product2 = new Product();
        $product2->setProduct($c2);
        $product2->setName('Emilio');
        $product2->setPrice('20.25');
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($product);
        $dm->persist($product2);
        $dm->flush();
        
        $mensaje = 'Created product id '.$product->getId().'<br/>Product id: '.$product->getProduct().'<br/>Name: '.$product->getName().'<br/>Precio: '.$product->getPrice().
                '<p/>Created product id '.$product2->getId().'<br/>Product id: '.$product2->getProduct().'<br/>Name: '.$product2->getName().'<br/>Precio: '.$product2->getPrice();
        
        
        return new Response($mensaje);
    }
    
    
    public function showAction($id)
    {
        
        
        $product = $this->get('doctrine_mongodb')
            ->getRepository('AcmeStoreBundle:Product')            
            ->findOneByProduct($id);
        
        
        
        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }

        // do something, like pass the $product object into a template
        
        $datos = array();
        $datos['id'] = $product->getId();
        $datos['product'] = $product->getProduct();
        $datos['name'] = $product->getName();
        $datos['price'] = $product->getPrice();
        $datos['long'] = count($product);
        
        //return $this->render('AcmeStoreBundle::show.html.php',$datos);
        //return $this->render('AcmeStoreBundle::show.html.twig',array('id' => $product->getId(),'product_id' => $product->getProductId(),'name' => $product->getName(),'price' => $product->getPrice()));
        return $this->render('AcmeStoreBundle::show.html.twig',$datos);
    }
    
    public function allAction()
    {
        $mis_products = $this->get('doctrine_mongodb')
                ->getRepository('AcmeStoreBundle:Product')
                ->findAll();
        
        $mis_parametros =  array('products_en_twig' => $mis_products,
                                 'B' => 2);
        
        return $this->render('AcmeStoreBundle::all.html.twig',$mis_parametros);
//        if(is_array($products))
//            return $this->render('AcmeStoreBundle::all.html.twig', array('products' => 'Es un array de '.count($products)));
//        else
//            return $this->render('AcmeStoreBundle::all.html.twig', array('products' => 'No es un array, tiene '.count($products)));
        
    }
    
    public function deleteAllAction()
    {
        $this->get('doctrine_mongodb')
                ->getRepository('AcmeStoreBundle:Product')
                ->drop();
    }
    
    
}
