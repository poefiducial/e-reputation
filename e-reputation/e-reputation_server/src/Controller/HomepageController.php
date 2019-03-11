<?php
/**
 * Created by PhpStorm.
 * User: joseph.deviry
 * Date: 05/03/2019
 * Time: 14:59
 */

namespace App\Controller;


use App\Entity\User;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HomepageController extends AbstractController
{
    /**
     * @Route("/essai", methods={"GET"})
     */
    public function envoie(Request $req) {
        $content = $req->getContent();


        $output =  "Message de Symfony : ok";

        return new Response($output);
    }

    /**
 * @Route("/user", methods={"POST"})
 */
    public function createUser(Request $req) {
        $content = $req->getContent();
        $data = json_decode($content);

        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setUseremail($data->email);
        $user->setUserlastname($data->lastname);
        $user->setUserfirstname($data->firstname);
        $user->setUserpassword($data->password);
        $entityManager->persist($user);
        $entityManager->flush();

        return new Response($user->getIduser());
    }

    /**
     * @Route("/connexion", methods={ "POST" })
     */
    public function connexion(Request $req) {
        $content = $req->getContent();
        $data = json_decode($content);

        $userRepository = $this->getDoctrine()->getRepository(user::class);

        $user = $userRepository->findOneBy([
            "login" => $data->login,
            "password" => $data->password
        ]);

        if ($user === null) {
            return new Response("null");
        } else {
            return new Response($user->getIduser());
        }
    }
}
