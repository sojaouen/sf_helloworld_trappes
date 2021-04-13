<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalController extends AbstractController
{
    /**
     * @Route("/Lire-nos-mentions-legales", name="legal")
     */
    public function index(): Response
    {
        return $this->render('legal/index.html.twig', [
            'controller_name' => 'Mentions Légales',
        ]);
    }

    /**
     * @Route("/cookies", name="cookies")
     */
    public function cookies(): Response
    {
        return $this->render('legal/cookies.html.twig', [
            'title' => "Politique concernant les cookies",
            'content' => "Lorem ipsum.....Blablabla"
        ]);
    }

    /**
     * @Route("/cgu", name="cgu")
     */
    public function cgu(): Response
    {
        return $this->render('legal/index.html.twig', [
            'controller_name' => 'Les CGU',
        ]);
    }
}
