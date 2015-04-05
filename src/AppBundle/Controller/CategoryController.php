<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;

/**
 * Category controller.
 *
 * @Route("/category")
 */
class CategoryController extends Controller
{

    /**
     * Lists all Category entities.
     *
     * @Route("/", name="category")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('AppBundle:Category')->findAll();

        return $this->render('AppBundle:Category:index.html.twig', [
                'category' => $category,]
        );
    }
    /**
     * Creates a new Category category.
     *
     * @Route("/", name="category_create")
     * @Method("POST")
     * @Template("AppBundle:Category:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $category = new Category();
        $form = $this->createCreateForm($category);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect($this->generateUrl('category_show', array('id' => $category->getId())));
        }

        return array(
            'category' => $category,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Category.
     *
     * @param Category $category The category
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Category $category)
    {
        $form = $this->createForm(new CategoryType(), $category, array(
            'action' => $this->generateUrl('category_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Category category.
     *
     * @Route("/new", name="category_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $category = new Category();
        $form   = $this->createCreateForm($category);

        return array(
            'category' => $category,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Category category.
     *
     * @Route("/{id}", name="category_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('AppBundle:Category')->find($id);

        if (!$category) {
            throw $this->createNotFoundException('Unable to find Category category.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'category'      => $category,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Category category.
     *
     * @Route("/{id}/edit", name="category_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('AppBundle:Category')->find($id);

        if (!$category) {
            throw $this->createNotFoundException('Unable to find Category category.');
        }

        $editForm = $this->createEditForm($category);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'category'      => $category,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Category category.
    *
    * @param Category $category The category
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Category $category)
    {
        $form = $this->createForm(new CategoryType(), $category, array(
            'action' => $this->generateUrl('category_update', array('id' => $category->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Category category.
     *
     * @Route("/{id}", name="category_update")
     * @Method("PUT")
     * @Template("AppBundle:Category:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('AppBundle:Category')->find($id);

        if (!$category) {
            throw $this->createNotFoundException('Unable to find Category category.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($category);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('category_edit', array('id' => $id)));
        }

        return array(
            'category'      => $category,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Category category.
     *
     * @Route("/{id}", name="category_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $category = $em->getRepository('AppBundle:Category')->find($id);

            if (!$category) {
                throw $this->createNotFoundException('Unable to find Category category.');
            }

            $em->remove($category);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('category'));
    }

    /**
     * Creates a form to delete a Category category by id.
     *
     * @param mixed $id The category id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('category_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
