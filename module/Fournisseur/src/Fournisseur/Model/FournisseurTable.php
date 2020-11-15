<?php

namespace Fournisseur\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class FournisseurTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()//paginate
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getFournisseur($id)//search id
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function getCompte($idC)//search id
    {
        $idC  = (string) $idC;
        $rowset = $this->tableGateway->select(array('n_compte' => $idC));
        $row = $rowset->current();
        
        return $row;
    }

    public function saveFournisseur(Fournisseur $fournisseur)
    {
        $data = array(
            'intitule' => $fournisseur->intitule,
            'mobile'  => $fournisseur->mobile,
            'n_compte'  => $fournisseur->n_compte,
            'email'  => $fournisseur->email,
        );

        $id = (int) $fournisseur->id;
        $cc= (string) $fournisseur->n_compte;
        $villep=(string) $fournisseur->ville;
        $villef=(string) $fournisseur->villef;
        //$villeE=(string) $fournisseur->villeE;

        if ($id == 0) {
            if(!$this->getCompte($cc)){
               $this->tableGateway->insert($data); 
               //
$last_id=$this->tableGateway->lastInsertValue; //not work
$adapter=$this->tableGateway->getAdapter(); 
$idlast=$adapter->getDriver()->getLastGeneratedValue("id");
$userTable = new TableGateway('fou__address', $adapter); //


if($villep){
 $data_arr = array(
        'id_frn' =>$idlast,
        'ville'  =>$fournisseur->ville,
        'cp'  =>$fournisseur->cp,
        'fix'  =>$fournisseur->fix,
        'pays'  =>$fournisseur->pays,
        'type_Addr'  =>'Address Principal',


        );
$userTable->insert($data_arr); 



}

if($villef){
 $data_arr = array(
        'id_frn' =>$idlast,
        'ville'  =>$fournisseur->villef,
        'cp'  =>$fournisseur->cpf,
        'fix'  =>$fournisseur->fixf,
        'pays'  =>$fournisseur->paysf,
        'type_Addr'  =>'Address Facturation',


        );
$userTable->insert($data_arr);   
}

//adress factur



               //
           }else{
           //$this->view->message = "Fail to save your drawing.";
            //nothing redirect or flash mess
           }
            
        } else {
            if ($this->getFournisseur($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('fournisseur id does not exist');
            }
        }
    }

    public function deleteFournisseur($id)
    {
        $this->tableGateway->delete(array('id' => (int) $id));
    }
}