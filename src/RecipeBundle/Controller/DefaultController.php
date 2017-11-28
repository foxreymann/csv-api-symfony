<?php

namespace RecipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecipeBundle:Default:index.html.twig');
    }

    public function findByIdAction(Request $request)
    {
        $data = $request->getContent();
        $recipeId  = $data['id'];
        return new JsonResponse(array('recipe id'=>$recipeId));
    }
}
