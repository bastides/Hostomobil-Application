<?php

namespace HMA\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Fiche_vehicule
 *
 * @ORM\Table(name="fiche_vehicule")
 * @ORM\Entity(repositoryClass="HMA\AppBundle\Repository\Fiche_vehiculeRepository")
 */
class Fiche_vehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="idfiche_vehicule", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=50, nullable=true)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=50, nullable=true)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="immat", type="string", length=15, nullable=true)
     * @Assert\Regex(
     *  pattern="/[A-Za-z0-9-\/]/",
     *  message="Immatriculation inconnue"
     * )
     */
    private $immat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mec", type="date", nullable=true)
     */
    private $mec;

    /**
     * @var int
     *
     * @ORM\Column(name="kilometres", type="integer", nullable=true)
     */
    private $kilometres;

    /**
     * @var string
     *
     * @ORM\Column(name="motorisation", type="string", length=50, nullable=true)
     */
    private $motorisation;

    /**
     * @var string
     *
     * @ORM\Column(name="typemoteur", type="string", length=50, nullable=true)
     */
    private $typemoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sn", type="string", length=255, nullable=true)
     */
    private $sn;

    /**
     * @var string
     *
     * @ORM\Column(name="teinte", type="string", length=50, nullable=true)
     */
    private $teinte;

    /**
     * @var string
     *
     * @ORM\Column(name="pneudimav", type="string", length=50, nullable=true)
     */
    private $pneudimav;

    /**
     * @var string
     *
     * @ORM\Column(name="pneumodav", type="string", length=50, nullable=true)
     */
    private $pneumodav;

    /**
     * @var string
     *
     * @ORM\Column(name="pneudimar", type="string", length=50, nullable=true)
     */
    private $pneudimar;

    /**
     * @var string
     *
     * @ORM\Column(name="pneumodar", type="string", length=50, nullable=true)
     */
    private $pneumodar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedernieremodification", type="date", nullable=true)
     */
    private $datedernieremodification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ct", type="date", nullable=true)
     */
    private $ct;

    /**
     * @ORM\ManyToOne(targetEntity="HMA\AppBundle\Entity\Fiche_client", cascade={"persist"})
     * @ORM\JoinColumn(name="idfiche_client", referencedColumnName="idfiche_client", nullable=false)
     */
     private $ficheclient;

    /**
     * Set marque
     *
     * @param string $marque
     * @return Fiche_vehicule
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return Fiche_vehicule
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set immat
     *
     * @param string $immat
     * @return Fiche_vehicule
     */
    public function setImmat($immat)
    {
        $this->immat = $immat;

        return $this;
    }

    /**
     * Get immat
     *
     * @return string
     */
    public function getImmat()
    {
        return $this->immat;
    }

    /**
     * Set mec
     *
     * @param \DateTime $mec
     * @return Fiche_vehicule
     */
    public function setMec($mec)
    {
        $this->mec = $mec;

        return $this;
    }

    /**
     * Get mec
     *
     * @return \DateTime
     */
    public function getMec()
    {
        return $this->mec;
    }

    /**
     * Set kilometres
     *
     * @param integer $kilometres
     * @return Fiche_vehicule
     */
    public function setKilometres($kilometres)
    {
        $this->kilometres = $kilometres;

        return $this;
    }

    /**
     * Get kilometres
     *
     * @return integer
     */
    public function getKilometres()
    {
        return $this->kilometres;
    }

    /**
     * Set motorisation
     *
     * @param string $motorisation
     * @return Fiche_vehicule
     */
    public function setMotorisation($motorisation)
    {
        $this->motorisation = $motorisation;

        return $this;
    }

    /**
     * Get motorisation
     *
     * @return string
     */
    public function getMotorisation()
    {
        return $this->motorisation;
    }

    /**
     * Set typemoteur
     *
     * @param string $typemoteur
     * @return Fiche_vehicule
     */
    public function setTypemoteur($typemoteur)
    {
        $this->typemoteur = $typemoteur;

        return $this;
    }

    /**
     * Get typemoteur
     *
     * @return string
     */
    public function getTypemoteur()
    {
        return $this->typemoteur;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Fiche_vehicule
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set sn
     *
     * @param string $sn
     * @return Fiche_vehicule
     */
    public function setSn($sn)
    {
        $this->sn = $sn;

        return $this;
    }

    /**
     * Get sn
     *
     * @return string
     */
    public function getSn()
    {
        return $this->sn;
    }

    /**
     * Set teinte
     *
     * @param string $teinte
     * @return Fiche_vehicule
     */
    public function setTeinte($teinte)
    {
        $this->teinte = $teinte;

        return $this;
    }

    /**
     * Get teinte
     *
     * @return string
     */
    public function getTeinte()
    {
        return $this->teinte;
    }

    /**
     * Set pneudimav
     *
     * @param string $pneudimav
     * @return Fiche_vehicule
     */
    public function setPneudimav($pneudimav)
    {
        $this->pneudimav = $pneudimav;

        return $this;
    }

    /**
     * Get pneudimav
     *
     * @return string
     */
    public function getPneudimav()
    {
        return $this->pneudimav;
    }

    /**
     * Set pneumodav
     *
     * @param string $pneumodav
     * @return Fiche_vehicule
     */
    public function setPneumodav($pneumodav)
    {
        $this->pneumodav = $pneumodav;

        return $this;
    }

    /**
     * Get pneumodav
     *
     * @return string
     */
    public function getPneumodav()
    {
        return $this->pneumodav;
    }

    /**
     * Set pneudimar
     *
     * @param string $pneudimar
     * @return Fiche_vehicule
     */
    public function setPneudimar($pneudimar)
    {
        $this->pneudimar = $pneudimar;

        return $this;
    }

    /**
     * Get pneudimar
     *
     * @return string
     */
    public function getPneudimar()
    {
        return $this->pneudimar;
    }

    /**
     * Set pneumodar
     *
     * @param string $pneumodar
     * @return Fiche_vehicule
     */
    public function setPneumodar($pneumodar)
    {
        $this->pneumodar = $pneumodar;

        return $this;
    }

    /**
     * Get pneumodar
     *
     * @return string
     */
    public function getPneumodar()
    {
        return $this->pneumodar;
    }

    /**
     * Set datedernieremodification
     *
     * @param \DateTime $datedernieremodification
     * @return Fiche_vehicule
     */
    public function setDatedernieremodification($datedernieremodification)
    {
        $this->datedernieremodification = $datedernieremodification;

        return $this;
    }

    /**
     * Get datedernieremodification
     *
     * @return \DateTime
     */
    public function getDatedernieremodification()
    {
        return $this->datedernieremodification;
    }

    /**
     * Set ct
     *
     * @param \DateTime $ct
     * @return Fiche_vehicule
     */
    public function setCt($ct)
    {
        $this->ct = $ct;

        return $this;
    }

    /**
     * Get ct
     *
     * @return \DateTime
     */
    public function getCt()
    {
        return $this->ct;
    }

    /**
     * Set ficheclient
     *
     * @param \HMA\AppBundle\Entity\Fiche_client $ficheclient
     * @return Fiche_vehicule
     */
    public function setFicheclient(\HMA\AppBundle\Entity\Fiche_client $ficheclient)
    {
        $this->ficheclient = $ficheclient;

        return $this;
    }

    /**
     * Get ficheclient
     *
     * @return \HMA\AppBundle\Entity\Fiche_client
     */
    public function getFicheclient()
    {
        return $this->ficheclient;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
