<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Tag;
use AppBundle\Form\TagType;

/**
 * Tag controller.
 *
 * @Route("/tag")
 */
class TagController extends Controller
{

    /**
     * Lists all Tag entities.
     *
     * @Route("/", name="tag")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('AppBundle:Tag')->findAll();

        return $this->render('AppBundle:Tag:index.html.twig', [
                'tags' => $tags,]
        );
    }
    /**
     * Creates a new Tag tag.
     *
     * @Route("/", name="tag_create")
     * @Method("POST")
     * @Template("AppBundle:Tag:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $tag = new Tag();
        $form = $this->createCreateForm($tag);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            return $this->redirect($this->generateUrl('tag_show', array('id' => $tag->getId())));
        }

        return array(
            'tag' => $tag,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Tag tag.
     *
     * @param Tag $tag The tag
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Tag $tag)
    {
        $form = $this->createForm(new TagType(), $tag, array(
            'action' => $this->generateUrl('tag_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tag tag.
     *
     * @Route("/new", name="tag_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $tag = new Tag();
        $form   = $this->createCreateForm($tag);

        return array(
            'tag' => $tag,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Tag tag.
     *
     * @Route("/{id}", name="tag_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $tag = $em->getRepository('AppBundle:Tag')->find($id);

        if (!$tag) {
            throw $this->createNotFoundException('Unable to find Tag tag.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'tag'      => $tag,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Tag tag.
     *
     * @Route("/{id}/edit", name="tag_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $tag = $em->getRepository('AppBundle:Tag')->find($id);

        if (!$tag) {
            throw $this->createNotFoundException('Unable to find Tag tag.');
        }

        $editForm = $this->createEditForm($tag);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'tag'      => $tag,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Tag tag.
    *
    * @param Tag $tag The tag
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tag $tag)
    {
        $form = $this->createForm(new TagType(), $tag, array(
            'action' => $this->generateUrl('tag_update', array('id' => $tag->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tag tag.
     *
     * @Route("/{id}", name="tag_update")
     * @Method("PUT")
     * @Template("AppBundle:Tag:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $tag = $em->getRepository('AppBundle:Tag')->find($id);

        if (!$tag) {
            throw $this->createNotFoundException('Unable to find Tag tag.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($tag);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tag_edit', array('id' => $id)));
        }

        return array(
            'tag'      => $tag,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Tag tag.
     *
     * @Route("/{id}", name="tag_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $tag = $em->getRepository('AppBundle:Tag')->find($id);

            if (!$tag) {
                throw $this->createNotFoundException('Unable to find Tag tag.');
            }

            $em->remove($tag);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tag'));
    }

    /**
     * Creates a form to delete a Tag tag by id.
     *
     * @param mixed $id The tag id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tag_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
