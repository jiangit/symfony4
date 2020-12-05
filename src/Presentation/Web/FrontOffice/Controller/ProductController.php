<?php
declare(restrict_type=1);

namespace App\Presentation\Web\FrontOffice\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(): Response
    {
        return $this->render('@FrontOffice/product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
