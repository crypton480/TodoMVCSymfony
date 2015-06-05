<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
        
    public function indexAction()
    {
        return $this->redirect($this->generateURL('show'));
    }

    public function showAction(Request $request)
    {
        
        $task = new Task();

        $form = $this->createFormBuilder($task)
                    ->add('name', 'text')
                    ->add('complete', 'hidden', array('empty_data'=>0))
                    ->add('sessionkey', 'hidden', array('empty_data'=>'qwerty'))
                    ->getForm();


        $form->handleRequest($request);

        if($form->isValid())
        {
            $name = $form['name']->getData();
            $inputTask = new Task();
            $inputTask->setName($name);
            $inputTask->setComplete(0);
            $inputTask->setSessionkey('qwerty');

            $em = $this->getDoctrine()->getManager();

            $em->persist($task);
            $em->flush();
        }

        $tasksList = $this->getDoctrine()
            ->getRepository('AppBundle:Task')
            ->findAll();

        return $this->render('default/show.html.twig', array(
            'form' => $form->createView(),
            'TasksList' => $tasksList
        ));
    }

    /**
     * @Route("/app/update/{id}")
     */
    public function updateAction(Request $request, $id)
    {   
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($id);

        if(!$task)
        {
            throw $this->createNotFoundException(
                'No task found for id '.$id
            );
        }

        $form = $this->createFormBuilder($task)
                    ->add('name', 'text')
                    ->getForm();

        $form->handleRequest($request);

        if($form->isValid())
        {
            $name = $form['name']->getData();
            $task->setName($name);
            $em->flush();
            return $this->redirect($this->generateURL('show'));
        }

        return $this->render('default/update.html.twig', array(
            'form' => $form->createView(),
        ));
        

        
    }


    /**
     * @Route("/app/markcomplete/{id}")
     */ 
    public function markCompleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($id);

        if (!$task) {
            throw $this->createNotFoundException(
                'No task found for id '.$id
            );
        }

        if($task->getComplete() == 1)
            $task->setComplete(0);
        else
            $task->setComplete(1);

        $em->flush();

        return $this->redirect($this->generateURL('show'));
    }

    /**
     * @Route("/app/deletetask/{id}")
     */
    public function deleteTaskAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($id);

        if(!$task)
        {
            throw $this->createNotFoundException(
                'No task found for id '.$id
            );
        }

        $em->remove($task);
        $em->flush();

        return $this->redirect($this->generateURL('show'));
    }

    /**
     * @Route("/app/deletecompleted/")
     */
    public function deleteCompletedAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT t FROM AppBundle:Task t WHERE t.complete = :bool")->setParameter('bool', '1');
        
        $taskList = $query->getResult();
        foreach ($taskList as $task)
        {
            $em->remove($task);
        }
    
        $em->flush();

        return $this->redirect($this->generateURL('show'));
        
    }

}
