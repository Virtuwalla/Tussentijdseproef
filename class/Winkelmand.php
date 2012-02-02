<?php


class Winkelmand {
    
    public $mand =array();
    
    public function toevoegenAanMand($items)
    {
                
            foreach ($this->mand as $key -> $value) {
                if ($this->mand[$key]['id'] === $items ['id']){
                    $this->mand[$key]['aantal'] += $items['aantal'];
                    return; //we stoppen in deze method, return is break voor methods
                }
                
                
            }         
        
            //voeg een nieuw product toe
            $this->mand[] = $items;
    }

    public function verwijderenUitMand()
           {
            //we lussen over de $this->mand en controleren of er reeds een element
            //met hetzelfde id in onze mand aanwezig is
        
            foreach ($this->mand as $key -> $value) {
                if ($this->mand[$key]['id'] === $items ['id']){
                    
                    if($this->mand[$key]['aantal']>$items('aantal')){
                       $this->mand[$key]['aantal'] -= $items['aantal'];
                    return; //we stoppen in deze method, return is break voor methods
                }else{
                    unset($this->mand[$key]);
                }   
            }         
        }
    }
    public function mandWeergeven()
    {
        return $this->mand;
    }

    public function mandLaagmaken()
    {
             $this->mand = array();
    }
}
?>
