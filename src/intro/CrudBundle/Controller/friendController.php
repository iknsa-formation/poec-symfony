<?php

namespace intro\CrudBundle\Controller;

use intro\CrudBundle\Entity\friend;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Friend controller.
 *
 */
class friendController extends Controller
{
    /**
     * Lists all friend entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $friends = $em->getRepository('introCrudBundle:friend')->findAll();

        return $this->render('friend/index.html.twig', array(
            'friends' => $friends,
        ));
    }

    /**
     * Creates a new friend entity.
     *
     */
    public function newAction(Request $request)
    {
        $friend = new Friend();
        $form = $this->createForm('intro\CrudBundle\Form\friendType', $friend);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($friend);
            $em->flush();

            return $this->redirectToRoute('friend_show', array('id' => $friend->getId()));
        }

        return $this->render('friend/new.html.twig', array(
            'friend' => $friend,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a friend entity.
     *
     */
    public function showAction(friend $friend)
    {
        $deleteForm = $this->createDeleteForm($friend);

        return $this->render('friend/show.html.twig', array(
            'friend' => $friend,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing friend entity.
     *
     */
    public function editAction(Request $request, friend $friend)
    {
        $deleteForm = $this->createDeleteForm($friend);
        $editForm = $this->createForm('intro\CrudBundle\Form\friendType', $friend);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('friend_edit', array('id' => $friend->getId()));
        }

        return $this->render('friend/edit.html.twig', array(
            'friend' => $friend,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a friend entity.
     *
     */
    public function deleteAction(Request $request, friend $friend)
    {
        $form = $this->createDeleteForm($friend);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($friend);
            $em->flush();
        }

        return $this->redirectToRoute('friend_index');
    }

    /**
     * Creates a form to delete a friend entity.
     *
     * @param friend $friend The friend entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(friend $friend)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('friend_delete', array('id' => $friend->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
