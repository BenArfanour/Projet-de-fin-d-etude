<?php
/**
 * Created by PhpStorm.
 * User: x0Geek
 * Date: 16/05/2017
 * Time: 19:34
 */

namespace AuthentificationBundle\Controller;



use AuthentificationBundle\Entity\user;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class attackController extends  Controller
{

    public function attackAction() {
        $user = new user();
        $form = $this->createForm('FOS\UserBundle\Form\Type\ChangePasswordFormType', $user);
        $this->render('@Authentification/ChangePassword/changePassword.html.twig',array('form'=>$form));
    }

}