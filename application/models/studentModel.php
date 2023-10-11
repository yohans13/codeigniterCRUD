<?php 
class studentModel extends CI_Model{
   var $stID;
   var $Name;
   var $Address;
   var $Tele;

   /**
    * Get the value of stID
    */ 
   public function getStID()
   {
      return $this->stID;
   }

   /**
    * Set the value of stID
    *
    * @return  self
    */ 
   public function setStID($stID)
   {
      $this->stID = $stID;

      return $this;
   }

   /**
    * Get the value of Name
    */ 
   public function getName()
   {
      return $this->Name;
   }

   /**
    * Set the value of Name
    *
    * @return  self
    */ 
   public function setName($Name)
   {
      $this->Name = $Name;

      return $this;
   }

   /**
    * Get the value of Address
    */ 
   public function getAddress()
   {
      return $this->Address;
   }

   /**
    * Set the value of Address
    *
    * @return  self
    */ 
   public function setAddress($Address)
   {
      $this->Address = $Address;

      return $this;
   }

   /**
    * Get the value of Tele
    */ 
   public function getTele()
   {
      return $this->Tele;
   }

   /**
    * Set the value of Tele
    *
    * @return  self
    */ 
   public function setTele($Tele)
   {
      $this->Tele = $Tele;

      return $this;
   }
}

?>