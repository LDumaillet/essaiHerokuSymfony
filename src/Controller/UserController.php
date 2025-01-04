<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class UserController
{
  #[Route("/users", name: "user_list", methods: ["GET"])]
  public function listUsers() {}

  #[Route("/users/create", name: "user_create", methods: ["GET", "POST"])]
  public function createUser() {}

  #[Route("/users/{id}/edit", name: "user_edit", methods: ["GET", "POST"], requirements: ['id' => '\d+'])]
  public function editUser() {}
}
