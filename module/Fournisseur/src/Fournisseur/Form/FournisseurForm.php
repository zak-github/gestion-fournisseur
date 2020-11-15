<?php

namespace Fournisseur\Form;

use Zend\Form\Form;
use Zend\Form\Element;

class FournisseurForm extends Form
{
    public function __construct($name = null)
    {
        $this->element();

    }

    public function element()
    {

        // we want to ignore the name passed
        parent::__construct('fournisseur');


        $this->add(array(
            'name' => 'id',

            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'intitule',
            'type' => 'Text',
            'options' => array(
                'label' => 'intitule',
            ),
            'attributes' => array(
                'class' => 'form-control',

            ),
        ));
        $this->add(array(
            'name' => 'mobile',
            'attributes' => array(
                'class' => 'form-control',
            ),
            'type' => 'Text',
            'options' => array(
                'label' => 'mobile',
            ),


        ));

        $this->add(array(
            'name' => 'n_compte',

            'attributes' => array(
                'class' => 'form-control',
                'id' => 'Auto',
            ),
            'type' => 'Text',
            'options' => array(
                'label' => 'N° Compte',
            ),


        ));
        $this->add(array(
            'name' => 'email',
            'attributes' => array(
                'class' => 'form-control',
            ),
            'type' => 'Text',
            'options' => array(
                'label' => 'Email',
            ),


        ));


//*********array address
  $this->add(array(
            'name' => 'ville',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder'=>'Ville'
            ),
            'type' => 'Text',
            'options' => array(
                'label' => 'ville',
            ),


        ));
    $this->add(array(
            'name' => 'fix',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder'=>'Téléphone Fix'
            ),
            'type' => 'Text',
            'options' => array(
                'label' => 'Fix',
            ),


        ));
      $this->add(array(
            'name' => 'cp',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder'=>'code postal'
            ),
            'type' => 'Text',
            'options' => array(
                'label' => 'Code Postal',
            ),


        ));
      $this->add(array(
            'name' => 'pays',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder'=>'Pays'
            ),
            'type' => 'Text',
            'options' => array(
                'label' => '',
            ),


        ));

        //******************end var address

//*********array address fact
  $this->add(array(
            'name' => 'villef',

            
            'attributes' => array(
                'class' => 'form-control',
                'placeholder'=>'Ville'
            ),
            'type' => 'Text',
            'options' => array(
                'label' => 'ville',
            ),


        ));
    $this->add(array(
            'name' => 'fixf',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder'=>'Téléphone Fix'
            ),
            'type' => 'Text',
            'options' => array(
                'label' => 'Fix',
            ),


        ));
      $this->add(array(
            'name' => 'cpf',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder'=>'code postal'
            ),
            'type' => 'Text',
            'options' => array(
                'label' => 'Code Postal',
            ),


        ));
      $this->add(array(
            'name' => 'paysf',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder'=>'Pays'
            ),
            'type' => 'Text',
            'options' => array(
                'label' => '',
            ),


        ));

        //******************end var address
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
                'class'=>'btn btn-info',
            ),
            'options' => array(
                'label' => 'nouveau',
            ),
        ));



    }


}