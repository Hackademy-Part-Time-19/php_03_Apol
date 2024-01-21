<?php

class Company{
    public $Name;
    public $Location;
    public $TotEmployess;
    static public $AvgWage=1500;
    static public $tot;

    public function __construct($NamE, $LocatioN, $TotEmployesS=0)
    {
        $this->Name = $NamE;
        $this->Location = $LocatioN;
        $this->TotEmployess = $TotEmployesS;
    }
    public function Report(){
        if($this->TotEmployess<=0){
            echo "L'azienda $this->Name con sede in $this->Location non ha dipendenti.\n";
        } else{
            echo "L'azienda $this->Name con sede in $this->Location ha ben $this->TotEmployess dipendenti.\n";
        }
    }
    public function StipendiAziende(){
       return $this->TotEmployess*self::$AvgWage*12;
    }

    public function StipendiAziendeMensili($mese){
        return $this->TotEmployess*self::$AvgWage*$mese;
    }

    public function TotaleAziende(){
        self::$tot+=$this->StipendiAziende();
    }
}

$Company1= new Company("Apple", " Cupertino",137000);
$Company2= new Company("Google", "California",180000);
$Company3= new Company("Xbox", "Seattle",5000);
$Company4= new Company("PlayStation", "London",6800);
$Company5= new Company("Nintendo", "Kyoto");


/*  echo $Company1->StipendiAziendeMensili((int)readline('Inserire il numero di mesi per vedere la spesa: ') ) . "\n";
 */

 $Company1->TotaleAziende();
 $Company2->TotaleAziende();
 $Company3->TotaleAziende();
 $Company4->TotaleAziende();
 $Company5->TotaleAziende();
 echo "Il totale delle spese di tutte le azziende e di ". Company   ::$tot ."$" ;