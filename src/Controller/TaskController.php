<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Repository\TasksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TaskController
 * @package App\Controller
 */
class TaskController extends AbstractController
{
//    private $tasksRepository;
//
//    public function __construct(TasksRepository $tasksRepository)
//    {
//        $this->tasksRepository = $tasksRepository;
//    }

    /**
     * @Route("/api/executed/{id}/{action}", name="executed_action_route", methods={"GET"})
     *
     * @param Tasks $tasks
     * @param bool  $action
     *
     * @return Response
     */
    public function executedAction(Tasks $tasks, bool $action): Response
    {
        if($action) {
            $tasks->setExecuted($action);
        } else {
            $tasks->setExecuted(0);
        }

        return new Response();
    }
}