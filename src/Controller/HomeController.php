<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
  /**
   * @var environment
   */
  private $twig;

  public function __construct(Environment $twig)
  {
    $this->twig = $twig;
  }

  public function index(): Response
  {
    return new Response($this->twig->render('home.html.twig'));
  }

}
