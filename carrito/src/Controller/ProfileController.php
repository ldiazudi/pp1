<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
 public function index(): Response
 {
 // returns your User object, or null if the user is not authenticated
 $user = $this->getUser();
 // Call whatever methods you've added to your User class
 // For example, if you added a getFirstName() method, you can use that.
 return new Response('Well hi there '.$user->getFirstName());
 }
}