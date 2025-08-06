<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PGenautoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_GENAUTO')]
#[ORM\Entity(repositoryClass: PGenautoRepository::class)]
class PGenauto
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "GE_ArtNumerot", type: Types::SMALLINT, nullable: true)]
    private ?int $geArtnumerot = null;

    #[ORM\Column(name: "GE_ArtLen", type: Types::SMALLINT, nullable: true)]
    private ?int $geArtlen = null;

    #[ORM\Column(name: "GE_ArtTypeRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geArttyperacine = null;

    #[ORM\Column(name: "GE_ArtRacine", length: 19, nullable: true)]
    private ?string $geArtracine = null;

    #[ORM\Column(name: "GE_GamNumerot", type: Types::SMALLINT, nullable: true)]
    private ?int $geGamnumerot = null;

    #[ORM\Column(name: "GE_GamIncrement", type: Types::SMALLINT, nullable: true)]
    private ?int $geGamincrement = null;

    #[ORM\Column(name: "GE_GamLen", type: Types::SMALLINT, nullable: true)]
    private ?int $geGamlen = null;

    #[ORM\Column(name: "GE_GamTypeRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geGamtyperacine = null;

    #[ORM\Column(name: "GE_GamLenRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geGamlenracine = null;

    #[ORM\Column(name: "GE_GamRacine", length: 19, nullable: true)]
    private ?string $geGamracine = null;

    #[ORM\Column(name: "GE_GamTypeComplt", type: Types::SMALLINT, nullable: true)]
    private ?int $geGamtypecomplt = null;

    #[ORM\Column(name: "GE_GamLenComplt", type: Types::SMALLINT, nullable: true)]
    private ?int $geGamlencomplt = null;

    #[ORM\Column(name: "GE_CondiNumerot", type: Types::SMALLINT, nullable: true)]
    private ?int $geCondinumerot = null;

    #[ORM\Column(name: "GE_CondiIncrement", type: Types::SMALLINT, nullable: true)]
    private ?int $geCondiincrement = null;

    #[ORM\Column(name: "GE_CondiLen", type: Types::SMALLINT, nullable: true)]
    private ?int $geCondilen = null;

    #[ORM\Column(name: "GE_CondiTypeRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geCondityperacine = null;

    #[ORM\Column(name: "GE_CondiLenRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geCondilenracine = null;

    #[ORM\Column(name: "GE_CondiRacine", length: 19, nullable: true)]
    private ?string $geCondiracine = null;

    #[ORM\Column(name: "GE_CondiTypeComplt", type: Types::SMALLINT, nullable: true)]
    private ?int $geConditypecomplt = null;

    #[ORM\Column(name: "GE_CondiLenComplt", type: Types::SMALLINT, nullable: true)]
    private ?int $geCondilencomplt = null;

    #[ORM\Column(name: "GE_CBArtNumerot", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbartnumerot = null;

    #[ORM\Column(name: "GE_CBArtNorme", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbartnorme = null;

    #[ORM\Column(name: "GE_CBArtLen", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbartlen = null;

    #[ORM\Column(name: "GE_CBArtTypeRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbarttyperacine = null;

    #[ORM\Column(name: "GE_CBArtLenRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbartlenracine = null;

    #[ORM\Column(name: "GE_CBArtRacine", length: 19, nullable: true)]
    private ?string $geCbartracine = null;

    #[ORM\Column(name: "GE_CBGamNumerot", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbgamnumerot = null;

    #[ORM\Column(name: "GE_CBGamIncrement", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbgamincrement = null;

    #[ORM\Column(name: "GE_CBGamNorme", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbgamnorme = null;

    #[ORM\Column(name: "GE_CBGamLen", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbgamlen = null;

    #[ORM\Column(name: "GE_CBGamTypeRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbgamtyperacine = null;

    #[ORM\Column(name: "GE_CBGamLenRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbgamlenracine = null;

    #[ORM\Column(name: "GE_CBGamRacine", length: 19, nullable: true)]
    private ?string $geCbgamracine = null;

    #[ORM\Column(name: "GE_CBGamTypeComplt", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbgamtypecomplt = null;

    #[ORM\Column(name: "GE_CBGamLenComplt", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbgamlencomplt = null;

    #[ORM\Column(name: "GE_CBCondiNumerot", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbcondinumerot = null;

    #[ORM\Column(name: "GE_CBCondiIncrement", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbcondiincrement = null;

    #[ORM\Column(name: "GE_CBCondiNorme", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbcondinorme = null;

    #[ORM\Column(name: "GE_CBCondiLen", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbcondilen = null;

    #[ORM\Column(name: "GE_CBCondiTypeRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbcondityperacine = null;

    #[ORM\Column(name: "GE_CBCondiLenRacine", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbcondilenracine = null;

    #[ORM\Column(name: "GE_CBCondiRacine", length: 19, nullable: true)]
    private ?string $geCbcondiracine = null;

    #[ORM\Column(name: "GE_CBCondiTypeComplt", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbconditypecomplt = null;

    #[ORM\Column(name: "GE_CBCondiLenComplt", type: Types::SMALLINT, nullable: true)]
    private ?int $geCbcondilencomplt = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getGeArtnumerot(): ?int
    {
        return $this->geArtnumerot;
    }

    public function setGeArtnumerot(?int $geArtnumerot): static
    {
        $this->geArtnumerot = $geArtnumerot;

        return $this;
    }

    public function getGeArtlen(): ?int
    {
        return $this->geArtlen;
    }

    public function setGeArtlen(?int $geArtlen): static
    {
        $this->geArtlen = $geArtlen;

        return $this;
    }

    public function getGeArttyperacine(): ?int
    {
        return $this->geArttyperacine;
    }

    public function setGeArttyperacine(?int $geArttyperacine): static
    {
        $this->geArttyperacine = $geArttyperacine;

        return $this;
    }

    public function getGeArtracine(): ?string
    {
        return $this->geArtracine;
    }

    public function setGeArtracine(?string $geArtracine): static
    {
        $this->geArtracine = $geArtracine;

        return $this;
    }

    public function getGeGamnumerot(): ?int
    {
        return $this->geGamnumerot;
    }

    public function setGeGamnumerot(?int $geGamnumerot): static
    {
        $this->geGamnumerot = $geGamnumerot;

        return $this;
    }

    public function getGeGamincrement(): ?int
    {
        return $this->geGamincrement;
    }

    public function setGeGamincrement(?int $geGamincrement): static
    {
        $this->geGamincrement = $geGamincrement;

        return $this;
    }

    public function getGeGamlen(): ?int
    {
        return $this->geGamlen;
    }

    public function setGeGamlen(?int $geGamlen): static
    {
        $this->geGamlen = $geGamlen;

        return $this;
    }

    public function getGeGamtyperacine(): ?int
    {
        return $this->geGamtyperacine;
    }

    public function setGeGamtyperacine(?int $geGamtyperacine): static
    {
        $this->geGamtyperacine = $geGamtyperacine;

        return $this;
    }

    public function getGeGamlenracine(): ?int
    {
        return $this->geGamlenracine;
    }

    public function setGeGamlenracine(?int $geGamlenracine): static
    {
        $this->geGamlenracine = $geGamlenracine;

        return $this;
    }

    public function getGeGamracine(): ?string
    {
        return $this->geGamracine;
    }

    public function setGeGamracine(?string $geGamracine): static
    {
        $this->geGamracine = $geGamracine;

        return $this;
    }

    public function getGeGamtypecomplt(): ?int
    {
        return $this->geGamtypecomplt;
    }

    public function setGeGamtypecomplt(?int $geGamtypecomplt): static
    {
        $this->geGamtypecomplt = $geGamtypecomplt;

        return $this;
    }

    public function getGeGamlencomplt(): ?int
    {
        return $this->geGamlencomplt;
    }

    public function setGeGamlencomplt(?int $geGamlencomplt): static
    {
        $this->geGamlencomplt = $geGamlencomplt;

        return $this;
    }

    public function getGeCondinumerot(): ?int
    {
        return $this->geCondinumerot;
    }

    public function setGeCondinumerot(?int $geCondinumerot): static
    {
        $this->geCondinumerot = $geCondinumerot;

        return $this;
    }

    public function getGeCondiincrement(): ?int
    {
        return $this->geCondiincrement;
    }

    public function setGeCondiincrement(?int $geCondiincrement): static
    {
        $this->geCondiincrement = $geCondiincrement;

        return $this;
    }

    public function getGeCondilen(): ?int
    {
        return $this->geCondilen;
    }

    public function setGeCondilen(?int $geCondilen): static
    {
        $this->geCondilen = $geCondilen;

        return $this;
    }

    public function getGeCondityperacine(): ?int
    {
        return $this->geCondityperacine;
    }

    public function setGeCondityperacine(?int $geCondityperacine): static
    {
        $this->geCondityperacine = $geCondityperacine;

        return $this;
    }

    public function getGeCondilenracine(): ?int
    {
        return $this->geCondilenracine;
    }

    public function setGeCondilenracine(?int $geCondilenracine): static
    {
        $this->geCondilenracine = $geCondilenracine;

        return $this;
    }

    public function getGeCondiracine(): ?string
    {
        return $this->geCondiracine;
    }

    public function setGeCondiracine(?string $geCondiracine): static
    {
        $this->geCondiracine = $geCondiracine;

        return $this;
    }

    public function getGeConditypecomplt(): ?int
    {
        return $this->geConditypecomplt;
    }

    public function setGeConditypecomplt(?int $geConditypecomplt): static
    {
        $this->geConditypecomplt = $geConditypecomplt;

        return $this;
    }

    public function getGeCondilencomplt(): ?int
    {
        return $this->geCondilencomplt;
    }

    public function setGeCondilencomplt(?int $geCondilencomplt): static
    {
        $this->geCondilencomplt = $geCondilencomplt;

        return $this;
    }

    public function getGeCbartnumerot(): ?int
    {
        return $this->geCbartnumerot;
    }

    public function setGeCbartnumerot(?int $geCbartnumerot): static
    {
        $this->geCbartnumerot = $geCbartnumerot;

        return $this;
    }

    public function getGeCbartnorme(): ?int
    {
        return $this->geCbartnorme;
    }

    public function setGeCbartnorme(?int $geCbartnorme): static
    {
        $this->geCbartnorme = $geCbartnorme;

        return $this;
    }

    public function getGeCbartlen(): ?int
    {
        return $this->geCbartlen;
    }

    public function setGeCbartlen(?int $geCbartlen): static
    {
        $this->geCbartlen = $geCbartlen;

        return $this;
    }

    public function getGeCbarttyperacine(): ?int
    {
        return $this->geCbarttyperacine;
    }

    public function setGeCbarttyperacine(?int $geCbarttyperacine): static
    {
        $this->geCbarttyperacine = $geCbarttyperacine;

        return $this;
    }

    public function getGeCbartlenracine(): ?int
    {
        return $this->geCbartlenracine;
    }

    public function setGeCbartlenracine(?int $geCbartlenracine): static
    {
        $this->geCbartlenracine = $geCbartlenracine;

        return $this;
    }

    public function getGeCbartracine(): ?string
    {
        return $this->geCbartracine;
    }

    public function setGeCbartracine(?string $geCbartracine): static
    {
        $this->geCbartracine = $geCbartracine;

        return $this;
    }

    public function getGeCbgamnumerot(): ?int
    {
        return $this->geCbgamnumerot;
    }

    public function setGeCbgamnumerot(?int $geCbgamnumerot): static
    {
        $this->geCbgamnumerot = $geCbgamnumerot;

        return $this;
    }

    public function getGeCbgamincrement(): ?int
    {
        return $this->geCbgamincrement;
    }

    public function setGeCbgamincrement(?int $geCbgamincrement): static
    {
        $this->geCbgamincrement = $geCbgamincrement;

        return $this;
    }

    public function getGeCbgamnorme(): ?int
    {
        return $this->geCbgamnorme;
    }

    public function setGeCbgamnorme(?int $geCbgamnorme): static
    {
        $this->geCbgamnorme = $geCbgamnorme;

        return $this;
    }

    public function getGeCbgamlen(): ?int
    {
        return $this->geCbgamlen;
    }

    public function setGeCbgamlen(?int $geCbgamlen): static
    {
        $this->geCbgamlen = $geCbgamlen;

        return $this;
    }

    public function getGeCbgamtyperacine(): ?int
    {
        return $this->geCbgamtyperacine;
    }

    public function setGeCbgamtyperacine(?int $geCbgamtyperacine): static
    {
        $this->geCbgamtyperacine = $geCbgamtyperacine;

        return $this;
    }

    public function getGeCbgamlenracine(): ?int
    {
        return $this->geCbgamlenracine;
    }

    public function setGeCbgamlenracine(?int $geCbgamlenracine): static
    {
        $this->geCbgamlenracine = $geCbgamlenracine;

        return $this;
    }

    public function getGeCbgamracine(): ?string
    {
        return $this->geCbgamracine;
    }

    public function setGeCbgamracine(?string $geCbgamracine): static
    {
        $this->geCbgamracine = $geCbgamracine;

        return $this;
    }

    public function getGeCbgamtypecomplt(): ?int
    {
        return $this->geCbgamtypecomplt;
    }

    public function setGeCbgamtypecomplt(?int $geCbgamtypecomplt): static
    {
        $this->geCbgamtypecomplt = $geCbgamtypecomplt;

        return $this;
    }

    public function getGeCbgamlencomplt(): ?int
    {
        return $this->geCbgamlencomplt;
    }

    public function setGeCbgamlencomplt(?int $geCbgamlencomplt): static
    {
        $this->geCbgamlencomplt = $geCbgamlencomplt;

        return $this;
    }

    public function getGeCbcondinumerot(): ?int
    {
        return $this->geCbcondinumerot;
    }

    public function setGeCbcondinumerot(?int $geCbcondinumerot): static
    {
        $this->geCbcondinumerot = $geCbcondinumerot;

        return $this;
    }

    public function getGeCbcondiincrement(): ?int
    {
        return $this->geCbcondiincrement;
    }

    public function setGeCbcondiincrement(?int $geCbcondiincrement): static
    {
        $this->geCbcondiincrement = $geCbcondiincrement;

        return $this;
    }

    public function getGeCbcondinorme(): ?int
    {
        return $this->geCbcondinorme;
    }

    public function setGeCbcondinorme(?int $geCbcondinorme): static
    {
        $this->geCbcondinorme = $geCbcondinorme;

        return $this;
    }

    public function getGeCbcondilen(): ?int
    {
        return $this->geCbcondilen;
    }

    public function setGeCbcondilen(?int $geCbcondilen): static
    {
        $this->geCbcondilen = $geCbcondilen;

        return $this;
    }

    public function getGeCbcondityperacine(): ?int
    {
        return $this->geCbcondityperacine;
    }

    public function setGeCbcondityperacine(?int $geCbcondityperacine): static
    {
        $this->geCbcondityperacine = $geCbcondityperacine;

        return $this;
    }

    public function getGeCbcondilenracine(): ?int
    {
        return $this->geCbcondilenracine;
    }

    public function setGeCbcondilenracine(?int $geCbcondilenracine): static
    {
        $this->geCbcondilenracine = $geCbcondilenracine;

        return $this;
    }

    public function getGeCbcondiracine(): ?string
    {
        return $this->geCbcondiracine;
    }

    public function setGeCbcondiracine(?string $geCbcondiracine): static
    {
        $this->geCbcondiracine = $geCbcondiracine;

        return $this;
    }

    public function getGeCbconditypecomplt(): ?int
    {
        return $this->geCbconditypecomplt;
    }

    public function setGeCbconditypecomplt(?int $geCbconditypecomplt): static
    {
        $this->geCbconditypecomplt = $geCbconditypecomplt;

        return $this;
    }

    public function getGeCbcondilencomplt(): ?int
    {
        return $this->geCbcondilencomplt;
    }

    public function setGeCbcondilencomplt(?int $geCbcondilencomplt): static
    {
        $this->geCbcondilencomplt = $geCbcondilencomplt;

        return $this;
    }
}
