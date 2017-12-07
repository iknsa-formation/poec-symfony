<?php

namespace ASTON\AppBundle\Controller;

use ASTON\AppBundle\Entity\etudiants;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Etudiant controller.
 *
 */
class etudiantsController extends Controller
{
    /**
     * Lists all etudiant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etudiants = $em->getRepository('ASTONAppBundle:etudiants')->findAll();

        return $this->render('etudiants/index.html.twig', array(
            'etudiants' => $etudiants,
        ));
    }

    /**
     * Creates a new etudiant entity.
     *
     */
    public function newAction(Request $request)
    {
        $etudiant = new etudiants();
        $form = $this->createForm('ASTON\AppBundle\Form\etudiantsType', $etudiant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->flush();

            return $this->redirectToRoute('etudiants_show', array('id' => $etudiant->getId()));
        }

        return $this->render('etudiants/new.html.twig', array(
            'etudiant' => $etudiant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a etudiant entity.
     *
     */
    public function showAction(etudiants $etudiant)
    {
        $deleteForm = $this->createDeleteForm($etudiant);

        return $this->render('etudiants/show.html.twig', array(
            'etudiant' => $etudiant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing etudiant entity.
     *
     */
    public function editAction(Request $request, etudiants $etudiant)
    {
        $deleteForm = $this->createDeleteForm($etudiant);
        $editForm = $this->createForm('ASTON\AppBundle\Form\etudiantsType', $etudiant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('etudiants_edit', array('id' => $etudiant->getId()));
        }

        return $this->render('etudiants/edit.html.twig', array(
            'etudiant' => $etudiant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a etudiant entity.
     *
     */
    public function deleteAction(Request $request, etudiants $etudiant)
    {
        $form = $this->createDeleteForm($etudiant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etudiant);
            $em->flush();
        }

        return $this->redirectToRoute('etudiants_index');
    }

    /**
     * Creates a form to delete a etudiant entity.
     *
     * @param etudiants $etudiant The etudiant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(etudiants $etudiant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etudiants_delete', array('id' => $etudiant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
