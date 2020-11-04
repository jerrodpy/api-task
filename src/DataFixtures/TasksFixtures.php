<?php

namespace App\DataFixtures;

use App\Entity\Tasks;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TasksFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $task = new Tasks();
        $task->setTitle('Подготовить отчет');
        $task->setDescription('Для бухгалтерии');
        $task->setExecuted(1);

        $manager->persist($task);

        $task2 = new Tasks();
        $task2->setTitle('Обзвон клиентов');
        $task2->setDescription('Сбор холодных лидов');
        $task2->setExecuted(0);

        $manager->persist($task2);

        $manager->flush();
    }
}
