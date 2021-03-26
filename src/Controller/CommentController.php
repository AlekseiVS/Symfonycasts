<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route ("comments/{id}/vote/{direction<up|down>}", methods="POST")
     */
    public function commentVote($id, $direction)
    {
        if ($direction == 'up') {
            $currentCoutn = rand(7,100);

        } else {
            $currentCoutn = rand(0,5);
        }

        return $this->json(['votes' => $currentCoutn]);
    }


}