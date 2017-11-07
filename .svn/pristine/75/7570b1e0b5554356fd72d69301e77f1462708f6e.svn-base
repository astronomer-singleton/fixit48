<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\RepRequest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/rep_request", name="admin_rep_request_list")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $username = '';
        if (isset($user)) {
            $username = ' ['.$user->getEmail().'] ';
        }

        $rep_requests = $this->getDoctrine()
            ->getRepository('AppBundle:RepRequest')
            ->findAll();

        return $this->render('admin/rep_request/list.html.twig', array(
            'rep_requests' => $rep_requests,
            'username' => $username,
        ));
    }
}