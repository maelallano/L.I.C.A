<?php
/**
 * Created by PhpStorm.
 * User: mallano
 * Date: 26/06/2018
 * Time: 15:38
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class fightPageController extends Controller
{
    /**
     * @Route("/fightPage", name="fightPage")
     */
    public function index()
    {
        return $this->render('fightPage/index.html.twig', [
            'controller_name' => 'FightPageController',
            'title' => "Paris"
        ]);
    }
}