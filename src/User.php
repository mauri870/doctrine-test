<?php
namespace Test;

use Doctrine\Common\Collections\ArrayCollection;
// src/User.php
/**
 * @Entity @Table(name="users")
 */
class User
{
  /**
    * @Id @GeneratedValue @Column(type="integer")
    * @var int
    */
   protected $id;
   /**
    * @Column(type="string")
    * @var string
    */
   protected $name;

   private $reportedBugs = null;
   private $assignedBugs = null;

    public function __construct()
   {
      $this->reportedBugs = new ArrayCollection();
      $this->assignedBugs = new ArrayCollection();
   }

   public function addReportedBug($bug)
   {
       $this->reportedBugs[] = $bug;
   }

   public function assignedToBug($bug)
   {
       $this->assignedBugs[] = $bug;
   }

   public function getId()
   {
       return $this->id;
   }

   public function getName()
   {
       return $this->name;
   }

   public function setName($name)
   {
       $this->name = $name;
   }
}
