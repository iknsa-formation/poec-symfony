<?php

namespace Aston\AppBundle\Controller;

use Aston\AppBundle\Entity\Ecole;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ecole controller.
 *
 */
class EcoleController extends Controller
{
    /**
     * Lists all ecole entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ecoles = $em->getRepository('AstonAppBundle:Ecole')->findAll();

        return $this->render('ecole/index.html.twig', array(
            'ecoles' => $ecoles,
        ));
    }

    /**
     * Creates a new ecole entity.
     *
     */
    public function newAction(Request $request)
    {
        $ecole = new Ecole();
        $form = $this->createForm('Aston\AppBundle\Form\EcoleType', $ecole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ecole);
            $em->flush();

            return $this->redirectToRoute('ecole_show', array('id' => $ecole->getId()));
        }

        return $this->render('ecole/new.html.twig', array(
            'ecole' => $ecole,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ecole entity.
     *
     */
    public function showAction(Ecole $ecole)
    {
        $deleteForm = $this->createDeleteForm($ecole);

        return $this->render('ecole/show.html.twig', array(
            'ecole' => $ecole,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ecole entity.
     *
     */
    public function editAction(Request $request, Ecole $ecole)
    {
        $deleteForm = $this->createDeleteForm($ecole);
        $editForm = $this->createForm('Aston\AppBundle\Form\EcoleType', $ecole);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ecole_edit', array('id' => $ecole->getId()));
        }

        return $this->render('ecole/edit.html.twig', array(
            'ecole' => $ecole,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ecole entity.
     *
     */
    public function deleteAction(Request $request, Ecole $ecole)
    {
        $form = $this->createDeleteForm($ecole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ecole);
            $em->flush();
        }

        return $this->redirectToRoute('ecole_index');
    }

    /**
     * Creates a form to delete a ecole entity.
     *
     * @param Ecole $ecole The ecole entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ecole $ecole)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ecole_delete', array('id' => $ecole->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
