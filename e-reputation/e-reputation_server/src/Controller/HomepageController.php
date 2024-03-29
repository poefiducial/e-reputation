<?php
/**
 * Created by PhpStorm.
 * User: joseph.deviry
 * Date: 05/03/2019
 * Time: 14:59
 */

namespace App\Controller;


use App\Entity\User;
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
        var_dump($data);
        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();

        $user->setUserlastname($data->lastname);
        $user->setUserfirstname($data->firstname);
        $user->setUseremail($data->email);
        $user->setUserlogin($data->email);
        $passwordHashed = password_hash($data->password,PASSWORD_BCRYPT,['cost' => 13]);
        $user->setUserpassword($passwordHashed);


        if ($user === null) {
            return new Response("null");
        } else {
            $entityManager->persist($user);
            $entityManager->flush();
            return new Response("Inscription reussie".(string)$user->getIduser());
        }

    }

    /**
     *
     * @Route("/connexion", methods={ "POST" })
     */
    public function check(Request $req) {
        $content = $req->getContent();
        $data = json_decode($content);
        $password=$data->password;

        $userRepository = $this->getDoctrine()->getRepository(user::class);

        $user = $userRepository->findOneBy([
            "useremail" => $data->email
        ]);
        $userPasswordHashee=$user->getUserpassword();
//        $resultat = $userPasswordHashee;
        if ($user === null) {
            return new Response("vos identifiants sont incorrectes, veuillez reessayer 1");
        } else {
              if(password_verify($password,$userPasswordHashee)) {
                return new Response("Connection authorisee ".(string)$user);
            } else {
                return new Response('vos identifiants sont incorrectes, veuillez reessayer 2');
            }
        }

    }

}
